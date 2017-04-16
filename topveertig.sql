-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 apr 2017 om 00:06
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topveertig`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aantal_weeken_hitlijst`
--

CREATE TABLE `aantal_weeken_hitlijst` (
  `id` int(11) NOT NULL,
  `aantal_weeken` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artiesten`
--

CREATE TABLE `artiesten` (
  `id` int(11) NOT NULL,
  `artiest_een` varchar(45) DEFAULT NULL,
  `artiest_twee` varchar(45) DEFAULT NULL,
  `lied_id` int(11) NOT NULL,
  `lied_release_datum_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hoogste_notering`
--

CREATE TABLE `hoogste_notering` (
  `id` int(11) NOT NULL,
  `notering` int(11) DEFAULT NULL,
  `lied_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lied`
--

CREATE TABLE `lied` (
  `id` int(11) NOT NULL,
  `release_datum_id` int(11) NOT NULL,
  `aantal_weeken_hitlijst_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `positie`
--

CREATE TABLE `positie` (
  `id` int(11) NOT NULL,
  `positie` int(11) DEFAULT NULL,
  `artiesten_id` int(11) NOT NULL,
  `lied_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `release_datum`
--

CREATE TABLE `release_datum` (
  `id` int(11) NOT NULL,
  `release` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `aantal_weeken_hitlijst`
--
ALTER TABLE `aantal_weeken_hitlijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `artiesten`
--
ALTER TABLE `artiesten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_artiesten_lied1_idx` (`lied_id`,`lied_release_datum_id`);

--
-- Indexen voor tabel `hoogste_notering`
--
ALTER TABLE `hoogste_notering`
  ADD PRIMARY KEY (`id`,`lied_id`),
  ADD KEY `fk_hoogste_notering_lied1_idx` (`lied_id`);

--
-- Indexen voor tabel `lied`
--
ALTER TABLE `lied`
  ADD PRIMARY KEY (`id`,`release_datum_id`,`aantal_weeken_hitlijst_id`),
  ADD KEY `fk_lied_release_datum1_idx` (`release_datum_id`),
  ADD KEY `fk_lied_aantal_weeken_hitlijst1_idx` (`aantal_weeken_hitlijst_id`);

--
-- Indexen voor tabel `positie`
--
ALTER TABLE `positie`
  ADD PRIMARY KEY (`id`,`artiesten_id`,`lied_id`),
  ADD KEY `fk_positie_artiesten_idx` (`artiesten_id`),
  ADD KEY `fk_positie_lied1_idx` (`lied_id`);

--
-- Indexen voor tabel `release_datum`
--
ALTER TABLE `release_datum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `aantal_weeken_hitlijst`
--
ALTER TABLE `aantal_weeken_hitlijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `artiesten`
--
ALTER TABLE `artiesten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `hoogste_notering`
--
ALTER TABLE `hoogste_notering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `lied`
--
ALTER TABLE `lied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `positie`
--
ALTER TABLE `positie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `release_datum`
--
ALTER TABLE `release_datum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `artiesten`
--
ALTER TABLE `artiesten`
  ADD CONSTRAINT `fk_artiesten_lied1` FOREIGN KEY (`lied_id`,`lied_release_datum_id`) REFERENCES `lied` (`id`, `release_datum_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `hoogste_notering`
--
ALTER TABLE `hoogste_notering`
  ADD CONSTRAINT `fk_hoogste_notering_lied1` FOREIGN KEY (`lied_id`) REFERENCES `lied` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `lied`
--
ALTER TABLE `lied`
  ADD CONSTRAINT `fk_lied_aantal_weeken_hitlijst1` FOREIGN KEY (`aantal_weeken_hitlijst_id`) REFERENCES `aantal_weeken_hitlijst` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lied_release_datum1` FOREIGN KEY (`release_datum_id`) REFERENCES `release_datum` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `positie`
--
ALTER TABLE `positie`
  ADD CONSTRAINT `fk_positie_artiesten` FOREIGN KEY (`artiesten_id`) REFERENCES `artiesten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_positie_lied1` FOREIGN KEY (`lied_id`) REFERENCES `lied` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
