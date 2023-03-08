<?php

include('inc/header.php');
include('inc/cfg.php');
// Mostrar los registros de la tabla empleados
$sql = "SELECT * FROM empleados";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
    // Mostrar los registros en una tabla HTML
    echo '<table class="table text-center align-middle">
            <thead>
                <tr>
                <th scope="col">Identificación</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Puesto</th>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>';
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr scope=\"row\">";
        echo "<td>" . $fila["identificacion"] . "</td>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>" . $fila["apellido"] . "</td>";
        echo "<td>" . $fila["puesto"] . "</td>";
        echo "<td>" . $fila["fecha_ingreso"] . "</td>";
        echo "<td>";
        echo "<a href=\"ver.php?id=" . $fila["id"] . "\" class=\"btn btn-success me-1\"><i class=\"bi bi-journal-text\"></i></a>";
        echo "<a href=\"editar.php?id=" . $fila["id"] . "\" class=\"btn btn-primary me-1\"><i class=\"bi bi-pencil-fill\"></i></a>";
        echo "<a href=\"eliminar.php?id=" . $fila["id"] . "\" class=\"btn btn-danger\"><i class=\"bi bi-trash-fill\"></i></a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No se encontraron registros";
}
include('inc/footer.php');
