<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login ESCORP</title>

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

<body>

	<div class="cards">

		<div class="links">
		</div>

		<div class="imagen_inicio">
            <img src="img/logoInicio.png" class="imageninicio">
        </div>

		<div class="full-page">
			<br><br>
			<div id='login-form' class='login-page'>
				
				<a href="login.php"><img class="avatar" src="img/logoMenu.jpg" width="150px" height="190px"></a>
				
				<div class="form-box">
					<div class='button-box'>
						
						<div id='btn'></div>
							<button type='button' onclick='login()'class='toggle-btn'>Log In</button>
							<button type='button' onclick='register()'class='toggle-btn'>Register</button>
						</div>

						<form id='login' class='input-group-login'>
							<input type="text" class="inputs" id="userLogin" name="userLogin" placeholder="  User" required>
							<div class="input-group">
								<input type="password" class="inputs" id="passwordLogin" name="password" placeholder="  Enter Password" >
								<span id="showLogin" action="hide" class="input-group-addon glyphicon glyphicon-eye-open" style="cursor:pointer;"></span>
							</div>

							<div style="text-align:right; font:bold; color:white; padding:40px 0px;">
								<a href="recuperaContraseña.php" target="blank">Olvide mi contraseña</a>
							</div>

							<input type='submit'class='submit-btn' value="Log in" id=""></input>
						</form>

						<form id='register' class='input-group-register'>
							
								<!-- Nombre -->
								<div class="formulario__grupo" id="grupo__name">
											
									<div class="formulario__grupo-input" >
										<input class="inputs" type="text" name="name" id="name" placeholder="  Name" required>    
										<i class="formulario__validacion-estado fas fa-times-circle"></i>
									</div>

									<p class="formulario__input-error" class="formulario__input-error">El nombre solo puede contener letras</p>

								</div>

								<!-- Apellidos -->
								<div class="formulario__grupo" id="grupo__lastName">
																
									<div class="formulario__grupo-input" >
										<input class="inputs" type="text" name="lastName" id="lastName" placeholder="  Last Name" required>    
										<i class="formulario__validacion-estado fas fa-times-circle"></i>
									</div>

									<p class="formulario__input-error" class="formulario__input-error">Los apellidos solo puede contener letras</p>

								</div>
								
								<!-- Usuario -->
								<div class="formulario__grupo" id="grupo__user">
																
									<div class="formulario__grupo-input" >
										<input class="inputs" type="text" name="userRegister" id="userRegister" placeholder="  User" required>    
										<i class="formulario__validacion-estado fas fa-times-circle"></i>
									</div>

									<p class="formulario__input-error" class="formulario__input-error">El nombre solo puede contener letras</p>

								</div>

								<!-- Password -->
								<div class="formulario__grupo" id="grupo__password">
									<div class="input-group">
										<input type="password" class="inputs" id="passwordRegister" name="passwordRegister" placeholder="  Enter Password" required>
										<span id="showRegister" action="hide" class="input-group-addon glyphicon glyphicon-eye-open" style="cursor:pointer;"></span>
									</div>
								</div>

								<!-- Correo -->
								<div class="formulario__grupo" id="grupo__email">
																
									<div class="formulario__grupo-input" >
										<input class="inputs" type="email" name="email" id="email" placeholder=" email@email.com" required>
										<i class="formulario__validacion-estado fas fa-times-circle"></i>
									</div>

									<p class="formulario__input-error">El correo solo puede contener letras,numeros, puntos, guiones y guion bajo</p>

								</div>

								<!-- Telefono -->
								<div class="formulario__grupo" id="grupo__number">
																
									<div class="formulario__grupo-input" >
										<input class="inputs" type="number" name="number" id="number" placeholder=" 5555555555" required>
										<i class="formulario__validacion-estado fas fa-times-circle"></i>
									</div>

									<p class="formulario__input-error">El telefono debe contener 10 digitos</p>
								</div>

								<div class="formulario__grupo" id="grupo__perfil">
									<select class="inputs" id="perfil" name="perfil" required>
										<option value=""> Seleccionar perfil </option>
										<option value="Administrador"> Administrador </option>
										<option value="Technologies"> Technologies </option>
										<option value="Drivers"> Drivers </option>
										<option value="Clean"> Clean </option>
										<option value="Odonto"> Odonto </option>
									</select>
								</div>

								<br><br><br>
								<!-- <input type='submit'class='submit-btn' value="Register"></input> -->
								<center><input type="submit" class="submit-btn" id="registrar"></span></center>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div>

	<script src="js/formulario1.js"></script>
	<script src="js/funciones.js"></script>

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
