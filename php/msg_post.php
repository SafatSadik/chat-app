<?php
require "connect.php";
$msg = $_POST['massage'];
$sender = $_POST['sender'];
$reciever = $_POST['reciever'];
$replied_msg_id = $_POST['replied_msg_id'];
if ($msg <> "") {
    $query = "INSERT INTO `messege` (`sender_id`,`reciever_id`,`msg`,`replied_msg_id`) VALUES ('$sender','$reciever','$msg','$replied_msg_id')";
    $run = mysqli_query($connect, $query);


    if ($run == true) {
        $check = "SELECT * FROM `side_bar_peoples` WHERE(`usr_uniq_code` = '$sender' AND `oponent_uniq_code` = '$reciever')";
        $check_run = mysqli_query($connect, $check);
        if (mysqli_num_rows($check_run) > 0) {
            $delete = "DELETE FROM `side_bar_peoples` WHERE(`usr_uniq_code` = '$sender' AND `oponent_uniq_code` = '$reciever')";
            $delete_run = mysqli_query($connect, $delete);
        }
        $select_from_s1 = "SELECT * FROM `s1` WHERE `id` = '$reciever'";
        $select_from_s1_run = mysqli_query($connect, $select_from_s1);
        $fetch = mysqli_fetch_assoc($select_from_s1_run);
        $op_name = $fetch['usr_name'];
        $op_image = $fetch['image'];
        $op_status = $fetch['status'];
        $op_id = $fetch['id'];
        $side_bar_query = "INSERT INTO `side_bar_peoples` ( `usr_uniq_code`, `oponent_uniq_code`,`usr_name`,`image`,`status`,`op_id`) VALUES ('$sender' , '$reciever' , '$op_name' , '$op_image' , '$op_status','$op_id')";
        $side_bar_run = mysqli_query($connect, $side_bar_query);
        if ($side_bar_run == true) {
            echo "1";
        }
    } else {
echo "0";
    }
}
?>