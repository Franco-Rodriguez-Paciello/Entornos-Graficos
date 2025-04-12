# Entornos-Graficos Practica-1 Ejercicio-1

	1. **Qu� es HTML, cuando fue creado, cu�les fueron las distintas versiones y cu�l es la �ltima? **

HTML significa HyperText Markup Language (Lenguaje de Marcado de Hipertexto) y es el lenguaje est�ndar que se utiliza para crear p�ginas web. Un lenguaje entendido universalmente,
Para publicar informaci�n y distribuirla globalmente usado por la World Wide Web.

HTML fue creado en 1991 por Tim Berners-Lee.

1. HTML 1.0: Fue la primera versi�n del lenguaje HTML lanzada en 1993.
2. HTML 2.0: Lanzada en 1995, a�adi� nuevas caracter�sticas como soporte para formularios y scripts.
3. HTML 3.2: Lanzada en 1997, agreg� soporte para tablas, frames y hojas de estilo en l�nea.
4. HTML 4.0 y 4.01: HTML 4.0 fue lanzado en 1997 y agreg� soporte para hojas de estilo externas, capas y marcos en l�nea. La versi�n 4.01 se lanz� en 1999 y corrigi� errores en la versi�n anterior.
5. XHTML: XHTML (Extensible Hypertext Markup Language) se lanz� en 2000 y se bas� en la sintaxis de XML. XHTML fue una importante evoluci�n de HTML y proporcion� una mayor modularidad y estructura al lenguaje.
6. HTML5: Es la �ltima versi�n del lenguaje HTML, lanzada en 2014. HTML5 introduce muchas nuevas caracter�sticas, como etiquetas sem�nticas, soporte multimedia, formularios mejorados, API de arrastrar y soltar, almacenamiento local y mucho m�s.
															
	2. **Cu�les son los principios b�sicos que el W3C recomienda seguir para la creaci�n de documentos con HTML?**

- Uso correcto del marcado sem�ntico. Usa las etiquetas HTML adecuadas seg�n el tipo de contenido.
- Separaci�n de contenido y presentaci�n. HTML debe usarse solo para estructurar el contenido.
- Accesibilidad. Aseg�rar  que el contenido sea accesible para todos los usuarios, incluyendo personas con discapacidades.
- Validez y compatibilidad. El HTML debe seguir las reglas del est�ndar W3C
- Internacionalizaci�n. Los documentos deben estar preparados para distintos idiomas y culturas.
- Uso de est�ndares y tecnolog�as abiertas.

	3. **En las Especificaciones de HTML, �cu�ndo un elemento o atributo se considera desaprobado? �y obsoleto?**


Elemento desaprobado (deprecated):

.Todav�a funciona en los navegadores, pero no se recomienda usarlo porque existe una mejor alternativa. Ademas se debe tener en cuenta la posibilidad de 
 ser eliminado en futuras versiones del est�ndar o ya no tener soporte en navegadores modernos


Elemento obsoleto (obsolete):
.Ya no se permite en el HTML actual. Puede que no funcione en algunos navegadores, o tenga efectos no definidos.
 En conclusion nunca deberia ser usado y deberia ser actualizado en caso de estar presente en uno de tus codigos.

	4. **Qu� es el DTD y cu�les son los posibles DTDs contemplados en la especificaci�n de HTML 4.01?**

DTD significa Document Type Definition (Definici�n de Tipo de Documento).
Una DTD es un documento que define la estructura de un documento XML:
los elementos, atributos, entidades, notaciones, etc, que pueden aparecer, el orden y el n�mero de veces que pueden aparecer, cu�les pueden ser hijos de cu�les, etc.
El procesador XML utiliza la DTD para verificar si un documento es v�lido, es decir, si el documento cumple las reglas del DTD.

En la especificaci�n de HTML 4.01, se contemplan tres posibles DTDs:

-DTD Estricto (Strict DTD): Usado por p�ginas web que excluyen atributos y elementos que la W3C espera ir eliminando a medida que crezca la compatibilidad con CSS.
-DTD Transicional (Transitional DTD): Usado por p�ginas web que incluyen atributos y elementos que la W3C espera ir eliminando a medida que crezca la compatibilidad con CSS.
-DTD Conjunto de marcos (Frameset DTD): Usado por p�ginas web con marcos.

	5. **Qu� son los metadatos y c�mo se especifican en HTML?**

Los metadatos suelen describirse como "datos sobre datos". Si el HTML de su p�gina web son datos, los metadatos son informaci�n adicional que se utilizan para explicar informacion adicional sobre ese HTML.

Los metadatos en HTML se especifican usando etiquetas meta, que se colocan en el encabezado de la p�gina, entre las etiquetas <html> y <body>
