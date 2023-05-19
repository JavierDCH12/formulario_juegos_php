
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
echo "Conexión exitosa \t";
?>