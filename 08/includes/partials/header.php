<?php require_once './includes/class/User.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="author" content="Saúl" />
    <meta name="description" content="Gestión de usuarios básica para practicar PHP, CSS y JS" />
    <title data-i18n="brand_name">Mi aplicación</title>
    <link rel="stylesheet" href="./assets/libraries/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/libraries/datatables/datatables.min.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="./" data-i18n="brand_name">Mi aplicación</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="./list.php" class="nav-link" data-i18n="list">Listado usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a href="./form.php" class="nav-link" data-i18n="form">Formulario alta</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main role="main" class="main container">