<!--PHP Script added-->
<?php
include "funciones.php";
include "conexion.php";


if (isset($_GET["submit"])) { 
    $submit = $_GET["submit"];


	//HACEMOS LA INSERCION


    if ($submit === "enviar") {
		
        //Aplicamos una operación ternaria para en una sola linea confrontar la condicion de existencia de las variables
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $nombre_juego = isset($_GET["nombre_juego"]) ? filtrar($_GET["nombre_juego"]) : "";
            $año_publicacion = isset($_GET["año_publicacion"]) ? filtrar($_GET["año_publicacion"]) : "";
            $desarrollador = isset($_GET["desarrollador"]) ? filtrar($_GET["desarrollador"]) : "";
            $director = isset($_GET["director"]) ? filtrar($_GET["director"]) : "";
            $distribuidora = isset($_GET["distribuidora"]) ? filtrar($_GET["distribuidora"]) : "";
            $guionista = isset($_GET["guionista"]) ? filtrar($_GET["guionista"]) : "";
            $pais = isset($_GET["pais"]) ? filtrar($_GET["pais"]) : "";
            $nota = isset($_GET["nota"]) ? filtrar($_GET["nota"]) : "";
            $area = isset($_GET["area"]) ? filtrar($_GET["area"]) : "";
        }

        // Construimos la sentencia INSERT INTO
        $sql = "INSERT INTO juegos (nombre_juego, año_publicacion, desarrollador, director, distribuidora, guionista, pais, nota, area) 
        VALUES ('$nombre_juego', '$año_publicacion', '$desarrollador', '$director', '$distribuidora', '$guionista', '$pais', '$nota', '$area')";

        // Ejecutamos la consulta SQL
        if (mysqli_query($conexion, $sql)) {
            echo "Los datos se han insertado correctamente";
        } else {
            echo "Error al insertar datos: " . mysqli_error($conexion);
        }

      
        mysqli_close($conexion);


//HACEMOS LA ELIMINACION


    } elseif ($submit === "eliminar") {
        
        include "conexion.php";

        // Obtenemos el nombre del juego a eliminar
        $nombre_juego = isset($_GET["nombre_juego"]) ? filtrar($_GET["nombre_juego"]) : "";

        // Verificamos que se haya proporcionado un nombre de juego válido
        if ($nombre_juego !== "") {
            // Construimos la consulta SQL para eliminar el juego por nombre
            $sql = "DELETE FROM juegos WHERE nombre_juego='$nombre_juego'";

            // Ejecutamos la consulta SQL
            if (mysqli_query($conexion, $sql)) {
                echo "El juego se ha eliminado correctamente";
            } else {
                echo "Error al eliminar el juego: " . mysqli_error($conexion);
            }
        } else {
            echo "Nombre de juego no válido";
        }

        mysqli_close($conexion);


	//HACEMOS LA MODIFICACION

    } elseif ($submit === "modificar") {
        include "conexion.php";

        // Obtenemos el nombre del juego y la nueva nota a actualizar
        $nombre_juego = isset($_GET["nombre_juego"]) ? filtrar($_GET["nombre_juego"]) : "";
        $nota = isset($_GET["nota"]) ? filtrar($_GET["nota"]) : "";

        // Verificamos que se haya proporcionado un nombre de juego válido y una nueva nota
        if ($nombre_juego !== "" && $nota !== "") {
            // Construimos la consulta SQL para actualizar la nota del juego por nombre
            $sql = "UPDATE juegos SET nota = '$nota' WHERE nombre_juego='$nombre_juego'";

            // Ejecutamos la consulta SQL
            if (mysqli_query($conexion, $sql)) {
                echo "La nota del juego se ha actualizado correctamente";
            } else {
                echo "Error al actualizar la nota del juego: " . mysqli_error($conexion);
            }
        } else {
            echo "Nombre de juego o nota no válidos";
        }

        // Cerrar la conexión
        mysqli_close($conexion);
    } else {
        // Code for handling an unknown action
        echo "Unknown button clicked";
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

		<?php if ($submit === "enviar") : ?>
			<div class="band-enviar">Se ha enviado el registro con éxito</div>
		<?php elseif ($submit === "eliminar") : ?>
			<div class="band-eliminar">Se ha eliminado el registro con éxito</div>
		<?php elseif ($submit === "modificar") : ?>
			<div class="band-modificar">Se ha modificado el registro con éxito</div>
		<?php endif; ?>
	 
		<p><span>&#128281;</span><a href="formulario.php">Volver al formulario</a></p>
	


	
</body>
</html>