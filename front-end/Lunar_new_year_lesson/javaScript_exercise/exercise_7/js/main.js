document.getElementById("submit").addEventListener("click",function(){
    let money=document.getElementById("money").value;
    console.log(typeof(money));
    if(parseFloat(money)>500){
        let tax=money*10/100;
        let sum=0;
        sum=parseFloat(money)+parseFloat(tax);
        console.log(typeof(sum));
        alert("Lương của bạn là:"+sum);
    }
    else{
        alert("Bạn không phải nộp thuế");
    }
})