<?php

session_start();

$_SESSION['usuario'] = $_POST['usuario'];

$_SESSION['clave'] = $_POST['clave'];

?>

<html>

<head>
    <title>Sesión Creada</title>
</head>

<body>

<h2>Variables de sesión creadas correctamente</h2>

<p>
Usuario almacenado:
<?php echo $_SESSION['usuario']; ?>
</p>

<p>
Clave almacenada:
<?php echo $_SESSION['clave']; ?>
</p>

<br>

<a href="mostrarSesion.php">
Ir a la tercera página
</a>

</body>

</html>