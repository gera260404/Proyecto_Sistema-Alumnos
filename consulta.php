<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
    <link rel="stylesheet" href="css/consulta.css" type="text/css">
    <link rel="stylesheet" href="css/volver.css" type="text/css">
</head>
<body>
    <h2>Resultado de la consulta:</h2>
    <br><br>    
    <?php
    $conexion = mysqli_connect("localhost","gera","gera","aw") or 
        die("Problemas con la conexion");

    $registros = mysqli_query($conexion, "select codigo, nombre, codigocurso from alumnos where email='$_REQUEST[mail]'") or 
        die("Problemas en el select:" . mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registros))
        {
    ?>  
    <label for="Nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $reg['nombre']; ?>" readonly>
    <br><br>
    <label for="Curso">Curso:</label>
    <?php
            switch ($reg['codigocurso']){
                case 1:
                    $curso = "PHP";
                    break;
                case 2:
                    $curso = "ASP";
                    break;
                case 3:
                    $curso = "JSP";
                    break;
                default:
                    $curso = "Desconocido";
            }
    ?>
    <input type="text" name="curso" value="<?php echo $curso; ?>" readonly>
<?php
        } else{
            echo "No existe un alumno con ese mail";
        }
    ?>

    <div class="volver">
        <a href="consulta.html" class="btn-volver">Volver</a>
    </div>
</body>
</html>