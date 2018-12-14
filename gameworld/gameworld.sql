-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 14 dec 2018 om 17:43
-- Serverversie: 10.3.10-MariaDB-log
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworld`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gamecategory`
--

CREATE TABLE `gamecategory` (
  `categoryid` int(3) NOT NULL,
  `categorytitle` varchar(50) NOT NULL,
  `categoryimage` varchar(100) NOT NULL,
  `categorydiscription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gamecategory`
--

INSERT INTO `gamecategory` (`categoryid`, `categorytitle`, `categoryimage`, `categorydiscription`) VALUES
(1, 'PS4', '', ''),
(2, 'PC', '', ''),
(3, 'XBOX', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `gameId` int(5) NOT NULL,
  `gameTitle` varchar(50) NOT NULL,
  `gameDiscription` text NOT NULL,
  `gameImage` varchar(100) NOT NULL,
  `gamePrice` decimal(5,2) NOT NULL,
  `gameCategoryId` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`gameId`, `gameTitle`, `gameDiscription`, `gameImage`, `gamePrice`, `gameCategoryId`) VALUES
(1, 'Anthem', 'Discription', 'images/anthemps4', '64.98', 1),
(2, 'Anthem', 'Discription', 'images/Anthemxbox', '64.98', 3),
(3, 'Spyro & Crash Bundle', 'Discription', 'images/spyrocrash', '64.98', 1),
(4, 'Spyro The Dragon - Reignited', 'Discription', 'images/spyroxbox', '39.98', 3),
(5, 'Destiny 2', 'Discription', 'images/d2ps4', '64.98', 1),
(6, 'Destiny 2', 'Discription', 'images/d2pc', '64.98', 2),
(7, 'Destiny 2', 'Discription', 'images/d2xbox', '64.98', 3),
(8, 'Call of Duty - WWII', 'Discription', 'images/codww2ps4', '64.98', 1),
(9, 'Call of Duty - WWII', 'Discription', 'images/codww2pc', '64.98', 2),
(10, 'Call of Duty - WWII', 'Discription', 'images/codww2xbox', '64.98', 3),
(11, 'World of Warcraft', 'Discription', 'images/wowpc', '44.98', 2),
(12, 'Need for Speed Payback', 'Discription', 'images/nfspps4', '64.98', 1),
(13, 'Need for Speed Payback', 'Discription', 'images/nfspxbox', '64.98', 3),
(14, 'Terraria', 'Discription', 'images/terrariapc', '19.98', 2),
(15, 'Fortnite', 'Discription', 'images/fortnite', '39.98', 2),
(16, 'Overwatch', 'Discription', 'images/ops4', '59.98', 1),
(17, 'Overwatch', 'Discription', 'images/opc', '59.98', 2),
(18, 'Overwatch', 'Discription', 'images/oxbox', '59.98', 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gamecategory`
--
ALTER TABLE `gamecategory`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
