-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 apr 2020 om 14:03
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

CREATE TABLE `auto` (
  `klantid` int(11) NOT NULL,
  `autokmstand` int(11) NOT NULL,
  `autotype` varchar(256) NOT NULL,
  `automerk` varchar(256) NOT NULL,
  `autokenteken` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`klantid`, `autokmstand`, `autotype`, `automerk`, `autokenteken`) VALUES
(1, 309872, '603', 'Tatra', '67-YB-44'),
(2, 80544, 'Corsa', 'opel', '37-TVR-1'),
(3, 4087, 'Polo', 'Volkswagen', '04-JDK-9'),
(1, 143989, 'Doblo', 'Fiat', '95-RP-LR'),
(1, 2043439, 'XJ6', 'Jaguar', 'HV-GB-23'),
(4, 6000, 'c-klasse', 'mercedes', '12-AB-CD-sas'),
(3, 31900, '318', 'BMW', '12-AB-CD'),
(6, 5000, 'AMG', 'mercedes', '54-da-sad');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE `klanten` (
  `klantid` int(11) NOT NULL,
  `klantnaam` text NOT NULL,
  `klantadres` text NOT NULL,
  `klantpostcode` text NOT NULL,
  `klantplaats` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klanten`
--

INSERT INTO `klanten` (`klantid`, `klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES
(3, 'Stoop, Sam', 'stoopplein 45', '2023KL', 'Lekkerkerk'),
(4, 'Efes, Mo', 'Noorderweg 321', '2012 B', 'Schiedam'),
(5, 'Vliet, Sandra van', 'Hoofdweg 7', '3483MN', 'Cappelle'),
(6, 'Kelvin, G', 'Celsiuslaan 273', '4532BV', 'Capelle'),
(8, 'El Ouafa, Saida', 'Binnenweg 229', '3045HG', 'Rotterdam'),
(10, 'Antonic, H', 'Hoofdstraat 54', '2932BB', 'Schiedam'),
(13, 'Nikola, N', 'nikostraat 24', '3028NN', 'Rotterdam'),
(71, 'mo', 'Korenaardwarsstraat, 16', '3023XB', 'Rotterdam'),
(77, 'aap', 'zdennick', '2132VC', 'ROtterdam'),
(78, 'ahmed', 'apenhuis 16', '3023XB', 'Amsterdam'),
(79, 'ahmed', 'Korenaardwarsstraat, 16', '3023XB', 'Rotterdam');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(155) NOT NULL,
  `userpass` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`username`, `userpass`) VALUES
('test', '$2y$12$GRfCvtH5GyCfh9tbJjB7DOOOLrkGL8KleZfhWDC4fUITDXVO7.Gcy\r\n'),
('Samadov', '$2y$10$UuZkDL1sPRuj.cJqeNPu6e9UkdRXN9Gqjch0mthN8XVT97wMTscm.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`klantid`),
  ADD UNIQUE KEY `klantid` (`klantid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klanten`
--
ALTER TABLE `klanten`
  MODIFY `klantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
