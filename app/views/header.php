<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
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
