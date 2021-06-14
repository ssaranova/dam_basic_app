---


---

<h1 id="html-y-php-básico">01 - HTML y PHP básico</h1>
<p>En este primer ejercicio crearemos nuestra página de inicio con <a href="https://es.wikipedia.org/wiki/HTML5">HTML 5</a>  y <a href="https://es.wikipedia.org/wiki/PHP">PHP</a>.</p>
<p>Para refrescar un poco la teoría, <strong>HTML</strong> significa <em>HyperText Markup Language</em> y, ¿para qué nos sirve?<br>
Nos sirve para crear nuestras plantillas utilizando un lenguaje que cualquier navegador web es capaz de interpretar hasta cierto punto obviamente, para eso podemos usar páginas web como <a href="https://caniuse.com/">CanIUse</a> para comprobar si una etiqueta, atributo, etc funciona en todos los navegadores.</p>
<p>Unos de los grandes cambios de <strong>HTML4</strong> a <strong>HTML5</strong> fueron las <a href="https://developer.mozilla.org/es/docs/Learn/HTML/Introduction_to_HTML/Document_and_website_structure#elementos_de_dise%C3%B1o_html_en_detalle">nuevas etiquetas semánticas</a> de marcado para identificar partes de nuestra web, como por ejemplo <em>footer</em>, <em>header</em>, <em>nav</em>, <em>section</em>.<br>
Otro de  esos ambios fue la inclusión de nuevos elementos de formulario como el number, email y selector de color. El listado de elementos completo lo podéis ver desde <a href="https://www.w3schools.com/html/html_form_input_types.asp">aquí</a>.</p>
<p>Vale, ya hemos hablado de <strong>HTML</strong> un poco por encima, ahora, ¿qué hay de  <strong>PHP</strong>? <strong>PHP</strong> es un acrónimo recursivo de <em>Hypertext Preprocessor</em>, vamos, en resumidas cuentas, el lenguaje que usaremos para programar una página web como la nuestra y que nos permitirá ejecutar código en el servidor y luego mostrarlo al usuario como queramos, así como poder realizar inclusiones de plantillas evitando crear estructuras HTML duplicadas.</p>
<h2 id="elementos-semánticos-html"><a href="https://developer.mozilla.org/es/docs/Learn/HTML/Introduction_to_HTML/Document_and_website_structure#elementos_de_dise%C3%B1o_html_en_detalle">Elementos semánticos HTML</a></h2>
<p>Para identificar las diferentes secciones de nuestra web, vamos a utilizar los siguientes:</p>
<ul>
<li><strong>header</strong>: Si está dentro de la etiqueta <code>&lt;body&gt;</code>, nos servirá para identificar la cabecera, mientras, que si está dentro de <code>&lt;section&gt;</code> o <code>&lt;article&gt;</code>, será el encabezado de dicho elemento</li>
<li><strong>main</strong>: Contendrá el contenido principal de nuestra web y solamente existirá uno por página y siempre estará dentro de la etiqueta <code>&lt;body&gt;</code></li>
<li><strong>section</strong>: Nos servirá para agrupar partes de la página que es una sección en sí misma</li>
<li><strong>article</strong>: Nos permitirá identificar un elemento que tiene sentido en sí mismo, como por ejemplo la entrada de un blog. A su vez, si pintamos por ejemplo un listado de entradas, podemos pintar cada <code>&lt;article&gt;</code> dentro de un <code>&lt;section&gt;</code></li>
<li><strong>footer</strong>: Poco que decir al respecto, siempre irá dentro del <code>&lt;body&gt;</code> y, al igual que la etiqueta <code>&lt;header&gt;</code>, sirve para identificar en este caso el pie.</li>
</ul>
<h2 id="etiquetas-meta">Etiquetas meta</h2>
<p>Estas etiquetas sirven para indicar metainformación sobre el documento, sobretodo las usaremos para posicionamiento SEO, para incluir datos que lean redes sociales a la hora de compartir nuestra URL o incluso para indicar parámetros responsive de nuestra página. Nosotros usaremos los siguientes solamente:</p>
<ul>
<li>viewport: Es para indicar el área visible de nuestra web y lo usaremos por ejemplo para evitar que el usuario pueda hacer zoom desde un dispositivo móvil. <code>width=device-width, initial-scale=1, user-scalable=no</code></li>
<li>author: Indica el autor de la página</li>
<li>description: Indica una descripción de nuestra página</li>
</ul>
<h2 id="unos-tips-de-php">Unos tips de PHP</h2>
<ul>
<li>Abrir y cerrar etiquetas PHP: <code>&lt;?php echo 'Hola mundo'; ?&gt;</code></li>
<li>Abrir y cerrar etiquetas PHP de manera corta: <code>&lt;? echo 'Hola mundo'; ?&gt;</code></li>
<li>Abrir y cerrar etiquetas PHP haciendo un echo: <code>&lt;?= 'Hola mundo'; ?&gt;</code></li>
</ul>

