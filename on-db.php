<!DOCTYPE html>
<html>
<head>
    <title>Foostel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    session_start();
    if($_SESSION['OTP']==$_POST['o-t-p'])
    {
        echo"<script type='text/javascript'> alert('You are verified');
        //here all the user information will feeded into database
        window.location='user-home.php';
        </script>";
    }
    else{
    echo "Not verified";
}
    ?>
</head>
<body style="background-color: #E9E9E9;">
    </body>
</html>