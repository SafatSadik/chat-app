<?php
require "connect.php";
$sender = $_POST['sender'];
$reciever = $_POST['reciever'];
$check_already_pending = "SELECT * FROM `add_friends` WHERE (`sender` = '$sender' AND `reciever` = '$reciever') OR (`sender` = '$reciever' AND `reciever` = '$sender')";
$check_already_pending_run = mysqli_query($connect,$check_already_pending);
if(mysqli_num_rows($check_already_pending_run) > 0){
    echo "P";
}else{
    $check_already_friends = "SELECT * FROM `friends` WHERE (`first_friend` = '$sender' AND `second_friend` = '$reciever') OR (`first_friend` = '$reciever' AND `second_friend` = '$sender')";
    $check_already_friends_run = mysqli_query($connect,$check_already_friends);
    if(mysqli_num_rows($check_already_friends_run) > 0){
        echo "F";
    }else{
        $add_friends_insert = "INSERT INTO `add_friends`(`sender`, `reciever`) VALUES ('$sender','$reciever')";
        $add_friends_insert_run = mysqli_query($connect,$add_friends_insert);
        echo "done";
    }
}





?>