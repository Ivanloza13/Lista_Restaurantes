<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $restaurante = isset($_POST['restaurante']) ? $_POST['restaurante'] : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $personas = isset($_POST['personas']) ? $_POST['personas'] : '';

    if (!empty($restaurante) && !empty($fecha) && !empty($personas)) {
        echo "<h1>Reserva confirmada</h1>";
        echo "<p>Restaurante: " . htmlspecialchars($restaurante) . "</p>";
        echo "<p>Fecha: " . htmlspecialchars($fecha) . "</p>";
        echo "<p>Número de personas: " . htmlspecialchars($personas) . "</p>";
    } else {
        echo "<h1>Error en la reserva</h1>";
        echo "<p>Faltan datos. Por favor, vuelve a intentarlo.</p>";
    }
}
?>