# 06 { css }
¿Y ese título?, ¿qué vamos a hacer ahora? Cambiar radicalmente nuestra plantilla, o al menos, ¡eso intentaremos!

Para ello, vamos a usar un framework que nos permita darle estilos ya predefinidos ayudándonos a reducir tiempo de desarrollo. ¿Cuáles tenemos? 
- [Bootstrap](https://getbootstrap.com/)
- [Materialize](https://materializecss.com/)
- [Bootstrap + Materialize](https://mdbootstrap.com/): Tiene limitaciones, hay versión PRO
- [Pure CSS](https://purecss.io/)
- [Foundation](https://get.foundation/)
- ...

En nuestro caso usaremos bootstrap ya que tiene plantillas base para poder basarnos en ellas.

# Bootstrap
Para poder poner bootstrap en nuestro proyecto, accederemos a su [página oficial](https://getbootstrap.com/docs/4.6/getting-started/introduction/) desde la cual podremos ver sus ejemplos o bien cómo incluirlo en nuestro proyecto. 

## Inclusión en nuestro proyecto
Nos descargaremos la última versión y pondremos la inclusión del CSS en nuestra etiqueta `<head>` y el JS junto con jQuery al final de nuestra `<body>`

- head:

> `<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />`

 - body:        

> `<script> src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>`
> `<script src="./assets/js/bootstrap.bundle.min.js"></script>`

    
Otra manera de incluirlo, si no queremos tener almacenado en nuestro equipo los ficheros, es utilizar las rutas del CDN, aunque estas las pueden modificar.

Nos basaremos en la documentación para modificar:
- [Navegación añadiendo desplegable móvil](https://getbootstrap.com/docs/4.6/components/navbar/)
- [Tabla listado](https://getbootstrap.com/docs/4.6/content/tables/)
- [Botones acción](https://getbootstrap.com/docs/4.6/components/buttons/)
- [Formulario](https://getbootstrap.com/docs/4.6/components/forms/)

# Ejercicio
Añadir bootstrap a nuestro proyecto y cambiar la apariencia para que use [esta](https://getbootstrap.com/docs/4.6/examples/sticky-footer-navbar/#) plantilla base en la navegación y luego en los diferentes componentes usados.


