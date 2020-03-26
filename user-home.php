<!DOCTYPE html>
    <head>
        <meta http-equiv="Pragma" content="no-cache">
        <title>Foostel</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="actions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        
        <script type="text/javascript">
            $(function(){
                $('#side-panel').load("side-panel.php");
            });
            $(function(){
                $('#header').load("user-header.php");
            });

            $(function(){
                $('#service-map-panel').load("services-map.php");
            });

            $(function(){
                $('#service-panel').load("services.php");
            });

            $(function(){
                $('#About-us-panel').load("About-us.php");
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

         ?>
         <?php
        
        if(!isset($_SESSION['id']))
        {
            header("location:page.php");
        }
        //code to retrive user profile using session veriable index 'userID'
         
        $user_name=$fname.' '.$lname;
        echo "
        <script>
        document.getElementsByClassName('user-pic')[0].src='$pp';
        document.getElementsByClassName('user-pic')[1].src='$pp';
        </script>
        ";
        echo "
        <script>
        let x = document.getElementsByClassName('user-pic').innerHTML='$user_name';
        </script>
        "; 

    ?>
        
    </head>

    <body>
        <div class="header" id="header">
        </div>

        <div class="section" id="services-p" onclick="clearPopups();">
        <div id="service-map-panel" >
        </div>
        <div id="service-panel" onclick="clearPopups();">
        </div>
        </div>
        
        <div class="section" id="About-us-panel" onclick="clearPopups();">
            
        </div>

        
        <div class="section" id="Contact us" onclick="clearPopups();"></div>
        <div class="overlays side-panel" id="side-panel" style="text-align: center;">
                
        </div>
        
    </body>
</html>