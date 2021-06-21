<?php
require_once './includes/partials/header.php';
/**
 * Variables a usar en los templates
 */
$title = 'Listado usuarios';

$user = new User();
$users = $user->getAllUsers();
?>
<section class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover users">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" data-i18n="name">Nombre</th>
                    <th scope="col" data-i18n="lastname">Apellidos</th>
                    <th scope="col" data-i18n="email">Email</th>
                    <th scope="col" data-i18n="phone">Teléfono</th>
                    <th scope="col" data-i18n="birthday">Cumpleaños</th>
                    <th scope="col" data-i18n="gender">Género</th>
                    <th scope="col" data-i18n="actions">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td class="id" scope="row"><?= $user->getId(); ?></td>
                        <td class="name"><?= $user->getName(); ?></td>
                        <td class="lastname"><?= $user->getLastname(); ?></td>
                        <td class="email"><?= $user->getEmail(); ?></td>
                        <td class="phone"><?= $user->getPhone(); ?></td>
                        <td class="birthday"><?= $user->getBirthday(); ?></td>
                        <td class="gender"><?= $user->getGender(); ?></td>
                        <td>
                            <a class="btn btn-primary" href="./form.php?id=<?= $user->getId(); ?>" data-i18n="edit">Editar</a>
                            <a class="btn btn-danger" href="./form-delete.php?id=<?= $user->getId(); ?>" data-toggle="modal" data-target="#delete-modal" data-i18n="delete">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php require_once './includes/partials/footer.php'; ?>
<?php require_once './includes/partials/modal-delete.php'; ?>