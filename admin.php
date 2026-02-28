<?php
session_start();
include("backend/conexion.php");

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
?>

<h2>Panel de Administración</h2>

<?php
$sql = "SELECT * FROM taxistas";
$resultado = $conexion->query($sql);

while($row = $resultado->fetch_assoc()){
    echo "<div>";
    echo $row['nombre']." - ".$row['zona'];
    echo " <a href='backend/eliminar.php?id=".$row['id']."'>Eliminar</a>";
    echo " <a href='backend/actualizar_estado.php?id=".$row['id']."'>Cambiar Estado</a>";
    echo "</div>";
}
?>

<a href="logout.php">Cerrar sesión</a>