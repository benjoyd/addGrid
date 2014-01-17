/**
 * Place your JS-code here.
 */
$(document).ready(function(){
   'use strict';

  /**
   * Only related to example 9 (testing the plugin used in the text for this coursemoment)
   */
  (function($) {
  
    $.fn.addGrid = function(options) {
      options = $.extend({}, $.fn.addGrid.defaults, options);
      var addBox = function() {
  $('<div></div>')
    .addClass('boxy')
    .insertBefore('.grid')
    .mousemove(function() {
      $(this).remove();
      console.log("Removed some grid.");
    })
  console.log("adding grid");
};
      return this.each(function() {
        $(this).fadeOut(options.duration, function() {
          $('html').click(addBox);
          $(this).fadeIn(options.duration)});
      });
    };
  
    $.fn.addGrid.defaults = {
      'duration': 'fast',
    }
  
  }) (jQuery);




  $('html').click(function() {
    $('img').addGrid({'duration':100});
    console.log('adding grid and flashing image');
  });


console.log('Everything is ready.');
});