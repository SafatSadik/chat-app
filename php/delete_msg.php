<?php
if(isset($_POST["sender"]) && isset($_POST["reciever"]) && isset($_POST["msg_id"])){
require "connect.php";
$sender = $_POST['sender'];
$reciever = $_POST['reciever'];
$msg_id = $_POST['msg_id'];
$query = "DELETE FROM `messege` WHERE `id` = '$msg_id' AND `sender_id` = '$sender' AND `reciever_id` = '$reciever'";
$run = mysqli_query($connect,$query);
if($run == true){echo "d";}else{echo "f";}}else{echo "e";}
?>