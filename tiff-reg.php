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
      

         ?>
        
    </head>

    <body>
        <div class="header" id="header">
        </div>

        <div class="section" id="form-sec1">
            <img src="oas-logo.svg" style="height: 400px; position: fixed; top:200px; left: 900px;">
            <form style="position: absolute; top:150px; left: 50px;" method="post" action="tiffen1.php">
                <table cellspacing="" >
                    <tr>
                        <td><input style="text-align: center;" id="b-name" type="" class="inputs" name="bn" placeholder="Business name" ></td> 
                        <td><input style="text-align: center;" id="h-no" type="" class="inputs" name="b" placeholder="Building/House no" ></td>  

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
                                <input style="text-align: center; width: 260px;" type="file" name=""><br><br>
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><a><button class="btn" type="button" onclick="rqrd(['b-name','h-no','sts','state','Landmark','Area','vt','pc'],'#form-sec2');">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button></a></td>
                    </tr>

                </table>
            
        </div>

        <div class="section" id="form-sec2" >
            <div style="position: relative; top:150px; left: 50px;">
                <table cellspacing="15px" >
                    <tr>
                        <td><div> Meals provided <br><hr><button type="button" class="checkbtn" name="breakfast" onclick="check(this); disp('Breakfast');">Breakfast</button><button type="button" name="lunch" onclick="check(this);disp('Lunch');" class="checkbtn" >Lunch</button><button type="button" class="checkbtn"  name="dinner" onclick="check(this);disp('Dinner');">Dinner</button> </div></td> 
                        
                    </tr>
                    <tr>
                        <td>
                            <div> Facilities provided <br><hr><button type="button" class="checkbtn" name="home_delivery" onclick="check(this);">Home delivery</button><button type="button" class="checkbtn" name="Come_and_eat" onclick="check(this);">Come & eat</button><button type="button" class="checkbtn" name="Customization" onclick="check(this);">Customization</button> </div>
                        </td>  
                    </tr>

                    <tr>
                        <td>
                            <div>Meal Time <br><hr>
                                <div id="Breakfast" style="display: none;">
                                Breakfast <br><span class="day-time" name="bt1"></span>
                                To
                                <span class="day-time" name="bt2"></span><input style="width: 70px; height: 20px;" type="" class="inputs" name="bf" placeholder="Cost">
                                <select class="inputs" name="payb" style="width: 80px; height: 30px;">
                                    <option>Daily</option><option>Monthly</option><option>Yearly</option>
                                </select><br>
                                </div>

                                <div id="Lunch"  style="display: none;">
                                Lunch <br><span class="day-time" name="lt1"></span>
                                To
                                <span class="day-time" name="lt2"></span><input style="width: 70px; height: 20px;" type="" class="inputs" name="lf" placeholder="Cost">
                                <select class="inputs" name="payl" style="width: 80px; height: 30px;">
                                    <option>Daily</option><option>Monthly</option><option>Yearly</option>
                                </select><br>
                                </div>

                                <div id="Dinner" style="display: none;">
                                Dinner <br><span class="day-time" name="dt1"></span>
                                To
                                <span class="day-time" name="dt2"></span><input style="width: 70px; height: 20px;" type="" class="inputs" name="df" placeholder="Cost">
                                <select class="inputs" name="payd" style="width: 80px; height: 30px;">
                                    <option>Daily</option><option>Monthly</option><option>Yearly</option>
                                </select><br>
                                </div>

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