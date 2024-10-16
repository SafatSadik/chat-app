<?php
if(isset($_COOKIE["usr_uniq_code"])){
    header("location:../index.php");
}
if(isset($_REQUEST['error_usr'])) {
    
    echo "<script> const error = 'usr';</script>";
}else{
    
    
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="icon" href="../logo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <section class="main_section">
    <section class="container">

        <div class="header">Create an account</div>

        <form action="../register_core.php" method="post">
            <span>EMAIL</span>
            <input name="email" class="email" type="email" required>
            <span>USER NAME</span>
            <input name="usrname" class="usrname" type="text" required>
            <span>PASSWORD</span>
            <input name="password" class="Password" type="Password" required>
            <span>DATE OF BIRTH</span>
            
            <select name="day" required>
            <option value="">Select</option>
            
<?php
for($i=1;$i<=31;$i++)
{
    echo '<option value='.$i.'>'.$i.'</option>';
}
?>
</select>


<select name="month" required>

<option value="">Select</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="Mars">Mars</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>

<select name="year" required>
<option value="">Select</option>
<?php
for($i=1900;$i<=2022;$i++)
{
    echo '<option value='.$i.'>'.$i.'</option>';
}

?>
</select>
       

<input class="submit" value="Continue" type="submit">
        </form>
        <a href="../login">already have an account?</a>

    </section>

    </section>
    <script src="app.js"></script>
</body>
</html>
