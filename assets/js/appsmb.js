/* Validation form */
validateForm('validation-newsletter');
validateForm('validation-cart');
validateForm('validation-user');
validateForm('validation-contact');

/* Lazys */
NN_FRAMEWORK.Common = function () {
	$(".content-ck iframe,.content-ck embed").each(function (e, n) { $(this).wrap("<div class='video-container'></div>") });
	$(".content-ck table").each(function (e, t) { $(this).wrap("<div class='table-responsive'></div>") });
};
NN_FRAMEWORK.Lazys = function () {
	if (isExist($('.lazy'))) {
		var lazyLoadInstance = new LazyLoad({
			elements_selector: '.lazy'
		});
	}
};

/* Load name input file */
NN_FRAMEWORK.loadNameInputFile = function () {
	if (isExist($('.custom-file input[type=file]'))) {
		$('body').on('change', '.custom-file input[type=file]', function () {
			var fileName = $(this).val();
			fileName = fileName.substr(fileName.lastIndexOf('\\') + 1, fileName.length);
			$(this).siblings('label').html(fileName);
		});
	}
};

/* Back to top */
NN_FRAMEWORK.GoTop = function () {
	$(window).scroll(function () {
		if (!$('.scrollToTop').length)
			$('body').append('<div class="scrollToTop"><img src="' + GOTOP + '" alt="Go Top"/></div>');
		if ($(this).scrollTop() > 100) $('.scrollToTop').fadeIn();
		else $('.scrollToTop').fadeOut();
	});

	$('body').on('click', '.scrollToTop', function () {
		$('html, body').animate({ scrollTop: 0 }, 800);
		return false;
	});
};

/* Alt images */
NN_FRAMEWORK.AltImg = function () {
	$('img').each(function (index, element) {
		if (!$(this).attr('alt') || $(this).attr('alt') == '') {
			$(this).attr('alt', WEBSITE_NAME);
		}
	});
};

/* Menu */
NN_FRAMEWORK.Menu = function () {
	/* Menu remove empty ul */
	if (isExist($('.menu'))) {
		$('.menu ul li a').each(function () {
			$this = $(this);

			if (!isExist($this.next('ul').find('li'))) {
				$this.next('ul').remove();
				$this.removeClass('has-child');
			}
		});
	}

	/* Menu fixed */
	if (isExist($(".menu"))) {
		$(window).scroll(function () {
			if ($(window).scrollTop() >= $(".menu").height()) {
				$(".menu").css({ position: 'fixed', left: '0px', right: '0px', top: '0px' });
				$(".menu").addClass('menu-fix');
			}
			else {
				$(".menu").css({ position: "relative" });
				$(".menu").removeClass('menu-fix');
			}
		});
	}

	if (isExist($(".menu-res"))) {
		$(window).scroll(function () {
			if ($(window).scrollTop() >= $(".menu-res").height()) {
				$(".menu-res").css({ position: 'fixed', left: '0px', right: '0px', top: '0px' });
				$(".menu-res").addClass('menu-fix');
			}
			else {
				$(".menu-res").css({ position: "relative" });
				$(".menu-res").removeClass('menu-fix');
			}
		});
	}

	/* Mmenu */
	if (isExist($('nav#menu'))) {
		$('nav#menu').mmenu({
			extensions: ['border-full', 'position-left', 'position-front']
		});
	}
};
NN_FRAMEWORK.Menu_left = function () {
	if (isExist($('.menu_left'))) {
		$('.btn-showsubfilter').click(function () {

			if ($(this).hasClass("active")) {

				$(this).removeClass("active");

				var $hideUl = $(this).siblings(".sub");

				$hideUl.slideUp();

			}

			else {

				$(this).addClass("active");

				var $hideUl = $(this).siblings(".sub");

				$hideUl.slideDown();

			}

		});

	}

};
/* Tools */
NN_FRAMEWORK.Tools = function () {
	if (isExist($('.toolbar'))) {
		$('.footer').css({ marginBottom: $('.toolbar').innerHeight() });
	}
};

