<?php
if(!isset($_REQUEST['email']) || !isset($_REQUEST['password'])){
    header("location:index.php");
}
if(isset($_COOKIE['usr_uniq_code'])){
  header("location:index.php");
}else{
     require "php/connect.php";
     $email = $_POST["email"];
     $password_get = filter_var($_POST['password'] , FILTER_SANITIZE_STRING , FILTER_FLAG_STRIP_HIGH);
     if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      header("location:register/index.php?error_validate");
    }else {
     $password = "sss".sha1(sha1("517199".md5("dhikchik".$password_get."mew")."kuturkutur")).sha1("I love you mim")."safat33";
     $usr_uniq_code = sha1(md5($email.$password));
     $query = "SELECT * FROM `s1` WHERE `usr_uniq_code` = '$usr_uniq_code'";
     $run = mysqli_query($connect,$query);
     
       if($run==true){
         if(mysqli_num_rows($run) > 0){
           $usr_details = mysqli_fetch_assoc($run);
           $public_code = $usr_details['public_code'];
            setcookie("usr_uniq_code","$usr_uniq_code",time() + (86400 * 30), '/' , null , null , true);
            setcookie("public_code","$public_code",time() + (86400 * 30), '/' , null , null , true);
           header("location:index.php");
           }else{
             header("location:login/index.php?error_nf");
           }
     }else{
      header("location:login/index.php?error");
    }
}
}
?>