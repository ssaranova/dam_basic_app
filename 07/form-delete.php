<?php

/**
 * Variables a usar en los templates
 */
$title = 'Formulario eliminación usuarios';
require_once './includes/partials/header.php';

$userManager = new User();
$uid = $_GET['id'] ?? $_POST['id'] ?? '';
$user = $userManager->getById($uid);
$fullname = ($user) ? $user->getCompleteName() : '';
?>
<section class="container">
    <form class="form" action="./form-delete.php" method="POST">
        <?= sprintf('¿Estás seguro de que deseas eliminar al usuario%s?', ' ' . $fullname); ?>
        <div>
            <input type="hidden" name="id" id="id" value="<?= $uid; ?>" />
            <input type="submit" class="btn btn-primary form__submit" value="Sí, eliminar usuario" title="Eliminar usuario" data-i18n="[value]accept" />
            <a class="btn btn-danger" href="./list.php">No</a>
        </div>
    </form>
</section>
<?php require_once './includes/partials/footer.php'; ?>
<?php
if (!empty($_POST)) {
    if ($userManager->delete($user)) {
        header('location: ' . $_SERVER['PHP_SELF'] . '/../list.php');
    } else {
        echo 'Ha habido un error eliminando el usuario, inténtalo de nuevo más tarde.';
    }
}
?>