let 
image = document.getElementById('image-container'),
images = ["/img/tv1.png","/img/tv2.jpg","/img/h1.png"],
i = 0

function changeimg() {
    image.style.backgroundImage = `url(${images[i]})`
    if(i < images.length - 1)
        i++;
    else
        i = 0;
    setTimeout("changeimg()" , 3000)
}
window.onload = changeimg();