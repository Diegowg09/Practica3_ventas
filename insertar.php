<?php
include('conexion.php');

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

// Insertar el producto en la base de datos
$sql = "INSERT INTO productos (nombre, precio, cantidad) VALUES ('$nombre', '$precio', '$cantidad')";

if ($conn->query($sql) === TRUE) {
    echo "Producto registrado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Redireccionar de nuevo a la página principal
header("Location: index.php");
exit();
?>
