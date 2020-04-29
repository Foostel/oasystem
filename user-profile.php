<?php require'user-data.php'; ?>
        <title>Footel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="actions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet'>
        <script type="text/javascript">
            $(function(){
                $('#side-panel').load("side-panel.php");
            });
            $(function(){
                $('#header').load("user-header.php");
            });

            //$(function(){
            //    $('#service-map-panel').load("services-map.php");
            //});

        </script>
        <?php 
        
        if(!isset($_SESSION['id']))
        {   echo"Access denied";
            header("location:page.php");
        }
        else{
        }

        if(!isset($_SESSION['id']))
        {
            header("location:page.php");
        }
        //code to retrive user profile using session veriable index 'userID'
         
        $user_name=$fname.' '.$lname; 

    ?>
    <style type="text/css">
        .section{
            text-align: center;
        }
    </style>

    <body>
        <div class="header" id="header" >
        </div>
        <div id="subsection" class="" style="z-index:2;width: 250px; height: 100vh; background-color: #CFCFCF; position: fixed;top:113px;">
            <div id="pd-b" class="sub-section-menu" onclick="window.location='user-profile.php#personal-details';">
                <span style="color:black;position:relative;top: 10px; font-weight: 300;">Personal Details <i style="" class="fa fa-angle-right"></i></span>
            </div>
            <div id="sc-b" class="sub-section-menu" onclick="window.location='user-profile.php#security-tab';">
                <span style="color:black;position:relative;top: 10px; font-weight: 300;">Security <i style="" class="fa fa-angle-right"></i></span>
            </div>
        
        </div>
        <div class="section" id="personal-details">
            <div class="" style="z-index: 1; height:50px;width: 100%; background-color: rgba(0,0,0,0.6); color:white; position: sticky; top:110px; text-align: center;">
                <span style="position:relative;top: 10px; font-weight: 300;">Personal Details</span>
            </div>
            <script type="text/javascript">
                $(function(){
                $('#u-pp2').load('update-pp-2.php');
            });
            </script>
            <div class="subsec" style="top:150px;">
                <form action="update-user.php" method="post">
                <div style="position: relative; top:10px; left:10px; display: inline-block;">
                    <div id="u-pp2" style="display:inline-block;position:relative;"></div><br><br>
                        <input class="inputs" style="height: 30px; width: 300px; text-align: center;" type="" name="username" placeholder="Name: <?php echo $user_name; ?>"><br>
                        <input class="inputs" style="height: 30px; width: 300px; text-align: center;" type="" name="phoneno" placeholder="Phone: <?php echo $phone; ?>" disabled><br>
                        <input class="inputs" style="height: 30px; width: 300px; text-align: center;" type="" name="email" placeholder="Email: <?php echo $email; ?>" disabled>
                        <input class="btn" style="height: 30px; width: 300px; text-align: center;" type="submit" value = 'Update' name="" >
                </div>
                </form>
            </div>
        </div>
        <div id="security-tab" class="section">
            <div class="" style="z-index: 1; height:50px;width: 100%; background-color: rgba(0,0,0,0.6); color:white; position: sticky; top:110px; text-align: center;">
                <span style="position:relative;top: 10px; font-weight: 300;">Security</span>
            </div>
            <div style="margin-top: 200px; display: inline-block; font-size: 20px;">
                <div class="sub-section-menu" onclick="window.location='reset-password.php';">
                <span style="color:black;position:relative;top: 10px; font-weight: 300;">Change password <i style="" class="fa fa-angle-right"></i></span>
                </div>
            </div>

        </div>
        
        <div class="overlays side-panel" id="side-panel" style="text-align: center; display: none;">
                
        </div>
        
    <script type="text/javascript">
        if(window.pageYOffset<600)
            {  
                subSectionSelector(document.getElementById('pd-b'));
            }
        window.onscroll = function(){
            if(window.pageYOffset<600)
            {  
                subSectionSelector(document.getElementById('pd-b'));
            }
            else if(window.pageYOffset>600)
            {  
                subSectionSelector(document.getElementById('sc-b')); 
            }
        };
    </script>
    </body>