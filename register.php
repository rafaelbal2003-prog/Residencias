<?php
include_once('combos.php');
$empresas=combo_empresas();
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <main class="auth-page d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="card shadow-lg border-0 overflow-hidden">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <h1 class="h3 fw-bold mb-1">Crear cuenta</h1>
                                <p class="text-muted mb-0">Regístrate para usar la plataforma.</p>
                            </div>
                            <form action="register_asesor.php" method="post" autocomplete="off">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nombres" class="form-label">Nombre</label>
                                        <input type="text" class="form-control shadow-sm" id="nombres" name="nombres" placeholder="Juan" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="apellidos" class="form-label">Apellido</label>
                                        <input type="text" class="form-control shadow-sm" id="apellidos" name="apellidos" placeholder="Pérez" required>
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="correo" class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control shadow-sm" id="correo" name="correo" placeholder="nombre@ejemplo.com" required>
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="contrasena" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control shadow-sm" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="id_empresa" class="form-label fw-semibold" style="color:#003366;">Empresa Asignada</label>
                                            <select class="form-select" id="id_empresa" name="id_empresa" required>
                                                <option value="0">-- Selecciona una empresa --</option>
                                                <?php
                                                    echo $empresas;
                                                ?>
                                            </select>
                </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 py-2 mt-4">Crear cuenta</button>
                            </form>

                            <div class="text-center mt-4">
                                <p class="mb-0">¿Ya tienes cuenta? <a href="login.php" class="fw-semibold text-decoration-none">Inicia sesión</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>