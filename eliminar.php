<?php


// Obtain the game name
$nombre_juego = isset($_GET["nombre_juego"]) ? filtrar($_GET["nombre_juego"]) : "";

// Verify that a valid game name is provided
if ($nombre_juego !== "") {
    // Construct the SQL query to delete the game by name
    $sql = "DELETE FROM juegos WHERE nombre_juego='$nombre_juego'";

    // Execute the SQL query
    if (mysqli_query($conexion, $sql)) {
        echo "El juego se ha eliminado correctamente";
    } else {
        echo "Error al eliminar el juego: " . mysqli_error($conexion);
    }
} else {
    echo "Nombre de juego no válido";
}
?>