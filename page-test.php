<?php
/*
Template Name: Test Page
 */
get_header();



?>

<div class="container">
	<section id="test-page">
		<div class="row">
			hello!!!!!!  this is the version where the ajax didn't work, but does now
						<p>
								<?php while ( have_posts() ) : the_post(); ?>
						
									<?php the_content(); ?>
									
								<?php endwhile; ?>

								<?php //[ajax_load_more post_type="post" post_format="standard"]; ?>

						</p>
		</div><!-- .row -->
	
	</section><!-- #home-page -->
</div>

<?php //get_template_part('content', 'sidebar'); ?>
<?php get_footer(); ?>