<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $database = "eac_prueba";
            $username = "root";
            $password = "root";
    
    
    
            $conexion  = mysqli_connect($servername, $username, $password, $database);
            
    
            mysqli_select_db($conexion, $database) or die ("no se encuentra la bbdd");
            
           
        ?>
    </body>
</html>
