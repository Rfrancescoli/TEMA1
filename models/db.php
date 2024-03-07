<?php

// Establecer los parámetros de la conexión
$host = "localhost";
$usuario_bd = "root";
$contraseña_bd = "";
$nombre_bd = "MANTENIMIENTOS";

// Establecer conexión a la base de datos
$conexion = mysqli_connect($host, $usuario_bd, $contraseña_bd, $nombre_bd);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Establecer el conjunto de caracteres de la conexión
mysqli_set_charset($conexion, "utf8");

?>
