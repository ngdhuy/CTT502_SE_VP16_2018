
var i = 0;

window. onload = PlayGameBackground;

function PlayGameBackground(){
    setInterval(runImage, 20);
}

function runImage(){
    img_1.style.marginLeft = (i - 1280) + "px";
    img_2.style.marginLeft = i + "px";
    i += 10;
    if(i === 1280){
        i = 0; 
    }
}