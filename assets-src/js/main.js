$(function() {
    console.log( "ready!" );
    //$( ".gallery-thumb" ).first().addClass( "selected" );
    //$('.banner').addClass('shrunk');

});


$('.link-spoof').each(function(){
	$butt = $(this);
	var path = '#bio-' + $butt.attr('id');
	$butt.click(function(){
		$(path).fadeIn(400).removeClass('hide').promise().done(function(){
      $('body').addClass('no-scroll');
    });
		
	});
});

$('.closer').click(function(){
	$( '.bio' ).fadeOut(400);
  $('body').removeClass('no-scroll');
  
  
});

$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
        $( '.bio' ).fadeOut(400);
      	$('body').removeClass('no-scroll');   	
      
  	}
});

// $('.covers').each(function(){
//   $cover = $(this);
//   var id = $cover.attr('id'); 
//   var section = '#' + id + '-gall';
//   $cover.click(function(){
//     $(this).addClass('selected');
//     $(this).siblings().removeClass('selected');

//     if($('#wrapper').hasClass("toggled")){
//       $('.gall').fadeOut(150).promise().done(function(){
        
//         scrollToSection( '#gallery' );
//         $(section).fadeIn(800).removeClass('hide');
//     });
//     }else{
//       $("#wrapper").addClass("toggled");
//       $('.gall').fadeOut(50);
        
//         scrollToSectionPlus( '#gallery' );
//         $(section).fadeIn(800).removeClass('hide');
    
//     }
    
    
//   });
// });

$('.gallery-thumb').each(function(){
  $cover = $(this);
  $cover.click(function(){
    $(this).addClass('selected');
    $(this).parents('li.product-category').siblings('li.product-category').children('div.gallery-thumb').removeClass('selected');
    // $('i.to-top').removeClass('hide');
    // alert('ok');
  });
});



// $(".menu-toggle").click(function(e) {
//     e.preventDefault();
//     $("#wrapper").toggleClass("toggled");
//     console.log("toggle");
// });

$('.to-top').click(function(){
  $('body').animate({ scrollTop: 0 }, 400);
});


//$('.covers').on('click', function(e){


    // scrollToSection( '#gallery' );
    
    // return false;
//  })

// function scrollToSection( section_name ){

//   var scroll_to = $(section_name).offset().top;
//   $('html, body').animate({ scrollTop: scroll_to }, 650, function(){
//     window.location.hash = section_name;
//   } );
// }

// function scrollToSectionPlus( section_name ){

//   var scroll_to = $(section_name).offset().top + 100;
//   $('html, body').animate({ scrollTop: scroll_to }, 600, function(){
//     window.location.hash = section_name;
//   } );
// }


 
 
   

