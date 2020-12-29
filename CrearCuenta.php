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
    
    .tablaError{
        border: 2px solid #b92c28;
        width: 100%;
        padding-top: 10px;
        margin-bottom: 15px;
    }
    .tabla{
        border: 1px solid gainsboro;
        width: 100%;
    }
    td{
        padding-left: 25%;
    }
    img{
        padding-bottom: 20px;
    }
   
    
</style>

</head>
<body>
        
        
        
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4 col-xs-offset-4">
                    <a href="index.php">
                        <img src="images/logo2.png" alt="" style="width: 100%; height: 100%;"/>
                    </a>
                </div>
                <div class="col-xs-4 col-xs-offset-4" hidden="true;" id="error" >
                    <table class="tablaError">
                        <tr><td style="color: #b92c28; font-size: large; padding-top: 10px;">Ha surgido un problema</td></tr>
                        <tr><td style="padding-bottom: 10px;">Debes rellenar todos los campos</td></tr>
                    </table>
                </div>
                <div class="col-xs-4 col-xs-offset-4" hidden="true;" id="errorEmail" >
                    <table class="tablaError">
                        <tr><td style="color: #b92c28; font-size: large; padding-top: 10px;">Ha surgido un problema</td></tr>
                        <tr><td style="padding-bottom: 10px;">Ya existe una cuenta</td></tr>
                    </table>
                </div>
            </div>
            <div class="row" >
                <div class="col-xs-4 col-xs-offset-4 ">
                    
                    <form name="form1" method="post" action="#">
                        
                        <table class="tabla">
                            <tr><td><h3>Crear cuenta</h3></td></tr> 
                            
                            <tr><td>Nombre</td></tr>
                            <tr><td><input type="text" name="name"></td></tr>    
                                
                            <tr><td>Correo electrónico</td></tr>
                            <tr><td><input type="email" name="email"></td></tr>
                            
                            <tr><td>Contraseña</td></tr>
                            <tr><td><input type="password" name="password"></td></tr>
                            
                            <tr>
                                <td><input type="submit" name="enviar" id="enviar" value="Enviar">
                                <input type="reset" name="Borrar" id="Borrar" value="Borrar"   style="margin-top: 10px; margin-bottom: 20px;"></td>
                            </tr>
                            
                            
                            
                            <tr><td style="padding-bottom: 20px; margin-top: 20px;">¿Ya tiene una cuenta?
                            <a href="IniciarSesion.php">Inicia sesion</a></td></tr>
                            
                        </table>
                        
                        
                    </form>
                    
                </div>
            </div>
            
        </div>
        
        
        
        <?php
        include 'conbbdd.php';
        
            
            
        
        $name = $_POST['name'];
        $email = $_POST['email'];       
        $password = $_POST['password'];
        
        if($email != "" && $name != "" && $password != ""){
               
            $busqueda = "SELECT `email` FROM `usuarios` WHERE email = '$email'";
            
            //Si ya existe ese correo no deja crear un usuario
            
            $resultados = mysqli_query($conexion, $busqueda);
            
            
            // No existe el usuario
            if($resultados->num_rows === 0){
                $insertar = "INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `direccion`, `email`, `password`) VALUES (NULL, '$name', '', NULL, '$email', '$password');";
                mysqli_query($conexion, $insertar);
                echo"<script>window.location='inicio.php'</script>;";
                session_start();
                $_SESSION['name']=$name; 

            }else if ($resultados->num_rows > 0){
                echo"<script>$('#error').show();</script>;";
            }

        }else{
            echo"<script>$('#error').show();</script>;";
        }
               
            
               
        if($_POST['enviar'] && ($email == "" || $name == "" || $password == "")){
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