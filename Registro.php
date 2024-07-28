<?php
include 'Conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $ciudad = $_POST['ciudad'];
    $barrio = $_POST['barrio'];
    $tipo_cedula = $_POST['tipo_cedula'];
    $numero_cedula = $_POST['numero_cedula'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashear la contraseña

    $query = "SELECT * FROM registro WHERE correo = ? OR numero_cedula = ? OR usuario = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$correo, $numero_cedula, $usuario]);

    if ($stmt->rowCount() > 0) {
        echo "Error: El usuario, correo o número de cédula ya están registrados.";
    } else {
        $query = "INSERT INTO registro (nombre, apellido, edad, sexo, ciudad, barrio, tipo_cedula, numero_cedula, usuario, correo, password) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$nombre, $apellido, $edad, $sexo, $ciudad, $barrio, $tipo_cedula, $numero_cedula, $usuario, $correo, $password]);

        echo "Registro exitoso. Ahora puedes iniciar sesión.";
        // Redirigir al login
        header("Location: index.html");
        exit();
    }
}
?>
