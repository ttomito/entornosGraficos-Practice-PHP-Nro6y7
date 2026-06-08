<?php

session_start();

include("conexion.inc");

if(isset($_SESSION['carro']))
{
    $carro = $_SESSION['carro'];
}
else
{
    $carro = false;
}

$vSql = "SELECT * FROM catalogo ORDER BY producto ASC";

$vResultado = mysqli_query($link, $vSql);

?>

<html>

<head>
<title>CATALOGO</title>
</head>

<body>

<h2>Catálogo de Productos</h2>

<table border="1">

<tr>
    <th>Producto</th>
    <th>Precio</th>
    <th>Acción</th>
</tr>

<?php

while($fila = mysqli_fetch_assoc($vResultado))
{

?>

<tr>

<td><?php echo $fila['producto']; ?></td>

<td><?php echo $fila['precio']; ?></td>

<td>

<?php

if(
    !$carro
    ||
    !isset($carro[md5($fila['id'])])
)
{
?>

<a href="agregacar.php?id=<?php echo $fila['id']; ?>">
Agregar
</a>

<?php
}
else
{
?>

<a href="borracar.php?id=<?php echo $fila['id']; ?>">
Quitar
</a>

<?php
}
?>

</td>

</tr>

<?php

}

?>

</table>

<br>

<a href="vercarrito.php">
Ver Carrito
</a>

</body>

</html>