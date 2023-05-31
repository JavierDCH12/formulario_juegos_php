<?php
// Hacemos la conexión con la base de datos 'registro_de_juegos'
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'registro_de_juegos';
$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosaaaa \t";

// Verificar si se hizo clic en el botón "Buscar"
if (isset($_GET["busqueda"]) && $_GET["busqueda"] === "Buscar") {
    $nombre_juego = isset($_GET["nombre_juego"]) ? $_GET["nombre_juego"] : "";

    // Escapar caracteres especiales para evitar inyección SQL
    $nombre_juego = mysqli_real_escape_string($conexion, $nombre_juego);

    $sql = "SELECT * FROM juegos WHERE nombre_juego='$nombre_juego' ";
    $result = mysqli_query($conexion, $sql);

    if (!$result) {
        echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
    } else {
        // Mostrar los resultados en la tabla
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Info del juego buscado</title>
            <meta charset="utf-8" />

            <style>
                body {
                    background: rgb(2, 0, 36);
                    background: linear-gradient(
                        90deg,
                        rgba(2, 0, 36, 1) 9%,
                        rgba(75, 75, 75, 1) 85%,
                        rgba(107, 107, 107, 1) 96%
                    );
                    color: #333;
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }

                table {
                    width: 90%;
                    border-collapse: collapse;
                    margin: 0 auto;
                    margin-top: 150px;
                }
                th,
                td {
                    padding: 10px;
                    border: 1px solid #000000;
                    text-align: left;
                    color: white;
                    text-align: center;
                    font-size: 18px;
                }

                th {
                    background-color: #333;
                    color: white;
                }

                tr {
                    background-color: #333;
                }

                span {
                    margin: 0 auto;
                    margin-left: 150px;
                }
                a {
                    color: white;
                }
                a:hover {
                    color: rgb(230, 212, 8);
                }
                footer {
                    bottom: 0;
                    text-align: center;
                    color: #fff;
                    padding: 10px;
                    background: linear-gradient(
                        90deg,
                        rgba(2, 0, 36, 1) 9%,
                        rgba(75, 75, 75, 1) 85%,
                        rgba(107, 107, 107, 1) 96%
                    );
                    margin-top: 25px;
                }
            </style>
        </head>
        <body>
            <table>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <th>Nombre del juego</th>
                        <td><?php echo $row['nombre_juego']; ?></td>
                    </tr>
                    <tr>
                        <th>Año de publicación</th>
                        <td><?php echo $row['año_publicacion']; ?></td>
                    </tr>
                    <tr>
                        <th>Desarrollador</th>
                        <td><?php echo $row['desarrollador']; ?></td>
                    </tr>
                    <tr>
                        <th>Director</th>
                        <td><?php echo $row['director']; ?></td>
                    </tr>
                    <tr>
                        <th>Distribuidora</th>
                        <td><?php echo $row['distribuidora']; ?></td>
                    </tr>
                    <tr>
                        <th>País</th>
                        <td><?php echo $row['pais']; ?></td>
                    </tr>
                    <tr>
                        <th>Nota</th>
                        <td><?php echo $row['nota']; ?></td>
                    </tr>
                    <tr>
                        <th>Área</th>
                        <td><?php echo $row['area']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>

            <p>
                <span>&#128281;</span
                ><a title="Haz clic para volver al formulario" href="formulario.php">Volver al formulario</a>
            </p>

            <footer>
                <a
                    title="Github Page"
                    href="https://github.com/JavierDCH12"
                    target="_blank"
                    >Javier Delgado Chacón</a
                >
                &copy;
                <a
                    title="Github repository"
                    target="_blank"
                    href="https://github.com/JavierDCH12/formulario_juegos_php/tree/master"
                    >Game Register 2023</a
                >
            </footer>
        </body>
        </html>
        <?php
    }
    mysqli_close($conexion);
}
?>