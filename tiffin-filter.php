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
<span style="font-weight: 500;">Meals Provided:</span><br><br>
<div style="display: inline-block; margin-right: 40px;">
                                Breakfast &nbsp<label for="f1" style="position: absolute; margin-top: 2px;" ><div  onclick="check('f1-check');" style="width:20px; height: 20px; border:solid 1px; background-color: white;"><i id="f1-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                                <input type="checkbox" style="display: none;" name="b" id="f1" value="1">
                </div>
                <div style="display: inline-block; margin-right: 40px;">
                                Lunch &nbsp<label for="f2" style="position: absolute; margin-top: 2px;" ><div  onclick="check('f2-check');" style="width:20px; height: 20px; border:solid 1px; background-color: white;"><i id="f2-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                                <input style="display: none;" type="checkbox" name="l" id="f2" value="1"   >
                </div>             
<br><br>                            
                <div style="display: inline-block; margin-right: 40px;">
                            Dinner &nbsp<label for="f3" style="position: absolute; margin-top: 2px;" ><div  onclick="check('f3-check');" style="width:20px; height: 20px; border:solid 1px; background-color: white;"><i id="f3-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display:none;" type="checkbox" name="d" id="f3" value="1">
                </div>
<br><br>
<span style="font-weight: 500;">Facility Provided:</span><br><br>
<div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;">
                            Home Delivery &nbsp<label for="hd" style="position: absolute; margin-top: 2px;" ><div  onclick="check('hd-check');" style="width:20px; height: 20px; border:solid 1px; background-color: white;"><i id="hd-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display:none;" type="checkbox" name="hd" id="hd" value="1">
                </div>

                <div style="display: inline-block; margin-right: 20px;">
                            Come & eat &nbsp<label for="cae" style="position: absolute; margin-top: 2px;" ><div  onclick="check('cae-check');" style="width:20px; height: 20px; border:solid 1px; background-color: white;"><i id="cae-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display:none;" type="checkbox" name="cae" id="cae" name="Come_and_eat" value="1">
                </div>
                <br><br>
                <div style="display: inline-block; margin-right: 20px;">
                            Customization &nbsp<label for="c" style="position: absolute; margin-top: 2px;" ><div  onclick="check('c-check');" style="width:20px; height: 20px; border:solid 1px; background-color: white;"><i id="c-check" style="display:none; font-size: 20px;" class="fa fa-check" aria-hidden="true"></i></div></label>
                            <input style="display:none;" type="checkbox" name="c" id="c" value="1">
                </div>
<br>
<br>
<button class="btn" onclick="filter(['f1','f2','f3','hd','cae','c']);">Apply</button>
</div>
</body>
</html>