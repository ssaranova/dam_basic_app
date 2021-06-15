<?php
/**
 * Variables a usar en los templates
 */
$title = 'Formulario usuarios';
?>

<?php require_once './includes/partials/header.php'; ?>
<section class="container">
    <form class="form" action="./form.php" method="POST">
        <div>
            <label class="form__label" for="name">Nombre</label>
            <input class="form__input" type="text" name="name" id="name" required />
        </div>
        <div>
            <label class="form__label" for="lastname">Apellidos</label>
            <input class="form__input" type="text" name="lastname" id="lastname" required />
        </div>
        <div>
            <label class="form__label" for="email">Correo electrónico</label>
            <input class="form__input" type="email" name="email" id="email" required />
        </div>
        <div>
            <label class="form__label" for="phone">Teléfono</label>
            <input class="form__input" type="text" name="phone" id="phone" />
        </div>
        <div>
            <label class="form__label" for="birthday">Fecha de cumpleaños</label>
            <input class="form__input" type="date" name="birthday" id="birthday" required />
        </div>
        <div>
            <label class="form__label" for="gender">Género</label>
            <select id="gender" name="gender" class="form__select">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div>
            <input type="submit" class="form__submit" value="Enviar formulario" title="Enviar formulario" />
        </div>
    </form>
</section>
<?php require_once './includes/partials/footer.php'; ?>
