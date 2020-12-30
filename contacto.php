<?php session_start();
    if (isset($_SESSION['name'])) {
        $nombreRecogido = $_SESSION['name'];
    } else $nombreRecogido = "";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hipnos</title>
    <meta charset="utf-8" />
    <meta name="title" content="Contacto" />
    <meta name="description" content="Contacto" />
    <meta name="languaje" content="ES" />
    <meta name="author" content="Pablo Alcaźar" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="scripts/cookies.js"></script>

    <script src="https://kit.fontawesome.com/3188e1e786.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/general.css">

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

        <div class="row justify-content-end">
            
            <div class="col-xs-1 col-xs-push-2 col-sm-push-3 col-md-push-4 col-lg-push-5" style="font-size: 20px;">
                
                <a href="IniciarSesion.php" class="btn btn-info" id="sesion" value= "Iniciar sesion" onclick="">Iniciar sesion/Registrarse
                </a>
                
            </div>
            <div class="col-xs-1 col-xs-push-4 col-sm-push-5 col-md-push-5 col-lg-push-6" id="cerrarSesion" onclick="logout();" hidden="true" style="padding-left:20px; font-size: 20px; ">
                <a href="index.php" class="btn btn-danger" >Cerrar sesion</a>
            </div>

        </div>

        <nav class="navbar navbar-expand-md navbar-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo.php">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link activo" href="contacto.php">Contacto</a>
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
        
        <div class="container contacto">
            <iframe class="w-100 mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.230146494992!2d-3.6895883843140305!3d40.4259024793641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228972b76fb59%3A0xa8bffc319deb286b!2sCalle%20de%20Serrano%2C%2038%2C%2028001%20Madrid!5e0!3m2!1ses!2ses!4v1575737187069!5m2!1ses!2ses" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <div class="row">
                <div class="col-sm-6">
                    <img class="w-100" src="images/galeria19-1.jpg">
                </div>
                <div class="col-sm-6">
                    <h3>Información de contacto:</h3>
                    <p>Estamos siempre disponibles para ayudarte ante cualquier problema.</p>
                    <table>
                        <tr>
                            <th>Direccion: </th>
                            <td>Calle de Serrano, 38, 28001 Madrid</td>
                        </tr>
                        <tr>
                            <th>Telefono: </th>
                            <td>625544554</td>
                        </tr>
                        <tr>
                            <th>Email: </th>
                            <td>hipnos@gmail.com</td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr class="separador">
            <div class="row justify-content-center">
                <div class="formulario">
                    <h3>Formulario de contacto:</h3>
                    <form action="https://postman-echo.com/get" method="GET">
                        <table>
                            <tr >
                                <td><em>Nombre:*</em></td>
                            </tr>
                            <tr>
                                <td><input class="nuevoInput" type="text" name="usuario" required/></td>
                            </tr>
                            <tr >
                                <td><em>Email:*</em></td>
                            </tr>
                            <tr>
                                <td><input  class="nuevoInput" type="email" name="email" required/></td>
                            </tr>
                            <tr>
                                <td><em>Aceptar condiciones:*</em></td>
                            </tr>
                            <tr>
                                <td><input class="nuevoInput" type="checkbox" name="condiciones" required value="condicionesAceptadas"/></td>
                            </tr>
                            <tr>
                                <td><em>Recibir informacion:</em></td>
                            </tr>
                            <tr>
                                <td><input class="nuevoInput" type="checkbox" name="informacion" value="recibeInformacion"/></td>
                            </tr>
                            <tr>
                                <td><em>Mensaje:*</em></td>
                            </tr>
                            <tr>
                                <td><textarea class="nuevoInput" name="mensaje" rows="10" cols="90" required></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="enviar" value="Enviar"/></td>
                            </tr>
                        </table>
                    </form>
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
                <div class="p-2">© 2020 Copyright: <a href="inicio.php">Hipnos.com</a></div>
            </div>
        </div>
    </footer>

    <script>
    //Si viene de crear una cuenta o iniciar sesion el boton cambia y le da la bienvenida al usuario    
    if (<?php echo $nombreRecogido != "" ?>) {
      $("#sesion").html("Bienvenido <?php echo $nombreRecogido ?>");
      $('#sesion').click(function() {
        return false;
      });
      $('#cerrarSesion').removeAttr('hidden');

    }

    //Llamamos a un archivo externo para ejecutar la funcion de cerrar sesion
    function logout() {
      var xhr = new XMLHttpRequest();
      xhr.onload = function() {
        document.location = 'index.php';
      }
      xhr.open('GET', 'logout.php', true);
      xhr.send();
    }
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>