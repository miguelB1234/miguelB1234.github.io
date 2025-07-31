<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: login.php");
    exit();
}
include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel del Administrador</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="matrix.css">
</head>
<body>
<canvas id="matrix"></canvas>
<div class="container admin-panel">
    <h2 class="admin-title">Administrador: <?php echo $_SESSION['usuario']; ?></h2>
    <p class="logout-link"><a href="logout.php">Cerrar sesión</a></p>

    <h3 class="users-title">Lista de Usuarios Registrados</h3>
    <div class="table-container">
        <table class="admin-table">
            <tr><th>ID</th><th>Nombre</th><th>Tipo</th><th>Fecha Registro</th></tr>
            <?php
            $res = $conn->query("SELECT * FROM usuarios");
            while ($u = $res->fetch_assoc()) {
                echo "<tr><td>{$u['id']}</td><td>{$u['nombre']}</td><td>{$u['tipo_usuario']}</td><td>{$u['fecha_registro']}</td></tr>";
            }
            ?>
        </table>
    </div>
</div>
<script src="matrix.js"></script>
</body>
</html>