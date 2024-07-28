<?php
session_start();
include 'conexion.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="Panel_de_control.css">
</head>
<body>
    <div class="sidebar">
        <h2>Bienvenido, <?php echo htmlspecialchars($username); ?></h2>
        <!-- Otras opciones del panel de control -->
    </div>
    <div class="main-content">
        <h1 class="hola">hola mundo</h1>
    </div>
</body>
</html>
