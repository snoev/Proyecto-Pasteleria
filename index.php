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
        <link rel="icon" href="img/logo.png" type="image/x-icon">
        <title>Página Principal</title>
    </head>
    <body>
        <?php
            if(isset($_POST['idUsuario'])){
                $mostrarMensaje = True;
                date_default_timezone_set('America/Argentina/Buenos_Aires');
                $fechaHoy = date('Y/m/d', time());
                $id = $_POST['idUsuario'];
        
                require_once "conexion.php";
                $conn = conectar();
        
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }
                
                $sql = "INSERT INTO miembros (usuario_id, fechaInicio, fechaFin, estado) VALUES(?, ?, null, 'Activo');";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("is", $id, $fechaHoy);
            
                if ($stmt->execute()) {
                    echo "<div id='msg' class='success-msg'><p class='texto-aviso'>Ya es un miembro! Muchas gracias por asociarse a nosotros.</p></div>";
                } else {
                    echo "<div id='msg' class='error-msg'><p class='texto-aviso'>Error: " . $stmt->error . "</p></div>";
                }
            
                // Cerrar la declaración
                $stmt->close();
            }
            if (isset($_POST['idUsuario'])):
        ?>
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
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const mostrarMensaje = <?php echo json_encode($mostrarMensaje); ?>;
                const mensaje = document.getElementById("msg");

                if (mostrarMensaje) {
                    // Mostrar el mensaje
                    mensaje.style.display = "flex";
                    mensaje.classList.add("mostrar");

                    // Esperar 3 segundos y luego ocultar
                    setTimeout(() => {
                        mensaje.classList.add("ocultar");
                        mensaje.classList.remove("mostrar");

                        // Después de la animación, ocultar el elemento del DOM
                        setTimeout(() => {
                            mensaje.style.display = "none";
                        }, 500);
                    }, 3000);
                }
            });
        </script>
        <?php
            endif;
            require_once 'assets/indexnavbar.php';
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

        <span id="Nosotros"></span>
        <span><br><br><br><br></span>
        <div class="info-nuestra">
            <div class="line"></div>
            <h1 class="subti">Nuestros Productos</h1>
            <p class="texto-info">
                Nuestros productos combinan la mejor calidad y sabor, utilizando ingredientes sin gluten 
                seleccionados cuidadosamente. Ofrecemos precios accesibles para que todos puedan disfrutar 
                de opciones deliciosas y saludables, elaboradas con un toque artesanal.
            </p>

            <div class="linechica"></div>


            <h2 class="subti">Sobre Nosotros</h2>
        <p class="texto-info">
                Somos una panadería comprometida con ofrecer opciones sin gluten que deleiten a todos. 
                Trabajamos con pasión y dedicación para garantizar productos de alta calidad, cuidando 
                cada detalle en su elaboración. ¡Nuestra misión es llenar tu mesa de momentos inolvidables!
            </p>
        </div>
            <div class="line"></div>
            
        <div class="cont">
            <div class="info-ubi">
                <h2>¿Donde Estamos?</h2>
                <p class="texto-info"><span class="highlight">VISÍTANOS EN NUESTRA ÚNICA DIRECCIÓN</span></p>
                <p class="texto-info">Venezuela 2033, B1882 Quilmes, Provincia de Buenos Aires</p>
                <p class="texto-info"><span class="highlight">De Lunes a Viernes:</span> 9AM-2PM | 4PM-7:30PM</p>
                <p class="texto-info"><span class="highlight">Sábados:</span> 9AM-2PM</p>
                <p class="texto-info"><span class="highlight">Domingos y Feriados:</span> Cerrado</p>
                <p class="texto-info"><span class="highlight">WhatsApp:</span> <a href="https://wa.me/01154740106" target="_blank">011 5474-0106</a></p>
            </div>

            <iframe 
                src="https://www.google.com/maps?q=https://maps.app.goo.gl/iYWBg14XJxrdgYyN6?g_st=com.google.maps.preview.copy&output=embed" 
                width="600" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>

        <?php
            require_once 'assets/footer.php';
        ?>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>