/* Popup */
NN_FRAMEWORK.Popup = function () {
	if (isExist($('#popup'))) {
		$('#popup').modal('show');
	}
};

/* Wow */
NN_FRAMEWORK.Wows = function () {
	new WOW().init();
};

/* Pagings */
NN_FRAMEWORK.Pagings = function () {
	/* Products */
	if (isExist($('.paging-product'))) {
		loadPaging('api/product.php?perpage=6', '.paging-product');
	}

	/* Categories */
	if (isExist($('.paging-product-category'))) {
		$('.paging-product-category').each(function () {
			var list = $(this).data('list');
			loadPaging('api/product.php?perpage=6&idList=' + list, '.paging-product-category-' + list);
		});
	}

	$('body').on('click', '.box-cate .name-cate span', function () {
		var list = $(this).data('list');

		$('.box-cate .name-cate span').each(function () {
			$(this).removeClass('span-active');
		});
		$(this).addClass('span-active');
		//alert(list);
		loadPaging('api/product.php?perpage=6&idList=' + list, '.paging-product-index');
	});

	$('body').on('click', '.item-menu span', function () {
		var list = $(this).data('list');

		$('.item-menu span').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		//alert(list);
		loadPaging('api/product.php?perpage=6&idList=' + list, '.paging-product-index');
	});
};
NN_FRAMEWORK.ClickTabsLoad_sp = function () {

	if (isExist($(".wrap-tabs"))) {
		$(".bt_mc li").click(function () {

			var datatype = $('> a', this).data("type");

			var id = $('> a', this).data("id");

			var list = $('> a', this).data("list");

			var cat = $('> a', this).data("cat");

			var stt = $('> a', this).data("stt");

			$(".flag > li").removeClass("active_list_mc");

			$(".item_ul li").removeClass("active_list_mc");

			$(this).addClass("active_list_mc");

			loadPaging("api/product.php?perpage=8&idList=" + list + "&idCat=" + cat, '.paging-product-category-' + list);

			return false;
		});
	}
};
/* Ticker scroll */
NN_FRAMEWORK.TickerScroll = function () {
	if (isExist($('.news-scroll'))) {
		$('.news-scroll')
			.easyTicker({
				direction: 'up',
				easing: 'swing',
				speed: 'slow',
				interval: 3500,
				height: 'auto',
				visible: 3,
				mousePause: true,
				controls: {
					up: '.news-control#up',
					down: '.news-control#down'
					// toggle: '.toggle',
					// stopText: 'Stop'
				},
				callbacks: {
					before: function (ul, li) {
						// $(li).css('color', 'red');
					},
					after: function (ul, li) { }
				}
			})
			.data('easyTicker');
	}
};

/* Photobox */
NN_FRAMEWORK.Photobox = function () {
	if (isExist($('.album-gallery'))) {
		$('.album-gallery').photobox('a', { thumbs: true, loop: false });
	}
};

/* Comment */
NN_FRAMEWORK.Comment = function () {
	if (isExist($('.comment-page'))) {
		$('.comment-page').comments({
			url: 'api/comment.php'
		});
	}
};

/* DatePicker */
NN_FRAMEWORK.DatePicker = function () {
	if (isExist($('#birthday'))) {
		$('#birthday').datetimepicker({
			timepicker: false,
			format: 'd/m/Y',
			formatDate: 'd/m/Y',
			minDate: '01/01/1950',
			maxDate: TIMENOW
		});
	}
};

/* Search */
NN_FRAMEWORK.Search = function () {
	if (isExist($('.icon-search'))) {
		$('.icon-search').click(function () {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$('.search-grid').stop(true, true).animate({ opacity: '0', width: '0px' }, 200);
			} else {
				$(this).addClass('active');
				$('.search-grid').stop(true, true).animate({ opacity: '1', width: '230px' }, 200);
			}
			document.getElementById($(this).next().find('input').attr('id')).focus();
			$('.icon-search i').toggleClass('fa fa-search fa fa-times');
		});
	}
};

