-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2022 a las 22:56:38
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
-- Base de datos: `2dser_1ebal_exa`
--
CREATE DATABASE IF NOT EXISTS `2dser_1ebal_exa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `2dser_1ebal_exa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nombre_cientifico` varchar(50) DEFAULT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `zoo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animals`
--

INSERT INTO `animals` (`id`, `nombre`, `foto`, `nombre_cientifico`, `descripcion`, `zoo_id`) VALUES
(1, 'Mexican wolf', 'https://loremflickr.com/200/200/wolf', 'Canis lupus baileyi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 1),
(2, 'Brush-tailed phascogale', 'https://loremflickr.com/200/200/phascogale', 'Phascogale tapoatafa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(3, 'Galapagos tortoise', 'https://loremflickr.com/200/200/tortoise', 'Geochelone elephantopus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 3),
(4, 'Plover, three-banded', 'https://loremflickr.com/200/200/plover', 'Charadrius tricollaris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 1),
(5, 'Jackal, asiatic', 'https://loremflickr.com/200/200/jackar', 'Canis aureus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 4),
(6, 'Arctic ground squirrel', 'https://loremflickr.com/200/200/squirrel', 'Spermophilus parryii', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 2),
(7, 'Ferret, black-footed', 'https://loremflickr.com/200/200/ferret', 'Mustela nigripes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 2),
(8, 'Arctic tern', 'https://loremflickr.com/200/200/term', 'Sterna paradisaea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(9, 'Lion, southern sea', 'https://loremflickr.com/200/200/lion', 'Otaria flavescens', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 3),
(10, 'Tortoise, indian star', 'https://loremflickr.com/200/200/tortoise', 'Geochelone elegans', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 3),
(11, 'Yellow-necked spurfowl', 'https://loremflickr.com/200/200/spurfowl', 'Francolinus leucoscepus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 3),
(12, 'Cat, african wild', 'https://loremflickr.com/200/200/cat', 'Felis silvestris lybica', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(13, 'White-browed sparrow weaver', 'https://loremflickr.com/200/200/sparrow', 'Plocepasser mahali', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(14, 'Cook\'s tree boa', 'https://loremflickr.com/200/200/boa', 'Corallus hortulanus cooki', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 1),
(15, 'Oribi', 'https://loremflickr.com/200/200/oribi', 'Ourebia ourebi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(16, 'Owl, white-browed', 'https://loremflickr.com/200/200/owl', 'Ninox superciliaris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(17, 'Barbet, levaillant\'s', 'https://loremflickr.com/200/200/barbet', 'Trachyphonus vaillantii', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 3),
(18, 'Goat, mountain', 'https://loremflickr.com/200/200/goat', 'Oreamnos americanus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(19, 'Crab-eating fox', 'https://loremflickr.com/200/200/fox', 'Dusicyon thous', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 1),
(20, 'Greater rhea', 'https://loremflickr.com/200/200/rhea', 'Rhea americana', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 4),
(21, 'Common mynah', 'https://loremflickr.com/200/200/common', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(22, 'Arboral spiny rat', 'https://loremflickr.com/200/200/rat', 'Echimys chrysurus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 2),
(23, 'Snowy egret', 'https://loremflickr.com/200/200/egret', 'Egretta thula', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(24, 'Stick insect', 'https://loremflickr.com/200/200/insect', 'Leprocaulinus vipera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 1),
(25, 'Anteater, giant', 'https://loremflickr.com/200/200/giant', 'Myrmecophaga tridactyla', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 1),
(26, 'Badger, honey', 'https://loremflickr.com/200/200/badger', 'Mellivora capensis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 5),
(27, 'Common grenadier', 'https://loremflickr.com/200/200/common', 'Uraeginthus granatina', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 2),
(28, 'Water monitor', 'https://loremflickr.com/200/200/water', 'Varanus salvator', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 2),
(29, 'Starling, cape', 'https://loremflickr.com/200/200/starling', 'Lamprotornis nitens', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 2),
(30, 'Raccoon dog', 'https://loremflickr.com/200/200/dog', 'Nyctereutes procyonoides', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zoos`
--

CREATE TABLE `zoos` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zoos`
--

INSERT INTO `zoos` (`id`, `ciudad`, `nombre`, `direccion`, `pais`, `descripcion`, `foto`) VALUES
(1, 'La Laja', 'La Laja zoo', '0530 Corscot Parkway', 'Chile', 'La Laja zoo Lorem ipsum dolor sit amet, consectetur', 'https://loremflickr.com/320/240/Paris'),
(2, 'Guicheng', 'Guicheng zoo', '4803 Grim Park', 'China', 'Guicheng zoo Lorem ipsum dolor sit amet, consectetur', 'https://loremflickr.com/320/240/Roma'),
(3, 'Wolong', 'Wolong zoo', '727 Forest Dale Park', 'China', 'Wolong zoo Lorem ipsum dolor sit amet, consectetur', 'https://loremflickr.com/320/240/Panda'),
(4, 'Gostagayevskaya', 'Gostagayevskaya zoo', '36 Moose Place', 'Russia', 'Gostagayevskaya zoo Lorem ipsum dolor sit amet, consectetur', 'https://loremflickr.com/320/240/Zoo'),
(5, 'Neftçala', 'Neftçala zoo', '038 Petterle Point', 'Azerbaijan', 'Neftçala zoo Lorem ipsum dolor sit amet, consectetur', 'https://loremflickr.com/320/240/animals'),
(6, 'San Sebastian', 'San Sebastian zoo', 'Iturri Kalea', 'Euskal Herria', 'eniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit', 'https://loremflickr.com/320/240/sabana'),
(7, 'Bilbao', 'Bilbao zoo', 'Lehedakari kalea', 'Euskal Herria', 'eniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit', 'https://loremflickr.com/320/240/tropical'),
(8, 'Irunea', 'Panplona zoo', 'Nafar Kalea', 'Euskal Herria', 'eniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit', 'https://loremflickr.com/320/240/Madrid');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zoo_id` (`zoo_id`);

--
-- Indices de la tabla `zoos`
--
ALTER TABLE `zoos`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`zoo_id`) REFERENCES `zoos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;