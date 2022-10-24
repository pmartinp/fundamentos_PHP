<?php

$contenedor = [];

for ($i = 0; $i < 100; $i++) {
    if (rand(0,1) == 1) {
        $contenedor[] = "M";
    } else {
        $contenedor[] = "F";
    }
}
$diccionario["M"] = 0;
$diccionario["F"] = 0;

for ($i = 0; $i < count($contenedor); $i++) {
    $diccionario[$contenedor[$i]] += 1;
}

var_dump($diccionario);
