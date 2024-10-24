<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="../css/control_panel.css">
</head>
<?php
    if(isset($_SESSION['nombre']) && $_SESSION['rol'] == 1){
        require_once 'navbar.php';
    }
?>
<body class="admin">
    <?php
    if(!isset($_SESSION['nombre']) || $_SESSION['rol'] != 1){
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