<?php
include('inc/cfg.php');
// Mostrar los comentarios para el empleado con id igual a 1
$sql = "SELECT comentarios.comentario, comentarios.fecha_publicacion
        FROM comentarios
        JOIN empleados ON comentarios.id = empleados.id
        WHERE empleados.id = 1";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
    // Mostrar los comentarios en una lista HTML
    echo "<ul>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<li>" . $fila["comentario"] . " - " . $fila["fecha_publicacion"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron comentarios";
}
