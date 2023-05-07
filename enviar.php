<!--PHP Script added-->

<?php


include "funciones.php";


//Hacemos la conexion con la Base de Datos 'juegos'
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'registro_de_juegos';

$conexion = mysqli_connect($servername, $username, $password, $dbname);



if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";




/*if($_SERVER["REQUEST_METHOD"] == "GET"){
    $nombre_juego = $_GET["nombre_juego"];
    $año_publicacion = $_GET["año_publicacion"];
    $desarrollador = $_GET["desarrollador"];
    $director = $_GET["director"];
    $distribuidora = $_GET["distribuidora"];
    $guionista = $_GET['guionista'];
    $pais = $_GET['pais'];
    $nota = $_GET['nota'];
    $area = $_GET['area'];
}*/


if($_SERVER["REQUEST_METHOD"] == "GET"){
    $nombre_juego = isset($_GET["nombre_juego"]) ? $_GET["nombre_juego"] : "";
    $año_publicacion = isset($_GET["año_publicacion"]) ? $_GET["año_publicacion"] : "";
    $desarrollador = isset($_GET["desarrollador"]) ? $_GET["desarrollador"] : "";
    $director = isset($_GET["director"]) ? $_GET["director"] : "";
    $distribuidora = isset($_GET["distribuidora"]) ? $_GET["distribuidora"] : "";
    $guionista = isset($_GET['guionista']) ? $_GET['guionista'] : "";
    $pais = isset($_GET['pais']) ? $_GET['pais'] : "";
    $nota = isset($_GET['nota']) ? $_GET['nota'] : "";
    $area = isset($_GET['area']) ? $_GET['area'] : "";
}


if(isset($_GET['enviar']) && $_SERVER["REQUEST_METHOD"] == "GET"){
	$nombre_juego = filtrar($_GET["nombre_juego"]);
	$año_publicacion = filtrar($_GET["año_publicacion"]);
	$desarrollador = filtrar($_GET["desarrollador"]);
	$director = filtrar($_GET["director"]);
	$distribuidora = filtrar($_GET["distribuidora"]);
	$guionista = filtrar($_GET["guionista"]);
	$pais = filtrar($_GET["pais"]);
	$nota = filtrar($_GET["nota"]);
	$area = filtrar($_GET["area"]);
}




$sql = " INSERT INTO juegos (nombre_juego, año_publicacion, desarrollador, director, distribuidora, guionista, pais, nota, area) 
VALUES ('$nombre_juego', '$año_publicacion', '$desarrollador', '$director', '$distribuidora', '$guionista', '$pais', '$nota', '$area')";


if (mysqli_query($conexion, $sql)) {
  echo "Los datos se han insertado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

if(isset($_GET["enviar"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
    if(empty($_GET["nombre_juego"])){
        $lista_errores[] = "El nombre del juego es obligatorio";
    }
	if(empty($_GET["año_publicacion"])){
        $lista_errores[] = "El año de publicación es obligatorio";
    }
	if(empty($_GET["desarrollador"])){
        $lista_errores[] = "El nombre del desarrollador es obligatorio";
    }
	if(empty($_GET["director"])){
        $lista_errores[] = "El nombre del director es obligatorio";
    }
	if(empty($_GET["distribuidora"])){
        $lista_errores[] = "El nombre de la distribuidora obligatorio";
    }
	if(empty($_GET["guionista"])){
        $lista_errores[] = "El nombre del guionista es obligatorio";
    }
	if(empty($_GET["pais"])){
        $lista_errores[] = "El pais es obligatorio";
    }
	if(empty($_GET["nota"])){
        $lista_errores[] = "La nota es obligatoria";
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
            background: rgb(2,0,36);
			background: linear-gradient(90deg, rgba(2,0,36,1) 17%, rgb(1, 7, 8) 50%, rgba(0,0,0,1) 85%);
			color:white;
			height:100%;

			
		}
		.container {
			width: 100%;
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			box-sizing: border-box;
		}
		h1 {
			font-size: 38px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 20px;
			letter-spacing:5px;
		}
		
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background: linear-gradient(90deg, rgba(2,0,36,1) 3%, rgba(144, 201, 212) 100%, rgba(9,9,121,1) 88%);
}
		th, td {
			padding: 10px;
			border: 1px solid #ddd;
			text-align: left;
			vertical-align: top;
			font-weight: bold;
			font-size:20px;
			padding-left: 26px;
			text-align:center;
		}
		
		td{
			font-size:18px;
			text-align:center;
		}
		
		a{
			color:white;
			margin-top:15px;
		}

		a:hover{
			color:yellow;
			
		}
		span:hover{
			cursor:pointer;

		}
		footer{
    background-color: rgba(204, 204, 204, 0.7);
    text-align:center;
    color:#555;
    margin-bottom:10px;
    height:30px;
    padding-top:10px;
    font-weight:bold;
    
  }
  
  #comentario{
	  font-style:italic;
  }
	</style>
	
</head>
<body>
	  <!--Sacamos las variables de php de cada dato del formulario en una tabla-->

	<div class="container">
		<h1>Registro: <?php echo $nombre_juego;?></h1>
		<table>
			<tr>
				<th>Nombre del juego</th>
				<td><?php echo $nombre_juego; ?></td>
			</tr>
			<tr>
				<th>Año de publicación</th>
				<td><?php echo $año_publicacion; ?></td>
			</tr>
			<tr>
				<th>Desarrollador</th>
				<td><?php echo $desarrollador; ?></td>
			</tr>
			<tr>
				<th>Director</th>
				<td><?php echo $director; ?></td>
			</tr>
			<tr>
				<th>Distribuidora</th>
				<td><?php echo $distribuidora; ?></td>
			</tr>
			<tr>
				<th>Guionista</th>
				<td><?php echo $guionista; ?></td>
			</tr>
			<tr>
				<th>País</th>
				<td><?php echo $pais; ?></td>
			</tr>
			<tr>
				<th>Nota que le has dado al juego</th>
				<td><?php echo $nota; ?>/10</td>
			</tr>
			<tr>
				<th>Comentarios: </th>
				<td id="comentario"><?php echo $area; ?></td>
			</tr>
		</table>
		<p><span>&#128281;</span><a href="formulario_ejercicio.php">Volver al formulario</a></p>
	

	
	
	</div>

	
</body>
</html>