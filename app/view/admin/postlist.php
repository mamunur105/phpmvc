<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<table>	
	<tr>	
		<th>No:</th>
		<th>Post Title	</th>
		<th> Post Content	</th>
		<th> Category	</th>
		<th> Action	</th>
	</tr>
	
	<?php $i = 0 ; foreach ($allpost as  $value): $i =  $i + 1  ; ?>
		
	<tr style="    vertical-align: top;    border-bottom: 1px solid;">
		<td style="width: 10%;"><?php  echo $i ;?></td>
		<td style="width: 20%;" ><?php  echo $value['title']; ?>	</td>
		<td style="width: 45%;"><?php $content = $value['content'];
					if (strlen($content) > 80 ) {
						$content = substr($content , 0 ,80);
						echo $content ;
					}else{
						echo $content ;
					}
					

				?> 	
		</td>
		<td style="width: 15%;" >
			<?php  foreach ($category as  $catid): ?>

			<?php  if ($catid['id'] == $value['cat']	) {
				echo $catid['catname'];
			} ?>	
			<?php    endforeach; ?>

		</td>
		


		<td  style="width: 10%;" > <a href="<?php echo BASE_URL ;?>/">Edit</a> || <a href="<?php echo BASE_URL ;?>/">Delete</a>	</td>
		<?php // echo "<br>"; ?>
	</tr>
	
	<?php    endforeach; ?>

</table>










</div>