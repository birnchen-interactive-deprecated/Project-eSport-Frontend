-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 15. Mrz 2019 um 11:35
-- Server-Version: 5.7.25-0ubuntu0.16.04.2
-- PHP-Version: 7.1.14

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `Project-eSport`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bracket_mode`
--

CREATE TABLE `bracket_mode` (
  `bracket_mode_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `bracket_mode`
--

INSERT INTO `bracket_mode` (`bracket_mode_id`, `name`, `description`) VALUES
(1, 'Single Elimination', 'Normales Single Elimination'),
(2, 'Double Elimination', 'Winner und Looser Bracket');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bracket_mode_i18n`
--

CREATE TABLE `bracket_mode_i18n` (
  `bracket_mode_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `bracket_mode_i18n`
--

INSERT INTO `bracket_mode_i18n` (`bracket_mode_id`, `language_id`, `name`, `description`) VALUES
(1, 2, 'Single Elimination', 'Normal Single Elimination'),
(2, 2, 'Double Elimination', 'Winner and Looser Bracket');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cups`
--

CREATE TABLE `cups` (
  `cup_id` int(11) NOT NULL,
  `cup_name` varchar(45) DEFAULT NULL,
  `season` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `cups`
--

INSERT INTO `cups` (`cup_id`, `cup_name`, `season`) VALUES
(1, 'GERTA Cup', 1),
(2, 'GERTA Cup', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `games`
--

CREATE TABLE `games` (
  `games_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `games`
--

INSERT INTO `games` (`games_id`, `name`, `description`) VALUES
(1, 'Rocket League', 'Rocket League von Psyonix');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `games_i18n`
--

