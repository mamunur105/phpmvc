<?php
	include "inc/header.php";
?>
<h1>cat view </h1>
<?php

	
foreach ($catid as $kye => $value) {
	echo $value['id'].' ==> '.$value['category'].'<br>';
}


?>

<?php include "inc/footer.php" ;?>