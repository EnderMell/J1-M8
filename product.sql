-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 apr 2023 om 13:31
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.1.12

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
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `color`) VALUES
(2, 'Kaas', 4.99, 'blue'),
(3, 'Worst', 2.99, 'purple'),
(5, 'Sinasappelsap', 5.99, 'orange'),
(6, 'Koekjes', 4.5, 'brown'),
(7, 'Brood', 3.99, 'brown'),
(8, 'milk', 2.5, 'white'),
(9, 'rice', 6, 'white'),
(10, 'curry', 1.99, 'red'),
(11, 'Apple', 0.99, 'red'),
(12, 'banana', 0.99, 'yellow');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
