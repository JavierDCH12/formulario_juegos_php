<?php


    //Developer: Javier Delgado
  //Date: 2023/06/01
  //Location: Caceres, spacing
  //Proyect: Game Register


        //Aplicamos una operación ternaria para en una sola linea confrontar la condicion de existencia de las variables
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $nombre_juego = isset($_GET["nombre_juego"]) ? filtrar($_GET["nombre_juego"]) : "";
            $año_publicacion = isset($_GET["año_publicacion"]) ? filtrar($_GET["año_publicacion"]) : "";
            $desarrollador = isset($_GET["desarrollador"]) ? filtrar($_GET["desarrollador"]) : "";
            $director = isset($_GET["director"]) ? filtrar($_GET["director"]) : "";
            $distribuidora = isset($_GET["distribuidora"]) ? filtrar($_GET["distribuidora"]) : "";
           
            $pais = isset($_GET["pais"]) ? filtrar($_GET["pais"]) : "";
            $nota = isset($_GET["nota"]) ? filtrar($_GET["nota"]) : "";
            $area = isset($_GET["area"]) ? filtrar($_GET["area"]) : "";
        }

        // Construimos la sentencia INSERT INTO
        $sql = "INSERT INTO juegos (nombre_juego, año_publicacion, desarrollador, director, distribuidora, pais, nota, area) 
        VALUES ('$nombre_juego', '$año_publicacion', '$desarrollador', '$director', '$distribuidora', '$pais', '$nota', '$area')";

        // Ejecutamos la consulta SQL
        if (mysqli_query($conexion, $sql)) {
            echo "Los datos se han insertado correctamente";
        } else {
            echo "Error al insertar datos: " . mysqli_error($conexion);
        }

?>