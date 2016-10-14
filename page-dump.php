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