<?php 
// Conectando, seleccionando la base de datos
$link = mysql_connect($server, $user, $password)
    or die('No se pudo conectar: ' . mysql_error());

mysql_select_db($dbname) or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM elecciones_municipales';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
$rows = array();
while($r = mysql_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);


?>