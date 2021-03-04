document.getElementById("submit").addEventListener("click",function(){
    var firstNum=document.getElementById("firstNumber").value;
    var secondNum=document.getElementById("secondNumber").value;
    var thirdNum=document.getElementById("thirdNumber").value;
    parseFloat(firstNum,secondNum,thirdNum);
    var arr=[firstNum,secondNum,thirdNum];   
    if(isNaN(firstNum)||isNaN(secondNum)||isNaN(thirdNum)){
        alert("Value is not a number");
    }
    else if(firstNum==secondNum==thirdNum){
        alert("3 number is equal");
    }
    else{
       arr.sort(function(a,b){
           return a-b;
       })
    }
    document.getElementById("resultMax").innerHTML="Max value is:"+" "+arr[arr.length-1];
    document.getElementById("resultMin").innerHTML="Min value is:"+" "+arr[0];
})