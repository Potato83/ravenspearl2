<div class="padder"></div>
<div class="fullwidth">
	<div class="work-title">lightbox test</div>
</div>

<?php
$args = array(  'post_type' => 'product', 
 								'product_cat' => 'ceramic',
 								'posts_per_page' => -1,
 								'columns' => '3',  							
 								);
 
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
  <li class="product col-md-4">    
    <a class="thumb darken" href="" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
        
        
        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?></a>
        <br />
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