<?php
// Bloque de configuración principal
define("SITE_NAME", "TaskFlow");
$pageTitle = SITE_NAME . " - Página de Inicio";
$userName = "Neno"; // Tipo String
$userAge = 28;             // Tipo Integer
$isPremiumUser = true;     // Tipo Boolean
$tasks = [
        [
                'title' => 'Hacer pedido a Cruzcampo',
                'completed' => false, // <<-- CLAVE CORREGIDA
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
<?php include 'app/views/header.php' ; ?>
    <h2> "Tareas Pendientes"</h2>
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
    <u>
        <ul>
            <?php
            // 1. Inicia un bucle foreach que recorra $tasks
            foreach ($tasks as $task) {

                // 2. Declara $taskClasses con la clase base
                $taskClasses = 'task-item';

                // 3. Sentencia if para la clave 'completed'
                // Ya que el array está corregido, podemos acceder directamente,
                // pero para ser más robustos, podríamos usar: if (isset($task['completed']) && $task['completed'])
                if ($task['completed']) {
                    $taskClasses .= ' completed'; // Concatena ' completed'
                }

                // 4. Sentencia switch para la clave 'priority'
                switch ($task['priority']) {
                    case 'alta':
                        $taskClasses .= ' priority-alta';
                        break;
                    case 'media':
                        $taskClasses .= ' priority-media';
                        break;
                    case 'baja':
                        $taskClasses .= ' priority-baja';
                        break;
                    // un default por si la prioridad no está definida
                    default:
                        $taskClasses .= ' priority-unknown';
                        break;
                }

                // 5. Imprime la etiqueta <li> con la variable de clases y el título
                // Usamos htmlspecialchars para sanitizar la salida del título
                echo "<li class=\"$taskClasses\">" . htmlspecialchars($task['title']) . "</li>";
            }
            ?>
        </ul>
    </u>
<?php  include 'app/views/footer.php' ; ?>