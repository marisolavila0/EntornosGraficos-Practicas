
// Codigo 1
<?php

if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}

?>

/*
Funcionamiento:
Se utiliza una estructura if...elseif para comprobar el contenido de la variable $i.

Primero se verifica si $i tiene el valor 0. Si se cumple, se muestra"i equals 0" y no se siguen evaluando las demas condiciones.
Si no se cumple, se comprueba si $i vale 1 y luego si vale 2.
En caso de que $i tenga un valor diferente de 0, 1 o 2, ninguna de las condiciones sera verdadera y no se mostrara ningun mensaje. */


// Codigo 2
<?php

switch ($i) {
    case 0:
        print "i equals 0";
        break;

    case 1:
        print "i equals 1";
        break;

    case 2:
        print "i equals 2";
        break;
}

?>

/*
Funcionamiento:
En este caso se utiliza switch para determinar que accion realizar segun el valor de la variable $i.
El valor de $i se compara con cada uno de los casos (case).
Cuando encuentra un case que coincide, ejecuta las instrucciones correspondientes y muestra el mensaje indicado.
El break hace que la ejecucion salga del switch despues de encontrar una coincidencia, evitando que continue con los siguientes casos.
Si $i no coincide con ninguno de los valores indicados, no se ejecuta ningun bloque y no aparece ningun mensaje. */


/*
Conclusion:

Los dos codigos son equivalentes para los valores analizados, ya que producen exactamente la misma salida:

Si $i = 0 → "i equals 0"
Si $i = 1 → "i equals 1"
Si $i = 2 → "i equals 2"

La diferencia se encuentra en la forma de plantear la decision.
El if...elseif permite utilizar condiciones mas complejas, mientras que switch resulta practico cuando se necesita comparar una
misma variable con diferentes valores.

Entoncees, aunque la estructura de ambos codigos es diferente, para este caso tienen el mismo resultado. */