!function(a,b,c){"use strict";c(".buttonAnimation").each(function(){c(this).on("hover",function(){var a=c(this).attr("data-animation");c(this).addClass("animated "+a)},function(){var a=c(this).attr("data-animation");c(this).removeClass("animated "+a)})}),c(".collapseAnimation").each(function(){c(this).on("click",function(){var a=c(this).attr("data-animation"),b=c(this).attr("href");c(b).addClass("animated "+a)})}),c(".alertAnimation").each(function(){c(this).on("click",function(){var a=c(this).attr("data-animation");c(this).parent(".alert").addClass("animated "+a),c(this).parent("div").one("webkitAnimationEnd oanimationend msAnimationEnd animationend",function(b){c("div").removeClass("animated "+a)})})}),c(".calloutAnimation").each(function(){c(this).on("click",function(){var a=c(this).attr("data-animation");c(this).parent("div").addClass("animated "+a),c(this).parent("div").one("webkitAnimationEnd oanimationend msAnimationEnd animationend",function(b){c("div").removeClass("animated "+a)})})}),c(".cardAniation .card").appear(),c(b).on("appear",'[data-appear="appear"]',function(){var a=c(this),b=a.data("animation");a.hasClass("appear-no-repeat")||a.addClass("animated "+b)}),c(b).on("disappear",'[data-appear="appear"]',function(){var a=c(this),b=a.data("animation");a.hasClass("appear-no-repeat")||a.removeClass("animated "+b)})}(window,document,jQuery);