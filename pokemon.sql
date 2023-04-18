-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 apr 2023 om 11:36
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `module_8`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pokemon`
--

CREATE TABLE `pokemon` (
  `ID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `type_2` varchar(100) NOT NULL,
  `ability` varchar(100) NOT NULL,
  `ability_2` varchar(100) NOT NULL,
  `IMG` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `pokemon`
--

INSERT INTO `pokemon` (`ID`, `name`, `type`, `type_2`, `ability`, `ability_2`, `IMG`) VALUES
(1, 'Shroomish', 'Grass', '', 'Effect Spore', 'Poison Heal', 'https://4.bp.blogspot.com/-dKW41aYCRKQ/WFfsfhCEayI/AAAAAAAAD4w/JOOj8pvvvX4T0BwKP29-gAQh32Knad29wCLcB/s1600/285Shroomish.png'),
(2, 'Eevee', 'Normal', '', 'Run away', 'Adaptibility', 'https://img.pokemondb.net/artwork/large/eevee-lets-go.jpg'),
(3, 'Espurr', 'Psychic', '', 'Keen Eye', 'Infiltration', 'https://th.bing.com/th/id/OIP.XZ40_cB-G4OGknSmP3wH8gHaJq?pid=ImgDet&rs=1');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
