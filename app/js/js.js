$(document).ready(function(){

	$('.slider').slick({
		dots: true,
		arrows: false
	});

	/* Описание товара */

	$('.goods__content').slick({
		arrows: true,
		dots: false,
		autoplay: false,
		prevArrow: '<button class="button__slider button__slider__prev"><span class="icon-left2"><span class="path1"></span></span></button>',
		nextArrow: '<button class="button__slider button__slider__next"><span class="icon-right1"><span class="path1"></span></span></button>'

	});
	
	/*Фото товара*/

	$('#goods__left__for1').slick({
		dots: false,
		arrows: false,
		slidesToShow: 1,
	  	slidesToScroll: 1,
	  	asNavFor: '#goods__left__nav1',
	  	fade: true,
	  	draggable: false,
	});
	$('#goods__left__nav1').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '#goods__left__for1',
	  dots: false,
	  centerMode: true,
	  focusOnSelect: true,
	  draggable: false,
	});
	$('#goods__left__for2').slick({
		dots: false,
		arrows: false,
		slidesToShow: 1,
	  	slidesToScroll: 1,
	  	asNavFor: '#goods__left__nav2',
	  	fade: true,
	  	draggable: false,
	});
	$('#goods__left__nav2').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '#goods__left__for2',
	  dots: false,
	  centerMode: true,
	  focusOnSelect: true,
	  draggable: false,
	});
	$('#goods__left__for3').slick({
		dots: false,
		arrows: false,
		slidesToShow: 1,
	  	slidesToScroll: 1,
	  	asNavFor: '#goods__left__nav3',
	  	fade: true,
	  	draggable: false,
	});
	$('#goods__left__nav3').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '#goods__left__for3',
	  dots: false,
	  centerMode: true,
	  focusOnSelect: true,
	  draggable: false,
	});
	$('#goods__left__for4').slick({
		dots: false,
		arrows: false,
		slidesToShow: 1,
	  	slidesToScroll: 1,
	  	asNavFor: '#goods__left__nav4',
	  	fade: true,
	  	draggable: false,
	});
	$('#goods__left__nav4').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '#goods__left__for4',
	  dots: false,
	  centerMode: true,
	  focusOnSelect: true,
	  draggable: false,
	});

	/*Прокрутка страницы*/

	$("nav").on("click","a", function (event) {
	  event.preventDefault();
	  if (document.location == "http://avtoscanerpro.loc/") {
	  	var id  = $(this).attr('href'),
	    top = $(id).offset().top;
	  	$('body,html').animate({scrollTop: top}, 900);
	  } else {
	  	var id  = $(this).attr('href');
	  	document.location.href = "http://avtoscanerpro.loc/" + id;
	  	top = $(id).offset().top;
	  	$('body,html').animate({scrollTop: top}, 900);
	  }

	});

	/*Наверх toTop*/

	$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
	});
	$("#toTop").click(function() {
	    $("html, body").animate({scrollTop: 0}, 900);
	});

/* mobile menu */

	$('.mobile-menu').on('click', function(){
    	$(this).toggleClass('mobile-menu__open');
    	$(this).siblings('.menu').toggleClass('menu__click');

 	});
  	$('.menu__item__link').on('click', function(){
    	$('.mobile-menu').toggleClass('mobile-menu__open');
    	$('.menu').toggleClass('menu__click');
 	});
  	/*$(document).on('mouseup', function (e) {
    	if ($(".menu").has(e.target).length === 0 && $('.mobile-menu').has(e.target).length === 0){
        	$(".menu").removeClass('menu__click');
        	$('.mobile-menu').removeClass('mobile-menu__open');
    	};
	}); */
/* Показ Цены */
	$(".front").on('click', function(){
  		$(this).css("transform", "rotateY(180deg)");
  		$(this).siblings(".back").css("transform", "rotateY(360deg)");
	});
/* КОРЗИНА */
	$(".order").on("click", function(){
		var cart_id = $(this).attr('name').replace(/[^0-9]/gi, '');
		var cart_sum;
		if ( cart_id == '1' ) {
	    	$("#cart1").slideToggle("2000");
	    	cart_sum = $('#cart1 .form__price').text();
	 
		} else if ( cart_id == '2' ) {
			$("#cart2").slideToggle("2000");
			cart_sum = $('#cart2 .form__price').text();
	 
		} else if ( cart_id == '3' )  {
			$("#cart3").slideToggle("2000");
			cart_sum = $('#cart3 .form__price').text();
		} else if ( cart_id == '4' ) {
			$("#cart4").slideToggle("2000");
			cart_sum = $('#cart4 .form__price').text();
		}
		$('.row__sum span:first-child').text(cart_sum);
		$('.row__sum input').val('1');
	    if( $("div").hasClass("out__cart") ) {
	    	$(".out__cart").remove();
	    }
	    else {
	    	$(".tytoknoall").append('<div class="out__cart"></div>');
	    }


	});
	$(".tytoknoall").on("click", function(){
		$(".cart").slideUp("2000");
		$(".out__cart").remove();
	});
	$('.cart__amount').on('change', function(){
		var amount = $(this).val();
		var price = $(this).parents('.cart__form').find('.form__price').text();
		var sum = +amount * +price;
		$('.cart__sum').text(sum);
	});


	$('.cart__form').on('submit', function(){
		var buy_amount = $(this).find('.cart__amount').val();
		var buy_name = $(this).find('.cart__name').val();
		var buy_phone = $(this).find('.cart__phone').val();
		var buy_comment = $(this).find('.cart__comment').val();
		var buy_good = $(this).find('.cart__good').text();
		var buy_sum = $(this).find('.cart__sum').text();
		$.ajax({
			type: "POST",
			url: "buy.php",
			data: {buy_amount: buy_amount, buy_name: buy_name, buy_phone: buy_phone, buy_comment: buy_comment, buy_good: buy_good, buy_sum: buy_sum}
		}).done(function(){
			$(".cart").slideUp("2000");
			$(".out__cart").remove();
			$('.thx').slideToggle("2000").delay(3000).fadeOut();
		});
		return false;
	});
});


