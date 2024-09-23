<?php
include('conexion.php'); // Incluye el archivo de conexión

// Obtener la lista de productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-section">
                <h1>Agregar Producto</h1>
                <form action="insertar.php" method="POST">
                    <div class="form-row">
                        <label>Nombre del producto:</label>
                        <input type="text" name="nombre" class="input-nombre" required>
                    </div>
                    <div class="form-row">
                        <label>Precio:</label>
                        <input type="number" name="precio" class="input-precio" step="0.01" required>
                        <label>Cantidad:</label>
                        <input type="number" name="cantidad" class="input-cantidad" required>
                        <button type="submit">Registrar</button>
                    </div>
                </form>
            </div>

            <div class="table-section">
                <h1>Inventario de Productos</h1>
                <div class="table-wrapper"> <!-- Nuevo contenedor para la tabla -->
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                        <?php
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . $row["idProd"] . "</td>
                                        <td>" . $row["nombre"] . "</td>
                                        <td>" . $row["precio"] . "</td>
                                        <td>" . $row["cantidad"] . "</td>
                                        <td><a href='eliminar.php?idProd=" . $row["idProd"] . "' onclick=\"return confirm('¿Estás seguro de que quieres eliminar este producto?');\">Eliminar</a></td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No hay productos en el inventario</td></tr>";
                        }
                        ?>
                    </table>
                </div> <!-- Fin del contenedor de la tabla -->
            </div>
        </div>
    </div>
</body>
</html>
