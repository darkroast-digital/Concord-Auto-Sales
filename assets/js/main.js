// ======================================================================
//
// Floating Labels
//
// ======================================================================


// ======================================================================
//
// Image Gallery
//
// ======================================================================

$(document).ready(function () {
	var feature = $('.images__featured');
	var lightbox = $('.lightbox');

	// Add initial active class
	$('.images__nav li').first().addClass('active');

	$('.images__nav li').click(function () {
		// Add active class to current item remove from others
		$(this).addClass('active').siblings().removeClass('active');

		// Get image URL
		var imgURL = $(this).find('img').attr('src');

		// Set featured image to current image
		$('.images__featured img').attr('src', imgURL);

		// Set lightbox featured image to current image
		$('.lightbox__feature img').attr('src', imgURL);

	});
	
	// Lightbox navigation

	var prev = $('.prev');
	var next = $('.next');
	
	// First and last URLs

	var firstURL = $('.images__nav li').first().find('img').attr('src');
	var lastURL = $('.images__nav li').last().find('img').attr('src');

	// Add arrow navigation

	// Next
	$(document).keyup(function (e) {
		if (e.keyCode == 39) {
			$(next).trigger('click');
		}
	});

	// Prev
	$(document).keyup(function (e) {
		if (e.keyCode == 37) {
			$(prev).trigger('click');
		}
	});

	next.click(function () {

		var nextItem = $('.images__nav li.active').next('li');

		var nextImg = $('.images__nav li.active').next('li').find('img');
		var nextImgSRC = nextImg.attr('src');

		$('.lightbox__feature img').attr('src', nextImgSRC);
		nextItem.addClass('active').siblings().removeClass('active');

	});

	prev.click(function () {

		var prevItem = $('.images__nav li.active').prev('li');

		var prevImg = $('.images__nav li.active').prev('li').find('img');
		var prevImgSRC = prevImg.attr('src');

		$('.lightbox__feature img').attr('src', prevImgSRC);
		prevItem.addClass('active').siblings().removeClass('active');

	});

	feature.click(function (e) {

		// Open lightbox on click
		lightbox.addClass('is--open');
	});

	// Click on overlay to hide lightbox
	$('.overlay').click(function () {

		lightbox.removeClass('is--open');
	});

	// Use ESC key to hide lightbox
	$(document).keyup(function (e) {
		if (e.keyCode == 27) {
			$('.lightbox').removeClass('is--open');
		}
	});

});

// ======================================================================
//
// Nav Scroll
//
// ======================================================================

$(window).scroll(function () {

	var scroll = $(window).scrollTop();

	if (scroll >= 350) {
		$('.nav.nav__scrolled').addClass('is--scrolled')
	} else {
		$('.nav.nav__scrolled').removeClass('is--scrolled')
	}

});

// ======================================================================
//
// Menu
//
// ======================================================================

$(function () {
	var trigger = $('.menu__trigger');
	var menu = $('.menu');

	trigger.click(function () {
		$(this).toggleClass('is--open');
		menu.toggleClass('is--open');
	});

});

// ======================================================================
//
// Tabs
//
// ======================================================================

$(function () {
	$('.tabs__nav li').first().addClass('active');
	$('.tab__drawer').first().addClass('active');
	$('.tab__content').hide().first().show();

	// when tabs are tabs
	$('.tabs__nav li').click(function () {

		$('.tab__content').hide();
		var activeTab = $(this).attr('rel');
		$('#' + activeTab).fadeIn();

		$('.tabs__nav li').removeClass('active');
		$(this).addClass('active');


		$('.tab__drawer').removeClass('active');
		$('.tab__drawer[rel^="' + activeTab + '"]').addClass('active');

	});

	// when tabs are accordions
	$('.tab__drawer').click(function () {

		$('.tab__drawer').removeClass('active');
		$(this).addClass('active');

		$('.tab__content').slideUp({
			duration: 400
		});
		var a_activeTab = $(this).attr('rel');
		$('#' + a_activeTab).slideDown({
			duration: 400
		});

		$('.tabs__nav li').removeClass('active');
		$('.tabs__nav li[rel^="' + a_activeTab + '"]').addClass('active');

	});

});

$(function () {

	$('.modal__trigger').click(function (e) {
		e.preventDefault();

		var activeModal = $(this).attr('href');
		$('#' + activeModal).addClass('is--open');
		$('.overlay').addClass('is--open');

	});

	$('.modal__close, .overlay').click(function () {
		var modal = $('.modal.is--open');

		modal.removeClass('is--open');
		$('.overlay').removeClass('is--open');

	});

});

// ======================================================================
//
// Modal
//
// ======================================================================

$(function () {

	$('.modal__trigger').click(function (e) {
		e.preventDefault();

		var activeModal = $(this).attr('href');
		$('#' + activeModal).addClass('is--open');
		$('.overlay').addClass('is--open');

	});

	$('.modal__close, .overlay').click(function () {
		var modal = $('.modal.is--open');

		modal.removeClass('is--open');
		$('.overlay').removeClass('is--open');

	});

});

// ======================================================================
//
// Accordion
//
// ======================================================================

$(function () {
	$('.accordion__title').first().addClass('active');
	$('.accordion__content').hide().first().show();

	$('.accordion__title').on('click', function () {

		$(this).addClass('active').siblings('.accordion__title').removeClass('active');
		$(this).next('.accordion__content').slideDown({
			duration: 400
		}).siblings('.accordion__content').slideUp({
			duration: 400
		});
	});
});

