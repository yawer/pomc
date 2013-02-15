(function ($) {
/*
  // Override nextPage function
  Drupal.multipageControl.prototype.nextPage = function() {

    var form = this.wrapper.closest('form');
    if (this.wrapper.hasClass('multipage-pane')) {
      validated = 1;
       jQuery('#edit-profile-user-profile-field-gender-und div input').addClass("required");
      $('.required', this.wrapper).each(function(index) {
        if (!form.validate().element(this)) {
          validated = 0;
        }
      });
    }
    if (validated == 1) {
      this.wrapper.next().data('multipageControl').focus();
    }
    else {
      $('html, body').animate({scrollTop:0}, 'slow');
    }
  }*/
  
   Drupal.behaviors.pomc_customizations = {
    
    attach: function (context) {
      $('#overlay:not(.pomc_customizations-adjusted)', context).each(function() {
        var $test = $(this).find('#paste-node-form');
        
        if ($test.length){
          // adjust the overlay
          $(this).css({
            'width'     : '350px',
            'min-width' : '350px',
            'height' : '50%',
            'min-height' : '50%',
          });
            
          $('.add-or-remove-shortcuts', this).hide();  // hide "add short-cut" button
          $('#branding', this).hide();  // hide branding container
        }  
      }).addClass('pomc_customizations-adjusted');
      
      $(".ctools-use-modal").ajaxSend(function(event, xhr, settings) {
        $("#modalContent").css({position:'absolute', top:'-9999px'});
      });
      $(".ctools-use-modal").ajaxStop(function(){
        $("#modalContent").css({top:'-300px'});
        $("#modalContent").animate({marginTop: '400px'}, 'fast');
      });
    }
  };

})(jQuery);
