# Entornos-Graficos Practica-2 Ejercicio-1
	1. ¿ Qué es CSS y para qué se usa? 

CSS son las siglas de hojas de estilo en cascada. Las hojas de estilo es una tecnología que nos permite controlar la apariencia de una página web. 
CSS describe como los elementos dispuestos en la página son presentados al usuario.

Las Hojas de Estilo en Cascada es un mecanismo simple que describe cómo se va a mostrar un documento en la pantalla, 
o cómo se va a imprimir, o incluso cómo va a ser pronunciada la información presente en ese documento a través de un dispositivo de lectura. 
Esta forma de descripción de estilos ofrece a los desarrolladores el control total sobre estilo y formato de sus documentos

Con CSS podemos especificar estilos como el tamaño, fuentes, color, espaciado entre textos y recuadros así como el lugar donde disponer texto e imágenes en la página.

	2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan? 

Se te permite aplicar estilos de manera selectiva a elementos en documentos HTML Por ejemplo, para seleccionar todos los elementos de párrafo 
en una página HTML y volver el texto dentro de ellos de color rojo, deberíamos escribir este CSS.
 
	3. ¿ Cuáles son las tres formas de dar estilo a un documento? 

Podemos asociar las reglas de estilo a las marcas HTML de tres maneras:
- Directamente a la marca.
- En el head de la página.
- Agrupar las reglas de estilo en un archivo independiente con extensión *.css.

	4. ¿ Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno. 

-Selector de etiqueta o tipo:
	Aplica el estilo a todos los elementos de un mismo tipo o etiqueta HTML.
		p {
			color: blue;
		}

-Selector de clase (.):
	Aplica el estilo a todos los elementos que tengan una clase específica.
		.titulo {
			font-size: 24px;
		}

-Selector de ID (#):
Aplica el estilo a un único elemento que tenga un ID específico (cada ID debe ser único en el documento).
		#principal {
		  background-color: lightgray;
		}

-Selector universal (*):
Selecciona todos los elementos de la página.

			* {
			  margin: 0;
			  padding: 0;
			}



	5. ¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos? 

Una pseudo-clase en CSS es una palabra clave que se añade a un selector y permite aplicar estilos especiales a un elemento en un estado específico,
sin necesidad de agregarle una clase o un ID.

- :link Aplica estilos a los enlaces que no han sido visitados.
- :visited Aplica estilos a los enlaces que ya fueron visitados.
- :hover Aplica estilos cuando el usuario pasa el mouse sobre el enlace.
- :active Aplica estilos mientras se está haciendo clic sobre el enlace.

	6. ¿ Qué es la herencia? 
	
La herencia en CSS es el mecanismo por el cual ciertos estilos aplicados a un elemento se transmiten automáticamente a sus elementos hijos (los que están dentro de él).
Es decir, cuando defines una propiedad en un elemento contenedor, algunos estilos se heredan a los elementos contenidos, sin que tengas que volver a escribir esas reglas.

	7. ¿ En qué consiste el proceso denominado cascada?

La cascada en CSS es el proceso que el navegador utiliza para decidir qué reglas de estilo aplicar cuando múltiples reglas afectan al mismo elemento.
Se llama "cascada" porque las reglas se aplican siguiendo un orden de prioridades, como si fueran cayendo en niveles:

	- Importancia:

		Las reglas marcadas como !important tienen máxima prioridad.

	- Especificidad:

		Se calcula qué tan específico es un selector.

		Por ejemplo, un selector de ID (#) tiene más peso que uno de clase (.) o de tipo (como div, p).

	- Orden de aparición:

		Si dos reglas tienen la misma importancia y especificidad, se aplica la última que aparece en el código.