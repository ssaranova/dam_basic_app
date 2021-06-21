<?php
if (!empty($_POST)) {
    require_once '../class/User.php';
    $userManager = new User();
    $uid = $_POST['id'] ?? '';
    $user = $userManager->getById($uid);
    if ($userManager->delete($user)) {
        die('Usuario eliminado correctamente.');
    }
}
die('No se ha podido procesar la solicitud');
