<?php
    session_start();
    $userlv = $_SESSION['rol'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/productos.css">
</head>
<body>
    
    <nav id="nav-pastel" class="menu">
        <ul class="nav">
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

            <div class="menu-derecha">
                <li class="menu-option-der">
                    <a href="https://www.facebook.com/profile.php?id=61567463004675" target="_blank">
                        <ion-icon name="logo-facebook" id="fcb"></ion-icon>
                    </a>
                </li>
                <li class="menu-option-der">
                    <a href="https://www.instagram.com/celeglutenfree/">
                        <ion-icon name="logo-instagram" id="ig"></ion-icon>
                    </a>
                </li>
            </div>
        </ul>
        <ion-icon name="grid-outline" class="nav-mobile"></ion-icon>
    </nav>
    
    <div class="inicio">

        <div class="producto">
            <div class="img-producto">
            </div>
            <div class="detalle">
                <div class="titulo">
                    N_PROD
                </div>
                <div class="descripcion">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe vel praesentium adipisci necessitatibus sapiente. Iste repellat error ex, provident dolorem inventore id, delectus sequi ratione quaerat temporibus quod praesentium deserunt pariatur, numquam nulla consequuntur alias maiores impedit deleniti nihil autem. :)</p>
                </div>
                <div class="compra">
                    Precio $200
                    <button>comprar</button>
                </div>
            </div>
        </div>

    </div>

    <footer>
            <div class="footer">
                <div class="footer-section">
                    <img class="img-foot" src="img/banner.png">

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
                <p>&copy; 2024 Your Company Name. All rights reserved.</p>
            </div>
    </footer>
</body>
</html>