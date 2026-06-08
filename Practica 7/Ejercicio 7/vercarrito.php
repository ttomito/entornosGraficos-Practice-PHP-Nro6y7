<?php

session_start();

$carro = $_SESSION['carro'];

?>

<html>

<head>
<title>Carrito</title>
</head>

<body>

<h2>Productos Agregados</h2>

<?php

if($carro)
{

?>

<table border="1">

<tr>
    <th>Producto</th>
    <th>Precio</th>
    <th>Cantidad</th>
</tr>

<?php

$suma = 0;

foreach($carro as $producto)
{

    $subto =
        $producto['cantidad']
        *
        $producto['precio'];

    $suma += $subto;

?>

<tr>

<td><?php echo $producto['producto']; ?></td>

<td><?php echo $producto['precio']; ?></td>

<td><?php echo $producto['cantidad']; ?></td>

</tr>

<?php

}

?>

</table>

<br>

Total:
<?php echo number_format($suma,2); ?>

<br><br>

<a href="catalogo.php">
Seguir Comprando
</a>

|

<a href="regpago.php?costo=<?php echo $suma; ?>">
Finalizar Compra
</a>

<?php

}
else
{

    echo "No hay productos seleccionados.";

}

?>

</body>

</html>