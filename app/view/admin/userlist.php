<style type="text/css">.action{display: flex;list-style: none;margin: 0;padding: 0;} .action li{min-width: 80px;flex:1;}.table tr{border-bottom: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;}</style>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<h1>User view </h1>

<?php
if (isset($_GET['msg'])) {
	 $msges = unserialize(urldecode($_GET['msg'])) ;
	 foreach ($msges as $msg) {
	 	echo $msg ;
	 }
}


?>
<table class="table">
	<thead>
		<th width="20%">Serial No</th>
		<th width="40%">User Name</th>
		<th width="20%" >Level</th>
		<th width="20%" >Action</th>
	</thead>
	<tbody>

	<?php  $i = 0 ;  foreach ($userList as  $value): $i =  $i + 1  ;  ?>

	<tr>

		<td> <?php  echo $i; ?></td>
		<td> <?php  echo $value['username']; ?></td>
		<td> <?php  echo $value['level']; ?></td>

		<td>
			<ul class="action">
				<li><a href="<?php echo BASE_URL ;?>/User/editUser/<?php  echo $value['id']; ?>">EDIT</a></li>
				<li><a onclick="return confirm('Are your sure to Delete ?')" href="<?php echo BASE_URL ;?>/User/deleteUserbyId/<?php  echo $value['id']; ?>">DELETE</a></li>
			</ul>
		</td>
	</tr>

<?php  endforeach; ?>
</tbody>
</table>


</div>
