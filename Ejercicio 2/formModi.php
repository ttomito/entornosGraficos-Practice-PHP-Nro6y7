<?php

include("conexion.inc");

$id = $_POST['ID'];

$vSql = "SELECT * FROM ciudades WHERE id='$id'";

$vResultado = mysqli_query($link,$vSql);

$fila = mysqli_fetch_array($vResultado);

?>

<form action="Modi.php" method="POST">

<input type="hidden" name="ID" value="<?php echo $fila['id']; ?>">

Ciudad:
<input type="text" name="Ciudad" value="<?php echo $fila['ciudad']; ?>"><br><br>

País:
<input type="text" name="Pais" value="<?php echo $fila['pais']; ?>"><br><br>

Habitantes:
<input type="text" name="Habitantes" value="<?php echo $fila['habitantes']; ?>"><br><br>

Superficie:
<input type="text" name="Superficie" value="<?php echo $fila['superficie']; ?>"><br><br>

Tiene Metro:
<input type="text" name="TieneMetro" value="<?php echo $fila['tieneMetro']; ?>"><br><br>

<input type="submit" value="Modificar">

</form>