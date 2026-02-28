<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "UPDATE taxistas 
        SET disponible = NOT disponible 
        WHERE id=$id";

$conexion->query($sql);

header("Location: ../admin.php");
?>