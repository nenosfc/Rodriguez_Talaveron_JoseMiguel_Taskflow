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

// Problema 1.3: Constantes de la Aplicación
// Declara e imprime dos constantes.
define("NOMBRE_SITIO", "Mi Tienda Online");
const VERSION_APP = 1.0;

echo "<h3>Problema 1.3: Constantes de la Aplicación</h3>";
echo "Nombre del sitio: " . NOMBRE_SITIO . "<br>";
echo "Versión de la aplicación: " . VERSION_APP . "<br>";
echo "<hr>";


// Problema 2.1: Calculadora Básica
// Realiza las operaciones aritméticas básicas.
$num1 = 10;
$num2 = 5;

echo "<h3>Problema 2.1: Calculadora Básica</h3>";
echo "Suma (10 + 5): " . ($num1 + $num2) . "<br>";
echo "Resta (10 - 5): " . ($num1 - $num2) . "<br>";
echo "Multiplicación (10 * 5): " . ($num1 * $num2) . "<br>";
echo "División (10 / 5): " . ($num1 / $num2) . "<br>";
echo "<hr>";

// Problema 2.2: Actualización de Stock
// Utiliza operadores de asignación compuestos.
$stock = 100;

echo "<h3>Problema 2.2: Actualización de Stock</h3>";
echo "Stock inicial: " . $stock . "<br>";

// Simula una venta de 25 unidades
$stock -= 25;
echo "Stock después de la venta: " . $stock . "<br>";

// Simula la llegada de un nuevo pedido de 50 unidades
$stock += 50;
echo "Stock después del pedido: " . $stock . "<br>";
echo "<hr>";

?>