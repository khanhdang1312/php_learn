var todolist=[];
var count=0;
document.getElementById("inputWorks").addEventListener("keydown",addListItem);
function addListItem(e){
    var works=document.getElementById("inputWorks").value;
    resetWorks=document.getElementById("inputWorks");
    var listWorks=document.getElementById("toDoList");
    var checkKey=e.keyCode||e.which;
    if (checkKey==13){
        if(works.length<=0||works==""){
            alert("Works don't empty");
        }
        else{
                // listWorks.innerHTML="<li class=\'list-group-item d-flex justify-content-between align-item-center\'>"+
                // todolist[i]+"<i class=\'far fa-trash-alt\' onclick="+"\'deleted("+todolist[i]+")\'"+"></i></li><br>";
                // todolist.push(works.value);
                resetWorks.value=0;
                count++;
        }
    }
}
// function
//listWorks = ul#toDoList.list-group.list-group-flush {compact: false, type: "", title: "", lang: "", translate: true, …}