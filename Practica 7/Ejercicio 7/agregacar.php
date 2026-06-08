<?php

session_start();

include("conexion.inc");

$id = $_GET['id'];

$cantidad = 1;

$vSql = "SELECT * FROM catalogo WHERE id = '$id'";

$vResultado = mysqli_query($link, $vSql);

$fila = mysqli_fetch_assoc($vResultado);

if(isset($_SESSION['carro']))
{
    $carro = $_SESSION['carro'];
}
else
{
    $carro = array();
}

$carro[md5($id)] = array(

    'identificador' => md5($id),

    'cantidad' => $cantidad,

    'producto' => $fila['producto'],

    'precio' => $fila['precio'],

    'id' => $id

);

$_SESSION['carro'] = $carro;

header("Location: catalogo.php");

?>