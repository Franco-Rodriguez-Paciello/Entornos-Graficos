# Entornos-Graficos Practica-2 Ejercicio-1
	1. � Qu� es CSS y para qu� se usa? 

CSS son las siglas de hojas de estilo en cascada. Las hojas de estilo es una tecnolog�a que nos permite controlar la apariencia de una p�gina web. 
CSS describe como los elementos dispuestos en la p�gina son presentados al usuario.

Las Hojas de Estilo en Cascada es un mecanismo simple que describe c�mo se va a mostrar un documento en la pantalla, 
o c�mo se va a imprimir, o incluso c�mo va a ser pronunciada la informaci�n presente en ese documento a trav�s de un dispositivo de lectura. 
Esta forma de descripci�n de estilos ofrece a los desarrolladores el control total sobre estilo y formato de sus documentos

Con CSS podemos especificar estilos como el tama�o, fuentes, color, espaciado entre textos y recuadros as� como el lugar donde disponer texto e im�genes en la p�gina.

	2. CSS utiliza reglas para las declaraciones de estilo, �c�mo funcionan? 

Se te permite aplicar estilos de manera selectiva a elementos en documentos HTML Por ejemplo, para seleccionar todos los elementos de p�rrafo 
en una p�gina HTML y volver el texto dentro de ellos de color rojo, deber�amos escribir este CSS.
 
	3. � Cu�les son las tres formas de dar estilo a un documento? 

Podemos asociar las reglas de estilo a las marcas HTML de tres maneras:
- Directamente a la marca.
- En el head de la p�gina.
- Agrupar las reglas de estilo en un archivo independiente con extensi�n *.css.

	4. � Cu�les son los distintos tipos de selectores m�s utilizados? Ejemplifique cada uno. 

-Selector de etiqueta o tipo:
	Aplica el estilo a todos los elementos de un mismo tipo o etiqueta HTML.
		p {
			color: blue;
		}

-Selector de clase (.):
	Aplica el estilo a todos los elementos que tengan una clase espec�fica.
		.titulo {
			font-size: 24px;
		}

-Selector de ID (#):
Aplica el estilo a un �nico elemento que tenga un ID espec�fico (cada ID debe ser �nico en el documento).
		#principal {
		  background-color: lightgray;
		}

-Selector universal (*):
Selecciona todos los elementos de la p�gina.

			* {
			  margin: 0;
			  padding: 0;
			}



	5. � Qu� es una pseudo-clase? Cu�les son las m�s utilizadas aplicadas a v�nculos? 

Una pseudo-clase en CSS es una palabra clave que se a�ade a un selector y permite aplicar estilos especiales a un elemento en un estado espec�fico,
sin necesidad de agregarle una clase o un ID.

- :link Aplica estilos a los enlaces que no han sido visitados.
- :visited Aplica estilos a los enlaces que ya fueron visitados.
- :hover Aplica estilos cuando el usuario pasa el mouse sobre el enlace.
- :active Aplica estilos mientras se est� haciendo clic sobre el enlace.

	6. � Qu� es la herencia? 
	
La herencia en CSS es el mecanismo por el cual ciertos estilos aplicados a un elemento se transmiten autom�ticamente a sus elementos hijos (los que est�n dentro de �l).
Es decir, cuando defines una propiedad en un elemento contenedor, algunos estilos se heredan a los elementos contenidos, sin que tengas que volver a escribir esas reglas.

	7. � En qu� consiste el proceso denominado cascada?

La cascada en CSS es el proceso que el navegador utiliza para decidir qu� reglas de estilo aplicar cuando m�ltiples reglas afectan al mismo elemento.
Se llama "cascada" porque las reglas se aplican siguiendo un orden de prioridades, como si fueran cayendo en niveles:

	- Importancia:

		Las reglas marcadas como !important tienen m�xima prioridad.

	- Especificidad:

		Se calcula qu� tan espec�fico es un selector.

		Por ejemplo, un selector de ID (#) tiene m�s peso que uno de clase (.) o de tipo (como div, p).

	- Orden de aparici�n:

		Si dos reglas tienen la misma importancia y especificidad, se aplica la �ltima que aparece en el c�digo.