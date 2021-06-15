---


---

<h1 id="formularios--metodología-bem--variables-css">03 - Formularios + metodología BEM + variables CSS</h1>
<p>En este tercer ejercicio aprenderemos sobre la metodología BEM y la creación de variables CSS para introducirlas en nuestro formulario mientras lo creamos y maquetamos.</p>
<h2 id="metodología-bem">Metodología BEM</h2>
<p>La metodología <strong>BEM</strong> (<strong>B</strong>lock - <strong>E</strong>lement - <strong>M</strong>odifier) se usa para tener el código CSS más limpio y más legible.</p>
<p>BEM tiene como horizonte <strong>modularizar lo máximo posible cada uno de los bloques de código dispuesto.</strong> Se centra en tres parámetros o variables posibles: Bloques (div, section, article, ul, ol, etc.), elementos (a, button, li, span, etc.) y modificadores.</p>
<ul>
<li>Bloque: Será nuestro contenedor base donde estará cada uno de los elementos que queremos maquetar, por ejemplo en nuestro caso, el formulario</li>
<li>Elemento: Cada uno de los elementos que queramos maquetar, como los label o los input del formulario</li>
<li>Modificador: El modificador a aplicar sobre el elemento en cuestión</li>
</ul>
<p>Como un ejemplo vale más que mil palabras, mejor poner un ejemplo:</p>
<p>HTML:</p>
<pre><code>&lt;form class="formulario"&gt;
	&lt;label class="formulario__label formulario__label--uppercase&gt;Texto&lt;/label&gt;
&lt;/form&gt;
</code></pre>
<p>CSS:</p>
<pre><code>.formulario {
	backgroun: red;
}

.formulario .formulario__label {
	display: block;
}

.formulario .formulario__label--uppercase {
	text-transform: uppercase;
}
</code></pre>
<h2 id="variables-css"><a href="https://developer.mozilla.org/es/docs/Web/CSS/Using_CSS_custom_properties">Variables CSS</a></h2>
<p>Las variables o propiedades personalizadas CSS son entidades que establecemos en nuestra hoja de estilos y que nos permitirán no tener que estar indicando todo el rato un valor, sino que con indicar la variable que hemos introducido, automáticamente nos lo cogerá.</p>
<p>Por ejemplo, si queremos poner un fondo rojo a nuestra etiqueta <code>&lt;body&gt;</code>, dentro de nuestro <strong>CSS</strong> escribiremos lo siguiente:</p>
<pre><code>:root {
    --red: #FF0000;
}


body {
    background: var(--red);
}
</code></pre>
<h1 id="ejercicio">Ejercicio</h1>
<p>Crear un proyecto nuevo para gestionar libros, donde tendremos un formulario (<strong>form.php</strong>) para poder dar de alta cada libro con los campos:</p>
<ul>
<li><strong>Nombre</strong>: type=“text”</li>
<li><strong>Autor</strong>: type=“text”</li>
<li><strong>Fecha publicación</strong>: type=“date”</li>
<li><strong>Género literario</strong>: select | Valores: Narrativo, lírico, teatral</li>
<li><strong>Código ISBN</strong>:  type=“number” | validación mínimo 10 dígitos, máximo 13 dígitos</li>
</ul>
<p>La base de datos tendrá una tabla <strong>book</strong> con:</p>
<ul>
<li><strong>id</strong>: auto_increment || primary_key</li>
<li><strong>name</strong>: varchar</li>
<li><strong>author</strong>: varchar</li>
<li><strong>publication_date</strong>: varchar</li>
<li><strong>gender</strong>: varchar</li>
<li><strong>isbn_code</strong>: int (13)</li>
</ul>

