<?php

// app/data.php
$usuarios_bbdd = [
    'neno@taskflow.com' => [
        'id' => 1,
        'nombre' => 'Neno',
        'password' => 'qwerty1234' // Simulación de contraseña (sin hashear,por ahora)
],
'lolo@taskflow.com' => [
    'id' => 2,
    'nombre' => 'lolo Calvo',
    'password' => 'admin'
]
];

define('BBDD', $usuarios_bbdd);

?>