document.getElementById("submit").addEventListener("click",function(){
    var aValue=document.getElementById("aNumber").value;
    var bValue=document.getElementById("bNumber").value;
    var result=0;
    parseFloat(aValue);
    parseFloat(bValue);
    if(isNaN(aValue)||isNaN(bValue)){
        alert("value is not number!");
    }
    else{
        document.getElementById("typeOf").innerHTML=aValue+"x"+" "+"+"+" "+bValue;
        if (aValue==0){
            document.getElementById("result").innerHTML="Phương trình có vô số nghiệm!";
        }
        else{
            if(bValue>0){
                result=(-bValue)/aValue;
                document.getElementById("result").innerHTML="Phương trình có nghiệm là :"+result;
            }
            else{
                document.getElementById("result").innerHTML="Phương trình có vô số nghiệm !";
            }
        }
    }
    
});