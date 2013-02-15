(function ($) {
  Drupal.behaviors.pomc = {
    attach: function (context, settings) {
      $("#views-exposed-form-dashboard-page-2 .views-exposed-widget").live(function(event){
      $("views-exposed-form-dashboard-page-2").submit();
      });
      
      $(".nice-menu-down li a").hover(function() {
      $(".nice-menu-down li").removeClass("active-trail");
      $(this).addClass("active-trail");
      
      });
    }
  }
})(jQuery);
