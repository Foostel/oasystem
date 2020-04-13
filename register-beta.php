<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
        <script type="text/javascript">
            $(function(){
                $('#header').load("header.php");
            });
            $(function(){
                $('#pop-up').load("sign-in.php");
            });
            $(function(){
                $('#cc').load("countrycode.html");
            });
        </script>
        <?php 
         ?>
    <script src="actions.js"></script>    
</head>
<body style="background-color: #E9E9E9;">
    
    <div class="section">
    <div style="text-align: center; margin-left: 0%;" class="container">
    <p style="display:inline-block;font-size: 25px;color:black;">Register</p><img src="oas-logo.svg" style=" display:inline-block;height: 50px; margin-top: 10px;"><br>
             <form class="form" style="position: relative; top:0px; text-align:center;display: inline-block; font-size: 15px;" onsubmit="return validate();" method="post" action="verify.php" enctype="multipart/form-data">
                <div class="form-container" style="display:block;width: 400px;">
                    <br>
                    <input style="height:30px;text-align: center; width: 150px;" id="f-name" type="" class="inputs" name="fname" placeholder="First name" >
                    <input style="height:30px;text-align: center; width: 150px;" id="f-name" type="" class="inputs" name="lname" placeholder="Last name" >
                    <br>
                    <select class="inputs" style="height:40px;text-align: center; width: 160px;" name="Gender" required="">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                        <input style="height:30px;text-align: center; width: 150px;" id="age" type="number" class="inputs" name="age" placeholder="Age" required=''>

                    <br>
                        <span name="cc" id="cc"></span>
                        <input style="height:30px; text-align: center; width: 150px;" id="phoneno" type="" class="inputs" name="phoneno" placeholder="Phone no." required=''>
                     <br>   
                    
                        <input style="height:30px;text-align: center; width: 315px;" id="email" type="Email" class="inputs" name="email" placeholder="Email" required=''>

                    <br>
                    
                    <input placeholder="Create Password" onkeyup="passC();" style="height:30px;text-align: center; width: 150px;" class="inputs" type="Password" name="pass1" id="pass1" required="">
                    <input placeholder="Confirm Password" class="inputs" type="Password" style="height:30px;text-align: center; width: 150px;" id="pass2" name="pass2" required=""> 
            <input style="width: 325px;" type="submit" class="btn" name="" value="Submit">
        </div>
            </form>
            <br>
            </div>

    </div>
</body>
</html>