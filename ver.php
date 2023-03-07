<?php
include('inc/header.php');
include('inc/cfg.php');

// Obtener el ID del empleado de la URL
$id = $_GET["id"];

// Realizar una consulta para obtener los datos del empleado
$query = "SELECT * FROM empleados WHERE id = $id";
$resultado = mysqli_query($conn, $query);
$fila = mysqli_fetch_assoc($resultado);

// Realizar una consulta para obtener los comentarios del empleado
$query_comentarios = "SELECT * FROM comentarios WHERE id = $id";
$resultado_comentarios = mysqli_query($conn, $query_comentarios);

?>
<div class="row">
    <div class="col-md-6">
        <h1>Información del empleado</h1>
        <p><strong>Nombre:</strong> <?php echo $fila["nombre"]; ?></p>
        <p><strong>Identificación:</strong> <?php echo $fila["identificacion"]; ?></p>
        <p><strong>Puesto:</strong> <?php echo $fila["puesto"]; ?></p>
        <p><strong>Fecha de ingreso:</strong> <?php echo $fila["fecha_ingreso"]; ?></p>
    </div>
    <div class="col-md-6">
        <h1>Comentarios</h1>
        <?php while ($fila_comentario = mysqli_fetch_assoc($resultado_comentarios)) { ?>
            <div class="card mb-3">
                <div class="card-body">
                    <p><?php echo $fila_comentario["comentario"]; ?></p>
                    <small><?php echo $fila_comentario["fecha_publicacion"]; ?></small>
                </div>
            </div>
        <?php } ?>

        <h2>Agregar comentario</h2>
        <form method="POST" action="guardar_comentario.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario:</label>
                <textarea class="form-control" name="comentario" id="comentario" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar comentario</button>
        </form>
    </div>
</div>

<?php
include('inc/footer.php');
?>