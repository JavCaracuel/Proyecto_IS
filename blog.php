<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>Hipnos</title>
  <meta charset="utf-8" />
  <meta name="title" content="Blog" />
  <meta name="description" content="Blog" />
  <meta name="languaje" content="ES" />
  <meta name="author" content="Pablo Alcaźar" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <script src="https://kit.fontawesome.com/3188e1e786.js" crossorigin="anonymous"></script>
  <script src="scripts/cookies.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="styles/general.css">

</head>

<body>

  <?php //Recibir si proviene de crear cuenta o iniciar sesio
                  //y asi porder mostrar su nombre
    session_start();
    $nombreRecogido =$_SESSION['name'];
          
  ?>

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
            <a class="nav-link" href="inicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalogo.php">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link activo" href="blog.php">Blog</a>
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
    <div class="container">
      <div class="articulo w-100">
        <div class="row">
          <span class="fecha_blog"><span class="dia">4</span><span class="mes">Dic</span></span>
          <h2 class="art-titulo">Adios al frio</h2>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-5 col-xl-6"><img src="images/blog1.jpg" class="w-100"></div>
          <div class="col-md-12 col-lg-7 col-xl-6">
            <p>Todos hemos sentido alguna vez la desagradable sensación de tener el frío calado en los huesos. En esas circunstancias, nuestro cuerpo tarda un tiempo largo en volver a recomponerse e ir entrando en calor. Por eso, ahora que el frío acecha sin piedad o está empezando a hacerlo, es conveniente recordar qué hay que evitar en nuestra vestimenta para hacer frente a las bajas temperaturas.

              Elegir el material y el tejido adecuado, desestimar ciertas prendas en función de la temperatura o invertir en un buen calzado serán clave para que salgamos abrigados a la calle sin temer que el frío se apodere de nosotros sin compasión.</p>
          </div>
        </div>
      </div>

      <div class="articulo w-100">
        <div class="row justify-content-end art-der">
          <span class="fecha_blog"><span class="dia">24</span><span class="mes">Nov</span></span>
          <h2 class="art-titulo">Encarando las navidades</h2>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-5 col-xl-6 order-2"><img src="images/blog2.jpg" class="w-100"></div>
          <div class="col-md-12 col-lg-7 col-xl-6 order-1">
            <p>Con el inicio del mes de diciembre empieza la cuenta atrás para la celebración de la Navidad, el momento del año en que las fiestas se suceden unas tras otras.

              Cenas de empresa, con amigos, la comida de Navidad o Nochevieja, etc. muchos son los compromisos a los que nos apetece acudir de punta en blanco para brillar como nunca.Las firmas 'low cost' de moda nos lo ponen cada vez más fácil, porque de hecho ya han sacado a la venta sus colecciones especiales para estas fiestas de Navidad, para poder ir eligiendo modelito.Las lentejuelas, los brillos, las transparencias y el terciopelo son sin duda las grandes protagonistas para esas noches tan especiales</p>
          </div>
        </div>
      </div>

      <div class="articulo w-100">
        <div class="row">
          <span class="fecha_blog"><span class="dia">21</span><span class="mes">Nov</span></span>
          <h2 class="art-titulo">Set de invierno</h2>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-5 col-xl-6"><img src="images/blog3.jpg" class="w-100"></div>
          <div class="col-md-12 col-lg-7 col-xl-6">
            <p>Definitivamente ha llegado el invierno más frío y, tanto si te vas a quedar en casa como si vas a viajar durante las próximas fiestas, necesitas abrigarte bien. Los abrigos tendencia ya los hemos fichado (también la parka de moda que llevan las neoyorkinas), pero aún nos queda complementarlos con los accesorios óptimos.

              Por eso hemos hecho la selección por ti y hemos encontrado los gorros, guantes, bufandas y también sets más especiales en nuestras tiendas de referencia. Son los más prácticos y, por eso, los más vendidos entre sus usuarios y van a hacer de tu estilismo de invierno todo un acierto. </p>
          </div>
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
         if(<?php echo $nombreRecogido != "" ?>){
            $("#sesion").html("Bienvenido <?php echo $nombreRecogido ?>");
            $('#sesion').click(function () {return false;});
            $('#cerrarSesion').removeAttr('hidden');
           
         }
         
         //Llamamos a un archivo externo para ejecutar la funcion de cerrar sesion
         function logout() {
            var xhr = new XMLHttpRequest();
            xhr.onload = function() {
                document.location = 'inicio.php';
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