(function ($) {
  // ACCESSIBILITY FOR NAVIGATION
  var subMenuItems = $(".sub-menu a");
  $(subMenuItems).each(function () {
    $(this).focus(function () {
      $(this).parent().parent().addClass("show");
      $(".sub-menu a").not($(this).parent().parent()).removeClass("show");
    });
  });

  // MOBILE DOWN ARROWS FOR CHILD LINKS IN MENU
  $(".mobile-nav .menu-item-has-children").prepend(
    '<span class="sub-toggle"><i class="fa fa-angle-down"></i></span>'
  );
  $(".sub-toggle").click(function () {
    $(this).siblings(".sub-menu").slideToggle();
    $(this).children().toggleClass("fa-angle-down fa-angle-up");
  });

  // FIX SIDEBAR ON SCROLL
  if (window.matchMedia("(min-width: 64em)").matches) {
    if ($(".news-and-events").length) {
      var stickySidebar = $(".sidebar").offset().top,
        colWidth = $(".sidebar").parent().width();
      $(window).scroll(function () {
        var headerHeight = $("header").outerHeight() + 20;
        if ($(window).scrollTop() > stickySidebar - headerHeight) {
          $(".sidebar").addClass("fixed").css({
            "margin-top": headerHeight,
            width: colWidth,
          });
        } else {
          $(".sidebar").removeClass("fixed").css({
            "margin-top": "0",
            width: "auto",
          });
        }
      });
    }
  }

  $(".read-bio").click(function (e) {
    e.preventDefault();
    $("body").addClass("header-tweak");
    $(this).parent().parent().next(".bio-overlay").fadeIn();
  });

  $(".team-member-link").click(function (e) {
    e.preventDefault();
    $(this).parent().parent().parent().next(".bio-overlay").fadeIn();
  });

  $(".bio-overlay").click(function () {
    $("body").removeClass("header-tweak");
    $(this).fadeOut();
  });

  $(".close-modal").click(function () {
    $("body").removeClass("header-tweak");
    $(this).closest(".bio-overlay").fadeOut();
  });

  $(".bio-content-table-cell > div").click(function (e) {
    e.stopPropagation();
  });

  $(document).keyup(function (e) {
    if (e.key === "Escape") {
      // escape key maps to keycode `27`
      $(".bio-overlay").fadeOut();
      $("body").removeClass("modal-is-open header-tweak");
    }
  });

  // REMOVE OUTLINE ON CLICKABLE ITEMS WHEN USING MOUSE
  document.body.addEventListener("mousedown", function () {
    document.body.classList.add("using-mouse");
    document.body.classList.remove("using-keyboard");
  });

  // Re-enable focus styling when Tab is pressed
  document.body.addEventListener("keydown", function (event) {
    if (event.keyCode === 9) {
      document.body.classList.remove("using-mouse");
      document.body.classList.add("using-keyboard");
    }
  });

  var hasFocus = $(":focus");

  function headerHeightCalc() {
    var headerHeight = $("header").outerHeight();
    $(".skip-links").css("top", headerHeight);
  }

  // bind a click event to the 'skip' link
  $(".skip-to-link").click(function (event) {
    // strip the leading hash and declare
    // the content we're skipping to
    var skipTo = "#" + this.href.split("#")[1];

    // Setting 'tabindex' to -1 takes an element out of normal
    // tab flow but allows it to be focused via javascript
    $(skipTo)
      .attr("tabindex", -1)
      .on("blur focusout", function () {
        // when focus leaves this element,
        // remove the tabindex attribute
        $(this).removeAttr("tabindex");
      })
      .focus(); // focus on the content container
  });

  /*
	// KEYDOWN AND SKIP NAV FOR ACCESSIBILITY
	$('.skip-links').keypress(function() {
		$('nav li a').each(function() {
			$(this).attr('tabindex', '-1');
		});
		$(this).next().find('.logo a').attr('tabindex', '-1');
		$(this).next().find('.searchIcon a').attr('tabindex', '-1');
	});
	
	$(document).on('keydown', function() { 
		$('nav li a').each(function() {
			$(this).removeAttr('tabindex');
		});
		$('.logo a').removeAttr('tabindex');
		$('.searchIcon a').removeAttr('tabindex');
    });
	*/

  // MATCHMEDIA POLYFILL FOR IE9
  window.matchMedia ||
    (window.matchMedia = (function () {
      "use strict";

      // For browsers that support matchMedium api such as IE 9 and webkit
      var styleMedia = window.styleMedia || window.media;

      // For those that don't support matchMedium
      if (!styleMedia) {
        var style = document.createElement("style"),
          script = document.getElementsByTagName("script")[0],
          info = null;
        style.type = "text/css";
        style.id = "matchmediajs-test";
        if (!script) {
          document.head.appendChild(style);
        } else {
          script.parentNode.insertBefore(style, script);
        }

        // 'style.currentStyle' is used by IE <= 8 and 'window.getComputedStyle' for all other browsers
        info =
          ("getComputedStyle" in window &&
            window.getComputedStyle(style, null)) ||
          style.currentStyle;
        styleMedia = {
          matchMedium: function (media) {
            var text =
              "@media " + media + "{ #matchmediajs-test { width: 1px; } }";

            // 'style.styleSheet' is used by IE <= 8 and 'style.textContent' for all other browsers
            if (style.styleSheet) {
              style.styleSheet.cssText = text;
            } else {
              style.textContent = text;
            }

            // Test if media query is true or false
            return info.width === "1px";
          },
        };
      }

      return function (media) {
        return {
          matches: styleMedia.matchMedium(media || "all"),
          media: media || "all",
        };
      };
    })());
  function addDataObjectFit() {
    $(".imageStripInner").each(function () {
      $(this).children().attr("data-object-fit", "cover");
    });
  }

  /*
	var viewportHeight = $(window).height();
	function heroHeight() {
		$('.heroContent').height( viewportHeight );
	}
	*/

  // SEARCH BAR
  $(".searchIcon").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("hide");
    $(this).next().toggleClass("reveal");
    $(this).prev().toggleClass("hide");
    $(this).prev().prev().toggleClass("hide");
  });
  $(".closeIcon").click(function (e) {
    e.preventDefault();
    $(this).parent().toggleClass("reveal");
    $(this).parent().prev().toggleClass("hide");
    $(this).parent().prev().prev().toggleClass("hide");
    $(this).parent().prev().prev().prev().toggleClass("hide");
  });

  function calcCardHeight() {
    var cardHeight = $(".display-medium-item").height();
    $(".display-medium-item").find(".medium-image").css("height", cardHeight);
  }

  // EVENTBRITE CARDS
  $(".eaw-li").each(function () {
    $(this).children().wrapAll('<div class="innerCardContainer"></div>');
    $(this)
      .find(".innerCardContainer")
      .children(".eaw-title, .eaw-time")
      .wrapAll('<div class="colInner"></div>');
  });

  // ACCORDION FUNCTIONALITY
  $(".tabRow > a").click(function (e) {
    e.preventDefault();
    $(this).next().slideToggle();
    $(this).toggleClass("rotate");
  });

  function toggleMenu() {
    $("body").toggleClass("menuOpen");

    var hamburgerIcon = $(".hamburger"),
      mobileNav = $(".mobile-nav");

    if ($(".menuOpen").length) {
      mobileNav.slideDown();
      hamburgerIcon.addClass("is-active");
    } else {
      mobileNav.slideUp();
      hamburgerIcon.removeClass("is-active");
    }
  }

  // MOBILE MENU
  $(".hamburger").click(function (e) {
    e.preventDefault();
    toggleMenu();
  });

  /*
  $(".mobile-nav .menu-item-has-children").click(function () {
    //e.preventDefault();
    $(this).children(".sub-menu").slideToggle();
    $(this).toggleClass("open");
  });
  */

  // FIX HEADER ON SCROLL
  function stickyHeader() {
    $("header").toggleClass("scroll");
  }

  $(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
      $("header").addClass("scroll");
    } else {
      $("header").removeClass("scroll");
    }
    headerHeightCalc();
  });

  // SMOOTH SCROLL
  $('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          //setTimeout(function(){
          $("html,body").animate(
            {
              scrollTop: target.offset().top,
            },
            500
          );
          return false;
        }
      }
    });

  function animateHoverHeight() {
    var overlaidText = $(".overlaidText"),
      colInner = $("#buckets .colInner, .contentPortal").height();
    $("#buckets a, .contentPortal")
      .mouseenter(function () {
        $(this).find(overlaidText).css("height", colInner);
      })
      .mouseleave(function () {
        $(this).find(overlaidText).css("height", "80px");
      });
  }

  $(function () {
    var targetedLink = $(".menu-item-has-children > a"),
      hasHashInHref = targetedLink.attr("href");
    if (hasHashInHref.indexOf("#") != -1) {
      targetedLink.css({
        cursor: "auto",
        "pointer-events": "none",
      });
    }

    animateHoverHeight();
    //heroHeight();

    // SLICK SLIDER
    $(".carousel").slick({
      adaptiveHeight: true,
      dots: true,
    });

    //calcCardHeight();
  });

  /*
	window.addEventListener("resize", function() {
		animateHoverHeight();
		heroHeight();
	}, false);
	*/

  $(window).resize(function () {
    animateHoverHeight();
    //heroHeight();
    //calcCardHeight();
  });

  $(window).load(function () {
    addDataObjectFit();
    headerHeightCalc();
  });
})(jQuery);
