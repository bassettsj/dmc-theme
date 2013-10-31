(function ($, Drupal, window, document, undefined) {


// Place your code here.
if ($('body').hasClass('page-gallery')){
  $('a.thumbnail').click(function(){
    console.log('a.thumbnail clicked');
    var $viewsRow = $(this).parents('li.views-row');
    if($viewsRow.hasClass('span4')){
      $viewsRow.removeClass('span4').addClass('span12');
    }
    else if($viewsRow.hasClass('span12')){
       $viewsRow.removeClass('span12').addClass('span4');
    }
  });
}


})(jQuery, Drupal, this, this.document);
