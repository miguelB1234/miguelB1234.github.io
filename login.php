<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $tipo = $_POST['tipo'] ?? '';
    $clave = $_POST['clave'] ?? '';

    if ($tipo === 'estudiante') {
        $_SESSION['usuario'] = $nombre;
        $_SESSION['rol'] = 'estudiante';
        header("Location: index.php");
        exit();
    } elseif ($tipo === 'admin' && $clave === '1234') {
        $_SESSION['usuario'] = $nombre;
        $_SESSION['rol'] = 'admin';
        header("Location: admin.php");
        exit();
    } else {
        $error = "Credenciales inválidas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Educativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --verde-institucional: #2d5016;
            --verde-claro: #4a7c59;
            --amarillo-institucional: #f4d03f;
            --amarillo-claro: #f7dc6f;
        }
        
        body {
            background: linear-gradient(135deg, var(--verde-institucional) 0%, var(--verde-claro) 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login-container {
            animation: slideInDown 0.8s ease-out;
        }
        
        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .card-header {
            background: linear-gradient(45deg, var(--verde-institucional), var(--verde-claro));
            color: white;
            border-radius: 20px 20px 0 0 !important;
            text-align: center;
            padding: 2rem;
        }
        
        .institution-logo {
            width: 80px;
            height: 80px;
            background: var(--amarillo-institucional);
            border-radius: 50%;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--verde-institucional);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--amarillo-institucional);
            box-shadow: 0 0 0 0.2rem rgba(244, 208, 63, 0.25);
        }
        
        .form-select {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-select:focus {
            border-color: var(--amarillo-institucional);
            box-shadow: 0 0 0 0.2rem rgba(244, 208, 63, 0.25);
        }
        
        .btn-login {
            background: linear-gradient(45deg, var(--verde-institucional), var(--verde-claro));
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(45, 80, 22, 0.4);
            background: linear-gradient(45deg, var(--verde-claro), var(--verde-institucional));
        }
        
        .alert-danger {
            background: rgba(220, 53, 69, 0.1);
            border: 1px solid #dc3545;
            border-radius: 10px;
            color: #721c24;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--verde-institucional);
            margin-bottom: 8px;
        }
        
        .input-group-text {
            background: var(--amarillo-claro);
            border: 2px solid #e0e0e0;
            border-right: none;
            color: var(--verde-institucional);
        }
        
        .form-control.with-icon {
            border-left: none;
        }
        
        .footer-text {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 2rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="login-container col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="institution-logo">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="mb-0">Promocion Social</h3>
                    <p class="mb-0 mt-2 opacity-75">Sistema de Gestión Académica</p>
                </div>
                <div class="card-body p-4">
                    <h4 class="text-center mb-4" style="color: var(--verde-institucional);">
                        <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                    </h4>
                    
                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">
                                <i class="fas fa-user me-1"></i>Nombre:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" class="form-control with-icon" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="tipo" class="form-label">
                                <i class="fas fa-users me-1"></i>Tipo de usuario:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-id-badge"></i>
                                </span>
                                <select class="form-select with-icon" id="tipo" name="tipo" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="estudiante">👨‍🎓 Estudiante</option>
                                    <option value="admin">👨‍💼 Administrador</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="clave" class="form-label">
                                <i class="fas fa-lock me-1"></i>Contraseña <small class="text-muted">(solo para admin)</small>:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input type="password" class="form-control with-icon" id="clave" name="clave" placeholder="Ingrese su contraseña">
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-login text-white">
                                <i class="fas fa-sign-in-alt me-2"></i>Ingresar al Portal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-text">
                <i class="fas fa-shield-alt me-1"></i>
                Portal Seguro - Institución Educativa
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>