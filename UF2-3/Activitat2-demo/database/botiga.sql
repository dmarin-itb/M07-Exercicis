-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 14-04-2023 a les 12:46:04
-- Versió del servidor: 10.4.27-MariaDB
-- Versió de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `botiga`
--
CREATE DATABASE IF NOT EXISTS `botiga` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `botiga`;

-- --------------------------------------------------------

--
-- Estructura de la taula `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(3) NOT NULL,
  `cat_nom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcament de dades per a la taula `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nom`) VALUES
(1, 'samarretes'),
(2, 'pantalons'),
(3, 'sabates');

-- --------------------------------------------------------

--
-- Estructura de la taula `producte`
--

CREATE TABLE `producte` (
  `pro_id` int(3) NOT NULL,
  `pro_nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pro_preu` double NOT NULL,
  `cat_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcament de dades per a la taula `producte`
--

INSERT INTO `producte` (`pro_id`, `pro_nom`, `pro_preu`, `cat_id`) VALUES
(1, 'Bàsica blanca', 12.99, 1),
(2, 'Bàsica negra', 13.99, 1),
(3, 'Jordan 93', 43.95, 1),
(4, 'New Balance', 89.95, 3),
(5, 'New Balance 415', 93.55, 3),
(6, 'Munich C3 Jeans', 72.95, 3),
(7, 'cinturó negre', 9.99, 9),
(8, 'cinturó marró', 9.99, 9);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuari`
--

CREATE TABLE `usuari` (
  `usu_mail` varchar(25) NOT NULL,
  `usu_contra` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcament de dades per a la taula `usuari`
--

INSERT INTO `usuari` (`usu_mail`, `usu_contra`) VALUES
('david.marin@itb.cat', 'qwe123'),
('jordi.cidoncha@itb.cat', 'qwerty');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Índexs per a la taula `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`pro_id`);

--
-- Índexs per a la taula `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`usu_mail`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT per la taula `producte`
--
ALTER TABLE `producte`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
