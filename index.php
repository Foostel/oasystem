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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="actions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>

        <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
        <?php echo"<script>getCurLoc();</script>"; ?>
        <script type="text/javascript">
            $(function(){
                $('#header').load("header.php");
            });
            $(function(){
                $('#services-p').load("services.php");
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
        <div class="section" id="services-p" onclick="clearPopups();" style="text-align:left;">
            
        </div>
        <div class="section" id="RYS" onclick="if(!h){toggle('pop-up');}"></div>
        <div class="section" id="About-us" onclick="if(!h){toggle('pop-up');}"></div>
        <div class="section" id="Contact-us" onclick="if(!h){toggle('pop-up');}"></div>
    </body>
</html>
