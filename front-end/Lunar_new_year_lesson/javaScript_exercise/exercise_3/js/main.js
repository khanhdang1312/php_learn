document.getElementById("submit").addEventListener("click",function(){
    var firstNum=document.getElementById("firstNumber").value;
    var secondNum=document.getElementById("secondNumber").value;
    var thirdNum=document.getElementById("thirdNumber").value;
    parseFloat(firstNum,secondNum,thirdNum);
    var arr=[firstNum,secondNum,thirdNum];   
    var max=0;
    var min=0;
    if(isNaN(firstNum)||isNaN(secondNum)||isNaN(thirdNum)){
        alert("Value is not a number");
    }
    else if(firstNum==secondNum==thirdNum){
        alert("3 number is equal");
    }
    else{
        for(var i=0;i<arr.length-1;i++){
            if(arr[i]<arr[i+1]){
                max=arr[i+1];
           }
            for(var j=0;j<arr.length-1;j++){
               if(arr[j]>arr[j+1]){
                    min=arr[j+1];
               }
            }
            
        }
    document.getElementById("resultMax").innerHTML="Max value is:"+" "+max;
    document.getElementById("resultMin").innerHTML="Min value is:"+" "+min;
    }
})