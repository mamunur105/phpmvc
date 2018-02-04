<?php
	include "inc/header.php";
?>
<h1>cat view </h1>
<?php

foreach ($category as  $value) {
	
	echo $value['category'].'<br>';
}


?>

<?php include "inc/footer.php" ;?>