h=true;
h2=true;
var res=Array();
function validateF(){
                if(!document.getElementById('tnc').checked){
                    alert('Accept our terms & conditions to proceed registration');
                    return false;
                }
                if(document.getElementById('lnglat').value=='')
                {
                    return confirm("It seems you didn't entered geo-location, this will help customers to easily find your service. Do you want to proceed without it ?");
                }
                return true;
            }

function filter(arr){
    document.getElementById('filter-b').getElementsByTagName('i')[0].className='fa fa-angle-down';
            document.getElementById('filter-d').style.display='none';
            document.getElementById('results').style.display='block';
            document.getElementById('results').style.zIndex='0';
    console.log(res);
    var hit=0;
    for(var i=0;i<res.length;i++)
    {
        for(var j=0;j<arr.length;j++)
        {   let idx = document.getElementById(arr[j]).name;
            var val='';
            if(document.getElementById(arr[j]).checked){val= document.getElementById(arr[j]).value};
            console.log('idx: '+idx+' val:'+val);
            if(res[i][idx] != val && val!='')
            {   console.log('hit');
                hit+=1;
                var el = document.getElementsByName(res[i]['cid']);
                for(var s=0;s<el.length;s++)
                {
                    el[s].style.display='none';    
                }
                
                break;
            }
            else{
                var el = document.getElementsByName(res[i]['cid']);
                for(var s=0;s<el.length;s++)
                {
                    el[s].style.display='block';
                }
            }
        }
    }

}
function mapViewToggle(obj)
{ 
  if(obj.style.backgroundColor=='white')
  { obj.style.backgroundColor='black';
    obj.style.color='white';
    document.getElementsByClassName('MAP-VIEW')[0].style.left='0px';
    document.getElementsByClassName('MAP-VIEW')[0].style.zIndex='0';
    document.getElementById('ifm').style.zIndex='-1';
    document.getElementById('ifm').style.display='none';
  }
  else{
    obj.style.backgroundColor='white';
    obj.style.color='black';
    document.getElementsByClassName('MAP-VIEW')[0].style.left='400px';
    document.getElementsByClassName('MAP-VIEW')[0].style.zIndex='-1';
    document.getElementById('ifm').style.zIndex='0';
    document.getElementById('ifm').style.display='block';

  } 
}

function clearPopups(){
            var x=document.getElementsByClassName('overlays');
            for(var i=0;i<x.length;i++)
            {
                x[i].style.display='';
            }
            var sc= document.getElementsByClassName('section');
            for(var s=0;s<sc.length;s++)
            {
                sc[s].style.filter="none";
            }
        }

function toggle(s){
	var k = document.getElementById(s).style.display;
    console.log(k);
    if(k==''){
	console.log("Block");
	document.getElementById(s).style.display="block";
	h=false;
    blur();
	}
	else{
		
		document.getElementById(s).style.display="";
        console.log("None");
        h=true;
		blur();
	}

}
function select(item,name)
{
    var els = document.getElementsByName(name);
    console.log(els[0].value);
    for(var i=0;i<els.length;i++)
    {   console.log('yeah');
        els[i].style.backgroundColor='white';
    }

    item.style.backgroundColor='black';
}
function invoke(s){
    if(h2){
        console.log("SHOW");
    document.getElementById(s).style.display="block";
    let myElement = document.querySelector(".section");
    h2=false;
    }
    /*else{
        console.log("HIDE");
        document.getElementById(s).style.display="none";
        h=true;
    }*/
    
}
function revoke(s){
    if(h2==false){
        console.log("HIDE");
        document.getElementById(s).style.display="none";
        h2=true;
    }
}
function passC(){
    var p = document.getElementById('pass1').value;
    var regex = new Array();
    regex.push(/[A-Z]/); //Uppercase Alphabet.
    regex.push(/[a-z]/); //Lowercase Alphabet.
    regex.push(/[0-9]/); //Digit.
    regex.push(/[@$!%*#?&]/); //Special Character.
    let count=0;
    for(let i=0;i<4;i++)
    {
        if(regex[i].test(p)){
            count++;
        }
    }
    if(p=""){
        count=0;
    }
    switch(count){
        case 0:
        console.log("case0");
        document.getElementById('pass1').style.color="black";
        break;
        case 1:
        console.log("case1");
        document.getElementById('pass1').style.color="red";
        break;
        case 2:
        console.log("case2");
        document.getElementById('pass1').style.color="orange";
        break;
        case 3:
        console.log("case3");
        document.getElementById('pass1').style.color="green";
        break;
        case 4:
        console.log("case4");
        document.getElementById('pass1').style.color="green";
        break;       
    }

    pst=count;
    console.log(pst);
    return pst;
}
function validate(){
    let pst=0;
    let f=true;
    console.log("call");
    alert("validate?");
    let x = document.getElementById("phoneno").value;
    let p1 = document.getElementById("pass1").value;
    let p2 = document.getElementById("pass2").value;
    var rx = /^[0-9]{10}$/;
    if(!rx.test(x)){
        f=false;
        alert("Please enter valid contact number");
    }
    pst= passC();
    console.log(pst);
    if(!(pst>2) && !(p1.length>7))
    {
        alert("Created password is too weak");
        f=false;
    }
    else{
        if(p1!=p2){
        alert("passwords doesn't match");
        f=false;
    }
    }
    
    if(f && confirm("Confirm submission ?")){
        return true;
    }
    else{
        return false;
    }

}

function showp(){
    console.log(100);
    let x= document.getElementById('pass1');
    if(x.type=='password'){
    console.log(111);
    x.type='text'; 
    document.getElementById('eye').className='fa fa-eye';    
    }
    else{
    x.type='password'; 
    document.getElementById('eye').className='fa fa-eye-slash';   

    }
}

function check(id)
{   var obj = document.getElementById(id);    
    if(obj.style.display=='none')
        {   
            obj.style.display='inline-block';
        }
        else{
            obj.style.display='none';
        }          
}
function getloc(x)
{
    console.log("geolocation");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  
  document.getElementById(x).style.backgroundColor='black';
  document.getElementById(x).style.color='white';
  document.getElementById(x).value=position.coords.latitude +","
  + position.coords.longitude;
  document.getElementById(x).innerHTML='Location added';
}
getLocation();
}
function disp(id)
{
    var e = document.getElementById(id);
    if(e.style.display=='none')
    {
        e.style.display='block';
    }
    else{
        e.style.display='none';
    }
}

function rqrd(v,nextloc){
    console.log('rqrd');
    for(var i=0; i<v.length;i++)
    {
        if(document.getElementById(v[i]).value=='')
        {
         document.getElementById(v[i]).focus();
         alert('please fill all the required fields');
         return 0;   
        }

    }
    
        window.location=nextloc;
    
}