
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/indexnavbar.css">
</head>
<body>
    <nav id="nav-pastel" class="menu">
        <ul class="nav">
            <li class="menu-option"><a class="logo-img" href="index.php"><img src="img/logo.png" alt="logo"></a></li>
            <li class="menu-option"><a class="logo-link botones" href="index.php#Nosotros">Nosotros</a></li>
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
            <li class="menu-option"><a class="logo-link" href="control_panel.php">Panel de Control</a></li>
            <?php endif; ?>
            <div class="menu-derecha">
                <?php if ($userlv == 2 || $userlv == 3): ?>
                    <a class="cuenta" href="index_usuario.php"><ion-icon name="person" class="log-svg"></ion-icon></a>
                    <a id="logoutnavbar" href="logout.php"><ion-icon name="log-out-outline" class="log-svg"></ion-icon></a>
                <?php endif; ?>

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
    <script src="js/index.js"></script>
    <script src="js/inputValidator.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>