---


---

<h1 id="clases-y-conexión-a-base-de-datos">04 - Clases y conexión a base de datos</h1>
<p>En este cuarto ejercicio crearemos nuestra clase de gestión de usuarios que extenderá de la clase de conexión a la base de datos, añadiremos comentarios a nuestro código ayudándonos de la extensión <a href="https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker">PHP Docblocker</a> instalada en nuestro <a href="https://code.visualstudio.com/download">VS Code</a> y crearemos y listaremos los usuarios existentes en la base de datos.</p>
<h2 id="visibilidad-de-atributos-y-métodos-de-php">Visibilidad de atributos y métodos de PHP</h2>
<p>En una clase podemos definir nuestros atributos y métodos como públicos, protegidos o privados (public, protected o private) en función de la visibilidad que queremos que tengan en el resto del código:</p>
<ul>
<li><strong>public</strong>: podemos acceder a las propiedades y métodos desde cualquier lugar, desde la clase actual, clases que heredan de la clase actual y desde otras clases.</li>
<li><strong>protected</strong>: se puede acceder al atributo o método desde la clase que lo define y desde cualquier otra que herede de esta clase.</li>
<li><strong>private</strong>: los atributos o métodos solo son accesibles desde la clase que los define.</li>
</ul>
<h2 id="conexión-a-base-de-datos">Conexión a base de datos</h2>
<ul>
<li><a href="https://www.php.net/manual/es/function.mysqli-connect.php">mysqli</a></li>
<li><a href="https://www.php.net/manual/es/pdo.construct.php">PDO</a></li>
</ul>
<h1 id="ejercicio">Ejercicio</h1>
<p>Crear una clase de acceso a la base de datos con los métodos CRUD de obtención y creación de registros.</p>
<p>Crear una clase book (<strong>book.dto.php</strong>) para tener el mapa de campos del libro.</p>
<p>Crear una clase book (<strong>book.php</strong>) que extenderá de la que hemos creado de acceso a la base de datos y tendrá sus propias funciones de obtención y creación de libros.</p>
<p>Crear una página de listado de libros (<strong>list.php</strong>) donde pintaremos una tabla con los diferentes resultados devueltos por la base de datos.</p>
<p>Modificar el formulario que hemos creado en el ejercicio anterior (<strong>form.php</strong>) para que nos permita dar de alta nuevos libros en nuestra librería. Si el alta ha sido correcta, redireccionar al listado de usuarios.</p>