/* Videos */
NN_FRAMEWORK.Videos = function () {
	/* Fancybox */
	// $('[data-fancybox="something"]').fancybox({
	//     // transitionEffect: "fade",
	//     // transitionEffect: "slide",
	//     // transitionEffect: "circular",
	//     // transitionEffect: "tube",
	//     // transitionEffect: "zoom-in-out",
	//     // transitionEffect: "rotate",
	//     transitionEffect: "fade",
	//     transitionDuration: 800,
	//     animationEffect: "fade",
	//     animationDuration: 800,
	//     slideShow: {
	//         autoStart: true,
	//         speed: 3000
	//     },
	//     arrows: true,
	//     infobar: false,
	//     toolbar: false,
	//     hash: false
	// });

	if (isExist($('[data-fancybox="video"]'))) {
		$('[data-fancybox="video"]').fancybox({
			transitionEffect: 'fade',
			transitionDuration: 800,
			animationEffect: 'fade',
			animationDuration: 800,
			arrows: true,
			infobar: false,
			toolbar: true,
			hash: false
		});
	}
};

/* Owl Data */
NN_FRAMEWORK.OwlData = function (obj) {
	if (!isExist(obj)) return false;
	var items = obj.attr('data-items');
	var rewind = Number(obj.attr('data-rewind')) ? true : false;
	var autoplay = Number(obj.attr('data-autoplay')) ? true : false;
	var loop = Number(obj.attr('data-loop')) ? true : false;
	var lazyLoad = Number(obj.attr('data-lazyload')) ? true : false;
	var mouseDrag = Number(obj.attr('data-mousedrag')) ? true : false;
	var touchDrag = Number(obj.attr('data-touchdrag')) ? true : false;
	var animations = obj.attr('data-animations') || false;
	var smartSpeed = Number(obj.attr('data-smartspeed')) || 800;
	var autoplaySpeed = Number(obj.attr('data-autoplayspeed')) || 800;
	var autoplayTimeout = Number(obj.attr('data-autoplaytimeout')) || 5000;
	var dots = Number(obj.attr('data-dots')) ? true : false;
	var responsive = {};
	var responsiveClass = true;
	var responsiveRefreshRate = 200;
	var nav = Number(obj.attr('data-nav')) ? true : false;
	var navContainer = obj.attr('data-navcontainer') || false;
	var navTextTemp =
		"<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>";
	var navText = obj.attr('data-navtext');
	navText =
		nav &&
		navContainer &&
		(((navText === undefined || Number(navText)) && navTextTemp) ||
			(isNaN(Number(navText)) && navText) ||
			(Number(navText) === 0 && false));

	if (items) {
		items = items.split(',');

		if (items.length) {
			var itemsCount = items.length;

			for (var i = 0; i < itemsCount; i++) {
				var options = items[i].split('|'),
					optionsCount = options.length,
					responsiveKey;

				for (var j = 0; j < optionsCount; j++) {
					const attr = options[j].indexOf(':') ? options[j].split(':') : options[j];

					if (attr[0] === 'screen') {
						responsiveKey = Number(attr[1]);
					} else if (Number(responsiveKey) >= 0) {
						responsive[responsiveKey] = {
							...responsive[responsiveKey],
							[attr[0]]: (isNumeric(attr[1]) && Number(attr[1])) ?? attr[1]
						};
					}
				}
			}
		}
	}

	if (nav && navText) {
		navText = navText.indexOf('|') > 0 ? navText.split('|') : navText.split(':');
		navText = [navText[0], navText[1]];
	}

	obj.owlCarousel({
		rewind,
		autoplay,
		loop,
		lazyLoad,
		mouseDrag,
		touchDrag,
		smartSpeed,
		autoplaySpeed,
		autoplayTimeout,
		dots,
		nav,
		navText,
		navContainer: nav && navText && navContainer,
		responsiveClass,
		responsiveRefreshRate,
		responsive
	});

	if (autoplay) {
		obj.on('translate.owl.carousel', function (event) {
			obj.trigger('stop.owl.autoplay');
		});

		obj.on('translated.owl.carousel', function (event) {
			obj.trigger('play.owl.autoplay', [autoplayTimeout]);
		});
	}

	if (animations && isExist(obj.find('[owl-item-animation]'))) {
		var animation_now = '';
		var animation_count = 0;
		var animations_excuted = [];
		var animations_list = animations.indexOf(',') ? animations.split(',') : animations;

		obj.on('changed.owl.carousel', function (event) {
			$(this).find('.owl-item.active').find('[owl-item-animation]').removeClass(animation_now);
		});

		obj.on('translate.owl.carousel', function (event) {
			var item = event.item.index;

			if (Array.isArray(animations_list)) {
				var animation_trim = animations_list[animation_count].trim();

				if (!animations_excuted.includes(animation_trim)) {
					animation_now = 'animate__animated ' + animation_trim;
					animations_excuted.push(animation_trim);
					animation_count++;
				}

				if (animations_excuted.length == animations_list.length) {
					animation_count = 0;
					animations_excuted = [];
				}
			} else {
				animation_now = 'animate__animated ' + animations_list.trim();
			}
			$(this).find('.owl-item').eq(item).find('[owl-item-animation]').addClass(animation_now);
		});
	}
};

