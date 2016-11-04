<header>
	<?php get_template_part('content', 'menu'); ?>
	<div class="container-fluid banner native-shrunk"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div> 
</header>
	<div class="container-fluid main-container">
		<div class="site-content">
<script>
$(function() {

		var wideness = $(window).width();
		if(wideness > 767){
			wideness = "wide enough";
			console.log(wideness);	
			$('html, body').animate({ scrollTop: 875 }, 400);
    	console.log('content-header-work wide hello');
    	
		}else{
			$('html, body').animate({ scrollTop: 300 }, 400);
    	console.log('content-header-work narrow hello');
    	
		}
   
   	
    

	});
</script>
			