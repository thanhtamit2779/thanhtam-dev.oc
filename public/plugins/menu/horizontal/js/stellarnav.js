(function($) {
	$.fn.stellarNav = function(options, width, breakpoint) {

		var $nav, $width, $breakpoint;
		nav = $(this);
		width = $(window).width();

		// default settings
		var settings = $.extend( {
			theme     	: 'plain', // adds default color to nav. (light, dark)
			breakpoint	: 768, // number in pixels to determine when the nav should turn mobile friendly
			phoneBtn	: false, // adds a click-to-call phone link to the top of menu - i.e.: "18009084500"
	    	locationBtn	: false, // adds a location link to the top of menu - i.e.: "/location/", "http://site.com/contact-us/"
			sticky     	: false, // makes nav sticky on scroll (desktop only)
			position	: 'static', // 'static' or 'top' - when set to 'top', this forces the mobile nav to be placed absolutely on the very top of page 
			showArrows	: true, // shows dropdown arrows next to the items that have sub menus
			closeBtn    : false, // adds a close button to the end of nav
			scrollbarFix: false, // fixes horizontal scrollbar issue on very long navs,
			text_menu 	: 'Menu'
		}, options );

		return this.each( function() {

			// Theme menu
			if (settings.theme == 'light' || settings.theme == 'dark') {
				nav.addClass(settings.theme);
			}

			// Màn hình về responsive
			if (settings.breakpoint) {
				breakpoint = settings.breakpoint;
			}

			// Nếu hiển thị button phone VÀ button chuyển link => 3 cột trên thanh menu: MENU|BUTTON CALL|BUTTON LOCATION
			if( settings.phoneBtn && settings.locationBtn ) {
				var cssClass = 'third';
			
			// Nếu hiển thị button phone HOẶC button chuyển link => 2 cột trên thanh menu: MENU|BUTTON CALL HOẶC MENU|BUTTON LOCATION	
			} else if( settings.phoneBtn || settings.locationBtn ) {
				var cssClass = 'half';
			
			// => 1 cột trên thanh menu : MENU	
			} else {
				var cssClass = 'full';
			}

			// Tạo nút mở/đóng cho menu 
			nav.prepend('<a href="#" class="menu-toggle ' + cssClass + '"><i class="fa fa-bars"></i> ' + settings.text_menu + '</a>');

			// Tạo nút gọi sao nút đóng/mở menu
			if (settings.phoneBtn && !(settings.position == 'right' || settings.position == 'left')) {
				var btn = '<a href="tel:'+ settings.phoneBtn +'" class="call-btn-mobile ' + cssClass + '"><i class="fa fa-phone"></i> <span>Call us</span></a>';
				nav.find('a.menu-toggle').after(btn);
			}

			// Tạo nút chuyển link - thêm link - mở tab mới
			if (settings.locationBtn && !(settings.position == 'right' || settings.position == 'left')) {				
				var btn = '<a href="'+ settings.locationBtn +'" class="location-btn-mobile ' + cssClass + '" target="_blank"><i class="fa fa-map-marker"></i> <span>Location</span></a>';
				nav.find('a.menu-toggle').after(btn);
			}

			// Makes nav sticky on scroll
			if (settings.sticky) {
				navPos = nav.offset().top;			
				if(width >= breakpoint) {
					$(window).bind('scroll', function() {
						if ($(window).scrollTop() > navPos) {
							nav.addClass('fixed');
						}
						else {
							nav.removeClass('fixed');
						}
				    });
				}
			}

			// Vị trí hiển thị menu position: top - css
			if (settings.position == 'top') {
				nav.addClass('top');
			}

			// Vị trí hiển thị menu position: left/right - css
			if (settings.position == 'left' || settings.position == 'right') {
				var closeBtn 	= '<a href="#" class="close-menu ' + cssClass + '"><i class="fa fa-close"></i> <span>Close</span></a>';
				var phoneBtn 	= '<a href="tel:'+ settings.phoneBtn +'" class="call-btn-mobile ' + cssClass + '"><i class="fa fa-phone"></i></a>';
				var locationBtn = '<a href="'+ settings.locationBtn +'" class="location-btn-mobile ' + cssClass + '" target="_blank"><i class="fa fa-map-marker"></i></a>';

				nav.find('ul:first').prepend(closeBtn);
				
				if (settings.locationBtn) {
					nav.find('ul:first').prepend(locationBtn);
				}
				if (settings.phoneBtn) {
					nav.find('ul:first').prepend(phoneBtn);
				}
			}

			// Thêm class right nếu hiển thị vị trí right
			if (settings.position == 'right') {
				nav.addClass('right');
			}

			// Thêm class left nếu hiển thị vị trí left
			if (settings.position == 'left') {
				nav.addClass('left');
			}

			// Ẩn/hiện icon xổ xuống khi có cấp con => add class="hide-arrows"
			if (!settings.showArrows) {
				nav.addClass('hide-arrows');
			}

			// Icon butuon đóng được hiển thị
			if (settings.closeBtn && !(settings.position == 'right' || settings.position == 'left')) {
				// adds a link to end of nav to close it
				nav.find('ul:first').append('<li><a href="#" class="close-menu"><i class="fa fa-close"></i> Close Menu</a></li>');
			}

			// Không cho scroll x => overflow-x: hidden
			if (settings.scrollbarFix) {
				$('body').addClass('stellarnav-noscroll-x');
			}

			// Ẩn/hiện Menu Responsive khi click vào button MENU 			
			$('.menu-toggle').on('click', function(e) {
				// e.stopPropagation() dùng để ngăn nổi bong bóng sự kiện từ một element con lên element ở cấp cao hơn.
				// Đây cũng là một hàm của event Object. Nó ngăn quá trình nổi bọt của sự kiện trong DOM.
				// Ví dụ khi gán một sự kiện cho một phần tử. Mặc định các phần tử con của phần tử đó cũng được gán sự kiện. Nhưng khi e.stopPropagation() được gọi trong eventHandler của phần tử con thì nó không bị ảnh hưởng bởi sự kiện của phần tử cha, ông của nó.
				e.stopPropagation();

				// 	Hiệu ứng trượt trái/phải: hiện menu con 
				if (settings.position == 'left' || settings.position == 'right') {

					// .stop(true, true) Dùng để ngưng một chuyển động hay hiệu ứng trước khi chúng hoàn tất.
					
					// .fadeToggle() Display/hide the matched elements by animating their opacity.
					nav.find('ul:first').stop(true, true).fadeToggle(250);

					// .toggleClass() Thêm hoặc loại bỏ một hoặc nhiều class từ mỗi phần tử trong tập hợp các phần tử được kết hợp, tùy thuộc vào sự có mặt của lớp hoặc giá trị của đối số trạng thái.
					nav.toggleClass('active');

					if(nav.hasClass('active') && nav.hasClass('mobile')) {
						// closes the menu when clicked outside of it
						$(document).on('click', function(event) {
							// ensures menu hides only on mobile nav
							if(nav.hasClass('mobile')) {
							  	if (!$(event.target).closest(nav).length) {
									// .fadeOut() : Ẩn phần tử được chọn với hiệu ứng mờ dần  
							  		nav.find('ul:first').stop(true, true).fadeOut(250);	
							  		nav.removeClass('active');
								}
							}
						});
					}

				// 	Hiệu ứng xổ xuống: hiện menu con
				} else {
					// static position - normal open and close animation
					nav.find('ul:first').stop(true, true).slideToggle(250);
				}
			});

			// Đóng menu khi icon đóng button hiện lên
			$('.close-menu').click(function() {
				
				nav.removeClass('active');

				if (settings.position == 'left' || settings.position == 'right') {
					nav.find('ul:first').stop(true, true).fadeToggle(250);
				} else {
					nav.find('ul:first').stop(true, true).slideUp(250).toggleClass('active');
				}
			});
			
			// Đánh dấu cấp cha của phần tử nào có cấp con
			nav.find('li a').each(function() {
				if ($(this).next().length > 0) {
					$(this).parent('li').addClass('has-sub').append('<a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a>');
				}
			});

			// Khi click vào icon menu cấp cha => Hiển thị menu cấp con
			nav.find('li .dd-toggle').on('click', function(e) {
                e.preventDefault();
                $(this).parent().siblings().find('ul').css('display', 'none');
                $(this).parent().siblings().removeClass('open');
                $(this).parent('li').toggleClass('open');
                $(this).parent('li').children('ul').stop(true, true).slideToggle(250);
			});

			var resetTriggers = function() {
				nav.find('li').unbind('mouseenter');
				nav.find('li').unbind('mouseleave');
			}
			
			var setTriggers = function() {
				nav.find('li').on('mouseenter', function(){
					$(this).addClass('hover');
					$(this).children('ul').stop(true, true).slideDown(250);
				});
				nav.find('li').on('mouseleave', function(){
					$(this).removeClass('hover');
					$(this).children('ul').stop(true, true).slideUp(250);
				});
			}
			windowCheck();
			
			// Kiểm tra kích thước màn hình
			function windowCheck() {
				var browserWidth = window.innerWidth;
				
				// Màn hình nhỏ hơn kích thước tự đặt (768px) => Menu responsive
				if(browserWidth <= breakpoint) {
					resetTriggers();
					nav.addClass('mobile');
					nav.removeClass('desktop');

					// closes the menu when resizing window back to desktop
					if( !nav.hasClass('active') && nav.find('ul:first').is(':visible') ) {
						//nav.addClass('active');
						nav.find('ul:first').hide();
					}

				//	Màn hình dành cho Desktop
				} else {
					// desktop nav
					nav.addClass('desktop');					
					nav.removeClass('mobile');

					if(nav.hasClass('active')) {
						nav.removeClass('active');
					}

					// ensures stellarnav is visible after resizing window
					if( !nav.hasClass('active') && nav.find('ul:first').is(':hidden') ) {
						nav.find('ul:first').show();
					}

					// hides items that were open on mobile
					$('li.open').removeClass('open').find('ul:visible').hide();

					resetTriggers();
					setTriggers();
				}
			}

			// Khi người dùng thay đổi kích thước màn hình
			$(window).on('resize', function() {
				windowCheck();
			});
		});
	}
}(jQuery));