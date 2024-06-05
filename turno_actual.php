<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turno Actual</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Turno Actual</h1>
        <div class="row mt-4">
            <?php
            include 'db.php'; // Incluye el archivo de conexión a la base de datos

            // Array de servicios disponibles
            $servicios = ['caja', 'tramites', 'informacion'];
            foreach ($servicios as $servicio) {
                echo "<div class='col-md-4'>";
                echo "<h2 class='text-center'>" . ucfirst($servicio) . "</h2>"; // Muestra el nombre del servicio en un título

                // Consulta para obtener el primer turno pendiente del servicio actual
                $sql = "SELECT turno FROM clientes WHERE servicio='$servicio' AND atendido=FALSE ORDER BY id ASC LIMIT 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) { // Si hay turnos pendientes
                    $row = $result->fetch_assoc();
                    echo "<li class='list-group-item'>Turno actual: {$row['turno']}</li>"; // Muestra el turno actual
                } else {
                    echo "<li class='list-group-item'>No hay turnos pendientes</li>"; // Muestra un mensaje si no hay turnos pendientes
                }
                echo "</div>";
            }

            $conn->close(); // Cierra la conexión a la base de datos
            ?>
        </div>
    </div>
</body>
</html>
