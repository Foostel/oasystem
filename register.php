<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="action.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <script type="text/javascript">
            $(function(){
                $('#header').load("header.php");
            });
            $(function(){
                $('#pop-up').load("sign-in.php");
            });
        </script>

        
        
</head>
<body style="background-color: #E9E9E9;">
    <div class="header" id="header"></div>
    <div class="section" onclick="if(!h){toggle('pop-up');}">
        <div id="register">
            <h2 style="text-align:left;">REGISTER</h2>
            <form class="needs-validation" novalidate="">
                <table cellspacing="20px" cellpadding="5px" style="border-top:solid">
                    <tr>
                        <td>First Name: </td>
                        <td>
                            <input type="text" class="form-control" required="" style="width: 250px; height: 30px; margin: 20px 0px 15px 0px;">
                            <div class="valid-feedback">valid.</div>
                            <div class="invalid-feedback">plzz fill</div>
                        </td>
                        <td>Last Name: </td>
                        <td>
                            <input type="text" class="form-control" required="" style="width: 250px; height: 30px; margin: 15px 0px 15px 0px;">
                            <div class="valid-feedback">valid.</div>
                            <div class="invalid-feedback">plzz fill</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender: </td>
                        <td>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customcontrolvalidation2" name="radio-stacked" required="">
                                <label class="custom-control-label" for="customcontrolvalidation2">male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customcontrolvalidation3" name="radio-stacked" required="">
                                <label class="custom-control-label" for="customcontrolvalidation3">female</label>
                            </div>
                        </td>
                        <td>Age: </td>
                        <td>
                            <input type="number" class="form-control" name="ages" style="width: 250px; margin: 15px 0px 15px 0px; height: 30px;" required="">
                            <div class="valid-feedback">valid.</div>
                            <div class="invalid-feedback">plzz fill</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone: </td>
                        <td>
                            <div>
                                <input type="tel" class="form-control" pattern="^\d{10}$" required="" style="width: 250px; margin: 15px 0px 15px 0px; height: 30px;">
                                <div class="valid-feedback">valid.</div>
                                <div class="invalid-feedback">plzz fill</div>
                            </div>
                        </td>
                        <td>Email: </td>
                        <td>
                            <input type="email" class="form-control" name="emails" style="width: 250px; margin: 15px 0px 15px 0px; height: 30px;" required="">
                            <div class="valid-feedback">valid.</div>
                            <div class="invalid-feedback">plzz fill</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Create Password: </td>
                        <td>
                            <input type="password" class="form-control" id="txtpass" name="password" required="" style="width: 250px; margin: 15px 0px 15px 0px; height: 30px;">
                        </td>
                        <td>Confirm Password: </td>
                        <td>
                            <input type="password" class="form-control" id="txtconpass" name="com_password" style="width: 250px; margin: 15px 0px 15px 0px; height: 30px;" required="">
                        </td>
                    </tr>
                </table>
                <input type="submit" class="btn btn-primary" id="btnSubmit" value="Submit">
            </form>
            <script type="text/javascript">
            $(function(){
                $("#btnSubmit").click(function(){
                    var password = $("#txtpass").val();
                    var con_password = $("#txtconpass").val();
                    if (password.length < 8 || password.length > 15) {
                        alert("asdfghjk");
                        return false;
                    }
                    if (password != con_password) {
                        alert("plz coasadj");
                        return false;
                    }
                    return true;
                });
            });
            </script>
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