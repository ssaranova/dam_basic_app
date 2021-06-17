<?php require_once './includes/class/User.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="author" content="Saúl" />
    <meta name="description" content="Gestión de usuarios básica para practicar PHP, CSS y JS" />
    <title>Mi aplicación</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
</head>

<body>
    <header>
        <h1><?= $title ?? 'Inicio'; ?></h1>
        <nav>
            <ul>
                <li><a href="./">Inicio</a></li>
                <li><a href="./list.php">Listado usuarios</a></li>
                <li><a href="./form.php">Formulario alta</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">