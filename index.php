<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCORP</title>

    <link rel="stylesheet" href="css/indexESCORP.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Water+Brush&display=swap" rel="stylesheet">

    <?php
        require_once "menuESCORP.php";
    ?>
    
</head>

<body>

    <!-- Imagen de inicio -->
    <br>
    <div class="imagen_inicio">
        <img src="img/logoInicio.png" class="imageninicio">
    </div>

    <!-- Encabezado -->
    <header>

        <div class="header-content">
            <div class="tittle">
                <span style="--l: 'E';">E</span>
                <span style="--l: 'S';">S</span>
                <span style="--l: 'C';">C</span>
                <span style="--l: 'O';">O</span>
                <span style="--l: 'R';">R</span>
                <span style="--l: 'P';">P</span>
            </div>
            <h2 class="eslogan">Una nueva forma de brindar servicios</h2>
            <br>
            <a class="link" href="nosotros.php" target="_blank">Descubre más de ESCORP</a>
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
                    <a href="drivers/index.php" target="_blank"><img src="img/sliderInicio1.jpg"></a>
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

             <div class="col">

                <div class="imagen">
                    <a href="clean/index.php" target="_blank"><img src="img/clean.jpg"></a>
                    <div class="capa">
                    <a href="clean/index.php" target="_blank"><h3>¡Ya disponible!</h3></a>
                    </div>
                </div>

                <div class="container-escorp">
                    <h4 class="titulos">ESCORP </h4><h4 class="italicas">Clean</h4>
                </div>
                <p>Una forma mas segura de viajar.</p>
                <a class="link" href="clean/index.php" target="_blank">Descubre más de Clean</a>

                <!-- <div class="imagen">
                    <img src="img/clean.jpg" alt="">
                    <div id="capa2" class="capa">
                        <h3>¡Espéralo muy pronto!</h3>
                    </div>
                </div>
                <div class="container-escorp">
                    <h4 class="titulos">ESCORP </h4><h4 class="italicas">Clean</h4>
                </div>
                <p>Productos de limpieza y todo para tu hogar.</p>
                <a class="link" onclick="capas2()">Descubre más de Clean</a> -->

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


    <!-- Unete a nosotros -->
    <section class="join">
        <div class="join-content">
            <b><h1 class="titulos-join">Únete a ESCORP</h1></b>
            <div class="line"></div>
            <p class="parrafo">Si eres un prestador de servicios que se identifica con los valores de ESCORP contáctanos y conoce como podemos ayudarte a crecer.</p>
            <center><a class="link" href="contacto.php" target="_blank">Unete a ESCORP</a></center>
        </div>
    </section>

    <section class="footer">
        <p>2020-2022 Website by ESCORP Technologies | All rights reserved.</p>
    </section>

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