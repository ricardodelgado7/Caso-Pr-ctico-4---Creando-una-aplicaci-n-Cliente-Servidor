-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-10-2023 a las 23:38:25
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id21391841_sitiosturisticos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitios`
--

CREATE TABLE `sitios` (
  `ID` int(11) NOT NULL,
  `CentroTuristico` varchar(80) NOT NULL,
  `Ubicacion` varchar(80) NOT NULL,
  `Telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sitios`
--

INSERT INTO `sitios` (`ID`, `CentroTuristico`, `Ubicacion`, `Telefono`) VALUES
(1, 'Cascadas el Chiflon', 'Ejido, San Cristobalito, 30100 Tzimol, Chis.', '9612148079'),
(2, 'Ruinas de Palenque', 'Carretera a Palenque- Zona Archaeologica Km. 8', '9163452721'),
(3, 'Riviera Maya', 'Riviera Maya, Quintana Roo, México', '9848751100'),
(4, 'Chiapa de Corzo', ' Suroeste de Comitan Carretera Federal Km190 rumbo a La Trinitaria', '9616128360'),
(7, 'Cascadas las nubes', ' Ejido Las Nubes Las Nubes, 30180 Chis.', '5024972020'),
(8, 'Cataratas del Iguazú', 'Al norte de la provincia de Misiones, en el límite con Brasil', '1152587318'),
(10, 'Playa del Carmen', 'Norte del estado mexicano Quintana Roo', '9848035066');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sitios`
--
ALTER TABLE `sitios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sitios`
--
ALTER TABLE `sitios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
