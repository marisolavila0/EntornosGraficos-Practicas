<?php

$matriz = array(
    "x" => "bar",
    12 => true
);

echo $matriz["x"];

echo $matriz[12];

/*
Explicacion:
$matriz["x"] devuelve "bar".
$matriz[12] devuelve true, que al imprimirse con echo se muestra como 1.
Salida: bar1 */
?>