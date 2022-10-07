jQuery(document).ready(function($) {
      

	if ( $(window).width() > 768 ) {

	/* Equalize height of the bigBootstrap-elements */ 
		maxHeight =  $('.t3upcontentslider  .carousel-item > div').height();
	
	    $('.t3upcontentslider  .carousel-item > div').each(function(){
			if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
		});
	
		$('.t3upcontentslider  .carousel-item').css('min-height',maxHeight);
		$('.t3upcontentslider').css('min-height',maxHeight);
		
		
		
    /* end - Equalize height of the bgImage-elements */	 
	}

	$('.accordion-v3').on('click', function() {
	  if($(this).is(':checked')) {
	    $('#accordion .collapse').removeAttr('data-parent');
	  } else {
	    $('#accordion .collapse').attr('data-parent','#accordion');
	  }
	});




});