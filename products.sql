-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 12 apr 2024 om 21:13
-- Serverversie: 5.7.44
-- PHP-versie: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`) VALUES
(1, 'Nigiri', 3.99, 'A Japanese delicacy consisting of fresh raw fish or meat sliced into thin pieces'),
(2, 'Sashimi', 3.95, 'A Japanese delicacy consisting of fresh raw fish or meat sliced into thin pieces'),
(3, 'Maki', 4.49, 'A form of sushi in which sushi rice, raw fish or vegetables are rolled up in a sheet of roasted seaweed'),
(4, 'Temaki', 4.49, 'A Hand-rolled type of sushi characterized by its conical shape. The dish consists of rice, raw fish, and vegetables wrapped in a piece of nori seaweed'),
(5, 'Uramaki', 3.99, 'A type of rolled sushi in which the rice is on the outside, rather than rolled up inside the nori12. It is also known as \"inside-out rolls\"'),
(6, 'Maguro Nigiri', 4.05, 'A hand-pressed sushi rice that\'s topped with slices of tuna.\r\nThe dish has a mild flavor and a rich texture that makes it great for sushi newcomers'),
(7, 'Futomaki', 3.95, 'Futomaki is a type of Japanese sushi that is rolled into a long thick cylinder. A literal translation of futomaki is \"fat rolled sushi.\" It is rice and fillings wrapped in dried, roasted seaweed (nori), and then sliced into smaller bite-sized pieces.'),
(8, 'Futomaki', 3.95, 'Futomaki is a type of Japanese sushi that is rolled into a long thick cylinder. A literal translation of futomaki is \"fat rolled sushi.\" It is rice and fillings wrapped in dried, roasted seaweed (nori), and then sliced into smaller bite-sized pieces.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
