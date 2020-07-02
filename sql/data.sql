

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
  `foto` varchar(50) NOT NULL,
  `maps` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `Restaurantes` (`Id`, `nombre`, `localidad`, `dicección`, `cp`, `telf`, `precios`, `valoracion`, `email`, `web`, `horario`, `cocina`, `foto`, `maps`) VALUES
(1, 'Josemis Steak House', 'Banyalbufar', 'Carrer Major de Banyalbufar', 7191, '648398279', 5, 4, 'steakhouse@gmail.com', 'www.josemisteakhouse.com', '10:00h-23:00h', 'Americana', 'steak.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1535.1505861644653!2d2.5139822009393193!3d39.68793189662135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297f43f4b1f6da3%3A0xb2bf0c7f73af880f!2sCarrer%20Major%2C%2007191%20Banyalbufar%2C%20Illes%20Balears!5e0!3m2!1ses!2ses!4v1593690738338!5m2!1ses!2ses'),
(2, 'Veggilenymous', 'Palma', 'Carrer Aragó', 7008, '678493849', 3, 5, 'veggylenymous@gmail.com', 'www.veggylenymous.com', '9:00h-17:00h', 'Vegetariana', 'veggylenymous.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4411.765409373853!2d2.669069854315175!3d39.585207498265454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297930957623aa1%3A0xf17116f2cae24d69!2sCalle%20Arag%C3%B3n%2C%20Islas%20Baleares!5e0!3m2!1ses!2ses!4v1593691264747!5m2!1ses!2ses'),
(3, 'Andrius Wok', '', 'Av. Magalúf', 0, '', 0, 0, '', '', '', '', 'wok.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3078.320471601881!2d2.532459087070558!3d39.50725619305305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297892e93753de7%3A0x1b7d8b6a04f0115f!2sAv.%20Magaluf%2C%2007181%2C%20Illes%20Balears!5e0!3m2!1ses!2ses!4v1593691719018!5m2!1ses!2ses'),
(4, 'Ca na Carmen y en Pep. Cuina de Mallorca', '', 'Carrer de sa Torre', 0, '', 0, 0, '', '', '', '', 'canacarmen.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3073.5144840578373!2d2.768598901182978!3d39.61561828649188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12979553b2dcf573%3A0x99ea647722f88276!2sCarrer%20de%20sa%20Torre%2C%2007141%20P%C3%B2rtol%2C%20Illes%20Balears!5e0!3m2!1ses!2ses!4v1593691657905!5m2!1ses!2ses'),
(5, 'Pad Thai Alex', '', 'Carrer de Can Armengol', 0, '', 0, 0, '', '', '', '', 'padthai.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1537.7206622867168!2d2.647280070917867!3d39.57220299836002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297925a8e60a621%3A0xf81dcf4f2d1dba6e!2sCarrer%20de%20Can%20Armengol%2C%20Palma%2C%20Illes%20Balears!5e0!3m2!1ses!2ses!4v1593691554656!5m2!1ses!2ses');


ALTER TABLE `Restaurantes`
  ADD PRIMARY KEY (`Id`);


ALTER TABLE `Restaurantes`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

