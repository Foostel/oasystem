<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    if(!isset($_POST['email']))
    {
        header('location:page.php');
    }
    include("db-connection.php");
    require('submit-reg.php');
    session_start();
    $_SESSION['fn'] = $_POST['fname'];
    $_SESSION['ln'] = $_POST['lname'];
    $_SESSION['gn'] = $_POST['Gender'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['cc'] = $_POST['countryCode'];
    $_SESSION['ph'] = $_SESSION['cc']."".$_POST['phoneno'];
    $_SESSION['em'] = $_POST['email'];
    $_SESSION['ps'] = $_POST['pass1'];
    $email=$_SESSION['em'];
    $phone=$_SESSION['ph'] ;

    $check="select * from user where email='$email'";
    if (mysqli_num_rows(mysqli_query($conn,$check))==0)
    {    
        $_SESSION['OTP'] =rand(11111,99999);   
        sendmail($_SESSION['em'],$_SESSION['OTP']);
    ?>
        </head>
        <body style="background-color: #E9E9E9;">
    
        <center style="margin-top:200px;"><h2>Verify it's you !</h2>
        <p>
            We have sent you a verification code at your email address.
        </p>
        <form action="on-db.php" method="post">
        <input style="text-align: center;" type="text" class="inputs" name="o-t-p"  placeholder="Enter verification code here" name="">
        <input type="submit" name="" class="btn" value="Verify" name="verify">    
        </form>
        </center>
        </body>
        </html>
    <?php
    }
    else
    {   echo'already registered';
        echo "<script>alert('Email already in use, try again ! '); window.location='register.php';</script>";
    }  
    ?>