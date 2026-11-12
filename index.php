<?php
session_start();

if (!isset($_SESSION['logeado']) || $_SESSION['logeado'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal - Proyectos</title>
    <link rel="stylesheet" href="solar/bootstrap.min.css">
    <style>
        body { background-color: #f4f7f6; padding-top: 50px; }
        .seccion {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border: 1px solid #d0d0d0; 
            background: #fafafa;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="text-end mb-3">
            <a href="logout.php" class="btn btn-outline-danger">Cerrar Sesión</a>
        </div>

        <h1 style="text-align: center; color:#003366;" class="mb-5">Panel del Asesor</h1>

        <div class="seccion text-center mb-5">
            <h3 class="mb-4">¿Deseas registrar una nueva necesidad?</h3>
            <div class="d-grid gap-3 col-md-6 mx-auto">
                <a href="form.php" class="btn btn-primary btn-lg">Crear Nuevo Proyecto</a>
            </div>
        </div>
        <div class="seccion">
            <div class="header bg-secondary text-white text-center py-2 mb-4" style="font-size: 20px; font-weight: 600; border-radius: 5px;">
                Mis Proyectos Registrados
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped table-hover border">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Empresa / Organización</th>
                            <th>Nombre del Proyecto</th>
                            <th>Periodo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>CIMAT</td>
                            <td>Implementación de Redes</td>
                            <td>15/08/2026 - 15/12/2026</td>
                            <td><button class="btn btn-sm btn-info text-white">Ver detalles</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>CIMAT</td>
                            <td>Desarrollo de medidor de agua</td>
                            <td>01/09/2026 - 30/11/2026</td>
                            <td><button class="btn btn-sm btn-info text-white">Ver detalles</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>