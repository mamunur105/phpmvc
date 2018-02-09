<?php
	include "inc/header.php";
?>
<h1>Cat view </h1>
<?php

foreach ($category as  $value) {
	
	echo $value['catname'].'<br>';
}


?>

<?php include "inc/footer.php" ;?>