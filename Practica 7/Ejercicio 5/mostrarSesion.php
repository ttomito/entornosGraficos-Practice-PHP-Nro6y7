<?php

session_start();

?>

<html>

<head>
    <title>Mostrar Sesión</title>
</head>

<body>

<h2>Datos recuperados desde la sesión</h2>

<p>
Usuario:
<?php echo $_SESSION['usuario']; ?>
</p>

<p>
Clave:
<?php echo $_SESSION['clave']; ?>
</p>

</body>

</html>