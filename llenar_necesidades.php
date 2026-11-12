<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detección de Necesidades</title>
    <link rel="stylesheet" href="solar/bootstrap.min.css">
    <style>
        body { background-color: #f4f7f6; }
        .seccion { background-color: rgba(255, 255, 255, 0.8); padding: 25px; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); border: 1px solid #d0d0d0; background: #fafafa; }
    </style>
</head>
<body>

    <h1 style="text-align: center;" class="mt-4">PROYECTO EDUCACIÓN DUAL</h1>
    <h2 style="text-align: center;">Detección de necesidades (Completar)</h2>

    <div class="container mt-4">
        <form action="#" method="POST">
            
            <div class="seccion">
                <div class="header bg-primary text-white text-center py-2 mb-4" style="font-size: 20px; font-weight: 600;">
                    Descripción del proyecto
                </div>
                <div class="mb-3"><label class="form-label fw-semibold" style="color:#003366;">Objetivo General</label><textarea class="form-control" rows="2" required></textarea></div>
                <div class="mb-3"><label class="form-label fw-semibold" style="color:#003366;">Resultados esperados</label><textarea class="form-control" rows="2" required></textarea></div>
            </div>

            <div class="seccion">
                <div class="header bg-primary text-white text-center py-2 mb-4" style="font-size: 20px; font-weight: 600;">
                    Características de los colaboradores (estudiantes)
                </div>
                <h5 class="mt-3">Número de estudiantes requeridos</h5>
                <div class="row mb-3">
                    <div class="col-md-4"><label class="form-label">Hombres</label><input type="number" class="form-control"></div>
                    <div class="col-md-4"><label class="form-label">Mujeres</label><input type="number" class="form-control"></div>
                    <div class="col-md-4"><label class="form-label">Indistinto</label><input type="number" class="form-control"></div>
                </div>
                <div class="mb-3"><label class="form-label fw-semibold">Áreas de interés</label><textarea class="form-control" rows="2" required></textarea></div>
                <div class="mb-3"><label class="form-label fw-semibold">Conocimientos básicos requeridos</label><textarea class="form-control" rows="2" required></textarea></div>
            </div>

            <div class="seccion">
                <div class="header bg-primary text-white text-center py-2 mb-3" style="font-size: 20px; font-weight: 600;">
                    Cronograma de actividades
                </div>
                <div id="actividades"></div>
                <button type="button" class="btn btn-success mt-2" onclick="agregarActividad()">+ Agregar actividad</button>

                <script>
                    let contador = 0;
                    function agregarActividad() {
                        contador++;
                        const div = document.createElement("div");
                        div.classList.add("seccion", "mt-3");
                        div.innerHTML = `
                        <h5 style="color:#003366;">Actividad ${contador}</h5>
                        <div class="row">
                            <div class="col-md-6 mb-2"><label>Descripción</label><input type="text" class="form-control" required></div>
                            <div class="col-md-6 mb-2"><label>Competencias</label><input type="text" class="form-control" required></div>
                            <div class="col-md-6"><label>Tiempo</label><input type="text" class="form-control" required></div>
                            <div class="col-md-6"><label>Evidencias</label><input type="text" class="form-control" required></div>
                        </div>`;
                        document.getElementById("actividades").appendChild(div);
                    }
                    // Agrega una actividad por defecto al cargar la página
                    window.onload = agregarActividad;
                </script>
            </div>

            <div class="seccion">
                <div class="header bg-primary text-white text-center py-2 mb-4" style="font-size: 20px; font-weight: 600;">
                    Firmas y Solicitantes
                </div>
                <!-- Contenedor principal que alinea las 3 firmas en fila -->
                <div style="display: flex; justify-content: space-between; width: 100%; margin-top: 50px; margin-bottom: 30px;">
                
                <!-- Espacio 1 (Izquierda - Ya existente) -->
                <div style="width: 28%; text-align: center;">
                    <div style="border-bottom: 1px dashed #666; height: 60px; margin-bottom: 8px;"></div>
                    <p style="font-family: sans-serif; font-size: 14px; color: #333; margin: 0;">Firma del Responsable</p>
                </div>

                <!-- Espacio 2 (Centro) -->
                <div style="width: 28%; text-align: center;">
                    <div style="border-bottom: 1px dashed #666; height: 60px; margin-bottom: 8px;"></div>
                    <p style="font-family: sans-serif; font-size: 14px; color: #333; margin: 0;">Firma del Responsable 1</p>
                </div>

                <!-- Espacio 3 (Derecha) -->
                <div style="width: 28%; text-align: center;">
                    <div style="border-bottom: 1px dashed #666; height: 60px; margin-bottom: 8px;"></div>
                    <p style="font-family: sans-serif; font-size: 14px; color: #333; margin: 0;">Firma del Responsable 2</p>
                </div>

                </div>                        
            </div>

            <div class="text-center mb-5">
                <button type="submit" class="btn btn-info btn-lg w-50">Guardar Proyecto y Generar Formato</button>
            </div>

        </form>
    </div>

</body>
</html>