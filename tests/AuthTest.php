<?php
// tests/AuthTest.php
use PHPUnit\Framework\TestCase;
// Incluimos los ficheros que contienen la lógica que queremos probar
require_once __DIR__ . '/../app/data.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
class AuthTest extends TestCase
{
// Prueba para el "camino feliz" (login correcto)
    public function testLoginConCredencialesValidas()
    {
// Actuar: llamamos a la función
        $resultado = handleLogin('usuario1@taskflow.com', 'pass123',
            BBDD);
// Aserción: Afirmamos que el resultado debe ser verdadero
        $this->assertTrue($resultado);
    }
// Prueba para el "camino triste" (login incorrecto)
    public function testLoginConCredencialesInvalidas()
    {
// Actuar: llamamos con una contraseña errónea
        $resultado = handleLogin('usuario1@taskflow.com', 'pass_erroneo',
            BBDD);
// Aserción: Afirmamos que el resultado debe ser falso
        $this->assertFalse($resultado);
    }
}
?>