<?php

if(isset($_POST['titular']))
{
    $titular = $_POST['titular'];

    setcookie(
        "tipoTitular",
        $titular,
        time() + 3600*24*365
    );

    $_COOKIE['tipoTitular'] = $titular;
}

?>

<html>

<head>
    <title>Periódico</title>
</head>

<body>

<h1>Periódico Online</h1>

<form action="periodico.php" method="post">

<fieldset>

<legend>Seleccione el tipo de noticia</legend>

<label>
<input type="radio" name="titular" value="politica">
Noticia política
</label>

<br><br>

<label>
<input type="radio" name="titular" value="economica">
Noticia económica
</label>

<br><br>

<label> 
<input type="radio" name="titular" value="deportiva">
Noticia deportiva
</label>

<br><br>

<input type="submit" value="Guardar Preferencia">

</fieldset>

</form>

<hr>




<?php

if(!isset($_COOKIE['tipoTitular']))
{
    echo "<h3>Noticia Política</h3>";
    echo "El Congreso debatirá una nueva ley.<br><br>";

    echo "<h3>Noticia Económica</h3>";
    echo "La inflación mostró una desaceleración este mes.<br><br>";

    echo "<h3>Noticia Deportiva</h3>";
    echo "El equipo local ganó la final del torneo.<br><br>";
}
else
{
    if($_COOKIE['tipoTitular'] == "politica")
    {
        echo "<h3>Noticia Política</h3>";
        echo "El Congreso debatirá una nueva ley.";
    }

    if($_COOKIE['tipoTitular'] == "economica")
    {
        echo "<h3>Noticia Económica</h3>";
        echo "La inflación mostró una desaceleración este mes.";
    }

    if($_COOKIE['tipoTitular'] == "deportiva")
    {
        echo "<h3>Noticia Deportiva</h3>";
        echo "El equipo local ganó la final del torneo.";
    }
}

?>

<br><br>

<a href="borrarCookie.php">
Eliminar preferencia
</a>

</body>

</html>