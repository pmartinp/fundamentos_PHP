<?php

function digitos(int $num): int
{
    return intval(strlen($num));
}

function digitoN(int $num, int $pos): int
{
    return intval(substr($num, $pos - 1, 1));
}

function quitaPorDetras(int $num, int $cant): int
{
    return intval(substr($num, 0, -$cant));
}

function quitaPorDelante(int $num, int $cant): int
{
    return intval(substr($num, $cant));
}

echo digitos(236);
echo "<br>";
echo digitoN(19237584, 3);
echo "<br>";
echo quitaPorDetras(19237584, 3);
echo "<br>";
echo quitaPorDelante(19237584, 3);
