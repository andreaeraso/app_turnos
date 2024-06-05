<?php
// Incluye el archivo de conexión a la base de datos
include 'db.php';

// Verifica si el método de solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el valor del servicio enviado desde el formulario
    $servicio = $_POST['servicio'];

    // Selecciona el primer cliente no atendido en el servicio especificado, ordenado por id ascendente
    $sql = "SELECT id FROM clientes WHERE servicio='$servicio' AND atendido=FALSE ORDER BY id ASC LIMIT 1";
    $result = $conn->query($sql);

    // Verifica si hay resultados
    if ($result->num_rows > 0) {
        // Obtiene la fila del resultado
        $row = $result->fetch_assoc();
        // Obtiene el ID del cliente
        $id = $row['id'];

        // Marca el cliente como atendido en la base de datos
        $sql = "UPDATE clientes SET atendido=TRUE WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            // Muestra un mensaje de éxito si la actualización fue exitosa
            echo "Turno avanzado correctamente";
        } else {
            // Muestra un mensaje de error si ocurrió un problema durante la actualización
            echo "Error: " . $conn->error;
        }
    } else {
        // Muestra un mensaje si no hay turnos pendientes en el servicio especificado
        echo "No hay turnos pendientes en este servicio";
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>

