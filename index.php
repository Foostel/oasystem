<!DOCTYPE html>
    <head>
        <title>Foostel</title>
        <?php 
        session_start();

        if(isset($_SESSION['id']))
        {
            header("location:user-home.php");
        }
        
         ?>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="actions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
        
        <script type="text/javascript">
            $(function(){
                $('#header').load("header.php");
            });
            $(function(){
                $('#service-panel').load("services.php");
            });
            $(function(){
                $('#RYS').load("r-y-s.php");
            });
            $(function(){
                $('#About-us').load("About-us.php");
            });
            $(function(){
                $('#Contact-us').load("Contact-us.php");
            });
        </script>
        

        
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
        <div class="section" id="RYS" onclick="if(!h){toggle('pop-up');}"></div>
        <div class="section" id="About-us" onclick="if(!h){toggle('pop-up');}"></div>
        <div class="section" id="Contact-us" onclick="if(!h){toggle('pop-up');}"></div>
    </body>
</html>
