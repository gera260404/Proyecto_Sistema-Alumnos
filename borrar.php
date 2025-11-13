<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost","gera","gera","aw") or 
        die("Problemas con la conexion");

    $registros = mysqli_query($conexion, "select codigo from alumnos where email='$_REQUEST[mail]'") or 
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) 
    {
        mysqli_query($conexion, "delete from alumnos where email='$_REQUEST[mail]'") or 
            die("Problemas en el select:" . mysqli_error($conexion));  
    echo "Se efectuó el borrado del alumno con dicho mail.";

}
else
{
    echo "No existe un alumno con ese mail";
}
    ?>
</body>
</html>