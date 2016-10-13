<?php
/*
Template Name: Ceramics Page
 */
get_header();
get_template_part('content', 'header-lite');


?>

<div class="padder"></div>
<div class="fullwidth">
	<div class="work-title">ceramics</div>
</div>

<?php
$args = array(  'post_type' => 'product', 
 								'product_cat' => 'ceramic',
 								'posts_per_page' => -1,
 								'columns' => '3',  							
 								);
 
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  if(has_post_thumbnail()){ ?>
	
		<li class="product col-md-4">
		<a href="<?php echo the_post_thumbnail_url(); ?>" data-rel="lightbox" ><div class="thumb darken">
	<?php
		echo the_post_thumbnail( 'full', array('class' => 'img-responsive'));
		echo "</div></a>";
	} else{
		echo '';
	} ?>
		
		<a href="<?php echo the_permalink(); ?>" class="clearfix">info</a>
	</li>
<?php endwhile;
 wp_reset_query(); ?>

<?php //get_template_part('content', 'sidebar'); ?>
<?php //get_footer(); ?>