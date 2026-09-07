<html>
<head>
    <title>Documento 1</title>
</head>

<body>

<?php

echo "<table width = 90% border = '1'>";

$row = 5; // establece la cantidad de filas
$col = 2; // establece la cantidad de columnas

for ($r = 1; $r <= $row; $r++) {

    echo "<tr>";

    for ($c = 1; $c <= $col; $c++) {

        echo "<td>&nbsp;</td>\n";

    }

    echo "</tr>\n";
}

echo "</table>\n";

/*
Explicacion:

echo "<table width = 90% border = '1'>"; -> comienza la creacion de una tabla HTML que ocupa el 90% del ancho disponible y posee un borde.

$row = 5; ->  indica que se van a generar 5 filas.
$col = 2; -> establece que cada fila estara formada por 2 columnas.
for ($r = 1; $r <= $row; $r++) -> es el ciclo encargado de controlar la creacion de las filas. Se repite desde 1 hasta 5.

echo "<tr>"; -> genera la etiqueta de apertura de una fila de la tabla.
for ($c = 1; $c <= $col; $c++) -> ciclo que se encuentra dentro del anterior y se ocupa de crear las columnas de cada fila. 
Se ejecuta 2 veces por cada fila.

echo "<td>&nbsp;</td>\n"; -> agrega una celda a la tabla.
La expresion &nbsp; representa un espacio en blanco dentro de la celda.

echo "</tr>\n"; -> indica el final de la fila actual.
echo "</table>\n"; -> una vez finalizados los dos ciclos, se cierra la tabla HTML.

Lo que hace el codigo entonces es, generar una tabla formada por 5 filas y 2 columnas, es decir, 10 celdas en total. */

?>
</body>
</html>