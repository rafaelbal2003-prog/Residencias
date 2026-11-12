<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="solar/bootstrap.min.css">
    <style>
        body { background-color: #f4f7f6; padding-top: 50px; }
        .seccion {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 style="text-align: center; color:#003366;" class="mb-4">Panel del Asesor</h1>

        <div class="seccion" style="border: 1px solid #d0d0d0; background: #fafafa;">
            <h3 class="mb-4">¿Qué deseas hacer hoy?</h3>
            
            <div class="d-grid gap-3 col-md-6 mx-auto">
                <a href="crear_proyecto.php" class="btn btn-primary btn-lg">Crear Nuevo Proyecto</a>
                <a href="llenar_necesidades.php" class="btn btn-secondary btn-lg">Lista de Proyectos</a>
            </div>
        </div>
    </div>

</body>
</html>