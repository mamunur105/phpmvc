<script src="https://kendo.cdn.telerik.com/2018.1.221/js/kendo.all.min.js"></script>
<script>
    $(document).ready(function() {
        // create Editor from textarea HTML element with default set of tools
        $("#editor").kendoEditor({ resizable: {
            content: true,
            toolbar: true
        }});
    });
</script>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

	<style type="text/css">
		select,input,.content,.title{
			max-width: 700px;
			width: 100%;
			margin: 10px 0;
			padding: 10px;
		}
		.content{height: 200px;		}
	</style>
	<div class="row " style="margin: 50px auto;">
<?php if (isset($Postdata)) {
 foreach ( $Postdata as $value ) {?>

		<form action= "<?php echo BASE_URL ;?>/Admin/upDatePost/<?php echo $value['id']?>" method="POST">
		

		<div class="col-sm-7">
			<label>Title</label><br>
			<input  type="hidden" name="id" value="<?php echo $value['id']?>">
	<input class="title" type="text" name="title" value="<?php echo $value['title']?>">
		</div>
		<div class="col-sm-7">
			<label>Content</label><br>
			<textarea id="editor"  class="content" name="content"> <?php echo $value['content']?> </textarea>
		</div>
		<div class="col-sm-7">
			<label>Category</label><br>
			<select name="category">
				<option >select</option>
				<?php  if (isset($category)) { foreach ($category  as   $categoryvalue) { ?>
					
				<option <?php echo  $selected = ($value['cat'] == $categoryvalue['id']) ? 'selected' : ''; ; ?>  value="<?php echo $categoryvalue['id']?>"><?php echo $categoryvalue['catname']?></option>

				<?php }} 	?>
					 	
			</select>
		</div>




		<div class="col-sm-7">
			<input type="submit" value="Update" name="">
		</div>
		</form>
<?php } } ?>

	</div>

</div>
