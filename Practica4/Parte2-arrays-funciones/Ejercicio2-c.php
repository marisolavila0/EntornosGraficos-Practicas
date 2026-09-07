<?php


$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42;
unset($matriz[5]);

unset($matriz);

/*
Explicacion::
No hay salida porque el codigo no contiene ningun echo.
Ademas, unset($matriz) elimina completamente el array.
*/
?>