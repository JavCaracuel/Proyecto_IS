<?php session_start();
    if (isset($_SESSION['name'])) {
        $nombreRecogido = $_SESSION['name'];
    } else $nombreRecogido = "";
?>



<?php
include 'conbbdd.php';

if (isset($_GET['id_producto'])) {

  if (compruebaStock($_GET['id_producto'])) {
    echo insertaventa($_GET['id_producto']);
?><script>alert('Producto comprado correctamente');</script>
<?php
  } else {
?><script>alert('No se ha podido realizar la compra, no hay stock suficiente.');</script>
<?php
  }
}






//$sql = "SELECT * FROM `productos`";
$resultado = $conexion->query("SELECT * FROM `productos`  ORDER BY `productos`.`genero`  DESC, `productos`.`id_producto`  ASC;");












function siguiente()
{
  global $resultado;
  $row = $resultado->fetch_assoc();
  echo  $row["nombre"] . ".<br> Precio:" . $row["precio"] . "€.<br> Stock:" . $row["stock"];
}


function insertaventa($_id_producto)
{

  global $conexion;
  $id_usuario = 1;
  //Consulta para insertar nueva venta cuando pulsamos botón comprar:
  //query(INSERT INTO `ventas`(`id_producto`, `id_usuario`) VALUES (id_producto,id_usuario)); //(el valor fecha se pone automaticamente)  

  $sqlinsert = "INSERT INTO `ventas`(`id_producto`, `id_usuario`) VALUES ( " . $_id_producto . ", " . $id_usuario . ")";

  if ($conexion->query($sqlinsert) === TRUE) {
    //echo "New record created successfully";
  } else {
    //echo "Error: " . $sqlinsert . "<br>" . $conexion->error;
  }
}

function compruebaStock($_id_producto)
{
  global $conexion;
  $id_usuario = 1;
  //Consulta para comprobar que hay stock para una nueva venta cuando pulsamos botón comprar:

  $sql_stock = "SELECT * FROM productos WHERE id_producto = " . $_id_producto . "";
  $resultado1 = $conexion->query($sql_stock);

  $row1 = $resultado1->fetch_assoc();

  if (intval($row1['stock']) > 1) {
    return TRUE;
  } else {
    return FALSE;
  }
}

?>

<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>Hipnos</title>
  <meta charset="utf-8" />
  <meta name="title" content="Catalogo" />
  <meta name="description" content="Catalogo" />
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

        <a href="IniciarSesion.php" class="btn btn-info" id="sesion" value="Iniciar sesion" onclick="">Iniciar sesion/Registrarse
        </a>

      </div>
      <div class="col-xs-1 col-xs-push-4 col-sm-push-5 col-md-push-5 col-lg-push-6" id="cerrarSesion" onclick="logout();" hidden="true" style="padding-left:20px; font-size: 20px; ">
        <a href="index.php" class="btn btn-danger">Cerrar sesion</a>
      </div>

    </div>

    <nav class="navbar navbar-expand-md navbar-light">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  activo" href="catalogo.php">Catalogo</a>
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

    <div class="container">
      <div class="row galeria w-100">
        <a href="#mujeres" class="no-dec d-sm-none" style="padding-left: 28%;">
          <p><span id="mujeres" class="categoriaRopa">Chaquetas</span></p>
        </a>
        <div class="col-sm-6 col-md-6 col-lg-6 galeria-item"><img src="images/galeria-mujer.jpg"></div>
        <div class="col-sm-6 col-md-6 col-lg-6 galeria-item">
          <a href="#mujeres" class="no-dec d-none d-sm-block">
            <p><span id="mujeres" class="categoriaRopa">Chaquetas</span></p>
          </a>
          <div class="row lista-top">
            <div class="col-md-6 col-lg-6 d-none d-md-block"> <img src=" images/galeria1-1.jpg"   id=1><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=1" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
            <div class=" col-md-6 col-lg-6 d-none d-md-block"><img src="images/galeria3-1.jpg"   id=2><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=2" class="boton-comprar-producto">COMPRAR</a>
            </div></div>

          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6  d-none d-md-block"><img src="images/galeria22-1.jpg"   id=3><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=3" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
            <div class="col-md-6 col-lg-6  d-none d-md-block"><img src="images/galeria30-1.jpg"   id=4><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=4" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
          </div>
        </div>
        <div class="col-12 justify-content-center"><span class="categoriaRopa">Camisetas</span></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria17-1.jpg"   id=9><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=9" class="boton-comprar-producto">COMPRAR</a>
            </div></div>

        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria14-1.jpg"   id=10><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=10" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria32-1.jpg"   id=11><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=11" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria15-1.jpg"   id=12><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=12" class="boton-comprar-producto">COMPRAR</a>
            </div></div>

        <div class="col-12 justify-content-center"><span class="categoriaRopa">Complementos</span></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria9-1.jpg"   id=17><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=17" class="boton-comprar-producto">COMPRAR</a>
            </div></div>

        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria12-1.jpg"   id=18><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=18" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria8-1.jpg"   id=19><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=19" class="boton-comprar-producto">COMPRAR</a>
            </div></div>

        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria20-1.jpg"   id=20><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=20" class="boton-comprar-producto">COMPRAR</a>
            </div></div>


        <div class="col-sm-6 col-md-6 col-lg-6 galeria-item">
          <a href="#hombres" class="no-dec">
            <p><span id="hombres" class="categoriaRopa">Chaquetas</span></p>
          </a>
          <div class="row lista-top">
            <div class="col-md-6 col-lg-6 d-none d-sm-block"><img src="images/galeria2-1.jpg"   id=5><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=5" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
            <div class="col-md-6 col-lg-6 d-none d-md-block"><img src="images/galeria10-1.jpg"   id=6><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=6" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
          </div>
          <div class="row">

            <div class="col-md-6 col-lg-6 d-none d-md-block"><img src="images/galeria16-1.jpg"   id=7><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=7" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
            <div class="col-md-6 col-lg-6 d-none d-md-block"><img src="images/galeria25-1.jpg"   id=8><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=8" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 galeria-item"><img src="images/galeria-hombre.jpg"></div>
        <div class="col-12 justify-content-center"><span class="categoriaRopa">Camisetas</span></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria6-1.jpg"   id=13><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=13" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria7-1.jpg"   id=14><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=14" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria19-1.jpg"   id=15><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=15" class="boton-comprar-producto">COMPRAR</a>
            </div></div>

        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria26-1.jpg"   id=16><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=16" class="boton-comprar-producto">COMPRAR</a>
            </div></div>



        <div class="col-12 justify-content-center"><span class="categoriaRopa">Complementos</span></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria13-1.jpg"   id=21><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=21" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria18-1.jpg"   id=22><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=22" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria21-1.jpg"   id=23><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=23" class="boton-comprar-producto">COMPRAR</a>
            </div></div>
        <div class="col-sm-6 col-md-3 col-lg-3 galeria-item"><img src="images/galeria23-1.jpg"   id=24><div class="info-oferta">
                    <?php siguiente(); ?>
                    <a id="boton-comprar-oferta" href="catalogo.php?id_producto=24" class="boton-comprar-producto">COMPRAR</a>
            </div></div>


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
        <div class="p-2">© 2020 Copyright: <a href="index.php">Hipnos.com</a></div>
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