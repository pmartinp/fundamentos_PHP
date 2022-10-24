<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th>Producto</th>
            <th>€/U</th>
            <th>Pes/U></th>
            <th>Cantidad</th>
            <th>Total €</th>
            <th>Total pesetas</th>
        </thead>
        <tbody>
            <?php
            include_once("018preparaTique.php");

            foreach ($productos as $x => $valor) {
                echo "<tr>";
                echo "<td>" . $x . "</td>";
                echo "<td>" . $valor[0] . "</td>";
                echo "<td>" . $valor[1] . "</td>";
                echo "<td>" . $_GET["cant".$x] . "</td>";
                echo "<td>" . ($valor[0] * $_GET["cant".$x]) . "</td>";
                echo "<td>" . ($valor[1] * $_GET["cant".$x]) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>