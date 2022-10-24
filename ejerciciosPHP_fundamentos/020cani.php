<?php

function cadenaCani(string $cadena): string
{
    $res="";
    for ($i = 0; $i < strlen($cadena); $i++) {
        
        if ($i % 2 == 0) {
            $res = $res.strtoupper(substr($cadena, $i, 1));
        }else{
            $res = $res.substr($cadena, $i, 1);
        }
    }
    return $res;
}

echo cadenaCani("soy una cadena de prueba");
