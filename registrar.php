<?php
include('inc/header.php');
include('inc/cfg.php');

// Verificar si se ha enviado el formulario para crear un nuevo empleado
if (isset($_POST["crear"])) {
    // Recoger los datos del formulario
    $identificacion = $_POST["identificacion"];
    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    $puesto = $_POST["puesto"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $induccion = $_POST["induccion"];
    $entrenamiento = $_POST["entrenamiento"];
    $examenes_medicos_ingreso = $_POST["examenes_medicos_ingreso"];
    $sexo = $_POST["sexo"];
    $eps = $_POST["eps"];
    $afp_fondo_pension = $_POST["afp_fondo_pension"];
    $grupo_sanguineo = $_POST["grupo_sanguineo"];
    $estado_civil = $_POST["estado_civil"];
    $composicion_familiar = $_POST["composicion_familiar"];
    $contacto_emergencia = $_POST["contacto_emergencia"];
    $num_telefono_emergencia = $_POST["num_telefono_emergencia"];
    $grado_escolaridad = $_POST["grado_escolaridad"];
    $personas_a_cargo = $_POST["personas_a_cargo"];
    $tipo_vivienda = $_POST["tipo_vivienda"];
    $ciudad_residencia = $_POST["ciudad_residencia"];
    $estrato_socioeconomico = $_POST["estrato_socioeconomico"];
    $ingresos_mensuales = $_POST["ingresos_mensuales"];
    $tiempo_en_la_empresa = $_POST["tiempo_en_la_empresa"];
    $tipo_contrato = $_POST["tipo_contrato"];
    $nivel_riesgo = $_POST["nivel_riesgo"];
    $turno_trabajo = $_POST["turno_trabajo"];
    $diagnosticos_medicos = $_POST["diagnosticos_medicos"];
    $raza = $_POST["raza"];
    $uso_tiempo_libre = $_POST["uso_tiempo_libre"];
    $habitos_nocivos = $_POST["habitos_nocivos"];
    $sintomas_jornada_laboral = $_POST["sintomas_jornada_laboral"];
    $alteraciones_presentes = $_POST["alteraciones_presentes"];
    $rasgos_caracteristicos = $_POST["rasgos_caracteristicos"];
    $fecha_retiro = $_POST["fecha_retiro"];
    $motivo_retiro = $_POST["motivo_retiro"];
    $fecha_ingreso = $_POST["fecha_ingreso"];

    // Insertar los datos del nuevo empleado en la base de datos
    $query = "INSERT INTO empleados (identificacion, apellido, nombre, puesto, fecha_nacimiento, induccion, entrenamiento, examenes_medicos_ingreso, sexo, eps, afp_fondo_pension, grupo_sanguineo, estado_civil, composicion_familiar, contacto_emergencia, num_telefono_emergencia, grado_escolaridad, personas_a_cargo, tipo_vivienda, ciudad_residencia, estrato_socioeconomico, ingresos_mensuales, tiempo_en_la_empresa, tipo_contrato, nivel_riesgo, turno_trabajo, diagnosticos_medicos, raza, uso_tiempo_libre, habitos_nocivos, sintomas_jornada_laboral, alteraciones_presentes, rasgos_caracteristicos, fecha_retiro, motivo_retiro, fecha_ingreso) VALUES ('$identificacion', '$apellido', '$nombre', '$puesto', '$fecha_nacimiento', '$induccion', '$entrenamiento', '$examenes_medicos_ingreso', '$sexo', '$eps', '$afp_fondo_pension', '$grupo_sanguineo', '$estado_civil', '$composicion_familiar', '$contacto_emergencia', '$num_telefono_emergencia', '$grado_escolaridad', '$personas_a_cargo', '$tipo_vivienda', '$ciudad_residencia', '$estrato_socioeconomico', '$ingresos_mensuales', '$tiempo_en_la_empresa', '$tipo_contrato', '$nivel_riesgo', '$turno_trabajo', '$diagnosticos_medicos', '$raza', '$uso_tiempo_libre', '$habitos_nocivos', '$sintomas_jornada_laboral', '$alteraciones_presentes', '$rasgos_caracteristicos', '$fecha_retiro', '$motivo_retiro', '$fecha_ingreso')";
    $result = mysqli_query($conexion, $query);

    // Comprobar si se ha insertado correctamente el empleado
    if ($result) {
        echo "<p>El empleado ha sido creado exitosamente.</p>";
    } else {
        echo "<p>Ha ocurrido un error al crear el empleado. Por favor, inténtelo de nuevo.</p>";
    }
}
?>

<div class="container">
    <h1>Crear nuevo empleado</h1>
    <form method="post">
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="puesto">Puesto:</label>
            <input type="text" class="form-control" id="puesto" name="puesto">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        <div class="form-group">
            <label for="induccion">Fecha de inducción:</label>
            <input type="date" class="form-control" id="induccion" name="induccion">
        </div>
        <div class="form-group">
            <label for="entrenamiento">Fecha de entrenamiento:</label>
            <input type="date" class="form-control" id="entrenamiento" name="entrenamiento">
        </div>
        <div class="form-group">
            <label for="examenes_medicos_ingreso">Fecha de exámenes médicos de ingreso:</label>
            <input type="date" class="form-control" id="examenes_medicos_ingreso" name="examenes_medicos_ingreso">
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select class="form-control" id="sexo" name="sexo">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="afp">EPS:</label>
            <select class="form-control" id="eps" name="eps">
                <option value="">Seleccione una EPS</option>
                <option value="Aliansalud">Aliansalud</option>
                <option value="Cafam EPS">Cafam EPS</option>
                <option value="Capital Salud EPS">Capital Salud EPS</option>
                <option value="Capresoca">Capresoca</option>
                <option value="Colsubsidio">Colsubsidio</option>
                <option value="COMFANDI">COMFANDI</option>
                <option value="Compensar">Compensar</option>
                <option value="Coomeva">Coomeva</option>
                <option value="Coosalud">Coosalud</option>
                <option value="EPS Sanitas">EPS Sanitas</option>
                <option value="EPS Sura">EPS Sura</option>
                <option value="Famisanar">Famisanar</option>
                <option value="Medimás">Medimás</option>
                <option value="Mutual SER">Mutual SER</option>
                <option value="Nueva EPS">Nueva EPS</option>
                <option value="Salud Total">Salud Total</option>
                <option value="1Savia Salud EPS">1Savia Salud EPS</option>
                <option value="SISBEN IV">SISBEN IV</option>
            </select>
        </div>

        <div class="form-group">
            <label for="afp">AFP o fondo de pensión:</label>
            <select class="form-control" id="afp" name="afp">
                <option value="">Seleccione el AFP o fondo de pensión</option>
                <option value="Skandia">Skandia</option>
                <option value="Porvenir">Porvenir</option>
                <option value="Colfondos">Colfondos</option>
                <option value="Protección">Protección</option>
                <option value="Fiduciaria Alianza">Fiduciaria Alianza</option>
                <option value="Fiduciaria Corficolombiana">Fiduciaria Corficolombiana</option>
                <option value="Fiduciaria Bancolombia">Fiduciaria Bancolombia</option>
                <option value="Servitrust GNB">Servitrust GNB</option>
                <option value="Colpensiones">Colpensiones</option>
                <option value="Davivienda Corredores">Davivienda Corredores</option>
                <option value="Fiduciaria Davivienda">Fiduciaria Davivienda</option>
                <option value="Fiduciaria Acción">Fiduciaria Acción</option>
                <option value="Fiduciaria Occidente">Fiduciaria Occidente</option>
                <option value="Fiduciaria Itaú">Fiduciaria Itaú</option>
                <option value="Fiduciaria BBVA">Fiduciaria BBVA</option>
                <option value="Fiduciaria Popular">Fiduciaria Popular</option>
                <option value="Old Mutual Pensiones y Cesantías S.A">Old Mutual Pensiones y Cesantías S.A</option>
            </select>
        </div>

        <div class="form-group">
            <label for="grupo_sanguineo">Grupo sanguíneo:</label>
            <select class="form-control" id="grupo_sanguineo" name="grupo_sanguineo">
                <option value="">Seleccione un grupo sanguíneo</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>

        <div class="form-group">
            <label for="estado_civil">Estado civil:</label>
            <select class="form-control" id="estado_civil" name="estado_civil">
                <option value="">Seleccione el estado civil</option>
                <option value="soltero">Soltero/a</option>
                <option value="casado">Casado/a</option>
                <option value="viudo">Viudo/a</option>
                <option value="divorciado">Divorciado/a</option>
                <option value="union_libre">Unión libre</option>
            </select>
        </div>
        <div class="form-group">
            <label for="composicion_familiar">Composición familiar:</label>
            <input type="text" class="form-control" id="composicion_familiar" name="composicion_familiar">
        </div>
        <div class="form-group">
            <label for="rasgos_caracteristicos">Rasgos característicos:</label>
            <input type="text" class="form-control" id="rasgos_caracteristicos" name="rasgos_caracteristicos">
        </div>
        <div class="form-group">
            <label for="fecha_ingreso">Fecha de ingreso:</label>
            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso">
        </div>
        <button type="submit" class="btn btn-primary" name="crear">Crear empleado</button>
    </form>
</div>
<?php
include('inc/footer.php');
?>