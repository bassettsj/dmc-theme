var $ = jQuery;
$(window).bind("load", function() {



  //adding the jQuery code to fix the nav bar after scrolling past the branding.
  var $win = $(window)
      , $nav = $('.navbar')
	  , nuBranding = $('.nu_branding').height()
      , navTop = $('.navbar').length && $('.navbar').offset().top - nuBranding
      , isFixed = 0



  if ($('body').hasClass('not-logged-in')){
    $win.on('scroll', processScroll);
  }

    function processScroll() {
      var i, scrollTop = $win.scrollTop()
      if (scrollTop >= nuBranding && !isFixed && $win.width() >=1028) {
        isFixed = 1
        $nav.addClass('navbar-fixed-top')
        $('.scroll-unhide').css('display', 'none')
        $('.scroll-hide').css('display', 'block')

      } else if (scrollTop <= nuBranding && isFixed) {
        isFixed = 0
        $('.scroll-hide').css('display', 'none')
        $('.scroll-unhide').css('display', 'block')
        $nav.removeClass('navbar-fixed-top')
      }
    }
//testing for svg support
var noSVG = false;
var noSVGlogo = function(){
  if (Modernizr.inlinesvg !== true){
  $('.brand > img').attr('src','sites/all/themes/dmc/logo.png');
  }
}


noSVGlogo();

$("article").fitVids();

});
