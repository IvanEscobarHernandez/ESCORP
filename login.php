<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienvenido</title>

	<link rel="stylesheet" href="css/login7.css">
	
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

<body>

	<div class="full-page">

		<div id='login-form' class='login-page'>
			
			<img class="avatar" src="img/logoMenu.jpg" width="150px" height="190px">
			
			<div class="form-box">
				<div class='button-box'>
					
					<div id='btn'></div>
						<button type='button' onclick='login()'class='toggle-btn'>Log In</button>
						<button type='button' onclick='register()'class='toggle-btn'>Register</button>
					</div>

					<form id='login' class='input-group-login'>
						<input type="text" class="input-field" id="usuario" name="usuario" placeholder="  User" required>
						<div class="input-group">
							<input type="password" class="input-field" id="password" name="password" placeholder="  Enter Password" >
							<span id="showLogin" action="hide" class="input-group-addon glyphicon glyphicon-eye-open" style="cursor:pointer;"></span>
						</div>

						<div style="text-align:right; font:bold; color:white; padding:40px 0px;">
							<a href="#" >Olvide mi contraseña</a>
						</div>

						<input type='submit'class='submit-btn' value="Log in" id=""></input>
					</form>

					<form id='register' class='input-group-register'>
						<input type="text" class="input-field" id="name" name="name" placeholder="  Name" required>
						<input type='text'class='input-field'id="lastName" name="lastName" placeholder='  Last Name ' required>
						<input type='text'class='input-field'id="user" name="user" placeholder='  User ' required>
						<div class="input-group">
							<input type="password" class="input-field" id="password" name="password" placeholder="  Enter Password" >
							<span id="showRegister" action="hide" class="input-group-addon glyphicon glyphicon-eye-open" style="cursor:pointer;"></span>
						</div>
							
						<input type='email'class='input-field' id="email" name="email" placeholder='  Email' required>
						<input type='number'class='input-field' id="number" name="number" placeholder='  Phone Number' required>
						<br><br>br
						<input type='submit'class='submit-btn' value="Register"></input>
					</form>

				</div>
			</div>
		</div>

	</div>

	<script src="../js/formulario.js"></script>

    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>

		<!-- Oculta login -->
	<!-- <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script> -->

	<script type="text/javascript">
	
	$(document).ready(function() {
		
		//Mostrar/ocultar contraseña
		$('#showLogin').on('click', function(e) {
			e.preventDefault();
			var current = $(this).attr('action');
			if (current == 'hide') {
				$(this).prev().attr('type', 'text');
				$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action', 'show')
			}
			if (current == 'show') {
				$(this).prev().attr('type', 'password');
				$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action', 'hide')
			}
		});

		$('#showRegister').on('click', function(e) {
			e.preventDefault();
			var current = $(this).attr('action');
			if (current == 'hide') {
				$(this).prev().attr('type', 'text');
				$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action', 'show')
			}
			if (current == 'show') {
				$(this).prev().attr('type', 'password');
				$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action', 'hide')
			}
		});

		/* $('#entrarSistema').click(function() {

			vacios = validarFormVacio('frmLogin');

			if (vacios > 0) {
				alertify.alert('Datos incompletos', '¡Debes llenar todos los campos!');
				return false;
			}

			datos = $('#frmLogin').serialize();
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
			});
		}); */

	});
	
</script>
</body>

</html>
