<!-- dumb dads -->
<?php 


$parent=get_permalink();
	if (preg_match("/tiles/", $parent)) {
    $dad = "tiles";
    //echo $dad;
	} else if (preg_match("/ceramic-sculpture/", $parent)){
		$dad = "ceramic-sculpture";
    //echo $dad;
	} else if (preg_match("/fibers/", $parent)){
		$dad = "fibers";
    //echo $dad;
	} else if (preg_match("/beads/", $parent)){
		$dad = "beads";
    //echo $dad;
	} else if (preg_match("/costumes/", $parent)){
		$dad = "costumes";
    //echo $dad;
	} else if (preg_match("/functional-ceramics/", $parent)){
		$dad = "functional-ceramics";
    //echo $dad;
	} else {
		$dad = "";
    //echo $dad;
	}
?>






<!-- content-header js -->
<header>
	<?php get_template_part('content', 'menu'); ?>
	<div class="container-fluid banner"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Raven's Pearl</a></div> 
</header>
	<div class="container-fluid main-container">
		<div class="site-content">
<script> 
var blog = '<?php if ( is_home() || is_single() || is_archive() || is_search() || is_404()  ) {
  echo "blog";
} ?>';



var hitherto = '<?php 


$ref=@$_SERVER[HTTP_REFERER];
	if (preg_match("/work/", $ref)) {
    $referer = "work";
    echo $referer;
	} else if (preg_match("/ravenspearl/", $ref)){
		$referer = "home";
    echo $referer;
	}else {
		$referer = "elsewhere";
    echo $referer;
	}
?>';	
console.log(hitherto);

var HereNow = '<?php echo get_page_template_slug( $post_id ); ?>';
var blog = '<?php if ( is_home() || is_single() || is_archive() || is_search() || is_404()  ) {
  echo "blog";
} ?>';
if(HereNow == 'page-gallery.php'){
	HereNow = 'workpage';
}
if(blog == 'blog'){
	HereNow = 'blog';
}


 if(hitherto == 'elsewhere'){
	$(function() {
		console.log('hitherto == "elsewhere"');
		setTimeout(
		  function() 
		  {
		    $('.banner').addClass('shrunk');
		  }, 3975);
   
   setTimeout(
		  function() 
		  {
		    $('html, body').animate({ scrollTop: 220 }, 1000);
		  }, 3500);

   // setTimeout(
		 //  function() 
		 //  {
		 //    $('html, body').animate({ scrollTop: 225 }, 1000);
		 //  }, 3500);
    

	});

}else if (hitherto == "home" && HereNow == "workpage"){
	$(function() {
		//$('i.to-top').addClass('hide');
    $('.banner').addClass('native-shrunk');
    //$('html, body').animate({ scrollTop: 700 }, 500);
    console.log('hitherto == "home" && HereNow == "workpage"');

	});
} else if (hitherto == 'home' ){
	$(function() {
		//$('i.to-top').addClass('hide');
    $('.banner').addClass('native-shrunk');
    $('html, body').animate({ scrollTop: 220 }, 500);
    console.log('hitherto == "home"');

	});
} else if (hitherto == 'work' && HereNow == "workpage"){
	$(function() {
   $('.banner').addClass('native-shrunk');
   //$('html, body').animate({ scrollTop: 700 }, 500);
   console.log('hitherto == "work" && HereNow == "workpage"');
  });
} else if (hitherto == 'work'){
	$(function() {
   $('.banner').addClass('native-shrunk');
   //console.log('no funny scroll today!');
   $('html, body').animate({ scrollTop: 220 }, 500);
   console.log('hitherto == "work"');
  });
}
console.log(HereNow);
</script>








<!-- index.php -->

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RavensPearl
 */

get_header(); 
get_template_part('content', 'header');
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="padder"></div>
		<?php
		 if ( have_posts() ) :

		 	if ( is_home() && ! is_front_page() ) : ?>
				<header>
		 			<h1 class="page-title screen-reader-text center"><?php single_post_title(); ?></h1>

		 		</header>
				
		 	<?php
		 	endif;
		 	?>

		
			
			<div class="container ">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 blog-container">
		
		<?php	/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_format() ); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
				<?php  if(has_post_thumbnail()){ ?>
				
				<?php
					echo the_post_thumbnail( 'thumbnail');
					echo '<div class="padder"></div>';
				} else{
					echo '';
				}

				the_excerpt();
				echo '<hr>';
			endwhile;

			//the_posts_navigation();
			// ^ not defined

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
					</div><!-- col-md-8 -->
					<!-- <div class="sidebar"> -->
						<?php get_template_part('content', 'sidebar'); ?>
					<!-- </div> -->
				</div><!-- row -->
			</div><!-- blog-container -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="padder"></div>

<?php get_footer(); ?>














<!-- sidebar / menu -->

   <?php
  // wp_nav_menu( array(
    
  //   'theme_location'  => 'secondary',                
  //   'container'     => 'div',
  //   'container_class' => 'menu-container',
  //   'menu_class'    => 'menu-ul'                
  // ) );
 ?>