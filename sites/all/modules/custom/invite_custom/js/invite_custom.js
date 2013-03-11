(function ($) {
  Drupal.behaviors.invite_custom = {
    attach: function (context, settings) {
      $(".action_button").click(function(event){
        event.preventDefault();
        var that = $(this).parents(".side_col");
        var invite_friend = $(this).parents(".contact_list_item").find("#edit-email").text();
        var page_url = Drupal.settings.basePath + "ajax/invite_frined/" + encodeURIComponent(invite_friend);
        $(this).parents(".side_col").html($(this).parents(".contacts_previous_invitations").find(".load-image").html());
        $.ajax({
          url: page_url,
          success: function(result) {
            if (result == "success") {
              $(that).html("Success");
            }
          }
        });
      });
    }
  }
})(jQuery);
