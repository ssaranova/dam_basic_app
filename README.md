---


---

<h1 id="taller-dam--daw">Taller DAM / DAW</h1>
<p>En este taller veremos paso a paso cómo crear una aplicación básica para hacer un <strong>CRUD</strong> (<strong>C</strong>reate / <strong>R</strong>ead / <strong>U</strong>pdate / <strong>D</strong>elete) de usuarios</p>
<h2 id="¿qué-tecnologías-utilizaremos">¿Qué tecnologías utilizaremos?</h2>
<ul>
<li>HTML</li>
<li>CSS</li>
<li>JS</li>
<li>PHP</li>
</ul>
<h2 id="¿qué-programas-necesitaremos">¿Qué programas necesitaremos?</h2>
<p>Solamente necesitaremos los siguientes programas:</p>
<ul>
<li><a href="https://code.visualstudio.com/download">VS Code</a></li>
<li><a href="https://www.apachefriends.org/download.html">Xampp</a> última versión PHP 7.3.x</li>
</ul>
<h2 id="¿alguna-extensión-para-vs-code">¿Alguna extensión para VS Code?</h2>
<p>¡Por supuesto! Toda ayuda externa es bien recibida a la hora de desarrollar pero en este caso solamente necesitaremos las siguientes extensiones:</p>
<ul>
<li><a href="https://marketplace.visualstudio.com/items?itemName=DmitryDorofeev.empty-indent">empty-indent</a></li>
<li><a href="https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker">PHP DocBlocker</a></li>
<li><a href="https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client">PHP Intelephense</a></li>
<li><a href="https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode">Prettier</a></li>
</ul>
<p>A continuación tendremos que ir a configurar el fichero <strong>settings.json</strong> que alberga la configuración de VS Code</p>
<h3 id="configuración-empty-indent">Configuración empty-indent</h3>
<pre><code>/* Empty Indent */    
"emptyIndent.removeIndent": true,    
"emptyIndent.highlightIndent": false,    
"emptyIndent.highlightColor": "rgba(246,36,89,0.6)",
</code></pre>
<h3 id="configuración-php-intelephense">Configuración PHP Intelephense</h3>
<pre><code>/* Mostrar solo funciones de la clase actual */    
"php.suggest.basic": false,    
"[php]": {    
	"editor.defaultFormatter": "bmewburn.vscode-intelephense-client"    
},
</code></pre>
<h3 id="otras-configuraciones">Otras configuraciones</h3>
<pre><code>"editor.wordWrap": "on",
"[javascript]": {
	"editor.defaultFormatter": "vscode.typescript-language-features"
},
"editor.codeActionsOnSave": null,
/* Forzar formateo a 4 espacios */
"editor.formatOnSave": false,
"editor.tabSize": 4, // The number of spaces a tab is equal to.
"editor.insertSpaces": true, // Insert spaces when pressing Tab.
"editor.detectIndentation": false,
"editor.tokenColorCustomizations": null,
"editor.suggestSelection": "first",
"[html]": {
	"editor.defaultFormatter": "vscode.html-language-features"
},
"prettier.tabWidth": 4,
"prettier.resolveGlobalModules": true,
"[json]": {
	"editor.defaultFormatter": "esbenp.prettier-vscode"
},
"[css]": {
	"editor.defaultFormatter": "esbenp.prettier-vscode"
},
</code></pre>

