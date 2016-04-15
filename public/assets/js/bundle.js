(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

/*
 * Template Name: Unify - Responsive Bootstrap Template
 * Description: Business, Corporate, Portfolio, E-commerce and Blog Theme.
 * Version: 1.7
 * Author: @htmlstream
 * Website: http://htmlstream.com
*/

var App = function () {
    //Fixed Header
    function handleHeader() {
        jQuery(window).scroll(function () {
            if (jQuery(window).scrollTop()) {
                jQuery(".header-fixed .header-sticky").addClass("header-fixed-shrink");
            } else {
                jQuery(".header-fixed .header-sticky").removeClass("header-fixed-shrink");
            }
        });
    }

    //Header Mega Menu
    function handleMegaMenu() {
        jQuery(document).on('click', '.mega-menu .dropdown-menu', function (e) {
            e.stopPropagation();
        });
    }

    //Search Box (Header)
    function handleSearch() {
        jQuery('.search').click(function () {
            if (jQuery('.search-btn').hasClass('fa-search')) {
                jQuery('.search-open').fadeIn(500);
                jQuery('.search-btn').removeClass('fa-search');
                jQuery('.search-btn').addClass('fa-times');
            } else {
                jQuery('.search-open').fadeOut(500);
                jQuery('.search-btn').addClass('fa-search');
                jQuery('.search-btn').removeClass('fa-times');
            }
        });
    }

    //Search Box v1 (Header v5)
    function handleSearchV1() {
        jQuery('.header-v5 .search-button').click(function () {
            jQuery('.header-v5 .search-open').slideDown();
        });

        jQuery('.header-v5 .search-close').click(function () {
            jQuery('.header-v5 .search-open').slideUp();
        });

        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 1) jQuery('.header-v5 .search-open').fadeOut('fast');
        });
    }

    // Search Box v2 (Header v8)
    function handleSearchV2() {
        $(".blog-topbar .search-btn").on("click", function () {
            if (jQuery(".topbar-search-block").hasClass("topbar-search-visible")) {
                jQuery(".topbar-search-block").slideUp();
                jQuery(".topbar-search-block").removeClass("topbar-search-visible");
            } else {
                jQuery(".topbar-search-block").slideDown();
                jQuery(".topbar-search-block").addClass("topbar-search-visible");
            }
        });
        $(".blog-topbar .search-close").on("click", function () {
            jQuery(".topbar-search-block").slideUp();
            jQuery(".topbar-search-block").removeClass("topbar-search-visible");
        });
        jQuery(window).scroll(function () {
            jQuery(".topbar-search-block").slideUp();
            jQuery(".topbar-search-block").removeClass("topbar-search-visible");
        });
    }

    // TopBar (Header v8)
    function handleTopBar() {
        $(".topbar-toggler").on("click", function () {
            if (jQuery(".topbar-toggler").hasClass("topbar-list-visible")) {
                jQuery(".topbar-menu").slideUp();
                jQuery(this).removeClass("topbar-list-visible");
            } else {
                jQuery(".topbar-menu").slideDown();
                jQuery(this).addClass("topbar-list-visible");
            }
        });
    }

    // TopBar SubMenu (Header v8)
    function handleTopBarSubMenu() {
        $(".topbar-list > li").on("click", function (e) {
            if (jQuery(this).children("ul").hasClass("topbar-dropdown")) {
                if (jQuery(this).children("ul").hasClass("topbar-dropdown-visible")) {
                    jQuery(this).children(".topbar-dropdown").slideUp();
                    jQuery(this).children(".topbar-dropdown").removeClass("topbar-dropdown-visible");
                } else {
                    jQuery(this).children(".topbar-dropdown").slideDown();
                    jQuery(this).children(".topbar-dropdown").addClass("topbar-dropdown-visible");
                }
            }
            //e.preventDefault();
        });
    }

    //Sidebar Navigation Toggle
    function handleToggle() {
        jQuery('.list-toggle').on('click', function () {
            jQuery(this).toggleClass('active');
        });

        /*
        jQuery('#serviceList').on('shown.bs.collapse'), function() {
            jQuery(".servicedrop").addClass('glyphicon-chevron-up').removeClass('glyphicon-chevron-down');
        }
          jQuery('#serviceList').on('hidden.bs.collapse'), function() {
            jQuery(".servicedrop").addClass('glyphicon-chevron-down').removeClass('glyphicon-chevron-up');
        }
        */
    }

    //Equal Height Columns   
    function handleEqualHeightColumns() {
        var EqualHeightColumns = function EqualHeightColumns() {
            $(".equal-height-columns").each(function () {
                heights = [];
                $(".equal-height-column", this).each(function () {
                    $(this).removeAttr("style");
                    heights.push($(this).height()); // write column's heights to the array
                });
                $(".equal-height-column", this).height(Math.max.apply(Math, heights)); //find and set max
            });
        };

        EqualHeightColumns();
        $(window).resize(function () {
            EqualHeightColumns();
        });
        $(window).load(function () {
            EqualHeightColumns("img.equal-height-column");
        });
    }

    //Hover Selector
    function handleHoverSelector() {
        $('.hoverSelector').on('hover', function (e) {
            $('.hoverSelectorBlock', this).toggleClass('show');
            e.stopPropagation();
        });
    }

    //Bootstrap Tooltips and Popovers
    function handleBootstrap() {
        /*Bootstrap Carousel*/
        jQuery('.carousel').carousel({
            interval: 15000,
            pause: 'hover'
        });

        /*Tooltips*/
        jQuery('.tooltips').tooltip();
        jQuery('.tooltips-show').tooltip('show');
        jQuery('.tooltips-hide').tooltip('hide');
        jQuery('.tooltips-toggle').tooltip('toggle');
        jQuery('.tooltips-destroy').tooltip('destroy');

        /*Popovers*/
        jQuery('.popovers').popover();
        jQuery('.popovers-show').popover('show');
        jQuery('.popovers-hide').popover('hide');
        jQuery('.popovers-toggle').popover('toggle');
        jQuery('.popovers-destroy').popover('destroy');
    }

    return {
        init: function init() {
            handleBootstrap();
            handleSearch();
            handleSearchV1();
            handleSearchV2();
            handleTopBar();
            handleTopBarSubMenu();
            handleToggle();
            handleHeader();
            handleMegaMenu();
            handleHoverSelector();
            handleEqualHeightColumns();
        },

        //Counters
        initCounter: function initCounter() {
            jQuery('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        },

        //Parallax Backgrounds
        initParallaxBg: function initParallaxBg() {
            jQuery(window).load(function () {
                jQuery('.parallaxBg').parallax("50%", 0.2);
                jQuery('.parallaxBg1').parallax("50%", 0.4);
            });
        },

        //Scroll Bar
        initScrollBar: function initScrollBar() {
            jQuery('.mCustomScrollbar').mCustomScrollbar({
                theme: "minimal",
                scrollInertia: 200,
                scrollEasing: "linear"
            });
        },

        // Sidebar Menu Dropdown
        initSidebarMenuDropdown: function initSidebarMenuDropdown() {
            function SidebarMenuDropdown() {
                jQuery('.header-v7 .dropdown-toggle').on('click', function () {
                    jQuery('.header-v7 .dropdown-menu').stop(true, false).slideUp();
                    jQuery('.header-v7 .dropdown').removeClass('open');

                    if (jQuery(this).siblings('.dropdown-menu').is(":hidden") == true) {
                        jQuery(this).siblings('.dropdown-menu').stop(true, false).slideDown();
                        jQuery(this).parents('.dropdown').addClass('open');
                    }
                });
            }
            SidebarMenuDropdown();
        },

        //Animate Dropdown
        initAnimateDropdown: function initAnimateDropdown() {
            function MenuMode() {
                jQuery('.dropdown').on('show.bs.dropdown', function () {
                    jQuery(this).find('.dropdown-menu').first().stop(true, true).slideDown();
                });
                jQuery('.dropdown').on('hide.bs.dropdown', function () {
                    jQuery(this).find('.dropdown-menu').first().stop(true, true).slideUp();
                });
            }

            jQuery(window).resize(function () {
                if (jQuery(window).width() > 768) {
                    MenuMode();
                }
            });

            if (jQuery(window).width() > 768) {
                MenuMode();
            }
        }

    };
}();

},{}],2:[function(require,module,exports){
'use strict';

var ContactForm = function () {

				return {

								//Contact Form
								initContactForm: function initContactForm() {
												// Validation
												$("#sky-form3").validate({
																// Rules for form validation
																rules: {
																				name: {
																								required: true
																				},
																				email: {
																								required: true,
																								email: true
																				},
																				message: {
																								required: true,
																								minlength: 10
																				},
																				captcha: {
																								required: true,
																								remote: 'assets/plugins/sky-forms/version-2.0.1/captcha/process.php'
																				}
																},

																// Messages for form validation
																messages: {
																				name: {
																								required: 'Please enter your name'
																				},
																				email: {
																								required: 'Please enter your email address',
																								email: 'Please enter a VALID email address'
																				},
																				message: {
																								required: 'Please enter your message'
																				},
																				captcha: {
																								required: 'Please enter characters',
																								remote: 'Correct captcha is required'
																				}
																},

																// Ajax form submition                 
																submitHandler: function submitHandler(form) {
																				$(form).ajaxSubmit({
																								beforeSend: function beforeSend() {
																												$('#sky-form3 button[type="submit"]').attr('disabled', true);
																								},
																								success: function success() {
																												$("#sky-form3").addClass('submited');
																								}
																				});
																},

																// Do not change code below
																errorPlacement: function errorPlacement(error, element) {
																				error.insertAfter(element.parent());
																}
												});
								}

				};
}();

},{}],3:[function(require,module,exports){
'use strict';

(function ($, window, document, undefined) {
    'use strict';

    var gridContainer = $('#grid-container'),
        filtersContainer = $('#filters-container'),
        wrap,
        filtersCallback;

    /*******************************
        init cubeportfolio
     ****************************** */
    gridContainer.cubeportfolio({
        layoutMode: 'grid',
        rewindNav: true,
        scrollByPage: false,
        mediaQueries: [{
            width: 1100,
            cols: 3
        }, {
            width: 800,
            cols: 3
        }, {
            width: 500,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        defaultFilter: '*',
        animationType: 'rotateSides',
        gapHorizontal: 10,
        gapVertical: 10,
        gridAdjustment: 'responsive',
        caption: 'overlayBottomPush',
        displayType: 'sequentially',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageCallback: function singlePageCallback(url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
        },

        // singlePageInline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'below',
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function singlePageInlineCallback(url, element) {
            // to update singlePageInline content use the following method: this.updateSinglePageInline(yourContent)
            var t = this;

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                timeout: 5000
            }).done(function (result) {

                t.updateSinglePageInline(result);
            }).fail(function () {
                t.updateSinglePageInline("Ошибка! Попробуйте обновить страницу!");
            });
        }
    });

    /*********************************
        add listener for filters
     *********************************/
    if (filtersContainer.hasClass('cbp-l-filters-dropdown')) {
        wrap = filtersContainer.find('.cbp-l-filters-dropdownWrap');

        wrap.on({
            'mouseover.cbp': function mouseoverCbp() {
                wrap.addClass('cbp-l-filters-dropdownWrap-open');
            },
            'mouseleave.cbp': function mouseleaveCbp() {
                wrap.removeClass('cbp-l-filters-dropdownWrap-open');
            }
        });

        filtersCallback = function filtersCallback(me) {
            wrap.find('.cbp-filter-item').removeClass('cbp-filter-item-active');
            wrap.find('.cbp-l-filters-dropdownHeader').text(me.text());
            me.addClass('cbp-filter-item-active');
            wrap.trigger('mouseleave.cbp');
        };
    } else {
        filtersCallback = function filtersCallback(me) {
            me.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
        };
    }

    filtersContainer.on('click.cbp', '.cbp-filter-item', function () {
        var me = $(this);

        if (me.hasClass('cbp-filter-item-active')) {
            return;
        }

        // get cubeportfolio data and check if is still animating (reposition) the items.
        if (!$.data(gridContainer[0], 'cubeportfolio').isAnimating) {
            filtersCallback.call(null, me);
        }

        // filter the items
        gridContainer.cubeportfolio('filter', me.data('filter'), function () {});
    });

    /*********************************
        activate counter for filters
     *********************************/
    gridContainer.cubeportfolio('showCounter', filtersContainer.find('.cbp-filter-item'), function () {
        // read from url and change filter active
        var match = /#cbpf=(.*?)([#|?&]|$)/gi.exec(location.href),
            item;
        if (match !== null) {
            item = filtersContainer.find('.cbp-filter-item').filter('[data-filter="' + match[1] + '"]');
            if (item.length) {
                filtersCallback.call(null, item);
            }
        }
    });

    /*********************************
        add listener for load more
     *********************************/
    $('.cbp-l-loadMore-button-link').on('click.cbp', function (e) {
        e.preventDefault();
        var clicks,
            me = $(this),
            oMsg;

        if (me.hasClass('cbp-l-loadMore-button-stop')) {
            return;
        }

        // get the number of times the loadMore link has been clicked
        clicks = $.data(this, 'numberOfClicks');
        clicks = clicks ? ++clicks : 1;
        $.data(this, 'numberOfClicks', clicks);

        // set loading status
        oMsg = me.text();
        me.text('ЗАГРУЗКА...');

        // perform ajax request
        $.ajax({
            url: me.attr('href'),
            type: 'GET',
            dataType: 'HTML'
        }).done(function (result) {
            var items, itemsNext;

            // find current container
            items = $(result).filter(function () {
                return $(this).is('div' + '.cbp-loadMore-block' + clicks);
            });

            gridContainer.cubeportfolio('appendItems', items.html(), function () {
                // put the original message back
                me.text(oMsg);

                // check if we have more works
                itemsNext = $(result).filter(function () {
                    return $(this).is('div' + '.cbp-loadMore-block' + (clicks + 1));
                });

                if (itemsNext.length === 0) {
                    me.text('ПОКАЗАНЫ ВСЕ МЕРОПРИЯТИЯ');
                    me.addClass('cbp-l-loadMore-button-stop');
                }
            });
        }).fail(function () {
            // error
        });
    });
})(jQuery, window, document);

},{}],4:[function(require,module,exports){
/* Write here your custom javascript codes */
"use strict";

},{}],5:[function(require,module,exports){
'use strict';

var LoginForm = function () {

				return {

								//Masking
								initLoginForm: function initLoginForm() {
												// Validation for login form
												$("#sky-form1").validate({
																// Rules for form validation
																rules: {
																				email: {
																								required: true,
																								email: true
																				},
																				password: {
																								required: true,
																								minlength: 3,
																								maxlength: 20
																				}
																},

																// Messages for form validation
																messages: {
																				email: {
																								required: 'Please enter your email address',
																								email: 'Please enter a VALID email address'
																				},
																				password: {
																								required: 'Please enter your password'
																				}
																},

																// Do not change code below
																errorPlacement: function errorPlacement(error, element) {
																				error.insertAfter(element.parent());
																}
												});

												// Validation for recovery form
												$("#sky-form2").validate({
																// Rules for form validation
																rules: {
																				email: {
																								required: true,
																								email: true
																				}
																},

																// Messages for form validation
																messages: {
																				email: {
																								required: 'Please enter your email address',
																								email: 'Please enter a VALID email address'
																				}
																},

																// Ajax form submition                 
																submitHandler: function submitHandler(form) {
																				$(form).ajaxSubmit({
																								success: function success() {
																												$("#sky-form2").addClass('submited');
																								}
																				});
																},

																// Do not change code below
																errorPlacement: function errorPlacement(error, element) {
																				error.insertAfter(element.parent());
																}
												});
								}

				};
}();

},{}],6:[function(require,module,exports){
'use strict';

/*
 * Template Name: Unify - Responsive Bootstrap Template
 * Description: Business, Corporate, Portfolio and Blog Theme.
 * Version: 1.8
 * Author: @htmlstream
 * Website: http://htmlstream.com
*/

var App = function () {

  function handleBootstrap() {
    /*Bootstrap Carousel*/
    jQuery('.carousel').carousel({
      interval: 15000,
      pause: 'hover'
    });

    /*Tooltips*/
    jQuery('.tooltips').tooltip();
    jQuery('.tooltips-show').tooltip('show');
    jQuery('.tooltips-hide').tooltip('hide');
    jQuery('.tooltips-toggle').tooltip('toggle');
    jQuery('.tooltips-destroy').tooltip('destroy');

    /*Popovers*/
    jQuery('.popovers').popover();
    jQuery('.popovers-show').popover('show');
    jQuery('.popovers-hide').popover('hide');
    jQuery('.popovers-toggle').popover('toggle');
    jQuery('.popovers-destroy').popover('destroy');
  }

  var handleFullscreen = function handleFullscreen() {
    var WindowHeight = $(window).height();

    if ($(document.body).hasClass("promo-padding-top")) {
      HeaderHeight = $(".header").height();
    } else {
      HeaderHeight = 0;
    }

    $(".fullheight").css("height", WindowHeight - HeaderHeight);

    $(window).resize(function () {
      var WindowHeight = $(window).height();
      $(".fullheight").css("height", WindowHeight - HeaderHeight);
    });
  };

  // handleLangs
  function handleLangs() {
    $(".lang-block").click(function () {
      console.log("click!");
    });
  }

  var handleValignMiddle = function handleValignMiddle() {
    $(".valign__middle").each(function () {
      $(this).css("padding-top", $(this).parent().height() / 2 - $(this).height() / 2);
    });
    $(window).resize(function () {
      $(".valign__middle").each(function () {
        $(this).css("padding-top", $(this).parent().height() / 2 - $(this).height() / 2);
      });
    });
  };

  function handleHeader() {
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function () {
      if ($(".navbar").offset().top > 150) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
      } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
      }
    });

    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function () {
      $('.page-scroll a').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
      });
    });

    //Collapse Navbar When It's Clickicked
    $(window).scroll(function () {
      $(".navbar-collapse.in").collapse('hide');
    });
  }

  return {
    init: function init() {
      handleHeader();
      handleBootstrap();
      //handleLangs();
      handleFullscreen();
      handleValignMiddle();
    },

    initCounter: function initCounter() {
      jQuery('.counter').counterUp({
        delay: 10,
        time: 1000
      });
    },

    initParallaxBg: function initParallaxBg() {
      $(window).load(function () {
        jQuery('.parallaxBg').parallax("50%", 0.4);
        jQuery('.parallaxBg1').parallax("50%", 0.2);
      });
    },

    initParallaxBg2: function initParallaxBg2() {
      $(window).load(function () {
        jQuery('.parallaxBg').parallax("50%", "50%");
      });
    }

  };
}();

},{}],7:[function(require,module,exports){
"use strict";

var OwlCarousel = function () {

    return {

        //Owl Carousel
        initOwlCarousel: function initOwlCarousel() {
            //Owl Slider v1
            jQuery(".owl-slider").owlCarousel({
                itemsDesktop: [1000, 5],
                itemsDesktopSmall: [900, 4],
                itemsTablet: [600, 3],
                itemsMobile: [479, 2]
            });
            // Custom Navigation Events
            jQuery(".next-v1").click(function () {
                owl.trigger('owl.next');
            });
            jQuery(".prev-v1").click(function () {
                owl.trigger('owl.prev');
            });

            //Owl Slider v2
            jQuery(".owl-slider-v2").owlCarousel({
                itemsDesktop: [1000, 5],
                itemsDesktopSmall: [900, 4],
                itemsTablet: [600, 3],
                itemsMobile: [479, 2],
                slideSpeed: 1000
            });
            // Custom Navigation Events
            jQuery(".next-v2").click(function () {
                owl.trigger('owl.next');
            });
            jQuery(".prev-v2").click(function () {
                owl.trigger('owl.prev');
            });

            //Owl Slider v3
            jQuery(".owl-slider-v3").owlCarousel({
                items: 9,
                autoPlay: 5000,
                itemsDesktop: [1000, 5],
                itemsDesktopSmall: [900, 4],
                itemsTablet: [600, 3],
                itemsMobile: [300, 2]
            });

            //Owl Slider v4
            jQuery(".owl-slider-v4").owlCarousel({
                items: 3,
                itemsDesktop: [1000, 3],
                itemsTablet: [600, 2],
                itemsMobile: [479, 1]
            });

            //Owl Twitter v1
            jQuery(".owl-twitter-v1").owlCarousel({
                singleItem: true,
                slideSpeed: 1000,
                autoPlay: 10000
            });

            //Owl Testimonials v1
            jQuery(".owl-ts-v1").owlCarousel({
                slideSpeed: 600,
                singleItem: true,
                navigation: true,
                navigationText: ["", ""]
            });

            //Owl Clients v1
            jQuery(".owl-clients-v1").owlCarousel({
                items: 7,
                autoPlay: 5000,
                itemsDesktop: [1000, 5],
                itemsDesktopSmall: [900, 4],
                itemsTablet: [600, 3],
                itemsMobile: [300, 2]
            });

            //Owl Clients v2
            jQuery(".owl-clients-v2").owlCarousel({
                items: 5,
                autoPlay: 10000,
                itemsDesktop: [1000, 5],
                itemsDesktopSmall: [900, 4],
                itemsTablet: [600, 3],
                itemsMobile: [479, 1]
            });
        }

    };
}();

},{}],8:[function(require,module,exports){
"use strict";

paceOptions = {
  // Disable the 'elements' source
  elements: false,

  // Only show the progress on regular and ajax-y page navigation,
  // not every request
  restartOnRequestAfter: false
};

},{}],9:[function(require,module,exports){
"use strict";

var RevolutionSlider = function () {

  return {

    //Revolution Slider - Full Screen
    initRSfullScreen: function initRSfullScreen() {
      var revapi;
      jQuery(document).ready(function () {
        revapi = jQuery('.fullscreenbanner').revolution({
          delay: 15000,
          startwidth: 1170,
          startheight: 500,
          hideThumbs: 10,
          fullWidth: "on",
          fullScreen: "on",
          hideCaptionAtLimit: "",
          dottedOverlay: "twoxtwo",
          navigationStyle: "preview4",
          fullScreenOffsetContainer: ""
        });
      });
    }

  };
}();

},{}]},{},[4,1,6,2,3,5,7,8,9]);

//# sourceMappingURL=bundle.js.map
