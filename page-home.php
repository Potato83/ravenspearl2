<?php
/*
Template Name: Home Page 
 */
get_header();

$gallery = get_field('gallery');
get_template_part('content', 'header');
?>

<div class="btn menu-toggle show-menu">
	
	<span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>

</div>
    <div id="wrapper">
    	<div id="sidebar-wrapper">
    		<?php //get_sidebar(); ?>
        <!-- Sidebar -->
        <div><i class="fa fa-times menu-closer menu-toggle"></i></div>
			<?php
				  wp_nav_menu( array(
				    
				    'theme_location'  => 'secondary',                
				    'container'     => 'ul',
				    'container_class'	=> 'foo',
				    'container_id' => 'sidebar-wrapper',
				    
				    'menu_class'	=> 'sidebar-nav',

				  ) );

				?>
				</div> 
        

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <section id="home-page">
	<div class="row">

	<div class="col-md-12">
		<?php 
			if($gallery){
				for($i = 0; $i < count($gallery); $i++){
					echo '<div class="gallery-thumb col-sm-4"><div class="covers darken"'. ' id="img-' . ($i+1) .'"><img src="' . $gallery[$i]['cover_image']['url'] . '" alt="' . $gallery[$i]["cover_image"]["alt"] . ' "><div class="discipline"><div class="title-link">'. $gallery[$i]["cover_image"]["alt"] .'</div></div></div></div>';

				}
			}
		
		
		
		?>
	</div>
	<h2>HI THERE</h2>
</div>
		
	</div><!-- .row -->

</section><!-- #home-page -->

        </div>
        <!-- /#page-content-wrapper -->
<div id="gallery"></div>
        <div id="img-1-gall" class="gall">
        	
<?php get_template_part('content', 'product-sculpture'); ?>

</div>

<div id="img-2-gall" class="hide gall">
<?php get_template_part('content', 'product-ceramic'); ?>
<?php //get_template_part('content', 'product-lightbox'); ?>
</div>

<div id="img-3-gall" class="hide gall">
<?php get_template_part('content', 'product-tiles'); ?>

</div>
				

		

    <!-- </div>
     		<div class="center col-md-12">
					<i class="fa fa-chevron-up to-top" id="chevy1"></i>
				</div>    -->  




<?php get_footer(); ?>
<script type="text/javascript">
// $(function() {
// 	$('html, body').animate({ scrollTop: 60 }, 1200);
// 	console.log('you are on the home page');
// });
</script>   