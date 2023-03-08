-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2023 a las 20:17:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(6) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(6) UNSIGNED NOT NULL,
  `empleado_id` int(6) UNSIGNED NOT NULL,
  `comentario` text NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(6) UNSIGNED NOT NULL,
  `identificacion` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `induccion` date DEFAULT NULL,
  `entrenamiento` date DEFAULT NULL,
  `examenes_medicos_ingreso` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `eps` varchar(50) DEFAULT NULL,
  `afp_fondo_pension` varchar(50) DEFAULT NULL,
  `grupo_sanguineo` varchar(10) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `composicion_familiar` varchar(100) DEFAULT NULL,
  `contacto_emergencia` varchar(100) DEFAULT NULL,
  `num_telefono_emergencia` varchar(20) DEFAULT NULL,
  `grado_escolaridad` varchar(50) DEFAULT NULL,
  `personas_a_cargo` int(3) DEFAULT NULL,
  `tipo_vivienda` varchar(20) DEFAULT NULL,
  `ciudad_residencia` varchar(50) DEFAULT NULL,
  `estrato_socioeconomico` int(2) DEFAULT NULL,
  `ingresos_mensuales` decimal(10,2) DEFAULT NULL,
  `tiempo_en_la_empresa` int(3) DEFAULT NULL,
  `tipo_contrato` varchar(20) DEFAULT NULL,
  `nivel_riesgo` varchar(20) DEFAULT NULL,
  `turno_trabajo` varchar(20) DEFAULT NULL,
  `diagnosticos_medicos` varchar(500) DEFAULT NULL,
  `raza` varchar(20) DEFAULT NULL,
  `uso_tiempo_libre` varchar(100) DEFAULT NULL,
  `habitos_nocivos` varchar(100) DEFAULT NULL,
  `sintomas_jornada_laboral` varchar(500) DEFAULT NULL,
  `alteraciones_presentes` varchar(500) DEFAULT NULL,
  `rasgos_caracteristicos` varchar(500) DEFAULT NULL,
  `fecha_retiro` date DEFAULT NULL,
  `motivo_retiro` varchar(100) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `identificacion`, `apellido`, `nombre`, `puesto`, `fecha_nacimiento`, `induccion`, `entrenamiento`, `examenes_medicos_ingreso`, `sexo`, `eps`, `afp_fondo_pension`, `grupo_sanguineo`, `estado_civil`, `composicion_familiar`, `contacto_emergencia`, `num_telefono_emergencia`, `grado_escolaridad`, `personas_a_cargo`, `tipo_vivienda`, `ciudad_residencia`, `estrato_socioeconomico`, `ingresos_mensuales`, `tiempo_en_la_empresa`, `tipo_contrato`, `nivel_riesgo`, `turno_trabajo`, `diagnosticos_medicos`, `raza`, `uso_tiempo_libre`, `habitos_nocivos`, `sintomas_jornada_laboral`, `alteraciones_presentes`, `rasgos_caracteristicos`, `fecha_retiro`, `motivo_retiro`, `fecha_ingreso`, `fecha_registro`) VALUES
(6, '12345', 'Pérez', 'Juan', 'Administrador', '1980-05-15', '2022-01-01', '2022-01-15', '2022-01-20', 'Masculino', 'Salud Total', 'Porvenir', 'O+', 'Casado', 'Esposa e hijos', 'Ana Rodríguez', '3214567890', 'Universitario', 2, 'Casa propia', 'Bogotá', 3, '5000000.00', 2, 'Termino indefinido', 'Bajo', 'Diurno', 'Ninguno', 'Mestizo', 'Leer y ver películas', 'Fumar', 'Dolor de cabeza', 'Ninguna', 'Amable y responsable', NULL, NULL, '2022-01-01', '2023-03-08 16:41:49'),
(7, '54321', 'Gómez', 'María', 'Asistente', '1995-10-10', '2022-02-01', '2022-02-15', '2022-02-20', 'Femenino', 'Coomeva', 'Colpensiones', 'B+', 'Soltera', 'Padres', 'Carlos Gómez', '3217894560', 'Técnico', 0, 'Arriendo', 'Cali', 2, '2000000.00', 1, 'Termino fijo', 'Medio', 'Nocturno', 'Ninguno', 'Blanca', 'Viajar y hacer deporte', 'Beber alcohol', 'Fatiga', 'Ninguna', 'Responsable y puntual', NULL, NULL, '2022-02-01', '2023-03-08 16:41:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) UNSIGNED NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleado_id` (`empleado_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`empleado_id`) REFERENCES `empleados` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
