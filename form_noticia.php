<?php 

$conex = mysqli_connect(""); 

if (isset($_POST['submit'])) {
    if (strlen($_POST['titular']) >= 1 && strlen($_POST['noticia']) >= 1) {
	    $titular = trim($_POST['titular']);
		$entradilla = trim($_POST['entradilla']);
		$genero = trim($_POST['genero']);
	    $noticia = trim($_POST['noticia']);
		$autor = trim($_POST['autor']);
	    $consulta = "INSERT INTO tnoticia (cTitular, cEntradilla, cGenero, cNoticia, cAutor) VALUES ('$titular', '$entradilla','$genero' ,'$noticia', '$autor')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
			<!DOCTYPE html>
			<html>
			<head>
				<title>RealNews - Registro</title>
				<link rel="icon" type="image/x-icon" href="img/logo.png">
				<meta charset="utf-8">
				<link rel="stylesheet" type="text/css" href="css/estilos.css">
			</head>
			<body>

				<header>
					<div class="imagenTexto">
						<img src="img/logo.png" alt="" width="100px">
					</div>
					
					<nav>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="registro.html">Registrate</a></li>
							<li><a href="form_noticia.html">Escribe tu noticia</a></li>
						</ul>
					</nav>
				</header>

				<section>
					<form method="post" action="registro.php">
						<h1>Noticia subida con exito!</h1>
						<a href="index.php" id="botonVolver">Ir a noticias</a>
					</form>
				</section>
			</body>
			</html>
           <?php
	    } else {
	    	?> 
	    	<!DOCTYPE html>
			<html>
			<head>
				<title>RealNews - Registro</title>
				<link rel="icon" type="image/x-icon" href="img/logo.png">
				<meta charset="utf-8">
				<link rel="stylesheet" type="text/css" href="css/estilos.css">
			</head>
			<body>

				<header>
					<div class="imagenTexto">
						<img src="img/logo.png" alt="" width="100px">
					</div>
					
					<nav>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="registro.html">Registrate</a></li>
							<li><a href="form_noticia.html">Escribe tu noticia</a></li>
						</ul>
					</nav>
				</header>

				<section>
					<form method="post" action="registro.php">
						<h1>Error!</h1>
						<a href="index.php" id="botonVolver">Volver a intentarlo</a>
					</form>
				</section>
			</body>
			</html>
           <?php
	    }
    } 
	  else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
