(function ($) {
  Drupal.behaviors.pomc = {
    attach: function (context, settings) {
    
 $("#paste-node-form #edit-cancel").click(function(event){
parent.Drupal.overlay.close();
          
    });
 $("#webform-client-form-490 #edit-submit").click(function(event){
          
    });
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
      
      jQuery("#service-city-label").click(function(e){

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
      
    jQuery("#category-list-options  .children-wrapper #secondary-category-list").mouseenter(function(e){
//      event.preventDefault();
         $("#category-list-options .primary-list").show();
        $("ul."+$(this).attr("class")).show();
      });
       jQuery("#category-list-options #secondary-category-list").mouseleave(function(e){

         $("#category-list-options .primary-list").hide();
        $("ul."+$(this).attr("class")).hide();
      });

    jQuery("#category-list-options li.primary-list").live("click", function(e){
     
      val = this.value;
      if(val ==0) {
      val = 'All';
      }
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
//disabling the submmit
//$('#user-register-form #edit-actions').attr('disabled','disabled');
if(!$('.form-item-legal-accept input').is(':checked')){
  $('#user-register-form #edit-submit').attr('disabled','disabled').addClass('button-disabled');
}
$('.form-item-legal-accept input').live("click", function(){
  if($('.form-item-legal-accept input').is(':checked')){
    $('#user-register-form #edit-submit').removeAttr('disabled').removeClass('button-disabled');
    }
  else{
    $('#user-register-form #edit-submit').attr('disabled','disabled').addClass('button-disabled');
    }
});

$('#pid-user-register .previous_button, #pid-user-register .last_previous,#pid-user-register #edit-field-dateofbirth, #pid-user-register #edit-field-gender, #pid-user-register #edit-field-description, #pid-user-register .next_previous, #pid-user-register #edit-actions, #pid-user-register #edit-legal').hide();
	$('#pid-user-register #next_first-split-form').click(function(){
	  $('#pid-user-register #edit-account, #pid-user-register #next_first-split-form, #pid-user-register #edit-field-full-name, #pid-user-register #edit-field-purpose,  #pid-user-register #edit-field-city,  #pid-user-register #edit-field-profile-pic').hide();
	  $('#pid-user-register #edit-field-dateofbirth, #pid-user-register #edit-field-gender, #pid-user-register #edit-field-description, #pid-user-register .next_previous, #pid-user-register .previous_button, #pid-user-register #edit-actions, #pid-user-register #edit-legal').show();
	});
	// Second step
	//click action on previous
	$('#pid-user-register .previous_button').click(function(){
	  $('#pid-user-register #edit-account, #pid-user-register #edit-field-city, #pid-user-register #next_first-split-form, #pid-user-register #edit-field-full-name, #pid-user-register #edit-field-purpose,  #pid-user-register #edit-field-profile-pic').show();
	  $('#pid-user-register #edit-legal, #pid-user-register #edit-field-dateofbirth, #pid-user-register #edit-field-gender, #pid-user-register #edit-field-description, #pid-user-register .next_previous, #pid-user-register .previous_button, #pid-user-register #edit-actions, #pid-user-register #edit-field-profile-pic').hide();
	});

  /*var classname = jQuery('#edit-field-profile-pic-und-0-upload').attr('class');
  if(classname == 'form-select'){
	$('#pid-user-register .previous_button, #pid-user-register .last_previous, #pid-user-register #edit-field-city, #pid-user-register #edit-field-dateofbirth, #pid-user-register #edit-field-gender, #pid-user-register #edit-field-description, #pid-user-register .next_previous, #pid-user-register #edit-actions--2, #pid-user-register #edit-field-category, #pid-user-register #edit-legal').show();
 }
*/
// Comment autosubmmit on home


//End of js
    }
  }
})(jQuery);
