-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2020 a las 09:25:49
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `silabus`
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
('admin2', 2, 'alumno', 'alumno123'),
('admin3', 2, 'chamed16@gmail.com', '73141583');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_al` int(11) NOT NULL,
  `user_type` int(1) NOT NULL,
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

INSERT INTO `alumno` (`id_al`, `user_type`, `dni`, `nombre`, `apellido`, `correo`, `carrera`, `semestre_academico`, `semestre_lectivo`) VALUES
(1, 2, 73141583, 'Brandon', 'Chavez', 'chamed16@gmail.com', 'COMPUTACION', 'I', '2020-II');

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
(1, 'COMPUTACION'),
(2, 'CONTABILIDAD'),
(3, 'ELECTRONICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(10) NOT NULL,
  `docente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `docente`) VALUES
(1, 'DUNCAN'),
(2, 'NINAJA'),
(3, 'TAPIA'),
(4, 'MARIO'),
(5, 'MANCO'),
(6, 'TAPION');

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
(1, '2020-I'),
(2, '2020-II');

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
-- Estructura de tabla para la tabla `unidad_carrera`
--

CREATE TABLE `unidad_carrera` (
  `unidad` varchar(10) CHARACTER SET utf8 NOT NULL,
  `carrera` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidad_carrera`
--

INSERT INTO `unidad_carrera` (`unidad`, `carrera`) VALUES
('PRUEB', 'EECTRONICA'),
('PRUEB', 'CONTABILIDAD'),
('PRUEB', 'ELECTRONICA'),
('E-COM', 'EECTRONICA'),
('E-COM', 'ELECTRONICA'),
('MANTE', 'EECTRONICA'),
('MANTE', 'CONTABILIDAD');

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
-- Indices de la tabla `unidad_carrera`
--
ALTER TABLE `unidad_carrera`
  ADD KEY `id_unidad` (`unidad`);

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
  MODIFY `id_carrera` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_unidad` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
