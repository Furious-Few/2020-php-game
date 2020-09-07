-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 sep 2020 om 11:44
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
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `iron` int(255) NOT NULL,
  `gold` int(255) NOT NULL,
  `diamond` int(255) NOT NULL,
  `coins` int(255) NOT NULL,
  `spaceshipOneUnlocked` tinyint(1) NOT NULL,
  `spaceship1quest` tinyint(1) NOT NULL,
  `spaceshipTwoUnlocked` tinyint(1) NOT NULL,
  `spaceship2quest` tinyint(1) NOT NULL,
  `spaceshipThreeUnlocked` tinyint(1) NOT NULL,
  `spaceship3quest` tinyint(1) NOT NULL,
  `spaceshipFourUnlocked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `admin`, `iron`, `gold`, `diamond`, `coins`, `spaceshipOneUnlocked`, `spaceship1quest`, `spaceshipTwoUnlocked`, `spaceship2quest`, `spaceshipThreeUnlocked`, `spaceship3quest`, `spaceshipFourUnlocked`) VALUES
(1, 'luc', '$2y$10$mSMAWX2EXYyeRILatMx6F.XjTr4bC3AKr4/MAmoHS95nrAZ5d/Tua', 'luc@luc.com', 0, 302, 49, 16, 60580, 1, 0, 1, 1, 1, 0, 0),
(2, 'huts', '$2y$10$eeohB.v0T7HjcDGXrylr6u8n9.zEVYM14ZTy6Jkk9TeWkWKQp47Ai', 'huts@huts.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'test', '$2y$10$xM6c9PSxKTpeh9yA0B7/bOANYV10Ij2ub0aRf5r0laOhqUmZ8f9va', 'test@test.com', 0, 397, 947, 181, 3660, 0, 0, 0, 0, 0, 0, 0),
(4, 'test2', '$2y$10$OebjB.tvg2PUH4g1yVj/Ue08BjsnbQZfIjgRegsaK5CY6ZaE6Pvfa', 'test2@test2.com', 0, 230, 100, 0, 2250, 0, 0, 0, 0, 0, 0, 0),
(5, 'test3', '$2y$10$sj71lLwlfPOKySaIQeHyhuJEWKvTp4KV7U7jlfRaEg/DGwOl0EXf.', 'test3@test3.com', 0, 368, 16, 4, 2440, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
