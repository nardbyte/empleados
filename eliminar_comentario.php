<?php
include('inc/cfg.php');

// Obtener el ID del comentario y del empleado de los datos enviados por el formulario
$id_comentario = $_POST["id_comentario"];
$id_empleado = $_POST["id_empleado"];

// Eliminar el comentario de la base de datos
$query = "DELETE FROM comentarios WHERE id = $id_comentario";
mysqli_query($conn, $query);

// Redirigir al usuario a la página del empleado
header("Location: ver.php?id=$id_empleado");
exit();
