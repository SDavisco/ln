-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-11-2020 a las 11:47:54
-- Versión del servidor: 5.6.41-84.1
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `davisco_ln`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `user_cod` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  `user_type` int(1) NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `user_pass` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`user_cod`, `user_type`, `user_name`, `user_pass`) VALUES
('admin', 1, 'Administrador', 'pass123'),
('admin2', 2, 'alumno', 'alumno123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_al` int(11) NOT NULL,
  `id_usuario` int(1) NOT NULL DEFAULT '1',
  `dni` int(7) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  `semestre_academico` varchar(3) NOT NULL,
  `semestre_lectivo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_al`, `id_usuario`, `dni`, `nombre`, `apellido`, `correo`, `carrera`, `semestre_academico`, `semestre_lectivo`) VALUES
(1, 1, 73141288, 'CRHISTOPHER', 'CHAVEZ', 'chamed16@gmail.com', 'COMPUTACION E INFORMATICA', 'I', '2020-I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(10) NOT NULL,
  `nomb_carrera` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nomb_carrera`) VALUES
(1, 'COMPUTACION E INFORMATICA'),
(2, 'CONTABILIDAD'),
(3, 'ELECTRONICA'),
(4, 'MECÁNICA PRODUCCIÓN'),
(5, 'MECÁNICA AUTOMOTRIZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(10) NOT NULL,
  `id_usuario` int(1) NOT NULL DEFAULT '2',
  `docente` varchar(255) NOT NULL,
  `dni` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `id_usuario`, `docente`, `dni`) VALUES
(1, 2, 'DUNCAN', 71025963),
(2, 2, 'NINAJA', 71495233),
(3, 2, 'TAPIA', 8852207),
(4, 2, 'MARIO', 0),
(5, 2, 'MANCO', 0),
(6, 2, 'TAPION', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre_academico`
--

CREATE TABLE `semestre_academico` (
  `id_sem_ac` int(10) NOT NULL,
  `semestre` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `semestre_academico`
--

INSERT INTO `semestre_academico` (`id_sem_ac`, `semestre`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III'),
(4, 'IV'),
(5, 'V'),
(6, 'VI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre_lectivo`
--

CREATE TABLE `semestre_lectivo` (
  `id_sem_lec` int(10) NOT NULL,
  `sem_lectivo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `semestre_lectivo`
--

INSERT INTO `semestre_lectivo` (`id_sem_lec`, `sem_lectivo`) VALUES
(1, 'I'),
(2, 'II');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(1) NOT NULL,
  `turno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `turno`) VALUES
(1, 'diurno'),
(2, 'nocturno'),
(3, 'd/n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_d`
--

CREATE TABLE `unidad_d` (
  `id_unidad` int(10) NOT NULL,
  `nomb_unidad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidad_d`
--

INSERT INTO `unidad_d` (`id_unidad`, `nomb_unidad`) VALUES
(1, 'REDES I'),
(2, 'MANTENIMIENTO'),
(3, 'DESARROLLO DE SOFTWARE'),
(4, 'TALLER DE BASE DE DATOS'),
(5, 'E-COMMERCE'),
(6, 'REDES II'),
(7, 'REDES II'),
(8, 'REDES III'),
(9, 'PRUEBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_docente`
--

CREATE TABLE `unidad_docente` (
  `id_unidad` int(10) NOT NULL,
  `nomb_unidad` varchar(255) NOT NULL,
  `docente` varchar(255) NOT NULL,
  `semestre_academico` varchar(3) NOT NULL,
  `semestre_lectivo` varchar(9) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `silabus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_docente`
--

INSERT INTO `unidad_docente` (`id_unidad`, `nomb_unidad`, `docente`, `semestre_academico`, `semestre_lectivo`, `turno`, `silabus`) VALUES
(1, 'REDES I', 'DUNCAN', 'I', '2020-I', 'diurno', 'RHE10731415833E0016.pdf'),
(2, 'REDES I', 'MARIO', 'I', '2020-I', 'diurno', 'RHE10731415833E0016.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_al`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `semestre_academico`
--
ALTER TABLE `semestre_academico`
  ADD PRIMARY KEY (`id_sem_ac`);

--
-- Indices de la tabla `semestre_lectivo`
--
ALTER TABLE `semestre_lectivo`
  ADD PRIMARY KEY (`id_sem_lec`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `unidad_d`
--
ALTER TABLE `unidad_d`
  ADD PRIMARY KEY (`id_unidad`);

--
-- Indices de la tabla `unidad_docente`
--
ALTER TABLE `unidad_docente`
  ADD UNIQUE KEY `id_unidad` (`id_unidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_al` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `semestre_academico`
--
ALTER TABLE `semestre_academico`
  MODIFY `id_sem_ac` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `semestre_lectivo`
--
ALTER TABLE `semestre_lectivo`
  MODIFY `id_sem_lec` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `unidad_d`
--
ALTER TABLE `unidad_d`
  MODIFY `id_unidad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `unidad_docente`
--
ALTER TABLE `unidad_docente`
  MODIFY `id_unidad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
