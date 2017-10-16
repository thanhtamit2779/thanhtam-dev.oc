$(document).ready(function() {
    // OWL CAROUSEL
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

    // OWL CAROUSEL VERTICAL
    $(".owl-carousel-vertical").each(function(index, el) {
        var config   = $(this).data();
        config.navText = ['<span class="icon-up"></spam>','<span class="icon-down"></span>'];
        config.smartSpeed="900";
        config.animateOut="";
        config.animateIn="fadeInUp";
        $(this).owlCarousel(config);
    });

	// SCROLL TO TOP
	$('html, body').scroll(function () {
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

    // FIXED MENU
    if(window.innerWidth >= 768) {
        $('html, body').scroll(function () {
            if ($(this).scrollTop() > 40) {
                $('.header-top').parent().addClass('header-fixed');
                $('.header-top').addClass('fixed-nav'); 
                $('.header-top .hidden').addClass('flag-hidden').removeClass('hidden');
                $('.header-top .show-text').addClass('hidden-text').removeClass('show-text');
                $('#menu').css('display', 'none') ;
            } else {
                $('.header-top').parent().removeClass('header-fixed');
                $('.header-top').removeClass("fixed-nav");
                $('.header-top .flag-hidden').addClass('hidden').removeClass('flag-hidden');
                $('.header-top .hidden-text').addClass('show-text').removeClass('hidden-text');
                $('#menu').css('display', 'block') ;
            }
        });
    }

	// ẨN HIỆN DANH MỤC SẢN PHẨM
    $('#icon-category').click(function() { 
        $('.icon-show-category').slideToggle('fast');
        $('#menu').slideToggle('fast');
	});
});