CREATE TABLE `games_i18n` (
  `games_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `games_i18n`
--

INSERT INTO `games_i18n` (`games_id`, `language_id`, `name`, `description`) VALUES
(1, 2, 'Rocket League', 'Rocket League from Psyonix');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `gender`
--

INSERT INTO `gender` (`gender_id`, `name`) VALUES
(1, 'Männlich'),
(2, 'Weiblich'),
(3, 'Divers');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gender_i18n`
--

CREATE TABLE `gender_i18n` (
  `gender_id` int(11) NOT NULL,
  `language_id` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `gender_i18n`
--

INSERT INTO `gender_i18n` (`gender_id`, `language_id`, `name`) VALUES
(1, '2', 'Male'),
(2, '2', 'Female'),
(3, '2', 'Miscellaneous');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `locale` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `language`
--

INSERT INTO `language` (`language_id`, `name`, `locale`) VALUES
(1, 'Deutsch', 'de-DE'),
(2, 'Englisch', 'en-EN');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `language_i18n`
--

CREATE TABLE `language_i18n` (
  `id` int(11) NOT NULL,
  `language_id` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `language_i18n`
--

INSERT INTO `language_i18n` (`id`, `language_id`, `name`) VALUES
(1, '2', 'German'),
(2, '2', 'English');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `main_team`
--

CREATE TABLE `main_team` (
  `team_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `headquarter_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `short_code` varchar(32) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `main_team`
--

INSERT INTO `main_team` (`team_id`, `owner_id`, `headquarter_id`, `name`, `short_code`, `description`) VALUES
(1, 22, 1, 'Robotic Elite Clan', 'REC', 'Auch Roboter sind Menschen'),
(2, 4, 2, 'Captain Viper', 'CV', 'Man of the Captain -> Viper'),
(3, 14, 1, 'Timeout Gaming', 'TG', 'The time is going out for the Game'),
(4, 25, 1, 'Stealth7 eSports', 'S7', 'Invisible Masters'),
(5, 10, 1, 'AcTive', '', ''),
(6, 19, 1, 'Team Aspect', '', ''),
(7, 44, 1, 'eQuality.', '', ''),
(8, 9, 1, 'Thinking', '', ''),
(9, 17, 1, 'eSport Rhein Neckar', 'ERN', ''),
(10, 58, 1, 'GHR E-Sports', 'GHR', ''),
(11, 41, 1, 'The Dark Start', 'GHR', ''),
(12, 56, 1, 'Esport BERG', 'GHR', ''),
(13, 42, 1, 'Orbital Gaming', 'OG', ''),
(14, 2, 1, 'Stage 5 Gaming Training', 'S5GT', ''),
(15, 71, 1, 'Safari Force', '', ''),
(16, 3, 1, 'Baby Driver', 'BDVR', 'Niyaris Team');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1552509579),
('m190216_190851_db_scheme', 1552509582),
('m190228_074605_tournaments', 1552509605),
('m190305_114418_i18n_tabels', 1552509605),
('m190306_075018_base_tournaments', 1552509605),
('m190306_075034_base_teams', 1552509605),
('m190306_075047_base_sub_teams', 1552509605),
('m190306_075100_base_team_member', 1552509605),
('m190306_075111_base_sub_team_member', 1552509605);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nationality`
--

CREATE TABLE `nationality` (
  `nationality_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `nationality`
--

INSERT INTO `nationality` (`nationality_id`, `name`) VALUES
(1, 'Deutschland'),
(2, 'Österreich'),
(3, 'Schweiz'),
(4, 'Frankreich'),
(5, 'Gross Britannien'),
(6, 'Irland'),
(7, 'Belgien'),
(8, 'Italien'),
(9, 'Spanien'),
(10, 'Portugal'),
(11, 'Island'),
(12, 'Norwegen'),
(13, 'Schweden'),
(14, 'Finnland'),
(15, 'Däemark'),
(16, 'Estland'),
(17, 'Lettland'),
(18, 'Litauen'),
(19, 'Polen'),
(20, 'Belarus'),
(21, 'Niederlande'),
(22, 'Ukraine'),
(23, 'Tschechische Republik'),
(24, 'Slowakische Republik'),
(25, 'Ungarn'),
(26, 'Rumänien'),
(27, 'Bulgarien'),
(28, 'Kroatien'),
(29, 'Bosnien und Herzegowina'),
(30, 'Serbien'),
(31, 'Albanien'),
(32, 'Griechenland'),
(33, 'Moldau'),
(34, 'Georgien'),
(35, 'Monaco');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `player_participating`
--

CREATE TABLE `player_participating` (
  `tournament_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `checked_in` tinyint(4) DEFAULT NULL,
  `disqualified` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `player_participating`
--

INSERT INTO `player_participating` (`tournament_id`, `user_id`, `checked_in`, `disqualified`) VALUES
(4, 3, NULL, NULL),
(4, 4, NULL, NULL),
(4, 22, NULL, NULL),
(4, 84, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sub_team`
--

CREATE TABLE `sub_team` (
  `sub_team_id` int(11) NOT NULL,
  `main_team_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `tournament_mode_id` int(11) NOT NULL,
  `team_captain_id` int(11) NOT NULL,
  `headquarter_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `short_code` varchar(32) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `disqualified` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `sub_team`
--

INSERT INTO `sub_team` (`sub_team_id`, `main_team_id`, `game_id`, `tournament_mode_id`, `team_captain_id`, `headquarter_id`, `name`, `short_code`, `description`, `disqualified`) VALUES
(1, 1, 1, 2, 22, 1, 'Robotic Elite Clan', 'REC', 'Double Action', 0),
(2, 1, 1, 3, 22, 1, 'Robotic Elite Clan', 'REC', 'Tripple Action', 0),
(3, 2, 1, 2, 4, 2, 'Captain Viper', 'CV', 'Das 2v2 Team', 0),
(4, 2, 1, 3, 4, 2, 'Captain Viper', 'CV', 'Das 3v3 Team', 0),
(5, 3, 1, 3, 14, 1, 'Timeout Gaming', 'TG', 'timeout is coming', 0),
(6, 3, 1, 3, 15, 1, 'Timeout', 'TG', 'timeout is coming', 0),
(7, 4, 1, 3, 38, 1, 'Stealth7 eSports', 'S7', 'invisible Masters', 0),
(8, 4, 1, 3, 65, 1, 'Hoch und Weit', 'S7', 'invisible Masters', 0),
(9, 4, 1, 2, 37, 1, 'Stealth7 eSports', 'S7', 'Das 2v2 Team', 0),
(10, 3, 1, 2, 53, 1, 'Timeout Gaming', 'TG', 'Das 2v2 Team', 0),
(11, 5, 1, 2, 33, 1, 'AcTive', '', '', 0),
(12, 5, 1, 3, 33, 1, 'AcTive', '', '', 0),
(13, 6, 1, 2, 19, 1, 'Team Acpect', '', '', 0),
(14, 6, 1, 3, 19, 1, 'Team Acpect', '', '', 0),
(15, 2, 1, 2, 4, 2, 'Different Bünzlis', 'CV', 'Das 2v2 Team', 0),
(16, 8, 1, 2, 9, 1, 'Thinking', '', '', 0),
(17, 8, 1, 3, 9, 1, 'Thinking', '', '', 0),
(18, 13, 1, 2, 42, 1, 'Panicflip', '', '', 0),
(19, 7, 1, 3, 44, 1, 'eQuality.', '', '', 0),
(20, 9, 1, 3, 17, 1, 'eSport Rhein-Neckar', 'ERN', '', 0),
(21, 10, 1, 3, 58, 1, 'Team Agency', 'GHR', '', 0),
(22, 11, 1, 3, 41, 1, 'The Dark Start', 'TGS', '', 0),
(23, 12, 1, 3, 56, 1, 'Esport BERG', 'BERG', '', 0),
(24, 15, 1, 3, 71, 1, 'Safari Force', 'SF', '', 0),
(25, 14, 1, 2, 80, 1, 'Stage 5 Gaming Training', 'S5GT', '', 0),
(26, 16, 1, 2, 3, 1, 'Baby Driver', 'BDVR', '2v2 Team', 0),
(27, 16, 1, 3, 3, 1, 'Baby Driver', 'BDVR', '3v3 Team', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sub_team_member`
--

CREATE TABLE `sub_team_member` (
  `sub_team_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_sub` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `sub_team_member`
--

INSERT INTO `sub_team_member` (`sub_team_id`, `user_id`, `is_sub`) VALUES
(1, 2, 0),
(2, 2, 0),
(26, 3, 1),
(27, 3, 0),
(3, 4, 0),
(4, 4, 0),
(3, 6, 1),
(4, 6, 0),
(16, 8, 0),
(17, 8, 0),
(16, 9, 0),
(17, 9, 0),
(8, 10, 0),
(9, 10, 1),
(4, 11, 1),
(15, 11, 0),
(4, 12, 1),
(3, 13, 0),
(4, 13, 0),
(5, 14, 0),
(6, 15, 0),
(6, 16, 0),
(20, 17, 0),
(13, 19, 0),
(14, 19, 0),
(1, 22, 0),
(2, 22, 0),
(8, 25, 0),
(5, 30, 1),
(10, 30, 0),
(8, 32, 1),
(8, 33, 0),
(9, 33, 0),
(26, 34, 0),
(27, 34, 0),
(7, 35, 0),
(9, 35, 0),
(7, 36, 1),
(7, 37, 0),
(9, 37, 0),
(7, 38, 0),
(9, 38, 1),
(6, 39, 0),
(19, 40, 0),
(22, 41, 0),
(18, 42, 0),
(18, 43, 0),
(19, 44, 0),
(19, 45, 0),
(8, 49, 0),
(9, 49, 0),
(13, 52, 0),
(14, 52, 1),
(5, 53, 0),
(10, 53, 0),
(6, 54, 1),
(23, 56, 1),
(5, 57, 0),
(25, 57, 0),
(21, 58, 0),
(21, 59, 0),
(23, 62, 0),
(23, 63, 0),
(22, 64, 0),
(8, 65, 0),
(20, 66, 1),
(5, 67, 1),
(23, 68, 1),
(21, 70, 0),
(24, 71, 0),
(24, 72, 0),
(24, 73, 0),
(22, 74, 0),
(14, 75, 0),
(14, 76, 0),
(8, 77, 0),
(20, 78, 0),
(25, 80, 0),
(17, 83, 0),
(2, 85, 0),
(15, 86, 0),
(21, 87, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team_member`
--

CREATE TABLE `team_member` (
  `team_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `team_member`
--

INSERT INTO `team_member` (`team_id`, `user_id`) VALUES
(1, 2),
(2, 6),
(8, 8),
(2, 11),
(2, 12),
(2, 13),
(3, 15),
(3, 16),
(3, 30),
(5, 32),
(5, 33),
(4, 35),
(4, 36),
(4, 37),
(4, 38),
(3, 39),
(7, 40),
(13, 43),
(7, 45),
(5, 49),
(6, 52),
(3, 53),
(3, 54),
(3, 57),
(14, 57),
(10, 59),
(12, 62),
(12, 63),
(11, 64),
(4, 65),
(9, 66),
(3, 67),
(12, 68),
(1, 69),
(10, 70),
(15, 72),
(15, 73),
(11, 74),
(6, 75),
(6, 76),
(4, 77),
(9, 78),
(14, 80),
(8, 83),
(14, 84),
(1, 85),
(2, 86),
(10, 87);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team_participating`
--

CREATE TABLE `team_participating` (
  `tournament_id` int(11) NOT NULL,
  `sub_team_id` int(11) NOT NULL,
  `checked_in` tinyint(4) DEFAULT NULL,
  `disqualified` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `team_participating`
--

INSERT INTO `team_participating` (`tournament_id`, `sub_team_id`, `checked_in`, `disqualified`) VALUES
(5, 1, NULL, NULL),
(5, 3, NULL, NULL),
(5, 15, NULL, NULL),
(5, 25, NULL, NULL),
(6, 2, NULL, NULL),
(6, 4, NULL, NULL),
(6, 22, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tournaments`
--

CREATE TABLE `tournaments` (
  `tournament_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `mode_id` int(11) NOT NULL,
  `rules_id` int(11) NOT NULL,
  `bracket_id` int(11) NOT NULL,
  `cup_id` int(11) NOT NULL,
  `tournament_name` varchar(255) NOT NULL,
  `tournament_description` varchar(255) DEFAULT NULL,
  `dt_starting_time` datetime NOT NULL,
  `dt_register_begin` datetime NOT NULL,
  `dt_register_end` datetime NOT NULL,
  `dt_checkin_begin` datetime NOT NULL,
  `dt_checkin_ends` datetime NOT NULL,
  `has_password` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tournaments`
--

INSERT INTO `tournaments` (`tournament_id`, `game_id`, `mode_id`, `rules_id`, `bracket_id`, `cup_id`, `tournament_name`, `tournament_description`, `dt_starting_time`, `dt_register_begin`, `dt_register_end`, `dt_checkin_begin`, `dt_checkin_ends`, `has_password`, `password`) VALUES
(0, 1, 1, 1, 2, 1, 'Day 1', 'Erster Spieltag im 1v1', '2018-11-16 19:30:00', '2018-11-05 00:00:00', '2018-11-16 18:30:00', '2018-11-16 19:00:00', '2018-11-16 19:15:00', 0, NULL),
(1, 1, 1, 1, 2, 2, 'Day 1', 'Erster Spieltag im 1v1', '2019-03-01 18:30:00', '2019-02-18 00:00:00', '2019-03-01 17:00:00', '2019-03-01 18:00:00', '2019-03-01 18:15:00', 0, NULL),
(2, 1, 2, 1, 2, 2, 'Day 1', 'Erster Spieltag im 2v2', '2019-03-02 18:00:00', '2019-02-18 00:00:00', '2019-03-02 16:30:00', '2019-03-02 17:30:00', '2019-03-02 17:45:00', 0, NULL),
(3, 1, 3, 1, 2, 2, 'Day 1', 'Erster Spieltag im 3v3', '2019-03-03 17:30:00', '2019-03-03 00:00:00', '2019-02-18 16:00:00', '2019-03-03 17:00:00', '2019-03-03 17:15:00', 0, NULL),
(4, 1, 1, 1, 2, 2, 'Day 2', 'Zweiter Spieltag im 1v1', '2019-03-15 18:30:00', '2019-03-04 00:00:00', '2019-03-15 17:00:00', '2019-03-15 18:00:00', '2019-03-15 18:15:00', 0, NULL),
(5, 1, 2, 1, 2, 2, 'Day 2', 'Zweiter Spieltag im 2v2', '2019-03-16 18:00:00', '2019-03-04 00:00:00', '2019-03-16 16:30:00', '2019-03-16 17:30:00', '2019-03-16 17:45:00', 0, NULL),
(6, 1, 3, 1, 2, 2, 'Day 2', 'Zweiter Spieltag im 3v3', '2019-03-17 17:30:00', '2019-03-04 00:00:00', '2019-03-17 16:00:00', '2019-03-17 17:00:00', '2019-03-17 17:15:00', 0, NULL),
(7, 1, 1, 1, 2, 2, 'Day 3', 'Dritter Spieltag im 1v1', '2019-03-29 18:30:00', '2019-03-18 00:00:00', '2019-03-29 17:00:00', '2019-03-29 18:00:00', '2019-03-29 18:15:00', 0, NULL),
(8, 1, 2, 1, 2, 2, 'Day 3', 'Dritter Spieltag im 2v2', '2019-03-30 18:00:00', '2019-03-18 00:00:00', '2019-03-30 16:30:00', '2019-03-30 17:30:00', '2019-03-30 17:45:00', 0, NULL),
(9, 1, 3, 1, 2, 2, 'Day 3', 'Dritter Spieltag im 3v3', '2019-03-31 17:30:00', '2019-03-18 00:00:00', '2019-03-31 16:00:00', '2019-03-31 17:00:00', '2019-03-31 17:15:00', 0, NULL),
(10, 1, 1, 1, 2, 2, 'Day 4', 'Vierter Spieltag im 1v1', '2019-04-12 18:30:00', '2019-04-01 00:00:00', '2019-04-12 17:00:00', '2019-04-12 18:00:00', '2019-04-12 18:15:00', 0, NULL),
(11, 1, 2, 1, 2, 2, 'Day 4', 'Vierter Spieltag im 2v2', '2019-04-13 18:00:00', '2019-04-01 00:00:00', '2019-04-13 16:30:00', '2019-04-13 17:30:00', '2019-04-13 17:45:00', 0, NULL),
(12, 1, 3, 1, 2, 2, 'Day 4', 'Vierter Spieltag im 3v3', '2019-04-14 17:30:00', '2019-04-01 00:00:00', '2019-04-14 16:00:00', '2019-04-14 17:00:00', '2019-04-14 17:15:00', 0, NULL),
(13, 1, 1, 1, 2, 2, 'Day 5', 'Fünfter Spieltag im 1v1', '2019-04-26 18:30:00', '2019-04-15 00:00:00', '2019-04-26 17:00:00', '2019-04-26 18:00:00', '2019-04-26 18:15:00', 0, NULL),
(14, 1, 2, 1, 2, 2, 'Day 5', 'Fünfter Spieltag im 2v2', '2019-04-27 18:00:00', '2019-04-15 00:00:00', '2019-04-27 16:30:00', '2019-04-27 17:30:00', '2019-04-27 17:45:00', 0, NULL),
(15, 1, 3, 1, 2, 2, 'Day 5', 'Fünfter Spieltag im 3v3', '2019-04-28 17:30:00', '2019-04-15 00:00:00', '2019-04-28 16:00:00', '2019-04-28 17:00:00', '2019-04-28 17:15:00', 0, NULL),
(16, 1, 1, 1, 2, 2, 'Day 6', 'Sechster Spieltag im 1v1', '2019-05-10 18:30:00', '2019-04-29 00:00:00', '2019-05-10 17:00:00', '2019-05-10 18:00:00', '2019-05-10 18:15:00', 0, NULL),
(17, 1, 2, 1, 2, 2, 'Day 6', 'Sechster Spieltag im 2v2', '2019-05-11 18:00:00', '2019-04-29 00:00:00', '2019-05-11 16:30:00', '2019-05-11 17:30:00', '2019-05-11 17:45:00', 0, NULL),
(18, 1, 3, 1, 2, 2, 'Day 6', 'Sechster Spieltag im 3v3', '2019-05-12 17:30:00', '2019-04-29 00:00:00', '2019-05-11 16:00:00', '2019-05-12 17:00:00', '2019-05-12 17:15:00', 0, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tournament_encounter`
--

CREATE TABLE `tournament_encounter` (
  `encounter_id` int(11) NOT NULL,
  `tournament_id` int(11) NOT NULL,
  `winner_looser` tinyint(1) DEFAULT NULL,
  `completed` tinyint(4) DEFAULT NULL,
  `matches_to_play` int(11) NOT NULL,
  `tournament_round` int(11) NOT NULL,
  `team_1_id` int(11) DEFAULT NULL,
  `team_2_id` int(11) DEFAULT NULL,
  `player_1_id` int(11) DEFAULT NULL,
  `player_2_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tournament_encounter_points`
--

CREATE TABLE `tournament_encounter_points` (
  `encounter_points_id` int(11) NOT NULL,
  `encounter_id` int(11) NOT NULL,
  `game_round` int(11) NOT NULL,
  `screen_team_1` varchar(255) DEFAULT NULL,
  `screen_team_2` varchar(255) DEFAULT NULL,
  `goals_team_1` int(11) DEFAULT NULL,
  `goals_team_2` int(11) DEFAULT NULL,
  `replay_team_1` varchar(255) DEFAULT NULL,
  `replay_team_2` varchar(255) DEFAULT NULL,
  `accepted` tinyint(4) DEFAULT NULL,
  `winner_team_id` int(11) DEFAULT NULL,
  `winner_player_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tournament_mode`
--

CREATE TABLE `tournament_mode` (
  `mode_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `main_player` int(11) NOT NULL,
  `sub_player` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tournament_mode`
--

INSERT INTO `tournament_mode` (`mode_id`, `game_id`, `name`, `main_player`, `sub_player`, `description`) VALUES
(1, 1, '1v1', 1, 0, '1v1 Spieler gegen Spieler'),
(2, 1, '2v2', 2, 1, '2v2 Team mit zwei Leuten gegen Team mit zwei Leuten'),
(3, 1, '3v3', 3, 2, '3v3 Team mit drei Leuten gegen Team mit drei Leuten');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tournament_mode_i18n`
--

CREATE TABLE `tournament_mode_i18n` (
  `mode_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tournament_mode_i18n`
--

INSERT INTO `tournament_mode_i18n` (`mode_id`, `language_id`, `name`, `description`) VALUES
(1, 2, '1v1', '1v1 Player versus Player'),
(2, 2, '2v2', '2v2 Team versus Team'),
(3, 2, '3v3', '3v3 Team versus Team');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tournament_rules`
--

CREATE TABLE `tournament_rules` (
  `rules_id` int(11) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tournament_rules`
--

INSERT INTO `tournament_rules` (`rules_id`, `game_id`, `name`) VALUES
(1, 1, 'Gerta Cup Rules');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tournament_subrules`
--

CREATE TABLE `tournament_subrules` (
  `rules_id` int(11) NOT NULL,
  `subrule_id` int(11) NOT NULL,
  `rules_paragraph` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tournament_subrules`
--

INSERT INTO `tournament_subrules` (`rules_id`, `subrule_id`, `rules_paragraph`, `name`, `description`) VALUES
(1, 0, 1, 'Definition', '<u>1.1 Gerta-Cup</u>\r\n</p>\r\n1.1.1 Der Gerta-Cup richtet sich an alle Rocket League Spieler im Raum EU, welche mindestens einen deutschsprachigen Teammember oder –Captain zu Kommunikationszwecken hat.\r\n</p>\r\n1.1.2 Der Gerta-Cup ist Teil des Project eSport welcher Teil der Birnchen Interactive ist.\r\n</p>\r\n<u>1.2 Sanktionen</u>\r\n</p>\r\n1.2.1 Eine Verwarnung führt in erster Linie noch keine weiteren Maßnahmen mit sich. Es wird lediglich auf einen Fehler, bzw. Regelbruch hingewiesen und darum gebeten, dass dieser in Zukunft berücksichtigt wird. Werden vermehrt die Regeln verletzt, kann dies auch zu einem Strike führen.\r\n</p>\r\n1.2.2 Ein Strike führt einen sofortigen Ausschluss aus dem aktuellen Turniergeschehen mit sich. Weitere Teilnahmen im Laufe der Season sind jedoch noch möglich. \r\n</p>\r\n1.2.3 Zwei Strikes führen zu einer Disqualifikation und damit zum Ausschluss des Spielers bzw. des Teams aus der aktuellen Season.\r\n</p>\r\n1.2.4 Bei einem Seasonwechsel erfolgt eine Übernahme der Strikes aus der vergangen Season:\r\n</p>\r\n1.2.4.1 Ein erhaltener Strike bleibt für eine volle weitere Season als Strike vorbelastend vorhanden und verfällt erst in deren Anschluss.\r\n</p>\r\n1.2.4.2 Eine erhaltene Disqualifikation wird halbiert und  als Strike in die neue Season als Vorbelastung mit übernommen.\r\n</p>\r\n1.2.4.3 Ist ein Strike bereits älter als die vergangene Season, so verfällt dieser und wird nicht mit übernommen.\r\n</p>\r\n<u>1.3 Tryout-Teams</u>\r\n</p>\r\n1.3.1 Ein Tryout-Team ist ein für jedes Turnier neu zusammengesetztes Team bestehend aus Spielern, welche keine eigenen Teams haben. \r\n</p>\r\n1.3.2 Einzelspieler, welche an Team-Turnieren Interesse haben und sich rechtzeitig gemäß der Anmeldezeit §3.2 bei der Turnierleitung gemeldet haben, werden von dieser in Tryout-Teams gesteckt. \r\n</p>\r\n1.3.3 Die Ranking-Punkte für Spieler des Tryout-Teams werden für das Cup-Ranking nicht gewertet, da sich die Teams nach jedem Turnier auflösen.\r\n</p>\r\n1.3.4 Spieler in Tryout Teams haben die Möglichkeit, von anderen teilnehmenden Teams oder Clans wahrgenommen und ggf. in ihren Teams aufgenommen zu werden, sofern diese noch freie Slots zur Verfügung haben. Sie können auch weiterhin zusammen spielen, indem ein eigenes Team gegründet wird.\r\n</p>\r\n1.3.5 Für Tryout Teams werden bei jedem Turnier 2 Plätze reserviert. Bewerben sich mehr Spieler auf ein Tryout Team und es sind noch Plätze frei, so können auch mehrere Tryout Teams an dem Turnier teilnehmen.\r\n</p>\r\n<u>1.4 Allgemeine Definitionen</u>\r\n</p>\r\n1.4.1 „Best of“ (Bo3 / Bo5): Bei einem „Best of“ hat man die Angegebene Anzahl an Spielen zu Verfügung, um die Mehrheit der Spiele für sich zu entscheiden. Ist die Mehrheit bei einer kleineren Anzahl an Spielen bereits überschritten, so fallen die anderen Spiele weg, da der Gewinner bereits entschieden ist.\r\n</p>\r\n1.4.2 Double Elimination mit 1-2 Spielen im Finale: Verliert man einmalig eine Runde, so darf man noch weiter am Turnier teilnehmen. Erst bei dem zweiten mal, bei dem man in einer Runde besiegt wurde, ist das Turnier für den Teilnehmer beendet. D.h. auch, dass im Finale ein bisher Unbesiegter gegen den letzten Verbliebenen mit nur einer verlorenen Runde antreten. Im Falle dass der Unbesiegte verliert, muss das Finale ein zweites mal ausgetragen werden, bis einer von beiden Finalisten auch ein weiteres mal verliert.'),
(1, 1, 2, 'Teilnahmeberechtigung', '<u>2.1 Zulassung</u>\r\n</p>\r\n2.1.1 Der Gerta-Cup ist für alle Altersklassen ab dem vom Spiel vorgegebenen Alter, Ränge und unterstützte Konsolen vorgesehen und hat in diesen Punkten keine Einschränkung für die Teilnahme.\r\n</p>\r\n2.1.2 Es ist jeder Spieler mit einem Rocket League Account zugelassen, welcher sich auf der Webpage https://project-esport.gg registriert hat.\r\n</p>\r\n2.1.3 Bei dem Gerta-Cup ist auch der Quereinstieg zwischen den Spieltagen willkommen. Es ist nicht relevant, ob man bereits an früheren Terminen in der aktuellen Season mitgespielt hat. \r\n</p>\r\n2.1.4 Ein Spieler ist nur für ein Team pro Modus zugelassen. Dieses Team darf später nicht mehr gewechselt werden.\r\n</p>\r\n2.1.5 Es wird geraten, dass sich während eines Turniers alle Spieler eines Teams auf dem offiziellen Discord Server des Gerta-Cups befinden. Dies ist jedoch nur für einen Teammember pro Team für eine Teilnahmezulassung verpflichtend.\r\n</p>\r\n<u>2.2 Ausschluss für die Zulassung</u>\r\n</p>\r\n2.2.1 Spieler oder Teams, welche in der aktuellen Season disqualifiziert wurden, sind von allen weiteren Turnieren in dieser Season ausgeschlossen.\r\n</p>\r\n2.2.2 Spieler oder Teams, welche sich nicht während der Check-in Zeiten aus §3.3 eine Anwesenheit bestätigt haben, werden für das Turnier an diesem Abend ausgeschlossen.\r\n</p>\r\n2.2.3 Spieler oder Teams, bzw. Teamcaptains, welche in einer Season freiwillig austreten, werden in der darauf folgenden Season geblockt und dürfen nicht teilnehmen.\r\n</p>\r\n<u>2.3 Ausschluss aus dem aktuellen Turnier</u>\r\n</p>\r\n2.2.1 Das aktuelle Turnier definiert sich ab dem Zeitpunkt des erfolgreichen Check-ins bis zum Ende des Finalspiels.\r\n</p>\r\n2.2.2 Teilnehmer, welche eingecheckt sind, jedoch nicht im vorgegebenen Zeitraum nach §3.6 der zugewiesenen Lobby eines Matches beitreten, erhalten einen Strike und werden von allen ausstehenden Spielen des jeweiligen Turniers ausgeschlossen.\r\n</p>\r\n2.2.3 Teilnehmer, welche absichtlich oder unangekündigt aus dem laufenden Turnier aussteigen, erhalten ebenso einen Strike und werden vom jeweiligen Turnier ausgeschlossen.\r\n</p>\r\n2.2.4 Spieler, die vermehrt ein Fehlverhalten auf jeglichen Kommunikationswegen, in Discord oder im Spiel an den Tag legen, können disqualifiziert und aus dem aktuellen Turniergeschehen ausgeschlossen werden werden.'),
(1, 2, 3, 'Zeit', '3.1 Teams können bis 24 Stunden vor Beginn des 1. Spieltages einer Season noch verändert und angepasst werden.\r\n</p>\r\n3.2 Anmeldeschluss auf der Website ist 60 Minuten vor Beginn\r\n</p>\r\n3.3 Check-in geht von 30 Minuten vor Beginn bis 15 Minuten vor Beginn\r\n</p>\r\n3.4 Teilnehmenden Teams wird nicht mehr als 30 Minuten Zeit eingeräumt, maximal 3 Spiele abzuschließen, sowie  alle dazugehörigen Ergebnisse einzutragen und gegenseitig zu bestätigen.\r\n</p>\r\n3.5 Sobald beide Kontrahenten feststehen, spätestens zu der im Turnierbaum vorgegebenen Zeit der anstehenden Runde, soll eine Lobby eröffnet werden.\r\n</p>\r\n<u>3.6 Pausen</u>\r\n</p>\r\n3.6.1 Sobald eine Lobby eröffnet wurde, haben beide Teams 5 Minuten Zeit, sich in der Lobby einzufinden.\r\n</p>\r\n3.6.2 Wird eine längere Pause benötigt, so muss dies der Turnierleitung mitgeteilt werden. Eine Genehmigung kann nur im Einverständnis beider Teams oder mit ausreichend guter Begründung erfolgen.\r\n</p>\r\n3.6.3 Vor dem Looser- & Gesamt-Finale gibt es eine 10-minütige Zwangspause, welche eingehalten werden muss. Der Turnierbaum gibt hierfür einen um 15 Minuten verzögerten Start an.'),
(1, 3, 4, 'Anmeldephase', '<u>4.1 Teamregistrierung</u>\r\n</p>\r\n4.1.1 Jeder Mitspieler, welcher in einem Team registriert werden soll, hat sich zuvor auf der Website https://project-esport.gg zu registrieren.\r\n</p>\r\n4.1.2 Ein Spieler hat ein Team zu eröffnen und seine auf der Website registrierten Mitspieler dort unter Beachtung von §2.1 einzutragen. \r\n</p>\r\n4.1.3 Bei der Teamregistrierung muss mit angegeben werden:\r\n</p>\r\n4.1.3.1 Teamname\r\n</p>\r\n4.1.3.2 Team-Tag\r\n</p>\r\n4.1.3.3 Team-Logo\r\n</p>\r\n4.1.3.4 Teamcaptain\r\n</p>\r\n4.1.3.5 Teammates\r\n</p>\r\n4.1.3.6 Teamfarben primär & sekundär für jeweils Blau & Orange, die Option „Standard“ ist möglich.\r\n</p>\r\n4.1.4 Die Option, mehrere Sub-Teams zu erstellen ist gegeben.\r\n</p>\r\n4.1.5 Die Sub-Teams benötigen alle einen individuellen Namen, der Team-Tag kann gleich bleiben.\r\n</p>\r\n4.1.6 Pro Sub-Team gibt es eine begrenzte Anzahl an Slots:\r\n</p>\r\n4.1.6.1 ein 3v3-Team hat 5 Slots\r\n</p>\r\n4.1.6.2 ein 2v2-Team hat 3 Slots\r\n</p>\r\n4.1.6.3 Ist ein Spieler in einem Slot eingetragen, darf dieser nicht wieder ausgetauscht werden.\r\n</p>\r\n4.1.6.4 Freie Slots können jederzeit auch im Laufe der Season gefüllt werden.\r\n</p>\r\n4.1.6.5 Es ist möglich, für jeden Modus ein eigenes Team anzulegen und so die Slots anders zu belegen.\r\n</p>\r\n4.1.7 Meldet sich der Teamcaptain des Hauptteams bei der Turnierleitung, so kann ihm die Berechtigung im offiziellen Discord Server erteilt werden, die Voice-Channel aller Sub-Teams einzusehen und zu betreten.\r\n</p>\r\n<u>4.2 Anmeldung</u>\r\n</p>\r\n4.2.1 Hat ein Team die benötigte Mindestspielerzahl erreicht, so kann der Teamleader, welcher in der Teamregistrierung mit angegeben wurde, das Team bei den gewünschten Turnieren anmelden.\r\n</p>\r\n4.2.2 Hat ein Spieler kein Team, so kann er sich an die Turnierleitung wenden und sich für ein Tryout-Team §1.3 bewerben.\r\n</p>\r\n4.2.3 Die empfohlene Mindestteilnehmerzahl (Teamanzahl) beträgt 5 pro Turnier.\r\n</p>\r\n4.2.4 Ist die Mindestteilnehmerzahl nicht erreicht, kann das Turnier auf Wunsch der Teams „Jeder gegen Jeden“ ausgetragen werden, wie geplant stattfinden oder die zu vergebenen Punkte auch ohne Teilnahme gerecht auf alle anwesenden Teams verteilt werden.\r\n</p>\r\n4.2.5 Zur Anmeldung für ein 1v1 Turnier wird kein zuvor erstelltes Team und auch kein Teamcaptain benötigt. Jeder Spieler kann sich hierfür selbst anmelden.\r\n</p>\r\n4.2.6 Die maximale Teilnehmeranzahl (Teamanzahl) beträgt 32 pro Turnier.'),
(1, 4, 5, 'Das Turnier', '<u>5.1 Gespielt wird</u>\r\n</p>\r\n5.1.1 Best of 3, im Finale Best of 5\r\n</p>\r\n5.1.2 in privaten Spielen\r\n</p>\r\n5.1.3 Im Crossplay – Es ist darauf zu achten, dass alle Teilnehmer Crossplay in den Einstellungen akzeptieren.\r\n</p>\r\n<u>5.2 Spielerstellung</u>\r\n</p>\r\n5.2.1 Die jeweiligen Lobbys werden von den @Official Streamer erstellt. Die Streamer haben sich an den Plan zu halten, wer welche Spiele übernimmt.\r\n</p>\r\n5.2.2 Außnahme: Das Finale wird von einem Offiziellen Vertreter des Project eSport erstellt, damit §5.4.1.5 eingehalten werden kann.\r\n</p>\r\n5.2.3 Gibt es Spiele, welche nicht von einem @Official Streamer übertragen werden, so werden die Teams von der Turnierleitung, bzw. der Website in Kenntnis gesetzt und erstgenanntes Team erstellt die Lobby.\r\n</p>\r\n5.2.4 Bei einem Team hat im Fall §5.2.3 der angegebene Teamcaptain eine Lobby zu erstellen.\r\n</p>\r\n5.2.5 Für eine verbesserte Absprache zwischen 2 Teams, welche sich nicht hören können, kann der #turnier-chat auf dem Discord-Server benutzt werden.\r\n</p>\r\n<u>5.3 Einstellungen</u>\r\n</p>\r\n<b>SPIELMODUS</b> <i>Blechfußball</i>\r\n</p>\r\n<b>ARENA</b> <i>beliebig</i> wird von der Website vorgegeben\r\n</p>\r\n<b>TEAMGRÖßE</b> <i>1v1 | 2v2 | 3v3</i>\r\n</p>\r\n<b>BOTS</b> <i>keine</i>\r\n</p>\r\n<b>TEAM1</b> <i>Teamname1</i> \r\n</p>\r\n<b>TEAM2</b> <i>Teamname2</i>\r\n</p>\r\n<b>Spielname</b> <i>wird von der Website vorgegeben</i>\r\n</p>\r\n<b>Passwort</b> <i>wird von der Website vorgegeben</i>\r\n</p>\r\nMutatoreinstellungen (Standard):\r\n</p>\r\n<b>Spiellänge</b> <i>5 Min</i>\r\n</p>\r\n<b>Torlimit</b> <i>unbegrenzt</i>\r\n</p>\r\n<b>Verlängerung</b> <i>standard</i>\r\n</p>\r\n<b>Serienlänge</b> <i>3 Spiele (optional)</i>\r\n</p>\r\n<b>Spielgeschwindigkeit</b> <i>standard</i>\r\n</p>\r\n<b>Ballhöchstgeschwindigkeit</b> <i>standard</i>\r\n</p>\r\n<b>Ballart</b> <i>standard</i>\r\n</p>\r\n<b>Ballgewicht</b> <i>standard</i>\r\n</p>\r\n<b>Ballgröße</b> <i>standard</i>\r\n</p>\r\n<b>Ballabprallkraft</b> <i>standard</i>\r\n</p>\r\n<b>Boostmenge</b> <i>standard</i>\r\n</p>\r\n<u>5.4 Die Lobby</u>\r\n</p>\r\n5.4.1 In die Lobby zugelassen sind:\r\n</p>\r\n5.4.1.1 Der Streamer, der das Match streamt und die Lobby eröffnet hat.\r\n</p>\r\n5.4.1.2 Maximal ein Caster, der den Streamer begleitet\r\n</p>\r\n5.4.1.3 Die antretenden Spieler (max. 6 beim 3v3)\r\n</p>\r\n5.4.1.4 Jeweils ein Teamleiter oder Teammanager (max. 2 bei 2 Teams)\r\n</p>\r\n5.4.1.5 Ein Offizieller Vertreter von Project Esport mit Zugang auf die offiziellen Social Media Kanäle, damit er Replays speichern kann, ua. für das #pic-of-the-day , sofern noch ein Platz in der Lobby frei ist\r\n</p>\r\n5.4.2 Die Teams dürfen das Feld erst dann betreten, wenn sich alle antretenden Spieler beider Teams in der Lobby befinden.\r\n</p>\r\n</p>\r\n<u>5.5 Nicht-Antritt und Disconnect</u>\r\n</p>\r\n5.5.1 Kann ein Team während eines Spiels nicht weiter teilnehmen, so wird das Team in dieser Runde als Verlierer gewertet.\r\n</p>\r\n5.5.2 Fällt ein Teammember während einer Runde aus, kann das Team einen bereits eingetragenen Ersatzspieler einsetzen. Ein Neustart wird in diesem Fall nicht durchgeführt.\r\n</p>\r\n5.5.3 Findet sich kein Ersatzspieler liegt es im eigenen Ermessen des Teams, trotz Handicap weiter zu spielen oder auszusteigen.\r\n</p>\r\n5.5.4 Auch ein freiwilliger Ausstieg aus einem laufenden Turnier hat einen Strike zur Folge, sofern dieser nicht bereits vor Turnierbeginn bei der Turnierleitung angekündigt wurde.\r\n</p>\r\n5.5.5 Bei Disconnect eines Spielers, kann das Spiel ohne Verzögerung weitergeführt werden. \r\n</p>\r\n5.5.6 Eine Disconnection kann wieder aufgehoben werden, indem der Teilnehmer wieder in das aktuelle Spielgeschehen eintritt.\r\n</p>\r\n5.5.7 Bestehen beide Teams auf einen Neustart des Spiels innerhalb der ersten Spielminute sofern kein Tor geschossen wurde, so kann dieser mit Genehmigung der Turnierleitung erfolgen.\r\n</p>\r\n<u>5.6 Game-Chat</u>\r\n</p>\r\n5.6.1 Die Nutzung des Game-Chats ist während eines Matches nicht erwünscht.\r\n</p>\r\n5.6.2 Ein \"gg\" oder ähnliches am Ende des Spiels ist möglich, da das Match nicht mehr weiter im Gange ist.\r\n</p>\r\n5.6.3 Sollten Probleme auftreten, zB. dass ein Spieler die Verbindung verliert, kann das andere Team über den Game-Chat höflich darauf hin gewiesen werden. Dennoch ist es in diesem Fall meist hilfreich, die Turnierleitung direkt zu verständigen.\r\n</p>\r\n5.6.4 Muss der Game-Chat zu teaminternen Kommunikationszwecken verwendet werden, wird das gesamte Team gebeten, in den Einstellungen \"nur Team Chat\" anzuwählen, sodass das Gegnerteam nicht zugespammt wird.\r\n</p>\r\n5.6.5 Beschwerden müssen unverzüglich nach der Runde mit einem entsprechenden Screen bei der Turnierleitung eingereicht werden, spätere Beschwerden werden nicht beachtet.\r\n</p>\r\n<u>5.7 Verhalten</u>\r\n</p>\r\n5.7.1 Es wird um einen vernünftigen und respektvollen Umgangston in sämtlichen Kommunikationen und auch in den Streams gebeten.\r\n</p>\r\n5.7.2 Unsportliches und negatives Verhalten kann jederzeit zu einem sofortigen Ausschluss aus dem Turnier oder dem Cup führen.\r\n</p>\r\n5.7.3 Rassistische, sexistische, radikale, anstößige Ausdrücke und sonstige Beleidigungen jeglicher Art sind untersagt und haben beim Spieler, Streamer, Caster oder sonstigem Mitwirkenden zu bleiben.\r\n</p>\r\n5.7.4 Ein unnötiges Hinauszögern eines Matches wird nicht geduldet.\r\n</p>\r\n5.7.5 In Game Mechanik wird nicht eingegriffen oder geahndet.\r\n</p>\r\n<u>5.8 Ergebnisse</u>\r\n</p>\r\n5.8.1 Jeder Spieler hat die Aufgabe von den Rundenergebnissen Screenshots oder Fotos zu machen.\r\n</p>\r\n5.8.2 Ein Ergebnisscreen muss neben den Toren der Teams auch alle Punkte aller Mitspieler anzeigen.\r\n</p>\r\n5.8.2 Damit ein Ergebnis eingetragen und gewertet werden kann, müssen beide Kontrahenten ihre Screenshots auf der Website einreichen und die dortigen Ergebnisse übertragen.\r\n</p>\r\n5.8.3 Der jeweilige Gegner hat die eingetragenen Ergebnisse zu bestätigen.\r\n</p>\r\n5.8.4 Erst wenn beide Teams im vorgegebenen Zeitraum §3.4 ihre Eintragung gegenseitig bestätigt haben, wird der Turnierbaum weiter angezeigt.\r\n</p>\r\n5.8.5 Kann kein Screenshot oder Foto eingereicht werden, bekommen beide betreffenden Teams eine Verwarnung und es gibt ein weiteres Spiel, welches nach einem Match den Gewinner ermittelt. Von diesem Match muss stellvertretend ein Screenshot eingereicht werden (Best of 1).\r\n</p>\r\n5.8.6 Tritt ein Spieler verfrüht aus dem Spielgeschehen aus, sodass nicht alle Mitspieler in der Punktetabelle erfasst werden können, so bekommt das entsprechende Team eine Verwarnung. Das Replay zu diesem Match muss gespeichert werden und ein Screenshot oder Foto von der Punktetabelle der letzten Sekunde des Spielers muss eingereicht werden. Jeder Teilnehmer hat dafür zu sorgen, dass genügend Speicher vorhanden ist, um das Replay zu speichern.\r\n</p>\r\n5.8.7 Zu jedem Match kann bei Eintragung der Ergebnisse ein jeweiliges Replay zusätzlich eingereicht werden. Dieses kann ohne weitere Erlaubnis für Highlight und Round-up Videos verwendet werden.'),
(1, 5, 6, 'Nach dem Spiel', '<u>6.1 Ranking Auswertung</u>\r\n</p>\r\n6.1.1 Je nach Runde des endgültigen Ausscheidens aus dem Turnier bekommt der Spieler, bzw. das Team eine festgelegte Anzahl an Punkten für das gesamt-Cup-Ranking in jeweiligem Modus. Diese Anzahl an verdienten Punkten ist für alle Spieler, bzw. Teams, welche in der selben Runde ausscheiden, gleich.\r\n</p>\r\n6.1.2 Ist nach Ende des letzten Spieltages einer Season ein Punktegleichstand zweier Teilnehmer auf den Plätzen 1, 2 oder 3 zu verzeichnen, so müssen Gleichplatzierte in einem finalen Best-of-3 erneut im Direktvergleich gegeneinander antreten und so ihre individuelle Platzierung festlegen.\r\n</p>\r\n<u>6.2 Spieler-Ranking</u>\r\n</p>\r\n6.2.1 In jedem Modus gibt es auch ein Spieler-Ranking\r\n</p>\r\n6.2.2 Gewertet wird in durchschnittlichen erspielten Punkten pro Runde eines Teilnehmers\r\n</p>\r\n6.2.3 Das Spieler-Ranking ist eine reine Statistik und nicht für die Platzierungen des Teams relevant.\r\n</p>\r\n<u>6.3 Sieger und Gewinne</u>\r\n</p>\r\n6.3.1 Gewinnberechtigt sind alle Spieler, die im Verlauf des Cups an mindestens 3 Terminen der entsprechenden Season teilgenommen haben. Der Modus ist dabei nicht relevant.\r\n</p>\r\n6.3.2 Die Turnier-Sieger landen in der #hall-of-fame des Discord-Servers und erhalten die Rolle Turnier-Champion, sofern sie auf dem Server vertreten sind, für eine Dauer von 3 Turnieren.\r\n</p>\r\n6.3.3 Hat ein Spieler die meisten Siege in Summe, so behält dieser die Rolle <i>Turnier-Champion</i>, bis er überboten wird.\r\n</p>\r\n6.3.4 Weitere Preise im Sinne von Urkunden oder kleinen Geld- oder Sachpreisen sind jederzeit möglich. Per Post oder in digitaler Form.\r\n</p>\r\n6.3.5 Die Preise werden innerhalb von 8 Wochen nach Cupende ausgezahlt, bzw. ausgeliefert.'),
(1, 6, 7, 'Turnier-Staff und deren Aufgabe', '<u>7.1 Streamer</u>\r\n</p>\r\n7.1.1 Ein Official Streamer ist ein vom Management des Project eSport offiziell anerkannter Streamer für seinen Bereich. In diesem Fall für den Gerta Cup. Er hat die Aufgabe, neben allgemeinen Rocket League Streams vor allem auch Spiele des Gerta Cups auf den vom Management vorgegebenen Plattformen zu streamen.\r\n</p>\r\n7.1.2 Es ist dem Streamer gestattet einen eigenen Caster zur Unterstützung beim Management vorzustellen.\r\n</p>\r\n7.1.3 Mindestens ein Headset mit guter Tonqualität sowie eine stabile Internetverbindung, wie auch Streaming Software und das benötigte Spiel müssen vorhanden sein.\r\n</p>\r\n7.1.4 Kommunikationsplattform\r\n</p>\r\n7.1.4.1 Der Streamer muss sich auf dem offiziellen Discord Server befinden, da dort die Kommunikation und Termineinteilung unter den Streamern erfolgt.\r\n</p>\r\n7.1.4.2 Dem official Streamer ist es gestattet, auf Wunsch eine eigene Plattform zu wählen, um dort mit dem Caster interagieren zu können.\r\n</p>\r\n7.1.5 Der Streamer als Caster\r\n</p>\r\n7.1.5.1 Dem Streamer steht es frei, die Spiele selbst zu casten und somit die Rolle eines Casters zu übernehmen ( §7.2 ).\r\n</p>\r\n7.1.5.2 Ein Streamer, welcher nur seine eigenen Streams castet, erhält nicht die Caster-Rolle.\r\n</p>\r\n7.1.6 Um weiterhin offizieller Streamer bleiben zu dürfen, muss dieser an mindestens 4 von 18 Terminen seiner Tätigkeit nachgehen. Hierbei zählen nicht die freiwilligen Streaming-Termine, sondern  Termine, an denen sich der Streamer eingetragen und auch gestreamt hat.\r\n</p>\r\n7.1.7 An Terminen, an denen der \"Official Streamer\" für seine Tätigkeit eingetragen ist, darf dieser nicht selbst am Turnier teilnehmen.\r\n</p>\r\n7.1.8 Ein \"Official Streamer\" ist angewiesen an offiziellen Turnieren wie dem Gerta-Cup ein von Project eSport bereitgestelltes Overlay zu verwenden, sowie dessen Aufbau-Richtlinien einzuhalten.\r\n</p>\r\n7.1.9 Offizielle Streamer bekommen Begegnungen in einem Turnier zugeteilt und eröffnen deren Lobbys mit den unter §5.3 genannten Einstellungen.\r\n</p>\r\n7.1.10 Auch kleinen, nicht offiziellen Streamern ist es gestattet, einzelne und eigene Spiele zu streamen. Diese eröffnen jedoch nicht die Lobby, sondern treten einer existierenden Lobby bei.\r\n</p>\r\n7.1.11 Streamer werden gebeten, alle Replays zu speichern und nach dem Turnier alle gespeicherten Files auf der bereitgestellten Homepage hochzuladen.\r\n</p>\r\n<u>7.1.12 Interviews</u>\r\n</p>\r\n7.1.12.1 Entschließt sich der Streamer dazu, Interviews zu führen, so werden diese nicht nach jedem Match, sondern nur nach Runden-Abschluss geführt. \r\n</p>\r\n7.1.12.2 In einem Interview wird nur ein Teammember oder Manager befragt. Mehr als eine Person zur gleichen Zeit in einem Interview ist nicht gestattet. Streamer und Caster sind davon nicht betroffen.\r\n</p>\r\n<u>7.2 Caster</u>\r\n</p>\r\n7.2.1 Ein Caster hat die Aufgabe, den Streamer zu begleiten und das Spiel zu kommentieren, zu analysieren mit dem Streamer zu interagieren und sich an dessen Themen zu beteiligen.\r\n</p>\r\n7.2.2 Mindestens ein Headset mit guter Tonqualität sowie eine stabile Internetverbindung bei 90% der Zeit müssen gegeben sein.\r\n</p>\r\n7.2.3 Der Caster muss sich auf dem offiziellen Discord Server befinden und sollte, im Falle dass der zugehörige Streamer eine andere Plattform bevorzugt, diese ebenfalls mitbenutzen, um den Streamer begleiten zu können.\r\n</p>\r\n7.2.4 Der Caster sollte Ahnung vom Spiel haben und nötige spielbezogene Begrifflichkeiten kennen und anwenden können.\r\n</p>\r\n7.2.5 Um Caster bleiben zu dürfen, muss er an mindestens 4 von 18 Terminen seiner Tätigkeit nachgehen. Hierbei zählen nicht die freiwilligen Cast-Termine, sondern  Termine, an denen sich der Caster eingetragen und auch gecastet hat.\r\n</p>\r\n7.2.6 An Terminen, an denen der Caster für seine Tätigkeit eingetragen ist, darf dieser nicht selbst am Turnier teilnehmen.\r\n</p>\r\n7.3 Turnier-Moderatoren\r\n</p>\r\n7.3.1 Ein Turnier-Moderator behält die Übersicht über das zu moderierende Turnier. Er steht bei Fragen und Problemen als Ansprechpartner zu Verfügung. \r\n</p>\r\n7.3.2 Die Entscheidung eines Turnier-Moderators ist verbindlich.\r\n</p>\r\n7.3.3 Ein Turnier-Moderator ist dazu berechtigt, Spieler oder Teams zu verwarnen, wenn ein Regelbruch vorliegt und begründete Sanktionen über diese zu verhängen.\r\n</p>\r\n7.3.4 Ein Turnier-Moderator, welcher eingeteilt wurde, darf an diesem Termin selbst nicht als Spieler teilnehmen.'),
(1, 7, 8, 'Änderungen', '8.1 Änderungen im Regelwerk können jederzeit vorgenommen werden. \r\n</p>\r\n8.2 Im Falle einer Änderung, werden alle Teilnehmer des aktuellen, bzw. nächsten Turniers entsprechend benachrichtigt.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tournament_subrules_i18n`
--

CREATE TABLE `tournament_subrules_i18n` (
  `subrule_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `nationality_id` int(11) DEFAULT NULL,
  `dt_created` datetime NOT NULL,
  `dt_updated` datetime DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `pre_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `birthday`, `gender_id`, `nationality_id`, `dt_created`, `dt_updated`, `language_id`, `pre_name`, `last_name`, `zip_code`, `city`, `street`, `email`) VALUES
(1, 'admin', '$2y$13$oqxRLMe.raZ1vxzyKVl/fOp5PYF7fHVrGp6tbOiYlsJ28yUcJgvIO', '0000-00-00', 3, NULL, '2019-03-11 13:31:45', '2019-03-11 13:31:45', 1, NULL, NULL, NULL, NULL, NULL, 'admin@admin.de'),
(2, 'Birnchen', '$2y$13$BFuY5ZmWvptagWoiaCg4quNxd5R4HGjkLdibC3r0lYpNLQwNzQ2.6', '1986-03-25', 1, 1, '2019-02-27 22:28:13', '2019-02-27 22:28:13', 1, NULL, NULL, NULL, NULL, NULL, 'p.koehler@birnchen-studios.de'),
(3, 'Niyari', '$2y$13$uGmCGbRTGoDnH0JNfZlYruYy80DIQda51CpSSJ/QYTu9syCmiEtXa', '1995-07-16', 2, 1, '2019-02-27 22:31:30', '2019-02-27 22:31:30', 1, NULL, NULL, NULL, NULL, NULL, 'l.riehm@birnchen-studios.de'),
(4, 'Captain Salty', '$2y$13$dkTAbtNib/wF2Dmxqs5nveULRbk9QrRQFJiVkq.cQtB2cCJWAuF4u', '1984-05-25', 1, 2, '2019-02-27 22:34:57', '2019-02-27 22:34:57', 1, NULL, NULL, NULL, NULL, NULL, 'freezerxxl@gmx.net'),
(5, 'MeisterSmoje', '$2y$13$DBZM4a2LhirHDM4tUE7g1OxWI87w8r4Xz5hriwQXM0QNb.jsbdnbi', '1970-01-01', 1, NULL, '2019-02-27 23:14:27', '2019-02-27 23:14:27', 1, NULL, NULL, NULL, NULL, NULL, 'GamerAndroid951@gmx.de'),
(6, 'El Viper', '$2y$13$RMCnfBmUvhaLrZUFVNoag.tU3gyeNE4pxHBb2uwco/Zf6vsXggUWe', '1970-01-01', 1, NULL, '2019-02-27 23:23:41', '2019-02-27 23:23:41', 1, NULL, NULL, NULL, NULL, NULL, 'pascal-mannstedt@gmx.de'),
(7, 'PeSp-Joker', '$2y$13$j6L.pPWrqjzLs/.lk6KOaePUoY1I7JwMb.muw6vKCUPRnpl/N7wXO', '1970-01-01', 1, NULL, '2019-02-27 23:30:40', '2019-02-27 23:30:40', 1, NULL, NULL, NULL, NULL, NULL, 'henni80000@gmx.de'),
(8, 'JaePaenda', '$2y$13$16IIz7ANr5XRxca9BD6H7eGfnPdODXq9WMM0F7LBkHnM/jMw3r3ze', '1970-01-01', 1, NULL, '2019-02-27 23:35:05', '2019-02-27 23:35:05', 1, NULL, NULL, NULL, NULL, NULL, 'henni800000@gmx.de'),
(9, 'Korazu', '$2y$13$iCGKalPKikEYWo4iGeVxn.bSoyT0.tYMmWMCpweTk/iJRYYGtFzqm', '1970-01-01', 1, NULL, '2019-02-28 11:04:02', '2019-02-28 11:04:02', 1, NULL, NULL, NULL, NULL, NULL, 'KurakoHD@gmail.com'),
(10, 'Miksiplayz', '$2y$13$YcqnxAtG/pYY2kOsnQuIaOiwtkThOucwxFEPnqHPGXO9Z2QUaydTW', '1970-01-01', 1, NULL, '2019-02-28 13:16:14', '2019-02-28 13:16:14', 1, NULL, NULL, NULL, NULL, NULL, 'k.vonzansen@gmx.de'),
(11, 'Corah', '$2y$13$B/puT4e9V4081AwePVigFOchtg8TC2Z7I8nwGAjIBAORs3M1kMxXO', '1970-01-01', 2, NULL, '2019-02-28 15:18:54', '2019-02-28 15:18:54', 1, NULL, NULL, NULL, NULL, NULL, 'sarahrueegi@gmail.com'),
(12, 'Marc', '$2y$13$qJDn20c.sfvPZEKnv7nw6.H6MyggGLIGgOVdIwyoJ4iCEdvPm2F8G', '1970-01-01', 1, NULL, '2019-02-28 15:23:02', '2019-02-28 15:23:02', 1, NULL, NULL, NULL, NULL, NULL, 'deganimarc@gmail.com'),
(13, 'Mr_Viper', '$2y$13$wg.7s11r5oRdI2ge.Apgqu0FqO06ArRUrncSWX6BUatdgM/Phj/TG', '1970-01-01', 1, NULL, '2019-02-28 20:32:23', '2019-02-28 20:32:23', 1, NULL, NULL, NULL, NULL, NULL, 'g.schwitalla@gmx.de'),
(14, 'ZombieEcki', '$2y$13$8IzFe3EMBaZAoc6Vsg6FPOxczHKK2/vvw5tvROm7FjVDBIEDBRiI2', '1970-01-01', 1, NULL, '2019-02-28 21:29:22', '2019-02-28 21:29:22', 1, NULL, NULL, NULL, NULL, NULL, 'liam.eckhof@gmail.com'),
(15, 'TG KappaKater', '$2y$13$yCgMJV8KDPii09lCUtkH2ujP.kL1YQeTn78yqCxAElQD7EKmyA5ja', '1970-01-01', 1, NULL, '2019-02-28 21:29:24', '2019-02-28 21:29:24', 1, NULL, NULL, NULL, NULL, NULL, 'babawagen41@gmail.com'),
(16, 'FightNight9929', '$2y$13$4LTvAXCWufR5pzvC6Rmc2uhJL1EQaFpqT0PCNPYNgScKJhcHp.fjG', '1970-01-01', 1, NULL, '2019-02-28 22:38:22', '2019-02-28 22:38:22', 1, NULL, NULL, NULL, NULL, NULL, '99FightNight29@gmail.com'),
(17, 'StevieT', '$2y$13$XcHpgq0QV7emepdpvCmF4Oi.4Tjn2rS7Tg93145XOnAZnUpdn1rVe', '1970-01-01', 1, NULL, '2019-03-01 07:23:05', '2019-03-01 07:23:05', 1, NULL, NULL, NULL, NULL, NULL, 'steve.chlupka@gmail.com'),
(18, 'DxrkTT', '$2y$13$h5tEv1LYR30blfBFlYW1EukcrE/i2kPv6e/57FDJGGJogT9bDj06m', '1970-01-01', 1, NULL, '2019-03-01 08:16:25', '2019-03-01 08:16:25', 1, NULL, NULL, NULL, NULL, NULL, 'me18alq@gmail.com'),
(19, 'ghostkilla.', '$2y$13$vPF/UmXHFPjjFSRZuLm.B.fVg.UqCJ7MhzQPThSnU8KNdri9AdfPa', '1970-01-01', 1, NULL, '2019-03-01 09:49:46', '2019-03-01 09:49:46', 1, NULL, NULL, NULL, NULL, NULL, 'xremex2006@gmail.com'),
(20, 'Mythos1895', '$2y$13$AcztND9f8qE1iZSkFfORYejgQy3fQ..g9E6cHps9a9BjprL6iTQ.q', '1970-01-01', 1, NULL, '2019-03-01 10:47:37', '2019-03-01 10:47:37', 1, NULL, NULL, NULL, NULL, NULL, 'unger.finanzen@web.de'),
(21, 'Stompy', '$2y$13$lspptDElTZG0P0wx5528m.22hBKxNGtUnFYuUQ0hDV1cYQIH4RjXa', '1970-01-01', 1, NULL, '2019-03-01 13:04:56', '2019-03-01 13:04:56', 1, NULL, NULL, NULL, NULL, NULL, 'alexanderskrob@gmail.com'),
(22, 'P1st0lpr0', '$2y$13$kr1hvCpTena/bBJaoV0hDOUR9e.Lq630WPdpBZvqmcbT6FlGx06IK', '1970-01-01', 1, NULL, '2019-03-01 13:34:26', '2019-03-01 13:34:26', 1, NULL, NULL, NULL, NULL, NULL, 'roboticeliteclan@gmail.com'),
(23, 'BassRL', '$2y$13$N/mTiKbbVlO1f4U/xxVmF.JQ1FxhKMzI/vTESyF1pVdwcT5S8xZJO', '1970-01-01', 1, NULL, '2019-03-01 13:46:22', '2019-03-01 13:46:22', 1, NULL, NULL, NULL, NULL, NULL, 'pascalbrand2@web.de'),
(24, 'TeamFireWall', '$2y$13$53f0RZJ3usUGuyfHI1l9fOP1E0osLDtaJhviRwCgL2QwLzNxfqgNy', '1970-01-01', 1, NULL, '2019-03-01 13:58:46', '2019-03-01 13:58:46', 1, NULL, NULL, NULL, NULL, NULL, 'contact@teamfirewall.net'),
(25, 'Stealth7', '$2y$13$2.pIUpcpQjgdhk.GU9wI/OfE1Uzh7C0KKN6GOUZq8AQR5Wl70TyMe', '1970-01-01', 1, NULL, '2019-03-01 14:22:11', '2019-03-01 14:22:11', 1, NULL, NULL, NULL, NULL, NULL, 'stealth7esports@t-online.de'),
(26, 'Finex', '$2y$13$92NzHzTD7F.oFjTVJb/OyOsc6hd2vxo4VD4kt7fOT1cRh8X8ryX8e', '1970-01-01', 1, NULL, '2019-03-01 14:35:34', '2019-03-01 14:35:34', 1, NULL, NULL, NULL, NULL, NULL, 'wand516@gmail.com'),
(27, 'Senpaii / BlackRose', '$2y$13$sii1.wyHnNv1CpReFFUhC.I2MyEaiSDLqFxteZO4zOB7FTru/0Wsq', '1970-01-01', 1, NULL, '2019-03-01 15:44:51', '2019-03-01 15:44:51', 1, NULL, NULL, NULL, NULL, NULL, 'ohnezahnboyhicks@gmail.com'),
(28, 'Exokiller', '$2y$13$qCaV3lck6O9sxTTjgs3q8.zD9/6XtxFvZ/uCKCG0a7pitf0mveOWu', '1970-01-01', 1, NULL, '2019-03-01 17:15:11', '2019-03-01 17:15:11', 1, NULL, NULL, NULL, NULL, NULL, 'domi.katko@freenet.de'),
(29, 'Luzifer', '$2y$13$ZN3WM54Azi7Ft5Qx.brcX.3Fe6dqPxV/lXfTccsBPwm1.bSWbqcPa', '1970-01-01', 1, NULL, '2019-03-01 17:38:00', '2019-03-01 17:38:00', 1, NULL, NULL, NULL, NULL, NULL, 'nicksill@outlook.de'),
(30, 'Aero', '$2y$13$lvjVDprnjac3vo09xj3V5OXainb3v4tY9ftgZDkopnKJc4S/r2KtO', '1970-01-01', 1, NULL, '2019-03-01 18:09:39', '2019-03-01 18:09:39', 1, NULL, NULL, NULL, NULL, NULL, 'Fabian.Schlays@gmail.com'),
(31, 'DerLoard', '$2y$13$4Zv0DqjabqCus7IgiFqF3.hTO8Fg2jYeY3F4OCasgEhqZn5wfRroG', '1970-01-01', 1, NULL, '2019-03-01 18:09:47', '2019-03-01 18:09:47', 1, NULL, NULL, NULL, NULL, NULL, 'moha.alkhafaf2@gmail.com'),
(32, 'Nexon', '$2y$13$a5S.bNiXWjxZvwwlyGF2gewkL61bPtLBOCnZ3KSbEcEspUooC0hV2', '1970-01-01', 1, NULL, '2019-03-01 18:21:46', '2019-03-01 18:21:46', 1, NULL, NULL, NULL, NULL, NULL, 'Mlgmastergaming100@gmail.com'),
(33, 'Vxrus', '$2y$13$CAl5w5fHMciIb071DDMjOum0iUVpetKgi73dgkKW.kjrYK6gnH8ca', '1970-01-01', 1, NULL, '2019-03-01 18:24:38', '2019-03-01 18:24:38', 1, NULL, NULL, NULL, NULL, NULL, 'domi.badkreuznach@gmail.com'),
(34, 'Monster_GamerLP', '$2y$13$3AhtnQdhvwB0RzR4.VfMY.l1U8EWNk3HkUQ.Vu4CaY8VQytczMR/S', '1970-01-01', 1, NULL, '2019-03-01 18:55:28', '2019-03-01 18:55:28', 1, NULL, NULL, NULL, NULL, NULL, 'monsterschleimerlp@gmail.com'),
(35, 'Awxkeq', '$2y$13$C9tkFVwyajhc571W2mhdoOqJtHOl.0arvt5nKG0XNO/1Jy0TxiHOm', '1970-01-01', 1, NULL, '2019-03-01 20:09:51', '2019-03-01 20:09:51', 1, NULL, NULL, NULL, NULL, NULL, 'Mikeschoettle@gmx.de'),
(36, 'ZedeX', '$2y$13$jFELjcHrulk0GSwrkjhzheU0boI7NSN5G7i4WVukC6I2JP56kb1YG', '1970-01-01', 1, NULL, '2019-03-01 20:10:38', '2019-03-01 20:10:38', 1, NULL, NULL, NULL, NULL, NULL, 'zedexrl@gmail.com'),
(37, 'Flexxy', '$2y$13$Pq46sKbqRLp7yn9QZN8ehOBIz47q7glwnyUc59VCoBE.kg.8osfom', '1970-01-01', 1, NULL, '2019-03-01 21:00:55', '2019-03-01 21:00:55', 1, NULL, NULL, NULL, NULL, NULL, 'flexxyeu02@gmail.com'),
(38, 'NoAvian', '$2y$13$3qKVbgnTTPkxXwTeWwM1n.nN484eNDPEOaeLa7YKkQAEJ454Zk2Cy', '1970-01-01', 1, NULL, '2019-03-01 21:02:23', '2019-03-01 21:02:23', 1, NULL, NULL, NULL, NULL, NULL, 'blackzocker@gmx.net'),
(39, 'Krypton', '$2y$13$VGHGzKuEfM95lmGl1YnflOx6REuuuiLdloxQ8qy2kOIrZb781M9wC', '1970-01-01', 1, NULL, '2019-03-01 22:27:15', '2019-03-01 22:27:15', 1, NULL, NULL, NULL, NULL, NULL, 'feuersturm1604@gmail.com'),
(40, 'SoulSynergy', '$2y$13$3NkDW1cJNUfkfMEgopevTO4eZLFXMHvPrgMS0.2KMjdz3j/yYhzou', '1970-01-01', 1, NULL, '2019-03-02 08:24:02', '2019-03-02 08:24:02', 1, NULL, NULL, NULL, NULL, NULL, 'l.hutch@gmx.de'),
(41, 'swefli', '$2y$13$XcXBi3zLJl5YjViwqYOF7.UHlDFXHWS27lV4sN4x7xkFy0I2UYrmy', '1970-01-01', 1, NULL, '2019-03-02 08:51:55', '2019-03-02 08:51:55', 1, NULL, NULL, NULL, NULL, NULL, 'andi.winter02@bluewin.ch'),
(42, 'VTrayxX', '$2y$13$AvONIvtKMJL4TowEbiXGnOD4J0iY0gv6W1SeUixaXGwZmTQXQT3RW', '1970-01-01', 1, NULL, '2019-03-02 12:36:07', '2019-03-02 12:36:07', 1, NULL, NULL, NULL, NULL, NULL, 'PL2808@gmx.de'),
(43, 'OG_PulseGlxy', '$2y$13$RCwgENnGHX2au..HJGyR3uO98JJB84fHH9qW5ezN.InHTnT4r2nfO', '1970-01-01', 1, NULL, '2019-03-02 13:28:16', '2019-03-02 13:28:16', 1, NULL, NULL, NULL, NULL, NULL, 'denis.rocketleague@gmail.com'),
(44, 'serenity', '$2y$13$ePpoZfBVpdG1WUaXCJLS8ejSL0q/mfMV/Pl3z7lW3TVu/9DLVgWHy', '1970-01-01', 1, NULL, '2019-03-02 15:21:57', '2019-03-02 15:21:57', 1, NULL, NULL, NULL, NULL, NULL, 'besteacc@gmail.com'),
(45, 'cietrus', '$2y$13$pPplB1yeeSTKq65sjDL5PuMJuL0DjRyIV87EAzQnRX2YxVwZdT6yS', '1970-01-01', 1, NULL, '2019-03-02 15:22:13', '2019-03-02 15:22:13', 1, NULL, NULL, NULL, NULL, NULL, 'robinho_2011@hotmail.de'),
(46, 'Max | Thunder', '$2y$13$qQ0rGePd9ypEV.shNmdtiOzrk7RRkFqWXm0zfqCIwCkROQ7WwtynK', '1970-01-01', 1, NULL, '2019-03-02 16:00:52', '2019-03-02 16:00:52', 1, NULL, NULL, NULL, NULL, NULL, 'DermitzelMax@gmail.com'),
(47, 'ThunderToxic', '$2y$13$CU.JuhzPALDmCgy2eivV/u4REM63haX3TjXnYIIQ1mqg4zVXlcgfG', '1970-01-01', 3, NULL, '2019-03-02 16:01:28', '2019-03-02 16:01:28', 1, NULL, NULL, NULL, NULL, NULL, 'diegeljeremy@gmail.com'),
(48, 'paullingo', '$2y$13$tPLbNOEZKRygOOwtw407Vez/LOm/etnbc6bM6MHwfXwUOUTQx1mGu', '1970-01-01', 1, NULL, '2019-03-02 16:02:51', '2019-03-02 16:02:51', 1, NULL, NULL, NULL, NULL, NULL, 'alegre.paulo10@gmail.com'),
(49, 'Crime', '$2y$13$t8lFKI8H.rZ.OqWwr19QN.cprh17asbDzhuV7qOfp1S46BQO.FR7S', '1970-01-01', 1, NULL, '2019-03-02 16:05:35', '2019-03-02 16:05:35', 1, NULL, NULL, NULL, NULL, NULL, 'Poolchen05@gmail.com'),
(50, 'Caper93', '$2y$13$l0xf0NqMuPLw6E0Tq/cBOeRAyto029sTayhLG8suPq8gJRIp7qflK', '1970-01-01', 1, NULL, '2019-03-02 17:27:26', '2019-03-02 17:27:26', 1, NULL, NULL, NULL, NULL, NULL, 'simon454g@gmail.com'),
(51, 'Shila', '$2y$13$bIGQub11hTnh3/kgven9DewdYwjIPn/eKk5CwLyWT4PT5y4pG.f72', '1970-01-01', 1, NULL, '2019-03-02 17:34:16', '2019-03-02 17:34:16', 1, NULL, NULL, NULL, NULL, NULL, 'jonascekrezi@gmx.de'),
(52, 'OhJayyRL', '$2y$13$0X.MfOUMIwFcdVOs7Tpe3O0mnCLa5ptERVVaMrTB39S.IjIf29eEW', '1970-01-01', 1, NULL, '2019-03-02 17:38:43', '2019-03-02 17:38:43', 2, NULL, NULL, NULL, NULL, NULL, 'oliver.naughalty@kingswarrington.com'),
(53, 'Hunter.', '$2y$13$XrvgsIlsxcwHnQsXSihdvex/ZUdPvuBSvUFny//PmFL1ADuXoTPzK', '1970-01-01', 1, NULL, '2019-03-02 17:52:53', '2019-03-02 17:52:53', 1, NULL, NULL, NULL, NULL, NULL, 'kevspoi@gmail.com'),
(54, 'Tim', '$2y$13$a3HJLcqdcvciwWLWUc/.seX5GgOm5TmmLNK0d0ZeKT9xRc855W7ea', '1970-01-01', 1, NULL, '2019-03-02 18:34:15', '2019-03-02 18:34:15', 1, NULL, NULL, NULL, NULL, NULL, 'tim.ist.gut@gmx.net'),
(55, 'Awsm.', '$2y$13$ul7l3xPPcC/ynXn1v.UW3.cGC.T.gSHyBhe6ErKqhbJN4RaC1MR3u', '1970-01-01', 1, NULL, '2019-03-03 01:47:51', '2019-03-03 01:47:51', 1, NULL, NULL, NULL, NULL, NULL, 'checkergtagamer@gmail.com'),
(56, 'pahsi', '$2y$13$6s/J1yWCF.m4S.8tGL1w/O1RAR3nCSbPESTDg6uWlPUHlAH0Z/4D6', '1970-01-01', 1, NULL, '2019-03-03 11:12:28', '2019-03-03 11:12:28', 1, NULL, NULL, NULL, NULL, NULL, 'pahsify@gmail.com'),
(57, 'Tazz', '$2y$13$FccnP59uYS2fWoc9xZV6Xupx37cWk4foZKecpOXFreuDWfWbzXQ5O', '1970-01-01', 1, NULL, '2019-03-03 12:37:21', '2019-03-03 12:37:21', 1, NULL, NULL, NULL, NULL, NULL, 'jannikmaier5@gmail.com'),
(58, 'leo19993', '$2y$13$ukx0ZMIbyxL0kCCO4ojiC.JwgXCU3VpWUmWqB8yEMKAKCeRWRLv8K', '1970-01-01', 1, NULL, '2019-03-03 12:41:42', '2019-03-03 12:41:42', 1, NULL, NULL, NULL, NULL, NULL, 'leoeffer@live.de'),
(59, 'tobey', '$2y$13$fddkFciTbl4n0uGG8j8Er.lPzHxPIBr2x0wjlyGwagK5N1crRxwbK', '1970-01-01', 1, NULL, '2019-03-03 12:48:21', '2019-03-03 12:48:21', 1, NULL, NULL, NULL, NULL, NULL, 'tobi.grabert01@gmail.com'),
(60, 'Zeddo', '$2y$13$ocgJuTMca.EXXY.0Up9DNO3nUQHMavo9qRXJym9yHIVub9zztNZZy', '1970-01-01', 1, NULL, '2019-03-03 12:54:53', '2019-03-03 12:54:53', 1, NULL, NULL, NULL, NULL, NULL, 'florianrahden@ewe.net'),
(61, 'Jonas', '$2y$13$4lKeAHmCwVkk6jwONj6C7.wWRJxWtNs2PVIMmipNQAa43OZBJD0Ee', '1970-01-01', 1, NULL, '2019-03-03 12:55:09', '2019-03-03 12:55:09', 1, NULL, NULL, NULL, NULL, NULL, 'Jonas.ecxyt@gmail.com'),
(62, 'Rexonik', '$2y$13$8M16ZioPG.bVEiQ2LAXkgO/JNtVK2/FzxAsGneT5JYXo0sYAn71RC', '1970-01-01', 1, NULL, '2019-03-03 13:17:19', '2019-03-03 13:17:19', 1, NULL, NULL, NULL, NULL, NULL, 'tavasliteo@hotmail.com'),
(63, 'Celestial', '$2y$13$QFjJ3lkcifNWYgGI91MLI.YXnPTriHIa2p4C03jouAuBLjJbiYnaW', '1970-01-01', 3, NULL, '2019-03-03 13:57:30', '2019-03-03 13:57:30', 1, NULL, NULL, NULL, NULL, NULL, 'verock2001@gmail.com'),
(64, 'vergot', '$2y$13$lCtxQsbYFPq0mP4sVfPaaOccwGZkitUTAAknY/StgAAi5B2D2a/0G', '1970-01-01', 1, NULL, '2019-03-03 13:59:57', '2019-03-03 13:59:57', 1, NULL, NULL, NULL, NULL, NULL, 'kevin.mittermeier@web.de'),
(65, 'Heerscher', '$2y$13$nPGGrqqUWO4kDWhkX34oe.H0oeYWWDGR191nq3b0MHVkBOxCOqb/S', '1970-01-01', 1, NULL, '2019-03-03 14:30:14', '2019-03-03 14:30:14', 1, NULL, NULL, NULL, NULL, NULL, 'ravellheerdegen@outlook.com'),
(66, 'zignaf', '$2y$13$qzhj2OAPJPwBITrw4UglEeGjf4HF4TT5Z.W9qiTuBRvPcy6SXrdy6', '1970-01-01', 1, NULL, '2019-03-03 14:46:27', '2019-03-03 14:46:27', 2, NULL, NULL, NULL, NULL, NULL, 'lourenco.anthonym@gmail.com'),
(67, 'IronJulia', '$2y$13$G.s6c4qQIJvaC0EweIcAW.IB6p/UpVY0PqrufqniGOKb014Flgip6', '1970-01-01', 2, NULL, '2019-03-03 14:50:52', '2019-03-03 14:50:52', 1, NULL, NULL, NULL, NULL, NULL, 'jule3535@gmail.com'),
(68, 'Lexxa', '$2y$13$ptSRioSy3BJMnYVMWONazeV9ATNh2ak3weZDAPApUbpv0uUCkT16q', '1970-01-01', 1, NULL, '2019-03-03 15:20:10', '2019-03-03 15:20:10', 2, NULL, NULL, NULL, NULL, NULL, 'alexkyntaja@gmail.com'),
(69, 'Fanta', '$2y$13$BJkzIk8tOz/ybz4REKnIKuX1HCWATY.jJLSZmi7BAblHtq8UXBmvy', '1970-01-01', 1, NULL, '2019-03-03 15:28:31', '2019-03-03 15:28:31', 2, NULL, NULL, NULL, NULL, NULL, 'fantagamer@hotmail.com'),
(70, 'eXtr3mer', '$2y$13$/m1.4QRhjoKlTTW8u.yY6eRCo5tSbClNOJxQ0ecPG8CoxxCAP1q.O', '1970-01-01', 1, NULL, '2019-03-03 16:21:50', '2019-03-03 16:21:50', 1, NULL, NULL, NULL, NULL, NULL, 'forganberdar@gmail.com'),
(71, 'Taubenhaucher', '$2y$13$TiSW3rHTBe.5diO6pMlYEOYGVUVPiioUz.TzCf1XMKNPfCHa4il9m', '1970-01-01', 1, NULL, '2019-03-03 16:27:03', '2019-03-03 16:27:03', 1, NULL, NULL, NULL, NULL, NULL, 'philipp.then@freenet.de'),
(72, 'WaterFlame14', '$2y$13$aN01L43Cap1PS8uj7VYj1Og5xxoYLrHiehh3F4taBFlnO1eDxcqO.', '1970-01-01', 1, NULL, '2019-03-03 16:27:59', '2019-03-03 16:27:59', 1, NULL, NULL, NULL, NULL, NULL, 'david.bonhag@t-online.de'),
(73, 'vandaleon271', '$2y$13$mT6VtxR0R0Ch8Wa1Imk/Z.ejzr9KErcb53x7pMlDt4V5UZhULn9l.', '1970-01-01', 1, NULL, '2019-03-03 16:31:37', '2019-03-03 16:31:37', 1, NULL, NULL, NULL, NULL, NULL, 'burton.leon@live.com'),
(74, 'NaiT', '$2y$13$99UjECgyRiaJyV2P7BOWjeLw2Od7Ep5ZgTi7AcshOf5Csjw7YJpMq', '1970-01-01', 1, NULL, '2019-03-03 16:32:28', '2019-03-03 16:32:28', 1, NULL, NULL, NULL, NULL, NULL, 'truschelj@hotmail.de'),
(75, 'Zorn07', '$2y$13$zHUqq5/zpDV1/QNxjgzqgeWOuDDnozhqVgza8BSEsoG4Yrc6K7uR6', '1970-01-01', 1, NULL, '2019-03-03 16:54:46', '2019-03-03 16:54:46', 2, NULL, NULL, NULL, NULL, NULL, 'rocketleagueclips0557@gmail.com'),
(76, 'Bax-_-ter', '$2y$13$2XdOcQZxaa/Qnk5xLikg6.o6SpUeVS8hwieKudZt02ATNZzo4toKe', '1970-01-01', 1, NULL, '2019-03-03 16:58:58', '2019-03-03 16:58:58', 2, NULL, NULL, NULL, NULL, NULL, 'getmegc@outlook.com'),
(77, 'Maczii', '$2y$13$z9iBPvzqbvo/7PGr0SYM3.VbeOhecvorXU7.E/r6UezdWJWacRZ5i', '1970-01-01', 1, NULL, '2019-03-03 17:10:34', '2019-03-03 17:10:34', 1, NULL, NULL, NULL, NULL, NULL, 'mirco.marczinzek1@web.de'),
(78, 'sverin99', '$2y$13$rpdcgMoDyv46eW0vbFRJDuW40IEnWRPjoOUA8hKdHVprzTD24Ukeu', '1970-01-01', 1, NULL, '2019-03-03 17:15:24', '2019-03-03 17:15:24', 1, NULL, NULL, NULL, NULL, NULL, 'sverin99@arcor.de'),
(79, 'Paddy', '$2y$13$OUhkZUZAJXlpdYsBRt81dOJR9iqnsciaplC5qk1.IRKCbOSfu425W', '1970-01-01', 1, NULL, '2019-03-03 20:10:01', '2019-03-03 20:10:01', 1, NULL, NULL, NULL, NULL, NULL, 'phofleitner23@gmail.com'),
(80, 'Phix', '$2y$13$ctjCNPn9nO6crM39AaPUvujzprnBn2F5n8hb7YJ36VIcn01I14tTC', '2003-10-18', 1, NULL, '2019-03-03 21:30:49', '2019-03-03 21:30:49', 1, NULL, NULL, NULL, NULL, NULL, 'officialphixrl@gmail.com'),
(81, 'Pandastiko ', '$2y$13$4xSAHdxuXQh317sdSxLkjOQxF0vWvrAd0KQR84PpdNqpRfUEByEuy', '1970-01-01', 1, NULL, '2019-03-03 22:04:47', '2019-03-03 22:04:47', 1, NULL, NULL, NULL, NULL, NULL, 'mischakaelin2.0@gmail.com'),
(82, 'GlaedrOromis', '$2y$13$Espd4EC/G14huBcgXePneuUwGPUKRebIGXqXlm1gy/bDKP8AAYUN.', '1970-01-01', 1, NULL, '2019-03-08 17:28:01', '2019-03-08 17:28:01', 1, NULL, NULL, NULL, NULL, NULL, 'pietwagner02@gmail.com'),
(83, 'Covari', '$2y$13$s7BvdH9lLfm5DkiLxOABiO57szIYLAi9S/WeICbkxZ/XGOnzsY8O6', '1970-01-01', 1, 1, '2019-03-12 16:08:20', '2019-03-12 16:08:20', 1, NULL, NULL, NULL, NULL, NULL, 'felix.salomo1102@gmail.com'),
(84, 'RLRene', '$2y$13$HRhSXAEVLunYr0PZqldoouwblRiy4GL84edIgz7GU3Lr2wFwyy2Uq', '1970-01-01', 1, 1, '2019-03-13 20:03:55', '2019-03-13 20:03:55', 1, NULL, NULL, NULL, NULL, NULL, 'nessaja91@web.de'),
(85, 'whitefire', '$2y$13$bLs61IbJ3LPHVEEsMibHXeXVTQ6XmMwLyYDnG5DGkq8BcKCn1PxUK', '1970-01-01', 1, 12, '2019-03-13 22:28:23', '2019-03-13 22:28:23', 2, NULL, NULL, NULL, NULL, NULL, 'henning.kvinnesland@gmail.com'),
(86, 'Stonie', '$2y$13$XmZCx8eFbnrmgsKzMd.PduJvPF0.GxpB0mrC..PJdYIks/0cKE0/K', '1970-01-01', 1, 3, '2019-03-14 17:01:06', '2019-03-14 17:01:06', 1, NULL, NULL, NULL, NULL, NULL, 'dam.bruelhart@gmail.com'),
(87, 'Swiches', '$2y$13$RnsBRm3sfHxQA/ErAe5mEep3qrmnpnQ69UXh3E2aQV1f74jzf7/OK', '1970-01-01', 1, 1, '2019-03-14 19:42:10', '2019-03-14 19:42:10', 1, NULL, NULL, NULL, NULL, NULL, 'Finn.Lorenz@hotmail.com'),
(88, 'Xania', '$2y$13$zVjXiQlyfEisIF8oyvFmH.rNbcFMz7G6hp6USftoh3m52lTFRgsdC', '1970-01-01', 1, 1, '2019-03-14 23:11:00', '2019-03-14 23:11:00', 1, NULL, NULL, NULL, NULL, NULL, 'jamursel@gmail.com');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_games`
--

CREATE TABLE `user_games` (
  `user_id` int(11) NOT NULL,
  `games_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_stats`
--

CREATE TABLE `user_stats` (
  `user_id` int(11) NOT NULL,
  `tournament_encounter_points_id` int(11) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  `assists` int(11) DEFAULT NULL,
  `saves` int(11) DEFAULT NULL,
  `shots` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bracket_mode`
--
ALTER TABLE `bracket_mode`
  ADD PRIMARY KEY (`bracket_mode_id`);

--
-- Indizes für die Tabelle `bracket_mode_i18n`
--
ALTER TABLE `bracket_mode_i18n`
  ADD PRIMARY KEY (`bracket_mode_id`,`language_id`);

--
-- Indizes für die Tabelle `cups`
--
ALTER TABLE `cups`
  ADD PRIMARY KEY (`cup_id`);

--
-- Indizes für die Tabelle `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`games_id`);

--
-- Indizes für die Tabelle `games_i18n`
--
ALTER TABLE `games_i18n`
  ADD PRIMARY KEY (`games_id`,`language_id`);

--
-- Indizes für die Tabelle `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indizes für die Tabelle `gender_i18n`
--
ALTER TABLE `gender_i18n`
  ADD PRIMARY KEY (`gender_id`,`language_id`);

--
-- Indizes für die Tabelle `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indizes für die Tabelle `language_i18n`
--
ALTER TABLE `language_i18n`
  ADD PRIMARY KEY (`id`,`language_id`);

--
-- Indizes für die Tabelle `main_team`
--
ALTER TABLE `main_team`
  ADD PRIMARY KEY (`team_id`,`owner_id`),
  ADD UNIQUE KEY `owner_id_UNIQUE` (`owner_id`),
  ADD UNIQUE KEY `team_id_UNIQUE` (`team_id`),
  ADD KEY `FK_main_team_owner_id_idx` (`owner_id`),
  ADD KEY `FK_main_team_headquarter_id_idx` (`headquarter_id`);

--
-- Indizes für die Tabelle `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indizes für die Tabelle `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Indizes für die Tabelle `player_participating`
--
ALTER TABLE `player_participating`
  ADD PRIMARY KEY (`tournament_id`,`user_id`),
  ADD KEY `FK_player_participating_user_id_idx` (`user_id`);

--
-- Indizes für die Tabelle `sub_team`
--
ALTER TABLE `sub_team`
  ADD PRIMARY KEY (`sub_team_id`,`main_team_id`,`game_id`,`team_captain_id`),
  ADD UNIQUE KEY `sub_team_id_UNIQUE` (`sub_team_id`),
  ADD KEY `FK_sub_team_main_team_id_idx` (`main_team_id`),
  ADD KEY `FK_sub_team_game_id_idx` (`game_id`),
  ADD KEY `FK_sub_team_tournament_mode_id_idx` (`tournament_mode_id`),
  ADD KEY `FK_sub_team_team_captain_is_idx` (`team_captain_id`),
  ADD KEY `FK_sub_team_headwquarter_id_idx` (`headquarter_id`);

--
-- Indizes für die Tabelle `sub_team_member`
--
ALTER TABLE `sub_team_member`
  ADD PRIMARY KEY (`user_id`,`sub_team_id`),
  ADD KEY `FK_sub_team_member_user_id_idx` (`user_id`),
  ADD KEY `FK_sub_team_member_sub_team_id` (`sub_team_id`);

--
-- Indizes für die Tabelle `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`team_id`,`user_id`),
  ADD KEY `FK_team_member_user_id_idx` (`user_id`);

--
-- Indizes für die Tabelle `team_participating`
--
ALTER TABLE `team_participating`
  ADD PRIMARY KEY (`tournament_id`,`sub_team_id`),
  ADD KEY `FK_team_participating_tournament_id_idx` (`tournament_id`),
  ADD KEY `FK_team_participating_team_id_idx` (`sub_team_id`);

--
-- Indizes für die Tabelle `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`tournament_id`),
  ADD KEY `rl_tournaments_mmode_id_idx` (`mode_id`),
  ADD KEY `rl_tournnament_rules_id_idx` (`rules_id`),
  ADD KEY `FK_rl_tournament_game_id_idx` (`game_id`),
  ADD KEY `FK_tournaments_bracket_id_idx` (`bracket_id`),
  ADD KEY `FK_tournaments_cup_id_idx` (`cup_id`);

--
-- Indizes für die Tabelle `tournament_encounter`
--
ALTER TABLE `tournament_encounter`
  ADD PRIMARY KEY (`encounter_id`),
  ADD KEY `FK_tournament_encounte_tournamentr_id_idx` (`tournament_id`),
  ADD KEY `FK_tournament_encounter_team_1_id_idx` (`team_1_id`),
  ADD KEY `FK_tournament_encounter_team_2_id_idx` (`team_2_id`),
  ADD KEY `FK_tournament_encounter_player_1_id_idx` (`player_1_id`),
  ADD KEY `FK_tournament_encounter_player_2_id_idx` (`player_2_id`);

--
-- Indizes für die Tabelle `tournament_encounter_points`
--
ALTER TABLE `tournament_encounter_points`
  ADD PRIMARY KEY (`encounter_points_id`,`encounter_id`,`game_round`),
  ADD KEY `FK_tournament_encounter_points_encounter_id_idx` (`encounter_id`),
  ADD KEY `FK_tournament_encounter_points_winner_team_id_idx` (`winner_team_id`),
  ADD KEY `FK_tournament_encounter_points_winner_player_id_idx` (`winner_player_id`);

--
-- Indizes für die Tabelle `tournament_mode`
--
ALTER TABLE `tournament_mode`
  ADD PRIMARY KEY (`mode_id`,`game_id`),
  ADD KEY `FK_tournament_mode_game_id_idx` (`game_id`);

--
-- Indizes für die Tabelle `tournament_mode_i18n`
--
ALTER TABLE `tournament_mode_i18n`
  ADD PRIMARY KEY (`mode_id`,`language_id`);

--
-- Indizes für die Tabelle `tournament_rules`
--
ALTER TABLE `tournament_rules`
  ADD PRIMARY KEY (`rules_id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `FK_tournament_rules_game_id_idx` (`game_id`);

--
-- Indizes für die Tabelle `tournament_subrules`
--
ALTER TABLE `tournament_subrules`
  ADD PRIMARY KEY (`subrule_id`),
  ADD KEY `FK_tournament_subrules_id` (`rules_id`);

--
-- Indizes für die Tabelle `tournament_subrules_i18n`
--
ALTER TABLE `tournament_subrules_i18n`
  ADD PRIMARY KEY (`subrule_id`,`language_id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `FK_user_gender_id_idx` (`gender_id`),
  ADD KEY `FK_user_language_id_idx` (`language_id`),
  ADD KEY `FK_user_nationality_id_idx` (`nationality_id`);

--
-- Indizes für die Tabelle `user_games`
--
ALTER TABLE `user_games`
  ADD PRIMARY KEY (`user_id`,`games_id`),
  ADD KEY `FK_user_games_games_id_idx` (`games_id`);

--
-- Indizes für die Tabelle `user_stats`
--
ALTER TABLE `user_stats`
  ADD PRIMARY KEY (`user_id`,`tournament_encounter_points_id`),
  ADD KEY `FK_user_stats_tournament_encounter_points_id_idx` (`tournament_encounter_points_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cups`
--
ALTER TABLE `cups`
  MODIFY `cup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `main_team`
--
ALTER TABLE `main_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `sub_team`
--
ALTER TABLE `sub_team`
  MODIFY `sub_team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bracket_mode_i18n`
--
ALTER TABLE `bracket_mode_i18n`
  ADD CONSTRAINT `FK_bracket_mode_i18n_id` FOREIGN KEY (`bracket_mode_id`) REFERENCES `bracket_mode` (`bracket_mode_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `games_i18n`
--
ALTER TABLE `games_i18n`
  ADD CONSTRAINT `games_i18n_id` FOREIGN KEY (`games_id`) REFERENCES `games` (`games_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `gender_i18n`
--
ALTER TABLE `gender_i18n`
  ADD CONSTRAINT `FK_gender_i18n_gender_id` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `language_i18n`
--
ALTER TABLE `language_i18n`
  ADD CONSTRAINT `FK_language_i18n_language_id` FOREIGN KEY (`id`) REFERENCES `language` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `main_team`
--
ALTER TABLE `main_team`
  ADD CONSTRAINT `FK_main_team_headquarter_id` FOREIGN KEY (`headquarter_id`) REFERENCES `nationality` (`nationality_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_main_team_owner_id` FOREIGN KEY (`owner_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `player_participating`
--
ALTER TABLE `player_participating`
  ADD CONSTRAINT `FK_player_participating_tournament_id` FOREIGN KEY (`tournament_id`) REFERENCES `tournaments` (`tournament_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_player_participating_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `sub_team`
--
ALTER TABLE `sub_team`
  ADD CONSTRAINT `FK_sub_team_game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`games_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sub_team_headwquarter_id` FOREIGN KEY (`headquarter_id`) REFERENCES `nationality` (`nationality_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sub_team_main_team_id` FOREIGN KEY (`main_team_id`) REFERENCES `main_team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sub_team_team_captain_is` FOREIGN KEY (`team_captain_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sub_team_tournament_mode_id` FOREIGN KEY (`tournament_mode_id`) REFERENCES `tournament_mode` (`mode_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `sub_team_member`
--
ALTER TABLE `sub_team_member`
  ADD CONSTRAINT `FK_sub_team_member_sub_team_id` FOREIGN KEY (`sub_team_id`) REFERENCES `sub_team` (`sub_team_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sub_team_member_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `team_member`
--
ALTER TABLE `team_member`
  ADD CONSTRAINT `FK_team_member_team_id` FOREIGN KEY (`team_id`) REFERENCES `main_team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_team_member_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `team_participating`
--
ALTER TABLE `team_participating`
  ADD CONSTRAINT `FK_team_participating_team_id` FOREIGN KEY (`sub_team_id`) REFERENCES `sub_team` (`sub_team_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_team_participating_tournament_id` FOREIGN KEY (`tournament_id`) REFERENCES `tournaments` (`tournament_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tournaments`
--
ALTER TABLE `tournaments`
  ADD CONSTRAINT `FK_tournament_game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`games_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournaments_bracket_id` FOREIGN KEY (`bracket_id`) REFERENCES `bracket_mode` (`bracket_mode_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournaments_cup_id` FOREIGN KEY (`cup_id`) REFERENCES `cups` (`cup_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournaments_mode_id` FOREIGN KEY (`mode_id`) REFERENCES `tournament_mode` (`mode_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournaments_rules_id` FOREIGN KEY (`rules_id`) REFERENCES `tournament_rules` (`rules_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tournament_encounter`
--
ALTER TABLE `tournament_encounter`
  ADD CONSTRAINT `FK_tournament_encounte_tournamentr_id` FOREIGN KEY (`tournament_id`) REFERENCES `tournaments` (`tournament_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournament_encounter_player_1_id` FOREIGN KEY (`player_1_id`) REFERENCES `player_participating` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournament_encounter_player_2_id` FOREIGN KEY (`player_2_id`) REFERENCES `player_participating` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournament_encounter_team_1_id` FOREIGN KEY (`team_1_id`) REFERENCES `team_participating` (`sub_team_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournament_encounter_team_2_id` FOREIGN KEY (`team_2_id`) REFERENCES `team_participating` (`sub_team_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tournament_encounter_points`
--
ALTER TABLE `tournament_encounter_points`
  ADD CONSTRAINT `FK_tournament_encounter_points_encounter_id` FOREIGN KEY (`encounter_id`) REFERENCES `tournament_encounter` (`encounter_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournament_encounter_points_winner_player_id` FOREIGN KEY (`winner_player_id`) REFERENCES `player_participating` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tournament_encounter_points_winner_team_id` FOREIGN KEY (`winner_team_id`) REFERENCES `team_participating` (`sub_team_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tournament_mode`
--
ALTER TABLE `tournament_mode`
  ADD CONSTRAINT `FK_tournament_mode_game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`games_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tournament_mode_i18n`
--
ALTER TABLE `tournament_mode_i18n`
  ADD CONSTRAINT `FK_tournament_mode_i18n_id` FOREIGN KEY (`mode_id`) REFERENCES `tournament_mode` (`mode_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tournament_rules`
--
ALTER TABLE `tournament_rules`
  ADD CONSTRAINT `FK_tournament_rules_game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`games_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tournament_subrules`
--
ALTER TABLE `tournament_subrules`
  ADD CONSTRAINT `FK_tournament_subrules_id` FOREIGN KEY (`rules_id`) REFERENCES `tournament_rules` (`rules_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tournament_subrules_i18n`
--
ALTER TABLE `tournament_subrules_i18n`
  ADD CONSTRAINT `FK_tournament_subrules_i18n_id` FOREIGN KEY (`subrule_id`) REFERENCES `tournament_subrules` (`subrule_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_gender_id` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`language_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_nationality_id` FOREIGN KEY (`nationality_id`) REFERENCES `nationality` (`nationality_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints der Tabelle `user_games`
--
ALTER TABLE `user_games`
  ADD CONSTRAINT `FK_user_games_games_id` FOREIGN KEY (`games_id`) REFERENCES `games` (`games_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_games_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `user_stats`
--
ALTER TABLE `user_stats`
  ADD CONSTRAINT `FK_user_stats_tournament_encounter_points_id` FOREIGN KEY (`tournament_encounter_points_id`) REFERENCES `tournament_encounter_points` (`encounter_points_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_stats_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
