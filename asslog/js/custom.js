/*jslint browser: true*/
/*global $, jQuery, alert*/
var FONT_COLOR="#2d353c",FONT_FAMILY="Open Sans, Helvetica Neue,Helvetica,Arial,sans-serif",FONT_WEIGHT="600",FONT_SIZE="12px",COLOR_BLUE="#348fe2",COLOR_BLUE_LIGHTER="#5da5e8",COLOR_BLUE_DARKER="#2a72b5",COLOR_BLUE_TRANSPARENT_1="rgba(52, 143, 226, 0.1)",COLOR_BLUE_TRANSPARENT_2="rgba(52, 143, 226, 0.2)",COLOR_BLUE_TRANSPARENT_3="rgba(52, 143, 226, 0.3)",COLOR_BLUE_TRANSPARENT_4="rgba(52, 143, 226, 0.4)",COLOR_BLUE_TRANSPARENT_5="rgba(52, 143, 226, 0.5)",COLOR_BLUE_TRANSPARENT_6="rgba(52, 143, 226, 0.6)",COLOR_BLUE_TRANSPARENT_7="rgba(52, 143, 226, 0.7)",COLOR_BLUE_TRANSPARENT_8="rgba(52, 143, 226, 0.8)",COLOR_BLUE_TRANSPARENT_9="rgba(52, 143, 226, 0.9)",COLOR_AQUA="#5AC8FA",COLOR_AQUA_LIGHTER="#6dc5de",COLOR_AQUA_DARKER="#3a92ab",COLOR_AQUA_TRANSPARENT_1="rgba(73, 182, 214, 0.1)",COLOR_AQUA_TRANSPARENT_2="rgba(73, 182, 214, 0.2)",COLOR_AQUA_TRANSPARENT_3="rgba(73, 182, 214, 0.3)",COLOR_AQUA_TRANSPARENT_4="rgba(73, 182, 214, 0.4)",COLOR_AQUA_TRANSPARENT_5="rgba(73, 182, 214, 0.5)",COLOR_AQUA_TRANSPARENT_6="rgba(73, 182, 214, 0.6)",COLOR_AQUA_TRANSPARENT_7="rgba(73, 182, 214, 0.7)",COLOR_AQUA_TRANSPARENT_8="rgba(73, 182, 214, 0.8)",COLOR_AQUA_TRANSPARENT_9="rgba(73, 182, 214, 0.9)",COLOR_GREEN="#00ACAC",COLOR_GREEN_LIGHTER="#33bdbd",COLOR_GREEN_DARKER="#008a8a",COLOR_GREEN_TRANSPARENT_1="rgba(0, 172, 172, 0.1)",COLOR_GREEN_TRANSPARENT_2="rgba(0, 172, 172, 0.2)",COLOR_GREEN_TRANSPARENT_3="rgba(0, 172, 172, 0.3)",COLOR_GREEN_TRANSPARENT_4="rgba(0, 172, 172, 0.4)",COLOR_GREEN_TRANSPARENT_5="rgba(0, 172, 172, 0.5)",COLOR_GREEN_TRANSPARENT_6="rgba(0, 172, 172, 0.6)",COLOR_GREEN_TRANSPARENT_7="rgba(0, 172, 172, 0.7)",COLOR_GREEN_TRANSPARENT_8="rgba(0, 172, 172, 0.8)",COLOR_GREEN_TRANSPARENT_9="rgba(0, 172, 172, 0.9)",COLOR_YELLOW="#ffd900",COLOR_YELLOW_LIGHTER="#fde248",COLOR_YELLOW_DARKER="#bfa300",COLOR_YELLOW_TRANSPARENT_1="rgba(255, 217, 0, 0.1)",COLOR_YELLOW_TRANSPARENT_2="rgba(255, 217, 0, 0.2)",COLOR_YELLOW_TRANSPARENT_3="rgba(255, 217, 0, 0.3)",COLOR_YELLOW_TRANSPARENT_4="rgba(255, 217, 0, 0.4)",COLOR_YELLOW_TRANSPARENT_5="rgba(255, 217, 0, 0.5)",COLOR_YELLOW_TRANSPARENT_6="rgba(255, 217, 0, 0.6)",COLOR_YELLOW_TRANSPARENT_7="rgba(255, 217, 0, 0.7)",COLOR_YELLOW_TRANSPARENT_8="rgba(255, 217, 0, 0.8)",COLOR_YELLOW_TRANSPARENT_9="rgba(255, 217, 0, 0.9)",COLOR_ORANGE="#f59c1a",COLOR_ORANGE_LIGHTER="#f7b048",COLOR_ORANGE_DARKER="#c47d15",COLOR_ORANGE_TRANSPARENT_1="rgba(245, 156, 26, 0.1)",COLOR_ORANGE_TRANSPARENT_2="rgba(245, 156, 26, 0.2)",COLOR_ORANGE_TRANSPARENT_3="rgba(245, 156, 26, 0.3)",COLOR_ORANGE_TRANSPARENT_4="rgba(245, 156, 26, 0.4)",COLOR_ORANGE_TRANSPARENT_5="rgba(245, 156, 26, 0.5)",COLOR_ORANGE_TRANSPARENT_6="rgba(245, 156, 26, 0.6)",COLOR_ORANGE_TRANSPARENT_7="rgba(245, 156, 26, 0.7)",COLOR_ORANGE_TRANSPARENT_8="rgba(245, 156, 26, 0.8)",COLOR_ORANGE_TRANSPARENT_9="rgba(245, 156, 26, 0.9)",COLOR_PURPLE="#727cb6",COLOR_PURPLE_LIGHTER="#8e96c5",COLOR_PURPLE_DARKER="#5b6392",COLOR_PURPLE_TRANSPARENT_1="rgba(114, 124, 182, 0.1)",COLOR_PURPLE_TRANSPARENT_2="rgba(114, 124, 182, 0.2)",COLOR_PURPLE_TRANSPARENT_3="rgba(114, 124, 182, 0.3)",COLOR_PURPLE_TRANSPARENT_4="rgba(114, 124, 182, 0.4)",COLOR_PURPLE_TRANSPARENT_5="rgba(114, 124, 182, 0.5)",COLOR_PURPLE_TRANSPARENT_6="rgba(114, 124, 182, 0.6)",COLOR_PURPLE_TRANSPARENT_7="rgba(114, 124, 182, 0.7)",COLOR_PURPLE_TRANSPARENT_8="rgba(114, 124, 182, 0.8)",COLOR_PURPLE_TRANSPARENT_9="rgba(114, 124, 182, 0.9)",COLOR_RED="#ff5b57",COLOR_RED_LIGHTER="#ff7c79",COLOR_RED_DARKER="#cc4946",COLOR_RED_TRANSPARENT_1="rgba(255, 91, 87, 0.1)",COLOR_RED_TRANSPARENT_2="rgba(255, 91, 87, 0.2)",COLOR_RED_TRANSPARENT_3="rgba(255, 91, 87, 0.3)",COLOR_RED_TRANSPARENT_4="rgba(255, 91, 87, 0.4)",COLOR_RED_TRANSPARENT_5="rgba(255, 91, 87, 0.5)",COLOR_RED_TRANSPARENT_6="rgba(255, 91, 87, 0.6)",COLOR_RED_TRANSPARENT_7="rgba(255, 91, 87, 0.7)",COLOR_RED_TRANSPARENT_8="rgba(255, 91, 87, 0.8)",COLOR_RED_TRANSPARENT_9="rgba(255, 91, 87, 0.9)",COLOR_GREY="#b6c2c9",COLOR_GREY_LIGHTER="#c5ced4",COLOR_GREY_DARKER="#929ba1",COLOR_GREY_TRANSPARENT_1="rgba(182, 194, 201, 0.1)",COLOR_GREY_TRANSPARENT_2="rgba(182, 194, 201, 0.2)",COLOR_GREY_TRANSPARENT_3="rgba(182, 194, 201, 0.3)",COLOR_GREY_TRANSPARENT_4="rgba(182, 194, 201, 0.4)",COLOR_GREY_TRANSPARENT_5="rgba(182, 194, 201, 0.5)",COLOR_GREY_TRANSPARENT_6="rgba(182, 194, 201, 0.6)",COLOR_GREY_TRANSPARENT_7="rgba(182, 194, 201, 0.7)",COLOR_GREY_TRANSPARENT_8="rgba(182, 194, 201, 0.8)",COLOR_GREY_TRANSPARENT_9="rgba(182, 194, 201, 0.9)",COLOR_SILVER="#f0f3f4",COLOR_SILVER_LIGHTER="#f4f6f7",COLOR_SILVER_DARKER="#b4b6b7",COLOR_SILVER_TRANSPARENT_1="rgba(240, 243, 244, 0.1)",COLOR_SILVER_TRANSPARENT_2="rgba(240, 243, 244, 0.2)",COLOR_SILVER_TRANSPARENT_3="rgba(240, 243, 244, 0.3)",COLOR_SILVER_TRANSPARENT_4="rgba(240, 243, 244, 0.4)",COLOR_SILVER_TRANSPARENT_5="rgba(240, 243, 244, 0.5)",COLOR_SILVER_TRANSPARENT_6="rgba(240, 243, 244, 0.6)",COLOR_SILVER_TRANSPARENT_7="rgba(240, 243, 244, 0.7)",COLOR_SILVER_TRANSPARENT_8="rgba(240, 243, 244, 0.8)",COLOR_SILVER_TRANSPARENT_9="rgba(240, 243, 244, 0.9)",COLOR_BLACK="#2d353c",COLOR_BLACK_LIGHTER="#575d63",COLOR_BLACK_DARKER="#242a30",COLOR_BLACK_TRANSPARENT_1="rgba(45, 53, 60, 0.1)",COLOR_BLACK_TRANSPARENT_2="rgba(45, 53, 60, 0.2)",COLOR_BLACK_TRANSPARENT_3="rgba(45, 53, 60, 0.3)",COLOR_BLACK_TRANSPARENT_4="rgba(45, 53, 60, 0.4)",COLOR_BLACK_TRANSPARENT_5="rgba(45, 53, 60, 0.5)",COLOR_BLACK_TRANSPARENT_6="rgba(45, 53, 60, 0.6)",COLOR_BLACK_TRANSPARENT_7="rgba(45, 53, 60, 0.7)",COLOR_BLACK_TRANSPARENT_8="rgba(45, 53, 60, 0.8)",COLOR_BLACK_TRANSPARENT_9="rgba(45, 53, 60, 0.9)",COLOR_WHITE="#FFFFFF",COLOR_WHITE_TRANSPARENT_1="rgba(255, 255, 255, 0.1)",COLOR_WHITE_TRANSPARENT_2="rgba(255, 255, 255, 0.2)",COLOR_WHITE_TRANSPARENT_3="rgba(255, 255, 255, 0.3)",COLOR_WHITE_TRANSPARENT_4="rgba(255, 255, 255, 0.4)",COLOR_WHITE_TRANSPARENT_5="rgba(255, 255, 255, 0.5)",COLOR_WHITE_TRANSPARENT_6="rgba(255, 255, 255, 0.6)",COLOR_WHITE_TRANSPARENT_7="rgba(255, 255, 255, 0.7)",COLOR_WHITE_TRANSPARENT_8="rgba(255, 255, 255, 0.8)",COLOR_WHITE_TRANSPARENT_9="rgba(255, 255, 255, 0.9)";

