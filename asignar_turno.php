<?php
include 'db.php'; // Incluye el archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica que el formulario se haya enviado mediante POST
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $servicio = $_POST['servicio'];

    // Selecciona el último turno del servicio específico
    $sql = "SELECT ultimo_turno FROM servicios WHERE servicio='$servicio'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $ultimo_turno = $row['ultimo_turno'] + 1; // Incrementa el último turno en 1

    // Crea el nuevo turno concatenando la inicial del servicio con el número de turno
    $turno = substr($servicio, 0, 1) . $ultimo_turno;

    // Inserta el nuevo cliente y su turno en la base de datos
    $sql = "INSERT INTO clientes (nombre, cedula, servicio, turno) VALUES ('$nombre', '$cedula', '$servicio', '$turno')";
    if ($conn->query($sql) === TRUE) { // Si la inserción fue exitosa
        // Actualiza el último turno del servicio
        $sql = "UPDATE servicios SET ultimo_turno=$ultimo_turno WHERE servicio='$servicio'";
        $conn->query($sql);

        // Redirige al usuario a la página donde se muestra su turno
        header("Location: ver_turno.php?turno=$turno");
        exit();
    } else {
        // Muestra un mensaje de error si la inserción falla
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); // Cierra la conexión a la base de datos
?>
