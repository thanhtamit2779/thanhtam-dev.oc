$(document).ready(function(e) {
    /// OWL CAROUSEL
    $(".owl-carousel").each(function(index, el) {
        var config = $(this).data();
        config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
        config.smartSpeed="300";
        if($(this).hasClass('owl-style2')){
          config.animateOut="fadeOut";
          config.animateIn="fadeIn";    
        }
        $(this).owlCarousel(config);
    });

    $(".owl-carousel-vertical").each(function(index, el) {
        var config = $(this).data();
        config.navText = ['<span class="icon-up"></spam>','<span class="icon-down"></span>'];
        config.smartSpeed="900";
        config.animateOut="";
        config.animateIn="fadeInUp";
        $(this).owlCarousel(config);
    });

	// SCROLL TO TOP
	$(window).scroll(function () {
		if ($(this).scrollTop() > 1) {
			$('#to-top').css('display', 'block'); 
		} else {
			$('#to-top').css('display', 'none');
		}
	});
	$('#to-top').on('click', function () {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });
});