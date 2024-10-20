<?php

$restaurantes = array(
    "La Parrilla",
    "El Buen Sabor",
    "Mariscos del Puerto",
    "Pizza Express",
    "Tacos Mexicanos"
);

// Comprobar si el parámetro "id" está en la URL
$restauranteSeleccionado = null;
if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] >= 0 && $_GET['id'] < count($restaurantes)) {
    $restauranteSeleccionado = $restaurantes[$_GET['id']];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <style>
        label {
            display: block;
            margin: 10px 0 5px;
        }
    </style>
</head>
<body>
    <h1 style="color:blue;">Formulario de Reserva</h1>

    <form action="procesar_reserva.php" method="POST">
        <label for="restaurante">Nombre del Restaurante</label>
        <input type="text" id="restaurante" name="restaurante" 
               value="<?php echo $restauranteSeleccionado ? $restauranteSeleccionado : ''; ?>" 
               <?php echo $restauranteSeleccionado ? 'readonly' : ''; ?> 
               placeholder="Introduce el nombre del restaurante" required/>

        <label for="fecha">Fecha de la Reserva</label>
        <input type="date" id="fecha" name="fecha" required/>

        <label for="personas">Número de Personas</label>
        <input type="number" id="personas" name="personas" min="1" max="20" required/>

        <input type="submit" value="Reservar">
    </form>

    <script>
        // Validar el formulario antes de enviarlo
        document.querySelector('form').addEventListener('submit', function(event) {
            const fecha = document.getElementById('fecha').value;
            const personas = document.getElementById('personas').value;
            
            const fechaRegex = /^\d{4}-\d{2}-\d{2}$/;
            if (!fechaRegex.test(fecha)) {
                alert("Por favor, introduce una fecha válida.");
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
