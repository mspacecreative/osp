(function ($) {

	// MATCHMEDIA POLYFILL FOR IE9
	window.matchMedia || (window.matchMedia = function () {
		"use strict";
	
	    // For browsers that support matchMedium api such as IE 9 and webkit
	    var styleMedia = (window.styleMedia || window.media);
	
	    // For those that don't support matchMedium
	    if (!styleMedia) {
			var style = document.createElement('style'),
				script = document.getElementsByTagName('script')[0],
				info = null;
			style.type = 'text/css';
			style.id = 'matchmediajs-test';
			if (!script) {
				document.head.appendChild(style);
			} else {
				script.parentNode.insertBefore(style, script);
			}
	
	        // 'style.currentStyle' is used by IE <= 8 and 'window.getComputedStyle' for all other browsers
	        info = ('getComputedStyle' in window) && window.getComputedStyle(style, null) || style.currentStyle;
			styleMedia = {
				matchMedium: function (media) {
					var text = '@media ' + media + '{ #matchmediajs-test { width: 1px; } }';
	
	                // 'style.styleSheet' is used by IE <= 8 and 'style.textContent' for all other browsers
	                if (style.styleSheet) {
						style.styleSheet.cssText = text;
					} else {
						style.textContent = text;
					}
	
	                // Test if media query is true or false
	                return info.width === '1px';
				}
			};
		}
		
		return function(media) {
			return {
				matches: styleMedia.matchMedium(media || 'all'),
				media: media || 'all'
			};
		};
	}
	
	());
	function addDataObjectFit() {
		$('.imageStripInner').each(function() {
			$(this).children().attr('data-object-fit', 'cover');
		});
	}
	
	var viewportHeight = $(window).height();
	function heroHeight() {
		$('.heroContent').height( viewportHeight );
	}
	
	// SEARCH BAR
	$('.searchIcon').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('hide');
		$(this).next().toggleClass('reveal');
		$(this).prev().toggleClass('hide');
	});
	$('.closeIcon').click(function(e) {
		e.preventDefault();
		$(this).parent().toggleClass('reveal');
		$(this).parent().prev().toggleClass('hide');
		$(this).parent().prev().prev().toggleClass('hide');
	});
	
	function calcCardHeight() {
		var cardHeight = $('.display-medium-item').height();
		$('.display-medium-item').find('.medium-image').css('height', cardHeight);
	}
	
	// EVENTBRITE CARDS
	$('.eaw-li').each(function() {
		$(this).children().wrapAll('<div class="innerCardContainer"></div>');
		$(this).find('.innerCardContainer').children('.eaw-title, .eaw-time').wrapAll('<div class="colInner"></div>');
	});
	
	// MEDIUM TWEAKS
	/*
	$('.display-medium-title').each(function() {
		var titles = $(this),
		$target = $(this).parent();
		titles.insertAfter($target);
	});
	
	$('.display-medium-readmore').each(function() {
		var readMore = $(this),
		$target = $(this).parent();
		readMore.insertAfter($target).wrap('<p></p>');
	});
	
	$(".display-medium-date-read").html(function(i, html){
	    return html.replace("/", "");
	});
	
	$('.display-medium-item').each(function() {
		var items = $(this).find('p');
		items.wrapAll('<div class="mediumContent"></div>');
	});
	*/
	
	// ACCORDION FUNCTIONALITY
	$('.tabRow > a').click(function(e) {
		e.preventDefault();
		$(this).next().slideToggle();
		$(this).toggleClass('rotate');
	});
	
	
	function toggleMenu() {
		$('body').toggleClass('menuOpen');
		
		var hamburgerIcon = $('.hamburger'),
		        mobileNav = $('nav');
		      //subMenuLink = $('nav .sub-menu a');
		
		if ( $('.menuOpen').length ) {
			mobileNav.slideDown();
			hamburgerIcon.addClass('is-active');
		} else {
			mobileNav.slideUp();
			hamburgerIcon.removeClass('is-active');
		}
		
		/*
		if ( subMenuLink.href.indexOf("#") != -1 ) {
			hamburgerIcon.removeClass('is-active');
			$('body').removeClass('menuOpen');
		}
		*/
	}
	
	// MOBILE MENU
	$('.hamburger, .menuOverlay, nav .sub-menu a').click(function(e) {
		e.preventDefault();
		toggleMenu();
	});
	
	
	// FIX HEADER ON SCROLL
	function stickyHeader() {
		$('header').toggleClass('scroll');
	}
	
	$(window).scroll(function() {
		if ($(window).scrollTop() > 50) {
			$('header').addClass('scroll');
		} else {
			$('header').removeClass('scroll');
		}
	});
	
	// SMOOTH SCROLL
	$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target: $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				//setTimeout(function(){	
				$('html,body').animate({
					scrollTop: target.offset().top
				},
				500);
				return false;
			}
		}
	});
	
	function animateHoverHeight() {
		var overlaidText = $('.overlaidText'),
		        colInner = $('#buckets .colInner, .contentPortal').height();
		$('#buckets a, .contentPortal').mouseenter(function () {
			$(this).find(overlaidText).css('height', colInner);
		}).mouseleave(function () {
			$(this).find(overlaidText).css('height', '80px');
		});
	}
	
	$(document).ready(function() {
		animateHoverHeight();
		heroHeight();
		
		// SLICK SLIDER
		$('.carousel').slick({
			adaptiveHeight: true,
			dots: true,
		});
		
		//calcCardHeight();
	});
	
	window.addEventListener("resize", function() {
		animateHoverHeight();
		heroHeight();
	}, false);
	
	/*
	$(window).resize(function() {
		animateHoverHeight();
		//heroHeight();
		//calcCardHeight();
	});
	*/
	
	$(window).load(function() {
		addDataObjectFit();
	});
	
})(jQuery);
