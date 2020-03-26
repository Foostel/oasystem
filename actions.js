h=true;
h2=true;
function blur(){
    console.log("blr");
    var i= document.getElementsByClassName('section');
        console.log(i);
        if(!h){
        for(let s=0;s<i.length;s++)
        {
            i[s].style.filter="blur(12px)";

            console.log(s);
        }
        }
        else{
            for(let s=0;s<i.length;s++)
        {
            i[s].style.filter="none";
        }

        }

}
function clearPopups(){
            let x=document.getElementsByClassName('overlays');
            for(i=0;i<x.length;i++)
            {
                x[i].style.display='';
                h=true;
            }
            blur();
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

function check(obj)
{       if(obj.value=='')
        {
            obj.style.backgroundColor='black';
            obj.style.color='white';
            obj.value=obj.innerHTML;
        }
        else{
            obj.style.backgroundColor='white';
            obj.style.color='black';
            obj.value='';
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
