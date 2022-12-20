<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCORP Clean</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Water+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/indexCLEAN.css">

    <?php
        require_once "menuCLEAN.php";
    ?>
    
</head>

<body>

    <!-- Imagen de inicio -->

    <div class="imagen_inicio">
        <img src="../img/imagenInicioClean.jpg" class="imageninicio">
    </div>

    <!-- Encabezado -->
    <header>

        <div class="header-content">
            <div class="tittle">
                <span style="--l: 'C';">C</span>
                <span style="--l: 'L';">L</span>
                <span style="--l: 'E';">E</span>
                <span style="--l: 'A';">A</span>
                <span style="--l: 'N';">N</span>
            </div>
            <h2 class="eslogan">Productos de limpieza</h2>
            <br>
            <a class="link" href="#" target="_blank">Descubre más de Clean</a>
        </div>

    </header>
    
    <!-- Events Nuevos lanzamientos-->
    <section class="events" id="events">

        <div>
            <h1 class="titulos_events">Conócenos</h1>
            <div class="line"></div>
        </div>

        <div class="dialogo">
            Somos distribuidores de una extensa linea de productos de limpieza para el hogar. En nuestros catálogos podrás encontrar una gran cantidad de categorias, de las cuales podrás disponer a partir de 0.5 L.
        </div>

        <!-- Swiper -->
        <!-- <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                    <a href="#"><img src="../img/Mayoreo2.jpg"/></a>
                    <div class="info">
                        <h5>Mayoreo <br> <span>ESCORP Clean provee tu negocio.</span></h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <a href="#"><img src="../img/medio mayoreo4.jpg"/></a>
                    <div class="info">
                        <h5>Medio mayoreo <br> <span>ESCORP Clean provee tu negocio.</span></h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <a href="#"><img src="../img/menudeo7.jpg"/></a>
                    <div class="info">
                        <h5>Menudeo <br> <span>ESCORP Clean provee tu negocio.</span></h5>
                    </div>
                </div>

            </div>
            
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
            <div class="swiper-pagination"></div>
        </div> -->
        

    </section>

    <!-- Events Proximos lanzamientos-->
    <section class="events2" id="events">

        <div>
            <h1 class="titulos_events">Nuestros productos</h1>
            <div class="line"></div>
        </div>

        <div class="dialogo">
            Conoce la gran variedad de productos que tenemos para ti. Todos de la mejor calidad !Te soprenderan!
        </div>

        <!-- Swiper 2-->
        <div class="swiper mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="imagen">
                        <a href="#"><img src="../img/suavizantes.jpg"/></a>
                        <div id="capa" class="capa">
                            <h3>¡Te sorprenderan!</h3>
                            <h6>Esperalo muy pronto</h6>
                        </div>
                        <div class="info3">
                            <br><h5>Suavizantes.</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imagen">
                        <a href="#"><img src="../img/detergente.jpg"/></a>
                        <div id="capa" class="capa">
                            <h3>¡Te sorprenderan!</h3>
                            <h6>Esperalo muy pronto</h6>
                        </div>
                        <div class="info3">
                            <br><h5>Detergentes.</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imagen">
                        <a href="#"><img src="../img/pisos.jpg"/></a>
                        <div id="capa" class="capa">
                            <h3>¡Te sorprenderan!</h3>
                            <h6>Esperalo muy pronto</h6>
                        </div>
                        <div class="info4">
                            <br><h5>Multiusos.</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imagen">
                        <a href="#"><img src="../img/hogar.jpg"/></a>
                        <div id="capa" class="capa">
                            <h3>¡Te sorprenderan!</h3>
                            <h6>Esperalo muy pronto</h6>
                        </div>
                        <div class="info7">
                            <br><h5>Hogar.</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imagen">
                        <a href="#"><img src="../img/jarceria.jpg"/></a>
                        <div id="capa" class="capa">
                            <h3>¡Te sorprenderan!</h3>
                            <h6>Esperalo muy pronto</h6>
                        </div>
                        <div class="info6">
                            <br><h5>Jarceria.</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imagen">
                        <a href="#"><img src="../img/baños.jpg"/></a>
                        <div id="capa" class="capa">
                            <h3>¡Te sorprenderan!</h3>
                            <h6>Esperalo muy pronto</h6>
                        </div>
                        <div class="info8">
                            <br><h5>Baños.</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imagen">
                        <a href="#"><img src="../img/automotriz.jpg"/></a>
                        <div id="capa" class="capa">
                            <h3>¡Te sorprenderan!</h3>
                            <h6>Esperalo muy pronto</h6>
                        </div>
                        <div class="info5">
                            <br><h5>Automotriz.</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imagen">
                        <a href="#"><img src="../img/aromas.jpg"/></a>
                        <div id="capa" class="capa">
                            <h3>¡Te sorprenderan!</h3>
                            <h6>Esperalo muy pronto</h6>
                        </div>
                        <div class="info9">
                            <br><h5>Aromas.</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imagen">
                        <a href="#"><img src="../img/higienicos.jpg"/></a>
                        <div id="capa" class="capa">
                            <h3>¡Te sorprenderan!</h3>
                            <h6>Esperalo muy pronto</h6>
                        </div>
                        <div class="info10">
                            <br><h5>Higiénicos.</h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next_2"></div>
            <div class="swiper-button-prev_2"></div>

            <div class="swiper-pagination_2"></div>
        </div>

    </section>


    <!-- Unete a nosotros -->
    <section class="join">
        <div class="join-content">
            <b><h1 class="titulos-join">Únete a Clean</h1></b>
            <div class="line"></div>
            <p class="parrafo">Si deseas iniciar tu negocio, contactanos, nosotros te ayudamos y capacitamos.</p>
            <center><a class="link" href="#" target="_blank">Unete a Clean</a></center>
        </div>
    </section>

    <section class="footer">
        <p>2020-2022 Website by ESCORP Technologies | All rights reserved.</p>
    </section>

    <!-- Initialize Swiper -->
    <!-- <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "1.5",
        loop:true,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 400,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable:true,
          dynamicBullets:true,
        },
        autoplay:{
            delay:2000,
            pauseOnMouseEnter:true,
            disableOnInteraction:false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script> -->

    <!-- Initialize Swiper_2 -->
    <script>
        if(screen.width>900)
            var swiper = new Swiper(".mySwiper", {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "3",
                    loop:true,
                    coverflowEffect: {
                    rotate: 50,
                    stretch: 70,
                    depth: 10,
                    modifier: 1,
                    slideShadows: true,
                    },
                    pagination: {
                    el: ".swiper-pagination",
                    clickable:true,
                    dynamicBullets:true,
                    },
                    autoplay:{
                        delay:2000,
                        pauseOnMouseEnter:true,
                        disableOnInteraction:false,
                    },
                    navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                    },
                });
            else
                var swiper = new Swiper(".mySwiper", {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "1.5",
                    loop:true,
                    coverflowEffect: {
                    rotate: 50,
                    stretch: 70,
                    depth: 10,
                    modifier: 1,
                    slideShadows: true,
                    },
                    pagination: {
                    el: ".swiper-pagination",
                    clickable:true,
                    dynamicBullets:true,
                    },
                    autoplay:{
                        delay:2000,
                        pauseOnMouseEnter:true,
                        disableOnInteraction:false,
                    },
                    navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                    },
                });

    </script>


</body>

<script>
    function capas1(){
        document.getElementById("capa1").classList.remove("capa")
        document.getElementById("capa1").classList.add("capa-active")
    }

    function capas2(){
        document.getElementById("capa2").classList.remove("capa")
        document.getElementById("capa2").classList.add("capa-active")
    }

    function capas3(){
        document.getElementById("capa3").classList.remove("capa")
        document.getElementById("capa3").classList.add("capa-active")
    }
</script>

</html>