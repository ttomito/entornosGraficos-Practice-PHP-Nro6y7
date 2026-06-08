<?php

$link = mysqli_connect(
    "localhost",
    "root",
    "HolaMundo!123"
)
or die("Problemas de conexión");

mysqli_select_db($link, "prueba");

?>
