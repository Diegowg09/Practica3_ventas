<?php
$servername = "localhost"; // Dirección del servidor MySQL
$username = "root";        // Nombre de usuario para la conexión
$password = "d13go";       // Contraseña para el usuario
$dbname = "inventario";    // Nombre de la base de datos que quieres usar

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
} else {
}
?>
