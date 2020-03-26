<?php 
require'user-data.php';
echo "
        <script>
        document.getElementsByClassName('user-pic')[0].src='$pp';
        document.getElementsByClassName('user-pic')[1].src='$pp';
        </script>
        ";
 ?>
<div class="header-logo">
                <img src="oas-logo.svg" style=" display:inline-block;height: 80px; margin-top: 10px;">
                <span style="color:red; font-size: 50px; font-weight: 600;">F</span><span style="color: black; font-size: 30px; font-weight: 400;">OOSTEL</span>
            </div>
            <div class="menus" >
                <a href="user-home.php#services-p">Services</a>
                <a href="user-home.php#About-us">About us</a>
                <a href="user-home.php#Contact-us">Contact us</a>
                <a><form>
                <input type="text" name="" class="search-box" style="height: 25px; width: 200px; padding-right: 30px;">
                <button class="btn" style="height: 25px; width: 30px; display: inline-block; background:transparent; color:black;position:fixed;left:820px;"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                <button type="submit" class="btn" style="height: 25px; width: 30px; display: inline-block;"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form></a>
                <span style="position:fixed;right: 30px; top:30px; font-size: 40px;" id="signin" ><img class="user-pic" onclick="h=true;toggle('side-panel');" id="sp" style='cursor:pointer;height:60px; width:60px; border-radius:50%;'></span>
            </div>