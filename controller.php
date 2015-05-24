<?php 
// Conectando, seleccionando la base de datos
$link = mysql_connect($server, $user, $password)
    or die('No se pudo conectar: ' . mysql_error());

mysql_select_db($dbname) or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'UPDATE elecciones_municipales SET votos = votos + 1 WHERE id = '.$_POST["partido"];
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());


// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);


?>