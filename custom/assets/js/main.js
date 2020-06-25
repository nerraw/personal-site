$(document).ready(function() {

    var toggleAffix = function(affixElement, scrollElement, wrapper) {
    
      var height = affixElement.outerHeight(),
          top = wrapper.offset().top;
      
      if (scrollElement.scrollTop() >= top){
          wrapper.height(height);
          affixElement.addClass("stuck");
      }
      else {
          affixElement.removeClass("stuck");
          wrapper.height('auto');
      }
        
    };
    
  
    $('[data-toggle="stuck"]').each(function() {
      var ele = $(this),
          wrapper = $('<div></div>');
      
      ele.before(wrapper);
      $(window).on('scroll resize', function() {
          toggleAffix(ele, $(this), wrapper);
      });
      
      // init
      toggleAffix(ele, $(window), wrapper);
    });
    
  });