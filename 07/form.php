<?php

/**
 * Variables a usar en los templates
 */
$title = 'Formulario usuarios';
require_once './includes/partials/header.php';

$userManager = new User();
if (!empty($_GET) && isset($_GET['id'])) {
    $uid = $_GET['id'];
    if ($user = $userManager->getById($uid)) {
        $userData = get_object_vars($user);
        extract($userData);
    }
}

?>
<section class="container">
    <form class="form" action="./form.php" method="POST">
        <div class="form-row">
            <div class="form-group col-sm-6 col-md-4">
                <label class="form__label" for="name" data-i18n="name">Nombre</label>
                <input class="form-control form__input" type="text" name="name" id="name" value="<?= $name ?? '' ?>" data-i18n="[placeholder]name" required />
            </div>
            <div class="form-group col-sm-6 col-md-4">
                <label class="form__label" for="lastname" data-i18n="lastname">Apellidos</label>
                <input class="form-control form__input" type="text" name="lastname" id="lastname" value="<?= $lastname ?? '' ?>" data-i18n="[placeholder]lastname" required />
            </div>
            <div class="form-group col-sm-6 col-md-4">
                <label class="form__label" for="email" data-i18n="email">Correo electrónico</label>
                <input class="form-control form__input" type="email" name="email" id="email" value="<?= $email ?? '' ?>" data-i18n="[placeholder]email" required />
            </div>
            <div class="form-group col-sm-6 col-md-4">
                <label class="form__label" for="phone" data-i18n="phone">Teléfono</label>
                <input class="form-control form__input" type="text" name="phone" id="phone" value="<?= $phone ?? '' ?>" data-i18n="[placeholder]phone" />
            </div>
            <div class="form-group col-sm-6 col-md-4">
                <label class="form__label" for="birthday" data-i18n="birthday">Fecha de cumpleaños</label>
                <input class="form-control form__input" type="date" name="birthday" id="birthday" value="<?= $birthday ?? '' ?>" required />
            </div>
            <div class="form-group col-sm-6 col-md-4">
                <label class="form__label" for="gender" data-i18n="gender">Género</label>
                <select id="gender" name="gender" class="form-control form__select">
                    <option value="Masculino" <?php if (isset($gender) && $gender === 'Masculino') { ?> selected <?php } ?> data-i18n="male">Masculino</option>
                    <option value="Femenino" <?php if (isset($gender) && $gender === 'Femenino') { ?> selected <?php } ?> data-i18n="female">Femenino</option>
                    <option value="Otro" <?php if (isset($gender) && $gender === 'Otro') { ?> selected <?php } ?> data-i18n="other">Otro</option>
                </select>
            </div>
        </div>
        <div>
            <?php if (isset($uid)) : ?>
                <input type="hidden" name="id" value="<?= $uid ?>" />
            <?php endif; ?>
            <input type="submit" class="btn btn-primary form__submit" value="Enviar formulario" title="Enviar formulario" data-i18n="[value]submit" />
        </div>
    </form>
</section>
<?php require_once './includes/partials/footer.php'; ?>
<?php
if (!empty($_POST)) {
    if ($userManager->save($_POST)) {
        header('location: ' . $_SERVER['PHP_SELF'] . '/../list.php');
    } else {
        echo 'Ha habido un error creando el usuario, inténtalo de nuevo más tarde.';
    }
}
?>