<?php
/*
Template Name: Gallery TEST
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
<?php $subcats = woocommerce_subcats_from_parentcat_by_NAME($title);
	for ($i=0; $i < count($subcats); $i++) { 
		$args = array(  'post_type' => 'product', 
 								'product_cat' => $subcats[$i],
 								'posts_per_page' => -1,
 								'columns' => '3', 
 								'orderby' => 'menu_order',
 								'order' => 'ASC' 							
 								);
 
$loop = new WP_Query( $args ); ?>
<div class="work-title"><?php echo $subcats[$i]; ?></div>
<?php while ( $loop->have_posts() ) : $loop->the_post();

  if(has_post_thumbnail()){ ?>
  <ul>
<!-- <li><?php echo $subcats[$i] . "I: " . $i; ?></li>		 -->
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
</ul>

<?php endwhile;
	}

?>
<?php


wp_reset_query(); ?>
<div class="clearfix"></div>
<div class="padder"></div>
<div class="center col-md-12">
	<i class="fa fa-chevron-up to-top"></i>
</div>
<div class="cover-padder downlo"></div>

<?php get_footer(); ?>