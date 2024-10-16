<?php
if (!isset($_COOKIE["usr_uniq_code"]) || !isset($_COOKIE["public_code"])) {
   header("location:register/");
} else {
   if (!isset($_REQUEST["user"])) {
      header("location:index.php");
   } else {
      require "php/connect.php";
      require "php/header.php";
      $usr_code = $_COOKIE["usr_uniq_code"];
      $public_code = $_COOKIE["public_code"];
      session_start();
   }
}
?>
<link rel="icon" href="image/logo.png" type="image/icon type">
<link rel="preload" href="style.css" as="style">
<link rel="preload" href="jquery.js" as="script">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/loading.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="jquery.js"></script>
</head>

<body>
   <section class="main_container">
      <section class="sidebar">
         <div class="side_bar_header">
            <div class="site_logo">
               <a href="index.php"><img src="image/logo.png" class="site_logo_img"></a>
            </div>
            <div class="search_bar_div">
               <div class="search_logo_div">
                  <img src="image/search.png" class="search_logo">
               </div>
               <input class="search_bar" type="text" name="search_bar" placeholder="Search to find people">
            </div>
         </div>
         <div class="side_bar_peoples_list">
            <a href="index.php">
               <div class="all_people">
                  <div class="img_container">
                     <img src="image/people.png">
                  </div>
                  <div class="text_container">All Peoples</div>
               </div>
            </a>
            <a href="index.php">
               <div class="friends">
                  <div class="img_container">
                     <img src="image/support.png">
                  </div>
                  <div class="text_container">Friends</div>
               </div>
            </a>
            <div class="dm">Direct messeges:</div>

            <div class="side_bar_peoples_show">
            </div>
         </div>
      </section>
      <section class="content_container">
         <?php
         $query = "SELECT * FROM `s1` WHERE `usr_uniq_code` = '$usr_code' AND `public_code`  = '$public_code'";
         $run = mysqli_query($connect, $query);
         if (mysqli_num_rows($run) == 0) {
            echo "<script> $(document).ready(function(){ location.reload(); }); </script>";
            setcookie("usr_uniq_code", "", time() - 3600, '/');
            setcookie("public_code", "", time() - 3600, '/');
         }
         $var_one = mysqli_fetch_assoc($run);
         $oponent_id = $_REQUEST["user"];
         if ($oponent_id == $var_one['id']) {
            header("location:index.php");
         } else {
            $oponent_query = "SELECT * FROM `s1` WHERE id = '$oponent_id'";
            $op_run = mysqli_query($connect, $oponent_query);
            $var_op = mysqli_fetch_assoc($op_run);
         }
         echo "<script> const sender = '" . $var_one['id'] . "',reciever = '" . $var_op['id'] . "', sender_name = '" . $var_one['usr_name'] . "',reciever_name = '" . $var_op['usr_name'] ."', public_code = '".$public_code."';</script>";
         ?>
         <div class="content_header">
         <div class="header_drop_down_setting">
         <img src="image/caret-down.png" alt="">
         </div>
            <div class="user">
               <div class="user_logo_image_container">
                  <img src="image/<?php echo $var_one['image'] ?>" class="user_logo_image">
               </div>
               <span class="user_name"><?php echo $var_one['usr_name'] ?> </span>
            </div>
            
            <div class="oponent">
               <div class="mew">@//></div>
               <div class="op_name"><?php echo $var_op['usr_name']; ?></div>
            </div>
         </div>
         <div class="chat_container">
            <div class="chats">
               <div class="at_first">
                  <div class="frame">
                     <div class="at_first_img">
                        <img src="image/<?php echo $var_op['image']; ?>">
                     </div>
                  </div>
                  <div class="text">
                     <pre>                   No messages are available.
          Once you send message they will appear here.</pre>
                  </div>
               </div>
               <div class="space"></div>

            </div>
            <div class="write_box_container">
               <div class="replying">
                  <div class="reply_icon"><img src="image/reply.png"></div>
                  <div class="replying_to">replying to </div>
                  <div class="replying_to_pepe"></div>
                  <div class="replying_to_msg"></div>
                  <div class="reply_exit"><img src="image/x-mark-4-512.png"></div>
               </div>
               <div class="write_box">
                  <form class="form" onsubmit="return false" enctype="multipart/form-data" autocomplete="false" method='post'>
                     <div class="plus">
                        <input type="file" name="file" class="file" hidden>
                        <img src="image/plus.png" class="plus_img">
                     </div>
                     <div class="input">
                        <input class="chat_inp" type="text" name="chat_inp" autocomplete="off" spellcheck="false">
                     </div>
                     <div class="GIF"><img src="image/GIF.png"></div>
                     <div class="add_emoji"><img src="emoji/smileys & people/1.png"></div>
                  </form>
               </div>
            </div>
            <div class="emoji_container" tabindex='1'>
               <div class="emoji_header">
                  <div class="emoji_cross"><img src="image/m.png" alt=""></div>
                  <div class="emoji_header_but select_gif_but">GIF</div>
                  <div class="emoji_header_but select_sticker_but">Sticker</div>
                  <div class="emoji_header_but select_emoji_but">Emoji</div>
               </div>
               <div class="main_emojis">
               
               </div>
            </div>
         </div>
      </section>

      <div class="uploader">
         <div class="up_header">Do you want to upload this?</div>
         <div class="up_but">Upload</div>
      </div>

      <div class="big_image_container"></div>
      
      <div class="header_drop_down_settings" tabindex="1">
         <div class="header_drop_down_my_profile">
            <div class="my_banner">
               <img src="" alt="">
            </div>
            <div class="header_drop_down_my_profile_picture">
               <img src="image/<?php echo $var_one['image'];?>">
            </div>
            <div class="my_usr_name"><?php echo $var_one['usr_name'];?></div>
            <div class="drop_down_status"><?php echo $var_one['status'];?></div>
         </div>
         <div class="border"></div>
         <div class="settings_and_privacy header_drop_down_bars">
            <div class="settings_logo bars_logo"> <img src="image/settings.png" alt=""></div>
            <div class="settings_text bars_text">Settings & Privacy</div>
         </div>
         <div class="display_and_accessibility header_drop_down_bars">
            <div class="display_and_accessibility_logo  bars_logo"><img src="image/375-3755460_monitor-clip-art.png" alt=""></div>
            <div class="display_and_accessibility_text bars_text"> Display & Accessibility</div>
         </div>
         <div class="give_feedback header_drop_down_bars">
         <div class="give_feedback_logo  bars_logo"><img src="image/PinClipart.com_feedback-clipart_5772201.png" alt=""></div>
         <div class="give_feedback_text bars_text">Give Feedback</div>
         </div>
         <div class="log_out header_drop_down_bars">
            <div class="log_out_logo  bars_logo"><img src="image/sign-out.png" alt=""></div>
            <div class="log_out_text bars_text">Log Out</div>
         </div>
      </div>   

   <div class="log_out_checkup_wraper">
         <div class="blur_section"></div>
      <div class="log_out_checkup">
         <div class="log_out_checkup_text_wraper"> <span> Are you sure you want to log out? </span></div>
         <div class="log_out_continue log_out_checkup_but">Log Out</div>
         <div class="log_out_cancel log_out_checkup_but">Cancel</div>
      </div>
   </div>