$(document).ready(function () {

    "use strict";

    var body = $("body");

    $(function () {
        $(".preloader").fadeOut();
        $('#side-menu').metisMenu();
    });

    /* ===== Open-Close Right Sidebar ===== */

    $(".right-side-toggle").on("click", function () {
        $(".right-sidebar").slideDown(50).toggleClass("shw-rside");
        $(".fxhdr").on("click", function () {
            body.toggleClass("fix-header"); /* Fix Header JS */
        });
        $(".fxsdr").on("click", function () {
            body.toggleClass("fix-sidebar"); /* Fix Sidebar JS */
        });

        /* ===== Service Panel JS ===== */

        var fxhdr = $('.fxhdr');
        if (body.hasClass("fix-header")) {
            fxhdr.attr('checked', true);
        } else {
            fxhdr.attr('checked', false);
        }
        if (body.hasClass("fix-sidebar")) {
            fxhdr.attr('checked', true);
        } else {
            fxhdr.attr('checked', false);
        }
    });

    /* ===========================================================
        Loads the correct sidebar on window load.
        collapses the sidebar on window resize.
        Sets the min-height of #page-wrapper to window size.
    =========================================================== */

    $(function () {
        var set = function () {
                var topOffset = 60,
                    width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width,
                    height = ((window.innerHeight > 0) ? window.innerHeight : this.screen.height) - 1;
                if (width < 768) {
                    $('div.navbar-collapse').addClass('collapse');
                    topOffset = 100; /* 2-row-menu */
                } else {
                    $('div.navbar-collapse').removeClass('collapse');
                }

                /* ===== This is for resizing window ===== */

                if (width < 1170) {
                    body.addClass('content-wrapper');
                    $(".open-close i").removeClass('icon-arrow-left-circle');
                    $(".sidebar-nav, .slimScrollDiv").css("overflow-x", "visible").parent().css("overflow", "visible");
                    $(".logo span").hide();
                } else {
                    body.removeClass('content-wrapper');
                    $(".open-close i").addClass('icon-arrow-left-circle');
                    $(".logo span").show();
                }

                height = height - topOffset;
                if (height < 1) {
                    height = 1;
                }
                if (height > topOffset) {
                    $("#page-wrapper").css("min-height", (height) + "px");
                }
            },
            url = window.location,
            element = $('ul.nav a').filter(function () {
                return this.href === url || url.href.indexOf(this.href) === 0;
            }).addClass('').parent().parent().addClass('in').parent();
        if (element.is('li')) {
            element.addClass('active');
        }
        $(window).ready(set);
        $(window).on("resize", set);
    });

    /* ===================================================
        This is for click on open close button
        Sidebar open close
    =================================================== */

    $(".open-close").on('click', function () {
        if ($("body").hasClass("content-wrapper")) {
            $("body").trigger("resize");
            $(".sidebar-nav, .slimScrollDiv").css("overflow", "hidden").parent().css("overflow", "visible");
            $("body").removeClass("content-wrapper");
            $(".open-close i").addClass("icon-arrow-left-circle");
            $(".logo span").show();
        } else {
            $("body").trigger("resize");
            $(".sidebar-nav, .slimScrollDiv").css("overflow-x", "visible").parent().css("overflow", "visible");
            $("body").addClass("content-wrapper");
            $(".open-close i").removeClass("icon-arrow-left-circle");
            $(".logo span").hide();
        }
    });

    /* ===== Collapsible Panels JS ===== */

    (function ($, window, document) {
        var panelSelector = '[data-perform="panel-collapse"]',
            panelRemover = '[data-perform="panel-dismiss"]';
        $(panelSelector).each(function () {
            var collapseOpts = {
                    toggle: false
                },
                parent = $(this).closest('.panel'),
                wrapper = parent.find('.panel-wrapper'),
                child = $(this).children('i');
            if (!wrapper.length) {
                wrapper = parent.children('.panel-heading').nextAll().wrapAll('<div/>').parent().addClass('panel-wrapper');
                collapseOpts = {};
            }
            wrapper.collapse(collapseOpts).on('hide.bs.collapse', function () {
                child.removeClass('ti-minus').addClass('ti-plus');
            }).on('show.bs.collapse', function () {
                child.removeClass('ti-plus').addClass('ti-minus');
            });
        });

        /* ===== Collapse Panels ===== */

        $(document).on('click', panelSelector, function (e) {
            e.preventDefault();
            var parent = $(this).closest('.panel'),
                wrapper = parent.find('.panel-wrapper');
            wrapper.collapse('toggle');
        });

        /* ===== Remove Panels ===== */

        $(document).on('click', panelRemover, function (e) {
            e.preventDefault();
            var removeParent = $(this).closest('.panel');

            function removeElement() {
                var col = removeParent.parent();
                removeParent.remove();
                col.filter(function () {
                    return ($(this).is('[class*="col-"]') && $(this).children('*').length === 0);
                }).remove();
            }
            removeElement();
        });
    }(jQuery, window, document));

    /* ===== Tooltip Initialization ===== */

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    /* ===== Popover Initialization ===== */

    $(function () {
        $('[data-toggle="popover"]').popover();
    });

    /* ===== Task Initialization ===== */

    $(".list-task li label").on("click", function () {
        $(this).toggleClass("task-done");
    });
    $(".settings_box a").on("click", function () {
        $("ul.theme_color").toggleClass("theme_block");
    });

    /* ===== Collepsible Toggle ===== */

    $(".collapseble").on("click", function () {
        $(".collapseblebox").fadeToggle(350);
    });

    /* ===== Sidebar ===== */

    $('.slimscrollright').slimScroll({
        height: '100%',
        position: 'right',
        size: "5px",
        color: '#dcdcdc'
    });
    $('.slimscrollsidebar').slimScroll({
        height: '100%',
        position: 'right',
        size: "5px",
        color: '#dcdcdc'
    });
    $('.chat-list').slimScroll({
        height: '100%',
        position: 'right',
        size: "5px",
        color: '#dcdcdc'
    });

    /* ===== Resize all elements ===== */

    body.trigger("resize");

    /* ===== Visited ul li ===== */

    $('.visited li a').on("click", function (e) {
        $('.visited li').removeClass('active');
        var $parent = $(this).parent();
        if (!$parent.hasClass('active')) {
            $parent.addClass('active');
        }
        e.preventDefault();
    });

    /* ===== Login and Recover Password ===== */

    $('#to-recover').on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });

    /* ================================================================= 
        Update 1.5
        this is for close icon when navigation open in mobile view
    ================================================================= */

    $(".navbar-toggle").on("click", function () {
        $(".navbar-toggle i").toggleClass("ti-menu").addClass("ti-close");
    });
});
