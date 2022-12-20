document.getElementById("btn_menu").addEventListener("click",mostrar_menu);
document.getElementById("back_menu").addEventListener("click",ocultar_menu);
document.getElementById("close").addEventListener("click",ocultar_menu);

nav=document.getElementById("nav");
background_menu=document.getElementById("back_menu");

function mostrar_menu(){
    nav.style.right="0px";
    background_menu.style.display="block";
}

function ocultar_menu(){
    nav.style.right="-250px";
    background_menu.style.display="none";
}

$('.btn_drop').click(function(){
    $('.dropdown').toggleClass('display');
    $('.dropdown2').removeClass('display');
})

$('.btn_drop2').click(function(){
    $('.dropdown2').toggleClass('display');
})