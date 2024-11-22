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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/producto.css">
</head>
<body>
    
    <?php
        require_once 'assets/indexnavbar.php';
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
        ?>
        <div class="producto">
            <div class="img-producto">
                <?php echo "<img src='img/".$row['imagen_url']."'>"; ?>
            </div>
            <div class="detalle">
                <div class="titulo">
                    <h1><?php echo " ".$row['nombre']."</p>"; ?></h1>
                </div>
                <div class="descripcion">
                    <?php echo "ID Producto:".$row['idProducto']."</p> <br>"; ?>
                    <?php echo "Descripcion: ".$row['descripcion']."</p> <br>";  ?>
                    <?php echo "Stock: ".$row['stock']."</p>"; ?>
                </div>
                <div class="compra">
                    <?php echo "precio:".$row['precio']."</p>"; ?>
                    <button>Comprar</button>
                </div>
                </div>
        </div>
    <?php
    } else {
        // Si no se envió el parámetro 'id', mostrar un mensaje
        echo "<h1>Error</h1>";
        echo "<p>No se especificó un producto.</p>";
    }
    ?>

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

    </div>

    <?php
        require_once 'assets/footer.php';
    ?>
</body>
</html>