<?php
// Array de tareas

function obtenerClasePrioridad($prioridad)
{
    // La variable $clase_css se usará para guardar el resultado final
    $clase_css = '';

    // Switch para determinar la clase según la prioridad
    switch ($prioridad) {
        case 'alta':
            $clase_css = 'priority-alta';
            break;
        case 'media':
            $clase_css = 'priority-media';
            break;
        case 'baja':
            $clase_css = 'priority-baja';
            break;
        default:
            // Usamos la misma clase por defecto para mantener la consistencia
            $clase_css = 'priority-unknown';
            break;
    }

    // Devuelve la clase CSS
    return $clase_css;
}

//Función para renderizar una tarea
function renderizarTarea($tarea) {

    // 1. Inicia con la clase base
    $taskClasses = 'task-item';

    // 2. Sentencia if para 'completed'
    if ($tarea['completed']) {
        $taskClasses .= ' completed'; // Concatena ' completed'
    }

    // 3. Obtiene la clase de prioridad llamando a la función
    $clasePrioridad = obtenerClasePrioridad($tarea['priority']);

    // 4. Concatena la clase de prioridad
    $taskClasses .= ' ' . $clasePrioridad;

    // 5. Construye el string HTML completo del <li>
    $html_tarea = "<li class=\"$taskClasses\">" . htmlspecialchars($tarea['title']) . "</li>";

    // 6. Devuelve el HTML
    return $html_tarea;
}
?>
