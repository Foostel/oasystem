<!DOCTYPE html>

<html>
<head>
<script src="validation.js"></script>
</head>
<body>
<hr>
<br>
<form action="tiffen.php" method="post" onsubmit="return validate1()">
<lable>Building/House Number</lable>
<input type="text" name="b" id="b"><br>
<span id="add1" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>Area</lable>
<input type="text" name="a" id="a"><br>
<span id="add2" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>State</lable>
<input type="text" name="s" id="s"><br>
<span id="add3" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>City</lable>
<input type="text" name="c" id="c"><br>
<span id="add4" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>Landmark</lable>
<input type="text" name="l" id="l"><br>
<span id="add5" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>Pincode</lable>
<input type="number" name="p" id="p"><br>
<span id="add6" class="text-danger font-weidth-bold" style="color:red"></span><br>

<label>Meals Provided</label><br>
<input type="checkbox" name="meal[]" id="f1" value="Lunch" onclick="check(this);disp('Lunch');">Lunch &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="meal[]" id="f1" value="Dinner"  onclick="check(this);disp('Dinner');">Dinner  &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="meal[]" id="f1" value="Breakfirst" onclick="check(this); disp('Breakfast');">Breakfast<br>
<hr>
<br>
<label>Facilities Provided</label><br>
<input type="checkbox" name="facilities[]" id="f2" value="hd" onclick="check(this);">Home Delivery  &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="facilities[]" id="f2" value="cae" name="Come_and_eat" onclick="check(this);">Come And Eat  &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="facilities[]" id="f2" value="c" onclick="check(this);">Customization<br>
<hr>
<br>
<table>
<tr>
	<th>Meal</th>
	<th>Time</th>
	<th>Price</th>
	<th>
</tr>
<tr>
	<td>Breakfast</td>
	<td><input type="text" name="bt" id="breakfastTime">
	<td><input type="text" name="bf" id="breakfastFee"><br>
</td>
</tr>
<tr>
	<td>Lunch</td>
	<td><input type="text" name="lt" id="lunchTime">
	<td><input type="text" name="lf" id="lunchFee"><br>
</td>
<tr>
	<td>Dinner</td>
	<td><input type="text" name="dt" id="dinnerTime">
	<td><input type="text" name="df" id="dinnerFee">
	<br>
</td>
</table>
<hr>
<br><input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>
