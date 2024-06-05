<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servicio = $_POST['servicio'];

    $sql = "SELECT id FROM clientes WHERE servicio='$servicio' AND atendido=FALSE ORDER BY id ASC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];

        $sql = "UPDATE clientes SET atendido=TRUE WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Turno avanzado correctamente";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "No hay turnos pendientes en este servicio";
    }
}

$conn->close();
?>
