document.getElementById("btnSubmit").addEventListener("click",function(){
    var number=document.getElementById("number");
    if(isNaN(number.value)||number.value.length==0){
        alert("Value is not a number");
    }
    else{
       if(parseFloat(number.value)>0||parseFloat(number.value)<=10){
           document.getElementById("result").innerHTML=number.value+"The number in 0 to 10";
           console.log(typeof(number.value));
       }
       else if(parseFloat(number.value)>=50||parseFloat(number.value)<=100){
             document.getElementById("result").innerHTML=number.value+"The number in 50 to 100";
        }
        else{
               document.getElementById("result").innerHTML="The number don't have a position ."
        }
    }
})