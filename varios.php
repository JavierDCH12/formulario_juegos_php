<!--PHP Script added-->
<?php
include "funciones.php";
include "conexion.php";

if (isset($_GET["submit"])) {
    $submit = $_GET["submit"];

    if ($submit === "Enviar") {
        include "enviar.php";
    } elseif ($submit === "Eliminar") {
        include "eliminar.php";
    } elseif ($submit === "Modificar") {
        include "modificar.php";
    } else {
    
        echo "Invalid action";
    }
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Resultados del formulario</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="./estilos_enviar.css" >


<style>
		html, body {
			font-family: Helvetica, sans-serif;
			font-size: 16px;
			margin: 0;
			padding: 0;
			background-color: #000;
			color: #fff;
		}

		.container {
			width: 100%;
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			box-sizing: border-box;
			margin-top:150px;
		}

		h1 {
			font-size: 38px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 20px;
			letter-spacing: 5px;
		}

		p {
			text-align: center;
			margin-top: 25px;
			
		}

		.band-enviar {
			background-color: green;
			color: white;
			padding: 10px;
			text-align: center;
			margin-bottom: 20px;
			cursor: pointer;
			font-size: 20px;
			
		}

		.band-eliminar {
			background-color: red;
			color: white;
			padding: 10px;
			text-align: center;
			margin-bottom: 20px;
			cursor: pointer;
			font-size: 20px;

		}

		.band-modificar {
			background: rgb(255, 140, 0);
			color: white;
			padding: 10px;
			text-align: center;
			margin-bottom: 20px;
			cursor: pointer;
			font-size: 20px;

		}

		a {
			color: white;
			margin-top: 15px;
		}

		a:hover {
			color: yellow;
		}

		span:hover {
			cursor: pointer;
		}

		#comentario {
			font-style: italic;
		}
	</style>


	</style>
	
	
	
</head>
<body>

	<div class="container">

		<?php if ($submit === "Enviar") : ?>
			<div class="band-enviar">Se ha enviado el registro con éxito</div>
		<?php elseif ($submit === "Eliminar") : ?>
			<div class="band-eliminar">Se ha eliminado el registro con éxito</div>
		<?php elseif ($submit === "Modificar") : ?>
			<div class="band-modificar">Se ha modificado el registro con éxito</div>
		<?php endif; ?>
	 
		<p><span>&#128281;</span><a href="formulario.php">Volver al formulario</a></p>
	


	
</body>
</html>