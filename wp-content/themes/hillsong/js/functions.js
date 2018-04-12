(function($) {
  $(document).ready(function() {

    if($('.hero').find('.shuttle-status').hasClass('driving')) {
      $('.hero').find('.shuttle-status.red').hide();
    };
  });
})(jQuery);
