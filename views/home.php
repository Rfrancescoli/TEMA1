<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Contenedor para centrar el contenido -->
    <div class="center-content">
        <!-- Contenido del dashboard -->
        <div>
            <div id="title"></div>
            <!-- Navbar con Bootstrap -->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">
                    <!-- Logo que lleva a la página principal -->
                    <a class="navbar-brand" href="#" onclick="showContent('BIENVENIDO')">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="showContent('home')">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="showContent('tractoristas')">Tractoristas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="showContent('tractores')">Tractores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="showContent('programacion')">Programación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="showContent('resumen')">Resumen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="confirmLogout()">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <script src="../JS/script.js"></script>
</body>
</html>
