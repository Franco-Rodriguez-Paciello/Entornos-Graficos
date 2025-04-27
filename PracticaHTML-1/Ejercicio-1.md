# Entornos-Graficos Practica-1 Ejercicio-1

	1. **Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última? **

HTML significa HyperText Markup Language (Lenguaje de Marcado de Hipertexto) y es el lenguaje estándar que se utiliza para crear páginas web. Un lenguaje entendido universalmente,
Para publicar información y distribuirla globalmente usado por la World Wide Web.

HTML fue creado en 1991 por Tim Berners-Lee.

1. HTML 1.0: Fue la primera versión del lenguaje HTML lanzada en 1993.
2. HTML 2.0: Lanzada en 1995, añadió nuevas características como soporte para formularios y scripts.
3. HTML 3.2: Lanzada en 1997, agregó soporte para tablas, frames y hojas de estilo en línea.
4. HTML 4.0 y 4.01: HTML 4.0 fue lanzado en 1997 y agregó soporte para hojas de estilo externas, capas y marcos en línea. La versión 4.01 se lanzó en 1999 y corrigió errores en la versión anterior.
5. XHTML: XHTML (Extensible Hypertext Markup Language) se lanzó en 2000 y se basó en la sintaxis de XML. XHTML fue una importante evolución de HTML y proporcionó una mayor modularidad y estructura al lenguaje.
6. HTML5: Es la última versión del lenguaje HTML, lanzada en 2014. HTML5 introduce muchas nuevas características, como etiquetas semánticas, soporte multimedia, formularios mejorados, API de arrastrar y soltar, almacenamiento local y mucho más.
															
	2. **Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?**

- Uso correcto del marcado semántico. Usa las etiquetas HTML adecuadas según el tipo de contenido.
- Separación de contenido y presentación. HTML debe usarse solo para estructurar el contenido.
- Accesibilidad. Asegúrar  que el contenido sea accesible para todos los usuarios, incluyendo personas con discapacidades.
- Validez y compatibilidad. El HTML debe seguir las reglas del estándar W3C
- Internacionalización. Los documentos deben estar preparados para distintos idiomas y culturas.
- Uso de estándares y tecnologías abiertas.

	3. **En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?**


Elemento desaprobado (deprecated):

.Todavía funciona en los navegadores, pero no se recomienda usarlo porque existe una mejor alternativa. Ademas se debe tener en cuenta la posibilidad de 
 ser eliminado en futuras versiones del estándar o ya no tener soporte en navegadores modernos


Elemento obsoleto (obsolete):
.Ya no se permite en el HTML actual. Puede que no funcione en algunos navegadores, o tenga efectos no definidos.
 En conclusion nunca deberia ser usado y deberia ser actualizado en caso de estar presente en uno de tus codigos.

	4. **Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?**

DTD significa Document Type Definition (Definición de Tipo de Documento).
Una DTD es un documento que define la estructura de un documento XML:
los elementos, atributos, entidades, notaciones, etc, que pueden aparecer, el orden y el número de veces que pueden aparecer, cuáles pueden ser hijos de cuáles, etc.
El procesador XML utiliza la DTD para verificar si un documento es válido, es decir, si el documento cumple las reglas del DTD.

En la especificación de HTML 4.01, se contemplan tres posibles DTDs:

-DTD Estricto (Strict DTD): Usado por páginas web que excluyen atributos y elementos que la W3C espera ir eliminando a medida que crezca la compatibilidad con CSS.
-DTD Transicional (Transitional DTD): Usado por páginas web que incluyen atributos y elementos que la W3C espera ir eliminando a medida que crezca la compatibilidad con CSS.
-DTD Conjunto de marcos (Frameset DTD): Usado por páginas web con marcos.

	5. **Qué son los metadatos y cómo se especifican en HTML?**

Los metadatos suelen describirse como "datos sobre datos". Si el HTML de su página web son datos, los metadatos son información adicional que se utilizan para explicar informacion adicional sobre ese HTML.

Los metadatos en HTML se especifican usando etiquetas meta, que se colocan en el encabezado de la página, entre las etiquetas <html> y <body>
