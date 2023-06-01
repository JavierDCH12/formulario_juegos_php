<?php


    //Developer: Javier Delgado
    //Date: 2023/06/01
   //Location: Caceres, spacing
   //Proyect: Game Register



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


?>