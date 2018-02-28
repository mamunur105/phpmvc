<style type="text/css">.action{display: flex;list-style: none;margin: 0;padding: 0;} .action li{min-width: 80px;flex:1;}.table tr{border-bottom: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;}</style>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<h1>Cat view </h1>

<?php
if (isset($_GET['msg'])) {
	 $msges = unserialize(urldecode($_GET['msg'])) ;
	 foreach ($msges as $msg) {
	 	echo $msg ;
	 }
}


?>
<table class="table">
	<tr>
		<th>Category Name</th>
		<th>Title</th>
		<th>Action</th>
	</tr>

	<?php foreach ($category as  $value): ?>

	<tr>
		<td> <?php  echo $value['catname']; ?></td>
		<td><?php  echo $value['title']; ?></td>
		<td>
			<ul class="action">
				<li><a href="<?php echo BASE_URL ;?>/Admin/editCategory/<?php  echo $value['id']; ?>">EDIT</a></li>
				<li><a onclick="return confirm('Are your sure to Delete ?')" href="<?php echo BASE_URL ;?>/Admin/deleteCatbyId/<?php  echo $value['id']; ?>">DELETE</a></li>
			</ul>
		</td>
	</tr>

<?php  endforeach; ?>
</table>












</div>
