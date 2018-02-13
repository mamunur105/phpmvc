	<div class="left-content fix">
		
		<?php foreach ($postDataByID as $key => $value) { ?>

			<article class="post">
				<h1 class="title"><a href="<?php echo BASE_URL ;?>/Index/postDetails/<?php echo $value['id']?>"><?php echo $value['title']?> </a></h1>

				<?php echo $content = $value['content'];?> 

				<a href="<?php echo BASE_URL ;?>/Index/postByCat/<?php echo $value['cat']?>"><?php echo $value['catname']?> </a>
				<!-- <a href="#">cat one</a> -->
			</article>

		<?php  } ?>
	</div>
	


