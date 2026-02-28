<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h2>Registro de Taxista</h2>

<form action="backend/guardar.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre Completo" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <select name="zona">
        <option>Centro</option>
        <option>Sur</option>
        <option>Poniente</option>
    </select>
    <button type="submit">Registrar</button>
</form>

</body>
</html>