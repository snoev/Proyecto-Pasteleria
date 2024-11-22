<?php
    // Inicio de la sesión para gestionar datos del usuario
    session_start();
    // Obtención del nivel de rol del usuario desde la sesión, o asignación de un valor vacío si no está definido
    $userlv = $_SESSION['rol'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Configuración básica de la página -->
        <meta charset="UTF-8"> <!-- Codificación de caracteres -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividad en dispositivos -->
        <!-- Importación de estilos y fuentes -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"><!-- Iconos de Font Awesome -->
        <link rel="icon" href="img/logo.png" type="image/x-icon"> <!-- Icono del navegador -->
        <link rel="stylesheet" href="css/index.css"><!-- Estilos generales de la página principal -->
        <title>Página Principal</title>
    </head>
    <body>
        <?php
            //Código para verificar la membresia
            if(isset($_POST['idUsuario'])){
                require_once "conexion.php";
                $con=conectar();
                $id = $_POST['idUsuario']; //Guardo el dato del id de usuario traido por post en la variable id
                $sql="select contra from usuarios where idUsuario='$id';"; //Creo la consulta sql para pedir la contraseña del usuario
                $res=mysqli_query($con, $sql); //Ejecuto la consulta y guardo el resultado en $res
                if(mysqli_affected_rows($con)>0){ //Me fijo si hubo filas afectadas
                    $registro=mysqli_fetch_assoc($res); //Genero un array asociativo donde los indices son los nombres de los campos
                }
                $contra=$_POST['contrasena']; //Guardo el dato de la contraseña del usuario traida por post en la variable contra
                if($contra == $registro['contra']){ //Verifico si los datos traidos son iguales a los que se encuentran en la base de datos
                    $mostrarMensaje = True; //Creo y confirmo la variable para mostrar el mensaje de exito
                    date_default_timezone_set('America/Argentina/Buenos_Aires'); //Defino que zona horaria utilizar para sacar el tiempo
                    $fechaHoy = date('Y/m/d', time()); //Defino el día de hoy para saber cuando comienza la suscripción
            
                    require_once "conexion.php";
                    $conn = conectar();
            
                    if ($conn->connect_error) {
                        die("Error de conexión: " . $conn->connect_error); //En caso de error
                    }
                    
                    $sql = "INSERT INTO miembros (usuario_id, fechaInicio, fechaFin, estado) VALUES(?, ?, null, 'Activo');"; //Creo la primera consulta sql para insertar los datos obtenidos en la tabla de miembros

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("is", $id, $fechaHoy);

                    $sql2 = "UPDATE usuarios SET rol = 2 WHERE idUsuario = ? AND rol = 3"; //Creo la segunda consulta sql para actualizar el rol del usuario al rol de miembro

                    $stmt2 = $conn->prepare($sql2);
                    $stmt2->bind_param("i", $id);
                    
                    //Si se ejecutan correctamente
                    if ($stmt->execute() && $stmt2->execute()) {
                        echo "<div id='msg' class='success-msg'><p class='texto-aviso'>Ya es un miembro! Muchas gracias por asociarse a nosotros.</p></div>"; //Muestro el mensaje de exito
                    } else {
                        //Si no se ejecuta correctamente
                        echo "<div id='msg' class='error-msg'><p class='texto-aviso'>Error: " . $stmt->error . "</p></div>"; //Muestro el mensaje de error
                    }
                
                    // Cerrar la declaración
                    $stmt->close();
                }
                else{
                    echo '<script>alert("Contraseña incorrecta.");</script>'; //Si la contraseña no es la correcta muestro una alerta
                }
            }
            if (isset($_POST['idUsuario'])):
        ?>
        <!-- Estilos definidos solo si idUsuario esta presente -->
        <style>
            .texto-aviso{
                margin: 0 auto;
            }
            .success-msg {
                background-color: #28a745 !important;
                text-align: center !important;
                font-size: 1.1rem !important;
                margin: 2rem 30% !important;
                position: fixed !important;
                top: 0 !important;
                display: flex !important;
                flex-wrap: wrap !important;
                z-index: 100;
                padding: 20px;
                width: 40%;
                transform: translateY(-100%);
                transition: transform 0.5s ease-in-out;
            }
            .error-msg {
                background-color: #dc3545 !important;
                text-align: center !important;
                font-size: 1.1rem !important;
                margin: 2rem 32% !important;
                position: fixed !important;
                top: 0 !important;
                flex-wrap: wrap !important;
                z-index: 100;
                padding: 20px;
                transform: translateY(-100vh);
                transition: transform 0.5s ease-in-out;
            }
            #msg.mostrar {
            transform: translateY(0);
            }

            #msg.ocultar {
            transform: translateY(-100vh);
            }
        </style>
        <!-- Código para la animación de entrada y salida -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const mostrarMensaje = <?php echo json_encode($mostrarMensaje); ?>;
                const mensaje = document.getElementById("msg");

                if (mostrarMensaje) {
                    // Muestro el mensaje
                    mensaje.style.display = "flex";
                    mensaje.classList.add("mostrar");

                    // Espero 3 segundos y luego lo oculto
                    setTimeout(() => {
                        mensaje.classList.add("ocultar");
                        mensaje.classList.remove("mostrar");

                        // Después de la animación, oculto el elemento del DOM
                        setTimeout(() => {
                            mensaje.style.display = "none";
                        }, 500);
                    }, 3000);
                }
            });
        </script>
        <!-- Inclusión de un archivo PHP externo para la barra de navegación -->
        <?php
            endif;
            require_once 'assets/indexnavbar.php';
        ?> 
         <!-- Sección del carrusel de imágenes -->
        <section class="carousel">
            <div class="slider-wrapper">
                <div class="slider">
                     <!-- Imágenes que forman parte del carrusel -->
                    <img id="slide-1" src="img/carruzel1.jpg">
                    <img id="slide-2" src="img/carruzel2.jpg">
                    <img id="slide-3" src="img/carruzel3.jpg">
                    <img id="slide-4" src="img/carruzel4.jpg">
                    
                </div>
                <!-- Navegación del carrusel con enlaces hacia las distintas imágenes -->
                <div class="slider-nav">
                    <a href="#slide-1"></a>
                    <a href="#slide-2"></a>
                    <a href="#slide-3"></a>
                    <a href="#slide-4"></a>
                </div>
            </div>
        </section>

        <span id="Nosotros"></span>
        <span><br><br><br><br></span>
         <!-- Contenedor principal de la sección -->
        <div class="info-nuestra">
             <!-- Línea decorativa para separar secciones -->
            <div class="line"></div>
            <!-- Título para la sección de productos -->
            <h1 class="subti">Nuestros Productos</h1>
             <!-- Descripción de los productos: calidad, precio y características -->
            <p class="texto-info">
                Nuestros productos combinan la mejor calidad y sabor, utilizando ingredientes sin gluten 
                seleccionados cuidadosamente. Ofrecemos precios accesibles para que todos puedan disfrutar 
                de opciones deliciosas y saludables, elaboradas con un toque artesanal.
            </p>
            <!-- Línea más pequeña como separador visual entre los productos y el siguiente contenido -->
            <div class="linechica"></div>

            <!-- Subtítulo para la sección "Sobre Nosotros" -->
            <h2 class="subti">Sobre Nosotros</h2>
            <!-- Descripción de la panadería-->
            <p class="texto-info">
                Somos una panadería comprometida con ofrecer opciones sin gluten que deleiten a todos. 
                Trabajamos con pasión y dedicación para garantizar productos de alta calidad, cuidando 
                cada detalle en su elaboración. ¡Nuestra misión es llenar tu mesa de momentos inolvidables!
            </p>
        </div>
        <!-- Línea decorativa para separar la sección "Nosotros" del resto del contenido -->
        <div class="line"></div>
        <!-- Contenedor para la ubicación y la información de contacto -->
        <div class="cont">
            <!-- Información textual sobre la ubicación y contacto -->
            <div class="info-ubi">
                <!-- Título de la sección de ubicación -->
                <h2>¿Donde Estamos?</h2>
                <!-- Información sobre la dirección física -->
                <p class="texto-info"><span class="highlight">VISÍTANOS EN NUESTRA ÚNICA DIRECCIÓN</span></p>
                <p class="texto-info">Venezuela 2033, B1882 Quilmes, Provincia de Buenos Aires</p>
                <!-- Horarios de atención por días -->
                <p class="texto-info"><span class="highlight">De Lunes a Viernes:</span> 9AM-2PM | 4PM-7:30PM</p>
                <p class="texto-info"><span class="highlight">Sábados:</span> 9AM-2PM</p>
                <p class="texto-info"><span class="highlight">Domingos y Feriados:</span> Cerrado</p>
                <!-- Enlace a WhatsApp con número de contacto -->
                <p class="texto-info"><span class="highlight">WhatsApp:</span> <a href="https://wa.me/01154740106" target="_blank">011 5474-0106</a></p>
            </div>
             <!-- Mapa incrustado con la ubicación de la panadería -->
            <iframe 
                src="https://www.google.com/maps?q=https://maps.app.goo.gl/iYWBg14XJxrdgYyN6?g_st=com.google.maps.preview.copy&output=embed" 
                width="600" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
        <!-- Inclusión del pie de página desde un archivo externo -->
        <?php
            require_once 'assets/footer.php';
        ?>

        <!-- Inclusión de los archivo JavaScript -->
        <script src="js/carrusel.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>