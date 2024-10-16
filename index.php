<?php
   if(!isset($_COOKIE["usr_uniq_code"])){
       header("location:register/");
   }
   require "php/header.php";
   require "php/connect.php";
       $usr_code = $_COOKIE["usr_uniq_code"];
       $query = "SELECT * FROM `s1` WHERE `usr_uniq_code` = '$usr_code'";
       $run = mysqli_query($connect, $query);
       if(mysqli_num_rows($run) == 0){
         echo "<script> $(document).ready(function(){ location.reload(); }); </script>";
         setcookie("usr_uniq_code", "", time()-3600, '/');
        }
       $var_one = mysqli_fetch_assoc($run);
       echo "<script> const sender = '".$var_one['id']."'</script>";
       $usr_id = $var_one['id'];
   ?>
<link rel="icon" href="image/logo.png" type="image/icon type">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="php/nof.css">
<link rel="stylesheet" href="css/main_page_extra.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="jquery.js"></script>
</head>
<body>
   <section class="main_container">
      <section class="sidebar">
         <div class="side_bar_header">
            <div class="site_logo">
               <img src="image/logo.png" class="site_logo_img" >
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
            <div class="friends">
               <div class="img_container">
                  <img src="image/support.png">
               </div>
               <div class="text_container">Friends</div>
            </div>
            <div class="dm">
               Direct messeges:
            </div>
            <div class="side_bar_peoples_show"></div>
         </div>
      </section>
      <section class="content_container">
         <div class="content_header">
            <div class="user">
               <div class="user_logo_image_container">
                  <img src="image/<?php echo $var_one['image'] ?>" alt="" class="user_logo_image">
               </div>
               <span class="user_name"><?php echo $var_one['usr_name'] ?> </span>
            </div>
            <div class="header_list">
               <a href="index.php">
                  <div class="all_peoples">All Peoples</div>
               </a>
               <div class="all_friends">Friends</div>
               <div class="pending">Pending</div>
               <div class="blocked">Blocked</div>
               <div class="direct_friend">Add friends</div>
            </div>
         </div>
         <div class="content">
            <div class="lists">
               <?php
                  require "php/connect.php";
                  require "php/show_all_peoples.php"
                  // require "php/pending.php"
                  ?>
            </div>
         </div>
      </section>
   </section>
   <script src="js/show_side_bar_index.js"></script>
   <script src="js/list.js"></script>
</body>
</html>