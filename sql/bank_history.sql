-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 sep 2020 om 11:43
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_game`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bank_history`
--

CREATE TABLE `bank_history` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bank_history`
--

INSERT INTO `bank_history` (`id`, `name`, `message`) VALUES
(1, 'luc', 'purchased spaceship 1'),
(2, 'ravi', 'sold 15 iron'),
(3, 'luc', 'luc got 3 gold'),
(4, 'luc', 'luc got 6 gold'),
(5, 'luc', ' got 4 gold'),
(6, 'luc', ' got 10 gold'),
(7, 'luc', ' got 2 diamond'),
(8, 'luc', ' got 13 iron'),
(9, 'luc', ' got 9 iron');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bank_history`
--
ALTER TABLE `bank_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bank_history`
--
ALTER TABLE `bank_history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
