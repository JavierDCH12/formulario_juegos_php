
<?php 
//Developer: Javier Delgado
  //Date: 2023/06/01
  //Location: Caceres, spacing
  //Proyect: Game Register


function filtrar($datos){
	
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	
	return $datos;
	
}

	
 ?>

