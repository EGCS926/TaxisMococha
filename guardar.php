<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$zona = $_POST['zona'];

$sql = "INSERT INTO taxistas (nombre, telefono, zona) 
        VALUES ('$nombre', '$telefono', '$zona')";

$conexion->query($sql);

header("Location: ../index.php");
?>