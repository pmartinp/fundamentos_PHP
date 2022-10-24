<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = $_GET["nombre"];
    $primer_apellido = $_GET["primer_apellido"];
    $segundo_apellido = $_GET["segundo_apellido"];
    $email = $_GET["mail"];
    $fecha_nacimiento = $_GET["fecha_nacimiento"];
    $movil = $_GET["movil"];
    ?>

    <table>
        <thead>
            <th colspan="2">Alumno</th>
        </thead>
        <tbody>
            <tr>
                <td>Nombre</td>
                <td><?= $nombre?></td>
            </tr>
            <tr>
                <td>apellidos</td>
                <td><?= $primer_apellido . $segundo_apellido?></td>
            </tr>
            <tr>
                <td>email</td>
                <td><?= $email?></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento</td>
                <td><?= $fecha_nacimiento?></td>
            </tr>
            <tr>
                <td>telefono</td>
                <td><?= $movil?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>