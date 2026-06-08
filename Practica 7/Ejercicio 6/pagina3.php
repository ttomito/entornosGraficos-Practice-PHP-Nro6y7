<?php 
session_start(); 
?> 

<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
<?php 


if (isset($_SESSION['usuario'])) 
{ 
echo "Bienvenido ".$_SESSION['usuario']; 
} 
else 
{ 
    echo "No tiene permitido visitar esta página."; 

} 
?>

<br><br>

<a href="sesiones.php">Volver a la página de consulta</a>
</body> 
</html>
