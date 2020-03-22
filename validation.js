
function validate1()
{
          //var uid=document.getElementById("uid").value.trim();
          //var hid=document.getElementById("hid").value.trim();
          //var hname=document.getElementById("hname").value;
          var bno=document.getElementById("b").value.trim();
          var area=document.getElementById("a").value.trim();
          var state=document.getElementById("s").value.trim();
          var city=document.getElementById("c").value.trim();
          var pincode=document.getElementById("p").value.trim();
          var landmark=document.getElementById("l").value.trim();              
               if(pincode.length!=6)
               {
                document.getElementById("add6").innerHTML="**Please Enter Valid 6-digit pincode";
                    return false;    
               }               
}