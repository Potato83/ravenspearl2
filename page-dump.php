<!-- comments.php -->
<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'ravenspearl' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'ravenspearl' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'ravenspearl' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'ravenspearl' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'ravenspearl' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'ravenspearl' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'ravenspearl' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ravenspearl' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->









<!-- index.php -->
<?php
		 if ( have_posts() ) :

		 	if ( is_home() && ! is_front_page() ) : ?>
				<header>
		 			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?>(REGGE)</h1>

		 		</header>
				
		 	<?php
		 	endif;
		 	?>

		<div id="single-post-container">CONTAINER HERE</div>

		<?php	/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>





<!-- sessions -->
if(isset($_SESSION['myKey'])) {
    $value = $_SESSION['myKey'];
} else {
    $value = '';
}
echo $value;

/** Sessions **/
add_action('init', 'myStartSession', 1);
add_action('wp_logout', 'myEndSession');
add_action('wp_login', 'myEndSession');

function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

function myEndSession() {
    session_destroy ();
}
<?php 
global $post;
$terms = get_the_terms( $post->ID, 'product_cat' );
foreach ($terms as $term) {
    $product_cat_id = $term->term_id;
    break;
}

$current_cat = strtolower($product->get_categories( ', ' . _n( '', '', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) )); 
echo $current_cat;
$_SESSION['myKey'] = $current_cat;

?>



<!-- lightbox -->
<li class="product col-md-4">    
    <a class="thumb darken" href="<?php echo woocommerce_placeholder_img_src()?>" data-rel="lightbox" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
        
        
        <?php echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?></a>
        <br />
  </li>




<!-- GOOD stuff -->

<?php
$args = array(  'post_type' => 'product', 
 								'product_cat' => 'ceramic',
 								'posts_per_page' => -1,
 								'columns' => '3',  							
 								);
 
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
  <li class="product col-md-4">    
    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>hello">
        <h3><?php the_title(); ?></h3><br /><span class="price"><?php echo $product->get_price_html(); ?></span><br />
        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?></a>
        <span class="motangan"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></span><br />
  </li>
    <?php
/**
 * woocommerce_pagination hook
 *
 * @hooked woocommerce_pagination - 10
 * @hooked woocommerce_catalog_ordering - 20
 */
do_action( 'woocommerce_pagination' );
        ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>


<!-- to here -->






<!--<?php
              wp_nav_menu( array(
                
                'theme_location'  => 'primary',                
                'container'     => 'div',
                'container_class' => 'navbar-collapse collapse',
                'menu_class'    => 'nav navbar-nav'                
              ) );
            ?>-->






<?php

				$args = array(
					'post_type' => 'product',
					'meta_key' => '_featured',
					'meta_value' => 'yes',
					'posts_per_page' => 1
				);

				$featured_query = new WP_Query( $args );
					
				if ($featured_query->have_posts()) : 
					
					while ($featured_query->have_posts()) : 
						
						$featured_query->the_post();
						
						$product = get_product( $featured_query->post->ID );
						
						// Output product information here
						
					endwhile;
					
				endif;

				

				wp_reset_query(); // Remember to reset








			?>












			<?php 

	$posts = get_posts(array(
		'numberposts'	=> -1,
		'post_type'		=> 'post',
		'meta_key'		=> 'color',
		'meta_value'	=> 'red'
	));

	if( $posts ): ?>
		
		<ul>
			
		<?php foreach( $posts as $post ): 
			
			setup_postdata( $post )
			
			?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
		
		<?php endforeach; ?>
		
		</ul>
		
		<?php wp_reset_postdata(); ?>

	<?php endif; ?>





	<!-- <ul id="alm-filter-nav">
  <li><a href="#" data-repeater="default" data-post-type="standard" data-posts-per-page="3" data-scroll="false" data-button-label="Load More Work">Recent Work</a></li>
  <li><a href="#" data-repeater="default" data-post-type="standard" data-posts-per-page="5" data-scroll="true" data-button-label="Load More Articles">Recent Articles</a></li>
</ul> -->