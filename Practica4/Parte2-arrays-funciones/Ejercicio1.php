//Codigo 1:
<?php

/* Creación del array con sus elementos */
$a = array(
    'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    4
);

?>

//Codigo 2:
<?php

$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';

$a[] = 4;

?>
/*Explicacion:

En el primer codigo, el array $a se crea de una sola vez, indicando las claves y sus respectivos valores.
En el segundo codigo, se crea el mismo array agregando cada elemento por separado. Las claves color, sabor, forma y nombre 
reciben los mismos valores que en el primer caso.

El valor 4 no tiene una clave indicada, por lo que PHP le asigna automáticamente el siguiente índice numérico disponible.
Conclusión: Ambos codigos son equivalentes porque al finalizar contienen los mismos elementos, con las mismas claves y valores.*/
