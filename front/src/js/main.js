$(function () {

	$('.popup__wrapper').hide();
	$('.popup-link').click(function (e) {
		e.preventDefault();
		let btn = $(this);
		let data = $(this).data('popup');
		let subject = $(this).data('subject');
		$('.popup__wrapper').addClass('hide');
		setTimeout(function () {
			$('.popup__wrapper').removeClass('active hide').hide();
			$('.popup__wrapper').each(function () {
				let id = $(this).attr('id');
				let ths = $(this);
				if (data == id) {
					$('#js-subject').val(subject);
					ths.show().addClass('active');
					$('body').addClass('overflow-hidden');
				}
				if ('popup-video' == id) {
					$('.popup__video iframe').attr('src', 'https://www.youtube.com/embed/' + btn.attr('href'));
				}
			});
		}, 300)
	});
	$(document).on('click', '.popup__close, .overlay', function (e) {
		e.preventDefault();
		$('.popup__wrapper').addClass('hide');
		$('.popup__video iframe').attr('src', '');
		setTimeout(function () {
			$('.popup__wrapper').removeClass('active hide').hide();
			$('body').removeClass('overflow-hidden');
		}, 300)
	});

	$('.header__close').click(function(e) {
		e.preventDefault();
		$('.header__menu').stop().slideToggle(300);
		$(this).toggleClass('active');
	});

	$(window).resize(function() {
		if($(window).width() > 992) {
			$('.header__menu').stop().css({'display': 'flex'});
			$('.header__close').removeClass('active');
		} else {
			$('.header__menu').stop().hide();
		}
	});

	document.addEventListener('wpcf7mailsent', function( event ) {
		$('.popup__wrapper').addClass('hide');
		setTimeout(function () {
			$('.popup__wrapper').removeClass('active hide').hide();
			$('body').removeClass('overflow-hidden');
			$('#popup-thanks').show().addClass('active');
			$('body').addClass('overflow-hidden');
		}, 300)
	}, false );

});
