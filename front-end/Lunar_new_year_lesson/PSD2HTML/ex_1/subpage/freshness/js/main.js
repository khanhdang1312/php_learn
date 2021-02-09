window.onscroll=function(){
    var mainNav=document.getElementById("mainNav");
    var navLink=document.getElementsByName("nav-links");
    if(document.documentElement.scrollTop>80||document.body.scrollTop>80){
        console.log(document.documentElement.scrollTop);
        mainNav.style.position="sticky";
        mainNav.style.top="0";
        mainNav.style.backgroundColor="rgba(0,0,0,0.4)";
        mainNav.style.color="white";
        mainNav.style.zIndex="10";
        for(var i=0;i<navLink.length;i++){
            navLink[i].style.color="white";
        }
    }
    else{
        mainNav.style.position="relative";
        mainNav.style.backgroundColor="white";
        mainNav.style.color="black";
        for(var i=0;i<navLink.length;i++){
            navLink[i].style.color="black";
        }
    }
}