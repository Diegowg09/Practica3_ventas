<?php
include('conexion.php'); // Incluye el archivo de conexión

// Verificar que el parámetro idProd está definido
if (isset($_GET['idProd'])) {
    $idProd = intval($_GET['idProd']);

    // Preparar la consulta para eliminar el producto
    $sql = "DELETE FROM productos WHERE idProd = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idProd);

    if ($stmt->execute()) {
        echo "Producto eliminado exitosamente.";
    } else {
        echo "Error al eliminar el producto: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID de producto no proporcionado.";
}

$conn->close();

// Redirigir de vuelta a la página principal
header("Location: index.php");
exit();
?>
