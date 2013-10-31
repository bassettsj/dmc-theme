$(window).bind("load", function() {
   // code here
   var articleImg = ($('article img').size() > 1);
   var getImages = function (){
     var $img = $('article img');
     $img.each(function(i){
      var figcaption = '';
        if ($(this).attr('title') !== undefined && $(this).attr('title') !== null){
        figcaption = '<figcaption>' + $(this).attr('title') +'</figcaption>';
        }
        $(this).wrap("<figure/>").after(figcaption);


     });
     //end  $img.each(function(i)
    }
 //test for the targeted node type target === true if the body is taged with these classes
 var target = ($('body').hasClass('node-type-news-and-updates') | $('body').hasClass('node-type-spaces') |  $('body').hasClass('node-type-gallery'));
 //call function
   var makeCarousel = function(){
     $('article').prepend('<div id="myCarousel" class="carousel slide" data-interval="false"><div class="carousel-inner"></div><a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a><a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a></div>');
     var $img = $('article img');
     if ($img.length > 1){
       $img.each(function(i){
         $(this).appendTo('#myCarousel .carousel-inner');
         $(this).wrap('<div class="item"/>');
        if ($(this).attr('title') !== undefined && $(this).attr('title') !== null){ $(this).after("<div class=\"carousel-caption\"><h5>" + $(this).attr('title')+"</h5></div>")}
       });

     }
    $('.carousel-inner .item:first-child').addClass('active');
   }
   if (target){
    if (!articleImg){
    getImages();
    }
    else {
    makeCarousel();
    }
  }
});

