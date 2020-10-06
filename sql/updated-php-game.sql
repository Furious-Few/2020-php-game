-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 okt 2020 om 09:51
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
(9, 'luc', ' got 9 iron'),
(10, 'test', ' got 3 iron'),
(11, 'test', ' got 4 iron'),
(12, 'luc', ' got 18 iron'),
(13, 'luc', ' got 10 gold'),
(14, 'luc', ' got 6 iron'),
(15, 'luc', ' got 7 iron'),
(16, 'luc', ' got 2 iron'),
(17, 'luc', ' got 9 iron'),
(18, 'luc', ' got 5 iron'),
(19, 'luc', ' got 19 iron'),
(20, 'luc', ' got 7 iron'),
(21, 'luc', ' got 10 iron'),
(22, 'test', ' got 14 iron'),
(23, 'luc', ' got 6 iron'),
(24, 'luc', ' got 3 diamond'),
(25, 'luc', ' got 9 gold'),
(26, 'luc', ' got 4 diamond'),
(27, 'luc', ' got 17 iron'),
(28, 'luc', ' got 11 iron'),
(29, 'luc', ' got 4 diamond'),
(30, 'luc', ' got 10 iron'),
(31, 'luc', ' got 2 gold'),
(32, 'luc', ' got 16 iron'),
(33, 'luc', ' got 4 iron'),
(34, 'luc', ' got 9 gold'),
(35, 'luc', ' got 11 iron');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `chat`
--

CREATE TABLE `chat` (
  `time` varchar(255) NOT NULL,
  `user` int(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `chat`
--

INSERT INTO `chat` (`time`, `user`, `message`) VALUES
('09:38:08am', 0, 'huts'),
('09:39:09am', 0, 'huts'),
('09:44:16am', 0, 'w'),
('09:44:29am', 0, 'awda'),
('09:44:49am', 0, 'test'),
('09:45:40am', 0, 'nee'),
('09:45:59am', 0, 'w'),
('09:46:02am', 0, 'asdw'),
('09:46:04am', 0, 'w'),
('09:48:43am', 0, 'w'),
('09:52:43am', 0, 'huts'),
('09:52:48am', 0, 'dikke huts'),
('10:51:06am', 0, 'asdw'),
('10:51:18am', 0, 'w'),
('10:52:10am', 0, 'wd'),
('10:54:53am', 0, 'huts'),
('11:08:15am', 0, 'asdw'),
('11:47:07am', 0, 'asdw'),
('11:04:03am', 0, 'huts');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `timer`
--

CREATE TABLE `timer` (
  `user` int(11) NOT NULL,
  `quest` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `h` int(50) NOT NULL,
  `m` int(50) NOT NULL,
  `s` int(50) NOT NULL,
  `spaceship` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `timer`
--

INSERT INTO `timer` (`user`, `quest`, `id`, `date`, `h`, `m`, `s`, `spaceship`) VALUES
(1, '1.2', 86, '2020-10-06', 9, 12, 35, 1),
(1, '2.4', 87, '2020-10-06', 9, 12, 48, 2),
(1, '3.5', 88, '2020-10-06', 9, 12, 50, 3);

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
  `ticketCount` int(255) NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `password`, `email`, `admin`, `iron`, `gold`, `diamond`, `coins`, `ticketCount`, `spaceshipOneUnlocked`, `spaceship1quest`, `spaceshipTwoUnlocked`, `spaceship2quest`, `spaceshipThreeUnlocked`, `spaceship3quest`, `spaceshipFourUnlocked`) VALUES
(1, 'luc', '$2y$10$mSMAWX2EXYyeRILatMx6F.XjTr4bC3AKr4/MAmoHS95nrAZ5d/Tua', 'luc@luc.com', 0, 11, 0, 0, 73270, 11, 1, 1, 1, 0, 1, 0, 0),
(2, 'huts', '$2y$10$eeohB.v0T7HjcDGXrylr6u8n9.zEVYM14ZTy6Jkk9TeWkWKQp47Ai', 'huts@huts.com', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(3, 'test', '$2y$10$xM6c9PSxKTpeh9yA0B7/bOANYV10Ij2ub0aRf5r0laOhqUmZ8f9va', 'test@test.com', 0, 0, 947, 181, 340, 0, 1, 1, 1, 1, 1, 1, 0),
(4, 'test2', '$2y$10$OebjB.tvg2PUH4g1yVj/Ue08BjsnbQZfIjgRegsaK5CY6ZaE6Pvfa', 'test2@test2.com', 0, 230, 100, 0, 2250, 0, 0, 1, 0, 0, 0, 0, 0),
(5, 'test3', '$2y$10$sj71lLwlfPOKySaIQeHyhuJEWKvTp4KV7U7jlfRaEg/DGwOl0EXf.', 'test3@test3.com', 0, 368, 16, 4, 2440, 0, 0, 1, 0, 0, 0, 0, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bank_history`
--
ALTER TABLE `bank_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bank_history`
--
ALTER TABLE `bank_history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT voor een tabel `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
