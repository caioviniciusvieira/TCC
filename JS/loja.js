let slideIndex = 1;

Mostrarslide(slideIndex)

function Slideplus(n){
    Mostrarslide(slideIndex += n) 

resetarTimer();
}
function Slideatual(n){
    Mostrarslide(slideIndex = n)
}

function Mostrarslide(n){

let i;
let slides = document.querySelectorAll('.slide');
let dots = document.querySelectorAll('.dot');

if (n > slides.length){
    slideIndex = 1;
}

if (n < 1){
    slideIndex = slides.length;
}

for(i = 0; i < slides.length; i++){
    slides[i].style.display = 'none';
}

for(i = 0; i < dots.length; i++){
    dots[i].className = dots[i].className.replace("active", "dot");
}

Iniciartimer();


slides[slideIndex-1].style.animation = 'deslizar 0.5s';
slides[slideIndex-1].style.display = 'block';
dots[slideIndex-1].className = 'active';
}

function Iniciartimer(){
 const tempo = setTimeout(() => {
        Slideatual(slideIndex+1)
        clearTimeout(tempo)
    }, 5000);
}

function resetarTimer(){
    window.clearTimeout(tempo)
    tempo = window.setTimeout(tempo)
}


function teste(){
    var teste = document.querySelector(".teste");
    var conta = document.querySelector(".header-conta");
    setTimeout(() => {
        conta.style.display = 'none';
    }, 490);
    teste.style.display = 'flex';
    teste.style.animation = '0.5s deslizar';

}

function fechar(){
    var conta = document.querySelector(".header-conta");
    var teste = document.querySelector(".teste")
    teste.style.animation = '1s deslizarBack';
    conta.style.display = 'flex';
    setTimeout(() => {
        teste.style.display = 'none';
    }, 490);

}
