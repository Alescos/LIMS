<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lims";

$connection = new mysqli($servername, $username, $password, $dbname);
//$acentos = $connection->query("SET NAMES 'utf8'");
if ($connection->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
}
?>
