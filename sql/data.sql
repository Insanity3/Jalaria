-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 08-07-2020 a las 07:22:47
-- Versión del servidor: 8.0.20
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Opiniones`
--

CREATE TABLE `Opiniones` (
  `id` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `opinion` text NOT NULL,
  `valoracion` int NOT NULL,
  `restaurante` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Opiniones`
--

INSERT INTO `Opiniones` (`id`, `user`, `opinion`, `valoracion`, `restaurante`) VALUES
(3, 'insanity', '                       Estaba todo muy bueno     ', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Restaurantes`
--

CREATE TABLE `Restaurantes` (
  `Id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `dicección` varchar(50) NOT NULL,
  `cp` int NOT NULL,
  `telf` varchar(20) NOT NULL,
  `precios` int NOT NULL,
  `valoracion` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL,
  `horario` varchar(20) NOT NULL,
  `cocina` tinytext NOT NULL,
  `foto` varchar(50) NOT NULL,
  `maps` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Restaurantes`
--

INSERT INTO `Restaurantes` (`Id`, `nombre`, `localidad`, `dicección`, `cp`, `telf`, `precios`, `valoracion`, `email`, `web`, `horario`, `cocina`, `foto`, `maps`, `latitud`, `longitud`) VALUES
(1, 'Josemis Steak House', 'Banyalbufar', 'Carrer Major de Banyalbufar', 7191, '648398279', 5, 4, 'steakhouse@gmail.com', 'www.josemisteakhouse.com', '10:00h-23:00h', 'Americana', 'steak.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1535.1505861644653!2d2.5139822009393193!3d39.68793189662135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297f43f4b1f6da3%3A0xb2bf0c7f73af880f!2sCarrer%20Major%2C%2007191%20Banyalbufar%2C%20Illes%20Balears!5e0!3m2!1ses!2ses!4v1593690738338!5m2!1ses!2ses', '39.687808', '2.514839'),
(2, 'Veggilenymous', 'Palma', 'Carrer Aragó', 7008, '678493849', 3, 5, 'veggylenymous@gmail.com', 'www.veggylenymous.com', '9:00h-17:00h', 'Vegetariana', 'veggylenymous.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4411.765409373853!2d2.669069854315175!3d39.585207498265454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297930957623aa1%3A0xf17116f2cae24d69!2sCalle%20Arag%C3%B3n%2C%20Islas%20Baleares!5e0!3m2!1ses!2ses!4v1593691264747!5m2!1ses!2ses', '39.582440', '2.668379'),
(3, 'Andrius Wok', 'Magalúf', 'Av. Magalúf', 7181, '693487629', 5, 2, 'andriuswok@gmail.com', 'www.andriuswok@gmail.com', '09:00h-00:00h', 'China,Americana', 'wok.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3078.320471601881!2d2.532459087070558!3d39.50725619305305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297892e93753de7%3A0x1b7d8b6a04f0115f!2sAv.%20Magaluf%2C%2007181%2C%20Illes%20Balears!5e0!3m2!1ses!2ses!4v1593691719018!5m2!1ses!2ses', '39.506782', '2.533365'),
(4, 'Ca na Carmen y en Pep', 'Pòrtol', 'Carrer de sa Torre', 7141, '628047628', 5, 5, 'canacarmen@gmail.com', 'www.canacarmenyenpep.com', '09:00h-17.00h', 'Mallorquina', 'canacarmen.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3073.5144840578373!2d2.768598901182978!3d39.61561828649188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12979553b2dcf573%3A0x99ea647722f88276!2sCarrer%20de%20sa%20Torre%2C%2007141%20P%C3%B2rtol%2C%20Illes%20Balears!5e0!3m2!1ses!2ses!4v1593691657905!5m2!1ses!2ses', '39.615668', '2.770342'),
(5, 'Pad Thai Alex', 'Palma', 'Carrer de Can Armengol', 7003, '639086873', 4, 3, 'padthaialex@gmail.com', 'www.padthaialex@gmail.com', '10:00h-23:00h', 'Thailandesa', 'padthai.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1537.7206622867168!2d2.647280070917867!3d39.57220299836002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297925a8e60a621%3A0xf81dcf4f2d1dba6e!2sCarrer%20de%20Can%20Armengol%2C%20Palma%2C%20Illes%20Balears!5e0!3m2!1ses!2ses!4v1593691554656!5m2!1ses!2ses', '39.572288', '2.647714');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `user`, `pass`) VALUES
(1, 'insanity', 'e4dfa73574c276fe3e3b5a7f9870eddcc5ed70bb136985e57d5b666344d5befe6bb067c1305593abd3f456ec301d1a1a872c3de9b14ad586f6b844385e8996d8'),
(2, 'alfalfa', 'fdccf30e171098c38b233c099d7c3c3265689ad4bb7890a8e00b35c0327a3c45d654495d285e01662c8cbdaf2705ab79f8c1c940d294be9798002e7990d16dc9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Opiniones`
--
ALTER TABLE `Opiniones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Restaurantes`
--
ALTER TABLE `Restaurantes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Opiniones`
--
ALTER TABLE `Opiniones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Restaurantes`
--
ALTER TABLE `Restaurantes`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
