/*! tile-grid.js | Huro | Css Ninja 2020-2021 */
"use strict";
$(document).ready((function() { if ($(".tile-grid-v1").length && $(".infinite-scroll-loader").length) { var i = 0;
        $(window).scroll((function() { if ($(window).scrollTop() + $(window).height() > $(document).height() - 5) { var e = $(".tile-grid .columns").html();
                $(".infinite-scroll-loader").addClass("is-active"), i < 2 ? setTimeout((function() { $(".infinite-scroll-loader").removeClass("is-active"), $(".tile-grid .columns").append(e), i += 1 }), 1200) : setTimeout((function() { $(".loader, .loader-end").toggleClass("is-hidden") }), 1200) } })) } }));