    <?php
        $promociones = [
            ["titulo" => "Beca del 50%", "descripcion" => "Obtén un 50% de descuento en la matrícula para especializaciones en Ciberseguridad y Tecnologías Móviles.", "fecha" => "Aplica hasta el 30 de abril", "imagen" => "https://unab.edu.co/wp-content/uploads/2024/01/Siembra-de-arboles-estudiantes-primer-semestre_15-Baja.jpg"],
            ["titulo" => "Beca del 30%", "descripcion" => "Descuento del 30% en matrículas para maestrías en Desarrollo de Software y Negocios Digitales.", "fecha" => "Válido hasta el 15 de mayo", "imagen" => "https://unab.edu.co/wp-content/uploads/2022/08/inicio-clases-posgrados-1.jpg"],
            ["titulo" => "Descuento por pronto pago", "descripcion" => "Aprovecha un 20% de descuento si pagas tu matrícula antes del 10 de abril.", "fecha" => "Solo para nuevos ingresos", "imagen" => "https://unab.edu.co/wp-content/uploads/2022/08/Aulas2A-3.jpg"]
        ];
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Promociones Académicas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #fff5e6;
            }
            .navbar {
                background-color: #ff8800 !important;
            }
            .navbar-brand, .nav-link {
                color: white !important;
            }
            .promo-card {
                background: linear-gradient(to right, #ff8800, #ffcc99);
                color: white;
                border-radius: 15px;
                padding: 20px;
                text-align: center;
            }
            .promo-card .card-title {
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
            .promo-img {
                width: 100%;
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm7hzhCG-M6xpRWhY7dr0poid_mB6i1MZNEg&s" alt="Logo" class="logo">
                    Becas y Descuentos
                </a>
            </div>
        </nav>
        
        <div class="container mt-4">
            <div class="row">
                <?php foreach ($promociones as $promo): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card promo-card">
                            <img src="<?php echo $promo['imagen']; ?>" alt="<?php echo $promo['titulo']; ?>" class="promo-img">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $promo['titulo']; ?></h5>
                                <p class="card-text text-center"><?php echo $promo['descripcion']; ?></p>
                                <p class="card-text text-center"><small><?php echo $promo['fecha']; ?></small></p>
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
