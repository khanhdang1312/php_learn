var calculator=document.getElementById("calculator")
calculator.addEventListener("click",function()
    {
        var MaxNum=document.getElementById("number").value;
        for(var i=0;i<MaxNum;i++){
            if(i%2==0){
                document.getElementById("evenNumber").innerHTML+=i+" ";
            }
            else{
                document.getElementById("oddNumber").innerHTML+=i+" ";
            }
        }
    }
);
console.log(calculator);
