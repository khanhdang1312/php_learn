var findSpace=/\s/g;
var vaildateName=document.getElementById("checkName");
var vaildateEmail=document.getElementById("checkEmail");
document.getElementById("name").addEventListener("change",function(){
    var checkName=document.getElementById("name").value;
    var checkSubmit=document.getElementById("submit");
    var name=document.getElementById("name");
    console.log(checkName.search(findSpace));
    if(checkName.search(findSpace)!==-1||checkName.length>25||checkName.length<=0){
        vaildateName.innerHTML="Tên không được có dấu cách hoặc để trống.";
        vaildateName.className="text-danger";
        name.focus();
        name.className="border-danger"+" "+"form-control";
    }
    else{
        vaildateName.innerHTML=" ";
        name.className="border-light"+" "+"form-control";
    }
});

document.getElementById("email").addEventListener("change",checkEmail);
    function checkEmail()
    {
        var checkEmail=document.getElementById("email").value;
        var email=document.getElementById("email");
        var checkSubmit=document.getElementById("submit");
        console.log(checkEmail.search(findSpace));
        if(checkEmail.search(findSpace)!==-1||checkEmail.length<=0||checkEmail.search("@")==-1||checkEmail.search(".com")==-1){
            vaildateEmail.innerHTML="Email không được có dấu cách , để trống hoặc thiếu @ và .com";
            vaildateEmail.className="text-danger";
            email.focus();
            email.className="border-danger"+" "+"form-control";
        }
        else{
            vaildateEmail.innerHTML=" ";
            email.className="border-light"+" "+"form-control";
        }
    }