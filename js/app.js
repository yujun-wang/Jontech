$(document).ready(function(){
 $("#close").click(function(){
	$(".modal").modal("hide");
 });
 $.validator.setDefaults({
	submitHandler: function() { 
		$.ajax({
		  type: "POST",
		  url: "server.php",
		  data: $(".contact-us").serialize()
		}).done(function( msg ) {
		    alert('Thank you for contacting us!');
		});
	}
 }); 
 $('.contact-us').validate(
 {
  rules: {
    name: {
      required: true
    },
    email: {
      required: true,
      email: true
    },
    url: {
      required: false
    },
    comment: {
      required: false,
	  maxlength: 200 	
    }
  },
  errorClass: "help-inline",
  highlight: function(label) {
    $(label).closest('.control-group').removeClass('success').addClass('error');
  },
  success: function(label) {
    label
      .text('OK!').addClass('valid')
      .closest('.control-group').addClass('success');
  }
 });
}); // end document.ready