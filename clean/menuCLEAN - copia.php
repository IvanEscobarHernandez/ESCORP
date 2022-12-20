<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="../css/menuCLEAN.css">
  <?php
  require_once "dependencias.php";
  ?>
</head>

<body>

  <div id="nav">

    <div style="background: #0080FF; color:white;" class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">

      <div class="container">

        <div class="navbar-header">

          <button style="background: #0080FF; color:white; "type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img class="avatar" src="../img/logoClean.jpg" alt="" width="150px" height="150px"></a>

        </div>

        <!-- Menu -->
        <div id="navbar" class="collapse navbar-collapse" >

          <ul class="nav navbar-nav navbar-right" style="background: #0080FF; color:white;">

            <li><a href="index.php" style="background: #0080FF; color:white;"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>

            <li><a href="nosotros.php" style="background: #0080FF; color:white;"><span class="glyphicon glyphicon-user"></span> Acerca de Clean</a></li>

            <li class="dropdown">
                <a style="background: #0080FF; color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-info-sign"></span> Productos <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span class="glyphicon glyphicon-folder-open"></span> Suavizantes</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Automotriz </a></li>
                  </ul>
              </li>

            <li><a style="background: #0080FF; color:white;" href="contacto.php"><span class="glyphicon glyphicon-phone-alt"></span> Contacto</a></li>

          </ul>

        </div>
        <!--/.nav-collapse -->

      </div>
      <!--/.contatiner -->

    </div>

  </div>

</body>

</html>