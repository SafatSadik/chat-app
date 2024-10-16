<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat app</title>
    <link rel="stylesheet" href="style.css">
    <?php
    if(isset($_REQUEST['error_nf'])){
        $msg = "Invalid User";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    if(isset($_REQUEST['error'])){
        $msg = "oops , some error occurd [0_0] please try again latter";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    if (isset($_COOKIE['usr_uniq_code'])) {
        header("location:../index.php");
    }
    ?>
</head>
<body>
    <section class="main_section">

    
        <form action="../login_core.php" method="post">
         <div class="container">
         <div class="login">Sign In</div>
         
        <input type="email" name="email" class="email" placeholder="email" required>
        <input type="password" name="password" placeholder="Password" class="password" required>
        <input type="submit" value="logIn" class="submit">
        <div class="foter">need an account? <a href="../register">register</a> </div>
    
        </div>
        
    </form>
    </section>
    
</body>
</html>