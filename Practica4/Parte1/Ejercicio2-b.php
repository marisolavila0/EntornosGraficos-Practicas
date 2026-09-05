
// Codigo 1
<?php
for ($i = 1; $i <= 10; $i++) {
    print $i;
}
?>

/*
Funcionamiento:
El contador $i comienza en 1 y el ciclo se mantiene activo mientras
su valor sea menor o igual a 10.
En cada repetición se muestra el numero actual y luego $i aumenta en 1.
El ciclo finaliza cuando el contador supera el valor 10. */

// Salida: 12345678910


// Codigo 2
<?php
for ($i = 1; $i <= 10; print $i, $i++);
?>

/*
Funcionamiento:
En este caso, la impresion y el aumento del contador se realizan
en la tercera parte de la estructura del for.
Cada vez que termina una iteracion, se ejecuta print $i y luego
se incrementa el contador.
Por lo tanto, se obtienen los mismos numeros que en el primer codigo. */

// Salida: 12345678910


// Codigo 3
<?php
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    print $i;
}
?>

/*
Funcionamiento:
El for no establece una condicion de continuación en su cabecera,
por lo que podria ejecutarse indefinidamente.
Para evitarlo, se utiliza break dentro del ciclo.
Cuando $i supera el valor 10, se ejecuta break y el bucle se detiene.
Mientras esto no ocurre, se imprime el valor de $i. */

// Salida: 12345678910


// Codigo 4
<?php
$i = 1;

for (;;) {
    if ($i > 10) {
        break;
    }

    print $i;
    $i++;
}
?>

/*
Funcionamiento:
Primero se asigna el valor 1 a la variable $i.
El for se escribe sin inicializacion, condicion ni incremento,
por lo que por si solo representa un ciclo que no tendria fin.
La salida se controla mediante un if y un break.
En cada vuelta se imprime $i y después se incrementa hasta que
alcanza un valor mayor que 10. */

// Salida: 12345678910


/*
Conclusion:
Los cuatro codigos producen el mismo resultado: muestran los números
del 1 al 10.

Por lo tanto, son equivalentes en cuanto a la salida obtenida,
aunque utilizan diferentes estructuras para controlar el ciclo.

Los dos primeros aprovechan directamente las partes del for para
realizar el recorrido, mientras que los codigos 3 y 4 utilizan
break para determinar cuando finalizar el bucle. */
