(function ($) {
  Drupal.behaviors.pomc = {
    attach: function (context, settings) {
   $("#category-list-options ul").hide();
    jQuery("#category-list-options li.primary-list").hover(function(e){
      event.preventDefault();
        $("#category-list-options ul.category-child-list-"+this.value).toggle();
      });
    jQuery("#category-list-options li.primary-list").click(function(e){
      event.preventDefault();
    alert(this.value);
    
     // jQuery("views-exposed-form-dashboard-page-2").submit();
      });
   
      $("#category-list-options li.secondary-list").click(function(e){
      event.preventDefault();
       //var test = $(this).val();
   
     // jQuery("views-exposed-form-dashboard-page-2").submit();
      });
      
     
      
      jQuery(".nice-menu-down li a").hover(function() {
      jQuery(".nice-menu-down li").removeClass("active-trail");
      //jQuery(this).addClass("active-trail");
      
      });

//here's the magic to create multstep registration.
	$('.previous_button, .last_previous, #edit-field-city, #edit-field-dateofbirth, #edit-field-gender, #edit-field-description, .next_previous, #edit-actions--2, #edit-field-category').hide();
	$('.next_first').click(function(){
	  $('#edit-account, .next_first, #edit-field-profile-pic, #edit-field-full-name').hide();
	  $('#edit-field-city, #edit-field-dateofbirth, #edit-field-gender, #edit-field-description, .next_previous, #edit-field-category, .previous_button, #edit-actions--2').show();
	});
	// Second step
	//click action on previous
	$('.previous_button').click(function(){
	  $('#edit-account, #edit-field-profile-pic, .next_first, #edit-field-full-name').show();
	  $('#edit-field-city, #edit-field-dateofbirth, #edit-field-gender, #edit-field-description, .next_previous, #edit-field-category, .previous_button, #edit-actions--2').hide();
	});

//End of js
    }
  }
})(jQuery);
