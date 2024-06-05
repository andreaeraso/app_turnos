<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turnos Pendientes y Atendidos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Turnos Pendientes y Atendidos</h1>
        <div class="mt-4">
            <h2>Pendientes</h2>
            <ul class="list-group">
                <?php
                include 'db.php';

                $sql = "SELECT nombre, turno, servicio FROM clientes WHERE atendido=FALSE";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li class='list-group-item'>{$row['nombre']} - {$row['turno']} ({$row['servicio']})</li>";
                    }
                } else {
                    echo "<li class='list-group-item'>No hay turnos pendientes</li>";
                }

                $conn->close();
                ?>
            </ul>

            <h2 class="mt-4">Atendidos</h2>
            <ul class="list-group">
                <?php
                include 'db.php';

                $sql = "SELECT nombre, turno, servicio FROM clientes WHERE atendido=TRUE";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li class='list-group-item'>{$row['nombre']} - {$row['turno']} ({$row['servicio']})</li>";
                    }
                } else {
                    echo "<li class='list-group-item'>No hay turnos atendidos</li>";
                }

                $conn->close();
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
