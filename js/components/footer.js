!function(s){"use strict";Berserk.behaviors.footer_init={attach:function(e,t){if(s(".brk-footer__wrapper:not(.rendered)",e).each(function(){if(s(this).hasClass("brk-footer__wrapper_animated")){var e=s(this),t=s(this).parent(),r=t.prev(),i=Math.max(document.documentElement.clientHeight,window.innerHeight||0),o=function(){t.css("height",e.outerHeight(!0)).addClass("brk-footer_animated"),r.css("margin-bottom",e.outerHeight(!0)).css("background-color","#fff").css("position","relative").css("z-index","2")};i>=e.outerHeight(!0)&&s(window).on("load",function(){o()}),s(this).on("DOMSubtreeModified",function(){e.outerHeight(!0)!==t.outerHeight(!0)&&i>=e.outerHeight(!0)&&o()}),s(document).on("scroll",function(){e.outerHeight(!0)!==t.outerHeight(!0)&&i>=e.outerHeight(!0)&&o()})}s(this).addClass("rendered")}),s(".brk-slider_shop-footer:not(.rendered)").length){if(void 0===s.fn.slick)return console.log("Waiting for the slick library"),void setTimeout(Berserk.behaviors.footer_init.attach,t.timeout_delay,e,t);var i="rtl"===s("html").attr("dir");s(".brk-slider_shop-footer:not(.rendered)",e).each(function(){var e=s(this).find(".brk-slider__nav-prev"),t=s(this).find(".brk-slider__nav-next"),r=s(this).find(".brk-slider__items");e.on("click",function(){r.slick("slickPrev")}),t.on("click",function(){r.slick("slickNext")}),r.slick({accessibility:!1,arrows:!1,dots:!1,slidesToShow:2,slidesToScroll:2,rtl:i,responsive:[{breakpoint:850,settings:{slidesToShow:1,slidesToScroll:1}}]}),s(this).addClass("rendered")})}}},Berserk.behaviors.footer_scrollr_init={attach:function(e,t){if(s("[data-skrollr]:not(.skrollr-rendered)").length){if("undefined"==typeof skrollr)return console.log("Waiting for the skrollr library"),void setTimeout(Berserk.behaviors.footer_scrollr_init.attach,t.timeout_delay,e,t);992<=(window.innerWidth||s(window).width())&&(s("[data-skrollr]:not(.skrollr-rendered)").addClass("skrollr-rendered"),setTimeout(function(){skrollr.init({forceHeight:!1})},1500))}}}}(jQuery);