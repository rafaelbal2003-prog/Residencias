<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Proyecto</title>
    <link rel="stylesheet" href="solar/bootstrap.min.css">
    <style>
        .seccion {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .checkbox-box {
            background: #f1f1f1;
            padding: 6px 10px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            margin-bottom: 6px;
        }

        .checkbox-box input[type="checkbox"] {
            transform: scale(1.2);
            margin-right: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;" class="mt-3">PROYECTO EDUCACIÓN DUAL</h1>
    <h2 style="text-align: center;">Registrar Nuevo Proyecto</h2>

    <div class="container mt-4">
        <form class="form-control" action="#" method="POST">
            
            <div class="seccion" style="border: 1px solid #d0d0d0; padding: 25px; border-radius: 8px; background: #fafafa;">
                
                <div class="header bg-primary text-white text-center py-2 mb-4" style="font-size: 20px; font-weight: 600; letter-spacing: 0.5px;">
                    Datos del Proyecto
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-semibold" style="color:#003366;">Descripción</label>
                    <textarea class="form-control" rows="3" id="descripcion" name="descripcion" required placeholder="Describe brevemente el objetivo del proyecto..."></textarea>
                </div>

                <div class="mb-3">
                    <label for="id_empresa" class="form-label fw-semibold" style="color:#003366;">Empresa Asignada</label>
                    <select class="form-select" id="id_empresa" name="id_empresa" required>
                        <option value="">-- Selecciona una empresa --</option>
                        <option value="1">Empresa de Ejemplo 1</option>
                        <option value="2">Tecnologías XYZ</option>
                        <option value="3">Corporativo ABC</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fecha_inicio" class="form-label fw-semibold" style="color:#003366;">Fecha de Inicio</label>
                    <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                </div>

                <input type="hidden" name="id_asesor" value="ID_DEL_ASESOR_AQUI">

                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-info w-100">Crear Proyecto</button>
                </div>

            </div>

        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>