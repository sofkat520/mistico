-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-08-2024 a las 09:24:00
-- Versión del servidor: 10.6.18-MariaDB-cll-lve
-- Versión de PHP: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuscomistico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id_oferta` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `cuerpo` text NOT NULL,
  `incluye` text DEFAULT NULL,
  `imagen` varchar(300) DEFAULT NULL,
  `archivo` varchar(300) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id_oferta`, `titulo`, `cuerpo`, `incluye`, `imagen`, `archivo`, `estado`) VALUES
(1, 'Vuelo de los cóndores de Chonta  con zip line y puente tibetano', 'htmlspecialchars(PUEBLO DE CHONTA y en seguida empezaremos la caminata de 1 hora aproximadamente hasta llegar al MIRADOR DEL CÓNDOR ANDINO que está a los 3350 msnm. El camino es plano gradual con pocas subidas y bajadas bordeando una montaña con vista al impresionante cañón del Apurímac que tiene más de 1500 metros de profundidad, una vez que lleguemos al mirador de los cóndores tendremos la oportunidad de presenciar al impresionante cóndor andino en su habitad natural, nos ubicaremos en el mirador y esperaremos que los cóndores lleguen después de sus actividades diarias...)', 'Transporte ida y vuelta[Guía profesional equipado con binocular y libro[Almuerzo[Desayuno campestre o box lunch[Deporte de aventuras, Zip line y Puente tibetano[Ticket de Ingreso a Killarumiyoc[Ticket de Ingreso a Tarawasi[Ticket de Ingreso Vuelo del cóndor', 'promocion.jpg', 'promo-condor.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `pass`, `tipo`) VALUES
(1, 'antonio', '1234', 'admin'),
(2, 'ramiro', '1234', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id_oferta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
