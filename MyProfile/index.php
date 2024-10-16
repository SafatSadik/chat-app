<?php
if(isset($_POST['auth_token1']) && isset($_POST['auth_token2']) && isset($_POST['public_code'])){
    session_start();
    $auth_token1 = $_POST['auth_token1'];
    $auth_token2 = $_POST['auth_token2'];
    if($auth_token1 === $_SESSION["auth_token_cross_site1"]  && $auth_token2 === $_SESSION["auth_token_cross_site2"]){
        if($_SESSION["expire_time"] >= time()){
            unset($_SESSION["auth_token_cross_site1"]);
            unset($_SESSION["auth_token_cross_site2"]);
            unset($_SESSION["expire_time"]);

            require "../php/connect.php";
            $public_code = $_POST['public_code'];
            $query = "SELECT * FROM `s1` WHERE `public_code` = '$public_code'";
            $run = mysqli_query($connect, $query);
            if (mysqli_num_rows($run) == 0) {
                echo $_POST['public_code'];
               //echo "<script> $(document).ready(function(){ location.reload(); }); </script>";
             //  setcookie("usr_uniq_code", "", time() - 3600, '/');
            }
            $var_one = mysqli_fetch_assoc($run);
            $user_id = $var_one['id'];
?>

<link rel="stylesheet" href="MyProfile/MyProfile.css">
<script src="MyProfile/MyProfile.js"></script>
    <div class="mf_main_container">
    <div class="user_profile_banner">
        
    </div>
    <div class="after_banner_all">
    <div class="mf_name_pfp_cont">
        <div class="user_profile_picture_container">
            <img src="image/<?php echo $var_one['image'];?>" alt="">
        </div>
        <div class="mf_name_cont">
        <div class="mf_name"><?php echo $var_one['usr_name'];?></div>
        <div class="mf_online_ofline"><img src="<?php if($var_one['status'] == 'Online'){echo "image/1024px-Solid_green.svg.png";} ?>"></div>
        </div>   
        <div class="mf_intro"><?php echo $var_one['intro'];?></div>
    </div>

    <div class="mf_menu">
        <div class="mf_menu_usr_info mf_menu_selected mf_menues">User info </div>
        <div class="mf_menu_friends mf_menues">friends </div>
        <div class="follower mf_menues">Followers</div>
        <div class="following mf_menues">Following</div>
        <div class="mf_menu_leader_board mf_menues">In Leader Board Rank</div>
    </div>
    <div class="mf_my_info_container">
        <div class="my_info_header"> My Important Informations</div>
        <div class="mf_border"></div>
        <?php
            $user_details_query = "SELECT * FROM `user_details` WHERE `public_code` = '$public_code' AND `usr_id` = '$user_id'";
            $user_details_run = mysqli_query($connect,$user_details_query);
            if($user_details_run == true){
                if(mysqli_num_rows($user_details_run) > 0){
                    $user_details = mysqli_fetch_assoc($user_details_run);
                    ?>
                        <div class='current_city my_info_rows'>Current City :<span class='highlight'><?php if($user_details['current_city'] != null){echo $user_details['current_city'];}else{echo "NULL";} ?></span></div>
                        <div class='home_town my_info_rows'>Home Town :<span class='highlight'><?php if($user_details['home_town'] != null){echo $user_details['home_town'];}else{echo "NULL";} ?></span></div>
                        <div class='born_in my_info_rows'>Born In:<span class='highlight'><?php if($user_details['born_in'] != null){echo $user_details['born_in'];}else{echo "NULL";} ?></span></div>
                        <div class='born_place my_info_rows'>Born Place :<span class='highlight'><?php if($user_details['born_place'] != null){echo $user_details['born_place'];}else{echo "NULL";} ?></span></div>
                        <div class='reletionship my_info_rows'>Reletionship :<span class='highlight'><?php if($user_details['reletionship'] != null){echo $user_details['reletionship	'];}else{echo "NULL";} ?></span></div>
                        <div class="gender my_info_rows">Gender :<span class='highlight'><?php if($user_details['gender'] != null){echo $user_details['gender'];}else{echo "NULL";} ?></span></div>
                        <div class='personal_email my_info_rows'>Personal E-mail:<span class='highlight'><?php if($user_details['personal_email'] != null){echo $user_details['personal_email'];}else{echo "NULL";} ?></span></div>
                        <div class='phon my_info_rows'>Phon :<span class='highlight'><?php if($user_details['phon'] != 0){echo $user_details['phon'];}else{echo "NULL";} ?></span></div>

           <?php }    }?>
    </div>
    
    








    </div>




    </div>

<?php }}}?>