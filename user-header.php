<?php 
require'user-data.php';
echo "
        <script>
        document.getElementsByClassName('user-pic')[0].src='$pp';
        </script>
        ";
 ?>
<div class="header-logo">
                <img src="oas-logo.svg" style=" display:inline-block;height: 80px; margin-top: 10px;">
                <span style="color:red; font-size: 50px; font-weight: 400;">F</span><span style="color: black; font-size: 30px; font-weight: 300;">OOSTEL</span>
            </div>
            <div class="menus" >
                <a class="menu-opt" href="user-home.php#services-p">Services</a>
                <a class="menu-opt" href="user-home.php#RYS">Register your services</a>
                <a class="menu-opt" href="user-home.php#About-us">About us</a>
                <a class="menu-opt" href="user-home.php#Contact-us">Contact us</a>
                
                <span style="position:absolute;right: 30px; top:30px; font-size: 40px;" id="signin" ><img class="user-pic" onclick="h=true;toggle('side-panel');" id="sp" style='cursor:pointer;height:60px; width:60px; border-radius:50%;'></span>
            </div>