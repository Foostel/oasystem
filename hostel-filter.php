<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			font-family: segoe UI;
			
		}
	</style>
	<script type="text/javascript" src='actions.js'></script>
</head>
<body style="z-index: 0; font-size: 14px; position: relative;" class="filter-b">
<div style="margin-left: 20px;"><br>
<span style="font-weight: 500;">Hostel for:</span><br><br>
<div style="display: inline-block; margin-right: 40px;">
                                Boys &nbsp<label for="b" style="position: absolute; margin-top: 3px; margin-left: 3px;" ><div  onclick="select(this,'hostel-type-label');" style="width:10px; height: 10px; border-style: none; border-radius: 50%; border:solid 5px gray; background-color: white;" name="hostel-type-label"></div></label>
                                <input type="radio" name="ht" id="b" value="Boys">

                                Girls &nbsp<label for="g" style="position: absolute; margin-top: 3px; margin-left: 3px;" ><div  onclick="select(this,'hostel-type-label');" style="width:10px; height: 10px; border-style: none; border-radius: 50%; border:solid 5px gray; background-color: white;" name="hostel-type-label"></div></label>
                                <input type="radio" name="ht" id ="g" value="Girls">
                                
                </div>
<br><br>
<span style="font-weight: 500;">Facilities:</span><br><br>
<div style="display: inline-block; margin-right: 20px;position:relative; margin-bottom: 10px;">
                            GYM &nbsp<label for="tc" style="position: absolute; margin-top: 2px;" ><div  onclick="check('tc-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="tc-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="gym" id="gym" value="1">
</div>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            Parking &nbsp<label for="p" style="position: absolute; margin-top: 2px;" ><div  onclick="check('p-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="p-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="p" id="p" value="1">
</div>

<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            Mess &nbsp<label for="ms" style="position: absolute; margin-top: 2px;" ><div  onclick="check('ms-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="ms-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="m" id="ms" value="1">
</div>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            Room Service &nbsp<label for="rs" style="position: absolute; margin-top: 2px;" ><div  onclick="check('rs-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="rs-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="rs" id="rs" value="1">
</div>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            Attached Bath &nbsp<label for="ab" style="position: absolute; margin-top: 2px;" ><div  onclick="check('ab-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="ab-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="ab" id="ab" value="1">
</div>
<div style="display: inline-block; margin-right: 20px;position:relative; margin-bottom: 10px;">
                            Geaser &nbsp<label for="tc" style="position: absolute; margin-top: 2px;" ><div  onclick="check('gs-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="gs-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="g" id="gs" value="1">
</div>

<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            WiFi &nbsp<label for="w" style="position: absolute; margin-top: 2px;" ><div  onclick="check('w-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="w-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="w" id="w" value="1">
</div>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            AC &nbsp<label for="b" style="position: absolute; margin-top: 2px;" ><div  onclick="check('b-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="b-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="ac" id="b" value="1">
</div>

<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            Cloth Washing &nbsp<label for="cw" style="position: absolute; margin-top: 2px;" ><div  onclick="check('cw-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="cw-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="cw" id="cw" value="1">
</div>
<br><br>
<span style="font-weight: 500;">Room type:</span><br><br>
<div style="display: inline-block; margin-right: 20px;position:relative;">
                            1-Bed &nbsp<label for="1r" style="position: absolute; margin-top: 2px;"><div  onclick="check('1r-check');" style="width:20px; height: 20px; border-style: none; border:solid 1px; background-color: white;"><i id="1r-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="b1" id="1r" value="1" >
                </div>

                <div style="display: inline-block; margin-right: 20px;position:relative;">
                            2-Bed &nbsp<label for="2r" style="position: absolute; margin-top: 2px;" ><div  onclick="check('2r-check');" style="width:20px; height: 20px; border-style: none; border:solid 1px; background-color: white;"><i id="2r-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="b2" id="2r" value="1" >
                </div>
                <br><br>
                <div style="display: inline-block; margin-right: 20px;position:relative;">
                            3-Bed &nbsp<label for="rk" style="position: absolute; margin-top: 2px;" ><div  onclick="check('rk-check');" style="width:20px; height: 20px; border-style: none; border:solid 1px; background-color: white;"><i id="rk-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="b3" id="rk" value="1" >
                </div>
<br>
<br>
<button class="btn" onclick="filter(['b','g','gym','p','ms','rs','ab','gs','w','b','cw','1r','2r','rk']);">Apply</button>
</div>
</body>
</html>