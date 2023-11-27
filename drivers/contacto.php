<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Drivers/contactoDrivers.css">
    <title>Contacto</title>
    <?php
    require_once "menu.php";
    $cuenta = "ESCORP";
    ?>
</head>

<body>
    <div class="container_contacto">

        <header class="header_contacto">

            <img src="../img/Drivers/contacto1.jpg" class="img_head_contacto">

        </header>

        <main>
            <section class="section_contacto_main">

                <div class="contenedor_subtitulo_main_contacto">
                    <h2 class="subtitulo_main_contacto">Contáctanos</h2>
                </div>
                <div class="line"></div>

                <div class="contenedor_check_slider_main_contacto">

                    <div class="checklist_contacto_main">

                        <div class="contacto_main">
                            <br>
                            <h3 class="n_contacto_main">Estamos para servirte</h3>
                            <div class="line_main"></div>
                            <p class="copy_contacto_main">En esta sección puedes encontrar la manera de ponerte en contácto con nosotros para agendar tu viaje.
                                <br><br>
                                Por ahora la mejor opción para cotizar y agendar tus viajes es por whatsApp.
                                <br><br>
                                <span class="glyphicon glyphicon-phone"></span> 55 3444 2116.
                            </p>
                        </div>

                        <div class="contacto_main">
                            <br>
                            <h3 class="n_contacto_main">Horario de Contacto</h3>
                            <div class="line_main"></div>
                            <p class="copy_contacto_main">Todos los días: 8:00 - 22:00.</p>
                        </div>

                        <div class="contacto_main">
                            <br>
                            <h3 class="n_contacto_main">Horario de servicio</h3>
                            <div class="line_main"></div>
                            <p class="copy_contacto_main">Las 24 horas, los 365 días del año.</p>
                        </div>

                    </div>

                    <div class="formulario_container_contacto">
                        <img src="../img/Drivers/contacto2.jpg" class="contacto_img">

                        <form class="formulario" id="frmContacto">
                            <h2 class="comentarios">Comentarios</h2>

                            <input type="text" hidden="" id="cuenta" name="cuenta" value="<?php echo (isset($cuenta)) ? $cuenta : ''; ?>">

                            <div class="formulario__grupo" id="grupo__nombre">

                                <label for="nombre" class="formulario__label">Nombre</label>

                                <div class="formulario__grupo-input">
                                    <input class="inputs" type="text" name="nombre" id="nombre" placeholder="Introduce tu nombre completo">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>

                                <p class="formulario__input-error" class="formulario__input-error">El nombre solo puede contener letras</p>

                            </div>

                            <div class="formulario__grupo" id="grupo__correo">

                                <label for="correo" class="formulario__label">Correo Electronico</label>

                                <div class="formulario__grupo-input">
                                    <input class="inputs" type="email" name="email" id="email" placeholder="correo@correo.com">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>

                                <p class="formulario__input-error">El correo solo puede contener letras,numeros, puntos, guiones y guion bajo</p>

                            </div>

                            <div class="formulario__grupo" id="grupo__telefono">

                                <label for="telefono" class="formulario__label">Número telefonico</label>

                                <div class="formulario__grupo-input">
                                    <input class="inputs" type="number" name="telefono" id="telefono" placeholder="5555555555">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>

                                <p class="formulario__input-error">El telefono debe contener 10 digitos</p>

                            </div>

                            <div class="formulario__grupo" id="grupo__asunto">

                                <label for="asunto" class="formulario__label">Asunto</label>

                                <div class="formulario__grupo-input">
                                    <input class="inputs" type="text" name="asunto" name="asunto" placeholder="Asunto">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>

                                <p class="formulario__input-error">El asunto solo puede contener letras</p>

                            </div>

                            <div class="formulario__grupo" id="grupo__asunto">

                                <label for="comentario" class="formulario__label">Comentarios</label>

                                <div class="formulario__grupo-input">
                                    <textarea class="textarea" name="mensaje" placeholder="Escribe aqui tus comentarios"></textarea>
                                </div>

                            </div>

                            <div class="formulario__grupo formulario__grupo-btn-enviar">
                                <center><span type="submit" class="boton" id="enviarComentarios">Enviar</span></center>
                            </div>


                        </form>
                    </div>

                </div>

            </section>
        </main>

        <br><br>

        <!-- <footer>
            <div class="section_footer">
                <div class="n_footer">
                    2022 Website by ESCORP Technologies | All rights reserved.
                </div>
            </div>
        </footer> -->
        <section class="footer">
            <p>2020-2022 Website by ESCORP Technologies | All rights reserved.</p>
        </section>
    </div>

</body>

</html>

<script src="../js/formulario.js"></script>
<script src="../js/funciones.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#enviarComentarios').click(function() {

            vacios = validarFormVacio('frmContacto');
            cuenta = '<?= $cuenta ?>';

            if (vacios > 0) {
                alertify.alert('Datos incompletos', '¡Debes llenar todos los campos!');
                return false;
            }

            datos = $('#frmContacto').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "../procesos/comentariosHosting.php",
                /* url: "../procesos/comentarios.php", */
                success: function(r) {
                    /* alert(r); */
                    if (r == 1) {

                        alertify.alert('<center>¡Agradecemos tus comentarios!</center>', 'Tu mensaje se ha enviado con exito. <br><br> Agradecemos tu tiempo y tomaremos en cuenta todos tus comentarios',
                            function() {
                                window.location = "contacto.php";
                            });

                    } else {
                        alertify.error("Ocurrio un error");
                        if (r == 0) {
                            alertify.alert('ERROR', 'Intentelo de nuevo');
                        }

                        if (r == 2) {
                            alertify.alert('ERROR', 'El correo ingresado no es válido');
                        }

                        if (r == 3) {
                            alertify.alert('ERROR', 'El número telefónico ingresado no es válido');
                        }


                    }
                }
            });
        });
    });
</script>