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
            <li class="menu-option"><a class="logo-img" href="index.php"><img src="img/logo.png" alt="logo"></a></li>
            <li class="menu-option"><a class="logo-link" href="index.php#Inicio">Nosotros</a></li>
            <li class="menu-option"><a class="logo-link" href="#Compra">Comprar</a></li>
            <li class="menu-option"><a class="logo-link" href="membresia.php">Membresias</a></li>
            <li class="menu-option"><a class="logo-link" href="#">Login</a></li> 
            <div class="menu-derecha">
                <li class="menu-option-der">
                    <a href=""><ion-icon name="logo-facebook" id="fcb"></ion-icon></a>
                </li>
                <li class="menu-option-der">
                    <a href=""><ion-icon name="logo-instagram" id="ig"></ion-icon></a>
                </li>
                <li class="menu-option-der">
                    <a href=""><ion-icon name="logo-whatsapp" id="wsp"></ion-icon></a>
                </li>
            </div>
        </ul>
        <ion-icon name="grid-outline" class="nav-mobile"></ion-icon>
    </nav>

    <!-- Subscription Section -->
    <section class="subscription-container" id="Membresias">
        <h1>Suscripcion mensual a Cele Gluten Free</h1>
        <p>Los planes están disponibles desde ARS$ 25000/mes. Puedes cancelar en cualquier momento.</p>
        <div class="subscription-options">
            <div class="subscription-plan basic">
                <h2>Sin gluten</h2>
                <p class="price">ARS$ 30000</p>
                <ul class="features">
                    <li>- Recibiras una caja con nuestros productos sin gluten mensualmente dea</li>
                    <li>- Atencion personalizada deaaa</li>
                    <li>- La membresia es sin costo, solo abonas tu caja. dea</li>
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
