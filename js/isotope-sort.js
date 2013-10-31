$(window).bind("load", function() {
   // code here
   var $container = $('.view-taxonomy-term .view-content');
   $container.isotope({
     itemSelector: '.views-row'
   });
   $('.filters a').click(function(){
     $('.filters a').removeClass('active');
     $(this).addClass('active')
     var selector = $(this).attr('data-filter');
     $container.isotope({
       filter: selector
       });
       return false;
   });
});
