<?php
/*
Template Name: Home Page 
 */
get_header();


get_template_part('content', 'header');
?>

<!-- Page Content -->

<section id="home-page">
	
	<?php get_template_part('content', 'covers'); ?>

</section><!-- #home-page -->

<?php get_footer(); ?>
