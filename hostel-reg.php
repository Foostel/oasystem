<!DOCTYPE html>
    <head>
        <title>Foostel</title>

    <meta charset="utf-8" />
    <title>Get coordinates of the mouse pointer</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
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
            <p style="display:inline-block;font-size: 25px;color:black;">Register Hostel</p>
        </div>
        
        <form onsubmit="return validateF();" class="form" style="position: relative; text-align:left;margin-left:20px;display: inline-block;" method="post" action="submit-hostel.php" enctype="multipart/form-data">
            
            <div class="form-container" style="width: 330px;">
                <input style="text-align: center; width: 300px;" id="b-name" type="" class="inputs" name="bn" placeholder="Hostel name" > 
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

            <div class="form-container" style="width: 330px;">
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
                <input type="" id="lnglat" class="inputs" name="lnglat" style="display: none;">
                <div style="display: inline-block; text-align: center;">
                    <label class="inputs" for="photos" style="position:absolute;cursor:pointer;width:310px;height:25px;display:block; font-size: 14px; padding: 10px 0px 10px 0px;">Upload photos</label>
                    <input id="photos" class="inputs" style="opacity:0; z-index:-1;text-align: center;" type="file" name="uploadfile[]"  multiple>
                </div>
                <br>


                <span style="font-weight: 600;">Hostel type</span> <br><hr style="border: solid .5px; margin-right: 100px; ">
                <div style="display: inline-block; margin-right: 40px;">
                                Boys &nbsp<label for="b" style="position: absolute; margin-top: 3px; margin-left: 3px;" ><div  onclick="select(this,'hostel-type-label');" style="width:10px; height: 10px; border-style: none; border-radius: 50%; border:solid 5px white; background-color: white;" name="hostel-type-label"></div></label>
                                <input type="radio" name="hostel-type" id="b" value="Boys">

                                Girls &nbsp<label for="g" style="position: absolute; margin-top: 3px; margin-left: 3px;" ><div  onclick="select(this,'hostel-type-label');" style="width:10px; height: 10px; border-style: none; border-radius: 50%; border:solid 5px white; background-color: white;" name="hostel-type-label"></div></label>
                                <input type="radio" name="hostel-type" id ="g" value="Girls">
                                
                </div>
                <br><br>
                <span style="font-weight: 600;">Caution Money</span><br><hr style="border: solid .5px; margin-right: 100px; ">
                <input style="width: 100px; height: 20px;" class="inputs" type="" name="caution-m" placeholder="Rs.">
                <br><br>
                
            </div>  
            <div class="form-container" style="" >
                <span style="font-weight: 600;">Facilities provided</span> <br><hr style="border: solid .5px; margin-right: 100px; ">        
                            
                <div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;">
                            GYM &nbsp<label for="gym" style="position: absolute; margin-top: 2px;" ><div  onclick="check('gym-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="gym-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="facilites[]" id="gym" value="Gym">
                </div>
    
                <div style="display: inline-block; margin-right: 20px;">
                            Parking Area &nbsp<label for="pa" style="position: absolute; margin-top: 2px;" ><div  onclick="check('pa-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="pa-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                             <input type="checkbox" name="facilites[]" id="pa" value="Parking Area">
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            Mess &nbsp<label for="mess" style="position: absolute; margin-top: 2px;" ><div  onclick="check('mess-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="mess-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="facilites[]" id="mess" value="Mess">
                </div>
                <br><br>
                <div style="display: inline-block; margin-right: 20px;">
                            WiFi &nbsp<label for="wifi" style="position: absolute; margin-top: 2px;" ><div  onclick="check('wifi-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="wifi-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="facilites[]" id="wifi" value="Wifi">
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            Geaser &nbsp<label for="geaser" style="position: absolute; margin-top: 2px;" ><div  onclick="check('gsr-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="gsr-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="facilites[]" id="geaser" value="Geaser">
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            Room service &nbsp<label for="rs" style="position: absolute; margin-top: 2px;" ><div  onclick="check('rs-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="rs-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="facilites[]" id="rs" value="Room Service">
                </div>
                <br><br>
                <div style="display: inline-block; margin-right: 20px;">
                            Attached Bathrooms &nbsp<label for="ab" style="position: absolute; margin-top: 2px;" ><div  onclick="check('ab-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="ab-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="facilites[]" id="ab" value="Attach Bathrooms">
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            AC &nbsp<label for="ac" style="position: absolute; margin-top: 2px;" ><div  onclick="check('ac-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="ac-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="facilites[]" id="ac" value="AC">
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            Cloth Washing &nbsp<label for="cw" style="position: absolute; margin-top: 2px;" ><div  onclick="check('cl-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="cl-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="facilites[]" id="cw" value="Cloth Washing">
                </div>
                <br><br>
                <span style="font-weight: 600;">Room type</span> <br><hr style="border: solid .5px; margin-right: 100px; ">
                <div style="display: inline-block; margin-right: 20px;">
                            1-Bed &nbsp<label for="1b" style="position: absolute; margin-top: 2px;" onclick="disp('b-1');"><div  onclick="check('1b-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="1b-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="room[]" id="1b" value="r1" >
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            2-Bed &nbsp<label for="2b" style="position: absolute; margin-top: 2px;" onclick="disp('b-2');"><div  onclick="check('2b-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="2b-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="room[]" id="2b" value="r2" >
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            3-Bed &nbsp<label for="3b" style="position: absolute; margin-top: 2px;" onclick="disp('b-3');"><div  onclick="check('3b-check');" style="width:20px; height: 20px; border-style: none; background-color: white;"><i id="3b-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="room[]" id="3b" value="r3" >
                </div>
                <br><br><br>
                <div id="b-1" style="display: none;">
                    1-Bed &nbsp<input style="width: 70px; height: 20px;" placeholder="Available" class="inputs" type="" name="ab1">&nbsp<input style="width: 70px; height: 20px;" placeholder="Rent/Month" class="inputs" type="" name="rb1">

                </div>
                <div id="b-2" style="display: none;">
                    2-Bed &nbsp<input style="width: 70px; height: 20px;" placeholder="Available" class="inputs" type="" name="ab2">&nbsp<input style="width: 70px; height: 20px;" placeholder="Rent/Month" class="inputs" type="" name="rb2">
                                <br>
                </div>
                <div id="b-3" style="display: none;">
                    3-Bed &nbsp<input style="width: 70px; height: 20px;" placeholder="Available" class="inputs" type="" name="ab3">&nbsp<input style="width: 70px; height: 20px;" placeholder="Rent/Month" class="inputs" type="" name="rb3">
                                <br>
                </div>

            
        </div>
        <div class="form-container" style="width: 250px;">
                Rules <hr style="border:solid .5px;"><textarea style="width: 200px; border: none; height: 100px; font-family: segoe UI; font-size: 13px;" placeholder="Write here"></textarea>               
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