<?php
session_start();

include('../models/db.php');

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Consulta preparada para evitar inyección de SQL
    $consulta = "SELECT usuario, password FROM Personal WHERE usuario = ?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "s", $usuario);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    // Verificar si se encontraron resultados
    if (mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $usuario_bd, $password_bd);
        mysqli_stmt_fetch($stmt);

        // Verificar si la contraseña proporcionada coincide con la almacenada en la base de datos
        if (password_verify($password, $password_bd)) {
            $_SESSION['usuario'] = $usuario;
            header("Location: home.php");
            exit();
        } else {
            // Contraseña incorrecta
            header("location: index.php?error=1");
            exit();
        }
    } else {
        // Usuario no encontrado
        header("location: index.php?error=1");
        exit();
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conexion);
?>
