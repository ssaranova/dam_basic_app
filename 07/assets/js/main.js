(function ($) {
    console.log('ajkdhsahfjksdhfjkdshfjkds');

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

    var jsSearch = document.getElementById('navbarCollapse');
    console.log(jsSearch);

    var $search1 = $('#navbarCollapse');
    console.log($search1);

    var jsSearch2 = document.getElementsByClassName('nav-item');
    console.log(jsSearch2);

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

    $(document).ready(function(){
        console.log('jkahsjkdhakf');
    });
})(jQuery);