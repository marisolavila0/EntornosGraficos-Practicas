<?php
// Archivo donde se almacena la cantidad de visitas
$archivo = "contador.dat";

// Abrir el archivo para leer el valor actual
$abrir = fopen($archivo, "r");

// Leer el contenido
$cont = fread($abrir, filesize($archivo));

// Cerrar el archivo
fclose($abrir);

// Abrir el archivo nuevamente para modificarlo
$abrir = fopen($archivo, "w");

// Sumar una visita
$cont = $cont + 1;

// Guardar el nuevo valor
$guardar = fwrite($abrir, $cont);

// Cerrar el archivo
fclose($abrir);

// Mostrar la cantidad de visitas
echo "<font face='arial' size='3'>Cantidad de visitas: ".$cont."</font>";
?>

*/El ejercicio utiliza contador.dat para guardar la cantidad de visitas. contador.php lee el valor, le suma 1 y lo guarda nuevamente. Luego muestra el total en pantalla.
visitas.php incluye contador.php, por lo que el contador se ejecuta cada vez que se carga la pagina.*/
