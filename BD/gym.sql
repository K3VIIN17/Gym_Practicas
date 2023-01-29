-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2023 a las 08:25:05
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `IDpago` int(11) NOT NULL,
  `Fecha_pago` text NOT NULL,
  `Cantidad` int(50) NOT NULL,
  `ID_registro` int(50) NOT NULL,
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `Disciplina` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`IDpago`, `Fecha_pago`, `Cantidad`, `ID_registro`, `Nombres`, `Apellidos`, `Disciplina`) VALUES
(85, '2022-12-30', 250, 52, 'Kevin Rafael', 'Guzman Arjona      ', 'Gym ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idcliente` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `usuario` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `domicilio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idcliente`, `nombre`, `apellido`, `usuario`, `email`, `password`, `domicilio`) VALUES
(55, '123', '123', '123', '123', '123', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosusuarios`
--

CREATE TABLE `registrosusuarios` (
  `ID_registro` int(11) NOT NULL,
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `CorreoElectronico` text NOT NULL,
  `NumTel` text NOT NULL,
  `Direccion` text NOT NULL,
  `Disciplina` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrosusuarios`
--

INSERT INTO `registrosusuarios` (`ID_registro`, `Nombres`, `Apellidos`, `CorreoElectronico`, `NumTel`, `Direccion`, `Disciplina`) VALUES
(52, 'Kevin Rafael    ', 'Guzman Arjona', 'karjona@gmail.com', '981 212 1212    ', 'las flores   ', 'Gym ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`IDpago`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `registrosusuarios`
--
ALTER TABLE `registrosusuarios`
  ADD PRIMARY KEY (`ID_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `IDpago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `registrosusuarios`
--
ALTER TABLE `registrosusuarios`
  MODIFY `ID_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
