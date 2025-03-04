<?php
    $productos = [
        ["titulo" => "Producto 1", "descripcion" => "Descripción del Producto 1", "precio" => "$99.99", "imagen" => "https://via.placeholder.com/150"],
        ["titulo" => "Producto 2", "descripcion" => "Descripción del Producto 2", "precio" => "$49.99", "imagen" => "https://via.placeholder.com/150"],
        ["titulo" => "Producto 3", "descripcion" => "Descripción del Producto 3", "precio" => "$29.99", "imagen" => "https://via.placeholder.com/150"],
        // Agrega más productos según sea necesario
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff5e6;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #ff8800 !important;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .product-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-card .card-title {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .footer {
            background-color: #ff8800;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
            font-size: 1.2rem;
        }
        .logo {
            height: 80px;
            margin-right: 15px;
        }
        .product-img {
            width: 100%;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .btn-primary {
            background-color: #ff8800;
            border-color: #ff8800;
        }
        .btn-primary:hover {
            background-color: #e67e22;
            border-color: #e67e22;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm7hzhCG-M6xpRWhY7dr0poid_mB6i1MZNEg&s" alt="Logo" class="logo">
                Nuestros Productos
            </a>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div class="row">
            <?php foreach ($productos as $producto): ?>
                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['titulo']; ?>" class="product-img">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto['titulo']; ?></h5>
                            <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                            <p class="card-text"><strong><?php echo $producto['precio']; ?></strong></p>
                            <button class="btn btn-primary">Agregar al Carrito</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <footer class="footer">
        &copy; 2025 Universidad - Las promociones están sujetas a cambios sin previo aviso.
    </footer>
</body>
</html>