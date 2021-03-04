function vaildForm(){
    var checkEmail=document.getElementById("email");
    var checkCountry=document.getElementById("selectCountries");
    var forms=document.getElementById("formGroup");
    var emailPattern=/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/;
    if(checkEmail.value.match(emailPattern)&&checkCountry.value!==1){
        return true;
    }
    else{
        alert("Please enter correct email or select your country");
        return false;
    }
}