<?php 
// Conectando, seleccionando la base de datos
$link = mysql_connect($server, $user, $password)
    or die('No se pudo conectar: ' . mysql_error());

mysql_select_db($dbname) or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'UPDATE elecciones_municipales SET votos = 0 WHERE id = 1';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
$query = 'UPDATE elecciones_municipales SET votos = 0 WHERE id = 2';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
$query = 'UPDATE elecciones_municipales SET votos = 0 WHERE id = 3';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
$query = 'UPDATE elecciones_municipales SET votos = 0 WHERE id = 4';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());


// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);


header('Location: panel.html');
?>