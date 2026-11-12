
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Proyecto</title>
    <link rel="stylesheet" href="solar/bootstrap.min.css">
    <style>
        body { background-color: #f4f7f6; }
        .seccion { background-color: rgba(255, 255, 255, 0.8); padding: 25px; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); border: 1px solid #d0d0d0; background: #fafafa; }
        .checkbox-box { background: #f1f1f1; padding: 6px 10px; border-radius: 6px; display: flex; align-items: center; margin-bottom: 6px; }
        .checkbox-box input[type="checkbox"] { transform: scale(1.2); margin-right: 8px; cursor: pointer; }
    </style>
</head>
<body>

    <h1 style="text-align: center;" class="mt-4">PROYECTO EDUCACIÓN DUAL</h1>
    <h2 style="text-align: center;">Datos Iniciales del Proyecto</h2>

    <div class="container mt-4">
        <form action="llenar_necesidades.php" method="GET">
            
            <div class="seccion">
                <div class="header bg-primary text-white text-center py-2 mb-4" style="font-size: 20px; font-weight: 600;">
                    Información Básica
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#003366;">Empresa / Organización</label>
                    <input type="text" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#003366;">Nombre del Proyecto</label>
                    <input type="text" class="form-control" required>
                </div>

                <h5 class="mt-4 fw-bold" style="color:#003366;">Periodo de realización</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Inicio</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Fin</label>
                        <input type="date" class="form-control" required>
                    </div>
                </div>

                <h5 class="mt-4 fw-bold text-center" style="color:#003366;">Programas Educativos</h5>
                <div class="row mt-3">
                    <div class="col-md-6"><div class="checkbox-box"><input type="checkbox" id="ind"><label for="ind" class="mb-0">Ingeniería Industrial</label></div></div>
                    <div class="col-md-6"><div class="checkbox-box"><input type="checkbox" id="meca"><label for="meca" class="mb-0">Ingeniería Mecatrónica</label></div></div>
                    <div class="col-md-6"><div class="checkbox-box"><input type="checkbox" id="isic"><label for="isic" class="mb-0">Ingeniería en Sistemas Computacionales</label></div></div>
                    <div class="col-md-6"><div class="checkbox-box"><input type="checkbox" id="ali"><label for="ali" class="mb-0">Ingeniería en Industrias Alimentarias</label></div></div>
                </div>
            </div>

            <div class="text-end mb-5">
                <button type="submit" class="btn btn-info btn-lg">Siguiente: Detección de Necesidades</button>
            </div>
            
        </form>
    </div>

</body>
</html>