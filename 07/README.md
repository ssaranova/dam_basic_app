
# 07 - { JS }
Ahora nos toca trastear un poco con JavaScript y, para ello haremos unos ejemplos prácticos para ver los resultados usando [jQuery](https://jquery.com/), que nos hará la vida más cómoda a la hora de localizar elementos en el DOM, añadir eventos, hacer peticiones AJAX, animaciones, etc...

Como lo hemos tenido que incluir para usar Bootstrap en nuestro proyecto, no tenemos que preocuparnos por este punto, así que, ¡manos a la obra! Vamos a ver unos casos usando JS y jQuery:

##### ¿Cómo buscar un elemento en concreto por su ID?
- JS: `document.getElementById('navbarCollapse')`
- jQuery: `$('#navbarCollapse')`

##### ¿Cómo seleccionar el primer item de un listado?
- JS: `document.getElementsByClassName('nav-item')[0];`
- jQuery: `$('#navbarCollapse .navbar-nav .nav-item').first();`

##### ¿Cómo ponemos un atributo a un elemento?
- JS: `document.getElementById('navbarCollapse').setAttribute('data-clase1', 'mi custom attr');`
- jQuery: `$('#navbarCollapse').attr('data-clase2', 'mi custom attr');`

##### ¿Cómo añadimos una clase a un elemento?
- JS: `document.getElementById('navbarCollapse').classList.add('class-1');`
- jQuery: `$('#navbarCollapse').addClass('class-2');`

La cosa pinta bastante más cómoda con jQuery, ¿verdad? Pues, pasemos a probar algunas **librerías externas** que nos permitirán darle una vuelta a nuestro proyecto de una manera sencilla:

- [Datatables](https://datatables.net/): Esta librería nos va a permitir realizar gestiones (ordenar, filtrar, buscar, ...) sobre nuestra tabla
- [i18n](https://github.com/wikimedia/jquery.i18n): Una librería que nos permitirá añadir traducciones a nuestro proyecto usando unos ficheros JSON


# Ejercicio
Añadir librerías i18n y datatables y modificar en consecuencia. Recordad que datatables tiene soporte para Bootstrap 4 ([enlace](https://datatables.net/examples/styling/bootstrap4)).


