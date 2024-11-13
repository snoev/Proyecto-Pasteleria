<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$pass = $_POST["contrasena"];
$email = $_POST["mail"];
$rol = 3;

require_once "conexion.php";

$conn = conectar();

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$query = "SELECT email FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    echo "Error: ya existe un usuario con ese correo.";
    exit();
}

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

$success = false;

$querySubir = "INSERT INTO usuarios (nombre,apellido,email,contra,rol) VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($querySubir);

$stmt->bind_param("ssssi",$nombre,$apellido,$email,$pass,$rol);

if ($stmt->execute()) {
    $success = true;
    } else {
        echo "Error al insertar datos: " . $stmt->error;
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/registro_process.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <title>Registrado</title>
</head>
<body>
    <?php if ($success): ?>
        <main class="main-container">
            <div class="check-container">
                <div class="check-background">
                    <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="check-shadow"></div>
            </div>
            <h2>¡Muchas gracias por unirte!</h2>
            <a href='index.php'>
                <button class='back-button'>
                    <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                        <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
                    </svg>
                    <span>Volver</span>
                </button>
            </a>
        </main>
    <?php else: ?>
        <p>Error al procesar los datos.</p>
    <?php endif; ?>
</body>
</html>