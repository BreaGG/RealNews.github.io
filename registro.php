<?php 

$conex = mysqli_connect("localhost","root","","realnews"); 

if (isset($_POST['register'])) {
    if (strlen($_POST['user']) >= 3 && strlen($_POST['pass']) >= 6) {
	    $user = trim($_POST['user']);
	    $pass = trim($_POST['pass']);
		$mail = trim($_POST['mail']);
	    $consulta = "INSERT INTO tusuarios( cUsuario, cContraseña, cMail) VALUES ('$user','$pass', '$mail')";
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
							<li><a href="formularioB.html">Escribe tu noticia</a></li>
						</ul>
					</nav>
				</header>

				<section>
					<form method="post" action="registro.php">
						<h1>Registro subido con exito!</h1>
						<a href="index.php" id="botonVolver">Volver</a>
					</form>
				</section>
			</body>
			<footer>
				<h1>&copyPowered by <strong>RealNews</strong></h1>
				<h3>Todos los derechos reservados</h3>
			</footer>
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
							<li><a href="formularioB.html">Escribe tu noticia</a></li>
						</ul>
					</nav>
				</header>

				<section>
					<form method="post" action="registro.php">
						<h1>Ha ocurrido un error vuelte a intentarlo!</h1>
						<a href="registro.html" id="botonVolver">Volver a intentarlo</a>

					</form>
				</section>
			</body>
			<footer>
				<h1>&copyPowered by <strong>RealNews</strong></h1>
				<h3>Todos los derechos reservados</h3>
			</footer>
			</html>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>



