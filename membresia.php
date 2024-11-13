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
    <link rel="stylesheet" href="css/membresia.css">
    <title>Página Principal</title>

</head>
<body>
    <!-- Header (nav) -->
    <nav id="nav-pastel" class="menu">
        <ul class="nav">
<<<<<<< HEAD
            <li class="menu-option"><a class="logo-img" href="index.php"><img src="img/logo.png" alt="logo"></a></li>
            <li class="menu-option"><a class="logo-link" href="index.php#Inicio">Nosotros</a></li>
            <li class="menu-option"><a class="logo-link" href="#Compra">Comprar</a></li>
            <li class="menu-option"><a class="logo-link" href="membresia.php">Membresia</a></li>
            <li class="menu-option"><a class="logo-link" href="#">Login</a></li> 
=======
        <li class="menu-option"><a class="logo-img" href="index.php"><img src="img/logo.png" alt="logo"></a></li>
            <li class="menu-option"><a class="logo-link botones" href="">Nosotros</a></li>
            <li class="menu-option"><a class="logo-link botones" href="productos.php">Productos</a></li>
            <li class="menu-option"><a class="logo-link botones" href="membresia.php">Membresias</a></li>
            <li class="menu-option cosologin"><a class="logo-link" id="login-boton" style="cursor: pointer;">Login</a></li>

            <?php if ($userlv == 3 || $userlv == 2 || $userlv == 1): ?>
                    <style>
                        .cosologin{
                            display: none !important;
                            opacity: 0;
                            visibility: hidden;
                        }
                    </style>
                <?php endif; ?>
                <?php if ($userlv == 1): ?>
                <li class="menu-option"><a class="logo-link" href="administradores/control_panel.php">Panel de Control</a></li>
                <?php endif; ?>

>>>>>>> 0fcc7b8169c06e81cbaed4dabcb40e26c6d1b9b1
            <div class="menu-derecha">
                <li class="menu-option-der">
                    <a href="https://www.facebook.com/profile.php?id=61567463004675" target="_blank">
                        <ion-icon name="logo-facebook" id="fcb"></ion-icon>
                    </a>
                </li>
                <li class="menu-option-der">
<<<<<<< HEAD
                    <a href=""><ion-icon name="logo-instagram" id="ig"></ion-icon></a>
=======
                    <a href="https://www.instagram.com/celeglutenfree/">
                        <ion-icon name="logo-instagram" id="ig"></ion-icon>
                    </a>
>>>>>>> 0fcc7b8169c06e81cbaed4dabcb40e26c6d1b9b1
                </li>
            </div>
        </ul>
        <ion-icon name="grid-outline" class="nav-mobile"></ion-icon>
    </nav>

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
                <a href="#" class="button">Suscribirse</a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="footer-section">
                <img src="img/banner.png" alt="Banner" />
            </div>
            <div class="footer-section">
                <h4 class="linea">Acceso rapido</h4>
                <p><a href="#home">Inicio</a></p>
                <p><a href="#services">Nuestros servicios</a></p>
                <p><a href="#about">Sobre nosotros</a></p>
                <p><a href="#contact">Contacto</a></p>
            </div>
            <div class="footer-section">
                <h4 class="linea">Siguenos!</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Cele Gluten Free. Derechos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
