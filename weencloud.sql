-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 11:45:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `weencloud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `nombre`) VALUES
(1, 'Enfermero'),
(2, 'Ingeniero de obra'),
(3, 'Contador'),
(4, 'Tendero'),
(5, 'Repartidor'),
(6, 'Profesor'),
(7, 'Comerciante'),
(8, 'Obrero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_tbllogin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id` int(1) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `id_genero` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `Lutrabajo` varchar(500) NOT NULL,
  `experiencia` varchar(500) NOT NULL,
  `salario` varchar(100) NOT NULL,
  `contactanos` varchar(500) NOT NULL,
  `Cargo_Categoria` varchar(255) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id`, `Lutrabajo`, `experiencia`, `salario`, `contactanos`, `Cargo_Categoria`, `created_at`) VALUES
(39, 'La Victoria', '2 Años', '1.400.000', 'Tel. Fijo: 71 81 131', 'auxiliar de pedagogia', '2023-11-07 23:33:34'),
(40, 'Canada Guira', '1 Año', '600 Mensuales', '3107877172', 'Repartidor', '2023-11-07 23:37:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_tblregistro` int(11) NOT NULL,
  `nomcom` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `numtel` varchar(10) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `confirpass` varchar(60) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `numdoc` varchar(12) NOT NULL,
  `tipdoc` varchar(60) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_tblregistro`, `nomcom`, `email`, `numtel`, `pass`, `confirpass`, `genero`, `numdoc`, `tipdoc`, `barrio`, `rol`) VALUES
(86, 'Hellen Cuervo', 'hellencastanedacuervo@gmail.com', '3184913159', '$2y$10$3zoDJ1XueglGeejSvTDCGOJnksK.z/QNhhgzKwUxJogxCbP/ED.6q', '$2y$10$3zoDJ1XueglGeejSvTDCGOJnksK.z/QNhhgzKwUxJogxCbP/ED.6q', 'Femenino', '10208765903', 'ti', 'San Miguel', 'Vacante'),
(87, 'Fidel Jose Espitia', 'fideljoseespi10@gmail.com', '3142758305', '$2y$10$mjIKFKc9H6qfEy73biaSZuxwPDIgqsbw2OWUWfnrjK2Zq4PWe34mi', '$2y$10$mjIKFKc9H6qfEy73biaSZuxwPDIgqsbw2OWUWfnrjK2Zq4PWe34mi', 'Masculino', '1028662003', 'Ti', 'Canada Guira', 'Empresario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_tbllogin`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pelicula_genero` (`id_genero`);

--
-- Indices de la tabla `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_tblregistro`),
  ADD KEY `genero` (`genero`),
  ADD KEY `tipdoc` (`tipdoc`),
  ADD KEY `barrio` (`barrio`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_tblregistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `fk_pelicula_genero` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
