<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar correo</title>
    <link rel="stylesheet" href="css/actualizar.css" type="text/css">
    <link rel="stylesheet" href="css/volver.css" type="text/css">
</head>
<body>
    <div class="actualizar-container">
        <div class="actualizar-card">
            <div class="volver">
                <?php

                $conexion = mysqli_connect("localhost","gera","gera","aw") or 
                    die("Problemas con la conexion");

                $registros = mysqli_query($conexion, "select * from alumnos where email='$_REQUEST[mail]'") or 
                    die("Problemas en el select:" . mysqli_error($conexion));
                if ($reg = mysqli_fetch_array($registros)) 
                {
                ?>
                <h1>Alumno encontrado</h1>
                <form action="update.php" method="post">
                    <h2>Ingrese nuevo mail:</h2>
                    <input type="email" name="mailnuevo" value="<?php echo $reg['mail']; ?>"> 
                    <br>
                    <input type="hidden" name="mailviejo" value="<?php echo $reg['mail']; ?>">
                    <br>
                    <input type="submit" value="Modificar">
                </form> <br>
                <a href="actualizar.html" class="btn-volver">Volver</a>
            </div>
        </div>
    </div>

    <?php
    } 
    else {     
        echo " <h2>No existe un alumno con ese mail</h2>";
    }
    ?>
    <div class="volver">
        <a href="actualizar.html" class="btn-volver">Volver</a>
    </div>

</body> 
</html>