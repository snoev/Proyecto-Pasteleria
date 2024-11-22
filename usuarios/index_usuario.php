<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>Página usuarios</title>
    <link rel="stylesheet" href="../css/index_usuario.css">
</head>
<?php
    if(isset($_SESSION['nombre']) && $_SESSION['rol'] == 1){
        require_once '../administradores/navbar.php';
    }
?>
<body class="admin">
    <?php
    if(!isset($_SESSION['nombre']) || $_SESSION['rol'] != 3 && $_SESSION['rol'] != 2 && $_SESSION['rol'] != 1){
        echo "ACCESO NO AUTORIZADO";
        exit();
    }
    ?>
    <div id="panel">
        <div id="info">
            <h1>Bienvenido <?=$_SESSION['nombre']?> </h1>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>