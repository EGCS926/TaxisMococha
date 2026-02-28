<?php
session_start();
include("backend/conexion.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST['usuario'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin 
            WHERE usuario='$usuario' AND password='$password'";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){
        $_SESSION['admin'] = $usuario;
        header("Location: admin.php");
    } else {
        echo "Credenciales incorrectas";
    }
}
?>

<form method="POST">
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="password" placeholder="Contraseña">
    <button type="submit">Ingresar</button>
</form>