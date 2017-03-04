$(document).ready(function () {

	$('.table').basictable({breakpoint: 760});
		 

// слaйдер на главной
	$('.slider-main').slick({
		slidesToScroll:1,
		slidesToShow:1,
		// autoplay: true,
		autoplaySpeed: 3000,
		pauseOnHover:true,
		// draggable:false,
		arrows:true,
		dots:true,
	});

	// слайдер партнеры
	$('.partners-slider').slick({
		slidesToScroll:1,
		slidesToShow:5,
		autoplay: true,
		autoplaySpeed: 3000,
		pauseOnHover:true,
		arrows:true,
		dots:false,
		responsive: [
		
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		 },
		{
			breakpoint: 500,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		} 
	]
	});

	// слайдер продукт
	$('.product__slider__small').slick({
		slidesToScroll:1,
		slidesToShow:4,
		// autoplay: true,
		autoplaySpeed: 3000,
		pauseOnHover:true,
		arrows:false,
		draggable:false,
		dots:false,
		focusOnSelect: true,
		vertical : true,
		asNavFor: '.product__slider__big',
		responsive: [
		
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 3,
				vertical : false,
				slidesToScroll: 1
			}
		 },
		{
			breakpoint: 500,
			settings: {
				slidesToShow: 3,
				vertical : false,
				infinite:true,
				slidesToScroll: 1
			}
		} 
	]
	});

	$('.product__slider__big').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots:false,
		draggable:false,
		// autoplay: true,
		fade: true,
		asNavFor: '.product__slider__small'
	});

	// $('.product__slide__small').click(function() { 
 // var src = $(this).find('img').attr('src');
 // $('.product__slider__big').find('img').attr('src', src);
 // });


			// Меню гамбургер
			var touch  = $('.btn-toggle');
			var menu  = $('.menuVertical');

			var touch_city  = $('.btn-city__toggle');
			var city  = $('.btn-city__dropdown');

			var touch_search  = $('.btn-search__button');
			var search  = $('.btn-search__drowdown');

			$(touch).on('click', function(e) {
				city.hide();
				search.hide();
				e.preventDefault();
				menu.slideToggle();
			});

			// Выпадашкагорода
			$(touch_city).on('click', function(e) {
				menu.hide();
				search.hide();
				e.preventDefault();
				city.slideToggle();
			});

			// Выпадашка поиск
			$(touch_search).on('click', function(e) {
				menu.hide();
				city.hide();
				e.preventDefault();
				search.slideToggle();
			});

			/*	$(window).resize(function(){
				var w = $(window).width();
				if(w >320 && city.is(':hidden')) {
				 city.removeAttr('style');
				}
			});*/



			/*	$(window).resize(function(){
				var w = $(window).width();
				if(w >320 && search.is(':hidden')) {
				 search.removeAttr('style');
				}
			});*/

			// модалка
			$(document).ready(function(){
			$(".modalbox").fancybox({
				afterShow : function()
				{
					$('input[type="checkbox"]').styler();
				}
			});
			$("#f_contact").submit(function(){ return false; });
			$("#f_send").on("click", function(){
			
			// тут дальнейшие действия по обработке формы
			// закрываем окно, как правило делать это нужно после обработки данных
				$("#f_contact").fadeOut("fast", function(){
				$(this).before("<p><strong>Ваше сообщение отправлено!</strong></p>");
					setTimeout("$.fancybox.close()", 1000);
				});
			});
		});

		$('input[type="checkbox"],select').styler();

			//  меню аккордион
		$("#menuVertical > ul > li").on("click", function(){
			var accordion_item=$(this);
			if(!accordion_item.hasClass("act")) {
				$("#menuVertical > ul > li.act > ul").slideUp(400);
				$("#menuVertical > ul > li.act").removeClass("act");
				accordion_item.addClass("act");
				accordion_item.children("ul").slideDown(500);
			}
			else {
				accordion_item.removeClass("act");
				accordion_item.children("ul").slideUp(500);
			}
		});

		$("#menuVertical > ul > li > a").click(function(e) {
			e.stopPropagation();
		});

			function setFooterBg()
			{
				var windowWidth = $(window).width();
				var footerWidth = $('.footer').find('.wrapper').width();

				var footerBgWidth = (windowWidth - footerWidth) / 2;

				$('.footer-bg').css('width', footerBgWidth + "px");

			}

			// хвост у футера
			setFooterBg();
			$(window).resize(function() {
				setFooterBg();
			});

			// класс у вкладок меню
			$('.static').click(function() {
				$('.static').removeClass('active-btn');
				$(this).addClass('active-btn');
			});


			// слайдер комплекта
			$( '#complect-slider' ).sliderPro({
				width: 1000,
				height: 600,
				// orientation: 'vertical',
				arrows: true,
				fade: true,
				touchSwipe:false,
				buttons: false,
				lightbox:true,
				autoplay:false,
				thumbnailsPosition: 'right',
				thumbnailPointer: true,
				thumbnailWidth: 219,
				thumbnailHeight: 112,
				breakpoints: {
					1226: {
						thumbnailsPosition: 'bottom',
						fade: false,
						thumbnailWidth: 102,
						thumbnailHeight: 100,
						height: 600,
					},
					767: {
						thumbnailsPosition: 'bottom',
						thumbnailWidth: 96,
						thumbnailHeight: 90,
					}
				}
			});


			// галерея в слайдере
			$("a[rel=group]").fancybox({
				'transitionIn' : 'none',
				'transitionOut' : 'none',
				'titlePosition' : 'over',
				'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			// табы
			(function($) {
			$(function() {
			$('ul.tabs__caption').on('click', 'li:not(.active)', function() {
				$(this)
					.addClass('active').siblings().removeClass('active')
					.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
			});
		});
		})(jQuery);


		// слайдер цен
		$("#range").ionRangeSlider({
			hide_min_max: true,
			keyboard: true,
			min: 0,
			max: 50000,
			from: 0,
			to: 10,
			type: 'double',
			step: 1,
			grid: true
		});


		// product_counter
		var btnIncrease = $('.btn-increase'),
		btnDecrease = $('.btn-decrease'),
		counter = $('.count');
		btnIncrease.click(function(e){
			e.preventDefault();
			var input = $(this).prev('.count');
			incrementCounter(input);
		});

		btnDecrease.click(function(e){
			e.preventDefault();
			var input = $(this).next('.count');
			decrementCounter(input);
		});

		// Не позволять вводить символы кроме цифр
		counter.keyup(function(e)
		{
			if (/\D/g.test(this.value))
			{
			    this.value = this.value.replace(/\D/g, '');
			}
		});

		// Увеличиваем счетчик
		function incrementCounter(input){
			var prevVal = parseInt(input.val());
			$(input).val(prevVal+1);
		}

		// Уменьшаем счетчик
		function decrementCounter(input){
			var prevVal = parseInt(input.val());
			if(prevVal>0){
				$(input).val(prevVal-1);
			}
		}


		// кнопка "вверх"
	if ($('#back-to-top').length) {
		var scrollTrigger = 100, // px
		backToTop = function () {
		var scrollTop = $(window).scrollTop();
		if (scrollTop > scrollTrigger) {
			$('#back-to-top').addClass('show');
			} else {
			$('#back-to-top').removeClass('show');
			}
	};
	backToTop();
		$(window).on('scroll', function () {
		  backToTop();
		});
			$('#back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 800);
			});
	};







});

