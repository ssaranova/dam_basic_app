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
                    <th scope="col">ID</th>
                    <th scope="col" data-i18n="name">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Cumpleaños</th>
                    <th scope="col">Género</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td scope="row"><?= $user->getId(); ?></td>
                        <td><?= $user->getName(); ?></td>
                        <td><?= $user->getLastname(); ?></td>
                        <td><?= $user->getEmail(); ?></td>
                        <td><?= $user->getPhone(); ?></td>
                        <td><?= $user->getBirthday(); ?></td>
                        <td><?= $user->getGender(); ?></td>
                        <td><a class="btn btn-primary" href="./form.php?id=<?= $user->getId(); ?>">Editar</a> <a class="btn btn-danger" href="./form-delete.php?id=<?= $user->getId(); ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php require_once './includes/partials/footer.php'; ?>