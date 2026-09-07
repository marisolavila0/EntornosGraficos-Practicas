<?php

$matriz = array(
    "unamatriz" => array(
        6 => 5,
        13 => 9,
        "a" => 42
    )
);

echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];

/*
Explicacion:
$matriz["unamatriz"][6] devuelve 5.
$matriz["unamatriz"][13] devuelve 9.
$matriz["unamatriz"]["a"] devuelve 42.

Como los tres valores se muestran con echo de forma consecutiva, sin espacios ni saltos de línea,
la salida es: 5942
*/
?>