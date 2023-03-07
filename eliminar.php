<?php
include('inc/header.php');
include('inc/cfg.php');

// Obtener el ID del empleado de la URL
$id = $_GET["id"];

// Realizar una consulta para obtener los datos actuales del empleado
$query = "SELECT * FROM empleados WHERE id = $id";
$resultado = mysqli_query($conn, $query);
$fila = mysqli_fetch_assoc($resultado);

// Verificar si se ha enviado el formulario para eliminar el empleado
if (isset($_POST["eliminar"])) {
    // Eliminar el empleado de la base de datos
    $query = "DELETE FROM empleados WHERE id = $id";
    mysqli_query($conn, $query);

    // Redirigir al usuario a la página de lista de empleados
    header("Location: index.php");
    exit();
}
?>
<h1>Eliminar empleado</h1>
<p>¿Estás seguro de que quieres eliminar al empleado "<?php echo $fila["nombre"]; ?>"?</p>
<form method="POST" action="">
    <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
</form>

<!-- Script para mostrar una ventana de confirmación al hacer clic en el botón de eliminar -->
<script>
    $(document).ready(function() {
        $('form').submit(function(event) {
            if (!confirm("¿Estás seguro de que quieres eliminar al empleado?")) {
                event.preventDefault();
            }
        });
    });
</script>
<?php
include('inc/footer.php');
?>