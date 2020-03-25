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
            header("location:u-sign-in.php?nxt=tiff-reg.php");
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
            <form style="position: absolute; top:150px; left: 50px;" method="post" action="submit-tiff.php" enctype="multipart/form-data">
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
                                <input style="text-align: center; width: 260px;" type="file" name="uploadfile" id=""><br><br>
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
                        <td><div> Meals provided <br><hr>
<input type="checkbox" name="meal[]" id="f1" value="Breakfirst" onclick="disp('Breakfast');" >Breakfast  &nbsp&nbsp&nbsp&nbsp&nbsp                           
<input type="checkbox" name="meal[]" id="f1" value="Lunch" " onclick="disp('Lunch');" >Lunch &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="meal[]" id="f1" value="Dinner" onclick="disp('Dinner');">Dinner  
<br> </div></td>     
                        
                    </tr>
                    <tr>
                        <td>
                        <div> Facilities provided <br><hr><input type="checkbox" name="facilities[]" id="f2" value="hd" >Home Delivery  &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="facilities[]" id="f2" value="cae" name="Come_and_eat" >Come And Eat  &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="facilities[]" id="f2" value="c" >Customization<br></div>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <div>Meal Time <br><hr>
                                <div id="Breakfast" style="display: none;">
                                Breakfast <br>
    <select class="inputs" style="width: 50px; height: 30px; " name="timebt1">
    <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
    <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
    <option value="12">12</option>
</select>
<select class="inputs" style="width: 50px; height: 30px;" name="dnbt1">
    <option value="AM">AM</option> <option value="PM">PM</option>
</select>
                                To
    <select class="inputs" style="width: 50px; height: 30px; " name="timebt2">
    <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
    <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
    <option value="12">12</option>
</select>
<select class="inputs" style="width: 50px; height: 30px;" name="dnbt2">
    <option value="AM">AM</option> <option value="PM">PM</option>
</select><input style="width: 70px; height: 20px;" type="" class="inputs" name="bf" placeholder="Cost">
                                <select class="inputs" name="payb" style="width: 80px; height: 30px;">
                                    <option value="">Select</option><option value="Daily">Daily</option><option value="Monthly">Monthly</option><option value="Yearly">Yearly</option>
                                </select><br>
                                </div>

                                <div id="Lunch"  style="display: none;">
                                Lunch <br><select class="inputs" style="width: 50px; height: 30px; " name="timelt1">
    <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
    <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
    <option value="12">12</option>
</select>
<select class="inputs" style="width: 50px; height: 30px;" name="dnlt1">
    <option value="AM">AM</option> <option value="PM">PM</option>
</select>
                                To
    <select class="inputs" style="width: 50px; height: 30px; " name="timelt2">
    <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
    <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
    <option value="12">12</option>
</select>
<select class="inputs" style="width: 50px; height: 30px;" name="dnlt2">
    <option value="AM">AM</option> <option value="PM">PM</option>
</select><input style="width: 70px; height: 20px;" type="" class="inputs" name="lf" placeholder="Cost">
                                <select class="inputs" name="payl" style="width: 80px; height: 30px;">
                                    <option value="">Select</option><option value="Daily">Daily</option><option value="Monthly">Monthly</option><option value="Yearly">Yearly</option>
                                </select><br>
                                </div>

                                <div id="Dinner" style="display: none;">
                                Dinner <br><select class="inputs" style="width: 50px; height: 30px; " name="timedt1">
    <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
    <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
    <option value="12">12</option>
</select>
<select class="inputs" style="width: 50px; height: 30px;" name="dndt1">
    <option value="AM">AM</option> <option value="PM">PM</option>
</select>
                                To
                                <select class="inputs" style="width: 50px; height: 30px; " name="timedt2">
    <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
    <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
    <option value="12">12</option>
</select>
<select class="inputs" style="width: 50px; height: 30px;" name="dndt2">
    <option value="AM">AM</option> <option value="PM">PM</option>
</select><input style="width: 70px; height: 20px;" type="" class="inputs" name="df" placeholder="Cost">
                                <select class="inputs" name="payd" style="width: 80px; height: 30px;">
                                    <option value="">Select</option><option value="Daily">Daily</option><option value="Monthly">Monthly</option><option value="Yearly">Yearly</option>
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