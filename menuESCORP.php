<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="css/ESCORP/menuESCORP.css">
  <?php
  require_once "dependencias.php";
  ?>
</head>

<body>

  <div id="nav">

    <div style="background: rgb(0,0,0);" class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img class="avatar" src="img/ESCORP/logoMenu.jpg" alt="Image not available" width="150px" height="150px"></a>

        </div>

        <!-- Menu -->
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">

            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>

            <li><a href="nosotros.php"><span class="glyphicon glyphicon-user"></span> Nosotros</a></li>

            <li><a href="servicios.php"><span class="glyphicon glyphicon-exclamation-sign"></span> Servicios</a></li>

            <li><a href="contacto.php"><span class="glyphicon glyphicon-phone-alt"></span> Contacto</a></li>

          </ul>

        </div>
        <!--/.nav-collapse -->

      </div>
      <!--/.contatiner -->

    </div>

  </div>

</body>

</html>