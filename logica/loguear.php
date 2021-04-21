<?php

require "conexion.php";

session_start();

$usuario = $_REQUEST['txtNombre'];
$pass = $_REQUEST['txtPass'];

$sql = "SELECT COUNT(*) AS contar FROM usuarios WHERE nombreuser = '$usuario' AND pass = '$pass'";
$consulta = mysqli_query($conexion,$sql);

$sql2 = "SELECT * FROM usuarios WHERE nombreuser = '$usuario' and pass = '$pass'";
$consulta2 = mysqli_query($conexion,$sql2);

$array = mysqli_fetch_array($consulta);
$array2 = mysqli_fetch_array($consulta2);

$nivel = $array2['nivel'];



if ($array['contar']>0) {
    $_SESSION['username'] = $usuario;
    $_SESSION['nivel'] = $nivel;
    header("location: ../paginaprincipal.php");
} else {
    echo "Datos incorrectos";
}



?>