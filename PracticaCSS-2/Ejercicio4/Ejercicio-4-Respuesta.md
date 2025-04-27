# Entornos-Graficos Practica-2 Ejercicio-4

La primera diferencia  rapida en la aplicacion de la clase contenido, donde en un caso se aplica a la etiqueta <body> 
por lo que por herencia aplica un estilo a todos los elementos dentro de esta.

<body class="contenido"> 
<p> Este es un texto................</p> 

En el caso contrario vemos como se aplica la clase contenido a la etiqueta <p> por lo que se aplicara por herencia solo a lo herede de esta, ademas vemos el uso de un estilo en linea.

<p class="contenido" style="font-weight: normal;"> Este es un texto ...............</p> 

Por otro lado vemos que se expresan distintos colores para los distintos estados de la etiqueta <a>, como ya fueron explicados en el ejercio anterior.

a:link {color:gray } 
a:visited{color:blue } 
a:hover {color:fuchsia } 
a:active {color:red } 

Este selector aplica el color verde a todos los elementos en la página

* { color: green; }


Los párrafos tendrán fuentes Arial o Helvetica (dependiendo de la disponibilidad).

El tamaño de fuente será de 10px.

El color del texto será negro.

p {font-family: arial,helvetica;font-size: 10px;color:black; } 


Este selector se aplica a cualquier elemento que tenga la clase contenido

Los elementos con la clase contenido tendrán un tamaño de fuente de 14px.

Estos elementos también tendrán la fuente en negrita (font-weight: bold)

.contenido { font-size: 14px; font-weight: bold; }