<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
    <link rel="stylesheet" href="css/volver.css">
    <link rel="stylesheet" href="css/actualizar.css">
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost","gera","gera","aw") or 
        die("Problemas con la conexion");

        mysqli_query($conexion, "update alumnos set email='$_REQUEST[mailnuevo]' where email='$_REQUEST[mailviejo]'") or 
            die("Problemas en el select:" . mysqli_error($conexion));

    echo " <h2> El email fue modificado con éxito</h2>"; 
    ?>

     <div class="volver">
        <a href="index.html" class="btn-volver">Volver</a>
    </div>
</body>
</html>