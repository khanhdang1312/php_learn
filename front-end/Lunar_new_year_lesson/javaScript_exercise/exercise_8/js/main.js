var firstNum=document.getElementById("firstNumber");
var secondNum=document.getElementById("secondNumber");
var result=document.getElementById("result");
if(isNaN(firstNum)||isNaN(secondNum)){
    alert("value is not a number");
}
else{
    document.getElementById("sum").addEventListener("click",function(){
        result.value=parseFloat(firstNum.value)+parseFloat(secondNum.value);
    })
    document.getElementById("minus").addEventListener("click",function(){
        result.value=firstNumber.value-secondNumber.value;
    })
    document.getElementById("multiply").addEventListener("click",function(){
        result.value=firstNumber.value*secondNumber.value;
    })
    document.getElementById("divide").addEventListener("click",function(){
        result.value=firstNumber.value/secondNumber.value;
    })
    document.getElementById("clean").addEventListener("click",function(){
        firstNumber.value="";
        secondNumber.value="";
        result.value="";
    })
}