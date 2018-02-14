<div class="sidebar fix ">
	<h1>Category</h1>
	<ul>

		<?php if (isset($catlist)) {
		
		foreach ($catlist as $key => $value) { ?>

		<li><a href="<?php echo BASE_URL ;?>/Index/postByCat/<?php echo $value['id']?>"><?php echo $value['catname']?> </a></li>
		
		<?php } } ?>

	</ul>
	<h1>Letest Post</h1>
	<ul>
		<?php if (isset($letestPost)) {
		foreach ($letestPost as $key => $value) { ?>
			<li><a href="<?php echo BASE_URL ;?>/Index/postDetails/<?php echo $value['id']?>"><?php echo $value['title']?> </a></li>
		<?php } } ?>

	</ul>
</div>
