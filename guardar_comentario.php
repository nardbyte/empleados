<?php
include('inc/cfg.php');

// Obtener el ID del empleado al que se le agregará el comentario
$id_empleado = $_POST["id_empleado"];

// Recoger el comentario del formulario
$comentario = $_POST["comentario"];

// Insertar el comentario en la base de datos
$query = "INSERT INTO comentarios (id_empleado, comentario) VALUES ('$id_empleado', '$comentario')";
mysqli_query($conn, $query);

// Redirigir al usuario a la página del empleado
header("Location: ver.php?id=$id_empleado");
exit();
