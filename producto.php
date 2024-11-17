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
    <link rel="stylesheet" href="css/index.css">
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
    require_once "conexion.php";
    $conn = conectar();
    
    // Verificar si el parámetro 'id' está presente en la URL
    if (isset($_GET['id'])) {
        // Recuperar el valor de 'id' y convertirlo a entero por seguridad
        $idProducto = intval($_GET['id']);
        $sql = "SELECT p.*, c.nombre AS 'categoria_nombre'
                FROM productos AS p
                JOIN categorias AS c
                ON p.categoria = c.idCategoria
                WHERE p.idProducto = $idProducto;";

        $result = $conn->query($sql);
                
        $row = $result->fetch_assoc();

        // Mostrar el valor recuperado
        echo "
            <ul>
                <li><img src='img/".$row['imagen_url']."'></li>
                <li> nombre:".$row['nombre']."</p></li>
                <li> idProducto:".$row['idProducto']."</p></li>
                <li> descripcion:".$row['descripcion']."</p></li>
                <li> precio:".$row['precio']."</p></li>
                <li> stock:".$row['stock']."</p></li>
                <li> categoria:".$row['categoria_nombre']."</p></li>
            </ul>
        ";

    } else {
        // Si no se envió el parámetro 'id', mostrar un mensaje
        echo "<h1>Error</h1>";
        echo "<p>No se especificó un producto.</p>";
    }
    ?>


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
    <script src="js/index.js"></script>
</body>
</html>