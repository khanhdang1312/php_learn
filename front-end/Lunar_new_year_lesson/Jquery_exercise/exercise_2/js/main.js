var calculator=document.getElementById("calculator");
calculator.addEventListener("click",myfunction);
function myfunction()
    {
        var length=document.getElementById("length").value;
        var width=document.getElementById("width").value;
        if(isNaN(length)||isNaN(width)){
            window.alert("GIÁ TRỊ NHẬP VÀO KHÔNG PHẢI LÀ SỐ");
        }
        else if(length==0||width==0){
            alert("Please enter correct length and width");
        }
        else{
            var perimeter=(parseFloat(length)+parseFloat(width))*2;
            document.getElementById("perimeter").innerHTML=perimeter;
            document.getElementById("area").innerHTML=length*width;
        }
    }