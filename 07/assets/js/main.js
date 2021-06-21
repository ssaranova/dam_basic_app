(function ($) {

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

    var link = $('<a />').addClass('mi-super-enlace').attr('href', '#').text('Mi super enlace');
    link.insertAfter($search2.first());
    $('.navbar-nav').append($search2.first());
    $('.navbar-nav').prepend($search2.last());
    console.log($search2);

    var I18n = {
        init: function () {
            $.i18n().debug = false;
            $.i18n().load({
                en: 'assets/i18n/en.json',
                es: 'assets/i18n/es.json',
            }).done(function(){
                I18n.updateTexts();
            });
        },
        updateTexts: function () {
            $('body').i18n();
        }
    }

    $(document).ready(function () {
        I18n.init();
        $('table').DataTable({
            responsive: true,
            info: false
        });
    });
})(jQuery);