<?php
    session_start();
    $userlv = $_SESSION['rol'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registro_membresia.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Asociarse</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['nombre']) || $_SESSION['rol'] != 3 && $_SESSION['rol'] != 1){
            echo "ACCESO NO AUTORIZADO";
            exit();
        }
    ?>
    <div class="container">
        <a href="index.php" id="atras">
            <button class="volver"><i class='bx bx-arrow-back'></i></button>
        </a>
        <div class="login">
            <div class="caja-naranja">
                <div class="formulario">
                    <form method="post" action="index.php" id="loginForm">
                        <input type="hidden" name="idUsuario" value="<?=$_SESSION['id']?>">
                        <p>Nombre completo:</p>
                        <input type="text" class="texto-rest" placeholder="Santino Leonel Castaño" value="<?=$_SESSION['nombre']?>"><br>
                        <p>DNI:</p>
                        <input type="text" class="numero-rest"><br>
                        <p>Numero de tarjeta:</p>
                        <input type="text" id="tarjeta-credito" class="numero-rest" maxlength="19" placeholder="0000 0000 0000 0000"><br>
                        <div id="en-fila">
                            <div class="objetos-juntos">
                                <p>Expira:</p>
                                <input type="text" class="numero-rest" id="expira" maxlength="5" placeholder="MM/AA"><br>
                            </div>
                            <div class="objetos-juntos">
                                <p>CVV/CVC:</p>
                                <input type="text" class="numero-rest" maxlength="4"><br>
                            </div>
                        </div>
                        <p>Contraseña:</p>
                        <input type="password" class="correo-rest" id="contraseña" name="contrasena" required placeholder="Ingrese su contraseña">
                        <input class="iniciar" type="submit" id="subir" value="Comprar"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="js/inputValidator.js"></script>
<script>
    const input = document.getElementById("tarjeta-credito");
    input.addEventListener("input", () => input.value = formatNumber(input.value.replaceAll(" ", "")));

    const formatNumber = (number) => number.split("").reduce((seed, next, index) => {
    if (index !== 0 && !(index % 4)) seed += " ";
    return seed + next;
    }, "");

    let expira = document.getElementById("expira");
    expira.addEventListener('input', slash);

    function slash(){
        if(expira.value.length > 2){
            expira1 = expira.value.slice(0, 2);
            expira1 = expira1+'/'+expira.value.slice(2);
            expira.value = expira1;
        }
    }
</script>
</html>