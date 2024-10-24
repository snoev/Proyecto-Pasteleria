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
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Registrado</title>
</head>
<body>
    <?php if ($success): ?>
        <h1>TE REGISTRASTE CORRECTAMENTE.</h1>
        <a href="index.php" style="margin-top: 10vh; font-size: 2rem;">Volver</a>
    <?php else: ?>
        <p>Error al procesar los datos.</p>
    <?php endif; ?>
</body>
</html>