<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turno Asignado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo adicional para centrar el contenido y estilizar el ticket */
        .ticket-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px dashed #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            text-align: center;
        }
        .ticket-header {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .ticket-turno {
            font-size: 2em;
            font-weight: bold;
            color: #007bff;
            margin-top: 10px;
        }
        .ticket-message {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="ticket-container">
            <div class="ticket-message">
                <?php
                // Verifica si se ha proporcionado un turno a través de GET
                if (isset($_GET['turno'])) {
                    // Obtiene el turno y lo muestra en negrita
                    $turno = htmlspecialchars($_GET['turno']);
                    echo "Tu turno es:";
                    echo "<div class='ticket-turno'>$turno</div>";
                } else {
                    // Muestra un mensaje de error si no se pudo obtener el turno
                    echo "Error: No se pudo obtener el turno.";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>



