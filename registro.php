<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registrarse</title>
</head>
<body>
        <div class="container">
            <div class="contenido">
                <a href="index.html">
                    <button class="volver"><i class='bx bx-arrow-back'></i></button>
                </a>
            </div>
            <div class="login">
                <div class="caja-naranja">
                    <div class="formulario">
                        <form method="post" action="registro_process.php">
                            <p>Nombre completo:</p>
                            <input type="text" name="nombre" required placeholder="Ingrese su nombre"> <br>
                            <p>Apellido:</p>
                            <input type="text" name=apellido required placeholder="Ingrese su apellido"><br>
                            <p>E-mail:</p>
                            <input type="email" name="mail" required placeholder="Ingrese su correo electrónico"> <br>
                            <!--<div class="check">
                                <input type="checkbox" name="recordar" class="cajita"> <p>Recordar inicio de sesión</p>
                            </div> -->
                            <p>Contraseña:</p>
                            <input type="password" name="contrasena" required placeholder="Ingrese contraseña">
                            <!--<ul>
                                <li>Debe incluir al menos 1 número.</li>
                                <li>Debe contener al menos 1 letra mayúscula.</li>
                                <li>La contraseña debe incluir minimo 8 caracteres.</li>
                            </ul> -->
                            <input type="password" name="contrasena" required placeholder="Vuelva a ingresar la contraseña">
                            <input class="iniciar" type="submit" value="Registrarse"> <br>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

</body>
</html>