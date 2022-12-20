/* let indice = 1;

muestraSlides(indice);

function avanzaSlide(n){
    muestraSlides(indice+=n);
}

function posicionSlide(n) {
    muestraSlides(indice=n);
}

function muestraSlides(n) {
    let i;
    let slides = document.getElementsByClassName('miSlider');
    let barras = document.getElementsByClassName('barra');

    if (n > slides.length) {
        indice = 1;
    }

    if (n < 1) {
        indice =  slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    for (i = 0; i < barras.length; i++) {
        barras[i].className = barras[i].className.replace(" active", "");
    }
    
    slides[indice-1].style.display = 'block';
    barras[indice-1].className += ' active';

} */

const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length-1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin' , sliderSectionLast);

function Next(){
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s easy-in-out";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend' , sliderSectionFirst);
        slider.style.marginLeft = "-100%";
    }, 500);
}

function Preview(){
    let sliderSection = document.querySelectorAll(".slider__section");
    let sliderSectionLast = sliderSection[sliderSection.length-1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 0.5s easy-in-out";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin' , sliderSectionLast);
        slider.style.marginLeft = "-100%";
    }, 500);
}

btnRight.addEventListener('click' , function (){
    Next();
});

btnLeft.addEventListener('click' , function (){
    Preview();
});

setInterval(function(){
    Next();
}, 3500);