<?php

include("conexion.inc");

$id = $_POST['ID'];
$ciudad = $_POST['Ciudad'];
$pais = $_POST['Pais'];
$habitantes = $_POST['Habitantes'];
$superficie = $_POST['Superficie'];
$tieneMetro = $_POST['TieneMetro'];

$vSql = "UPDATE ciudades
SET ciudad='$ciudad',
pais='$pais',
habitantes='$habitantes',
superficie='$superficie',
tieneMetro='$tieneMetro'
WHERE id='$id'";

mysqli_query($link,$vSql);

echo "Ciudad modificada correctamente<br>";

echo "<a href='Menu.html'>Volver al menú</a>";

mysqli_close($link);

?>