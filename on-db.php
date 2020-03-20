<!DOCTYPE html>
<html>
<head>
    <title>Foostel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    include("db-connection.php");
    session_start();

    if($_SESSION['OTP']==$_POST['o-t-p'])
    {

        $fname=$_SESSION['fn'];
        $lname=$_SESSION['ln'];
        $gender=$_SESSION['gn'];
        $age=$_SESSION['age'];
        $phone=$_SESSION['ph'];
        $email=$_SESSION['em'];
        $password=$_SESSION['ps']
        // echo"<script type='text/javascript'> alert('You are verified');
        // //here all the user information will feeded into database
        // window.location='user-home.php';
        // </script>";
        echo $fname.$lname." ".$gender." ".$age." ".$phone.$email.$password;
        $query="insert into user (fname,lname,gender,age,phone,email,password) values ('$fname','$lname','$gender',$age,$phone,'$email','$password')";
        $i=mysqli_query($conn,$query);
        if($i)
        {
            echo "Registration Successful";
        }
        else{
            echo "try again";
        }

    }
    else{
    echo "Not verified";
}
    ?>
</head>
<body style="background-color: #E9E9E9;">
    </body>
</html>