<div class="feedback_container">
   <div class="feedback_wraper">
      <div class="feedback_header">
            <div class="feedback_left"><img src="image/arrow-small-left.png" ></div>
           <div class="feedback_header_text">Give Feedback to Us</div>
           <div class="feedback_cross">
              <img src="image/x.png" alt="">
           </div>
      </div>
      <div class="feedback_main">
         
      </div>
      </div>
   </div>
   </div>


<div class="loading_section">
   <div class='loading_body'>
    <span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class='base'>
      <span></span>
      <div class='face'></div>
    </div>
  </div>
  <div class='longfazers'>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <h1 class="loading_text">loading... </h1>
      </div>

<section class="my_profile_window">

</section>

   <div class="spinner_wraper">
      <img src="image/spinner.gif">
   </div>
      
   </section>
   <script src="js/content_header.js"></script>
   <script src="js/show_side_bar.js"></script>
   <script src="js/show_msgs.js"></script>
   <script src="js/msg.js"></script>
   <script src="js/emoji.js"></script>
   <script>
   $(".user").click(function(){
    $('.loading_section').attr('style','display:block;');
    $('.loading_section').addClass("loading_section_animation_right_to_left");
      <?php
      $_SESSION["auth_token_cross_site1"] = bin2hex(random_bytes(32));
      $_SESSION["auth_token_cross_site2"] = sha1(bin2hex(random_bytes(32)));
      $_SESSION["expire_time"] = time() + 600;
      $auth_token1 = $_SESSION["auth_token_cross_site1"];
      $auth_token2 = $_SESSION["auth_token_cross_site2"];
      echo "let auth_token1 = '$auth_token1';";
      echo "let auth_token2 = '$auth_token2';";
      ?>
    $.post("MyProfile/index.php",{auth_token1 :auth_token1, auth_token2: auth_token2, public_code : public_code},function(ajaxData){
      let auth_token1 = "";
      let auth_token2 = "";
      setTimeout(() => {
      $('.loading_section').removeClass("loading_section_animation_right_to_left");
      $('.loading_section').addClass("loading_section_animation_left_to_right");
      $(".my_profile_window").attr("style","display:block");
      $(".my_profile_window").addClass("my_profile_window_left_to_right");

      setTimeout(() => {
        $('.loading_section').attr("style","left:0%;width: 100%;");
        $('.loading_section').removeClass("loading_section_animation_left_to_right");
        setTimeout(() => {
          $(".my_profile_window").html(ajaxData);
        }, 100);
      }, 500);
      
    }, 3000);
    
    
    });
  }); 
   </script>
</body>
<!-- leaving so soon msg website close korte gele-->
<!-- <loading class=""></loading>  what is this ?-->
<!-- for (let i = 100; i > 0; i--) {}  minuse value -->
</html>