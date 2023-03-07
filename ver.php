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
$query_comentarios = "SELECT * FROM comentarios WHERE empleado_id = $id";
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
                    <form method="POST" action="eliminar_comentario.php">
                        <input type="hidden" name="id_comentario" value="<?php echo $fila_comentario["id"]; ?>">
                        <input type="hidden" name="id_empleado" value="<?php echo $id; ?>">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarComentario<?php echo $fila_comentario["id"]; ?>">
                            Eliminar comentario
                        </button>
                        <div class="modal fade" id="eliminarComentario<?php echo $fila_comentario["id"]; ?>" tabindex="-1" aria-labelledby="eliminarComentario<?php echo $fila_comentario["id"]; ?>Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="eliminarComentario<?php echo $fila_comentario["id"]; ?>Label">¿Está seguro de que desea eliminar el comentario?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Esta acción no se puede deshacer.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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