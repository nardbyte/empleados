<?php
include('inc/header.php');
include('inc/cfg.php');

// Verificar si se ha enviado el formulario para crear un nuevo empleado
if (isset($_POST["crear"])) {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $identificacion = $_POST["identificacion"];
    $puesto = $_POST["puesto"];
    $fecha_ingreso = $_POST["fecha_ingreso"];

    // Insertar los datos del nuevo empleado en la base de datos
    $query = "INSERT INTO empleados (nombre, identificacion, puesto, fecha_ingreso) VALUES ('$nombre', '$identificacion', '$puesto', '$fecha_ingreso')";
    mysqli_query($conn, $query);

    // Redirigir al usuario a la página de lista de empleados
    header("Location: index.php");
    exit();
}
?>

<h1>Crear nuevo empleado</h1>
<form class="row g-3" method="POST" action="">
    <div class="col-auto mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" name="nombre" class="form-control">
    </div>
    <div class="col-auto mb-3">
        <label for="identificacion" class="form-label">Identificación:</label>
        <input type="text" name="identificacion" class="form-control">
    </div>
    <div class="col-auto mb-3">
        <label for="puesto" class="form-label">Puesto:</label>
        <input type="text" name="puesto" class="form-control">
    </div>
    <div class="col-auto mb-3">
        <label for="fecha_ingreso" class="form-label">Fecha de ingreso:</label>
        <input type="date" name="fecha_ingreso" class="form-control">
    </div>
    <div class="col-auto mt-5">
        <button type="submit" name="crear" class="btn btn-primary">Crear</button>
    </div>
</form>

<?php
include('inc/footer.php');
?>