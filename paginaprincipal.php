<?php

session_start();

$usuario = $_SESSION['username'];
$nivel = $_SESSION['nivel'];

if (!isset($usuario)) {
    header("location: login.php");
}else{
    
echo "<h1>Bienvenido $usuario</h1><br>";
echo "<h3>Role: $nivel</h3>";

echo "<a href='logica/salir.php'>Cerrar Sesion</a>";

}
?>