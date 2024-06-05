<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turno Asignado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Tu Turno Asignado</h1>
        <div class="alert alert-info text-center">
            <?php
            if (isset($_GET['turno'])) {
                $turno = htmlspecialchars($_GET['turno']);
                echo "Tu turno es: <strong>$turno</strong>";
            } else {
                echo "Error: No se pudo obtener el turno.";
            }
            ?>
        </div>
        <div class="text-center">
            <a href="turnos.php" class="btn btn-primary">Ver todos los turnos</a>
        </div>
    </div>
</body>
</html>
