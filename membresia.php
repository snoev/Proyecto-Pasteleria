<?php
    session_start();
    $userlv = $_SESSION['rol'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/membresia.css">
    <title>Membresía</title>
</head>
<body>
    <?php
        require_once 'assets/indexnavbar.php';
    ?> 

    <!-- Subscription Section -->
    <section class="subscription-container" id="Membresias">
        <h1>Suscripción mensual a Cele Gluten Free</h1>
        <p>Puedes cancelar tu plan en cualquier momento.</p>
        <div class="subscription-options">
            <div class="subscription-plan basic">
                <h2>Estándar</h2>
                <p class="price">ARS$ 30000</p>
                <ul class="features">
                    <li>- Recibiras una caja con nuestros productos sin gluten mensualmente</li>
                    <li>- Atencion personalizada</li>
                    <li>- La membresia es sin costo, solo abonas tu caja.</li>
                </ul>
                <a href="registro_membresia.php" class="button">Suscribirse</a>
            </div>

        </div>
    </section>

    <?php
        require_once 'assets/footer.php';
    ?>
</body>
</html>
