<i class="fa fa-times" aria-hidden="true" style="position:absolute; top:5px;color:gray; font-size: 30px; left:93%; cursor: pointer;" onclick="if(!h){toggle('pop-up');}" ></i>
<div style="position: relative; top: 60px; display: inline-block;">
	<p style="font-size:10px;">*Open <a style="text-decoration: underline; color: blue; " target="_blank" href="https:/google.com/maps">Google Maps</a>, place the marker and share the link here.</p><br>
	<input type="" name="loc-link" class="inputs" style="width: 200px;" placeholder="Paste link here" ><br>
	<input type="button" name="" class="btn" style="height: 30px; width: 50px; font-size: 15px;" value="OK"><br><br>
	<a onclick="console.log('h');getloc('geo-l');toggle('pop-up');" style="font-size: 15px; text-decoration: underline;">Use my current location <i class="fa fa-map-marker" style="color:red;"></i></a><br>
	<a onclick="console.log('h');document.getElementById('geo-l').value=''; document.getElementById('geo-l').innerHTML='Add geo-location';  document.getElementById('geo-l').style.color='black'; document.getElementById('geo-l').style.backgroundColor='white'; toggle('pop-up');" style="font-size: 10px; text-decoration: underline;">Remove location</a>
</div>