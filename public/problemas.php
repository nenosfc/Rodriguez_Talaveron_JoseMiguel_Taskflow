<?php
// Problema 1.1: Perfil de Usuario
// Declara y luego imprime un conjunto de variables con diferentes tipos de datos
$nombre = "Jose Miguel"; // string
$apellidos = "Rodríguez Talaveron"; // string
$edad = 28; // integer
$altura = 1.78; // float
$esEstudiante = true; // boolean

echo "<h3>Problema 1.1: Perfil de Usuario</h3>";
echo "Nombre: " . $nombre . "<br>";
echo "Apellidos: " . $apellidos . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Altura: " . $altura . " metros<br>";
echo "¿Es estudiante?: " . $esEstudiante . " (true = 1)<br>";
echo "<hr>";

// Problema 1.2: Información de un Producto
// Declara e imprime la información de un producto
$nombreProducto = "Marlboro Crafted"; // string
$precio = 4.85; // float
$stockDisponible = 50; // integer
$enOferta = false; // boolean

echo "<h3>Problema 1.2: Información de un Producto</h3>";
echo "Producto: " . $nombreProducto . "<br>";
echo "Precio: " . $precio . " €<br>";
echo "Stock: " . $stockDisponible . " unidades<br>";
// Usamos un operador ternario para mostrar un texto claro para el booleano
echo "¿En Oferta?: " . ($enOferta ? "Sí" : "No") . "<br>";
echo "<hr>";

?>