<?php

//Definicion de una funcion llamada "doble"
//Recibe un parametro entero o numerico llamado $i.
function doble($i) {
     //Operador aritmetico "*" que multiplica el valor de $i por 2
     //La funcion devuelve el resultado mediante return
     return $i * 2 ;
}

//Se declara la variable $a
//TRUE es un valor booleano (tipo boolean)
//"=" es el operador de la asignacion.
$a = TRUE;

//Se declara la variable $d.
//12 es un numero entero, por lo que $d es de tipo entero (int).
$d = 12;


//Se usa la funcion incorporada gettype() para obtener el tipo de cada una de las variables.
//Cada llamada recibe una variable como parametro
//echo se encarga de mostrar el resultado en pantalla.
echo gettype($a);
echo gettype ($b);
echo gettype ($c);
echo gettype ($d);


//Estrucura de control if.
//La funcion is_int() verifica i $d es un numero de tipo entero.
//Como $d contiene 12, la condicion es verdadera,.
if (is_int($d)) {

    //"+=" es un operador de asignacion compuesto
    //Equivale a escribir: $d = $d + 4;
    //Entonces, $d pasa de 12 a 16.
    $d +=4;

}

//Segundo if.
//is_string() comprueba si $a es de tipo string.
//$a contiene TRUE, por lo tanto es boolean y la condicion es falsa.
//Lo que pasa entonces, es que, el echo que esta dentro del if no se ejecuta.
if (is_string($a)) {

    //Esta instruccion solamente se ejecutaria si $a fuera de tipo string.
    echo "Cadena: $a";

}


//Se usa el operador ternario "?:".
//La estructura es: condicion ? valor_si_verdadero : valor_si_falso

//$a contiene TRUE, por lo tanto se ejecuta ++$d.
//primer aumenta $d en 1 y luego usa su nuevo valor.

//$d actualmente vale 16, entonces pasa a valer 17.
$d = $a ? ++$d : $d * 3;

//Se llama a la funcion doble() pasando $d++ como argumento.
//"$d++" es un operador de incremento postfijo
//primero utiliza el valor actual de $d y despues se incrementa.
//Por lo tanto, se llama a: doble(17)
//La funcion calcula 17*2, dando como resultado 34.
//Ese resultado se almacena en $f.

//Despues de utilizar el valor de 17, $d aumenta a 18.
$f = doble ($d++);

// "+=" es un operador de asignacion compuesto.
// Primero se suma 10 al valor de $f:
// $f = $f + 10
// Como $f valía 34, pasa a valer 44.
// La expresion completa asigna ese resultado también a $g, por lo que $g queda con el valor 44.
$g = $f += 10;


// Se muestran por pantalla los valores de las variables.
// Al utilizar varias variables separadas por comas, echo las muestra una detrás de otra, sin espacios.
echo $a, $b, $c, $d, $f, $g;

?>