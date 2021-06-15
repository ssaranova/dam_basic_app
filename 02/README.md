---


---

<h1 id="templates-php">02 - Templates PHP</h1>
<p>En este segundo ejercicio aprenderemos a crearnos nuestros templates de una manera separada para poder incluirlos en los diferentes ficheros *.php como plantillas a usar, esto nos permitirá no duplicar tanta estructura HTML y tenerlo todo más dividido.</p>
<h2 id="diferencias-entre-las-funciones-de-inclusión">Diferencias entre las funciones de inclusión</h2>
<ul>
<li><strong>include</strong></li>
</ul>
<blockquote>
<p>Inserta en nuestro programa un código procedente de otro archivo, en caso de que dicho archivo no exista o tenga errores en su interior nuestro programa mostrará un <strong>warning</strong> pero <strong>seguirá funcionando</strong>.</p>
</blockquote>
<ul>
<li><strong>require</strong></li>
</ul>
<blockquote>
<p>Funciona de manera similar a include, pero en este caso, si el archivo no existe o contiene errores, nuestro programa no funcionará y obtendremos un <strong>fatal error</strong> en el log.</p>
</blockquote>
<ul>
<li><strong>include_once</strong> y <strong>require_once</strong></li>
</ul>
<blockquote>
<p>Funcionan exactamente de la misma forma que las anteriores salvo que impiden la carga de un mismo fichero varias veces.</p>
</blockquote>

