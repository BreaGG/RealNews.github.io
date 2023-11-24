<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real News</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/estilos.css">
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
    <div class="presentacion">
        <div id="botones">
            <ul>
                <li><a href="index_actualidad.php">Actualidad</a></li>
                <li><a href="index_deportes.php">Deportes</a></li>
                <li><a href="index_cultura.php">Cultura</a></li>
                <li><a href="index_trafico.php">Tráfico</a></li>
                <li><a href="index_tiempo.php">Tiempo</a></li>
            </ul>
        </div>
        <div class="textos">
            <h1>¡Bienvenido a RealNews Galicia, la red social de noticias reales!</h1>
            <br>
            <p>
            RealNews Galicia es una plataforma en línea que ofrece noticias locales y de interés social y ambiental para la comunidad de Galicia. Cualquier persona puede compartir sus noticias, fotos y videos en la plataforma, y el equipo editorial revisa cuidadosamente todo antes de publicarlo. RealNews Galicia es más que una red social de noticias, es una comunidad en línea en la que los usuarios pueden conectarse y compartir sus opiniones e intereses. La plataforma ofrece una alternativa fresca y emocionante a las noticias convencionales y anima a los usuarios a unirse a su comunidad y compartir sus noticias.
            </p>
        </div>
    </div>
    <?php 


    $conex = mysqli_connect(""); 


    if ($conex) {
        $consulta = "SELECT nID, cTitular, cEntradilla, cAutor FROM tnoticia WHERE cGenero = 'Actualidad' ORDER BY nID DESC;";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
            $titular = $row['cTitular'];
            $entradilla = $row['cEntradilla'];
            $autor = $row['cAutor'];
            $id = $row['nID'];
            $url =  'index_seleccion.php?id='.$id
            ?>
            <div id="noticias">
                <div class="noticia">
                    <h1><?php echo $titular; ?></h1>
                    <p><?php echo $entradilla; ?></p>
                    <h4><?php echo $autor; ?></h4>
                    <div class="verMas"><a href=<?php echo $url ?>>Ver más</a></div>    
                </div>
            </div>    
            <?php
            }
        }
    }
    ?>
    <footer>
        <h1>&copyPowered by <strong>RealNews</strong></h1>
        <h3>Todos los derechos reservados</h3>
    </footer>
</body>
</html>
