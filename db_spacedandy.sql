-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2017 a las 20:32:43
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_spacedandy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_episodio`
--

CREATE TABLE `comentarios_episodio` (
  `id_comentario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `comentario` varchar(350) NOT NULL,
  `id_temp` int(11) NOT NULL,
  `id_episodio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios_episodio`
--

INSERT INTO `comentarios_episodio` (`id_comentario`, `nombre`, `comentario`, `id_temp`, `id_episodio`) VALUES
(1, 'Juan Leiva', 'El E1, T1 esta barbaro!', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_temp`
--

CREATE TABLE `comentarios_temp` (
  `id_comentario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `comentario` varchar(350) NOT NULL,
  `id_temporada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios_temp`
--

INSERT INTO `comentarios_temp` (`id_comentario`, `nombre`, `comentario`, `id_temporada`) VALUES
(1, 'Juan Leiva', 'La temporada 1 esta barbara!', 1),
(2, 'dsAdas', 'dasdsa', 1),
(9, 'Anda', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeriaimg`
--

CREATE TABLE `galeriaimg` (
  `id_img` int(11) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `detalles` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeriaimg`
--

INSERT INTO `galeriaimg` (`id_img`, `titulo`, `detalles`) VALUES
(1, 'Space1.jpg', 'size = 760*720'),
(2, 'Space2.jpg', NULL),
(3, 'Space3.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaepisodios`
--

CREATE TABLE `listaepisodios` (
  `id_episodio` int(11) NOT NULL,
  `id_temporada` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `detalles` varchar(100) DEFAULT NULL,
  `nro_episodio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listaepisodios`
--

INSERT INTO `listaepisodios` (`id_episodio`, `id_temporada`, `nombre`, `duracion`, `detalles`, `nro_episodio`) VALUES
(1, 1, 'Live with the Flow, Baby', '24:12', NULL, 1),
(2, 1, 'The Search for the Phantom Space Ramen, Baby', '24:12', NULL, 2),
(3, 1, 'Occasionally Even the Deceiver Is Deceived, Baby', '24:12', NULL, 3),
(4, 1, 'Sometimes You Can\'t Live with Dying, Baby', '24:12', NULL, 4),
(5, 1, 'A Merry Companion Is a Wagon in Space, Baby', '24:12', NULL, 5),
(6, 1, 'The War of the Undies and Vests, Baby', '24:12', NULL, 6),
(7, 2, 'I Can\'t Be the Only One, Baby', '22:12', NULL, 1),
(8, 2, 'There\'s Music in the Darkness, Baby', '22:12', NULL, 2),
(9, 2, 'Slow and Steady Wins the Race, Baby', '22:12', NULL, 3),
(10, 2, 'The Transfer Student Is Dandy, Baby', '22:12', NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listapersonajes`
--

CREATE TABLE `listapersonajes` (
  `id_personaje` int(11) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `detalles` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listapersonajes`
--

INSERT INTO `listapersonajes` (`id_personaje`, `titulo`, `detalles`, `Descripcion`) VALUES
(1, 'ProfileDandy.jpg', 'Dandy', 'Dandy is a tall man with a somewhat lanky yet athletic build (in the episode We\'re All Fools, So Let\'s All Dance, Baby, he was shown to be muscular underneath his shirt and jacket).'),
(2, 'ProfileScarlet.jpg', 'Scarlet', 'Scarlet is a slender woman, with a head of dark red hair, which is tied up.\r\n        She sports a yellow and black dress with longs sleeves that shows part of her thigh.'),
(3, 'ProfileMeow.jpg', 'Meow', 'Meow (like others of his race) resembles a cat, with large yellow eyes and a tan fur covered body.\r\n         His hands, feet, belly, and the tip of his tail are grey and he has a streak of brown fur that looks like a shooting\r\n          star running from his scalp down to his back. He sports a red cap,\r\n        a light green garment he says is a sarong, a brown satchel he uses to carry his phone.'),
(4, 'ProfileQT.jpg', 'QT', 'QT is a robot on the Aloha Oe. Dandy was looking for a capable robot in the shop but ended up with QT.\r\n        He states he is a high-powered machine though this is obviously a lie as he is very outdated.\r\n        One example of this is that he has to recharge\r\n        when using too much energy and has to look at the alien dictionary for information on new species.'),
(5, 'ProfileAdelie.jpg', 'Adelie', 'Planet Humbolt. Originally hunting her kind for a whopping 8 million woolong reward, Dandy takes a shine to her\r\n        (and vice versa) and tries to put her in contact with nto a distinctive bun with her fringe brushed forward.\r\n         Another notable feature are her peculiar green eyes, which have slit eye pupils. She wears a pink and white collar\r\n         and hat combo in which her antennae protrude from.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporadas`
--

CREATE TABLE `temporadas` (
  `id_temp` int(11) NOT NULL,
  `cant_caps` int(11) NOT NULL,
  `detalles` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temporadas`
--

INSERT INTO `temporadas` (`id_temp`, `cant_caps`, `detalles`) VALUES
(1, 12, NULL),
(2, 12, NULL),
(3, 15, 'asd'),
(4, 4, 'ovas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`) VALUES
(1, 'nico@gmail.com', 'titiri'),
(2, 'emma@hotmail.com', 'totoro'),
(4, 'fede@gmail.com', 'totoro'),
(5, 'erikthecat@gmail.com', 'tuturu'),
(6, 'prueba@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios_episodio`
--
ALTER TABLE `comentarios_episodio`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_temp` (`id_temp`),
  ADD KEY `id_episodio` (`id_episodio`);

--
-- Indices de la tabla `comentarios_temp`
--
ALTER TABLE `comentarios_temp`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_temporada` (`id_temporada`);

--
-- Indices de la tabla `galeriaimg`
--
ALTER TABLE `galeriaimg`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `listaepisodios`
--
ALTER TABLE `listaepisodios`
  ADD PRIMARY KEY (`id_episodio`);

--
-- Indices de la tabla `listapersonajes`
--
ALTER TABLE `listapersonajes`
  ADD PRIMARY KEY (`id_personaje`);

--
-- Indices de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios_episodio`
--
ALTER TABLE `comentarios_episodio`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `comentarios_temp`
--
ALTER TABLE `comentarios_temp`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `galeriaimg`
--
ALTER TABLE `galeriaimg`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `listaepisodios`
--
ALTER TABLE `listaepisodios`
  MODIFY `id_episodio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `listapersonajes`
--
ALTER TABLE `listapersonajes`
  MODIFY `id_personaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios_episodio`
--
ALTER TABLE `comentarios_episodio`
  ADD CONSTRAINT `comentarios_episodio_ibfk_1` FOREIGN KEY (`id_temp`) REFERENCES `temporadas` (`id_temp`),
  ADD CONSTRAINT `comentarios_episodio_ibfk_2` FOREIGN KEY (`id_episodio`) REFERENCES `listaepisodios` (`id_episodio`);

--
-- Filtros para la tabla `comentarios_temp`
--
ALTER TABLE `comentarios_temp`
  ADD CONSTRAINT `comentarios_temp_ibfk_1` FOREIGN KEY (`id_temporada`) REFERENCES `temporadas` (`id_temp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
