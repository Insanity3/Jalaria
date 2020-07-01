

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


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
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `Restaurantes` (`Id`, `nombre`, `localidad`, `dicección`, `cp`, `telf`, `precios`, `valoracion`, `email`, `web`, `horario`, `cocina`, `foto`) VALUES
(1, 'Josemis Steak House', 'Banyalbufar', 'Carrer Major de Banyalbufar', 7191, '648398279', 5, 4, 'steakhouse@gmail.com', 'www.josemisteakhouse.com', '10:00h-23:00h', 'Americana', 'steak.jpg'),
(2, 'Veggilenymous', '', '', 0, '', 0, 0, '', '', '', '', 'veggylenymous.jpg'),
(3, 'Andrius Wok', '', '', 0, '', 0, 0, '', '', '', '', 'wok.jpg'),
(4, 'Ca na Carmen y en Pep. Cuina de Mallorca', '', '', 0, '', 0, 0, '', '', '', '', 'canacarmen.jpg'),
(5, 'Pad Thai Alex', '', '', 0, '', 0, 0, '', '', '', '', 'padthai.jpg');


ALTER TABLE `Restaurantes`
  ADD PRIMARY KEY (`Id`);


ALTER TABLE `Restaurantes`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

