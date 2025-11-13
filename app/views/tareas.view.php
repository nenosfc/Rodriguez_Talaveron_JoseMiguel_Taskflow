
<?php

$tasks = [
    [
        'title' => 'Hacer pedido a Cruzcampo',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Revisar almacen',
        'completed' => true,
        'priority' => 'alta'
    ],
    [
        'title' => 'Revisar reseñas de clientes',
        'completed' => false,
        'priority' => 'media'
    ],
    [
        'title' => 'Repasar copas',
        'completed' => true,
        'priority' => 'baja'
    ],
    [
        'title' => 'Revisar mesas si están limpias',
        'completed' => false,
        'priority' => 'media'
    ]
];

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
<style>
    /* CSS de ejemplo para hacer visible el efecto de las clases */
    ul {
        padding-left: 0;
    }
    .task-item {
        padding: 8px;
        margin-bottom: 4px;
        border-left: 5px solid gray;
        list-style: none;
        transition: all 0.3s ease;
        font-family: sans-serif;
    }
    .completed {
        text-decoration: line-through;
        opacity: 0.5;
        border-left-color: #38a169; /* Verde */
    }
    .priority-alta {
        border-left-color: #e53e3e; /* Rojo */
        font-weight: bold;
    }
    .priority-media {
        border-left-color: #dd6b20; /* Naranja */
    }
    .priority-baja {
        border-left-color: #3182ce; /* Azul */
    }
</style>
</head>
<body>
<header>
    <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
</header>
<main>
    <h2>Perfil del Usuario</h2>
    <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
    <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
    <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>


    <!--Hasta aqui el header -->

    <!--Abajo el contenido del bucle foreach que teniamos en el index -->

    <h2>Tareas Pendientes</h2>
    <ul>
        <?php
        // 1. Inicia un bucle foreach que recorra $tasks
        foreach ($tasks as $task) {
            // El bucle ahora solo llama a la función y muestra el resultado
            echo renderizarTarea($task);
        }
        ?>
    </ul>

    <!--Hasta aqui el index -->

    <!--Añadimos el footer -->

</main>
</body>
</html>


<!--Hasta aqui el footer -->




