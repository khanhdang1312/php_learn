document.getElementById("changeImg").addEventListener("click",function(){
    var imglist=document.getElementById("imgList");
    var backgroundImg=document.getElementById("main-content");
    if(imglist.value=="img1"){
        backgroundImg.style.backgroundImage="url('img/img-1.jpg')";
    }
    if(imglist.value=="img2"){
        backgroundImg.style.backgroundImage="url('img/img-2.jpg')";
    }
    if(imglist.value=="img3"){
        backgroundImg.style.backgroundImage="url('img/img-3.jpg')";
    }
    if(imglist.value=="img4"){
        backgroundImg.style.backgroundImage="url('img/img-4.jpg')";
    }
})