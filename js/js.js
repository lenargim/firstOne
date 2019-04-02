$(document).ready(function(){

	$('.slider').slick({
		dots: true,
		arrows: false
	});

	/* Описание товара */

	$('.goods1__content').slick({
		arrows: true,
		dots: false,
		autoplay: false,
		prevArrow: '<button class="button__slider button__slider__prev"><span class="icon-left2"><span class="path1"></span></span></button>',
		nextArrow: '<button class="button__slider button__slider__next"><span class="icon-right1"><span class="path1"></span></span></button>'

	});
	$('.goods2__content').slick({
		arrows: true,
		dots: false,
		autoplay: false,
		prevArrow: '<button class="button__slider button__slider__prev"><span class="icon-left2"><span class="path1"></span></span></button>',
		nextArrow: '<button class="button__slider button__slider__next"><span class="icon-right1"><span class="path1"></span></span></button>'

	});
	$('.goods3__content').slick({
		arrows: true,
		dots: false,
		autoplay: false,
		prevArrow: '<button class="button__slider button__slider__prev"><span class="icon-left2"><span class="path1"></span></span></button>',
		nextArrow: '<button class="button__slider button__slider__next"><span class="icon-right1"><span class="path1"></span></span></button>'

	});

	/*Фото товара*/

	$('.goods1__left__for').slick({
		dots: false,
		arrows: false,
		slidesToShow: 1,
	  	slidesToScroll: 1,
	  	asNavFor: '.goods1__left__nav',
	  	fade: true,
	  	draggable: false
	});
	$('.goods1__left__nav').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.goods1__left__for',
	  dots: false,
	  centerMode: true,
	  focusOnSelect: true,
	});
	$('.goods2__left__for').slick({
		dots: false,
		arrows: false,
		slidesToShow: 1,
	  	slidesToScroll: 1,
	  	asNavFor: '.goods2__left__nav',
	  	fade: true,
	  	draggable: false
	});
	$('.goods2__left__nav').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.goods2__left__for',
	  dots: false,
	  centerMode: true,
	  focusOnSelect: true,
	});
	$('.goods3__left__for').slick({
		dots: false,
		arrows: false,
		slidesToShow: 1,
	  	slidesToScroll: 1,
	  	asNavFor: '.goods3__left__nav',
	  	fade: true,
	  	draggable: false
	});
	$('.goods3__left__nav').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.goods3__left__for',
	  dots: false,
	  centerMode: true,
	  focusOnSelect: true,
	});

	/*Прокрутка страницы*/

	$("nav").on("click","a", function (event) {
	  event.preventDefault();
	  var id  = $(this).attr('href'),
	      top = $(id).offset().top;
	  $('body,html').animate({scrollTop: top}, 1200);
	});

	/*Наверх*/

	$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
	});
	$("#toTop").click(function() {
	    $("html, body").animate({scrollTop: 0}, 1000);
	});
})