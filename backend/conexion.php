<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conexion = new mysqli("localhost", "root", "", "taxismococha");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>