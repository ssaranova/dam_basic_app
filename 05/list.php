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
    <table class="users">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Cumpleaños</th>
                <th>Género</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user->getId(); ?></td>
                    <td><?= $user->getName(); ?></td>
                    <td><?= $user->getLastname(); ?></td>
                    <td><?= $user->getEmail(); ?></td>
                    <td><?= $user->getPhone(); ?></td>
                    <td><?= $user->getBirthday(); ?></td>
                    <td><?= $user->getGender(); ?></td>
                    <td><a href="./form.php?id=<?= $user->getId(); ?>">Editar</a> || <a href="./form-delete.php?id=<?= $user->getId(); ?>">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?php require_once './includes/partials/footer.php'; ?>