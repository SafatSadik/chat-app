if($var['replied_msg_id'] <> 0 ){
        echo "<div class='replied_from'>";
        echo "mew";
        echo "</div>";
    }



    if($var['msg'] != ''){
    echo "<div class='msg'>";
    echo $var['msg'];
    echo "</div>";
    }elseif($var['picture'] != ''){
    echo "<div class='msg_image'>";
    echo "<img class='img' id='".$var['picture']."' src='public/image/".$var['picture']."'>";
    echo "</div>";
    }elseif($var['video'] != ''){
        echo "<div class='msg_video'>";
        echo "<video src='public/video/".$var['video']."' width='320' height='240' controls></video>";
        echo "</div>";
    }




#the reciever
else{
    echo "<div class='reciever_box'>";
    echo "<div class='reciever_container'>";
    echo "<div class='reciever_img_div'> <img src='image/".$var_op["image"]."'> </div>";
    echo "<div class='reciever_name'>".$var_op["usr_name"]."</div>";     
    echo "</div>";
    echo "<div class='msg'>";
    echo $var['msg'];
    echo "</div>";
    echo "</div>";
    }










    
if($var['sender_id'] === $usr_code){
    
    echo "<div class='sender_box'>";
    echo "<div class='sender_container'>";
    echo "<div class='sender_img_div'> <img src='image/".$var_one["image"]."'> </div>";
    echo "<div class='sender_name'>".$var_one["usr_name"]."</div>";  
   # echo "<div class='editor three_dot'><img class='editor_logo' src='image/three dot.png'></div>";
    echo "<div class='msg_editor'>";
    echo "<div id='".$var['id']."' class='add_emoji_but'><img src='image/add_emoji.png'></div>";
    echo "<div id='".$var['id']."' class='edit_but'><img src='image/pencil.png'></div>";
    echo "<div id='".$var['id']."' class='reply_but' tabindex='3'><img src='image/reply.png'></div>";
    echo "<div id='".$var['id']."' class='delete_but'><img src='image/delete.png'></div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='msg_cont ".$var['id']."'>";
    
    echo "</div>";
    echo "</div>";
}









    
$i = null;
while($var = mysqli_fetch_array($run_chat_query)){
    if($var['sender_id'] === $usr_code){
        echo "<div class='sender_box'>";
        echo "<div class='sender_container'>";
        if($var['sender_id'] == $i){
            echo "<div class='sender_img_div'> <img src='image/".$var_one["image"]."'> </div>";
            echo "<div class='sender_name'>".$var_one["usr_name"]."</div>";  
        }
       # echo "<div class='editor three_dot'><img class='editor_logo' src='image/three dot.png'></div>";
        echo "<div class='msg_editor'>";
        echo "<div id='".$var['id']."' class='add_emoji_but'><img src='image/add_emoji.png'></div>";
        echo "<div id='".$var['id']."' class='edit_but'><img src='image/pencil.png'></div>";
        echo "<div id='".$var['id']."' class='reply_but' tabindex='3'><img src='image/reply.png'></div>";
        echo "<div id='".$var['id']."' class='delete_but'><img src='image/delete.png'></div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='msg_cont ".$var['id']."'>";
        if($var['msg'] != ''){
            echo "<div class='msg'>";
            echo $var['msg'];
            echo "</div>";
            }elseif($var['picture'] != ''){
            echo "<div class='msg_image'>";
            echo "<img class='img' id='".$var['picture']."' src='public/image/".$var['picture']."'>";
            echo "</div>";
            }elseif($var['video'] != ''){
                echo "<div class='msg_video'>";
                echo "<video src='public/video/".$var['video']."' width='320' height='240' controls></video>";
                echo "</div>";
            }
        echo "</div>";
        echo "</div>";
        $i = $var['reciever_id'];
    }else{
        echo "<div class='reciever_box'>";
        echo "<div class='reciever_container'>";
        if($var['reciever_id'] <> $i){
        echo "<div class='reciever_img_div'> <img src='image/".$var_op["image"]."'> </div>";
        echo "<div class='reciever_name'>".$var_op["usr_name"]."</div>";  
        }
       # echo "<div class='editor three_dot'><img class='editor_logo' src='image/three dot.png'></div>";
        echo "<div class='msg_editor'>";
        echo "<div id='".$var['id']."' class='add_emoji_but'><img src='image/add_emoji.png'></div>";
        echo "<div id='".$var['id']."' class='edit_but'><img src='image/pencil.png'></div>";
        echo "<div id='".$var['id']."' class='reply_but' tabindex='3'><img src='image/reply.png'></div>";
        echo "<div id='".$var['id']."' class='delete_but'><img src='image/delete.png'></div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='msg_cont ".$var['id']."'>";
        if($var['msg'] != ''){
            echo "<div class='msg'>";
            echo $var['msg'];
            echo "</div>";
            }elseif($var['picture'] != ''){
            echo "<div class='msg_image'>";
            echo "<img class='img' id='".$var['picture']."' src='public/image/".$var['picture']."'>";
            echo "</div>";
            }elseif($var['video'] != ''){
                echo "<div class='msg_video'>";
                echo "<video src='public/video/".$var['video']."' width='320' height='240' controls></video>";
                echo "</div>";
            }
        echo "</div>";
        echo "</div>";
        $i = $var['reciever_id'];
    }