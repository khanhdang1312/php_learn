document.getElementById("submit").addEventListener("click",function(){
    checkEmail();
    checkName();
    checkCountry();
})
function checkName(){
    var userName=document.getElementById("name");
    if(userName.value==""){
        alert("Name is not empty");
        userName.focus();
    }
}
function checkEmail(){
    var email=document.getElementById("email");
    if(email.value==""){
        alert("email don't empty");
        email.focus();
    }
   else{
       if(email.value==/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/){
        document.getElementById("vaildEmail").className="text-light";
       }
       else{
           document.getElementById("vaildEmail").innerHTML="Email Sai";
           document.getElementById("vaildEmail").className="text-danger";
           email.focus();
       }
   }
}
function checkCountry(){
    var selectCountry=document.getElementById("country");
    if(selectCountry.value==0){
        alert("you must select yout country .");
        selectCountry.focus();
    }
}
