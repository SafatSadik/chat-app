<?php
if(isset($_FILES["file"])){
  require "connect.php";
  $sender = $_REQUEST['sender'];
  $reciever = $_REQUEST['reciever'];

  $submited_file = $_FILES["file"];

  $file_type = $submited_file["type"];
  
  $file_nameS = $submited_file["name"];
   
  $new_name = rand(100000,999999).date("dmY").$file_nameS;

  $tmp_file_name = $submited_file["tmp_name"];

  

if($file_type == 'video/mp4'){
     move_uploaded_file($tmp_file_name,"../public/video/$new_name");
     $query = "INSERT INTO `messege` (`sender_id`,`reciever_id`,`msg`,`video`) VALUES ('$sender','$reciever','','$new_name')";
     $run = mysqli_query($connect, $query);
     if($run==false){
      echo "errror";
     }elseif($run==true){
       echo "done";
     }

    }
   elseif($file_type == 'image/png' || $file_type == 'image/jpeg' || $file_type == 'image/gif' || $file_type == 'image/psd' || $file_type == 'image/pdf' || $file_type == 'image/ai' || $file_type == 'image/raw'){
    
    move_uploaded_file($tmp_file_name,"../public/image/$new_name");
    $query = "INSERT INTO `messege` (`sender_id`,`reciever_id`,`msg`,`picture`) VALUES ('$sender','$reciever','','public/image/$new_name')";
    $run = mysqli_query($connect, $query);
       if($run==false){
          echo "errror";
        }elseif($run==true){
          echo "done";
        }
   }
   
   
    elseif ($file_type == 'zip' || $file_type == 'zipx'){
    move_uploaded_file($tmp_file_name,"../public/zip/$new_name");

    }
    elseif ($file_type == 'zipx'){
        move_uploaded_file($tmp_file_name,"../public/zip/$new_name");
        }
    elseif ($file_type == 'wav' || $file_type == 'mp3' || $file_type == 'ogg' || $file_type == 'm4p'){
    move_uploaded_file($tmp_file_name,"../public/audio/$new_name".".$file_type");

    }


  }
?>