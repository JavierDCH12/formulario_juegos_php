<?php

  //Developer: Javier Delgado
  //Date: 2023/06/01
  //Location: Caceres, spacing
  //Proyect: Game Register



// Obtenemos el nombre del juego que vmos a borra
$nombre_juego = isset($_GET["nombre_juego"]) ? filtrar($_GET["nombre_juego"]) : "";

// Verificamos si el nombre del juego es diferente a vacio
if ($nombre_juego !== "") {
    // Creamos la sentncia SQL y la ejecutamos
    $sql = "DELETE FROM juegos WHERE nombre_juego='$nombre_juego'";

    if (mysqli_query($conexion, $sql)) {
        echo "El juego se ha eliminado correctamente";
    } else {
        echo "Error al eliminar el juego: " . mysqli_error($conexion);
    }
} else {
    echo "Nombre de juego no válido";
}
?>