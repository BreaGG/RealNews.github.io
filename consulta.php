<?php 


$conex = mysqli_connect("164.90.231.254","root","","realnews"); 


if ($conex) {
	$consulta = "SELECT cTitular, cNoticia FROM tnoticia;";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $titular = $row['cTitular'];
	    $noticia = $row['cNoticia'];
	    ?>
        <div>
        	<h2><?php echo $titular; ?></h2>
        	<div>
        		<p><?php echo $noticia; ?></p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>