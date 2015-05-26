(function($){

  $.fn.go_top = function(params){

    var defaults = {
      "top":200,
      "in":200,
      "out":200,
      "duration":400,
    };

    var options = jQuery.extend(defaults, params);
    var go_top = $(this);

    go_top.css({
      "position":"fixed",
      "bottom":"1em",
      "right":"0.25em",
      "display":"none"
    });
    
    $(window).on('load scroll', function(){
      if ($(this).scrollTop() > options.top) {
        //go_top.fadeIn(options.in);
        go_top
          .css({'display':'inline'})
          .addClass('animated rollIn');
      } else {
        //go_top.fadeOut(options.out);
        go_top
          .removeClass('animated rollIn')
          .fadeOut(options.out);
      }
    });

    return go_top.click(function(event) {
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, options.duration);
    });
  };

}( jQuery ));
