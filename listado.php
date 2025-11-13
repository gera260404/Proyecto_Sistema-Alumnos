<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
    <link rel="stylesheet" href="css/listado.css" type="text/css">
    <link rel="stylesheet" href="css/volver.css" type="text/css">
</head>
<body>
    <div class="container">
        <h1>Listado de Alumnos</h1>

    <div class="table">
        <table>
            <thead>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Mail</th>
                    <th>Curso</th>
            </thead>
            <tbody>
               
                <?php
                $conexion = mysqli_connect("localhost","gera","gera","aw") or
                    die("Problemas con la conexion");

                $registros = mysqli_query($conexion, "select codigo, nombre, email, codigocurso from alumnos") or
                    die("Problemas en el select:" . mysqli_error($conexion));

                while ($reg = mysqli_fetch_array($registros))
                {
                    echo "<tr>";
                    echo "<td>" . $reg['codigo'] . "</td>";
                    echo "<td>" . $reg['nombre'] . "</td>";
                    echo "<td>" . $reg['email'] . "</td>";
                    echo "<td>";
                    switch ($reg['codigocurso']){
                        case 1:echo "PHP";
                            break;
                        case 2:echo "ASP";
                            break;
                        case 3:echo "JSP";
                            break;
                    }
                    echo "</td>";
                    echo "</tr>";
                }

                mysqli_close($conexion);
                ?>
               
            </tbody>
        </table>
    </div>
    <div class="volver">
        <a href="index.html" class="btn-volver">Volver</a>
    </div>
</body>
</html>