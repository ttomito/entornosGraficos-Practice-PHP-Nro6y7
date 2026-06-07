Ejercicio 1: Completar 
Manejo de Bases de Datos con PHP   
(Apunte: PHP_BaseDatos) 


1. Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es 
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función 

mysqsli_connect()

2. Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:  

mysqli_connect(
    "localhost",
    "root",
    "contraseña"
);

3. Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función 

mysqli_select_db()

4. Esta función debe pasar como parámetro  

mysqli_select_db(
    $link,
    "docentes"
);

5. La función mysqli_query () se utiliza para  

Ejecuta una consulta SQL sobre la base de datos seleccionada, y devuelve un resultado que se puede usar para obtener los datos de la consulta.

6. Requiere como parámetros  

mysqli_query(
    $link,
    "SELECT * FROM doc_utn" -> PODES USAR UNA VARIABLE PARA ESTA SENTENCIA
);

7. La cláusula or die() se utiliza para  

Se usa para manejar errores en la ejecución de una consulta SQL. Si la consulta falla, el script se detendrá y se mostrará un mensaje de error personalizado.

8. y la función mysqli_error () se puede usar para

Obtener el mensaje del error producido por MySQL.

9. Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo 
$vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):



<?php 
while ($fila = mysqli_fetch_array($vResultado))  
{ 
?> 
<tr> 
<td><?php echo ($fila[0]); ?></td> 
<td><?php echo ($fila[1]); ?></td> 
<td><?php echo ($fila[2']); ?></td> 
</tr>    
<tr> 
<td colspan="5"> 
<?php 
} 
mysqli_free_result($vResultado); 
mysqli_close($link); 
?> 