/* Owl Page */
NN_FRAMEWORK.OwlPage = function () {
	if (isExist($('.owl-page'))) {
		$('.owl-page').each(function () {
			NN_FRAMEWORK.OwlData($(this));
		});
	}
};

/* Dom Change */
NN_FRAMEWORK.DomChange = function () {
	/* Video Fotorama */
	$('#video-fotorama').one('DOMSubtreeModified', function () {
		$('#fotorama-videos').fotorama();
	});

	/* Video Select */
	$('#video-select').one('DOMSubtreeModified', function () {
		$('.listvideos').change(function () {
			var id = $(this).val();
			$.ajax({
				url: 'api/video.php',
				type: 'POST',
				dataType: 'html',
				data: {
					id: id
				},
				beforeSend: function () {
					holdonOpen();
				},
				success: function (result) {
					$('.video-main').html(result);
					holdonClose();
				}
			});
		});
	});

	/* Chat Facebook */
	$('#messages-facebook').one('DOMSubtreeModified', function () {
		$('.js-facebook-messenger-box').on('click', function () {
			$('.js-facebook-messenger-box, .js-facebook-messenger-container').toggleClass('open'),
				$('.js-facebook-messenger-tooltip').length && $('.js-facebook-messenger-tooltip').toggle();
		}),
			$('.js-facebook-messenger-box').hasClass('cfm') &&
			setTimeout(function () {
				$('.js-facebook-messenger-box').addClass('rubberBand animated');
			}, 3500),
			$('.js-facebook-messenger-tooltip').length &&
			($('.js-facebook-messenger-tooltip').hasClass('fixed')
				? $('.js-facebook-messenger-tooltip').show()
				: $('.js-facebook-messenger-box').on('hover', function () {
					$('.js-facebook-messenger-tooltip').show();
				}),
				$('.js-facebook-messenger-close-tooltip').on('click', function () {
					$('.js-facebook-messenger-tooltip').addClass('closed');
				}));
		$('.search_open').click(function () {
			$('.search_box_hide').toggleClass('opening');
		});
	});
};

