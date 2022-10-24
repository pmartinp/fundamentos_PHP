<?php
$edad = $_GET["edad"];

switch ($edad) {
    case ($edad <= 3):
        echo "bebé";
        break;
    case ($edad <= 12):
        echo "niño";
        break;
    case ($edad <= 17):
        echo "adolescente";
        break;
    case ($edad <= 67):
        echo "adulto";
        break;
    default:
        echo "jubilado";
        break;
}
