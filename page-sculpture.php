<?php
/*
Template Name: Sculpture Page
 */
get_header();
get_template_part('content', 'header');


?>


<div class="cover-padder"></div>
<?php get_template_part('content', 'covers'); ?>
<div class="fullwidth">
	<div class="work-title">sculpture</div>
</div>


<?php
$args = array(  'post_type' => 'product', 
 								'product_cat' => 'sculpture',
 								'posts_per_page' => -1,
 								'columns' => '3',  							
 								);
 
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  if(has_post_thumbnail()){ ?>
	
		<li class="product col-md-4">
		<a href="<?php echo the_post_thumbnail_url(); ?>" data-rel="lightbox" ><div class="thumb darken">	<?php
		echo the_post_thumbnail( 'full');
		echo "</div></a>";
	} else{
		echo '';
	} ?>
		
		<a href="<?php echo the_permalink(); ?>" class="clearfix">info</a>
	</li>
<?php endwhile;
wp_reset_query(); ?>
<div class="clearfix"></div>
<div class="cover-padder"></div>
<script>
	// console.log('sculpture page');
	// $('.thumb>img').each(function(){
	// 	var high = $(this).attr('height');
	// 	var wide = $(this).attr('width');
	// 	console.log("height: " + high);
	// 	console.log("width: " + wide);
	// 	if(high > wide){
	// 		console.log("wide");
	// 	} else if (wide > high){
	// 		console.log("tall");
	// 	}
	// });
</script>

<?php //get_template_part('content', 'sidebar'); ?>
<?php get_footer(); ?>