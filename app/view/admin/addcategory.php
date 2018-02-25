
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<h1>Add category </h1>
<?php
if (isset($msg)) {
	echo $msg;
}

?>

		<form action="http://localhost/phpmvc/Admin/insertCategory" method="POST">
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

</div>

