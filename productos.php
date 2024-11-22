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
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/productos.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
        require_once 'assets/indexnavbar.php';
    ?> 
    
    <div class="inicio">
        <!-- section base -->
        <section id="Compra" class="Compra">
            <!-- conexión a la base de datos con una consulta para conetactar a la tabla productos -->
            <?php
            require_once "conexion.php";
            $conn = conectar();
            $sql = "SELECT idProducto,nombre, descripcion, precio, stock, categoria, imagen_url from productos;";
            ?>

            <!-- section para las cards de productos -->
            <div class="cards">
                <?php
                /* conecta la consulta realizada previamente */
                $result = $conn->query($sql);
                /* revisa si hay filas afectadas */
                if ($result->num_rows > 0) {
                    /* por cada fila afectada efectua la devolucion de sus datos de forma prolija */
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="card">
                            <a href="producto.php?id=<?= $row['idProducto']; ?>">
                                <img src="img/<?= $row['imagen_url']; ?>" alt="<?= $row['nombre']; ?>" class="card-img">
                            </a>
                            <p><?= $row['nombre']; ?></p>
                            <button class="btn">
                                <i class="fa-solid fa-cart-plus" style="color: #b3480e;"></i>
                            </button>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </section>
    </div>

    <?php
    // Recuperar el valor del producto desde la URL
    $idProducto = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Mostrar el valor recuperado (para pruebas)
    //echo "ID del producto seleccionado: " . $idProducto;
    ?>

    <?php
        require_once 'assets/footer.php';
    ?>
</body>
</html>