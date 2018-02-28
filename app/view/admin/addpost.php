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
<?php if (isset($posterror)) {
	 foreach ($posterror as $key => $value) {
	 	switch ($key) {
	 		case 'title':
	 			foreach ($value as $val ) {
	 				echo "Title: ".$val."<br>";
	 			}
	 			break;
	 		case 'content':
	 			foreach ($value as $val ) {
	 				echo "Content: ".$val."<br>";
	 			}
	 			break;
	 		case 'category':
	 			foreach ($value as $val ) {
	 				echo "Category: ".$val."<br>";
	 			}
	 			break;
	 		
	 		default:
	 			# code...
	 			break;
	 	}
	 }
}
?>	
	<div class="row " style="margin: 50px auto;">
		<form action= "<?php echo BASE_URL ;?>/Admin/addPost" method="POST">
		<div class="col-sm-7">
			<label>Title</label><br>
			<input class="title" type="text" name="title">
		</div>
		<div class="col-sm-7">
			<label>Content</label><br>
			<textarea id="editor"  class="content" name="content"></textarea>
		</div>
		<div class="col-sm-7">
			<label>Category</label><br>
			<select name="category">
				<option value="">select</option>
				<?php foreach ($category  as   $value) { ?>
	
				 	<option value="<?php echo $value['id']?>"><?php echo $value['catname']?></option>

				<?php }	?>
					 	
			</select>
		</div>
		<div class="col-sm-7">
			<input type="submit" value="Update" name="">
		</div>
		</form>
	</div>

</div>
