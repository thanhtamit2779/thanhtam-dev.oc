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

    // DISPLAY PRODUCT TAB
	$('.display-product-tab-list').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
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