/* Cart */
NN_FRAMEWORK.Cart = function () {
	/* Add */
	$('body').on('click', '.addcart', function () {
		$this = $(this);
		$parents = $this.parents('.right-pro-detail');
		var id = $this.data('id');
		var action = $this.data('action');
		var quantity = $parents.find('.quantity-pro-detail').find('.qty-pro').val();
		quantity = quantity ? quantity : 1;
		var color = $parents.find('.color-block-pro-detail').find('.color-pro-detail input:checked').val();
		color = color ? color : 0;
		var size = $parents.find('.size-block-pro-detail').find('.size-pro-detail input:checked').val();
		size = size ? size : 0;

		if (id) {
			$.ajax({
				url: 'api/cart.php',
				type: 'POST',
				dataType: 'json',
				async: false,
				data: {
					cmd: 'add-cart',
					id: id,
					color: color,
					size: size,
					quantity: quantity
				},
				beforeSend: function () {
					holdonOpen();
				},
				success: function (result) {
					if (action == 'addnow') {
						$('.count-cart').html(result.max);
						$.ajax({
							url: 'api/cart.php',
							type: 'POST',
							dataType: 'html',
							async: false,
							data: {
								cmd: 'popup-cart'
							},
							success: function (result) {
								$('#popup-cart .modal-body').html(result);
								$('#popup-cart').modal('show');
								NN_FRAMEWORK.Lazys();
								holdonClose();
							}
						});
					} else if (action == 'buynow') {
						window.location = CONFIG_BASE + 'gio-hang';
					}
				}
			});
		}
	});

	/* Delete */
	$('body').on('click', '.del-procart', function () {
		confirmDialog('delete-procart', LANG['delete_product_from_cart'], $(this));
	});

	/* Counter */
	$('body').on('click', '.counter-procart', function () {
		var $button = $(this);
		var quantity = 1;
		var input = $button.parent().find('input');
		var id = input.data('pid');
		var code = input.data('code');
		var oldValue = $button.parent().find('input').val();
		if ($button.text() == '+') quantity = parseFloat(oldValue) + 1;
		else if (oldValue > 1) quantity = parseFloat(oldValue) - 1;
		$button.parent().find('input').val(quantity);
		updateCart(id, code, quantity);
	});

	/* Quantity */
	$('body').on('change', 'input.quantity-procart', function () {
		var quantity = $(this).val() < 1 ? 1 : $(this).val();
		$(this).val(quantity);
		var id = $(this).data('pid');
		var code = $(this).data('code');
		updateCart(id, code, quantity);
	});

	/* City */
	if (isExist($('.select-city-cart'))) {
		$('.select-city-cart').change(function () {
			var id = $(this).val();
			loadDistrict(id);
			loadShip();
		});
	}

	/* District */
	if (isExist($('.select-district-cart'))) {
		$('.select-district-cart').change(function () {
			var id = $(this).val();
			loadWard(id);
			loadShip();
		});
	}

	/* Ward */
	if (isExist($('.select-ward-cart'))) {
		$('.select-ward-cart').change(function () {
			var id = $(this).val();
			loadShip(id);
		});
	}

	/* Payments */
	if (isExist($('.payments-label'))) {
		$('.payments-label').click(function () {
			var payments = $(this).data('payments');
			$('.payments-cart .payments-label, .payments-info').removeClass('active');
			$(this).addClass('active');
			$('.payments-info-' + payments).addClass('active');
		});
	}

	/* Colors */
	if (isExist($('.color-pro-detail'))) {
		$('.color-pro-detail input').click(function () {
			$this = $(this).parents('label.color-pro-detail');
			$parents = $this.parents('.attr-pro-detail');
			$parents_detail = $this.parents('.grid-pro-detail');
			$parents.find('.color-block-pro-detail').find('.color-pro-detail').removeClass('active');
			$parents.find('.color-block-pro-detail').find('.color-pro-detail input').prop('checked', false);
			$this.addClass('active');
			$this.find('input').prop('checked', true);
			var id_color = $parents.find('.color-block-pro-detail').find('.color-pro-detail input:checked').val();
			var id_pro = $this.data('idproduct');

			$.ajax({
				url: 'api/color.php',
				type: 'POST',
				dataType: 'html',
				data: {
					id_color: id_color,
					id_pro: id_pro
				},
				beforeSend: function () {
					holdonOpen();
				},
				success: function (result) {
					if (result) {
						$parents_detail.find('.left-pro-detail').html(result);
						MagicZoom.refresh('Zoom-1');
						NN_FRAMEWORK.OwlData($('.owl-pro-detail'));
						NN_FRAMEWORK.Lazys();
					}
					holdonClose();
				}
			});
		});
	}

	/* Sizes */
	if (isExist($('.size-pro-detail'))) {
		$('.size-pro-detail input').click(function () {
			$this = $(this).parents('label.size-pro-detail');
			$parents = $this.parents('.attr-pro-detail');
			$parents.find('.size-block-pro-detail').find('.size-pro-detail').removeClass('active');
			$parents.find('.size-block-pro-detail').find('.size-pro-detail input').prop('checked', false);
			$this.addClass('active');
			$this.find('input').prop('checked', true);
		});
	}

	/* Quantity detail page */
	if (isExist($('.quantity-pro-detail span'))) {
		$('.quantity-pro-detail span').click(function () {
			var $button = $(this);
			var oldValue = $button.parent().find('input').val();
			if ($button.text() == '+') {
				var newVal = parseFloat(oldValue) + 1;
			} else {
				if (oldValue > 1) var newVal = parseFloat(oldValue) - 1;
				else var newVal = 1;
			}
			$button.parent().find('input').val(newVal);
		});
	}
};
/* Owl pro detail */
NN_FRAMEWORK.RunSlick = function () {
	if (isExist($('.run_item_3'))) {
		$('.run_item_3').slick({
			autoplay: true,
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1,

			arrows: true,
			responsive: [
				{
					breakpoint: 1124,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true

					}
				},
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				}

			]
		});
	}
	if (isExist($('.run_item_4'))) {
		$('.run_item_4').slick({
			autoplay: true,
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 1,

			arrows: true,
			responsive: [
				{
					breakpoint: 1124,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1,
						infinite: true

					}
				},
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				}

			]
		});
	}

	$('.slideshow').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false
	});

};

