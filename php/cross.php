<?php
require "connect.php";
$my_id = $_POST['my_id'];
$op_id = $_POST['op_id'];
$del_query = "DELETE FROM `side_bar_peoples` WHERE `usr_uniq_code` = '$my_id' AND `oponent_uniq_code` = '$op_id'";
$del_run = mysqli_query($connect , $del_query);
if($del_run == true){
    echo "done";
}else{
    echo "mew";
}
?>