<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Water+Brush&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/menuCLEAN.css">
  
  
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
            <a href="../index.php"><img src="../img/logoClean.jpg" class="logo"></a>
          </div>
          <div class="logo2">
            <a href="../index.php"><img src="../img/logoClean.jpg" class="logo2"></a>
          </div>
          <div class="close" id="close">
            <i class="fas fa-times-circle"></i>
          </div>
          <ul>
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
            <li><a href="nosotros.php"><span class="glyphicon glyphicon-user"></span> Acerca de Clean</a></li>
            <li><a href="#" class="btn_drop"><i class="fab fa-battle-net"></i> Productos <i class="fas fa-caret-down"></i></a>
              <ul class="dropdown">
                <li><a href="#">Multiusos</a></li>
                <li><a href="#" class="btn_drop2">Ropa <i class="fas fa-caret-right"></i></a>
                  <ul class="dropdown2">
                    <li><a href="#">Detergentes</a></li>
                    <li><a href="#">Suavizantes</a></li>
                  </ul>
                </li>
                <li><a href="#">Automotriz</a></li>
                <li><a href="#" class="btn_drop2">Hogar <i class="fas fa-caret-right"></i></a>
                  <ul class="dropdown2">
                    <li><a href="#">Lavatrastes</a></li>
                    <li><a href="#">Baños</a></li>
                    <li><a href="#">Aromas</a></li>
                  </ul>
                </li>
                <li><a href="#">Jarceria</a></li>
                <li><a href="#">Higienicos</a></li>
              </ul>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sucursales </a></li>
            <li><a href="#"><i class="fas fa-address-book"></i> Contacto</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <script src="../js/menuClean.js"></script>
</body>

</html>