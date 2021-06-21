(function ($) {

    var html, body, whenI18nLoaded;

    var jsSearch1 = document.getElementById('navbarCollapse');
    console.log(jsSearch1);

    var $search1 = $('#navbarCollapse');
    console.log($search1);

    var jsSearch2 = document.getElementsByClassName('nav-item')[0];
    console.log(jsSearch2);

    var $search2 = $('#navbarCollapse .navbar-nav .nav-item:first-of-type');
    var $search2 = $('#navbarCollapse .navbar-nav .nav-item').first();
    console.log($search2);

    jsSearch1.setAttribute('data-clase1', 'mi custom attr');
    $search1.attr('data-clase2', 'mi custom attr');

    jsSearch1.classList.add('class-1');
    $search1.addClass('class-2');

    var mi_variable = 'Hola mundo';
    mi_variable += ' quee';

    let mi_variable2 = 'Hola mundo 2';
    mi_variable2 += ' adios';

    const mi_variable3 = [];

    mi_variable3.push('hola');
    mi_variable3.push('que ase');

    console.log(mi_variable);
    console.log(mi_variable2);
    console.log(mi_variable3);

    var $search2 = $search1.find('.nav-item');
    for (i = 0; i < $search2.length; i++) {
        var item = $($search2[i]);
        console.log(item);
    }

    $.each($search2, function () {
        console.log(this);
        console.log($(this));
    });

    $search2.each(function () {
        console.log(this);
        console.log($(this));
    });

    /*
    var link = $('<a />').addClass('mi-super-enlace').attr('href', '#').text('Mi super enlace');
    link.insertAfter($search2.first());
    $('.navbar-nav').append($search2.first());
    $('.navbar-nav').prepend($search2.last());
    console.log($search2);
    */

    var I18n = {
        init: function () {
            whenI18nLoaded = new Promise(function (resolve, reject) {
                $.i18n().debug = false;
                $.i18n().load({
                    en: 'assets/i18n/en.json',
                    es: 'assets/i18n/es.json',
                }).done(function () {
                    I18n.updateTexts();
                    resolve();
                });
            });
        },
        updateTexts: function () {
            html.i18n();
        }
    }

    var ModalsManagement = {
        init: function () {
            this.config();
            this.addEvents();
        },
        config: function () {
            this.body = body;
            this.addModal = this.body.find('#add-modal');
            this.addForm = this.addModal.find('form');
            this.deleteModal = this.body.find('#delete-modal');
            this.deleteForm = this.deleteModal.find('form');
        },
        addEvents: function () {
            var that = this;

            this.addModal.on('show.bs.modal', function (e) {
                that.addForm.get(0).reset();

                var relatedTarget = $(e.relatedTarget);
                if (relatedTarget.hasClass('edit')) {
                    that.fillEditForm(relatedTarget.parents('tr'));
                }

                that.addFormEvents();
            });

            this.deleteModal.on('show.bs.modal', function (e) {
                console.log(this);
                var relatedTarget = $(e.relatedTarget);
                that.fillDeleteForm(relatedTarget.parents('tr'));
                that.deleteFormEvents();
            });
        },
        addFormEvents: function () {
            var that = this;
            this.addModal.off('click', '.form__submit').on('click', '.form__submit', function (e) {
                e.preventDefault();
                e.stopPropagation();

                $.ajax({
                    method: "POST",
                    url: "./includes/ajax/saveUser.php",
                    data: that.addForm.serialize()
                }).done(function (msg) {
                    console.log(msg);
                    alert(msg);
                    location.reload();
                }).fail(function (msg) {
                    console.log(msg);
                    alert(msg);
                });

            });
        },
        deleteFormEvents: function () {
            var that = this;
            this.deleteModal.off('click', '.form__submit').on('click', '.form__submit', function (e) {
                e.preventDefault();
                e.stopPropagation();

                var xhr = new XMLHttpRequest()
                xhr.open("POST", "./includes/ajax/deleteUser.php");
                xhr.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(this.responseText);
                        location.reload();
                    }
                };
                xhr.send(new FormData(that.deleteForm.get(0)));
            });
        },
        fillEditForm: function (userElement) {
            var form = this.addForm;

            form.find('[name="id"]').val(userElement.find('.id').text());
            form.find('[name="name"]').val(userElement.find('.name').text());
            form.find('[name="lastname"]').val(userElement.find('.lastname').text());
            form.find('[name="email"]').val(userElement.find('.email').text());
            form.find('[name="phone"]').val(userElement.find('.phone').text());
            form.find('[name="birthday"]').val(userElement.find('.birthday').text());
            form.find('[name="gender"]').val(userElement.find('.gender').text());

        },
        fillDeleteForm: function (userElement) {
            var form = this.deleteForm;
            form.find('[name="id"]').val(userElement.find('.id').text());
            form.find('.name').text(userElement.find('.name').text() + ' ' + userElement.find('.lastname').text());
        }
    }

    $(document).ready(function () {
        html = $('html');
        body = html.find('body');

        I18n.init();
        ModalsManagement.init();
        body.find('table').DataTable({
            responsive: true,
            info: false,
            initComplete: function (settings, json) {
                whenI18nLoaded.then(function () {
                    body.find('.paginate_button.previous a').text($.i18n('previous'));
                    body.find('.paginate_button.next a').text($.i18n('next'));
                });
            }
        });
    });
})(jQuery);