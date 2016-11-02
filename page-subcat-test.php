<?php
/*
Template Name: SubCat Test
 */
get_header();
get_template_part('content', 'header-lite');


?>

<div class="cover-padder"></div>
<?php //get_template_part('content', 'covers'); ?>
<p id="gallery"></p>
<div class="fullwidth">
	<div class="work-title"><?php echo $title =  get_the_title(); ?></div>
</div>







<!-- RESeT -->
<?php wp_reset_query(); ?>
<?php

$args = array(  'post_type' => 'product', 
 								'product_cat' => 'functional-ceramics',
 								'posts_per_page' => -1,
 								'columns' => '3', 
 								'orderby' => 'menu_order',
 								'order' => 'ASC' 							
 								);
 
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  if(has_post_thumbnail()){ ?>
		<li><?php echo 'foo'; ?></li>
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
	<?php woocommerce_subcats_from_parentcat_by_NAME('Functional Ceramics');  ?>
<?php endwhile;

wp_reset_query(); ?>
<div class="clearfix"></div>
<div class="padder"></div>
<div class="center col-md-12">
	<i class="fa fa-chevron-up to-top"></i>
</div>
<div class="cover-padder downlo"></div>

<?php get_footer(); ?>