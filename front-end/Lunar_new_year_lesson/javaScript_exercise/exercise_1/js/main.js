document.getElementById("btnSubmit").addEventListener("click",function(){
    var number=document.getElementById("number");
    if(isNaN(number.value)||number.value.length==0){
        alert("Value is not a number or Don't whitespace in feild");
    }
    else{
        parseFloat(number.value);
        number.value+=3;
       if(number.value>0||number.value<=10){
           document.getElementById("result").innerHTML=number.value+"The number in 0 to 10";
       }
       else if(number.value>=50||number.value<=100){
             document.getElementById("result").innerHTML=number.value+"The number in 50 to 100";
        }
        else{
               document.getElementById("result").innerHTML="The number don't have a position ."
        }
    }
})