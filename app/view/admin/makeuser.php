
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<h1>Add New User </h1>
<?php
if (isset($msg)) {
	echo $msg;
}

?>

		<form action="http://localhost/phpmvc/User/addUser" method="POST">
			<table>
				<tr>
					<td>Username</td>
					<td><input type ="text" name="username" required="1" /></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type ="password" name="password" required="1"/></td>
				</tr>
				<tr>
					<td>User level</td>
					<td>
						<select name="level">
							<option selected value="1">Author</option>
							<option value="2"> Contributor </option>
							<option value="3" > Subscriber </option>
						</select>
				</td>
				</tr>
				<tr>
					<td>====>>>>></td>
					<td><input type = "submit" name="submit" value="Save" /></td>
				</tr>
			</table>
		</form>

</div>

