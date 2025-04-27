# Entornos-Graficos Practica-1 Ejercicio3

3.a)

```
<a href="http://www.google.com.ar">Click aqu� para ir a Google</a> 
<a href="http://www.google.com.ar" target="_blank">Click aqu� para ir a Google</a> 
<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help"> 
<a href="#">Click aqu� para ir a Google</a> 
<a href="#arriba">Click aqu� para volver arriba</a> 
<a name="arriba" id="arriba"></a>
```

-En el primer caso vemos un Enlace simple. Al hacer clic, lleva al usuario a la p�gina de Google Argentina. El navegador navega en la misma pesta�a/ventana.
-En el segundo se hace lo mismo que el anterior, pero se abre en una nueva pesta�a o ventana.
-En el tercer caso no funciona, tiene un espacio luego del www. Ademas de que no se visualiza.
-En el cuarto caso te lleva a la misma web en la que estas y muestra el texto
-En el quinto vinculo te lleva a la seccion #arriba en caso de que exista alguna y muestra el texto Click aqu� para volver arriba
-En el sexto es la declaracion de un sector en la pagina web no se visualiza nada


b.

```
<p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aqu�</a></p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aqu�</p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="ima
gen1" />Click aqu�</a></p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a
href="http://www.google.com.ar">Click aqu�</a></p>
```

-El primer caso la imagen y el hipervinculo son elementos separados, se ven por separado
-El segundo caso la imagen esta dentro del hipervinculo, y separado del hipervinculo se ve el texto
-El tercer caso la imagen esta dentro del hipervinculo y el texto tambien, ambos son clickeables y llevan a la misma url. imagen se mostrara como ima gen.
-El cuarto caso la imagen y el texto estan en dos hipervinculos separados, se visualizan los dos separados y llevan al mismo destino con distintos enlaces. el alt y el texto de p se mostraran separados

c.

```
<ul>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ul>
```

```
<ol>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ol>
```

```
<ol>
<li>xxx</li>
</ol>
<ol>
<li value="2">yyy</li>
</ol>
<ol>
<li
value="3">zzz</li>
</ol>
```

```
<blockquote>
<p>1. xxx<br />
2. yyy<br />
3. zzz</p>
</blockquote>
```

-En el primer caso se visualiaza una lista desordenada que contiene

- xxx
- yyy
- zzz

-En el segundo caso se visualiza una lista ordenada que contiene:

1. xxx
2. yyy
3. zzz

-En el tercer caso se visualiza a cada elemento de la lista en en su propia lista ordenada. El atributo value en las etiquetas li establece el n�mero de inicio de cada elemento

1. xxx
2. yyy
3. zzz

<ol><li>xxx</li></ol>
<ol><li value="2">yyy</li></ol>
<ol><li value="3">zzz</li></ol>

-En el cuarto caso se visualiza una cita con una lista de los elementos ordenados, se utiliza `<br/>`para el salto de linea.

<blockquote>
<p>1. xxx<br />
2. yyy<br />
3. zzz</p>
</blockquote>

d.

```
<table border="1" width="300">
<tr>
<th>Columna 1</th>
<th>Columna 2</th>
</tr>
<tr>
<td>Celda 1</td>
<td>Celda 2</td>
</tr>
<tr>
<td>Celda 3</td>
<td>Celda 4</td>
</tr>
</table>
```

```
<table border="1" width="300">
<tr>
<td><div align="center"><strong>Colum
na1</strong></div></td>
<td><div align="center"><strong>Columna
2</strong></div></td>
</tr>
<tr>
<td>Celda 1</td>
<td>Celda 2</td>
</tr>
<tr>
<td>Celda 3</td>
<td>Celda 4</td>
</tr>
</table>
```

-En el primer caso se ve una tabla, los encabezados estan marcados con la tag <th> luego <td>  se utiliza para las celdas con los datos.

-En el segundo caso los encabezados estan marcados con la tag <td> que tiene la funcionalidad de marcar los encabezados especificamente. El texto se muestra en negrita y centrado gracias a dicha tag.

e.

```
<table width="200">
<caption>
T�tulo
</caption>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">
&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
```

```
<table width="200">
<tr>
<td colspan="3"><div
align="center">T�tulo</div></td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
```

