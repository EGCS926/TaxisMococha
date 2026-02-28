<?php
include("conexion.php");

$id = $_GET['id'];
$conexion->query("DELETE FROM taxistas WHERE id=$id");

header("Location: ../admin.php");
?>