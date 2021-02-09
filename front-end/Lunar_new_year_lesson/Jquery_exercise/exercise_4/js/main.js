var count=0;
var listItems=document.getElementsByClassName("list-group-item");
var inputWork=document.getElementById("inputWorks");
inputWork.addEventListener("keyup",addList);
function addList(e){
    var task=document.getElementById("tasks");
    var checkKey=e.which||e.codeKey;
    if(checkKey==13){
        var list=document.getElementById("toDoList");
        var works=document.getElementById("inputWorks");
        if(works.value.length==0||works.value==/[0-9]+/i){
            alert("Công việc không được để trống hoặc chỉ có số");
            works.className="border-danger form-control";
            works.focus();
        }
        else{
            works.className="border-light form-control";
            list.innerHTML+="<li class=\'list-group-item d-flex justify-content-between align-item-center\'"+"id=\'listItems"+count+"\'>"+works.value+
            "<i class=\'far fa-trash-alt trash\' style=\'cursor=:pointer\'" + "id=\'listItems"+count+"\' onclick=\'deleted(this)\'></i>"+"</li>";
            works.value="";
            ++count;
            console.log();
            if(count>1){
                task.innerHTML="<b>"+count+" "+"tasks"+"</b>";
            }
            else{
                task.innerHTML=count+" "+"task";
            }
        }
    }
}
function deleted(e){
    for(var i=0;i<listItems.length;i++){
        console.log(e.id);
        if(listItems[i].id==e.id){
            listItems[i].remove();
            count--;
        }
       
    }
    if(count<0){
        count=0;
    }
    var task=document.getElementById("tasks");
    task.innerHTML=count+" "+"task";
}
document.getElementById("btnClear").addEventListener("click",function(){
    var list=document.getElementById("toDoList");
    list.innerHTML="";
    count=0;
    var task=document.getElementById("tasks");
    task.innerHTML=count+" "+"task";
})