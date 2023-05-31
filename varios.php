<!--PHP Script added-->
<?php
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
        echo "Acción inválida";
    }
}
?>