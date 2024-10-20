<?php

$restaurantes = array("La Parrilla",
    "El Buen Sabor",
    "Mariscos del Puerto",
    "Pizza Express",
    "Tacos Mexicanos");    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>
</head>
<body>
<h1 style="color:blue;">Seleccione un restaurante</h1>
    <ul>
        <?php      
        foreach ($restaurantes as $key => $restaurante) {
            echo "<li><a href='restaurante.php?id=$key'>$restaurante</a></li>";
        }
        ?>
    </ul>
    
</body>
</html>