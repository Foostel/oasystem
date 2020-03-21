
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
             if(bno=="")
               {
                    document.getElementById("add1").innerHTML="**Please Enter house or building Number";
                    return false;
               }
               if(area=="")
               {
                    document.getElementById("add2").innerHTML="**Please Enter Property Area";
                    return false;
               }
               // if(hname=="")
               // {
               //   document.getElementById("hostelname").innerHTML="**Enter hostel name";
               //   return false;
               // }
               if(state=="")
               {
                    document.getElementById("add3").innerHTML="**Please Select Your State";
                    return false;
               }
               if(city=="")
               {
                    document.getElementById("add4").innerHTML="**Please Select your City";
                    return false;
               }
               if(pincode=="")
               {
                    document.getElementById("add5").innerHTML="**Please Enter pincode";
                    return false;
               }
               if(pincode.length!=6)
               {
                document.getElementById("add6").innerHTML="**Please Enter Valid 6-digit pincode";
                    return false;    
               } 
               if(landmark=="")
               {
                    document.getElementById("add7").innerHTML="**Please Enter nearby landmark";
                    return false;
               }              
}