<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Turnos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo adicional para centrar el formulario y ajustarlo */
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h1 class="text-center">Registro de Turnos</h1>
            
            <!-- Formulario para registrar turnos, enviando datos a asignar_turno.php -->
            <form action="asignar_turno.php" method="POST" class="mt-4">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <!-- Campo de entrada de texto para el nombre -->
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cedula">Cédula:</label>
                    <!-- Campo de entrada de texto para la cédula -->
                    <input type="text" id="cedula" name="cedula" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="servicio">Servicio:</label>
                    <!-- Menú desplegable para seleccionar el servicio -->
                    <select id="servicio" name="servicio" class="form-control" required>
                        <option value="caja">Caja</option>
                        <option value="tramites">Trámites</option>
                        <option value="informacion">Información</option>
                    </select>
                </div>
                <!-- Botón para enviar el formulario -->
                <button type="submit" class="btn btn-primary btn-block">Obtener Turno</button>
            </form>
        </div>
    </div>
</body>
</html>
