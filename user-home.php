<!DOCTYPE html>
    <head>
        <meta http-equiv="Pragma" content="no-cache">
        <title>Foostel</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="actions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
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

            $(function(){
                $('#service-panel').load("services.php");
            });

            $(function(){
                $('#About-us').load("About-us.php");
            });
            $(function(){
                $('#Contact-us').load("Contact-us.php");
            });
            $(function(){
                $('#RYS').load("r-y-s.php");
            });
            
        </script>
        <?php 
        require'user-data.php';
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

        
    </head>

    <body>
        <div class="header" id="header">
        </div>

        <div class="section" id="services-p" onclick="clearPopups();">
            
            <div id="service-panel" onclick="clearPopups();">
            </div>


            <div id="service-map-panel" >
            </div>
        
        </div>
        <div class="section" id="RYS" onclick="clearPopups();">
            
        </div>
        
        <div class="section" id="About-us" onclick="clearPopups();">
            
        </div>

        <div class="section" id="Contact-us" onclick="clearPopups();">
            
        </div>

        
        <div class="section" id="Contact us" onclick="clearPopups();"></div>
        <div class="overlays side-panel" id="side-panel" style="text-align: center;">
                
        </div>
        
    </body>
</html>