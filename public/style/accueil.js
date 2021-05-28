window.onscroll = function(){
    if (document.documentElement.scrollTop > 80) {
        document.getElementById("nav").style.position = "fixed";
        document.getElementById("nav").style.backgroundColor = "#6393FF";
    }
    else{
        document.getElementById("nav").style.position = "initial";
    }
}