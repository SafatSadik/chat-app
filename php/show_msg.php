<?php
if(isset($_POST['sender']) && isset($_POST['reciever'])){
require "connect.php";
$usr_code = $_POST['sender'];
$reciever = $_POST['reciever'];
$query = "SELECT * FROM `s1` WHERE `id` = '$usr_code'";
$run = mysqli_query($connect, $query);
$var_one = mysqli_fetch_assoc($run);
if($reciever==$var_one['id']){
header("location:index.php");
}else{
$oponent_query = "SELECT * FROM `s1` WHERE `id` = '$reciever'";
$op_run = mysqli_query($connect, $oponent_query);
$var_op = mysqli_fetch_assoc($op_run);
}
$chat_query = "SELECT * FROM `messege` WHERE (`sender_id` = '$usr_code' AND `reciever_id` = '$reciever') OR (sender_id = '$reciever' AND reciever_id = '$usr_code') ORDER BY id";
$run_chat_query = mysqli_query($connect,$chat_query);
if(mysqli_num_rows($run_chat_query) > 0){
    $update_query = "UPDATE `messege` SET `un_read`='' WHERE (`sender_id` = '$usr_code' AND `reciever_id` = '$reciever')";
    $update_run = mysqli_query($connect,$update_query);
    
$i = null;
while($var = mysqli_fetch_array($run_chat_query)){
    if($var['sender_id'] === $usr_code){

        echo "<div class='sender_box'>";
        if($var['replied_msg_id'] <> '0'){
            $replied_msg_id = $var['replied_msg_id'];
            $replied_query = "SELECT * FROM `messege` WHERE (`id` = '$replied_msg_id')";
            $replied_query_run = mysqli_query($connect,$replied_query);
            $replied_msg_details = mysqli_fetch_assoc($replied_query_run);
            $replied_msg_sender = $replied_msg_details['sender_id'];
            $replied_msg = $replied_msg_details['msg'];

            $replied_msg_user_query = "SELECT * FROM `s1` WHERE `id` = '$replied_msg_sender'";
            $replied_msg_user_run = mysqli_query($connect,$replied_msg_user_query);
            $replied_msg_user_details =  mysqli_fetch_assoc($replied_msg_user_run);
            $replied_msg_user_image = $replied_msg_user_details['image'];
            $replied_msg_user_name =  $replied_msg_user_details['usr_name'];

            echo "<div class='replied_msg_container'>";
            echo "<div class='replied_img'><img src='image/replied_from - Copy.png'></div>";
            echo "<div class='replier_p_logo'><img src='image/".$replied_msg_user_image."'></div>";
            echo "<div class='replier_name'>".$replied_msg_user_name."</div>";
            if(empty($replied_msg)){
                echo "<div class='replier_attachment'>𝕒𝕥𝕥𝕒𝕔𝕙𝕞𝕖𝕟𝕥</div>";
            }else{
                echo "<div class='replier_msg'>".$replied_msg."</div>";
            }
            echo "</div>";
        }
        echo "<div class='sender_container'>";
        if($var['replied_msg_id'] === '0'){
            if($var['sender_id'] == $i){
            echo "<div class='sender_img_div'> <img src='image/".$var_one["image"]."'> </div>";
            echo "<div class='sender_name' style='margin-top:1%'>".$var_one["usr_name"]."</div>";  
          }
        }else{
            echo "<div class='sender_img_div'> <img src='image/".$var_one["image"]."'> </div>";
            echo "<div class='sender_name'>".$var_one["usr_name"]."</div>"; 
        }
        
       # echo "<div class='editor three_dot'><img class='editor_logo' src='image/three dot.png'></div>";
        echo "<div class='msg_editor'>";
        echo "<div id='".$var['id']."' class='editor_add_emoji_but'><img src='image/add_emoji.png'></div>";
        echo "<div id='".$var['id']."' class='editor_edit_but'><img src='image/pencil.png'></div>";
        echo "<div id='".$var['id']."' class='editor_reply_but' tabindex='3'><img src='image/reply.png'></div>";
        echo "<div id='".$var['id']."' class='editor_delete_but'><img src='image/delete.png'></div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='msg_cont ".$var['id']."'>";
        if($var['msg'] != ''){
            echo "<div class='msg'>";
            echo $var['msg'];
            echo "</div>";
            }elseif($var['picture'] != ''){
            echo "<div class='msg_image'>";
            echo "<img class='img' id='".$var['picture']."' src='".$var['picture']."'>";
            echo "</div>";
            }elseif($var['video'] != ''){
                echo "<div class='msg_video'>";
                echo "<video preload='none' poster='image/video.jpg' src='public/video/".$var['video']."' width='320' height='240' controls></video>";
                echo "</div>";
            }
        echo "</div>";
        echo "</div>";
        $i = $var['reciever_id'];
    }else{
        echo "<div class='reciever_box'>";
        if($var['replied_msg_id'] <> '0'){
            $replied_msg_id = $var['replied_msg_id'];
            $replied_query = "SELECT * FROM `messege` WHERE (`id` = '$replied_msg_id')";
            $replied_query_run = mysqli_query($connect,$replied_query);
            $replied_msg_details = mysqli_fetch_assoc($replied_query_run);

            $replied_msg_sender = $replied_msg_details['sender_id'];
            $replied_msg_user_query = "SELECT * FROM `s1` WHERE `id` = '$replied_msg_sender'";
            $replied_msg_user_run = mysqli_query($connect,$replied_msg_user_query);
            $replied_msg_user_details =  mysqli_fetch_assoc($replied_msg_user_run);
            $replied_msg_user_image = $replied_msg_user_details['image'];
            $replied_msg_user_name =  $replied_msg_user_details['usr_name'];

            echo "<div class='replied_msg_container'>";
            echo "<div class='replied_img'><img src='image/replied_from - Copy.png'></div>";
            echo "<div class='replier_p_logo'><img src='image/".$replied_msg_user_image."'></div>";
            echo "<div class='replier_name'>".$replied_msg_user_name."</div>";
            if(empty($replied_msg)){
                echo "<div class='replier_attachment'>𝕒𝕥𝕥𝕒𝕔𝕙𝕞𝕖𝕟𝕥</div>";
            }else{
                echo "<div class='replier_msg'>".$replied_msg."</div>";
            }
            echo "</div>";
        }
        echo "<div class='reciever_container'>";

        if($var['replied_msg_id'] === '0'){
            if($var['reciever_id'] <> $i){
            echo "<div class='reciever_img_div'> <img src='image/".$var_op["image"]."'> </div>";
            echo "<div class='reciever_name' style='margin-top:1%'>".$var_op["usr_name"]."</div>"; 
          }
        }else{
            echo "<div class='reciever_img_div'> <img src='image/".$var_op["image"]."'> </div>";
            echo "<div class='reciever_name'>".$var_op["usr_name"]."</div>"; 
        }
       # echo "<div class='editor three_dot'><img class='editor_logo' src='image/three dot.png'></div>";
        echo "<div class='msg_editor'>";
        echo "<div id='".$var['id']."' class='editor_add_emoji_but'><img src='image/add_emoji.png'></div>";
        echo "<div id='".$var['id']."' class='editor_edit_but'><img src='image/pencil.png'></div>";
        echo "<div id='".$var['id']."' class='editor_reply_but' tabindex='3'><img src='image/reply.png'></div>";
        echo "<div id='".$var['id']."' class='editor_delete_but'><img src='image/delete.png'></div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='msg_cont ".$var['id']."'>";
        if($var['msg'] != ''){
            echo "<div class='msg'>";
            echo $var['msg'];
            echo "</div>";
            }elseif($var['picture'] != ''){
            echo "<div class='msg_image'>";
            echo "<img class='img' id='".$var['picture']."' src='".$var['picture']."'>";
            echo "</div>";
            }elseif($var['video'] != ''){
                echo "<div class='msg_video'>";
                echo "<video preload='none' poster='image/video.jpg' src='public/video/".$var['video']."' width='320' height='240' controls></video>";
                echo "</div>";
            }
        echo "</div>";
        echo "</div>";
        $i = $var['reciever_id'];
    }
}
}
}
?>