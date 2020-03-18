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

        </script>
    <script src="actions.js"></script>    
</head>
<body style="background-color: #E9E9E9;">
    <div class="header" id="header"></div>
    <div class="section" onclick="if(!h){toggle('pop-up');}">
        <div id="register">
            <h2 style="text-align:left;">REGISTER</h2>
            <form onsubmit="return validate();" method="get" action="">
                <table cellspacing="20px" cellpadding="5px" style="border-top:solid">
                    <tr><td>First Name: </td> <td><input style="width: 200px; height: 30px; margin: 0px;" class="inputs" type="text" name="" required=""></td> <td>Last Name:</td> <td><input class="inputs" style="width: 200px; margin: 0px; height: 30px; "type="text" name=""></td></tr>
                    <tr><td>Gender: </td> <td>Male<input  type="radio" name="Gender" value="Male" required=""> Female<input type="radio" value="Female" name="Gender" required=""></td> <td>Age: </td> <td><input  class="inputs" type="number" name=" " style="width: 50px; margin: 0px; height: 30px;" required=""> </td></tr>

                    <tr><td>Phone: </td> <td><input  style="width: 200px; height: 30px; margin: 0px;" type="number" class="inputs" name="phoneno" id="phoneno" required=""></td> <td>Email: </td> <td><input  class="inputs" type="Email" style="width: 200px; margin: 0px; height: 30px;"> </td></tr>
                    
                    <tr><td>Create Password: </td> <td><input  style="width: 200px; height: 30px; margin: 0px;" class="inputs" type="Password" name="" required=""></td> <td>Confirm Password: </td> <td><input  class="inputs" type="Password" style="width: 200px; margin: 0px; height: 30px;"> </td></tr>
                </table>
            <input type="submit" class="btn" name="" value="Submit">
            </form>
            <br>
            <form>
                <input type="" name="" class="inputs" placeholder="Enter OTP here">
                <input type="submit" name="" value="Verify" class="btn">
            </form>
        </div>
    </div>
    <div class="pop-up" id="pop-up"></div>
</body>
</html>