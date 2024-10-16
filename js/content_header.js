$(document).ready(function(){
  let status = $(".drop_down_status").html();
  let status_length = status.length;

  $(".header_drop_down_setting").click(function(){
    $(this).attr('style','background: linear-gradient(176deg,rgb(125, 214, 207),rgb(235, 234, 234));width: 33px;height: 33px;margin-right: 1.69%; margin-top: 0.79%;');
    $(".header_drop_down_settings").attr("style","display:block");
    $(".header_drop_down_settings").focus();
  });

  $(".header_drop_down_settings").blur(function(){
    $(".header_drop_down_setting").attr('style','width: 35px;height: 35px;margin-right: 1.5%;margin-top: 0.7%;background: rgb(151, 151, 151);');
    $(".header_drop_down_settings").attr("style","display:none");
  });

  $(".log_out").click(function(){
    setTimeout(() => {
      $(".log_out_checkup_wraper").attr("style","display:block");
    }, 400);
  });

  $(".log_out_continue").click(function(){
    $(".spinner_wraper").attr('style','display:block');
    $.post("php/log_out.php",{S:"c320a32e44213b2c7c5d5e3406fcfd70f35ff5e2"},function(ajaxData){
     location.reload();
     $(".spinner_wraper").attr('style','display:none');
    });
  });

  $(".log_out_cancel").click(function(){
    $(".spinner_wraper").attr('style','display:block');
    setTimeout(() => {
      $(".log_out_checkup_wraper").attr("style","display:none");
      $(".spinner_wraper").attr('style','display:none');
    }, 400);
  });

  $(".give_feedback").click(function(){
    $(".spinner_wraper").attr('style','display:block');
      setTimeout(function(){
      $('.feedback_container').attr('style','display:block');
      $(".spinner_wraper").attr('style','display:none');
    },100);  
    $(".feedback_main").html(' <div class="feedback_tiles help_us_improve"> <div class="feedback_tiles_logo"> <img src="image/info.png" alt=""> </div><div class="feedback_text"> <div class="feedback_text_top">Help us to improve</div><div class="feedback_text_lower">Give feedback about your experiance.</div></div></div><div class="feedback_tiles something_went_wrong"> <div class="feedback_tiles_logo"> <img src="image/PngItem_481939.png" alt=""> </div><div class="feedback_text"> <div class="feedback_text_top">Something went wrong</div><div class="feedback_text_lower">Let us know a broken feature.</div></div><script src="lib/js/feedback_selector_tiles.js"></script>');
    
  });

$(".feedback_left").click(function(){
    $(".feedback_header_text").html("Give Feedback to Us");
    $(".feedback_header_text").attr('style','margin-left: 21%;');
    $(".feedback_wraper").attr('style','width: 30%; height: 33%;left:35%; top: 24%;');
    $(".feedback_header").attr('style','height: 24%;');
    $(".feedback_main").html('<div class="feedback_tiles help_us_improve"> <div class="feedback_tiles_logo"> <img src="image/info.png" alt=""> </div><div class="feedback_text"> <div class="feedback_text_top">Help us to improve</div><div class="feedback_text_lower">Give feedback about your experiance.</div></div></div><div class="feedback_tiles something_went_wrong"> <div class="feedback_tiles_logo"> <img src="image/PngItem_481939.png" alt=""> </div><div class="feedback_text"> <div class="feedback_text_top">Something went wrong</div><div class="feedback_text_lower">Let us know a broken feature.</div></div><script src="lib/js/feedback_selector_tiles.js"></script>');
    $(".feedback_left").attr('style','display:none');
});

  $('.feedback_cross').click(function(){
    $(".feedback_header_text").attr('style','margin-left: 21%;');
    $(".feedback_wraper").attr('style','width: 30%; height: 33%;left:35%; top: 24%;');
    $(".feedback_header").attr('style','height: 24%;');
    $(".feedback_left").attr('style','display:none');
    setTimeout(function(){
      $(".feedback_header_text").html("Give Feedback to Us");
      $('.feedback_container').attr('style','display:none');
    },40);
  }); 


 // $(".user").click()



});