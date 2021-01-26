var findNum=/[0-9]/i;
var checkName=document.getElementById("firstName");
checkName.addEventListener("keyup",CheckFirstName);
function CheckFirstName(e){
    var checkFirstName=document.getElementById("firstName");
    var checkKey=e.which||e.keyCode;
    console.log(checkKey);
    if(checkKey==8||checkKey!==8){
        if(checkFirstName.value.search(findNum)!==-1||checkFirstName.value.length<=0||checkKey==32||checkKey==/[48,57]/i){
            vaildFirstName.className="text-danger";
            vaildFirstName.innerHTML="Tên sai , Tên không được có số hoặc dấu cách";
            vaildFirstName.style.fontSize="14px";
            checkFirstName.className="form-control"+" "+"border-danger";
        }
        else{
            vaildFirstName.className="text-success";
            vaildFirstName.innerHTML="Tên đúng";
            vaildFirstName.style.fontSize="14px";
            checkFirstName.className="form-control"+" "+"border-success";
        }
    }
    
}
document.getElementById("lastName").addEventListener("keyup",CheckLastName);
    function CheckLastName(e){
    var checkLastName=document.getElementById("lastName");
    var vaildLastName=document.getElementById("vaildLastName");
    var checkKey=e.which||e.keyCode;
    if(checkKey==8||checkKey!==8){
        if(checkLastName.value.search(findNum)!==-1||checkLastName.value.length<=0||checkKey==32||checkKey==/[48,57]/i){
            vaildLastName.className="text-danger";
            vaildLastName.innerHTML="Tên sai , Tên không được có số hoặc dấu cách";
            vaildLastName.style.fontSize="14px";
            checkLastName.className="form-control"+" "+"border-danger";
        }
        else{
            vaildLastName.className="text-success";
            vaildLastName.innerHTML="Tên đúng";
            vaildLastName.style.fontSize="14px";
            checkLastName.className="form-control"+" "+"border-success";
        }
    }
}
function CheckGender(e){
    var checkGender=document.getElementsByName("gender");
    if (checkGender[0].checked==true){
        alert("Your gender is male");
        document.getElementById("inputForm").setAttribute("action",".");
    }
    else if(checkGender[1].checked==true){
        alert("Your gender is  female");
        document.getElementById("inputForm").setAttribute("action",".");
    }
    else{
        alert("You must select your gender");
        document.getElementById("inputForm").removeAttribute("action","#");
    }
}