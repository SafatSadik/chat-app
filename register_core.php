<?php

require 'php/connect.php';

$usrname = filter_var($_REQUEST['usrname'], FILTER_SANITIZE_STRING);
$email = $_REQUEST['email'];
$password_get = filter_var($_REQUEST['password'] , FILTER_SANITIZE_STRING , FILTER_FLAG_STRIP_HIGH);
$password = "sss".sha1(sha1("517199".md5("dhikchik".$password_get."mew")."kuturkutur")).sha1("I love you mim")."safat33";
$day = $_REQUEST['day'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];
$usr_uniq_code = sha1(md5($email.$password));
$public_code = sha1(bin2hex(random_bytes(32)));

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    header("location:register/index.php?error_validate");
  }else {
  
$check_query = "SELECT `email` FROM `s1` WHERE `email`= '$email'";
$run_check_query = mysqli_query($connect,$check_query);

if(mysqli_num_rows($run_check_query) > 0){
    header("location:register/index.php?error_usr");
}
else{  
 $query = "INSERT INTO `s1`(usr_name,email,password,usr_uniq_code,day,month,year,public_code) VALUES ('$usrname','$email','$password','$usr_uniq_code','$day','$month','$year','$public_code') ";
 $run_query = mysqli_query($connect , $query);

//  $user_details_query = "INSERT INTO `user_details` (public_code,usr_id,born_in) VALUES ('$public_code',)"

 if($run_query==true){
    setcookie("usr_uniq_code","$usr_uniq_code",time() + (86400 * 30), '/' , null , null , true);
    setcookie("public_code","$public_code",time() + (86400 * 30), '/' , null , null , true);
     header("location:index.php");
    
 }else{
    header("location:register/index.php?error");
 }
}
}
?>