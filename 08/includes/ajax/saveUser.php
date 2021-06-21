<?php
if (!empty($_POST)) {
    require_once '../class/User.php';
    $userManager = new User();
    if ($userManager->save($_POST)) {
        die('Datos guardados correctamente.');
    }
}
die('No se ha podido procesar la solicitud');
