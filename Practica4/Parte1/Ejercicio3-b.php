<html>
<head><title>Documento 2</title></head>
<body>

<?php

if (!isset($_POST['submit'])) {
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Edad: <input name="age" size="2">
    <input type="submit" name="submit" value="Ir">
</form>

<?php
}
else {
    $age = $_POST['age'];

    if ($age >= 21) {
        echo 'Mayor de edad';
    }
    else {
        echo 'Menor de edad';
    }
}

?>

</body>
</html>

/*
Explicacion:

El codigo crea un formulario donde el usuario puede ingresar su edad.

if (!isset($_POST['submit'])) → verifica si el formulario todavia no fue enviado. Si no se envio, muestra el formulario.
$_POST['age'] → obtiene la edad ingresada y la guarda en $age.
Despues se utiliza una condicion:
- Si $age es mayor o igual a 21, muestra "Mayor de edad".
- Si es menor a 21, muestra "Menor de edad".

El formulario utiliza el metodo POST para enviar la informacion al mismo archivo PHP y procesarla. */