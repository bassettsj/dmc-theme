var $=jQuery;$(window).bind("load",function(){function s(){var r,s=e.scrollTop();if(s>=n&&!i&&e.width()>=1028){i=1;t.addClass("navbar-fixed-top");$(".scroll-hide").css("display","block")}else if(s<=n&&i){i=0;$(".scroll-hide").css("display","none");t.removeClass("navbar-fixed-top")}}var e=$(window),t=$(".navbar"),n=$(".nu_branding").height(),r=$(".navbar").length&&$(".navbar").offset().top-n,i=0;e.on("scroll",s);var o=!1,u=function(){Modernizr.inlinesvg!==!0&&$(".brand > img").attr("src","sites/all/themes/dmc/logo.png")};u()});