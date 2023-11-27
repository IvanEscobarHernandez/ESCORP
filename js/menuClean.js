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
})

$('.btn_drop2').click(function(){
    $('.dropdown2').toggleClass('display');
    var dropdown3 = $('.dropdown3').attr('class');
    var dropdown4 = $('.dropdown4').attr('class');
    var dropdown5 = $('.dropdown5').attr('class');
    var dropdown6 = $('.dropdown6').attr('class');
    if(dropdown3=="dropdown3 display"){
        $('.dropdown3').removeClass('display');
    }
    if(dropdown4=="dropdown4 display"){
        $('.dropdown4').removeClass('display');
    }
    if(dropdown5=="dropdown5 display"){
        $('.dropdown5').removeClass('display');
    }
    if(dropdown6=="dropdown6 display"){
        $('.dropdown6').removeClass('display');
    }
})

$('.btn_drop3').click(function(){
    $('.dropdown3').toggleClass('display');
    var dropdown2 = $('.dropdown2').attr('class');
    var dropdown4 = $('.dropdown4').attr('class');
    var dropdown5 = $('.dropdown5').attr('class');
    var dropdown6 = $('.dropdown6').attr('class');
    if(dropdown2=="dropdown2 display"){
        $('.dropdown2').removeClass('display');
    }
    if(dropdown4=="dropdown4 display"){
        $('.dropdown4').removeClass('display');
    }
    if(dropdown5=="dropdown5 display"){
        $('.dropdown5').removeClass('display');
    }
    if(dropdown6=="dropdown6 display"){
        $('.dropdown6').removeClass('display');
    }
})

$('.btn_drop4').click(function(){
    $('.dropdown4').toggleClass('display');
    var dropdown2 = $('.dropdown2').attr('class');
    var dropdown3 = $('.dropdown3').attr('class');
    var dropdown5 = $('.dropdown5').attr('class');
    var dropdown6 = $('.dropdown6').attr('class');
    if(dropdown2=="dropdown2 display"){
        $('.dropdown2').removeClass('display');
    }
    if(dropdown3=="dropdown3 display"){
        $('.dropdown3').removeClass('display');
    }
    if(dropdown5=="dropdown5 display"){
        $('.dropdown5').removeClass('display');
    }
    if(dropdown6=="dropdown6 display"){
        $('.dropdown6').removeClass('display');
    }
})

$('.btn_drop5').click(function(){
    $('.dropdown5').toggleClass('display');
    var dropdown2 = $('.dropdown2').attr('class');
    var dropdown3 = $('.dropdown3').attr('class');
    var dropdown4 = $('.dropdown4').attr('class');
    var dropdown6 = $('.dropdown6').attr('class');
    if(dropdown2=="dropdown2 display"){
        $('.dropdown2').removeClass('display');
    }
    if(dropdown3=="dropdown3 display"){
        $('.dropdown3').removeClass('display');
    }
    if(dropdown4=="dropdown4 display"){
        $('.dropdown4').removeClass('display');
    }
    if(dropdown6=="dropdown6 display"){
        $('.dropdown6').removeClass('display');
    }
})

$('.btn_drop6').click(function(){
    $('.dropdown6').toggleClass('display');
    var dropdown2 = $('.dropdown2').attr('class');
    var dropdown3 = $('.dropdown3').attr('class');
    var dropdown4 = $('.dropdown4').attr('class');
    var dropdown5 = $('.dropdown5').attr('class');
    if(dropdown2=="dropdown2 display"){
        $('.dropdown2').removeClass('display');
    }
    if(dropdown3=="dropdown3 display"){
        $('.dropdown3').removeClass('display');
    }
    if(dropdown4=="dropdown4 display"){
        $('.dropdown4').removeClass('display');
    }
    if(dropdown5=="dropdown5 display"){
        $('.dropdown5').removeClass('display');
    }
})