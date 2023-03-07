<?php
include('inc/header.php');
include('inc/cfg.php');

// Obtener el ID del empleado de la URL
$id = $_GET["id"];

// Realizar una consulta para obtener los datos actuales del empleado
$query = "SELECT * FROM empleados WHERE id = $id";
$resultado = mysqli_query($conn, $query);
$fila = mysqli_fetch_assoc($resultado);

// Verificar si se ha enviado el formulario para actualizar los datos
if (isset($_POST["actualizar"])) {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $identificacion = $_POST["identificacion"];
    $puesto = $_POST["puesto"];
    $fecha_ingreso = $_POST["fecha_ingreso"];

    // Actualizar los datos del empleado en la base de datos
    $query = "UPDATE empleados SET nombre = '$nombre', identificacion = '$identificacion', puesto = '$puesto', fecha_ingreso = '$fecha_ingreso' WHERE id = $id";
    mysqli_query($conn, $query);

    // Redirigir al usuario a la página de lista de empleados
    header("Location: index.php");
    exit();
}
?>
<main class="container">
    <h1>Editar empleado</h1>
    <form class="row g-3" method="POST" action="">
        <div class="col-auto mb-3">
            <label for="identificacion" class="form-label">Identificación:</label>
            <input type="text" name="identificacion" value="<?php echo $fila["identificacion"]; ?>" class="form-control">
        </div>
        <div class="col-auto mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $fila["nombre"]; ?>" class="form-control">
        </div>
        <div class="col-auto mb-3">
            <label for="puesto" class="form-label">Puesto:</label>
            <input type="text" name="puesto" value="<?php echo $fila["puesto"]; ?>" class="form-control">
        </div>
        <div class="col-auto mb-3">
            <label for="fecha_ingreso" class="form-label">Fecha de ingreso:</label>
            <input type="date" name="fecha_ingreso" value="<?php echo $fila["fecha_ingreso"]; ?>" class="form-control">
        </div>
        <div class="col-auto mt-5">
            <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</main>

<?php
include('inc/footer.php');
?>