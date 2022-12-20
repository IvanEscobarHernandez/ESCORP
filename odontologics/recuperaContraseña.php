<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recupera tu contraseña</title>

	<link rel="stylesheet" href="css/loginEscorp.css">
	
	<link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
	<link rel="stylesheet" href="librerias/fontawesome/css/all.css">
	<link rel="stylesheet" href="librerias/fontawesome/css/brands.css">
	<link rel="stylesheet" href="librerias/fontawesome/css/solid.css">

	<script src="librerias/jquery-3.5.1.min.js"> </script>
	<script src="librerias/alertify/alertify.js"> </script>
	<script src="librerias/bootstrap/js/bootstrap.js"> </script>
	<script src="librerias/bootstrap/js/bootstrap.min.js"> </script>
	<script src="librerias/select2/js/select2.js"> </script>

</head>

<body style="background-color: black;">

	<div class="full-page">

		<br><br><br><br>
		<div id='login-form' class='login-page'>
			
			<a href="index.php"><img class="avatar" src="img/logoMenu2.jpg" width="150px" height="190px"></a>
			
			<div class="form-box">
				<div class='button-box'>
                    
                    <div id='btn'></div>
						<!-- <button type='button' onclick='login()'class='toggle-btn'>Log In</button>
						<button type='button' onclick='register()'class='toggle-btn'>Register</button> -->
					</div>

					<form id='login' class='input-group-login'>
                        <div class="formulario__grupo" id="grupo__email">
                                                            
                            <div class="formulario__grupo-input" >
                                <input class="inputs" type="email" name="email" id="email" placeholder=" email@email.com" required>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>

                            <p class="formulario__input-error">El correo solo puede contener letras,numeros, puntos, guiones y guion bajo</p>

                        </div>

						<br><br><br><input type='submit'class='submit-btn' value="Check password" id=""></input>
					</form>

				</div>
			</div>
		</div>

	</div>

	<script src="js/formulario2.js"></script>
	<script src="js/funciones.js"></script>

	<script type="text/javascript">
	
        $(document).ready(function() {

            $('#registrar').click(function() {

                vacios = validarFormVacio('register');

                /* datos = $('#register').serialize();
                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "procesos/regLogin/login.php",
                    success: function(r) {
                        //alert(r);
                        if (r == 1) {
                            alertify.success('ÉXITO.');
                            window.location = "vistas/inicio.php";
                        } 
                        if(r == 0){
                            alertify.error("ERROR.");
                            alertify.alert('ERROR-Acceso denegado.','El usuario y/o la contraseña son incorrectos.');
                        }
                    }
                }); */
            });

        });
        
    </script>

</body>

</html>