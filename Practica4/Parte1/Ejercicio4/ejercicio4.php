<?php

echo "El $flor $color \n";

include 'datos.php';

echo "El $flor $color";

/*
Explicacion:

En el primer echo, $flor y $color todavia no tienen ningun valor, ya que el archivo datos.php se incluye recién despues. Por lo tanto,
esa primera impresion no muestra "clavel" ni "blanco".

Con include 'datos.php' se incorporan las variables del archivo:
$flor = 'clavel';
$color = 'blanco';

A partir de ese momento, el segundo echo puede utilizar sus valores y muestra: El clavel blanco

Por lo tanto, el orden en que aparece el include es importante, 
ya que las variables solamente estáan disponibles después de incluir el archivo.*/
?>
