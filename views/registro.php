    <?php
    // Verificar si se han enviado los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si todos los campos requeridos se han enviado
        if (isset($_POST["usuario"]) && isset($_POST["email"]) && isset($_POST["password"])) {
            // Obtener los valores enviados del formulario
            $usuario = $_POST["usuario"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Conectar a la base de datos
            $conn = new mysqli("localhost", "root", "", "MANTENIMIENTOS");
            
            // Verificar si la conexión fue exitosa
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }
            
            // Preparar la consulta SQL para insertar el nuevo usuario en la base de datos
            $sql = "INSERT INTO Personal (usuario, email, password) VALUES (?, ?, ?)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $usuario, $email, $hashed_password);
            // Ejecutar la consulta SQL
            if ($stmt->execute()) {
                header("Location: home.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        } else {
            echo "Todos los campos son obligatorios";
        }
    } else {
        echo "Acceso denegado";
    }
    ?>
