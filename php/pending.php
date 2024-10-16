<?php
require "connect.php";
    $usr_code = $_COOKIE["usr_uniq_code"];
    $query = "SELECT * FROM `s1` WHERE `usr_uniq_code` = '$usr_code'";
    $run = mysqli_query($connect, $query);
    $var_one = mysqli_fetch_assoc($run);
    $usr_id = $var_one['id'];
$pending_query = "SELECT * FROM `add_friends` WHERE `sender` = '$usr_id' OR `reciever` = '$usr_id'";
$pending_run = mysqli_query($connect,$pending_query);
//$pending_fetch = mysqli_fetch_assoc($pending_run);
if(mysqli_num_rows($pending_run) > 0){

    echo "<div class='all_pepe_header'>Your all pending requests :-</div>";

    while($pending_var = mysqli_fetch_array($pending_run)){
        if($pending_var['reciever'] == $usr_id){
        $s1_query = "SELECT * FROM `s1` WHERE `id` = '".$pending_var['sender']."' ";    //OR `id` = '".$pending_var['reciever']."' //lagte pare  
        $s1_run = mysqli_query($connect,$s1_query);
        $s1_fetch = mysqli_fetch_assoc($s1_run);
        echo "<div class='pepe'>";
        echo "<a href=chat.php?user=".$s1_fetch['id'].">";
        echo "<div class='pepe_img_container'><img src='image/".$s1_fetch['image']."' class='pepe_img'></div>";
        echo "<div class='name_status_container'>";
        echo "<div class='name'>".$s1_fetch['usr_name']."</div>";
        echo "<div class='status'>𝘪𝘯𝘤𝘰𝘮𝘪𝘯𝘨 𝘧𝘳𝘪𝘦𝘯𝘥 𝘳𝘦𝘲𝘶𝘦𝘴𝘵</div>";
        echo "</div>";
        echo "</a>";
        echo "<div class='reject' id='".$pending_var['sender']."'>";
        echo "𝓻𝓮𝓳𝓮𝓬𝓽";
        echo "</div>";
        echo "<div class='accept' id='".$pending_var['sender']."' >";
        echo "𝓪𝓬𝓬𝓮𝓹𝓽";
        echo "</div>";
        echo "</div>";
    }else{
        $s1_query = "SELECT * FROM `s1` WHERE `id` = '".$pending_var['reciever']."' ";
        $s1_run = mysqli_query($connect,$s1_query);
        $s1_fetch = mysqli_fetch_assoc($s1_run);
        echo "<div class='pepe'>";
        echo "<a href=chat.php?user=".$s1_fetch['id'].">";
        echo "<div class='pepe_img_container'><img src='image/".$s1_fetch['image']."' class='pepe_img'></div>";
        echo "<div class='name_status_container'>";
        echo "<div class='name'>".$s1_fetch['usr_name']."</div>";
        echo "<div class='status'>𝘰𝘶𝘵𝘨𝘰𝘪𝘯𝘨 𝘧𝘳𝘪𝘦𝘯𝘥 𝘳𝘦𝘲𝘶𝘦𝘴𝘵</div>";
        echo "</div>";
        echo "</a>";
        echo "<div class='cancel' id='".$pending_var['reciever']."'>";
        echo "𝘾𝙖𝙣𝙘𝙚𝙡";
        echo "</div>";
        echo "</div>";
   }
}
}else{
    echo "<div class='nof'>you have no friend requests to show</div>";
}
require "../js/pending.js";
?>
