<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ESCORP/contactoESCORP.css">
    <title>Contacto</title>
    <?php
    require_once "menuESCORP.php";
    $cuenta = "ESCORP";
    ?>
</head>

<body>
    <div class="container_contacto">

        <header class="header_contacto">

            <img src="img/ESCORP/contacto1.jpg" class="img_head_contacto" alt="Image not available">

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
                            <p class="copy_contacto_main">Si eres un prestador de servicios que se identifica con nuestros valores, contáctanos.
                                <br><br>
                                En esta sección encontrarás la manera de ponerte en contacto con ESCORP para exponer como funciona tu negocio.
                                <br><br>
                                Por ahora la mejor opción es llenando el siguiente formulario o enviando un correo a la siguiente dirección:
                                <br><br>
                                <i class="fa-solid fa-envelope-open-text"></i> contacto@escorp.com.mx
                            </p>
                        </div>

                        <div class="contacto_main">
                            <br>
                            <h3 class="n_contacto_main">Horario de contacto</h3>
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
                        <img src="img/ESCORP/joinUsESCORP4.jpg" class="contacto_img" alt="Image not available">

                        <form class="formulario" id="frmContacto">

                            <h2 class="comentarios">Contacto</h2>

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

                                <label for="correo" class="formulario__label">Correo electrónico</label>

                                <div class="formulario__grupo-input">
                                    <input class="inputs" type="email" name="email" id="email" placeholder="correo@dominio.com">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>

                                <p class="formulario__input-error">El correo solo puede contener letras,numeros, puntos, guiones y guion bajo</p>

                            </div>


                            <div class="formulario__grupo" id="grupo__telefono">

                                <label for="telefono" class="formulario__label">Número telefónico</label>

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
        <section class="footer">
            <p>2020-2023 Website by ESCORP Technologies | All rights reserved.</p>
        </section>
    </div>

</body>

</html>

<script src="js/formulario.js"></script>
<script src="js/funciones.js"></script>

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
                url: "procesos/comentariosHosting.php",
                /* url: "procesos/comentarios.php", */
                success: function(r) {
                    /* alert(r); */
                    if (r == 1) {

                        alertify.alert('<center>¡Agradecemos que te hayas puesto en contacto con nosotros!</center>', 'Tu mensaje se ha enviado con exito. <br><br> En breve nos pondremos en contactos contigo',
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