NN_FRAMEWORK.Slide = function () {
	if ($('.slide-themanh1').length > 0) {
		$(".slide-themanh1").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: !0,
			arrows: false,
			autoplay: 0,
			autoplaySpeed: 3000,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			asNavFor: '.slide-themanh2',
			draggable: false,

		});
	}



	if (isExist($(".slide-themanh2"))) {
		$(".slide-themanh2").slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3000,
			arrows: false,
			speed: 700,
			asNavFor: '.slide-themanh1',
			focusOnSelect: true,
		});
	}

	$('.slide-prev').click(function (e) {
		//e.preventDefault(); 
		$('.slide-themanh2').slick('slickPrev');
	});

	$('.slide-next').click(function (e) {
		//e.preventDefault(); 
		$('.slide-themanh2').slick('slickNext');
	});




	if (isExist($(".slide-themanh-sm"))) {
		$(".slide-themanh-sm").slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3000,
			speed: 700,
			arrows: false,
			responsive: [{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}]
		});
	}


	if (isExist($('.slide-news1'))) {
		$(".slide-news1").slick({
			arrows: false,
			infinite: true,
			slidesToShow: 1,
			verticalSwiping: true,
			vertical: true,
			autoplay: false,
			speed: 800
		});
	}

	if (isExist($('.slide-news2'))) {
		$(".slide-news2").slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			arrows: false,
			infinite: true,
			// autoplay: true,
			// autoplaySpeed: 2000,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		})
	};
};


/* Ready */
$(document).ready(function () {
	NN_FRAMEWORK.Common();
	NN_FRAMEWORK.Lazys();
	NN_FRAMEWORK.Tools();
	NN_FRAMEWORK.Popup();
	NN_FRAMEWORK.Wows();
	NN_FRAMEWORK.AltImg();
	NN_FRAMEWORK.GoTop();
	NN_FRAMEWORK.Menu();
	NN_FRAMEWORK.Menu_left();
	NN_FRAMEWORK.RunSlick();
	NN_FRAMEWORK.OwlPage();
	NN_FRAMEWORK.Pagings();
	NN_FRAMEWORK.ClickTabsLoad_sp();
	NN_FRAMEWORK.Cart();
	NN_FRAMEWORK.Videos();
	NN_FRAMEWORK.Photobox();
	NN_FRAMEWORK.Search();
	NN_FRAMEWORK.DomChange();
	NN_FRAMEWORK.TickerScroll();
	NN_FRAMEWORK.DatePicker();
	NN_FRAMEWORK.loadNameInputFile();
	NN_FRAMEWORK.Slide();
});
