<!DOCTYPE html>
    <head>
        <title>Foostel</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="actions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        
        <script type="text/javascript">
            $(function(){
                $('#header').load("header.php");
            });
            $(function(){
                $('#RYS').load("r-y-s.php");
            });
        </script>
        <?php 
        session_start();
        if(isset($_SESSION['id']))
        {
            header("location:user-home.php");
        }
         ?>
        
    </head>

    <body>
        <div class="header" id="header">
            
        </div>
        <div class="section" id="Home" onclick="if(!h){toggle('pop-up');}">
            <img src="oas-logo.svg" style="height: 400px; position: absolute; top:200px; left: 900px;">
        	<div class="search" style="">
        		<form>
        		<h2>LOOKING FOR ROOMS/HOSTELS/FOOD ?</h2>
        		<input type="text" name="" class="search-box">
        		<a href=""><img src="search-box.svg" style="height: 52px; position: absolute; top:72px; left:316px;   "></a>
                </form>
        	</form>
        	<a href="">FIND NEAR ME <i class="fa fa-map-marker" style="color:red;"></i></a>
        	</div>
        </div>
        <div class="section"  onclick="if(!h){toggle('pop-up');}">
        </div>
        <div style="text-align: center;" class="section" id="RYS" onclick="if(!h){toggle('pop-up');}"></div>
        <div class="section" id="About-us" onclick="if(!h){toggle('pop-up');}"></div>
        <div class="section" id="Contact us" onclick="if(!h){toggle('pop-up');}"></div>
        
    </body>
</html>