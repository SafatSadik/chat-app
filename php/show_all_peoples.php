<?php
require "connect.php";
         //$add_friends_check = "SELECT * FROM `add_friends`)";
        //$add_friends_run = mysqli_query($connect,$add_friends_check);
        //pore korsi 
        //$fetch_add_friends = mysqli_fetch_assoc($add_friends_run);
        //$var_sender = $fetch_add_friends['sender'];
       // $var_reciever = $fetch_add_friends['reciever'];
    echo "<div class='all_pepe_header'>all people of this site :-</div>";
    $usr_code = $_COOKIE["usr_uniq_code"];
    $query = "SELECT * FROM `s1` WHERE `usr_uniq_code` = '$usr_code'";
    $run = mysqli_query($connect, $query);
    $var_one = mysqli_fetch_assoc($run);
    $usr_id = $var_one['id'];

$my_query = "SELECT * FROM `s1` WHERE `id`<>'$usr_id'";
$run_query = mysqli_query($connect,$my_query);
while($var = mysqli_fetch_array($run_query)){

     echo '<div class="pepe">';
     echo "<a href=chat.php?user=".$var['id'].">";
     echo "<div class='pepe_img_container'><img src='image/".$var['image']."' class='pepe_img'></div>";
     echo "<div class='name_status_container'>";
     echo "<div class='name'>".$var['usr_name']."</div>";
     echo "<div class='status'>".$var['status']."</div>";
     echo "</div>";
     echo "</a>";
     echo "<div class='three_dot'><img class='three_dot_logo' src='image/three dot.png' ></div>";
     echo "<a href=chat.php?user=".$var['id'].">";
     echo "<div class='msg_logo'><img class='msg_logo_img' src='image/msg_logo.png'></div>";
     echo "</a>";
     $friends_check = "SELECT * FROM `add_friends` WHERE (`sender` = 'usr_id' and `reciever` = '".$var['id']."')";
     $friends_run = mysqli_query($connect,$friends_check);
     if(mysqli_num_rows($friends_run) > 0){
        echo "<div class='request_sent'>Request Sent</div>";
     }else{
     echo "<div id='".$var['id']."' class='add_friend'>Add Friends</div>";
     }
     echo "</div>";
   }
