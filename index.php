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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Página Principal</title>
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
    <div class="backdrop">
        <div class="modal" id="sesion-popup">
            <div id="modal-content">
                <div id="img-sesion">
                </div>
                <div id="form-sesion">
                    <div id="linea-top">
                        <h2 id="titulo-sesion">Inicio de Sesión</h2>
                        <span id="close">&times;</span>
                    </div>
                    <form method="post" action="login_process.php" id="login">
                        <input type="text" id="username" class="correo-rest" name="usuario" required placeholder="Ingrese email">
                        <input type="password" id="password" class="texto-rest" name="pass" required placeholder="Ingrese contraseña">
                        <button type="submit">Iniciar Sesión</button>
                    </form>
                    <a href="registro.php">¿No tenes cuenta? Registrate.</a>
                </div>
            </div>
        </div>
    </div>
        <?php 
            if(isset($_GET['noUsu'])){
                echo "<script>alert('El usuario " . $_GET['noUsu'] . " no existe');</script>";
            }

            if(isset($_GET['badPass'])){
                echo "<script>alert('La contraseña es incorrecta');</script>";
            }
        ?>
    <section class="carousel">
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slide-1" src="img/carruzel1.jpg">
                <img id="slide-2" src="img/carruzel2.jpg">
                <img id="slide-3" src="img/carruzel3.jpg">
                <img id="slide-4" src="img/carruzel4.jpg">
            </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
                <a href="#slide-4"></a>
            </div>
        </div>
    </section>

    <section id="Inicio" class="Inicio">

    <div class="container">
    <div class="line"></div>
    <h1>Nuestros Productos</h1>
    <p>
        Nuestros productos combinan la mejor calidad y sabor, utilizando ingredientes sin gluten 
        seleccionados cuidadosamente. Ofrecemos precios accesibles para que todos puedan disfrutar 
        de opciones deliciosas y saludables, elaboradas con un toque artesanal.
    </p>

    <div class="linechica"></div>


    <h2>Sobre Nosotros</h2>
    <p>
        Somos una panadería comprometida con ofrecer opciones sin gluten que deleiten a todos. 
        Trabajamos con pasión y dedicación para garantizar productos de alta calidad, cuidando 
        cada detalle en su elaboración. ¡Nuestra misión es llenar tu mesa de momentos inolvidables!
    </p>
    </div>
    <div class="line"></div>
    
    <div class="cont">
    <div class="info">
      <h2>¿Donde Estamos?</h2>
      <p><span class="highlight">VISÍTANOS EN NUESTRA ÚNICA DIRECCIÓN</span></p>
      <p>Venezuela 2033, B1882 Quilmes, Provincia de Buenos Aires</p>
      <p><span class="highlight">De Lunes a Viernes:</span> 9AM-2PM | 4PM-7:30PM</p>
      <p><span class="highlight">Sábados:</span> 9AM-2PM</p>
      <p><span class="highlight">Domingos y Feriados:</span> Cerrado</p>
      <p><span class="highlight">WhatsApp:</span> <a href="https://wa.me/01154740106" target="_blank">011 5474-0106</a></p>
    </div>

    <iframe 
    src="https://www.google.com/maps?q=https://maps.app.goo.gl/iYWBg14XJxrdgYyN6?g_st=com.google.maps.preview.copy&output=embed" 
    width="600" 
    height="400" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy">
  </iframe>

    </section>
    <section id="Compra" class="Compra">

    </section>
    <section id="Membresias" class="Membresias">

    </section>
    </section>

    <footer>
        <div class="footer">
            <div class="footer-section">
                <img class="img-foot" src="img/banner.png">
               
            </div>
            <div class="footer-section">
                <h4 class="linea">Acceso rapido</h4>
                <p><a href="#Inicio">Inicio</a></p>
                <p><a href="#Compra">Nuestros productos</a></p>
                <p><a href="#Membresias">Membresias</a></p>
                <p><a href="#">Contacto</a></p>
            </div>
            <div class="footer-section">
                <h4 class="linea">Siguenos!</h4>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61567463004675" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/celeglutenfree/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Cele Gluten Free. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/index.js"></script>
    <script src="js/inputValidator.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
