<?php

/* Función para comprobar si un nombre de usuario es válido */
function comprobar_nombre_usuario($nombre_usuario){

    /* Verificar que tenga entre 3 y 20 caracteres */
    if (strlen($nombre_usuario) < 3 || strlen($nombre_usuario) > 20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }

    /* Define los caracteres que se permiten */
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";

    /* Revisa los caracteres del nombre */
    for ($i = 0; $i < strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario, $i, 1)) === false){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }

    /* Si supera todas las comprobaciones */
    echo $nombre_usuario . " es válido<br>";
    return true;
}

/* Probar la función con diferentes casos */
comprobar_nombre_usuario("Ana");
comprobar_nombre_usuario("usuario_2026");
comprobar_nombre_usuario("ab");
comprobar_nombre_usuario("usuario@123");

?>