<html>
<head>
<title>Alta Ciudad</title>
</head>

<body>

<?php

include("conexion.inc");

$ciudad = $_POST['Ciudad'];
$pais = $_POST['Pais'];
$habitantes = $_POST['Habitantes'];
$superficie = $_POST['Superficie'];
$tieneMetro = $_POST['TieneMetro'];

$vSql = "INSERT INTO ciudades
(ciudad,pais,habitantes,superficie,tieneMetro)
VALUES
('$ciudad','$pais','$habitantes','$superficie','$tieneMetro')";

mysqli_query($link,$vSql) or die(mysqli_error($link));

echo "Ciudad registrada correctamente<br>";

echo "<a href='Menu.html'>Volver al menú</a>";

mysqli_close($link);

?>

</body>
</html>