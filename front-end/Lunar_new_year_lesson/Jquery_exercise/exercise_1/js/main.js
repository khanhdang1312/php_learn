var calculator=document.getElementById("calculator")
calculator.addEventListener("click",function()
    { 
        var MaxNum=document.getElementById("number").value;
        if (isNaN(MaxNum)){
            aler("Giá trị không phải là số!")
        }
        else if(MaxNum==0){
            alert("Value can not equal 0");
        }
        else{
            for(var i=0;i<MaxNum;i++){
                if(i%2==0){
                    document.getElementById("evenNumber").innerHTML+=i+" ";
                }
                else{
                    document.getElementById("oddNumber").innerHTML+=i+" ";
                }
            }
        }
    }
);
