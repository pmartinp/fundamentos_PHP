<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tbody>
            <?php

            $filas = $_GET["filas"];
            $columnas = $_GET["columnas"];

            for ($i = 1; $i <= $filas; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $columnas; $j++) {
                    if ($i < 2 || $j < 2 || $i == $filas || $j == $columnas) {
                        echo "<td>" . $i . "-" . $j . "</td>";
                    }else{
                        echo "<td> </td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>