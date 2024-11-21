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
    <link rel="stylesheet" href="css/alan.css">
    <title>Página Principal</title>
</head>
<body>
    <?php
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

    <div class="container">
        <div class="line"></div>
        <h1 class="subti">Nuestros Productos</h1>
        <p>
            Nuestros productos combinan la mejor calidad y sabor, utilizando ingredientes sin gluten 
            seleccionados cuidadosamente. Ofrecemos precios accesibles para que todos puedan disfrutar 
            de opciones deliciosas y saludables, elaboradas con un toque artesanal.
        </p>

        <div class="linechica"></div>


        <h2 class="subti">Sobre Nosotros</h2>
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
    </div>

    <?php
        require_once 'assets/footer.php';
    ?>

    <script src="js/index.js"></script>
    <script src="js/inputValidator.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
