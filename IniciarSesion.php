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
    <style>

    
</style>

</head>
<body>
        
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-4 col-xs-offset-4 col-xs-offset-4">
                    <a href="inicio.php">
                        <img src="images/logo2.png" alt="" style="width: 100%; height: 100%;"/>
                    </a>
                </div>
                <div class="col-xs-4 col-xs-offset-4" hidden="true;" id="error" >
                    <table class="tablaError">
                        <tr><td style="color: #b92c28; font-size: large; padding-top: 10px;">Ha surgido un problema</td></tr>
                        <tr><td style="padding-left: 15%; padding-bottom: 10px;">El correo o la contraseña son incorrectos</td></tr>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center" >
                <div class="col-xs-4 col-xs-offset-4 ">
                    
                    <form name="form1" method="post" action="#">
                        
                        <table class="tabla">
                            <tr><td><h3>Iniciar sesión</h3></td> 
                                
                            <tr><td>Dirección de e-mail </td></tr>
                            <tr><td><input type="email" name="email"></td></tr>
                            
                            <tr><td>Contraseña</td></tr>
                            <tr><td><input type="password" name="password"></td></tr>
                            
                            <tr>
                                <td><input  class="btn btn-success" type="submit" name="enviar" id="enviar" value="Iniciar sesion" style="width: 62%; margin-bottom: 20px; margin-top: 10px; "></td>
                            </tr>
                           
                            
                            <tr><td style=" padding-bottom:2px;">¿Eres un cliente nuevo?</td></tr>
                            <tr><td style=" padding-bottom: 20px;"><a href="CrearCuenta.php" class="btn btn-info">Crea tu cuenta</a></td></tr>
                            
                        </table>
                        
                        
                    </form>
                    
                </div>
            </div>
            
        </div>
        
        
        <?php
        
        include 'conbbdd.php';
        
        
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }else $email = "";
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        } else $password = "";
        

        // if ($_POST['email'] == "") {
        //     $email = " ";
        // }
        // if ($_POST['password'] == "") {
        //     $password = " ";
        // }



        $consulta = "SELECT `email`, `nombre`, `password` FROM `usuarios` WHERE email = '$email' AND password = '$password' ";
        $resultados = mysqli_query($conexion, $consulta) or  die(mysqli_error($conexion));
            
        $fila = mysqli_fetch_row($resultados);
            
            
           if($fila && $email != ""){
               echo"<script>window.location='inicio.php'</script>;";
               session_start();
               $name = $fila[1];
               $_SESSION['name']=$name;
           }
           
           
           if($email != "" && !$fila){
               echo"<script>$('#error').show();</script>;";
           }
               
           
           
            mysqli_close($conexion);
        
        
        ?>
        
        
        
        
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>