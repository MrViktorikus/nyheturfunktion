-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 01 apr 2015 kl 14:42
-- Serverversion: 5.6.21
-- PHP-version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `berzanapp`
--
DROP DATABASE `berzanapp`;
CREATE DATABASE IF NOT EXISTS `berzanapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `berzanapp`;

-- --------------------------------------------------------

--
-- Tabellstruktur `datum`
--

DROP TABLE IF EXISTS `datum`;
CREATE TABLE IF NOT EXISTS `datum` (
`id` int(11) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `datum`
--

INSERT INTO `datum` (`id`, `datum`) VALUES
(1, '2015-01-06 00:00:00'),
(2, '2015-01-02 10:00:00'),
(3, '2015-02-01 00:00:00'),
(4, '2015-01-30 10:00:00');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `fornamn` varchar(20) NOT NULL,
  `efternamn` varchar(20) NOT NULL,
  `anvnamn` varchar(9) NOT NULL,
  `losenord` varchar(20) NOT NULL,
  `iv` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `klass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`fornamn`, `efternamn`, `anvnamn`, `losenord`, `iv`, `mail`, `klass`) VALUES
('albin', 'johansson', 'albjoh456', 'albjoh456', '', '', 'te12e'),
('alexander', 'seidl', 'alesei876', 'alesei876', '', '', 'te12e'),
('martin', 'benno', 'marben431', 'marben431', '', '', 'te12e'),
('mattias', 'Arnestad', 'matarn345', 'matarn345', '', '', 'te12e'),
('truls', 'warvsten', 'truwar567', 'truwar567', '', '', 'te12e');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `datum`
--
ALTER TABLE `datum`
 ADD PRIMARY KEY (`id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`anvnamn`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `datum`
--
ALTER TABLE `datum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
