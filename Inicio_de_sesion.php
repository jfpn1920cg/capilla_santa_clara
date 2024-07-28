<?php
session_start();
include 'Conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM registro WHERE usuario = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['usuario'];
        header("Location: Panel_de_control.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
