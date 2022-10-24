<?php
$dinero = $_GET["dinero"];
$divisa = [100, 50, 20, 10, 5, 2, 1];

for ($i = 0; $i < count($divisa); $i++) {
    $billetes = intdiv($dinero, $divisa[$i]);
    echo $billetes . " billetes de " . $divisa[$i] . "<br>";
    $dinero -= $billetes * $divisa[$i];
}
