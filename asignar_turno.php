<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $servicio = $_POST['servicio'];

    $sql = "SELECT ultimo_turno FROM servicios WHERE servicio='$servicio'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $ultimo_turno = $row['ultimo_turno'] + 1;

    $turno = substr($servicio, 0, 1) . $ultimo_turno;

    $sql = "INSERT INTO clientes (nombre, cedula, servicio, turno) VALUES ('$nombre', '$cedula', '$servicio', '$turno')";
    if ($conn->query($sql) === TRUE) {
        $sql = "UPDATE servicios SET ultimo_turno=$ultimo_turno WHERE servicio='$servicio'";
        $conn->query($sql);

        header("Location: ver_turno.php?turno=$turno");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
