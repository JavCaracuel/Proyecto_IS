<?php
require_once "conexionbbdd.php";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hipnos</title>
    <meta charset="utf-8" />
    <meta name="title" content="Inicio" />
    <meta name="description" content="Inicio" />
    <meta name="languaje" content="ES" />
    <meta name="author" content="Equipo A" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


    <script src="https://kit.fontawesome.com/3188e1e786.js" crossorigin="anonymous"></script>
    <script src="scripts/cookies.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <script type="text/javascript" src="scripts/cookies.js"></script>

</head>

<body>
    <!--//BLOQUE COOKIES-->
    <div id="barraaceptacion" style="display: block;">
        <div class="inner">
            Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real
            Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.
            <a href="javascript:void(0);" class="ok" onclick="ponerCookie();"><b>OK</b></a> |
            <a href="http://www.interior.gob.es/politica-de-cookies" target="_blank" class="info">Más información</a>
        </div>
    </div>
    <header>
        <img src="images/logo2.png" class="mx-auto d-block logo">

        <nav class="navbar navbar-expand-md navbar-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link activo" href="inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo.php">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- Desplegable para moviles -->
            <div class="mr-auto order-0">
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto d-md-none" href="#">HIPNOS</a>
            </div>
        </nav>
    </header>

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/carousel1.jpg" alt="First slide">
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/carousel2.jpg" alt="Second slide">
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/carousel3.jpg" alt="Third slide">
                    
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr class="separador">


        <div class="row promociones">
            <div class="col-12 justify-content-center" style="text-align: center;">
                <h1>Oferta del dia</h1>
            </div>
            <div class="col-12 justify-content-center" style="text-align: center;">
                <em>Una oferta increible para ti</em>
            </div>
            <div class="col-lg-4 col-md-6 oferta">
                <div class="cartel-oferta">
                    <p class="porcentaje-oferta">20%</p>
                    <span class="off">OFF</span>
                </div>
                <img class="w-100" src="images/galeria2-1.jpg">
                <div class="info-oferta">
                    <h3>Americana</h3>
                    <span class="precio-antiguo">320€</span>
                    <span class="precio-nuevo">256€</span>
                    <a id="boton-comprar-oferta" href="catalogo.html" class="boton-comprar-oferta">COMPRAR</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 oferta">
                <div class="cartel-oferta">
                    <p class="porcentaje-oferta">15%</p>
                    <span class="off">OFF</span>
                </div>
                <img class="w-100" src="images/galeria3-1.jpg">
                <div class="info-oferta">
                    <h3>Jersey</h3>
                    <span class="precio-antiguo">50€</span>
                    <span class="precio-nuevo">42.5€</span>
                    <a id="boton-comprar-oferta" href="catalogo.html" class="boton-comprar-oferta">COMPRAR</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 oferta">
                <div class="cartel-oferta">
                    <p class="porcentaje-oferta">20%</p>
                    <span class="off">OFF</span>
                </div>
                <img class="w-100" src="images/galeria22-1.jpg">
                <div class="info-oferta">
                    <h3>Chaqueta</h3>
                    <span class="precio-antiguo">120€</span>
                    <span class="precio-nuevo">96€</span>
                    <a id="boton-comprar-oferta" href="catalogo.html" class="boton-comprar-oferta">COMPRAR</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 oferta">
                <div class="cartel-oferta">
                    <p class="porcentaje-oferta">15%</p>
                    <span class="off">OFF</span>
                </div>
                <img class="w-100" src="images/galeria1-1.jpg">
                <div class="info-oferta">
                    <h3>Jersey</h3>
                    <span class="precio-antiguo">70€</span>
                    <span class="precio-nuevo">59.5€</span>
                    <a id="boton-comprar-oferta" href="catalogo.html" class="boton-comprar-oferta">COMPRAR</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 oferta">
                <div class="cartel-oferta">
                    <p class="porcentaje-oferta">25%</p>
                    <span class="off">OFF</span>
                </div>
                <img class="w-100" src="images/galeria6-1.jpg">
                <div class="info-oferta">
                    <h3>Pijama</h3>
                    <span class="precio-antiguo">90€</span>
                    <span class="precio-nuevo">67.5€</span>
                    <a id="boton-comprar-oferta" href="catalogo.html" class="boton-comprar-oferta">COMPRAR</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 oferta">
                <div class="cartel-oferta">
                    <p class="porcentaje-oferta">20%</p>
                    <span class="off">OFF</span>
                </div>
                <img class="w-100" src="images/galeria7-1.jpg">
                <div class="info-oferta">
                    <h3>Polo</h3>
                    <span class="precio-antiguo">70€</span>
                    <span class="precio-nuevo">66€</span>
                    <a id="boton-comprar-oferta" href="catalogo.html" class="boton-comprar-oferta">COMPRAR</a>
                </div>
            </div>
        </div>


    </main>

    <footer>
        <div class="container">
            <div class="d-flex flex-column">
                <div class="p-2">
                    <h3>Hipnos</h3>
                </div>
                <div class="p-2">
                    <p>Ropa de calidad inspirada en los iconos de la moda del siglo XX con la autenticidad y el cuidado a los detalles como principio. La marca combina su profundo conocimiento de las prendas históricas con un irrefrenable deseo de innovar. El resultado son colecciones de moda actual con un aire old school que resulta muy familiar. Piezas de calidad con un trasfondo cultural. Ropa auténtica para personas auténticas.</p>
                </div>
                <div class="d-flex flex-row justify-content-center">
                    <div class="p-2"><i class="fab fa-instagram"></i></div>
                    <div class="p-2"><i class="fab fa-youtube"></i></div>
                    <div class="p-2"><i class="fab fa-twitter"></i></div>
                    <div class="p-2"><i class="fab fa-facebook"></i></div>
                </div>
                <div class="p-2">© 2019 Copyright: <a href="inicio.html">Hipnos.com</a></div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>