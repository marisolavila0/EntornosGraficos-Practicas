<?php

function sumar($sumando1, $sumando2){

    $suma = $sumando1 + $sumando2;

    echo $sumando1 . "+" . $sumando2 . "=" . $suma;
}

/* Llama a la función con 5 y 6 */
sumar(5, 6);

/*
Explicacion:
La función recibe los valores 5 y 6, los suma y guarda el resultado en la variable $suma. 
Despues muestra los números junto con el resultado.

Salida:
5+6=11
*/
?>