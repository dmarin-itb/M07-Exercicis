-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 19-04-2024 a les 09:35:27
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
-- Base de dades: `2324_m07uf23_act1`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `usuari`
--

CREATE TABLE `usuari` (
  `usu_nom` varchar(25) NOT NULL,
  `usu_password` varchar(32) NOT NULL,
  `usu_nivell` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `usuari`
--

INSERT INTO `usuari` (`usu_nom`, `usu_password`, `usu_nivell`) VALUES
('asdf.asdf@itb.cat', '200820e3227815ed1756a6b531e7e0d2', 'user'),
('david.marin@itb.cat', '200820e3227815ed1756a6b531e7e0d2', 'admin'),
('pepe.perez@itb.cat', '200820e3227815ed1756a6b531e7e0d2', 'user'),
('raimon.izard@itb.cat', '200820e3227815ed1756a6b531e7e0d2', 'user');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`usu_nom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
