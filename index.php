<?php include("backend/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>TaxisMococha</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>TaxisMococha 🚕</h1>

<form method="GET">
    <select name="zona">
        <option value="">Todas las zonas</option>
        <option value="Centro">Centro</option>
        <option value="Sur">Sur</option>
        <option value="Poniente">Poniente</option>
    </select>
    <button type="submit">Buscar</button>
</form>

<?php
$filtro = "";
if(isset($_GET['zona']) && $_GET['zona'] != ""){
    $zona = $_GET['zona'];
    $filtro = "WHERE zona='$zona'";
}

$sql = "SELECT * FROM taxistas $filtro";
$resultado = $conexion->query($sql);

while($row = $resultado->fetch_assoc()){
    echo "<div class='card'>";
    echo "<h3>".$row['nombre']."</h3>";
    echo "<p>Zona: ".$row['zona']."</p>";
    echo "<p>Tel: ".$row['telefono']."</p>";
    echo "<p>Estado: ".($row['disponible'] ? "Disponible" : "Ocupado")."</p>";
    echo "<a href='tel:".$row['telefono']."'>Llamar</a>";
    echo "</div>";
}
?>

<a href="registro.php">Registrarse como taxista</a>
<a href="login.php">Panel Admin</a>

</body>
</html>