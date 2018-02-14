<div class="search-form fix">
<form method="get" action="<?php echo BASE_URL ;?>/Index/search">
	<input type="text" name="kyeword">
	 <select name="catid">

	<?php foreach ($catlist  as   $value) { ?>
	
	 	<option value="<?php echo $value['id']?>"><?php echo $value['catname']?></option>

	<?php }	?>
	 	
	 </select>
	 <input type="submit" name="" />
</form>
</div>