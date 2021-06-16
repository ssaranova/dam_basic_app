<?php

/**
 * Variables a usar en los templates
 */
$title = 'Formulario biblioteca';
?>

<?php require_once './includes/header.php'; ?>
<section class="container">
    <form class="form" action="./" method="POST">
        <div>
            <label class="form__label" for="name">Nombre</label>
            <input class="form__input" type="text" name="name" id="name" required />
        </div>
        <div>
            <label class="form__label" for="author">Autor</label>
            <input class="form__input" type="text" name="author" id="author" required />
        </div>
        <div>
            <label class="form__label" for="publication_date">Fecha de publicación</label>
            <input class="form__input" type="date" name="publication_date" id="publication_date" required />
        </div>
        <div>
            <label class="form__label" for="isbn">Código ISBN</label>
            <input class="form__input" type="number" name="isbn" id="isbn" minlength="10" maxlength="13" />
        </div>
        <div>
            <label class="form__label" for="gender">Género literario</label>
            <select id="gender" name="gender" class="form__select">
                <option value="Narrativo">Narrativo</option>
                <option value="Lírico">Lírico</option>
                <option value="Teatral">Teatral</option>
            </select>
        </div>
        <div>
            <input type="submit" class="form__submit" value="Enviar formulario" title="Enviar formulario" />
        </div>
    </form>
</section>
<?php require_once './includes/footer.php'; ?>