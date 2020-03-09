 function register()
{
	window.location.href = "personal_details.html";
}
function valid()
{
		var name=document.getElementById("name").value.trim();
		var email=document.getElementById("email").value.trim();
		var contact=document.getElementById("contact").value.trim();
		if((name.length<=2)||(name.length>=20))
     		{
     			document.getElementById("uname").innerHTML="**Length Of name should be between 2 to 20";
     			return false;
     		}
     	if(!isNaN(name))
     		{
     	       document.getElementById('uname').innerHTML="** Only Characters are allowed";
     			return false;
     		}
     	if(email=="")
     		{
     			document.getElementById("email").innerHTML="**Please Enter Email";
     			return false;
     		}
     	if(email.indexOf('@',0)==0)
     		{
     			document.getElementById('email').innerHTML="**Invalid Email";
     			return false;
     		}
     	if((email.charAt(email.length-4)!='.')&&(emails.charAt(email.length-3)!='.'))
     		{
     			document.getElementById('email').innerHTML="**Invalid Email";
     			return false;
     		}
     	if(contact=="")
     		{
     			document.getElementById("phone").innerHTML="**Please Enter Contact Number";
     			return false;
     		}
     	if(isNaN(contact))
     		{
     			document.getElementById('phone').innerHTML="**Characters are Not Allowed";
     			return false;
     		}
     	if(contact.length!=10)
     		{
     		 document.getElementById('phone').innerHTML="**Please Enter  10 digit Mobile Number";
     			return false;
     		}
}
function validate()
{
	 	var uid=document.getElementById("uid").value.trim();
		var hid=document.getElementById("hid").value.trim();
		//var hname=document.getElementById("hname").value;
		var address=document.getElementById("address").value.trim();
		var area=document.getElementById("area").value.trim();
		var pincode=document.getElementById("pincode").value.trim();
		var landmark=document.getElementById("landmark").value.trim();	     	 
	 	   if(uid=="")
     		{
     			document.getElementById("userid").innerHTML="**Please Register First";
     			return false;
     		}
     		if(hid=="")
     		{
     			document.getElementById("hostelid").innerHTML="**Please Register First";
     			return false;
     		}
     		// if(hname=="")
     		// {
     		// 	document.getElementById("hostelname").innerHTML="**Enter hostel name";
     		// 	return false;
     		// }
     		if(address=="")
     		{
     			document.getElementById("add").innerHTML="**Please Enter Hostel Name";
     			return false;
     		}
     		if(area=="")
     		{
     			document.getElementById("area1").innerHTML="**Please Enter Area";
     			return false;
     		}
     		if(pincode=="")
     		{
     			document.getElementById("pin").innerHTML="**Please pincode";
     			return false;
     		}
     		if(landmark=="")
     		{
     			document.getElementById("lm").innerHTML="**Please landmark";
     			return false;
     		}     		
}