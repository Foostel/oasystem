h=true;
h2=true;
function blur(){
    console.log("blr");
    var i= document.getElementsByClassName('section');
        console.log(i);
        if(h){
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
            console.log(s);
        }

        }

}
function toggle(s){
	if(h){
		console.log("TOggle h11111");
	document.getElementById(s).style.display="block";
    blur();
	h=false;
	}
	else{
		console.log("TOggle else");
		document.getElementById(s).style.display="none";
		blur();
        h=true;
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