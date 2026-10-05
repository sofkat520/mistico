-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2026 a las 17:09:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id_oferta`, `titulo`, `cuerpo`, `incluye`, `imagen`, `archivo`, `estado`) VALUES
(1, 'Vuelo de los cóndores de Chonta  con zip line y puente tibetano', 'htmlspecialchars(PUEBLO DE CHONTA y en seguida empezaremos la caminata de 1 hora aproximadamente hasta llegar al MIRADOR DEL CÓNDOR ANDINO que está a los 3350 msnm. El camino es plano gradual con pocas subidas y bajadas bordeando una montaña con vista al impresionante cañón del Apurímac que tiene más de 1500 metros de profundidad, una vez que lleguemos al mirador de los cóndores tendremos la oportunidad de presenciar al impresionante cóndor andino en su habitad natural, nos ubicaremos en el mirador y esperaremos que los cóndores lleguen después de sus actividades diarias...)', 'Transporte ida y vuelta[Guía profesional equipado con binocular y libro[Almuerzo[Desayuno campestre o box lunch[Deporte de aventuras, Zip line y Puente tibetano[Ticket de Ingreso a Killarumiyoc[Ticket de Ingreso a Tarawasi[Ticket de Ingreso Vuelo del cóndor', 'promocion.jpg', 'promo-condor.pdf', 1),
(2, '¡Promoción Imperdible en el Ombligo del Mundo!', 'htmlspecialchars(&lt;h3 data-path-to-node=&quot;4&quot; style=&quot;font-family: Google Sans, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;¿Qué incluye nuestra promoción?&lt;/h3&gt;&lt;ul data-path-to-node=&quot;5&quot; style=&quot;padding-inline-start: 32px; font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;li style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;p data-path-to-node=&quot;5,0,0&quot; id=&quot;p-rc_49709e732eb6b4be-24&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;span data-path-to-node=&quot;5,0,0,0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;b data-path-to-node=&quot;5,0,0,0&quot; data-index-in-node=&quot;0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;Hospedaje de primera:&lt;/b&gt; Disfruta de una estadía cómoda y acogedora con ubicación estratégica en el corazón de Cusco&lt;/span&gt;&lt;span data-path-to-node=&quot;5,0,0,1&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;span style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;sup _ngcontent-ng-c1270232328=&quot;&quot; class=&quot;superscript&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important; font-size: 16px !important; background-color: transparent !important;&quot;&gt;&lt;/sup&gt;&lt;/span&gt;&lt;/span&gt;&lt;span data-path-to-node=&quot;5,0,0,2&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;.&lt;/span&gt;   &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;p data-path-to-node=&quot;5,1,0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;b data-path-to-node=&quot;5,1,0&quot; data-index-in-node=&quot;0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;Tours guiados:&lt;/b&gt; Descubre los atractivos imperdibles de la Ciudad Imperial y sus alrededores de la mano de guías profesionales.&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;p data-path-to-node=&quot;5,2,0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;b data-path-to-node=&quot;5,2,0&quot; data-index-in-node=&quot;0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;Desayuno andino tradicional:&lt;/b&gt; Comienza tus mañanas con energía probando lo mejor de los insumos locales.&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;p data-path-to-node=&quot;5,3,0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;b data-path-to-node=&quot;5,3,0&quot; data-index-in-node=&quot;0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;Atención personalizada:&lt;/b&gt; Te ayudamos a planificar cada detalle de tu itinerario para que aproveches cada segundo de tu viaje.&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;blockquote data-path-to-node=&quot;6&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;p data-path-to-node=&quot;6,0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;&lt;i data-path-to-node=&quot;6,0&quot; data-index-in-node=&quot;0&quot; style=&quot;font-family: Google Sans Text, sans-serif !important; line-height: 1.15 !important; margin-top: 0px !important; margin-left: 0px !important; margin-right: 0px !important;&quot;&gt;“Descubre la historia, la cultura y los paisajes imponentes de Cusco con una oferta única creada especialmente para ti.”&lt;/i&gt;&lt;/p&gt;&lt;/blockquote&gt;)', 'Vive una experiencia inolvidable en Cusco con nuestra promoción exclusiva diseñada para que disfrutes al máximo de la magia de los Andes sin preocuparte por nada.', 'pantalla inicio.jpg', 'boletin-NTEP-edicion-N42-1808.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `incluye` text DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(300) DEFAULT NULL,
  `estado` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tour`
--

INSERT INTO `tour` (`id_tour`, `titulo`, `descripcion`, `incluye`, `duracion`, `precio`, `imagen`, `estado`) VALUES
(1, 'Montaña de Colores', 'Caminata hacia la famosa Montaña de 7 Colores (Vinicunca), uno de los paisajes más impresionantes de Cusco.', 'Transporte ida y vuelta[Guía profesional[Desayuno y almuerzo[Entrada a la montaña', '1 día (Full Day)', '45.00', 'cerro-colores-1.jpg', 1),
(2, 'Ofrenda a la Pachamama', 'Ceremonia tradicional andina de agradecimiento a la Pachamama (Madre Tierra), guiada por un maestro andino.', 'Transporte[Chamán/guía andino[Materiales de la ofrenda', 'Medio día', '30.00', 'cusco-mistico-pachamama.jpg', 1),
(3, 'Cusco Tradicional', 'Disfruta de una experiencia inolvidable recorriendo la majestuosa Ciudad Imperial del Cusco, visitando sus centros arqueológicos urbanos, el impresionante Templo del Sol (Qorikancha) y los cuatro complejos incas circundantes (Sacsayhuamán, Q\'enqo, Puka Pukara y Tambomachay).', 'Traslados aeropuerto - hotel - aeropuerto[Guía profesional oficial de turismo[Entradas a los atractivos incluidos[Transporte turístico para los tours[03 Noches de hospedaje en Cusco[Desayunos incluidos', '04 Días / 03 Noches', '180.00', 'cusco-4.jpg', 1),
(4, 'Machupicchu Mágico', 'Vive la maravilla del mundo moderno con este tour diseñado para descubrir la magia de la ciudadela inca de Machupicchu. Incluye viaje en tren panorámico a través del valle sagrado, guiado experto y tiempo libre para contemplar este impresionante santuario histórico.', 'Traslado hotel - estación de tren - hotel[Pasajes de tren ida y vuelta (Expedition o Voyager)[Bus Consettur (subida y bajada a Machupicchu)[Entrada oficial a la Ciudadela de Machupicchu[Guía profesional bilingüe[03 Noches de hospedaje en Cusco[Desayunos', '04 Días / 03 Noches', '320.00', 'machupicchu-4.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Indices de la tabla `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`);

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
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
