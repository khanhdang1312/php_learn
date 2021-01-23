var findNum=/[0-9]/i;
var findSpace=/\s/g;
function VaildateFirstName(){
    var vaildFirstName=document.getElementById("vaildFirstName");
    var checkFirstName=document.getElementById("firstName").value;
    var firstName=document.getElementById("firstName");
    if (checkFirstName.search(findNum)!==-1 || checkFirstName.search(findSpace)!==-1){
        vaildFirstName.className="text-danger";
        vaildFirstName.innerHTML="Tên không được có số hay khoảng trắng";
        firstName.className="border-danger"+" "+"form-control";
    }
    else{
        vaildFirstName.className="text-success";
        vaildFirstName.innerHTML="Tên này đã đúng";
        firstName.className="border-success"+" "+"form-control";
    }
}
function VaildateLastName(){
    var checkLastName=document.getElementById("lastName").value;
    var lastName=document.getElementById("lastName");
    var vaildLastName=document.getElementById("vaildLastName");
    console.log(checkLastName.search(findNum));
    if (checkLastName.search(findNum)!==-1 || checkLastName.search(findSpace)!==-1){
        vaildLastName.className="text-danger";
        vaildLastName.innerHTML="Tên này đã sai không được chứa số hoặc khoảng trắng";
        lastName.className="border-danger"+" "+"form-control";
     }
    else{
        vaildLastName.className="text-success";
        vaildLastName.innerHTML="Tên này đúng";
        lastName.className="border-success"+" "+"form-control";
    }
}
$("#dateInput").validate();

    