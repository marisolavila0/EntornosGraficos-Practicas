<?php

/* Obtener la fecha y hora actual */
$fun = getdate();

/* Mostrar la hora y fecha obtenidas */
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";

/*
Explicacion:
getdate() obtiene los datos correspondientes al momento en que se ejecuta el programa. 
Los valores guardados en el array se utilizan para mostrar la hora, los minutos, los segundos y la fecha.

Salida:
Se muestra un mensaje con la fecha y hora en las que se ejecuto el codigo.
*/
?>