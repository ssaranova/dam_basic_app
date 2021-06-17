
# 05 - Actualización y eliminación

En este quinto ejercicio haremos la gestión de los dos últimos métodos que nos quedan del CRUD, el de eliminar y el de modificar.

Para ello, haremos cambios en el formulario de alta para poder cargar un usuario existente, así como crearemos un nuevo formulario para la eliminación del usuario seleccionado.

A su vez, añadiremos los métodos de **update** y **delete** en nuestra clase de gestión de usuarios y una nueva que será **save**, desde la cuál controlaremos si el usuario existe o no para llamar a crear o a actualizar.


# Ejercicio
Crear formulario para eliminación de libros (**form-delete.php**)

Modificar clase gestión de libros para añadir el método de eliminación y el método de actualización con sus respectivas queries. Crear también el método **save** como *público* desde el cuál llamaremos a update y create, y cambiar a *privados* **update** y **create**

Finalmente añadiremos los enlaces de editar y eliminar a cada libro en el listado y, a enviando un parámetro GET a la URL correspondiente, rellenaremos o eliminaremos los datos.
