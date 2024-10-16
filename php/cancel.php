<?php
require "connect.php";
$sender = $_POST['sender'];
$reciever = $_POST['reciever'];
$del_query = "DELETE FROM `add_friends` WHERE `sender` = '$sender' AND `reciever` = '$reciever'";
$del_run = mysqli_query($connect , $del_query);
if($del_run == true){
    echo "done";
} ?>