-En el primer caso se visualiza una etiqueta de tabla que tiene una etiqueta <caption>, como ya se menciono esta muestra el titulo encima de la tabla.

-En el segundo caso se crea una tabla y se agrega una fila con tr con el titulo dentro de la tabla y centrado por la propiedad align del div.

f.

```
<table width="200">
<tr>
<td colspan="3"><div
align="center">T�tulo</div></td>
</tr>
<tr>
<td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
```

```
<table width="200">
<tr>
<td colspan="3"><div
align="center">T�tulo</div></td>
</tr>
<tr>
<td colspan="2"
bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
```

-En el primer caso la primera celda de la segunda fila ocupa dos filas por el atributo rowspan=2.

-En el segundo caso la primer celda de la segunda filda ocupa dos columnas por el atributo colspan.

g.

```
<table width="200" border="1">
<tr>
<td colspan="3"><div
align="center">T�tulo</div></td>
</tr>
<tr>
<td colspan="2"rowspan="2">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="50%">&nbsp;</td>
</tr>
</table>
```

```
<table width="200" border="1" cellpadding="0"
cellspacing="0">
<tr>
<td colspan="2"><div
align="center">T�tulo</div></td>
</tr>
<tr>
<td rowspan="2">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="50%">&nbsp;</td>
</tr>
</table>
```

-En el primer caso la primera celda de la segunda fila se extiende a trav�s de dos columnas y dos filas gracias a los atributos colspan="2" y rowspan="2"-

-En el segundo caso la primera celda de la segunda fila se extiende a trav�s de dos filas gracias al atributo rowspan="2". Contiene los atributos que eliminan el espacio entre las celdas y el espacio entre el contenido de la celda y sus bordes cellpadding="0" y cellspacing="0". 

h.

```
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
<fieldset>
<legend>LOGIN</legend>
Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br />
Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
</fieldset>
<input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>
```

```
<form id="form2" name="form2" action="" method="get" target="_blank">
LOGIN<br />
<label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
<label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
<input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
```

```
<form id="form3" name="form3" action="mailto:xx@xx.com� enctype=text/plain method="p
ost" target="_blank">
<fieldset>
<legend>LOGIN</legend>
Usuario: <input type="text" id="usu3" name="usu3" /><br />
Clave: <input type="password" id="clave3" name="clave3" />
</fieldset>
<input type="reset" id="boton3" name="boton3" value=
"Enviar" />
</form>
```

-El primer caso ya tiene valores por defecto en los campos mientras que los otros dos no y abre una nueva pesta�a al apretar el input que dispara un "submit".

-El segundo caso la clave es de tipo "text" y se visualizan los datos enviados por el metodo y abre una nueva pesta�a al apretar el input que dispara un "submit".

-El tercer caso no abre una ventana nueva porque el input es de tipo "reset".

i.

```
<label>Bot�n 1
<button type="button" name="boton1" id="boton1">
<img src="logo.jpg" alt="Bot�n con imagen " width="30" height="20" /><br />
<b>CLICK AQU�</b></button></label>
```

```
<label>Bot�n 2
<input type="button" name="boton2" id="boton2" value="CLICK AQU�" />
</label>
```

-El primer caso muestra un boton con una imagen y un texto. Donde se utiliza tanto al etiqueta como el type "button".

-El segundo caso muestra solamente el texto en un label. Donde se utilizaa una etiqueta <input> con type "button".

j.

```
<p><label><input type="radio" name="opcion" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion" id="Y" value="Y" />Y</label></p>
```

```
<p><label><input type="radio" name="opcion1" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion2" id="Y" value="Y" />Y</label></p>
```

- El primer c�digo genera 2 radio buttons en los cuales solo se puede marcar una opci�n

- El segundo c�digo  genera 2 radio buttons en los cuales se pueden seleccionar ambas opciones. Esto es debido a los valores del atributo name.

k.

```
<select name="lista">
<optgroup label="Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label="Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>
```

```
<select name="lista[]" multiple="multiple">
<optgroup label=" Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label=" Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>
```

-El primer caso es un menu desplegable simple que permite seleccionar una sola opcion a la vez.

-El segundo caso es un menu desplegable que permite seleccionar varias opciones a la vez.