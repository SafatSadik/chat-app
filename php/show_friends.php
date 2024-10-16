<?php
require "connect.php";
$usr_code = $_COOKIE["usr_uniq_code"];
$get_id = "SELECT * FROM `s1` WHERE `usr_uniq_code` = '$usr_code'";
$get_id_run = mysqli_query($connect,$get_id);
$id_fetch = mysqli_fetch_assoc($get_id_run);
$id = $id_fetch['id'];
  
$my_query = "SELECT * FROM `friends` WHERE (`first_friend` = '$id') OR (`second_friend` = '$id')";
$run_query = mysqli_query($connect,$my_query);

echo "<div class='all_pepe_header'>Your all Friends :-</div>";

if(mysqli_num_rows($run_query) > 0){

while($var = mysqli_fetch_array($run_query)){

    if($var['second_friend']==$id){
      $get_Fdata = "SELECT * FROM `s1` WHERE `id` = '$var[first_friend]'";
      $get_Fdata_run = mysqli_query($connect,$get_Fdata);
      $Fdata_var = mysqli_fetch_assoc($get_Fdata_run);
      
      echo '<div class="pepe">';
     echo "<a href=chat.php?user=".$Fdata_var['id'].">";
     echo "<div class='pepe_img_container'><img src='image/".$Fdata_var['image']."' class='pepe_img'></div>";
     echo "<div class='name_status_container'>";
     echo "<div class='name'>".$Fdata_var['usr_name']."</div>";
     echo "<div class='status'>".$Fdata_var['status']."</div>";
     echo "</div>";
     echo "</a>";
     echo "<div class='three_dot'><img class='three_dot_logo' src='image/three dot.png' ></div>";
     echo "<a href=chat.php?user=".$Fdata_var['id'].">";
     echo "<div class='msg_logo'><img class='msg_logo_img' src='image/msg_logo.png'></div>";
     echo "</a>";
     echo "</div>";

    }else{
      $get_Fdata = "SELECT * FROM `s1` WHERE `id` = '$var[second_friend]'";
      $get_Fdata_run = mysqli_query($connect,$get_Fdata);
      $Fdata_var = mysqli_fetch_assoc($get_Fdata_run);
      echo '<div class="pepe">';
      echo "<a href=chat.php?user=".$Fdata_var['id'].">";
      echo "<div class='pepe_img_container'><img src='image/".$Fdata_var['image']."' class='pepe_img'></div>";
      echo "<div class='name_status_container'>";
      echo "<div class='name'>".$Fdata_var['usr_name']."</div>";
      echo "<div class='status'>".$Fdata_var['status']."</div>";
      echo "</div>";
      echo "</a>";
      echo "<div class='three_dot'><img class='three_dot_logo' src='image/three dot.png' ></div>";
      echo "<a href=chat.php?user=".$Fdata_var['id'].">";
      echo "<div class='msg_logo'><img class='msg_logo_img' src='image/msg_logo.png'></div>";
      echo "</a>";
      echo "</div>";
      
    }

   }
  }else{
    echo "<div class='nof'>you have no friends to show</div>";
  }
?>
<link rel="stylesheet" href="php/nof.css">