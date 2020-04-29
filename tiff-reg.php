<!DOCTYPE html>
    <head>
        <title>Foostel</title>

    <meta charset="utf-8" />
    <title>Get coordinates of the mouse pointer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        #map { position: relative; top: 5px; bottom: 0; width: 100%; height: 300px; z-index: -1; }
        .inputs{
            border: solid .5px;
        }
    </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="actions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        <style type="text/css">
            html{
                overflow-x: hidden; 
                overflow-y: scroll;
            }
            li{
            background-color: white;
            padding: 8px;
            list-style: none;
            margin-left: 0px;
        }
        li:hover{
            cursor: pointer;
            background-color: gray;
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
            header("location:sign-in.php?nxt=tiff-reg.php");
        }
        else{
        }

         ?>
        
    </head>

    <body style="background-color:#CFCFCF;" onclick="document.getElementById('search_res_list').innerHTML='';">
        
        <div class="header" id="header">
        </div>
        <div style="position:relative; top: 100px; left:50px; border-bottom: solid .5px; width: 80%;">
            <p style="display:inline-block;font-size: 25px;color:black;">Register Tiffin Center</p>
        </div>
        
        <form onsubmit="return validateF();" class="form" style="position: relative; text-align:left;margin-left:20px;display: inline-block;" method="post" action="submit-tiff.php" enctype="multipart/form-data">
            
            <div class="form-container" style="width: 400px;">
                <input style="text-align: center; width: 300px;" id="b-name" type="" class="inputs" name="bn" placeholder="Business name" > 
                <input style="text-align: center; width: 300px;" id="h-no" type="" class="inputs" name="b" placeholder="Building/House no" >  
                <select  style="height: 50px; width: 310px;text-align: center;" class="inputs" onchange="print_city('state', this.selectedIndex);" id="sts" name ="s" class="form-control" required></select>
                <script language="javascript">print_state("sts");</script>
                <select  style="height: 50px;width: 310px; text-align: center;" class="inputs" id ="state" name="c" class="form-control" required></select>
                <script type="text/javascript" src="area.js"></script>
                <input autocomplete="off" id="search_input" style="text-align: center; width: 300px;" type="" class="inputs" name="a" placeholder="Area/Coloney/Street" onkeyup="getin();" >
                <span id="search_res_list" class="overlays" style="position: absolute; left: 2px; top: 200px; width: 300px;">
                </span>
                <input id="Landmark" style="text-align: center; width: 300px;" type="" class="inputs" name="l" placeholder="Landmark" >
            </div>   

            <div class="form-container" style="width: 400px;">
                <input id="pc" style="text-align: center; width: 300px;" type="" class="inputs" name="p" placeholder="Pincode" >
                <script type="text/javascript">
                            function pop(id)
                            {   var el= document.getElementById(id);
                                
                                var i= document.getElementsByClassName('section');
                                if(el.style.display=='')
                                {
                                document.getElementById('pop-up').style.display='block';
                                    for(let s=0;s<i.length;s++)
                                    {
                                        i[s].style.filter="blur(12px)";
                                        console.log(s);
                                    }
                                }
                            }

                </script>
                <button id="geo-l" onclick="pop('pop-up');" style="text-align: center; width: 310px; height: 50px; cursor: pointer;" type="button" class="inputs" name="loc">
                                Add geo-location
                </button>
                <input type="" name="lnglat" id="lnglat" style="display: none;">
                <div style="display: inline-block; text-align: center;">
                    <label class="inputs" for="photos" style="position:absolute;cursor:pointer;width:310px;height:25px;display:block; font-size: 14px; padding: 10px 0px 10px 0px;">Upload photos</label>
                    <input id="photos" class="inputs" style="opacity:0; z-index:-1;text-align: center;" type="file" name="uploadfile[]"  multiple>
                </div>
                <br>
                <span style="font-weight: 600;">Meals provided</span> <br><hr style="border: solid .5px; margin-right: 100px; ">
                <div style="display: inline-block; margin-right: 40px;">
                                Breakfast &nbsp<label for="f1" style="position: absolute; margin-top: 2px;" ><div  onclick="check('f1-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="f1-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                                <input type="checkbox" style="display: none;" name="meal[]" id="f1" value="Breakfirst" onclick="disp('Breakfast');">
                </div>

                <div style="display: inline-block; margin-right: 40px;">
                                Lunch &nbsp<label for="f2" style="position: absolute; margin-top: 2px;" ><div  onclick="check('f2-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="f2-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                                <input style="display: none;" type="checkbox" name="meal[]" id="f2" value="Lunch"  onclick="disp('Lunch');" >
                </div>             
                            
                <div style="display: inline-block; margin-right: 40px;">
                            Dinner &nbsp<label for="f3" style="position: absolute; margin-top: 2px;" ><div  onclick="check('f3-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="f3-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display:none;" type="checkbox" name="meal[]" id="f3" value="Dinner" onclick="disp('Dinner');">
                </div>
                
                <br><br><br>   
                
                <span style="font-weight: 600;">Facilities provided</span> <br><hr style="border: solid .5px; margin-right: 100px; ">        
                            
                <div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;">
                            Home Delivery &nbsp<label for="hd" style="position: absolute; margin-top: 2px;" ><div  onclick="check('hd-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="hd-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display:none;" type="checkbox" name="facilities[]" id="hd" value="hd">
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            Come & eat &nbsp<label for="cae" style="position: absolute; margin-top: 2px;" ><div  onclick="check('cae-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="cae-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display:none;" type="checkbox" name="facilities[]" id="cae" name="Come_and_eat" value="cae">
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            Customization &nbsp<label for="c" style="position: absolute; margin-top: 2px;" ><div  onclick="check('c-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="c-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display:none;" type="checkbox" name="facilities[]" id="c" value="c">
                </div>
            </div>  


            <div class="form-container" style="" >
                <div style="border-bottom: solid .5px;">
                    <span style="font-weight: 600;">Meal Details</span> <br><br>
                    <div id="Breakfast" style="display: none;">
                        Breakfast <br><br>
                        <select class="inputs" style="width: 50px; height: 30px; " name="timebt1">
                            <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
                            <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
                            <option value="12">12</option>
                        </select>

                        <select class="inputs" style="width: 60px; height: 30px;" name="dnbt1">
                            <option value="AM">AM</option> <option value="PM">PM</option>
                        </select>
                                To
                        <select class="inputs" style="width: 50px; height: 30px; " name="timebt2">
                            <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
                            <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
                            <option value="12">12</option>
                        </select>

                        <select class="inputs" style="width: 60px; height: 30px;" name="dnbt2">
                            <option value="AM">AM</option> <option value="PM">PM</option>
                        </select><input style="width: 70px; height: 20px;" type="" class="inputs" name="bf" placeholder="Cost">
                        
                        <select class="inputs" name="payb" style="width: 80px; height: 30px;">
                            <option value="">Select</option><option value="Daily">Daily</option><option value="Monthly">Monthly</option><option value="Yearly">Yearly</option>
                        </select><br>
                    </div>

                    <div id="Lunch"  style="display: none;">
                        Lunch <br><br>
                        <select class="inputs" style="width: 50px; height: 30px; " name="timelt1">
                            <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
                            <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select class="inputs" style="width: 60px; height: 30px;" name="dnlt1">
                            <option value="AM">AM</option> <option value="PM">PM</option>
                        </select>
                        To
                        <select class="inputs" style="width: 50px; height: 30px; " name="timelt2">
                            <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
                            <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option><option value="10">10</option>   <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select class="inputs" style="width: 60px; height: 30px;" name="dnlt2">
                            <option value="AM">AM</option> <option value="PM">PM</option>
                        </select>

                        <input style="width: 70px; height: 20px;" type="" class="inputs" name="lf" placeholder="Cost">
                                <select class="inputs" name="payl" style="width: 80px; height: 30px;">
                                    <option value="">Select</option><option value="Daily">Daily</option><option value="Monthly">Monthly</option><option value="Yearly">Yearly</option>
                                </select><br>
                    </div>

                    <div id="Dinner" style="display: none;">
                    Dinner <br><br>
                        <select class="inputs" style="width: 50px; height: 30px; " name="timedt1">
                            <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
                            <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select class="inputs" style="width: 60px; height: 30px;" name="dndt1">
                            <option value="AM">AM</option> <option value="PM">PM</option>
                        </select>
                        To
                        
                        <select class="inputs" style="width: 50px; height: 30px; " name="timedt2">
                            <option value="01">1 </option>   <option value="02">2</option>   <option value="03">3</option>   <option value="04">4</option>   <option value="05">5</option>
                            <option value="06">6</option>   <option value="07">7</option>   <option value="08">8</option>   <option value="09">9</option>   <option value="10">10</option>   <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select class="inputs" style="width: 60px; height: 30px;" name="dndt2">
                            <option value="AM">AM</option> <option value="PM">PM</option>
                        </select>
                        <input style="width: 70px; height: 20px;" type="" class="inputs" name="df" placeholder="Cost">
                                <select class="inputs" name="payd" style="width: 80px; height: 30px;">
                                    <option value="">Select</option><option value="Daily">Daily</option><option value="Monthly">Monthly</option><option value="Yearly">Yearly</option>
                                </select><br>
                    </div>

                </div>
                    
            <br><br>                
            </div>
            <br><br>

            <div style="height:70px;display: inline-block; margin-bottom: 50px;">
            I accept <a href="" style="text-decoration: underline; color:blue;">Terms & conditions</a>

            <div style="display: inline-block; margin-right: 20px; margin-bottom: 17px;">
                            <label for="tnc" style="position: absolute; margin-top: 2px;" ><div  onclick="check('tnc-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="tnc-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display:none;" type="checkbox" name="tnc" id="tnc" value="tnc">
            </div>
            <br><br>
            <input style="position:inherit;width: 300px;"  type="submit" value="Submit" class="btn" name="submit" onclick="">
            </div>
            

        </form>
            
        
        
        <!--
        <a><button class="btn" type="button" onclick="rqrd(['b-name','h-no','sts','state','Landmark','search_input','pc'],'#form-sec2');">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
       -->
       <div class="overlays side-panel" id="side-panel" style="text-align: center;">
                
        </div>
        <div class="overlays pop-up" id="pop-up" style="text-align:center;">
            
        </div>
    </body>
</html>