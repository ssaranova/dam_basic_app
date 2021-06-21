<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delere-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-modal" data-i18n="delete_employee">Eliminar empleado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span data-i18n="[html]delete_employee_msg">Estás seguro de que deseas eliminar al usuario <strong class="name"></strong>?</span>
                    <input type="hidden" name="id" id="id" value="" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-i18n="cancel">Cancelar</button>
                    <input type="submit" class="btn btn-primary form__submit" value="Sí, eliminar usuario" title="Eliminar usuario" data-i18n="[value]accept" />
                </div>
            </form>
        </div>
    </div>
</div>