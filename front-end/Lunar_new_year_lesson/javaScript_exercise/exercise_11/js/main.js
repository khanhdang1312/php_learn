var totalprices=document.getElementsByName("totalPrices");
var quantity=document.getElementsByName("quantity");
var products=document.getElementsByClassName("products-desc");
var prices=[];
var deletedProducts=document.querySelectorAll("input.select-products");
//Đây là nút tăng sản phẩm
function AddProducts(e){
    for(var i=0;i<products.length;i++){ //chạy 1 vòng for để duyệt xem nó là sản phảm nào (ý là click vào nút trong sản phảm nào)
        if (products[i].id==e.dataset.productsname||quantity[i].dataset.productsname==e.dataset.productsname){//bằng cách so sánh tên của sản phẩm đó .
            quantity[i].value=parseInt(quantity[i].value)+parseInt(1);//nếu đúng thì sẽ cộng thêm  giá trị 
            prices[i]=products[i].dataset.baseprices;//  tạo 1 mảng giá tiền để lưu trữ tiền (vì đã duyệt đến sản phẩm ở trên lên mỗi sản phẩm sẽ lưu giá tiền riêng)
            prices[i]*=quantity[i].value;// lấy giá góc nhân với số lượng.
            console.log(prices)
            totalprices[i].innerHTML="$"+prices[i];//in ra giá tiền sau hki thay đổi 
            break;
        }
    }
}
function ReduceProducts(e){
    for(var i=0;i<products.length;i++){// phần này cũng như trên chỉ là trừ giá đi thôi
        if (products[i].id==e.dataset.productsname||quantity[i].dataset.productsname==e.dataset.productsname){
            quantity[i].value=quantity[i].value-1;
            prices[i]=quantity[i].value*products[i].dataset.baseprices;
            totalprices[i].innerHTML="$"+prices[i];
            if(quantity[i].value==0){
                quantity[i].value=1;
                prices=products[i].dataset.baseprices;
                totalprices[i].innerHTML="$"+prices;
                alert("Quantity can not equal to 0");
            }
            break;
        }
    }
}
function deleted(e){
    var deletedBtn=document.getElementById("deleteBtn");
    var checkedLength=0;// tạo biến check đọ dài của checked==true
    var checkBoxArr=Array.from(deletedProducts);//chuyển nodelist lấy được thành mảng 
    var i=0;
    for(var i=0;i<checkBoxArr.length;i++){// duyệt mảng 
        if(checkBoxArr[i].checked===true){
           ++checkedLength;//nếu biến trả về giá trị lớn hơn 1 thì sẽ hiển thik nút xóa  
        } 
    }
    console.log(checkedLength);
    if(checkedLength>1){
        deletedBtn.innerHTML="<button class=\'btn btn-danger mt-3 mb-3\' onclick=\'deleteAll(this)\'>Empty My Cart</button>";//đây là nút xóa
        deletedBtn.style.transition="1s";
    }
    else{
        deletedBtn.innerHTML='';//nếu nhỏ hơn 1 thhif nút xóa sẽ biến mất 
    }
}
function deleteAll(e){
    document.getElementById("tableBody").innerHTML="";// khi ấn vào nút xóa sẽ xóa tất cả 
}