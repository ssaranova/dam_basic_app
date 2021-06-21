<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="add-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-modal" data-i18n="employee_management">Gestión empleados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-sm-6 col-md-4">
                            <label class="form__label" for="name" data-i18n="name">Nombre</label>
                            <input class="form-control form__input" type="text" name="name" id="name" value="" data-i18n="[placeholder]name" required />
                        </div>
                        <div class="form-group col-sm-6 col-md-4">
                            <label class="form__label" for="lastname" data-i18n="lastname">Apellidos</label>
                            <input class="form-control form__input" type="text" name="lastname" id="lastname" value="" data-i18n="[placeholder]lastname" required />
                        </div>
                        <div class="form-group col-sm-6 col-md-4">
                            <label class="form__label" for="email" data-i18n="email">Correo electrónico</label>
                            <input class="form-control form__input" type="email" name="email" id="email" value="" data-i18n="[placeholder]email" required />
                        </div>
                        <div class="form-group col-sm-6 col-md-4">
                            <label class="form__label" for="phone" data-i18n="phone">Teléfono</label>
                            <input class="form-control form__input" type="text" name="phone" id="phone" value="" data-i18n="[placeholder]phone" />
                        </div>
                        <div class="form-group col-sm-6 col-md-4">
                            <label class="form__label" for="birthday" data-i18n="birthday">Fecha de cumpleaños</label>
                            <input class="form-control form__input" type="date" name="birthday" id="birthday" value="" required />
                        </div>
                        <div class="form-group col-sm-6 col-md-4">
                            <label class="form__label" for="gender" data-i18n="gender">Género</label>
                            <select id="gender" name="gender" class="form-control form__select">
                                <option value="Masculino" data-i18n="male">Masculino</option>
                                <option value="Femenino" data-i18n="female">Femenino</option>
                                <option value="Otro" data-i18n="other">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" name="id" id="id" value="" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-i18n="cancel">Cancelar</button>
                    <input type="submit" class="btn btn-primary form__submit" value="Enviar formulario" title="Enviar formulario" data-i18n="[value]submit" />
                </div>
            </form>
        </div>
    </div>
</div>