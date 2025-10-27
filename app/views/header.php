
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
