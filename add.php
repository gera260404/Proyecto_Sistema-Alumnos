<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
    <link rel="stylesheet" href="css/add.css" type="text/css">
    <link rel="stylesheet" href="css/volver.css" type="text/css">
</head>
<body>

    <?php
    $conexion=mysqli_connect("localhost","gera","gera","aw") or die("Problemas con la conexion");

        mysqli_query($conexion, "insert into alumnos(nombre, email, codigocurso) values ('$_REQUEST[nombre]', '$_REQUEST[mail]',        '$_REQUEST[codigocurso]')") 
        or die("Problemas en el insert:".mysqli_error($conexion));
    ?>

    
        <label for="mensaje">
            <h1>El alumno fue dado de alta</h1>
        </label>
  

    <?php
        mysqli_close($conexion);
    ?>


    <div class="volver">
        <a href="index.html" class="btn-volver">Volver</a>
    </div>
</body>
</html>