jQuery(document).ready(function($){
	/** Preloader **/
	$(window).on('load', function() {
		$("#rezoto-preloader").fadeOut("slow");
	});

	/** Sidemenu **/
	$('#simple-menu').sidr({
		name: 'rezoto-smenu',
		source: '#rezoto-sidemenu'
	});

	$('body').on('click', ':not(.sidr)', function() {
		$.sidr('close', 'rezoto-smenu');
	});

	/** Wow & Animate js **/
	new WOW().init();

	/** Rezoto Main Slider **/
	var rtl_site = false;
	rtl_site = $('body').hasClass('rtl') ? true : false;
	var rezoto_slider = $('.rezoto-slider').owlCarousel({
		items: 1,
		nav: true,
		navText: ['<i class="lni-angle-double-left"></i>', '<i class="lni-angle-double-right"></i>'],
		navElement: 'span',
		loop: true,
		dots: true,
		rtl: rtl_site
	});

	rezoto_slider.on('changed.owl.carousel', function(event) {
		var item = event.item.index - 2;     // Position of the current item
		$('.caption-text *').removeClass('animated fadeInUp');
		$('.owl-item').not('.cloned').eq(item).find('.caption-text *').addClass('animated fadeInUp');
	});

	/** Search Popup **/
	$('.rezoto-search > span').on('click', function(e) {
		e.preventDefault();

		$(this).next('.rezoto-search-form').addClass('active');
	});

	$('.rezoto-search-form span').on('click', function(e) {
		e.preventDefault();

		$(this).parents('.rezoto-search-form').removeClass('active');
	});

	/** Cart Remove item **/
	$('.hb_mini_cart_remove').on('click', function() {
		var cart_qty = $(this).parents('.rezoto-hotelcart').find('i.rezoto-cart-qty');
		var qty = cart_qty.text();
		qty = parseInt(qty);
		qty -= 1;
		cart_qty.text(qty);
	});

	/** Single Room Gallery **/
	$('.rezoto_hb_gallery').owlCarousel({
		items: 1,
		nav: true,
		navText: ['<i class="lni-arrow-left"></i>', '<i class="lni-arrow-right"></i>'],
		navElement: 'span',
		loop: true,
		dots: true,
		singleItem: true,
		dots: true
	});

	$(window).on('scroll', function(){
		if( $(window).scrollTop() >= 500 ) {
			$('#rezoto-goto-top').addClass('active');
		} else {
			$('#rezoto-goto-top').removeClass('active');
		}
	});	

	/** Scroll To Top **/
	$("#rezoto-goto-top").on( 'click', function(e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});

});