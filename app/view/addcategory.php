<?php
	include "inc/header.php";
?>
<h1>Add category </h1>
<?php
if (isset($msg)) {
	echo $msg;
}


?>
<form action="http://localhost/mvc/Index/insertCategory" method="POST">
	<table>
		<tr>
			<td>Name</td>
			<td><input type ="text" name="name" required="1" /></td>
		</tr>
		<tr>
			<td>title</td>
			<td><input type ="text" name="title" required="1"/></td>
		</tr>
		<tr>
			<td>====>>>>></td>
			<td><input type = "submit" name="submit" value="Save" /></td>
		</tr>
	</table>
</form>

<?php include "inc/footer.php" ;?>