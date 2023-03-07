<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empleados";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si la conexión ha fallado
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
