<?php
require "connect.php";
$usr_code = $_POST['sender'];
$side_bar_show_query = "SELECT * FROM `side_bar_peoples` WHERE(`usr_uniq_code` = '$usr_code') ORDER BY serial_number DESC";
$side_bar_show_run = mysqli_query($connect,$side_bar_show_query);

while($show_var = mysqli_fetch_array($side_bar_show_run)){ 
echo "<a href=chat.php?user=".$show_var['op_id'].">";
echo "<div class='side_bar_people'>";
echo "<div class='side_bar_people_img_div'>";
echo "<img src='image/".$show_var['image']."'>";
echo "</div>";
echo "<div class='ns_container'>";
echo "<div class='side_name'>".$show_var['usr_name']."</div>";
echo "<div class='status'>".$show_var['status']."</div>";
echo "</div>";
echo "</a>";
echo "<div class='cross' id='".$show_var['op_id']."'>";
echo "<img src='image/x-mark-4-512.png'>";
echo "</div>";
echo "</div>";
}

echo "<script>";
require "../js/side_bar_hover.js";
echo "</script>";
?>