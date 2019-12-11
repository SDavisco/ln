-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2019 a las 09:12:59
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
  `user_cod` varchar(6) NOT NULL,
  `user_type` int(1) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`user_cod`, `user_type`, `user_name`, `user_pass`) VALUES
('admin', 1, 'Administrador', 'pass123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(10) NOT NULL,
  `nomb_carrera` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'MANCO');

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
  `sem_lectivo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `silabus`
--

CREATE TABLE `silabus` (
  `id_silabus` int(10) NOT NULL,
  `id_carrera` int(10) NOT NULL,
  `unidad_didáctica` varchar(255) NOT NULL,
  `semestre_lectivo` int(10) NOT NULL,
  `semestre_academico` varchar(10) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `docente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'E-COMMERCE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_docente`
--

CREATE TABLE `unidad_docente` (
  `id_unidad` int(10) NOT NULL,
  `unidad` varchar(255) NOT NULL,
  `docente` varchar(255) NOT NULL,
  `semestre_lectivo` varchar(3) NOT NULL,
  `semestre_academico` varchar(3) NOT NULL,
  `turno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `silabus`
--
ALTER TABLE `silabus`
  ADD PRIMARY KEY (`id_silabus`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `semestre_academico`
--
ALTER TABLE `semestre_academico`
  MODIFY `id_sem_ac` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `semestre_lectivo`
--
ALTER TABLE `semestre_lectivo`
  MODIFY `id_sem_lec` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `silabus`
--
ALTER TABLE `silabus`
  MODIFY `id_silabus` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `unidad_d`
--
ALTER TABLE `unidad_d`
  MODIFY `id_unidad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
