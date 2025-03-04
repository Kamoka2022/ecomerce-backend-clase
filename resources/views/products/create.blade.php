<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
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
        .form-container {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
                Crear Producto
            </a>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center">Agregar Nuevo Producto</h2>
                    <form>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="text" class="form-control" id="precio" required>
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">URL de la Imagen</label>
                            <input type="text" class="form-control" id="imagen" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Agregar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        &copy; 2025 Universidad - Las promociones están sujetas a cambios sin previo aviso.
    </footer>
</body>
</html>