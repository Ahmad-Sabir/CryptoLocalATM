$(document).ready(function(){
	
	$('select').niceSelect();

	$('.main_box').click(function() {
		/* Act on the event */
		$('.main_box').removeClass('active_currency');
		$(this).addClass('active_currency');
	});

	$(window, document, undefined).ready(function() {

  $('.input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });
  
  });


$('#tab1').on('click' , function(){
    $('#tab1').addClass('login-shadow');
   $('#tab2').removeClass('signup-shadow');
});

$('#tab2').on('click' , function(){
    $('#tab2').addClass('signup-shadow');
   $('#tab1').removeClass('login-shadow');
});

$('.main_country').click(function(event) {
	/* Act on the event */
	$('.country_list').toggle();
});

//  WOW.js Animation
  var wow = new WOW();
  wow.init();

// AOS Animation
AOS.init();


///Password

    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });

    $("#show_hide_password2 a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password2 input').attr("type") == "text"){
            $('#show_hide_password2 input').attr('type', 'password');
            $('#show_hide_password2 i').addClass( "fa-eye-slash" );
            $('#show_hide_password2 i').removeClass( "fa-eye" );
        }else if($('#show_hide_password2 input').attr("type") == "password"){
            $('#show_hide_password2 input').attr('type', 'text');
            $('#show_hide_password2 i').removeClass( "fa-eye-slash" );
            $('#show_hide_password2 i').addClass( "fa-eye" );
        }
    });

    $("#show_hide_password3 a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password3 input').attr("type") == "text"){
            $('#show_hide_password3 input').attr('type', 'password');
            $('#show_hide_password3 i').addClass( "fa-eye-slash" );
            $('#show_hide_password3 i').removeClass( "fa-eye" );
        }else if($('#show_hide_password3 input').attr("type") == "password"){
            $('#show_hide_password3 input').attr('type', 'text');
            $('#show_hide_password3 i').removeClass( "fa-eye-slash" );
            $('#show_hide_password3 i').addClass( "fa-eye" );
        }
    });

      // $(".identity_verification").click(function(){
      //     // show hide paragraph on button click
      //     $(".show_hide_buttons").toggle("slow", function(){
      //         // check paragraph once toggle effect is completed
      //         if($(".show_hide_buttons").is(":visible")){
      //             $(".align_with_next").addClass('d-flex align-items-lg-end justify-content-md-between');
      //             $(".verify_custom").removeClass('align_to_right');
      //         } else{
      //             $(".align_with_next").removeClass('d-flex align-items-lg-end justify-content-md-between')
      //             // alert("The paragraph  is hidden.");
      //             $(".verify_custom").addClass('align_to_right');

      //         }
      //     });
      // });

      

      // $('.accordion').ready(function() {
      //       /* Act on the event */
      //       if ($("#collapseOne").hasClass("show")) {
      //       $(".first_verify").hide();
      //     } else {
      //       $(".verify_custom").show();
            
      //     }
      // });
      $('.tabs_list').click(function(event) {
        /* Act on the event */
        $('.tabs_list').removeClass('active');
        $(this).addClass('active');
      });

});