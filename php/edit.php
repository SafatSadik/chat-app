<?php
if(isset($_POST['sender']) && isset($_POST['reciever']) && isset($_POST['id']) && isset($_POST['new_msg'])){
    $sender = $_POST['sender'];
    $reciever = $_POST['reciever'];
    $id = $_POST['id'];
    $new_msg = $_POST['new_msg'];
    require "connect.php";
    $query = "UPDATE `messege` SET `msg` = '$new_msg' , `un_read` = 'yes' WHERE (`sender_id` = '$sender' AND `reciever_id` = '$reciever' AND `id`= '$id') ";
    $run = mysqli_query($connect, $query);
}
?>