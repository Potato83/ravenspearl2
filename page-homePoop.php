<?php
/*
Template Name: Homexx Page
 */
get_header();
$gallery = get_field('gallery');
?>
<div class="btn menu-toggle show-menu">TOG</div>
    <div id="wrapper">
    	<div id="sidebar-wrapper">
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
					echo '<div class="gallery-thumb col-sm-4"><div class="covers"'. ' id="img-' . ($i+1) .'"><img src="' . $gallery[$i]['cover_image']['url'] . '" alt="' . $gallery[$i]["cover_image"]["alt"] . ' "><div class="discipline"><div class="title-link">'. $gallery[$i]["cover_image"]["alt"] .'</div></div></div></div>';
				}
			}
		
		
		
		?>
	</div>
<div class="padder col-md-12"></div>





<div id="img-1-gall" class="hide gall">
IMG ONE aka SCULPT

</div>

<div id="img-2-gall" class="hide gall">
<?php get_template_part('content', 'product'); ?>
</div>

<div id="img-3-gall" class="hide gall">
IMG 3 aka TILES

</div>




</div>

<!-- <ul id="alm-filter-nav">
  <li><a href="#" data-repeater="default" data-post-type="standard" data-posts-per-page="3" data-scroll="false" data-button-label="Load More Work">Recent Work</a></li>
  <li><a href="#" data-repeater="default" data-post-type="standard" data-posts-per-page="5" data-scroll="true" data-button-label="Load More Articles">Recent Articles</a></li>
</ul> -->

	
		
	
		
	</div><!-- .row -->

</section><!-- #home-page -->
        </div>
        <!-- /#page-content-wrapper -->
				
        
		
        

    </div>
 



<?php get_footer(); ?>