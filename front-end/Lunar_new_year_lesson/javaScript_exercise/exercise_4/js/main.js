document.getElementById("submit").addEventListener("click",function(){
    var firstNumber=document.getElementById("firstNumber");
    parseFloat(firstNumber);
    if(firstNumber.value==0){
        alert("factorial don't equal 0");
    }
    var factorial=1;
    i=1;
    while(i<=firstNumber.value){
        factorial*=i;
        // if(i==firstNumber.value){
        //     break;
        // }
        i++;
    }
    document.getElementById("result").innerHTML="Factorial of "+" "+firstNumber.value+" "+"is:"+" "+factorial;
})