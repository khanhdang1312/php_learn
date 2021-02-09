document.getElementById("submit").addEventListener("click",tellFortune);
function tellFortune(getChildren,getjobs,getLocal,getName){
     getName=document.getElementById("name").value;
     getChildren=document.getElementById("children").value;
     getLocal=document.getElementById("location").value;
     getjobs=document.getElementById("jobs").value;
    parseFloat(getChildren);
    if(getChildren>1){
        document.getElementById("result").innerHTML="You will be a"+" "+getjobs+" "+"in"+" "+getLocal+" and married to"+" "+getName+
        " "+" with"+" "+getChildren+" "+"kids";
    }
    else{
        document.getElementById("result").innerHTML="You will be a"+" "+getjobs+" "+"in"+" "+getLocal+" and married to"+" "+getName+
        " "+" with"+" "+getChildren+" "+"Kid";
    }
}