<?php

session_start();

$carro = $_SESSION['carro'];

?>

<html>

<head>
<title>Finalizar Compra</title>
</head>

<body>

<h2>Resumen de Compra</h2>

<?php

foreach($carro as $producto)
{

    echo $producto['cantidad'];

    echo " unidad/es de ";

    echo $producto['producto'];

    echo "<br>";

}

?>

<br>

Total:
$<?php echo $_GET['costo']; ?>

</body>

</html>