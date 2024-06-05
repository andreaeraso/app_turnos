<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrador de Turnos</title>
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
    <!-- Contenedor principal con margen superior para espaciar el contenido desde la parte superior -->
    <div class="container mt-5">
        <div class="form-container">
            <!-- Encabezado principal centrado -->
            <h1 class="text-center">Administrador de Turnos</h1>
            
            <!-- Formulario para avanzar el turno, enviando los datos a avanzar_turno.php mediante el método POST -->
            <form action="avanzar_turno.php" method="POST" class="mt-4">
                <div class="form-group">
                    <label for="servicio">Servicio:</label>
                    <!-- Menú desplegable para seleccionar el servicio, estilizado con Bootstrap y obligatorio -->
                    <select id="servicio" name="servicio" class="form-control" required>
                        <!-- Opción para el servicio de caja -->
                        <option value="caja">Caja</option>
                        <!-- Opción para el servicio de trámites -->
                        <option value="tramites">Trámites</option>
                        <!-- Opción para el servicio de información -->
                        <option value="informacion">Información</option>
                    </select>
                </div>
                <!-- Botón de envío del formulario -->
                <button type="submit" class="btn btn-primary btn-block">Avanzar Turno</button>
            </form>
        </div>
    </div>
</body>
</html>
