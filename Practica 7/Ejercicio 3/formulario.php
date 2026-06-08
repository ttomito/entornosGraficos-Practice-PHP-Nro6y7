<?php

if(isset($_POST['nombre']))
{
    $nombre = $_POST['nombre'];

    setcookie(
        "usuario",
        $nombre,
        time() + 3600*24*365
    );
     $_COOKIE['usuario'] = $nombre;
}

?>

<html>

<head>
    <title>Ejercicio 3</title>
</head>

<body>

<?php

if(isset($_COOKIE['usuario']))
{
    echo "Último usuario ingresado: " . $_COOKIE['usuario'];
    echo "<br><br>";
}

?>

<form action="formulario.php" method="post">

Nombre de usuario:

<input type="text" name="nombre">

<input type="submit" value="Guardar">

</form>

</body>

</html>