<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Turnos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Registro de Turnos</h1>
        <form action="asignar_turno.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cedula">Cédula:</label>
                <input type="text" id="cedula" name="cedula" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="servicio">Servicio:</label>
                <select id="servicio" name="servicio" class="form-control" required>
                    <option value="caja">Caja</option>
                    <option value="tramites">Trámites</option>
                    <option value="informacion">Información</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Obtener Turno</button>
        </form>
    </div>
</body>
</html>
