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
    
    <div class="inicio">
    <?php
    $sql = "SELECT nombre, descripcion, precio, stock, categoria, imagen_url from productos;";
    require "conexion.php";
    $conn = conectar();
    

    $res = mysqli_query($conn, $sql); 
    $resultado=mysqli_query($conn, $sql); 
    ?>

        <div class="producto">
            <div class="img-producto">
            </div>
            <div class="detalle">
                <div class="titulo">
                    N_PROD
                </div>
                <div class="descripcion">
                    <p>
                    <?php
                      while($registro=mysqli_fetch_assoc($resultado)){}
                       // $registro['nombre'];
                    ?>
                    </p>
                </div>
                <div class="compra">
                    Precio $200
                    <button>comprar</button>
                </div>
            </div>
        </div>

    <div class="masProd">
        <h1>Productos Relacionados</h1>
        <div class="carrusel">
            <div class="carrusel-images">
                <?php
                // Ejecutamos la consulta para obtener los productos
                $sql = "SELECT nombre, descripcion, precio, stock, categoria, imagen_url FROM productos;";
                $res = mysqli_query($conn, $sql);

                // Mostrar cada imagen del producto en el carrusel
                while ($registro = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="carrusel-item">
                        <img src="img/<?= $registro['imagen_url']; ?>" alt="<?= $registro['nombre']; ?>" class="carrusel-img">
                    </div>
                    <?php
                }
                ?>
            </div>
            <button class="carrusel-btn prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="carrusel-btn next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>



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
    <script src="js/masprod.js"></script>
</body>
</html>