<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $edad = $_GET["edad"];
    echo "Dentro de 10 años tendrás: ". $edad+10;
    echo "<br>Hace 10 años tenías: ". $edad-10;

    $anio_actual = date("Y");
    $edad_jubilacion = 67;
    $anio_jubilacion = $anio_actual+($edad_jubilacion-$edad);
    
    echo "<br>Te jubilarás en el año: ". $anio_jubilacion;
    ?>
</body>
</html>