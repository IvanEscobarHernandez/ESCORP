<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCORP</title>

    <link rel="stylesheet" href="css/serviciosESCORP.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Water+Brush&display=swap" rel="stylesheet">

    <?php
        require_once "menuESCORP.php";
    ?>
    
</head>

<body>

    <div class="container_nosotros">

        <header>
            <br><br><br>
            <img src="img/headerESCORP5.jpg" class="img_head">
            
            <!-- Titulo y Sub -->
            <div class="container_header">  
            
                <div class="container_header_title"><h1 class="title_header">Conoce nuestros servicios...</h1></div>
            
            </div>
        
        </header>
        
        <!-- Events Nuevos lanzamientos-->
        <section class="events" id="events">

            <div>
                <h1 class="titulos_events">Nuevos lanzamientos</h1>
                <div class="line"></div>
            </div>

            <div class="row">

                <div class="col">

                    <div class="imagen">
                        <img src="img/sliderInicio1.jpg">
                        <div class="capa">
                        <a href="drivers/index.php" target="_blank"><h3>¡Ya disponible!</h3></a>
                        </div>
                    </div>
                    <div class="container-escorp">
                        <h4 class="titulos">ESCORP </h4><h4 class="italicas">Drivers</h4>
                    </div>
                    <p>Una forma mas segura de viajar.</p>
                    <a class="link" href="drivers/index.php" target="_blank">Descubre más de Drivers</a>
                </div>

            </div>

        </section>

        <!-- Events Proximos lanzamientos-->
    <section class="events" id="events">

<div>
    <h1 class="titulos_events">Próximos lanzamientos</h1>
    <div class="line"></div>
</div>

<div class="row">

    <div class="col">
        <div class="imagen">
            <img src="img/fondo.jpg" alt="">
            <div id="capa1" class="capa">
                <h3>¡Espéralo muy pronto!</h3>
            </div>
        </div>
        <div class="container-escorp">
            <h4 class="titulos">ESCORP </h4><h4 class="italicas">Odonto</h4>
        </div>
        <p>Administra tu consultorio dental.</p>
        <a class="link" onclick="capas1()">Descubre más de Odonto</a>
    </div>

    <div class="col"> 
        <div class="imagen">
            <img src="img/mantenimiento.jpg" alt="">
            <div id="capa2" class="capa">
                <h3>¡Espéralo muy pronto!</h3>
            </div>
        </div>
        <div class="container-escorp">
            <h4 class="titulos">ESCORP </h4><h4 class="italicas">Maintenance</h4>
        </div>
        <p>Los mejores contratistas.</p>
        <a class="link" onclick="capas2()">Descubre más de Maintenance</a>            
    </div>

</div>

</section>

        <section class="footer">
            <p>2020-2022 Website by ESCORP Technologies | All rights reserved.</p>
        </section>
    </div>

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