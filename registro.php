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
                <a href="index.php">
                    <button class="volver"><i class='bx bx-arrow-back'></i></button>
                </a>
            </div>
            <div class="login">
                <div class="caja-naranja">
                    <div class="formulario">
                        <form method="post" action="registro_process.php" id="loginForm">
                            <p>Nombre completo:</p>
                            <input type="text" class="texto-rest" name="nombre" required placeholder="Ingrese su nombre"> <br>
                            <p>Apellido:</p>
                            <input type="text" class="texto-rest" name=apellido required placeholder="Ingrese su apellido"><br>
                            <p>E-mail:</p>
                            <input type="email" class="correo-rest" name="mail" required placeholder="Ingrese su correo electrónico"> <br>
                            <!--<div class="check">
                                <input type="checkbox" name="recordar" class="cajita"> <p>Recordar inicio de sesión</p>
                            </div> -->
                            <p>Contraseña:</p>
                            <input type="password" class="texto-rest" id="contraseña1" required placeholder="Ingrese contraseña">
                            <!--<ul>
                                <li>Debe incluir al menos 1 número.</li>
                                <li>Debe contener al menos 1 letra mayúscula.</li>
                                <li>La contraseña debe incluir minimo 8 caracteres.</li>
                            </ul> -->
                            <input type="password" class="texto-rest" id="contraseña2" required placeholder="Vuelva a ingresar la contraseña">

                            <input type="hidden" class="texto-rest" name="contrasena" id="contraseña" required>
                            <input class="iniciar" type="submit" id="subir" value="Registrarse"><br>
                            <span id="avisocontra">*Las contraseñas no son iguales en ambos campos</span>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

</body>
<script src="js/inputValidator.js"></script>
<script>
    let loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();

        var contra1 = document.getElementById('contraseña1');
        var contra2 = document.getElementById('contraseña2');
        var contrafinal = document.getElementById('contraseña');
        var avisocontra = document.getElementById('avisocontra');

        if(contra1.value != contra2.value){
            avisocontra.style.visibility = 'visible';
        }
        else{
            avisocontra.style.visibility = 'hidden';
            contrafinal.value = contra1.value;
            loginForm.submit();
        }
    });
</script>
</html>