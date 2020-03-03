<!DOCTYPE html>
<html>
<head>
        <title>Home-user</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        <script type="text/javascript">
            $(function(){
                $('#header').load("user-header.php");
            });
            $(function(){
                $('#Services').load("user-services.php");
            });
        </script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<script type="text/javascript" src="actions.js"></script>
        <script type="text/javascript">
            
        </script>
</head>

<body style="background-color: #E9E9E9;">
        <div class="header" id="header">
            <!--Load header -->
        </div>
        <div class="section" id="Services" onclick="if(!h){toggle('user-menu');}">
            
        </div>
        <div class="section" id="RYS" onclick="if(!h){toggle('user-menu');}">
            
        </div>
        <div class="section" id="About-us" onclick="if(!h){toggle('user-menu');}">
            
        </div>
        <div class="section" id="Contact-us" onclick="if(!h){toggle('user-menu');}">
            
        </div>

        <div class="section" onclick="if(!h){toggle('user-menu');}">
        	
        </div>

        <div id="user-menu" class="right-side-panel">
            	<div style="margin-top:85px; width: 100%; height: 600px;">
            		<a >Edit profile</a>
            		<a >Preferences</a>
            		<a >Requested services</a>
            		<a >Services in use</a>
                    <button class="btn" style="width: 100px; margin: 100px;">Sign out</button>
            	</div> 
        </div>
</body>
</html>