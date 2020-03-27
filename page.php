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
            $(function(){
                $('#About-us').load("About-us.php");
            });
            $(function(){
                $('#Contact-us').load("Contact-us.php");
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
            
        	<div class="search" style="">
        		<form>
        		LOOKING FOR ROOMS/HOSTELS/FOOD ?<br><br>
        		<input type="text" name="" class="search-box" style="padding-right: 40px;">
                <button class="btn loc"><i style="font-size: 20px;" class="fa fa-map-marker" aria-hidden="true"></i></button>
        		<button type="submit" class="btn searchbtn"><span>Search &nbsp</span><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
        	</form>
        	</div>
        </div>
        <div class="section" id="RYS" onclick="if(!h){toggle('pop-up');}"></div>
        <div class="section" id="About-us" onclick="if(!h){toggle('pop-up');}"></div>
        <div class="section" id="Contact-us" onclick="if(!h){toggle('pop-up');}"></div>
    </body>
</html>