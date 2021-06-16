-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2021 a las 22:44:23
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `metodologia_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartonero`
--

CREATE TABLE `cartonero` (
  `DNI_cartonero` int(11) NOT NULL,
  `nombre_cartonero` varchar(40) NOT NULL,
  `apellido_cartonero` varchar(40) NOT NULL,
  `direccion_cartonero` varchar(120) NOT NULL,
  `fecha_nac_cartonero` date NOT NULL,
  `categoria` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificacion_materiales`
--

CREATE TABLE `especificacion_materiales` (
  `id_especificacion` int(11) NOT NULL,
  `nombre_mat` varchar(30) NOT NULL,
  `detalle` varchar(250) NOT NULL,
  `no_aceptado` varchar(250) NOT NULL,
  `forma_entrega` varchar(250) NOT NULL,
  `imagen_material` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_transporte`
--

CREATE TABLE `oferta_transporte` (
  `id_oferta` int(11) NOT NULL,
  `texto_libre` varchar(250) NOT NULL,
  `espacio_disp` char(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recoleccion_materiales`
--

CREATE TABLE `recoleccion_materiales` (
  `id_recoleccion` int(11) NOT NULL,
  `peso_material_recolectado` int(11) NOT NULL,
  `fecha_recoleccion` date NOT NULL,
  `id_especificacion_material` int(11) NOT NULL,
  `DNI_cartonero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiro_materiales`
--

CREATE TABLE `retiro_materiales` (
  `id_retiro` int(11) NOT NULL,
  `foto` varchar(90) DEFAULT NULL,
  `categoria` char(1) NOT NULL,
  `inicio_horario_retiro` time NOT NULL,
  `fin_horario_retiro` time NOT NULL,
  `DNI_cartonero` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `telefono_usuario` int(11) NOT NULL,
  `direccion_usuario` varchar(50) NOT NULL,
  `mail_usuario` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartonero`
--
ALTER TABLE `cartonero`
  ADD PRIMARY KEY (`DNI_cartonero`);

--
-- Indices de la tabla `especificacion_materiales`
--
ALTER TABLE `especificacion_materiales`
  ADD PRIMARY KEY (`id_especificacion`);

--
-- Indices de la tabla `oferta_transporte`
--
ALTER TABLE `oferta_transporte`
  ADD PRIMARY KEY (`id_oferta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `recoleccion_materiales`
--
ALTER TABLE `recoleccion_materiales`
  ADD PRIMARY KEY (`id_recoleccion`),
  ADD KEY `DNI_cartonero` (`DNI_cartonero`),
  ADD KEY `id_especificacion_material` (`id_especificacion_material`);

--
-- Indices de la tabla `retiro_materiales`
--
ALTER TABLE `retiro_materiales`
  ADD PRIMARY KEY (`id_retiro`),
  ADD KEY `FK_RETIRO_MATERIALES_CARTONERO` (`DNI_cartonero`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especificacion_materiales`
--
ALTER TABLE `especificacion_materiales`
  MODIFY `id_especificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `oferta_transporte`
--
ALTER TABLE `oferta_transporte`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recoleccion_materiales`
--
ALTER TABLE `recoleccion_materiales`
  MODIFY `id_recoleccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `retiro_materiales`
--
ALTER TABLE `retiro_materiales`
  MODIFY `id_retiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `oferta_transporte`
--
ALTER TABLE `oferta_transporte`
  ADD CONSTRAINT `oferta_transporte_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recoleccion_materiales`
--
ALTER TABLE `recoleccion_materiales`
  ADD CONSTRAINT `recoleccion_materiales_ibfk_1` FOREIGN KEY (`DNI_cartonero`) REFERENCES `cartonero` (`DNI_cartonero`),
  ADD CONSTRAINT `recoleccion_materiales_ibfk_2` FOREIGN KEY (`id_especificacion_material`) REFERENCES `especificacion_materiales` (`id_especificacion`);

--
-- Filtros para la tabla `retiro_materiales`
--
ALTER TABLE `retiro_materiales`
  ADD CONSTRAINT `FK_RETIRO_MATERIALES_CARTONERO` FOREIGN KEY (`DNI_cartonero`) REFERENCES `cartonero` (`DNI_cartonero`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `retiro_materiales_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
