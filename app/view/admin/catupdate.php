<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<h1>Update category </h1>
	<?php
if (isset($_GET['msg'])) {
	 $msges = unserialize(urldecode($_GET['msg'])) ;
	 foreach ($msges as $msg) {
	 	echo $msg ;
	 }
}

?>
<form action="<?php echo BASE_URL ;?>/Admin/updatecat" method="POST">
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

</div>