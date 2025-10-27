<?php require_once 'app/functions.php'; //incluimos el fichero de funciones ?>
<?php
// Bloque de configuración principal
define("SITE_NAME", "TaskFlow");
$pageTitle = SITE_NAME . " - Página de Inicio";
$userName = "Neno"; // Tipo String
$userAge = 28;             // Tipo Integer
$isPremiumUser = true;     // Tipo Boolean
?>
<?php include 'app/views/header.php' ;  //Con el include metemos el encabezado ?>
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
<?php include 'app/views/footer.php' ; ?>