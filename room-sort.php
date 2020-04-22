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
<span style="font-weight: 500;">Sort by:</span><br><br>
    <div style="display: inline-block; margin-right: 40px; position: relative;">
                                Cheapest first &nbsp<label for="cf" style="position: absolute; margin-top: 7px; margin-left: 1px;" ><div  onclick="select(this,'s-label');" style="width:10px; height: 10px; border-radius: 50%; border:solid 1px black; background-color: white;" name="s-label"></div></label>
                                <input required="" type="radio" name="st" id="cf" value="avgcost ASC" style="display: none; ">
                                 &nbsp&nbsp&nbsp
                                Expensive first &nbsp<label for="ef" style="position: absolute; margin-top: 7px; margin-left: 1px;" ><div  onclick="select(this, 's-label');" style="width:10px; height: 10px; border-radius: 50%; border:solid 1px black; background-color: white;" name="s-label"></div></label>
                                <input required="" type="radio" name="st" id ="ef" value="avgcost DESC" style="display: none;" >
                </div>                

<br>
<br>
<button style="position: relative;" class="btn" onclick="sort_fn('st');">Apply</button><br><br>
</div>
</body>
</html>