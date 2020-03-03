h=true;
h2=true;
function blur(){
    console.log("blr");
    var i= document.getElementsByClassName('section');
        console.log(i);
        if(h){
        for(let s=0;s<i.length;s++)
        {
            i[s].style.filter="blur(8px)";
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
