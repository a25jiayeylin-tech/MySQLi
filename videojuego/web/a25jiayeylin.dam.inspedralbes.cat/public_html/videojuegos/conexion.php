<?php
$host = "localhost";
$usuario = "a25jiayeylin_gh";
$contrasenia = "112@Hola";
$base_de_datos = "a25jiayeylin_gh";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
