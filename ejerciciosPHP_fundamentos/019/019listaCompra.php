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
            include_once("019preparaCompra.php");

            foreach ($productos as $x => $valor) {
                echo "<ul>";
                echo "<li>" . $x . "</li>";
                echo "<ul>";
                echo "<li>" . $valor[0] . " €/u</li>";
                echo "<li>" . $valor[1] . " Pes/u</li>";
                echo "<li>" . $_GET["cant".$x] . " unidades</li>";
                echo "<li>" . ($valor[0] * $_GET["cant".$x]) . " €</li>";
                echo "<li>" . ($valor[1] * $_GET["cant".$x]) . " Pes</li>";
                echo "</ul>";
                echo "</ul>";
            }
            ?>
            
</body>

</html>