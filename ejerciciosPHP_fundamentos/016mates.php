<?php

$numeros = [];

$media = 0;
for ($i = 0; $i < 33; $i++) {
    $numeros[] = rand(0, 100);
}
$mayor = $numeros[0];
$menor = $numeros[0];

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] > $mayor) {
        $mayor = $numeros[$i];
    } elseif ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    }
    $media += $numeros[$i];
}
$media /= count($numeros);

echo $mayor;
echo "<br>";
echo $menor;
echo "<br>";
echo $media;
