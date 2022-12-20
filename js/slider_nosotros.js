const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length-1];

slider.insertAdjacentElement('afterbegin' , sliderSectionLast);

function Next(){
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 1s easy-in-out";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend' , sliderSectionFirst);
        slider.style.marginLeft = "-100%";
    }, 500);
}

setInterval(function(){
    Next();
}, 3500);