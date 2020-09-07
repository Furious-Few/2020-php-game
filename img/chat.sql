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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
