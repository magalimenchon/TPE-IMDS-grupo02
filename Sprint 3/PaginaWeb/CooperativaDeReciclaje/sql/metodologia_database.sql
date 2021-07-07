-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 11:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metodologia_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartonero`
--

CREATE TABLE `cartonero` (
  `DNI_cartonero` int(11) NOT NULL,
  `nombre_cartonero` varchar(40) NOT NULL,
  `apellido_cartonero` varchar(40) NOT NULL,
  `direccion_cartonero` varchar(120) NOT NULL,
  `fecha_nac_cartonero` date NOT NULL,
  `categoria` char(1) DEFAULT NULL,
  `borrado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartonero`
--

INSERT INTO `cartonero` (`DNI_cartonero`, `nombre_cartonero`, `apellido_cartonero`, `direccion_cartonero`, `fecha_nac_cartonero`, `categoria`, `borrado`) VALUES
(99999, 'nuevo cartonero', 'apellido', 'uriburu', '1990-10-10', 'a', 0),
(32000000, 'holaaa', 'comooo', 'hehe', '1990-10-10', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `especificacion_materiales`
--

CREATE TABLE `especificacion_materiales` (
  `id_especificacion` int(11) NOT NULL,
  `nombre_mat` varchar(30) NOT NULL,
  `detalle` varchar(250) NOT NULL,
  `no_aceptado` varchar(250) NOT NULL,
  `forma_entrega` varchar(250) NOT NULL,
  `imagen_material` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `especificacion_materiales`
--

INSERT INTO `especificacion_materiales` (`id_especificacion`, `nombre_mat`, `detalle`, `no_aceptado`, `forma_entrega`, `imagen_material`) VALUES
(11, 'Papel', 'dfgdf', 'dgfdgf', 'gdfgdfg', 'img/temp/60cb7bde09e72.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oferta_transporte`
--

CREATE TABLE `oferta_transporte` (
  `id_oferta` int(11) NOT NULL,
  `texto_libre` varchar(250) NOT NULL,
  `espacio_disp` char(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recoleccion_materiales`
--

CREATE TABLE `recoleccion_materiales` (
  `id_recoleccion` int(11) NOT NULL,
  `peso_material_recolectado` int(11) NOT NULL,
  `fecha_recoleccion` date NOT NULL,
  `material_recolectado` varchar(250) NOT NULL,
  `DNI_cartonero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recoleccion_materiales`
--

INSERT INTO `recoleccion_materiales` (`id_recoleccion`, `peso_material_recolectado`, `fecha_recoleccion`, `material_recolectado`, `DNI_cartonero`) VALUES
(22, 400, '2021-07-14', 'papel', 32000000);

-- --------------------------------------------------------

--
-- Table structure for table `retiro_materiales`
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

--
-- Dumping data for table `retiro_materiales`
--

INSERT INTO `retiro_materiales` (`id_retiro`, `foto`, `categoria`, `inicio_horario_retiro`, `fin_horario_retiro`, `DNI_cartonero`, `id_usuario`) VALUES
(82, NULL, 'a', '09:00:00', '12:00:00', NULL, 82);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `telefono_usuario` bigint(11) NOT NULL,
  `direccion_usuario` varchar(50) NOT NULL,
  `mail_usuario` varchar(70) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `telefono_usuario`, `direccion_usuario`, `mail_usuario`, `password`) VALUES
(81, 'Admin', 'Admin', 11111111, 'Direccion admin', 'admin@gmail.com', '$2y$10$.3oB9H9hrxOsrYOMfKOblOyckXpExiqnqtrzlVU5iRRJkPycjvlIi'),
(82, 'maga', 'asas', 2494488407, 'a', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartonero`
--
ALTER TABLE `cartonero`
  ADD PRIMARY KEY (`DNI_cartonero`);

--
-- Indexes for table `especificacion_materiales`
--
ALTER TABLE `especificacion_materiales`
  ADD PRIMARY KEY (`id_especificacion`);

--
-- Indexes for table `oferta_transporte`
--
ALTER TABLE `oferta_transporte`
  ADD PRIMARY KEY (`id_oferta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `recoleccion_materiales`
--
ALTER TABLE `recoleccion_materiales`
  ADD PRIMARY KEY (`id_recoleccion`),
  ADD KEY `DNI_cartonero` (`DNI_cartonero`);

--
-- Indexes for table `retiro_materiales`
--
ALTER TABLE `retiro_materiales`
  ADD PRIMARY KEY (`id_retiro`),
  ADD KEY `FK_RETIRO_MATERIALES_CARTONERO` (`DNI_cartonero`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `especificacion_materiales`
--
ALTER TABLE `especificacion_materiales`
  MODIFY `id_especificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `oferta_transporte`
--
ALTER TABLE `oferta_transporte`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recoleccion_materiales`
--
ALTER TABLE `recoleccion_materiales`
  MODIFY `id_recoleccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `retiro_materiales`
--
ALTER TABLE `retiro_materiales`
  MODIFY `id_retiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oferta_transporte`
--
ALTER TABLE `oferta_transporte`
  ADD CONSTRAINT `oferta_transporte_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recoleccion_materiales`
--
ALTER TABLE `recoleccion_materiales`
  ADD CONSTRAINT `recoleccion_materiales_ibfk_1` FOREIGN KEY (`DNI_cartonero`) REFERENCES `cartonero` (`DNI_cartonero`);

--
-- Constraints for table `retiro_materiales`
--
ALTER TABLE `retiro_materiales`
  ADD CONSTRAINT `FK_RETIRO_MATERIALES_CARTONERO` FOREIGN KEY (`DNI_cartonero`) REFERENCES `cartonero` (`DNI_cartonero`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `retiro_materiales_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
