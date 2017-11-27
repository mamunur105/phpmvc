<?php
	include "inc/header.php";
?>
<h1>cat view </h1>
<?php

foreach ($cat as $kye => $value) {
	
	echo $value['id'].' ==> '.$value['name'].'<br>';
}


?>

<?php include "inc/footer.php" ;?>