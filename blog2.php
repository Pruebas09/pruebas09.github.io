<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/icono.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>ib-laboratorios | Blog</title>
</head>
	<header>
		<?php
		include("header.html");
		?>
	</header>
<body>
	<div class="contiene-todo" id="contenedor-all">
		
		<div class="fondo-blog">
			<div class="cont-info">
				<h1>Bienvenido al blog de ib Laboratorios</h1>
				<p>Diversos articulos con información que puede ayudarte</p>
			</div>
		</div>

		<div class="contiene-post"></div>

			<input type="radio" id="TODOS" name="categorias" value="TODOS" checked>
			<input type="radio" id="CARDIO" name="categorias" value="CARDIO">
			<input type="radio" id="SANGRE" name="categorias" value="SANGRE">
			<input type="radio" id="BIENESTAR" name="categorias" value="BIENESTAR">
			<input type="radio" id="IMAGEN" name="categorias" value="IMAGEN">

			<div class="contenedor-categoria">
				<label for="TODOS">TODOS</label>
				<label for="CARDIO">CARDIO</label>
				<label for="SANGRE">SANGRE</label>
				<label for="BIENESTAR">BIENESTAR</label>
				<label for="IMAGEN">IMAGEN</label>
			</div>

			<div class="posts">

				<div class="post" data-category="CARDIO">

					<div class="ctn-img">
						<img src="img/cor.png">
					</div>
					<h2>Ariculo 1 | ib laboratorios</h2>
					<span>19 de diciembre de 2021</span>
					<span>Autor: Luis Cabrera</span>
					<ul class="ctn-tag">
						<li>Etiqueta 1</li>
						<li>Etiqueta 2</li>
					</ul>
					<a href="#"><button>Leer más</button></a>

				</div>

				<div class="post" data-category="SANGRE">

					<div class="ctn-img">
						<img src="img/a-c.png">
					</div>
					<h2>Ariculo 1 | ib laboratorios</h2>
					<span>19 de diciembre de 2021</span>
					<span>Autor: Luis Cabrera</span>
					<ul class="ctn-tag">
						<li>Etiqueta 1</li>
						<li>Etiqueta 2</li>
					</ul>
					<a href="#"><button>Leer más</button></a>

				</div>

				<div class="post" data-category="BIENESTAR">

					<div class="ctn-img">
						<img src="img/bie.png">
					</div>
					<h2>Ariculo 1 | ib laboratorios</h2>
					<span>19 de diciembre de 2021</span>
					<span>Autor: Luis Cabrera</span>
					<ul class="ctn-tag">
						<li>Etiqueta 1</li>
						<li>Etiqueta 2</li>
					</ul>
					<a href="#"><button>Leer más</button></a>

				</div>

				<div class="post" data-category="IMAGEN">

					<div class="ctn-img">
						<img src="img/ima.png">
					</div>
					<h2>Ariculo 1 | ib laboratorios</h2>
					<span>19 de diciembre de 2021</span>
					<span>Autor: Luis Cabrera</span>
					<ul class="ctn-tag">
						<li>Etiqueta 1</li>
						<li>Etiqueta 2</li>
					</ul>
					<a href="#"><button>Leer más</button></a>

				</div>

				<div class="post" data-category="CARDIO">

					<div class="ctn-img">
						<img src="img/med.png">
					</div>
					<h2>Ariculo 1 | ib laboratorios</h2>
					<span>19 de diciembre de 2021</span>
					<span>Autor: Luis Cabrera</span>
					<ul class="ctn-tag">
						<li>Etiqueta 1</li>
						<li>Etiqueta 2</li>
					</ul>
					<a href="#"><button>Leer más</button></a>

				</div>

			</div>

		</div>

	</div>

	<?php 
	include("footer.html");
	?>
</body>
</html>