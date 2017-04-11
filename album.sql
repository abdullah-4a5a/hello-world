-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 mrt 2017 om 21:42
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) DEFAULT NULL,
  `artiesten_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artiesten`
--

CREATE TABLE `artiesten` (
  `id` int(11) NOT NULL,
  `artiesten naam` varchar(255) DEFAULT NULL,
  `voornaam` varchar(255) DEFAULT NULL,
  `achternaam` varchar(255) DEFAULT NULL,
  `geboortedatum` date DEFAULT NULL,
  `platenlabel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `platenlabel`
--

CREATE TABLE `platenlabel` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) DEFAULT NULL,
  `locatie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studio`
--

CREATE TABLE `studio` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) DEFAULT NULL,
  `locatie` varchar(255) DEFAULT NULL,
  `apparatuur` varchar(255) DEFAULT NULL,
  `software` varchar(255) DEFAULT NULL,
  `artiesten_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`,`artiesten_id`),
  ADD KEY `fk_album_artiesten1_idx` (`artiesten_id`);

--
-- Indexen voor tabel `artiesten`
--
ALTER TABLE `artiesten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_artiesten_platenlabel1_idx` (`platenlabel_id`);

--
-- Indexen voor tabel `platenlabel`
--
ALTER TABLE `platenlabel`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id`,`artiesten_id`),
  ADD KEY `fk_studio_artiesten_idx` (`artiesten_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `fk_album_artiesten1` FOREIGN KEY (`artiesten_id`) REFERENCES `artiesten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `artiesten`
--
ALTER TABLE `artiesten`
  ADD CONSTRAINT `fk_artiesten_platenlabel1` FOREIGN KEY (`platenlabel_id`) REFERENCES `platenlabel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `studio`
--
ALTER TABLE `studio`
  ADD CONSTRAINT `fk_studio_artiesten` FOREIGN KEY (`artiesten_id`) REFERENCES `artiesten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
