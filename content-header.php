<header>
	<?php get_template_part('content', 'menu'); ?>
	<div class="container-fluid banner"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Raven's Pearl</a></div> 
</header>
	<div class="container-fluid main-container">
		<div class="site-content">
<script> 
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

// var testing = '<?php echo get_permalink(); ?>';
// var workpage = '<?php  
// 	$ref= get_permalink();
// 	if (preg_match("/work/", $ref)) {
//     $referer = "workpage";
//     echo $referer;
// 	}else{
// 		$referer = "not workpage";
//     echo $referer;
// 	}
// ?>';

// console.log("page: " + workpage);

// if(workpage == 'workpage'){
	
// 	$(function() {
//   	$('html, body').animate({ scrollTop: 380 }, 50);

// 	});
// }

 if(hitherto == 'elsewhere'){
	$(function() {
		$('i.to-top').addClass('hide');
		setTimeout(
		  function() 
		  {
		    $('.banner').addClass('shrunk');
		  }, 1500);
   
   setTimeout(
		  function() 
		  {
		    $('html, body').animate({ scrollTop: 60 }, 2000);
		  }, 4000);
    

	});
} else if (hitherto == 'home'){
	$(function() {
		$('i.to-top').addClass('hide');
    $('.banner').addClass('native-shrunk');
    $('html, body').animate({ scrollTop: 60 }, 500);

	});
} else if (hitherto == 'work'){
	$(function() {
   $('.banner').addClass('native-shrunk');
   console.log('no funny scroll today!');
  });
}

</script>

