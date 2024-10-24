<?php
  $userlv = $_SESSION['rol'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
  <nav class="menu">
    <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a  href="../usuarios/index_usuario.php">Miembros</a></li>
        <li><a  href="../usuarios/index_usuario.php">Usuarios</a></li>
        <span class="espacio"></span>
        <a class="cuenta" href="../administradores/control_panel.php"><ion-icon name="person" class="log-svg"></ion-icon></a>
        <a id="logoutnavbar" href="../logout.php"><ion-icon name="log-out-outline" class="log-svg"></ion-icon></a>
    </ul>
  </nav>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>