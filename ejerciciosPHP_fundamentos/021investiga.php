<?php

$cadena="soy una cadena de prueba";

//la función ucwords() convierte la primera letra de cada palabra en mayúscula
echo ucwords($cadena);
echo "<br>";
// la función strrev() le da la vuelta a la cadena
echo strrev($cadena);
echo "<br>";
// la función str_repeat() repite la cadena el número de veces que le indiquemos
echo str_repeat($cadena, 2);
echo "<br>";
// la función md5 cifra la cadena que le pasemos
echo md5($cadena);
?>