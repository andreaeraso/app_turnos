<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turnos Pendientes y Atendidos</title>
    <!-- Inclusión de la hoja de estilos de Bootstrap desde un CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Contenedor principal con margen superior -->
    <div class="container mt-5">
        <h1 class="text-center">Turnos Pendientes y Atendidos</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2 class="text-center">Pendientes</h2>
                <ul class="list-group">
                    <?php
                    include 'db.php'; // Incluye el archivo de conexión a la base de datos

                    // Consulta para obtener los turnos pendientes
                    $sql = "SELECT nombre, turno, servicio FROM clientes WHERE atendido=FALSE";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) { // Si hay turnos pendientes
                        while($row = $result->fetch_assoc()) { // Recorre todos los resultados
                            echo "<li class='list-group-item'>{$row['nombre']} - {$row['turno']} ({$row['servicio']})</li>"; // Muestra cada turno pendiente
                        }
                    } else {
                        echo "<li class='list-group-item'>No hay turnos pendientes</li>"; // Mensaje si no hay turnos pendientes
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Atendidos</h2>
                <ul class="list-group">
                    <?php
                    // Consulta para obtener los turnos atendidos
                    $sql = "SELECT nombre, turno, servicio FROM clientes WHERE atendido=TRUE";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) { // Si hay turnos atendidos
                        while($row = $result->fetch_assoc()) { // Recorre todos los resultados
                            echo "<li class='list-group-item'>{$row['nombre']} - {$row['turno']} ({$row['servicio']})</li>"; // Muestra cada turno atendido
                        }
                    } else {
                        echo "<li class='list-group-item'>No hay turnos atendidos</li>"; // Mensaje si no hay turnos atendidos
                    }

                    $conn->close(); // Cierra la conexión a la base de datos
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
