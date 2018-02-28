<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<h1>Edit  User </h1>
	<?php
if (isset($_GET['msg'])) {
	 $msges = unserialize(urldecode($_GET['msg'])) ;
	 foreach ($msges as $msg) {
	 	echo $msg ;
	 }
}

?>
<?php 

if (isset($userdata)) {

	foreach ($userdata as $value) {  ?>

<form action="<?php echo BASE_URL ;?>/User/updateUser/<?php echo $value['id']?>" method="POST">
	<table>

		
		<tr>
			<input type ="hidden" name="id" required="1" value="<?php echo $value['id']?>" />
		</tr>
		<tr>
			<td>Name</td>
			<td><input type ="text" name="name" required="1" value="<?php echo $value['username']?>" /></td>
		</tr>
		<tr>
			<td>title</td>
			<td><input type ="text" name="level" required="1" value="<?php echo $value['level']?>"  /></td>
		</tr>
		<tr>
			<td>====>>>>></td>
			<td><input type = "submit" name="submit" value="Save" /></td>
		</tr>

	</table>
</form>
<?php 	}} ?>
</div>