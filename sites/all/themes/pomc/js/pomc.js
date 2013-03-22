(function ($) {
  Drupal.behaviors.pomc = {
    attach: function (context, settings) {

$(".form-textarea-wrapper").bind("keyup", function(e){ 

  if (e.keyCode == 13 && e.shiftKey) {
       var content = this.value;
       var caret = getCaret(this);
//       this.value = content.substring(0,caret)+'\n'+content.substring(carent,content.length-1);
       e.stopPropagation();
   }
  else if(e.keyCode == 13){ 
    $("#"+$("#"+$(".form-textarea-wrapper textarea:focus").attr("id")).parents().find(".comment-form").attr("id")).trigger("submit");
    }
});
   
    jQuery("#cat-label").click(function(e){

        $("#category-list-options .primary-list").show();
      });
      
       jQuery("#city-label").click(function(e){
  
        $("#city-list-options .city-list").show();
      });

  jQuery("#city-list-options").mouseleave(function(e){

        $("#city-list-options .city-list").hide();
      });
      
       jQuery("#category-list-options .primary-list").mouseenter(function(e){
    
        $("#category-list-options .primary-list").show();
       $("#category-list-options ul.category-child-list-"+this.value).show();
      });
      
       jQuery("#category-list-options .primary-list").mouseleave(function(e){
     
        $("#category-list-options .primary-list").hide();
       $("#category-list-options ul.category-child-list-"+this.value).hide();
      });
      
    jQuery("#category-list-options #secondary-category-list").mouseenter(function(e){
//      event.preventDefault();
         $("#category-list-options .primary-list").show();
//         alert($(this).attr("class"));
         $("ul."+$(this).attr("class")).show();
      });
       jQuery("#category-list-options #secondary-category-list").mouseleave(function(e){

         $("#category-list-options .primary-list").hide();
        $("ul."+$(this).attr("class")).hide();
      });

    jQuery("#category-list-options li.primary-list").live("click", function(e){
     
      val = this.value;
      $("option[value=" + val + "]").attr("selected", true);
      $("#views-exposed-form-dashboard-page-2").submit();
      });
      $("#category-list-options li.secondary-list").live("click", function(e){

      val = this.value;
    $("option[value=" + val + "]").attr("selected", true);
     $("#views-exposed-form-dashboard-page-2").submit();
      });
      
      jQuery("#city-list-options li.city-list").live("click", function(e){
   
      val = this.value;
      $("option[value=" + val + "]").attr("selected", true);
      $("#views-exposed-form-dashboard-page-2").submit();
      });
      
  
      
      jQuery(".nice-menu-down li a").hover(function() {
      jQuery(".nice-menu-down li").removeClass("active-trail");
      //jQuery(this).addClass("active-trail");
      
      });

//here's the magic to create multstep registration.
	$('.previous_button, .last_previous, #edit-field-city, #edit-field-dateofbirth, #edit-field-gender, #edit-field-description, .next_previous, #edit-actions--2, #edit-field-category, #edit-legal').hide();
	$('.next_first').click(function(){
	  $('#edit-account, .next_first, #edit-field-profile-pic, #edit-field-full-name').hide();
	  $('#edit-field-city, #edit-field-dateofbirth, #edit-field-gender, #edit-field-description, .next_previous, #edit-field-category, .previous_button, #edit-actions--2, #edit-legal').show();
	});
	// Second step
	//click action on previous
	$('.previous_button').click(function(){
	  $('#edit-account, #edit-field-profile-pic, .next_first, #edit-field-full-name').show();
	  $('#edit-legal, #edit-field-city, #edit-field-dateofbirth, #edit-field-gender, #edit-field-description, .next_previous, #edit-field-category, .previous_button, #edit-actions--2').hide();
	});

// Comment autosubmmit on home


//End of js
    }
  }
})(jQuery);
