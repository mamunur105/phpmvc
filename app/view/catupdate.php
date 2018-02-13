<?php include 'app/view/header.php' ; ?>

<h1>Update category </h1>
<?php
if (isset($msg)) {
	echo $msg;
}


?>
<form action="http://localhost/phpmvc/Category/updatecat" method="POST">
	<table>
<?php 

if (isset($catdatabyid)) {

	foreach ($catdatabyid as $value) {  ?>

		
		<tr>
			<input type ="hidden" name="id" required="1" value="<?php echo $value['id']?>" />
		</tr>
		<tr>
			<td>Name</td>
			<td><input type ="text" name="name" required="1" value="<?php echo $value['catname']?>" /></td>
		</tr>
		<tr>
			<td>title</td>
			<td><input type ="text" name="title" required="1" value="<?php echo $value['title']?>"  /></td>
		</tr>
		<tr>
			<td>====>>>>></td>
			<td><input type = "submit" name="submit" value="Save" /></td>
		</tr>
<?php 	}} ?>
	</table>
</form>

<?php include 'app/view/footer.php' ; ?>
