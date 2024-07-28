<?php
$host = 'localhost';
$dbname = 'capilla_santa_clara';
$username = 'root';
$password = '';
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
$conn->set_charset("utf8");
echo "Conexión exitosa";
?>