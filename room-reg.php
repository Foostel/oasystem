<!DOCTYPE html>
    <head>
        <title>Foostel</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="actions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        <style type="text/css">
            html{
                overflow: hidden;
            }
        </style>
        <script type="text/javascript" src="state-city/cities.js"></script>
        <script type="text/javascript" src="geo-loc.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#side-panel').load("side-panel.php");
            });
            $(function(){
                $('#header').load("user-header.php");
            });

            $(function(){
                $('#pop-up').load("geo-map.php");
            });
            $(function(){
                $('.day-time').load("daytime.php");
            });
            
        </script>
        <?php 
        session_start();
        if(!isset($_SESSION['id']))
        {   echo"Access denied";
            header("location:page.php");
        }
        else{
        }

         ?>
        
    </head>

    <body>
        <div class="header" id="header">
        </div>

        <div class="section" id="form-sec1">
            <img src="oas-logo.svg" style="height: 400px; position: fixed; top:200px; left: 900px;">
            <form style="position: absolute; top:150px; left: 50px;" method="post" action="submit-room.php" enctype="multipart/form-data">
                <table cellspacing="" >
                    <tr> 
                        <td><input style="text-align: center;" id="h-no" type="" class="inputs" name="b" placeholder="Building/House no" ></td>  
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <select  style="height: 50px; width: 260px;text-align: center;" class="inputs" onchange="print_city('state', this.selectedIndex);" id="sts" name ="s" class="form-control" required></select>
                        </td>
                        <td>
                            <script language="javascript">print_state("sts");</script>
                            <select  style="height: 50px;width: 260px; text-align: center;" class="inputs" id ="state" name="c" class="form-control" required></select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input id="Landmark" style="text-align: center;" type="" class="inputs" name="l" placeholder="Landmark" >
                        </td>
                        <td>
                            <input id="Area" style="text-align: center;" type="" class="inputs" name="a" placeholder="Area/Coloney/Street" >
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input id="vt" style="text-align: center;" type="" class="inputs" name="vt" placeholder="Village/Town" >
                        </td>
                        <td>
                            <input id="pc" style="text-align: center;" type="" class="inputs" name="p" placeholder="Pincode" >
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button id="geo-l" onclick="toggle('pop-up');" style="text-align: center; width: 260px;" type="button" class="inputs" name="">
                                Add geo-location
                            </button>
                        </td>

                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Upload photos(optional)<br><br>
                                <input style="text-align: center; width: 260px;" type="file" name="uploadfile"><br><br>
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><a><button class="btn" type="button" onclick="rqrd(['h-no','sts','state','Landmark','Area','vt','pc'],'#form-sec2');">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button></a></td>
                    </tr>

                </table>
            
        </div>

        <div class="section" id="form-sec2" >
            <div style="position: relative; top:150px; left: 50px;" >
                <table cellspacing="15px" >
                    <tr>
                        <td><div> Room for <br><hr> 
                        <input type="radio" name="gender" id="gender1" value="Male">MALE
                        <input type="radio" name="gender" id="gender1" value="Female">FEMALE
                        <br><br>
                        <input type="radio" name="work" id="work1" value="Student">STUDENT
                        <input type="radio" name="work" id="work1" value="Employee">EMPLOYEE
                    <br>
                        </div></td>
                        <td><div> Caution Money &nbsp<input style="width: 70px; height: 20px;" class="inputs" type="" name="caution-m" >

                        </div></td> 
                        
                    </tr>
                    <tr>
                        <td>
                            <div> Facilities provided <br><hr>
<input type="checkbox" name="facilites[]" id="f" value="Parking Area">Parking Area<br>
<input type="checkbox" name="facilites[]" id="f" value="Wifi">Wifi<br>
<input type="checkbox" name="facilites[]" id="f" value="Room Service">Room Service<br>
<input type="checkbox" name="facilites[]" id="f" value="Attach Bathrooms">Attach Bathrooms<br>
<input type="checkbox" name="facilites[]" id="f" value="Table&Chair">Table&Chair<br>
<input type="checkbox" name="facilites[]" id="f" value="Bed">Bed<br>
<input type="checkbox" name="facilites[]" id="f" value="Cupboard">Cupboard<br>
    
                            </div>
                        </td>
                        <td><div> Rules <hr><textarea style="width: 200px; border: none; height: 100px; font-family: segoe UI; font-size: 13px;" placeholder="Write here"></textarea>

                        </div></td>  
                    </tr>
                    <tr>
                        <td>
                            <div> 

<input type="checkbox" name="room[]" id="r" value="1r" onclick="disp('b-1');">1-room<br>
<input type="checkbox" name="room[]" id="r" value="2r" onclick="disp('b-2');">2-room<br>
<input type="checkbox" name="room[]" id="r" value="rk" onclick="disp('b-3');">Room&Kitchen<br>
   
                            </div>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <div id="b-1" style="display: none;">
                                1-Room &nbsp<input style="width: 70px; height: 20px;" placeholder="Available" class="inputs" type="" name="r1a">&nbsp<input style="width: 70px; height: 20px;" placeholder="Rent/Month" class="inputs" type="" name="r1c">

                                </div>
                            <div id="b-2" style="display: none;">
                                2-Room &nbsp<input style="width: 70px; height: 20px;" placeholder="Available" class="inputs" type="" name="r2a">&nbsp<input style="width: 70px; height: 20px;" placeholder="Rent/Month" class="inputs" type="" name="r2c">
                                <br>
                                </div>
                            <div id="b-3" style="display: none;">
                                Room & Kitchen &nbsp<input style="width: 70px; height: 20px;" placeholder="Available" class="inputs" type="" name="rka">&nbsp<input style="width: 70px; height: 20px;" placeholder="Rent/Month" class="inputs" type="" name="rkc">
                                <br>
                                </div>
                        </td>
 
                    </tr>

                    <tr>
                        <td><a href="#form-sec1"><button class="btn" type="button"><i class="fa fa-angle-left" aria-hidden="true"></i> Back </button></a> &nbsp  <input type="submit" value="Submit" class="btn" name="submit" onclick=""></td>

                    </tr>
                    

                </table>
            </div>
            </form>
        </div>
        <div class="side-panel" id="side-panel" style="text-align: center;">
                
        </div>
        <div class="pop-up" id="pop-up" style="text-align:center;">
            
        </div>
        
       
    </body>
</html>