<?php

include("conexion.inc");

$cancion = $_POST['cancion'];

$vSql = "
SELECT *
FROM buscador
WHERE canciones LIKE '%$cancion%'
";

$vResultado = mysqli_query($link, $vSql);

?>

<html>

<head>
    <title>Resultado</title>
</head>

<body>

<h2>Resultados de la búsqueda</h2>

<?php

if(mysqli_num_rows($vResultado) == 0)
{
    echo "No se encontraron canciones.";
}
else
{

    while($fila = mysqli_fetch_assoc($vResultado))
    {
        echo $fila['canciones'];
        echo "<br>";
    }

}

?>

<br><br>

<a href="buscador.html">
Volver
</a>

</body>

</html>

<?php

mysqli_free_result($vResultado);

mysqli_close($link);

?>