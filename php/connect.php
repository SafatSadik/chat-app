<?php
$host = "localhost";
$user = "safat";
$password = "amiPagla@yo5654";
$db = "chat app";
$connect = mysqli_connect($host,$user,$password,$db);
 if($connect==false){
    echo "<h2>"."database could not be connected"."</h2>";
}// mysqli_close($connect);

?>