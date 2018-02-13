<?php include 'app/view/header.php' ; ?>

<h1>Cat  by id </h1>
<?php

	
foreach ($catid as $kye => $value) {
	echo $value['id'].' ==> '.$value['category'].'<br>';
}


?>
<?php include 'app/view/footer.php' ; ?>
