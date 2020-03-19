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
        session_start();
        $_SESSION['verified']=false;
         ?>
    <script src="actions.js"></script>    
</head>
<body style="background-color: #E9E9E9;">
    <div class="header" id="header"></div>
    <div class="section" onclick="if(!h){toggle('pop-up');}">
        <div id="register">
            <h2 style="text-align:left;">REGISTER</h2>
            <form onsubmit="return validate();" method="post" action="verify.php">
                <table cellspacing="20px" cellpadding="5px" style="border-top:solid" width="1000px;">
                    <tr><td>First Name: </td> <td><input autocomplete="" style="width: 200px; height: 30px; margin: 0px;" class="inputs" type="text" required="" name="fname"></td> <td>Last Name:</td> <td><input name="lname" class="inputs" style="width: 200px; margin: 0px; height: 30px; "type="text"></td></txr>
                    <tr><td>Gender: </td> <td>Male<input  type="radio" name="Gender" value="Male" required=""> Female<input type="radio" value="Female" name="Gender" required=""></td> <td>Age: </td> <td><input  class="inputs" type="number" name=" " style="width: 50px; margin: 0px; height: 30px;" required=""> </td></tr>
                    <tr><td>Phone: </td> <td>
                        <span name="cc" id="cc"></span>

                        <input  style="width: 100px; height: 30px; margin: 0px; " class="inputs" name="phoneno" id="phoneno" required=""></td> <td>Email: </td> <td><input name="email" class="inputs" type="Email" style="width: 200px; margin: 0px; height: 30px;"> </td></tr>
                    
                    <tr><td>Create Password: </td> <td><input onkeyup="passC();" style="width: 200px; height: 30px; margin: 0px;" class="inputs" type="Password" name="pass1" id="pass1" required=""> <i id="eye" class="fa fa-eye-slash" aria-hidden="true" onmousedown="showp();" style="cursor: pointer;"></i></td> <td>Confirm Password: </td> <td><input  class="inputs" type="Password" style="width: 200px; margin: 0px; height: 30px;" id="pass2" name="pass2" required=""> </td></tr>
                </table>
            <input type="submit" class="btn" name="" value="Submit">
            </form>
            <br>
        </div>
    </div>
    <div class="pop-up" id="pop-up"></div>
</body>
</html>