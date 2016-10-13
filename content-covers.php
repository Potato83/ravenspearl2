<!-- <p>
<?php $gallery = the_field('gallery', 'option'); ?>
<?php while(has_sub_field('gallery', 'option')): ?>
	<?php echo the_sub_field('test', 'option'); ?>
	<?php echo '</br>'; ?>
	<?php echo the_sub_field('cover_image'['url'], 'option'); ?>
	<?php echo '</br>'; ?>
<?php endwhile; ?>
</p> -->
<?php //if(has_sub_field('gallery', 'option')){
// 	echo 'yass'; 
// 	echo the_sub_field('cover_image', 'url');
// 	echo '</br>';
//  } else {
// 	echo 'nu';
// }
?>
<?php if (have_rows('gallery', 'option')): ?>
	<div class="row">
		<div class="col-md-12 main-covers">	
		
		<?php while(have_rows('gallery', 'option')): the_row(); ?>
			<div class="gallery-thumb col-sm-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?><?php the_sub_field('alt'); ?>"><div class="covers darken"><img src="<?php the_sub_field('cover_image'); ?>" alt="cov" width="300" height="300"><div class="discipline"><div class="title-link"><?php the_sub_field('alt'); ?></div></div></div></a></div>
		<!-- 	<li><?php the_sub_field('alt'); ?></li>
			<li><?php the_sub_field('cover_image'); ?></li> -->
			<?php //$linky = the_sub_field('alt'); ?>
			
		<?php endwhile; ?>
		
		</div>
	</div><!-- .row -->
<?php endif; ?>

<div class="row">
	<div class="col-md-12 main-covers">
		<?php 
			if($gallery){
				for($i = 0; $i < count($gallery); $i++){
					echo '<div class="gallery-thumb col-sm-4"><a href="'. $gallery[$i]["cover_image"]["alt"] .'"><div class="covers darken"'. ' id="img-' . ($i+1) .'"><img src="' . $gallery[$i]['cover_image']['url'] . '" width="300" height="300" alt="' . $gallery[$i]["cover_image"]["alt"] . ' "><div class="discipline"><div class="title-link">'. $gallery[$i]["cover_image"]["alt"] .'</div></div></div></a></div>';
				}
			}
		?>
	</div>
	
</div><!-- .row -->


<div class="row">
	<div class="col-md-12 main-covers">
		<?php 
			if(has_sub_field('gallery', 'option')){
				for($i = 0; $i < count($gallery); $i++){
					echo '<div class="gallery-thumb col-sm-4"><a href="'. $gallery[$i]["cover_image"]["alt"] .'"><div class="covers darken"'. ' id="img-' . ($i+1) .'"><img src="' . $gallery[$i]['cover_image']['url'] . '" width="300" height="300" alt="' . $gallery[$i]["cover_image"]["alt"] . ' "><div class="discipline"><div class="title-link">'. $gallery[$i]["cover_image"]["alt"] .'</div></div></div></a></div>';
				}
			}
		?>
	</div>
	
</div><!-- .row -->