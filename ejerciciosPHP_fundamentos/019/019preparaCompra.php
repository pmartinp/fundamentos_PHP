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
    include_once("header.php");
    ?>
    <form action="019listaCompra.php" method="get">
        <?php
        $eur_a_pes = 166;

        $productos["Tomate"] = [5, 5 * $eur_a_pes];
        $productos["Pera"] = [8, 8 * $eur_a_pes];
        $productos["Pizza"] = [3, 3 * $eur_a_pes];

        foreach ($productos as $x => $valor) {
            echo "<label for='Producto'>" . $x . ":</label>
            <input type='number' id='cant" . $x . "' name='cant" . $x . "'><br>";
        }

        ?>
        <input type="submit" value="Enviar">
    </form>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>