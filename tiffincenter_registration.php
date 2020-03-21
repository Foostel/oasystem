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
<input type="text" name="b" id="b" required=""><br>
<span id="add1" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>Area</lable>
<input type="text" name="a" id="a" required=""><br>
<span id="add2" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>State</lable>
<input type="text" name="s" id="s" required=""><br>
<span id="add3" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>City</lable>
<input type="text" name="c" id="c" required=""><br>
<span id="add4" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>Landmark</lable>
<input type="text" name="l" id="l" required=""><br>
<span id="add5" class="text-danger font-weidth-bold" style="color:red"></span>
<br>
<lable>Pincode</lable>
<input type="number" name="p" id="p" required=""><br>
<span id="add6" class="text-danger font-weidth-bold" style="color:red"></span><br>

<label>Meals Provided</label><br>
<input type="checkbox" name="f1" id="f1" value="f1">Lunch<br>
<input type="checkbox" name="f2" id="f2" value="f2">Dinner<br>
<input type="checkbox" name="f3" id="f3" value="f3">Breakfast<br>
<hr>
<br>
<label>Facilities Provided</label><br>
<input type="checkbox" name="f1" id="f1" value="f1">Home Delivery<br>
<input type="checkbox" name="f2" id="f2" value="f2">Come And Eat<br>
<input type="checkbox" name="f3" id="f3" value="f3">Customization<br>
<hr>
<br>
<table>
<tr>
	<th>Days</th>
	<th>Menu</th>
</tr>
<tr>
	<td>Week Days</td>
	<td><textarea row="50" column="100" name="WeekDaysMenu" id="WeekDaysMenu"></textarea></td>
</tr>
<tr>
	<td>WeekEnd Menu</td>
	<td><textarea row="50" column="100" name="WeekDaysMenu" id="WeekDaysMenu"></textarea>  </td>
</tr>
</table>
<hr>
<table>
<tr>
	<th>Meal</th>
	<th>Time</th>
	<th>Price</th>
	<th>
</tr>
<tr>
	<td>Breakfast</td>
	<td><input type="text" name="breakfastTime" id="breakfastTime">
	<td><input type="text" name="breakfastFee" id="breakfastFee"><br>
</td>
</tr>
<tr>
	<td>Lunch</td>
	<td><input type="text" name="lunchTime" id="lunchTime">
	<td><input type="text" name="lunchFee" id="lunchFee"><br>
</td>
<tr>
	<td>Dinner</td>
	<td><input type="text" name="dinnerTime" id="dinnerTime">
	<td><input type="text" name="dinnerFee" id="dinnerFee">
	<br>
</td>
</table>
<hr>
Discount or Concession<br>
<textarea row="50" column="100" name="Discount" id="Discount"></textarea>
<hr>
<br><input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>
