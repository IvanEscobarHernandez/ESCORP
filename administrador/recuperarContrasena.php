<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/Administrador/recuperarContrasena.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Foldit&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Recuperar contraseña</title>

	<?php
	require_once "dependencias.php";
	?>

</head>

<body>

	<div class="full-page">

		<div class='page-left'>

			<img class="header-login" src="../img/ESCORP/header_login2.png">

			<div class="form-box">

				<div class='button-box'>Log In</div>

				<form id="frmRecuperarContrasena">

					<div class="place_h">
						<input type="text" class="input_usuario" id="email" name="email" autocomplete="email" required>
						<label class="placeholder">Ingresa el correo registrado</label>
					</div>

					<div class="link">
						<a href="index.php">Iniciar sesión</a>
					</div>

					<span type='submit' class="submit-btn" id="recuperarContrasena">Recuperar contraseña</span>

				</form>

			</div>

		</div>

		<div class='page-right'>

		</div>

	</div>

	<script src="../js/funciones.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			$('#recuperarContrasena').click(function() {

				vacios = validarFormVacio('frmRecuperarContrasena');

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
				datos = $('#frmRecuperarContrasena').serialize();
				$.ajax({
					type: "POST",
					data: datos,
					url: "procesos/login/recuperarContrasena.php",
					success: function(r) {
						/* alert(r); */
						if (r == 1) {
							Swal.fire({
								icon: 'success',
								title: 'Tu contraseña ha sido enviada al correo registrado',
								showConfirmButton: false,
								timer: 2500
							})
							setTimeout('window.location = "index.php" ;', 2500);
						} else {
							if (r == 0) {
								Swal.fire({
									icon: 'error',
									title: 'ERROR',
									text: '¡El correo ingresado no es válido.!',
									confirmButtonColor: 'red'
								})
							}
							if (r == 2) {
								Swal.fire({
									icon: 'error',
									title: 'ERROR',
									text: '¡El correo ingresado no corresponde a ningun usuario registrado.',
									confirmButtonColor: 'red'
								})
							}
							if (r == 3) {
								Swal.fire({
									icon: 'error',
									title: 'ERROR',
									text: '¡Intentelo de nuevo.',
									confirmButtonColor: 'red'
								})
							}
						}
					}
				});
			});

		});
	</script>

</body>

</html>