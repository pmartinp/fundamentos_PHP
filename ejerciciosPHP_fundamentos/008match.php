<?php
/*
La función de la expresión match es similar a la del switch,
pero tiene ciertas diferencias.
1. Compara que los valores estrictamente en vez de forma suelta
2. match retorna un valor
3. No pasan a casos posteriores
4. Debe ser completa
*/
$edad = 23;

$result = match (true) {
    $edad >= 65 => 'senior',
    $edad >= 25 => 'adult',
    $edad >= 18 => 'young adult',
    default => 'kid',
};

var_dump($result);
