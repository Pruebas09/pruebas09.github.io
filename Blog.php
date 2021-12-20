<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/icono.png">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<title>ib-laboratorios | Blog</title>
</head>
	<header>
		<?php
		include("header.html");
		?>
	</header>
<body>
	<section id="principal">
		<section id="publicaciones">
			<article class="post">
				<a href="#" class="enlace-post">
					<h2 class="titulo-post">Titulo de la noticia 1</h2>
				</a>
				<p>
					<strong>Por:</strong><span class="datos-publicaciones"> Luis Cabrera</span>
					<br>
					<strong>Fecha: </strong><span class="datos-publicaciones"> Jueves 16 de Diciembre de 2021</span>
				</p>
				<img src="img/cor.png" class="img-post">
				<p class="parrafo-post">
					Un factor común en la obesidad, es el síndrome metabólico, un conjunto de factores de riesgo que pueden llevarte a padecer diabetes o problemas cardiacos, entre otros. Es importante que conozcas sus características para detectar si lo sufres y poder revertirlo a tiempo. ¿Qué es el síndrome metabólico? Como lo comentamos, el síndrome metabólico es[...]
				</p>
				<a href="#" class="leer-mas"> Leer más...</a>
				<span class="num-comentarios">10 comentarios</span>
			</article>

			<article class="post">
				<a href="#" class="enlace-post">
					<h2 class="titulo-post">Titulo de la noticia 2</h2>
				</a>
				<p>
					<strong>Por:</strong><span class="datos-publicaciones"> Luis Cabrera</span>
					<br>
					<strong>Fecha: </strong><span class="datos-publicaciones"> Jueves 16 de Diciembre de 2021</span>
				</p>
				<img src="img/a-c.png" class="img-post">
				<p class="parrafo-post">
					Un factor común en la obesidad, es el síndrome metabólico, un conjunto de factores de riesgo que pueden llevarte a padecer diabetes o problemas cardiacos, entre otros. Es importante que conozcas sus características para detectar si lo sufres y poder revertirlo a tiempo. ¿Qué es el síndrome metabólico? Como lo comentamos, el síndrome metabólico es[...]
				</p>
				<a href="#" class="leer-mas"> Leer más...</a>
				<span class="num-comentarios">10 comentarios</span>
			</article>

			<article class="post">
				<a href="#" class="enlace-post">
					<h2 class="titulo-post">Titulo de la noticia 3</h2>
				</a>
				<p>
					<strong>Por:</strong><span class="datos-publicaciones"> Luis Cabrera</span>
					<br>
					<strong>Fecha: </strong><span class="datos-publicaciones"> Jueves 16 de Diciembre de 2021</span>
				</p>
				<img src="img/an-cl.jpg" class="img-post">
				<p class="parrafo-post">
					Un factor común en la obesidad, es el síndrome metabólico, un conjunto de factores de riesgo que pueden llevarte a padecer diabetes o problemas cardiacos, entre otros. Es importante que conozcas sus características para detectar si lo sufres y poder revertirlo a tiempo. ¿Qué es el síndrome metabólico? Como lo comentamos, el síndrome metabólico es[...]
				</p>
				<a href="#" class="leer-mas"> Leer más...</a>
				<span class="num-comentarios">10 comentarios</span>
			</article>

			<article class="post">
				<a href="#" class="enlace-post">
					<h2 class="titulo-post">Titulo de la noticia 4</h2>
				</a>
				<p>
					<strong>Por:</strong><span class="datos-publicaciones"> Luis Cabrera</span>
					<br>
					<strong>Fecha: </strong><span class="datos-publicaciones"> Jueves 16 de Diciembre de 2021</span>
				</p>
				<img src="img/bie.png" class="img-post">
				<p class="parrafo-post">
					Un factor común en la obesidad, es el síndrome metabólico, un conjunto de factores de riesgo que pueden llevarte a padecer diabetes o problemas cardiacos, entre otros. Es importante que conozcas sus características para detectar si lo sufres y poder revertirlo a tiempo. ¿Qué es el síndrome metabólico? Como lo comentamos, el síndrome metabólico es[...]
				</p>
				<a href="#" class="leer-mas"> Leer más...</a>
				<span class="num-comentarios">10 comentarios</span>
			</article>

			<div id="paginacion">
				<p>Publicaciones Anteriores |&nbsp; &nbsp; <a href="#" class="enlace-paginacion">Siguientes Publicaciones</a></p>
			</div>
		</section>

		<section id="sidebar">
			<section id="buscar">
				<h2 class="encabezado-sidebar">Buscar</h2>
				<form>
					<input type="text" name="buscar" placeholder="Buscar">
					<button class="boton">Buscar</button>
				</form>
			</section>

			<section id="categorias">
				<h2 class="encabezado-sidebar">Categorías</h2>
				<a href="#" class="enlace-sidebar">Cardio</a>
				<a href="#" class="enlace-sidebar">Bienestas</a>
				<a href="#" class="enlace-sidebar">Alimentación</a>
				<a href="#" class="enlace-sidebar">Analisis</a>
				<a href="#" class="enlace-sidebar">Salud</a>
			</section>

			<section id="ultimos-post">
				<h2 class="encabezado-sidebar">Ultimos post</h2>
				<a href="#" class="enlace-sidebar">
					<h4>Tituo de la noticia 1</h4>
					<p>Esto es una descripcion de la noticia</p>
				</a>

				<a href="#" class="enlace-sidebar">
					<h4>Tituo de la noticia 2</h4>
					<p>Esto es una descripcion de la noticia</p>
				</a>

				<a href="#" class="enlace-sidebar">
					<h4>Tituo de la noticia 3</h4>
					<p>Esto es una descripcion de la noticia</p>
				</a>

				<a href="#" class="enlace-sidebar">
					<h4>Tituo de la noticia 4</h4>
					<p>Esto es una descripcion de la noticia</p>
				</a>

				<a href="#" class="enlace-sidebar">
					<h4>Tituo de la noticia 5</h4>
					<p>Esto es una descripcion de la noticia</p>
				</a>

			</section>

		</section>
	</section>

	<?php 
	include("footer.html");
	?>
</body>
</html>