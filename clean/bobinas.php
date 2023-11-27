<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobinas</title>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Water+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/Clean/bobinas.css">

    <?php
    require_once "menuCLEAN.php";
    ?>
</head>

<body>


    <div class="contenedor">
        <div class="container">
            <div class="card-wrapper">

                <div class="card_left">
                    <!-- card left -->
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../img/Clean/institucionalJr.jpg" class="gallery-item" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/institucionalJumbo.webp" class="gallery-item" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/daliaJumbo.webp" class="gallery-item" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/daliaJr.jpg" class="gallery-item" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/bonina3.jpg" class="gallery-item" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/bonina3.1.jpg" class="gallery-item" alt="Image not available">
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../img/Clean/institucionalJr.jpg" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/institucionalJumbo.webp" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/daliaJumbo.webp" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/daliaJr.jpg" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/bonina3.jpg" class="gallery-item" alt="Image not available">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/Clean/bonina3.1.jpg" class="gallery-item" alt="Image not available">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

                <!-- card right -->
                <div class="product-content">
                    <h6><a href="#">Productos</a> / <a href="#">Higiénicos</a> / </h6>
                    <h2 class="product-tittle">Bobinas</h2>
                    <div class="line"></div>

                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>4.8(41)</span>
                    </div>

                    <div class="product-price">
                        <p class="last-price">Precio normal: <span>$437</span></p>
                        <p class="new-price">Aprovecha 10% de descuento: <span>$380</span></p>
                        <select class="my-3">
                            <option>Conoce nuestras lineas</option>
                            <option>Dalia</option>
                            <option>Institucional</option>
                            <option>Marli</option>
                        </select>
                        <!-- <input type="number" min="0" step="1" value="1" placeholder="Cantidad" id="quantity">
                                <button class="buy-btn">Agregar al carrito</button> -->
                    </div>

                    <div class="product-detail">
                        <h2>Descripción:</h2>
                        <div class="line"></div>
                        <p>Cajas con 6 o 12 rollos de toallas de papel color blanco. Ideal para la limpieza de cualquier superficie, es recomendable para uso doméstico e industrial, cocina, salón de clases, taller, hoteles, restaurantes.</p>

                        <ul>
                            <li><i id="check" class="fas fa-check-circle"></i> Disponibilidad: <span>En stock</span></li>
                            <li><i id="check" class="fas fa-check-circle"></i> Categoria: <span>Higiénicos</span></li>
                        </ul>
                    </div>

                    <div class="social-links">
                        <p>Siguenos en nuestras redes solciales: </p>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="footer">
        <p>2020-2023 Website by ESCORP Technologies | All rights reserved.</p>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="gallery-modal" class="gallery-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="../img/Clean/institucionalJr.jpg" alt="product image" class="modal-img">
                </div>

            </div>
        </div>
    </div>

    <!-- Swiper JS -->


    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 2,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>

    <script>
        /* Solo admitir enteros positivos en cantidad (desbloquear) */
        function filterInteger(evt, input) {
            // ASCII https://elcodigoascii.com.ar/
            // ‘0′ = 48, ‘9′ = 57, ‘-’ = 45
            // Backspace = 8, Enter = 13, NULL = 0
            var key = window.Event ? evt.which : evt.keyCode;
            var chark = String.fromCharCode(key);
            var tempValue = input.value + chark;
            if ((key >= 48 && key <= 57) /* || key == 45 */ ) {
                return filter(tempValue);
            } else {
                return key == 8 || key == 13 || key == 0;
            }
        }

        function filter(__val__) {
            // /^-?[0-9]*$/; // positivos y negativos
            // /^[0-9]*$/; // solo positivos
            var preg = /^[0-9]*$/;
            return preg.test(__val__);
        }

        document.getElementById('quantity').addEventListener('keypress', function(evt) {
            if (filterInteger(evt, evt.target) === false) {
                evt.preventDefault();
            }
        });
    </script>

    <script src="../js/slideProducts.js"></script>



</body>

</html>