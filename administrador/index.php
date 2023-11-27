<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/Administrador/loginESCORP.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Foldit&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Login</title>

	<?php
	require_once "dependencias.php";
	?>

</head>

<body>

	<div class="full-page">

		<div class='page-left'></div>

		<div class='page-right'>

			<img class="header-login" src="../img/ESCORP/header_login.png">

			<div class="form-box">

				<div class='button-box'>Log In</div>

				<form id="frmLogin">

					<div class="place_h">
						<input type="text" class="input_usuario" id="usuario" name="usuario" autocomplete="username" required>
						<label class="placeholder">Usuario</label>
					</div>

					<div class="input-group">
						<input type="password" class="input_password" id="password" name="password" required>
						<label class="placeholder">Password</label>
						<i class="fa fa-eye-slash toggle"></i>
					</div>

					<div class="link">
						<a href="recuperarContrasena.php">Olvide mi contraseña</a>
					</div>

					<span type='submit' class="submit-btn" id="login">Entrar</span>

				</form>

			</div>
		</div>



	</div>

	<script src="../js/funciones.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			//Mostrar/ocultar contraseña
			const toggle = document.querySelector(".toggle"),
				password = document.querySelector(".input_password");

			toggle.addEventListener("click", () => {
				if (password.type === "password") {
					password.type = "text";
					toggle.classList.replace("fa-eye-slash", "fa-eye");
				} else {
					password.type = "password";
					toggle.classList.replace("fa-eye", "fa-eye-slash");
				}
			});


			$('#login').click(function() {

				vacios = validarFormVacio('frmLogin');

				if (vacios > 0) {
					Swal.fire({
						icon: 'warning',
						iconColor: 'blue',
						title: 'Datos incompletos',
						text: '¡Debes llenar todos los campos!'
					})
					return false;
				}

				/* console.log("ok"); */
				datos = $('#frmLogin').serialize();
				$.ajax({
					type: "POST",
					data: datos,
					url: "procesos/login/login.php",
					success: function(r) {
						/* alert(r); */
						if (r == 1) {
							window.location = "dashboard/index.php";
						}
						if (r == 0) {
							Swal.fire({
								icon: 'error',
								title: 'ERROR',
								text: '¡Usuario y/o contraseña invalidos!',
								confirmButtonColor: 'red'
							})
						}
					}
				});
			});

		});
	</script>
</body>

</html>