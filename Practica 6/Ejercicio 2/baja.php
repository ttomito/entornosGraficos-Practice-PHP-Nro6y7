<html>
<head>
<title>Baja</title>
</head>

<body>

<?php

include("conexion.inc");

$id = $_POST['ID'];

$vSql = "SELECT * FROM ciudades WHERE id='$id'";

$vResultado = mysqli_query($link,$vSql);

if(mysqli_num_rows($vResultado)==0)
{
    echo "Ciudad inexistente<br>";
}
else
{
    $vSql = "DELETE FROM ciudades WHERE id='$id'";

    mysqli_query($link,$vSql);

    echo "Ciudad eliminada correctamente<br>";
}

echo "<a href='Menu.html'>Volver al menú</a>";

mysqli_close($link);

?>

</body>
</html>