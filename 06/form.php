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

$genders = [
    'Masculino',
    'Femenino',
    'Otro'
];
?>
<section class="container">
    <form class="form" action="./form.php" method="POST">
        <div>
            <label class="form__label" for="name">Nombre</label>
            <input class="form__input" type="text" name="name" id="name" value="<?= $name ?? '' ?>" required />
        </div>
        <div>
            <label class="form__label" for="lastname">Apellidos</label>
            <input class="form__input" type="text" name="lastname" id="lastname" value="<?= $lastname ?? '' ?>" required />
        </div>
        <div>
            <label class="form__label" for="email">Correo electrónico</label>
            <input class="form__input" type="email" name="email" id="email" value="<?= $email ?? '' ?>" required />
        </div>
        <div>
            <label class="form__label" for="phone">Teléfono</label>
            <input class="form__input" type="text" name="phone" id="phone" value="<?= $phone ?? '' ?>" />
        </div>
        <div>
            <label class="form__label" for="birthday">Fecha de cumpleaños</label>
            <input class="form__input" type="date" name="birthday" id="birthday" value="<?= $birthday ?? '' ?>" required />
        </div>
        <div>
            <label class="form__label" for="gender">Género</label>
            <select id="gender" name="gender" class="form__select">
                <?php foreach ($genders as $value) : ?>
                    <?php $selected = (isset($gender) && $gender === $value) ? 'selected' : ''; ?>
                    <option value="<?= $value ?>" <?= $selected; ?>><?= $value ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <?php if (isset($uid)) : ?>
                <input type="hidden" name="id" value="<?= $uid ?>" />
            <?php endif; ?>
            <input type="submit" class="form__submit" value="Enviar formulario" title="Enviar formulario" />
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