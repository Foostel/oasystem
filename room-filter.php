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
<span style="font-weight: 500;">Room for:</span><br><br>
                <div style="display: inline-block; margin-right: 40px; position: relative;">
                                Male &nbsp<label for="m" style="position: absolute; margin-top: 7px; margin-left: 1px;" ><div  onclick="select(this,'room-type-label');" style="width:10px; height: 10px; border-radius: 50%; border:solid 1px black; background-color: white;" name="room-type-label"></div></label>
                                <input required="" type="radio" name="ge" id="m" value="Male" style="display: none; ">
                                 &nbsp&nbsp&nbsp
                                Female &nbsp<label for="f" style="position: absolute; margin-top: 7px; margin-left: 1px;" ><div  onclick="select(this, 'room-type-label');" style="width:10px; height: 10px; border-radius: 50%; border:solid 1px black; background-color: white;" name="room-type-label"></div></label>
                                <input required="" type="radio" name="ge" id ="f" value="Female" style="display: none;" >
                                 &nbsp&nbsp&nbsp
                                Anyone &nbsp<label for="ao" style="position: absolute; margin-top: 7px; margin-left: 1px;" ><div  onclick="select(this,'room-type-label');" style="width:10px; height: 10px; border-radius: 50%; border:solid 1px black; background-color: white;" name="room-type-label"></div></label>
                                <input required="" type="radio" name="ge" id ="ao" value="Anyone" style="display: none;">
                                 &nbsp&nbsp&nbsp
                                <hr style="border: solid .5px gray;">

                                Student &nbsp<label for="s" style="position: absolute; margin-top: 7px; margin-left: 1px;" ><div  onclick="select(this,'room-for-label');" style="width:10px; height: 10px; border-radius: 50%; border:solid 1px black; background-color: white;" name="room-for-label"></div></label>
                                <input required="" type="radio" name="wk" id="s" value="Student" style="display: none;">
                                &nbsp&nbsp&nbsp
                                Employee &nbsp<label for="e" style="position: absolute; margin-top: 7px; margin-left: 1px;" ><div  onclick="select(this,'room-for-label');" style="width:10px; height: 10px; border-radius: 50%; border:solid 1px black; background-color: white;" name="room-for-label"></div></label>
                                <input required="" type="radio" name="wk" id ="e" value="Employee" style="display: none;">
                                 &nbsp&nbsp&nbsp
                                Anyone &nbsp<label for="aon" style="position: absolute; margin-top: 7px; margin-left: 1px;" ><div  onclick="select(this,'room-for-label');" style="width:10px; height: 10px; border-radius: 50%; border:solid 1px black; background-color: white;" name="room-for-label"></div></label> &nbsp&nbsp&nbsp&nbsp&nbsp
                                <input required="" type="radio" name="wk" id ="aon" value="Anyone" style="display: none;">
                                
                </div>

<br><br>
<span style="font-weight: 500;">Facilities:</span><br><br>
<div style="display: inline-block; margin-right: 20px;position:relative; margin-bottom: 10px;">
                            Table & Chair &nbsp<label for="tc" style="position: absolute; margin-top: 2px;" ><div  onclick="check('tc-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="tc-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="tc" id="tc" value="1">
</div>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            Parking &nbsp<label for="p" style="position: absolute; margin-top: 2px;" ><div  onclick="check('p-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="p-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="p" id="p" value="1">
</div>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            Room Service &nbsp<label for="rs" style="position: absolute; margin-top: 2px;" ><div  onclick="check('rs-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="rs-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="rs" id="rs" value="1">
</div>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            Attached Bath &nbsp<label for="ab" style="position: absolute; margin-top: 2px;" ><div  onclick="check('ab-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="ab-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="ab" id="ab" value="1">
</div>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            WiFi &nbsp<label for="w" style="position: absolute; margin-top: 2px;" ><div  onclick="check('w-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="w-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="w" id="w" value="1">
</div>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;position:relative;">
                            Bed &nbsp<label for="b" style="position: absolute; margin-top: 2px;" ><div  onclick="check('b-check');" style="border:solid 1px;width:15px; height: 15px; background-color: white;"><i id="b-check" style="display:none; font-size: 15px; position: absolute;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display: none;" type="checkbox" name="b" id="b" value="1">
</div>
<br><br>
<span style="font-weight: 500;">Room type:</span><br><br>
<div style="display: inline-block; margin-right: 20px;position:relative;">
                            1-Room &nbsp<label for="1r" style="position: absolute; margin-top: 2px;"><div  onclick="check('1r-check');" style="width:20px; height: 20px; border-style: none; border:solid 1px; background-color: white;"><i id="1r-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="b1" id="1r" value="1" >
                </div>

                <div style="display: inline-block; margin-right: 20px;position:relative;">
                            2-Room &nbsp<label for="2r" style="position: absolute; margin-top: 2px;" ><div  onclick="check('2r-check');" style="width:20px; height: 20px; border-style: none; border:solid 1px; background-color: white;"><i id="2r-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="b2" id="2r" value="1" >
                </div>
                <br><br>
                <div style="display: inline-block; margin-right: 20px;position:relative;">
                            Room & Kitchen &nbsp<label for="rk" style="position: absolute; margin-top: 2px;" ><div  onclick="check('rk-check');" style="width:20px; height: 20px; border-style: none; border:solid 1px; background-color: white;"><i id="rk-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input type="checkbox" name="b3" id="rk" value="1" >
                </div>
<br>
<br>
<button style="position: relative;" class="btn" onclick="filter(['m','f','ao','s','e','aon','tc','p','rs','ab','w','b','1r','2r','rk']);">Apply</button><br><br>
</div>
</body>
</html>