<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<?php 
require'user-data.php';
echo "
        <script>
        document.getElementsByClassName('user-pic')[0].src='$pp';
        </script>
        ";
 ?>
 <script type="text/javascript">
    
     function show(obj)
     {         
        if(document.getElementById('menu-slide').style.display=='none')
        {
        document.getElementById('menu-slide').style.display='block';
        obj.style.color='white';
        obj.style.backgroundColor='rgba(1,1,1,0.2);';
        obj.getElementsByTagName('i')[0].className='fa fa-angle-left';
        obj.getElementsByTagName('i')[0].style.marginLeft="40px";
        document.getElementById('mn').style.display='none';
        }
        else{
            document.getElementById('menu-slide').style.display='none';
            obj.style.color='black';
            obj.style.backgroundColor='rgba(1,1,1,0.2);';
            obj.getElementsByTagName('i')[0].className='fa fa-bars';
            obj.getElementsByTagName('i')[0].style.marginLeft="20px";
            document.getElementById('mn').style.display='inline-block';
        }

    }
 </script>
<div id="menu-btn" style="height: 110px; width: 110px; background:transparent; position: absolute; z-index: 2; cursor: pointer;color:black;" onclick="show(this);">
    <i style="font-size: 40px;margin-left: 20px; margin-top: 30px;" class="fa fa-bars"></i><span id="mn" style='font-size:12px;position:absolute;top:80px; left: 20px; font-weight: 300;'>MENU</span>
</div>
<div id="menu-slide" style="height: 100vh; width: 110px; position: absolute; z-index: 0; cursor: pointer; color:white; background-color:#393939; display:none;">
        <div style="margin-top: 110px;color:white; z-index: 1; text-align: center; "><br><br>
                <a style="color:white;" href="user-home.php#services-p">Services</a><br><br><br>
                                    
                <a style="color:white;" class="" href="user-home.php#RYS">Register your services</a><br><br><br>

                <a style="color:white;" class="" href="user-home.php#About-us">About us</a><br><br><br>

                <a style="color:white;" class="" href="user-home.php#Contact-us">Contact us</a>

        </div>  
</div>
<div class="header-logo">
                <img class="logo-img" src="oas-logo.png" style="">
                <span style="color:red; font-size: 50px; font-weight: 400;">F</span><span style="color: black; font-size: 30px; font-weight: 300;">OOSTEL</span>
            </div>
            <div class="menus" id="menu-s">
                <a class="menu-opt" href="user-home.php#services-p">Services</a>
                <a class="menu-opt" href="user-home.php#RYS">Register your services</a>
                <a class="menu-opt" href="user-home.php#About-us">About us</a>
                <a class="menu-opt" href="user-home.php#Contact-us">Contact us</a>
                
                <span style="position:absolute;right: 30px; top:30px; font-size: 40px;" id="signin" ><img class="user-pic" onclick="toggle('side-panel');" id="sp" style='cursor:pointer;height:60px; width:60px; border-radius:50%;'></span>
            </div>