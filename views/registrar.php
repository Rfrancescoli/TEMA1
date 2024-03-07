<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR USUARIO</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos adicionales -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="custom-bg">
        <h1 class="mb-4 text-center">REGISTRO DE CUENTA</h1>
        <form id="registroForm" action="registro.php" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su nombre de usuario" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>
            <button id="registroButton" type="submit" class="btn btn-registrarse">Registrarse</button>  
        </form>
        <p class="mt-3 text-center">¿Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a> </p>
    </div>
    <!-- JavaScript-->
    <script src="../JS/script.js"></script>
</body>
</html>
