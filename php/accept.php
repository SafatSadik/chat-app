<?php
require "connect.php";
$first_friend = $_POST['first_friend'];
$second_friend = $_POST['second_friend'];
$check_fq = "SELECT * FROM `friends` WHERE (`first_friend` = '$first_friend' AND `second_friend` = '$second_friend') OR (`first_friend` = '$second_friend' AND `second_friend` = '$first_friend')";
$check_fr = mysqli_query($connect,$check_fq);
if(mysqli_num_rows($check_fr) > 0){
    $del_query = "DELETE FROM `add_friends` WHERE (`sender` = '$first_friend' AND `reciever` = '$second_friend') OR (`sender` = '$second_friend' AND `reciever` = '$first_friend')";
    $del_run = mysqli_query($connect , $del_query);
}else{
$queryy = "INSERT INTO `friends` (`first_friend`,`second_friend`) VALUES ('$first_friend','$second_friend')";
$run_queryy = mysqli_query($connect,$queryy);
if($run_queryy == true){
    $del_queryy = "DELETE FROM `add_friends` WHERE (`sender` = '$first_friend' AND `reciever` = '$second_friend') OR (`sender` = '$second_friend' AND `reciever` = '$first_friend')";
    $del_runn = mysqli_query($connect , $del_queryy); 
    if($del_queryy == true){
        echo "done";
    }
} 
}




?>