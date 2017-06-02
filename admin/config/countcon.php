<?php
$enlace = mysql_connect('localhost', 'root', 'W1i2n3d4o5w6s');
if (!$enlace) {
    die('No se pudo conectar: ' . mysql_error());
}
mysql_select_db('hm_db');

$sql= "SELECT * FROM clientes";
$result = mysql_query($sql);
$clientes = mysql_num_rows($result);

$sql= "SELECT * FROM users";
$result = mysql_query($sql);
$users = mysql_num_rows($result);

?>