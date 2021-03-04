function vaildForms(){
    var checkGender=document.getElementsByName("gender");
    var count=0;
    for(value of checkGender){
        if(value.checked){
            count++;
        };
    }
    if(count==1){
        return true;
    }else{
        alert("Select yout gender")
        return false;
    }
}