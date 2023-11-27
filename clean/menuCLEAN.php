<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>

  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Water+Brush&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/Clean/menuCLEAN.css">


  <?php
  require_once "dependencias.php";
  ?>
</head>

<body>
  <div class="container_menu">
    <div class="menu">
      <div class="menu-header">
        <i class="fas fa-bars" id="btn_menu"></i>
      </div>
      <div id="back_menu"></div>
      <nav id="nav">
        <div>
          <a href="../index.php"><img src="../img/Clean/logoClean.jpg" class="logo" alt="Image not available"></a>
        </div>
        <div class="logo2">
          <a href="../index.php"><img src="../img/Clean/logoClean.jpg" class="logo2" alt="Image not available"></a>
        </div>
        <div class="close" id="close">
          <i class="fas fa-times-circle"></i>
        </div>
        <ul>
          <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
          <li><a href="nosotros.php"><span class="glyphicon glyphicon-user"></span> Nosotros</a></li>
          <li><a href="#" class="btn_drop"><i class="fab fa-battle-net"></i> Productos <i class="fas fa-caret-down"></i></a>
            <ul class="dropdown">
              <li><a href="#" class="btn_drop2">Multiusos <i class="fas fa-caret-right"></i></a>
                <ul class="dropdown2">
                  <li><a href="fabuscorp.php">Fabuscorp</a></li>
                  <li><a href="escorplimpio.php">Escorp Limpio</a></li>
                  <li><a href="pinoscorp.php">Pinoscorp</a></li>
                </ul>
              </li>
              <li><a href="#" class="btn_drop3">Detergentes <i class="fas fa-caret-right"></i></a>
                <ul class="dropdown3">
                  <li><a href="#">Ropa color/negra</a></li>
                  <li><a href="#">Vanishcorp</a></li>
                  <li><a href="#">Escorp Rosita</a></li>
                  <li><a href="#">EscorpZote</a></li>
                  <li><a href="#">EscoRoma</a></li>
                  <li><a href="#">EscoRiel</a></li>
                  <li><a href="#">Detercon</a></li>
                </ul>
              </li>
              <li><a href="suavizantes.php">Suavizantes</a></li>
              <li><a href="#" class="btn_drop4">Automotriz <i class="fas fa-caret-right"></i></a>
                <ul class="dropdown4">
                  <li><a href="#">Abrillantador</a></li>
                  <li><a href="#">Shampoo</a></li>
                  <li><a href="#">Aromas</a></li>
                </ul>
              </li>
              <li><a href="#" class="btn_drop5">Hogar <i class="fas fa-caret-right"></i></a>
                <ul class="dropdown5">
                  <li><a href="#">Lavatrastes</a></li>
                  <li><a href="#">Baños</a></li>
                  <li><a href="#">Aromas</a></li>
                </ul>
              </li>
              <li><a href="#">Jarceria</a></li>
              <li><a href="#" class="btn_drop6">Higiénicos <i class="fas fa-caret-right"></i></a>
                <ul class="dropdown6">
                  <li><a href="bobinas.php">Bobinas</a></li>
                  <li><a href="#">Servitoallas</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sucursales </a></li>
          <li><a href="contacto.php"><i class="fas fa-address-book"></i> Contacto</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <script src="../js/menuClean.js"></script>
</body>

</html>