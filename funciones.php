
<?php 
 


function filtrar($datos){
	
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	
	return $datos;
	
}

	
 ?>

