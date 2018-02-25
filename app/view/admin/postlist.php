<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<?php
if (isset($_GET['msg'])) {
	 $msges = unserialize(urldecode($_GET['msg'])) ;
	 foreach ($msges as $msg) {
	 	echo $msg ;
	 }
}

?>

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>	
	<tr>	
		<th  style="width: 10%;" >No:</th>
		<th  style="width: 20%;" >Post Title	</th>
		<th style="width: 45%;" > Post Content	</th>
		<th  style="width: 15%;"  > Category	</th>
		<th> Action	</th>
	</tr>
</thead>	
<tbody>
	<?php $i = 0 ; foreach ($allpost as  $value): $i =  $i + 1  ; ?>
		
	<tr style="    vertical-align: top;    border-bottom: 1px solid;">
		<td><?php  echo $i ;?></td>
		<td><?php  echo $value['title']; ?>	</td>
		<td><?php  $content = $value['content'];
			echo $content = strlen($content) > 80 ? substr($content , 0 ,80):$content;

				?> 	
		</td>
		<td>	
			<?php echo  $value['catname']; ?>

		</td>
		


		<td  style="width: 10%;" > <a href="<?php echo BASE_URL ;?>/Admin/editPost/<?php echo  $value['id']; ?>">Edit</a> || <a href="<?php echo BASE_URL ;?>/Admin/deletePost/<?php echo  $value['id']; ?>">Delete</a>	</td>
	</tr>
	
	<?php    endforeach; ?>
</tbody>
</table>

</div>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
</script>