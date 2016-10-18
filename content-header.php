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


var HereNow = '<?php the_title(); ?>';
if(HereNow == "tiles" || HereNow == "ceramics" || HereNow == "sculpture"){
	HereNow = 'workpage';
}

 if(hitherto == 'elsewhere'){
	$(function() {
		//$('i.to-top').addClass('hide');
		console.log('hitherto == "elsewhere"');
		setTimeout(
		  function() 
		  {
		    $('.banner').addClass('shrunk');
		  }, 3475);
   
   setTimeout(
		  function() 
		  {
		    $('html, body').animate({ scrollTop: 220 }, 2750);
		  }, 1250);

   // setTimeout(
		 //  function() 
		 //  {
		 //    $('html, body').animate({ scrollTop: 225 }, 1000);
		 //  }, 3500);
    

	});
} else if (hitherto == "home" && HereNow == "workpage"){
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

