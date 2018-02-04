<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mvc");


/**
 * @function    backupDatabaseTables
 * @author      CodexWorld
 * @link        http://www.codexworld.com
 * @usage       Backup database tables and save in SQL file
 */
function backupDatabaseTables($dbHost,$dbUsername,$dbPassword,$dbName,$tables = '*'){
    //connect & select the database
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

    //get all of the tables
    if($tables == '*'){
        $tables = array();
        $result = $db->query("SHOW TABLES");
        while($row = $result->fetch_row()){
            $tables[] = $row[0];
        }
    }else{
        $tables = is_array($tables)?$tables:explode(',',$tables);
    }
    $return = '';

    //loop through the tables
    foreach($tables as $table){
        $result = $db->query("SELECT * FROM $table");
        $numColumns = $result->field_count;

        // $return .= "DROP TABLE $table;";
        $return .= "";

        $result2 = $db->query("SHOW CREATE TABLE $table");
        $row2 = $result2->fetch_row();

        $return .= "\n\n".$row2[1].";\n\n";

        for($i = 0; $i < $numColumns; $i++){
            while($row = $result->fetch_row()){
                $return .= "INSERT INTO $table VALUES(";
                for($j=0; $j < $numColumns; $j++){
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                    if (isset($row[$j])) { $return .= '"'.$row[$j].'"' ; } else { $return .= '""'; }
                    if ($j < ($numColumns-1)) { $return.= ','; }
                }
                $return .= ");\n";
            }
        }

        $return .= "\n\n\n";
    }

    //save file
    $handle = fopen('dbbackup/db-backup-'.time().'.sql','w+');
    fwrite($handle,$return);
    fclose($handle);
    echo "done";
}


backupDatabaseTables(DB_HOST,DB_USER,DB_PASS,DB_NAME);
