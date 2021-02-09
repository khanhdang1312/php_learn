var checkedAll=document.getElementById("checkedAll");
var listItem=document.getElementsByClassName("group-item");
checkedAll.addEventListener("click",function(){
    for(var i=0;i<listItem.length;i++){
        if(checkedAll.checked){
        listItem[i].checked=true;
        }
        else{
            listItem[i].checked=false;
        }
    }
})
