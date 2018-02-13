
<?php include 'app/view/header.php' ; ?>

<h1>Cat view </h1>
<?php

foreach ($category as  $value) {
	
	echo $value['catname'].'<br>';
}


?>
<?php include 'app/view/footer.php' ; ?>

