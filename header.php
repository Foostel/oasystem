 <script type="text/javascript">
     function show(obj)
     { if(document.getElementById('menu-slide').style.display=='none')
        {
        document.getElementById('menu-slide').style.display='block';
        obj.style.color='white';
        obj.style.backgroundColor='rgba(1,1,1,0.2);';
        obj.getElementsByTagName('i')[0].className='fa fa-angle-left';
        }
        else{
            document.getElementById('menu-slide').style.display='none';
            obj.style.color='black';
            obj.style.backgroundColor='rgba(1,1,1,0.2);';
            obj.getElementsByTagName('i')[0].className='fa fa-angle-right';
        }
    }
 </script>
<div id="menu-btn" style="height: 110px; width: 110px; background-color:rgba(1,1,1,0.2); position: absolute; z-index: 2; cursor: pointer;color:black;" onclick="show(this);">
    <i style="font-size: 80px;margin-left: 30px;" class="fa fa-angle-right"></i><span style='font-size:12px;position:absolute;top:80px; left: 30px; font-weight: 500;'>MENU</span>
</div>
<div id="menu-slide" style="height: 100vh; width: 110px; position: absolute; z-index: 0; cursor: pointer; color:white; background-color:gray; display: none;">
        <div style="margin-top: 110px;color:white; z-index: 1; text-align: center; "><br><br>
                <a style="color:white;" href="page.php#services-p">Services</a><br><br><br>
                                    
                <a style="color:white;" class="" href="page.php#RYS">Register your services</a><br><br><br>

                <a style="color:white;" class="" href="page.php#About-us">About us</a><br><br><br>

                <a style="color:white;" class="" href="page.php#Contact-us">Contact us</a>

        </div>  
</div>
<div class="header-logo">
                <img class="logo-img" src="oas-logo.png" style="">
                <span style="color:red; font-size: 50px; font-weight: 400;">F</span><span style="color: black; font-size: 30px; font-weight: 300;">OOSTEL</span>
                <a href="sign-in.php" style="position: absolute; right: 50px; font-weight: 300; font-size: 20px; top:48%;" >Sign in</a>
            </div>
            <div class="menus" >
                <a  class="menu-opt" onclick="if(!h){toggle('pop-up');}" href="page.php#services-p" >Search services</a>
                <a  class="menu-opt" onclick="if(!h){toggle('pop-up');}" href="page.php#RYS">Register your services</a>
                <a  class="menu-opt" onclick="if(!h){toggle('pop-up');}" href="page.php#About-us">About us</a>
                <a  class="menu-opt" onclick="if(!h){toggle('pop-up');}" href="page.php#Contact-us">Contact us</a>
                
            </div>