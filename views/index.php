<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css ">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="custom-bg"> <!-- Aplica la clase custom-bg para el contenedor del formulario -->
                    <!-- Imagen -->
                    <div class="text-center mb-4">
                        <img src="../img/logoinicio.jpg" alt="Imagen" class="img-fluid">
                    </div>
                    <!-- Formulario de inicio de sesión -->
                    <h1 class="text-center mb-4">INICIA SESION</h1>
                    <!-- Sección para mostrar el mensaje de error -->
                    <?php if(isset($_GET['error']) && $_GET['error'] == 1) { ?>
                        <div class="alert alert-danger" role="alert" id="errorMessage">
                            DATOS INCORRECTOS
                        </div>
                    <?php } ?>
                    <form action="validar.php" method="post">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su nombre de usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                        <!-- Enlace para registrarse -->
                        <p class="center-text mt-3">¿No tienes cuenta? <a href="registrar.php">Regístrate aquí</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Script para ocultar el mensaje después de 3 segundos -->
    <script>
        setTimeout(function(){
            document.getElementById('errorMessage').classList.add('hide');
        }, 3000); // Ocultar el mensaje después de 3 segundos
    </script>
</body>
</html>
