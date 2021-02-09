document.getElementById("submit").addEventListener("click",function(){
    var money=document.getElementById("money").nodeValue;
    parseFloat(money);
    if(money>500){
        var tax=money*10/100;
        money+=tax;
        alert("Lương của bạn là:"+money);
    }
    else{
        alert("Bạn không phải nộp thuế");
    }
})