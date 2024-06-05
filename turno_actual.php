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
        <div class="mt-4">
            <ul class="list-group">
                <?php
                include 'db.php';

                $servicios = ['caja', 'tramites', 'informacion'];
                foreach ($servicios as $servicio) {
                    echo "<h2>" . ucfirst($servicio) . "</h2>";

                    $sql = "SELECT turno FROM clientes WHERE servicio='$servicio' AND atendido=FALSE ORDER BY id ASC LIMIT 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo "<li class='list-group-item'>Turno actual: {$row['turno']}</li>";
                    } else {
                        echo "<li class='list-group-item'>No hay turnos pendientes</li>";
                    }
                }

                $conn->close();
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
