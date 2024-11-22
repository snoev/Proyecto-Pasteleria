<?php
    session_start();
    $userlv = $_SESSION['rol'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- configuracion de la pagina -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- importacion de los estilos y fuentes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon"> <!-- icono del navegador -->
    <link rel="stylesheet" href="css/membresia.css"> <!-- enlace al archivo CSS -->
    
    <title>Membresía</title> <!-- titulo de la pagina -->
</head>
<body>
    <?php
        // carga la barra de navegacion de la pagina
        require_once 'assets/indexnavbar.php';
    ?> 

    <!-- seccion de la membresia -->
    <section class="subscription-container" id="Membresias">
        <h1>Suscripción mensual a Cele Gluten Free</h1>
        <p>Puedes cancelar tu plan en cualquier momento.</p>
        <div class="subscription-options">
            <!-- plan básico de suscripcion -->
            <div class="subscription-plan basic">
                <h2>Estándar</h2>
                <p class="price">ARS$ 30000</p>
                <ul class="features">
                    <!-- lista de los beneficios -->
                    <li>- Recibirás una caja con nuestros productos sin gluten mensualmente</li>
                    <li>- Atención personalizada</li>
                    <li>- La membresía es sin costo, solo abonas tu caja.</li>
                </ul>
                <!-- enlace para registrarse en la membresia -->
                <a href="registro_membresia.php" class="button">Suscribirse</a>
            </div>
        </div>
    </section>

    <?php
        // carga el footer de la pagina
        require_once 'assets/footer.php';
    ?>
</body>
</html>
