-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Mrz 2019 um 13:25
-- Server-Version: 10.1.38-MariaDB
-- PHP-Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `project-esport`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender_id` int(11) DEFAULT NULL,
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

INSERT INTO `user` (`user_id`, `username`, `password`, `birthday`, `gender_id`, `dt_created`, `dt_updated`, `language_id`, `pre_name`, `last_name`, `zip_code`, `city`, `street`, `email`) VALUES
(2, 'Birnchen', '$2y$13$BFuY5ZmWvptagWoiaCg4quNxd5R4HGjkLdibC3r0lYpNLQwNzQ2.6', '1970-01-01', 1, '2019-02-27 22:28:13', '2019-02-27 22:28:13', 1, NULL, NULL, NULL, NULL, NULL, 'p.koehler@birnchen-studios.de'),
(3, 'Niyari', '$2y$13$uGmCGbRTGoDnH0JNfZlYruYy80DIQda51CpSSJ/QYTu9syCmiEtXa', '1970-01-01', 2, '2019-02-27 22:31:30', '2019-02-27 22:31:30', 1, NULL, NULL, NULL, NULL, NULL, 'l.riehm@birnchen-studios.de'),
(4, 'Captain Salty', '$2y$13$dkTAbtNib/wF2Dmxqs5nveULRbk9QrRQFJiVkq.cQtB2cCJWAuF4u', '1970-01-01', 1, '2019-02-27 22:34:57', '2019-02-27 22:34:57', 1, NULL, NULL, NULL, NULL, NULL, 'freezerxxl@gmx.net'),
(5, 'MeisterSmoje', '$2y$13$DBZM4a2LhirHDM4tUE7g1OxWI87w8r4Xz5hriwQXM0QNb.jsbdnbi', '1970-01-01', 1, '2019-02-27 23:14:27', '2019-02-27 23:14:27', 1, NULL, NULL, NULL, NULL, NULL, 'GamerAndroid951@gmx.de'),
(6, 'El Viper', '$2y$13$RMCnfBmUvhaLrZUFVNoag.tU3gyeNE4pxHBb2uwco/Zf6vsXggUWe', '1970-01-01', 1, '2019-02-27 23:23:41', '2019-02-27 23:23:41', 1, NULL, NULL, NULL, NULL, NULL, 'pascal-mannstedt@gmx.de'),
(7, 'JaePaenda;', '$2y$13$j6L.pPWrqjzLs/.lk6KOaePUoY1I7JwMb.muw6vKCUPRnpl/N7wXO', '1970-01-01', 1, '2019-02-27 23:30:40', '2019-02-27 23:30:40', 1, NULL, NULL, NULL, NULL, NULL, 'henni80000@gmx.de'),
(8, 'JaePaenda', '$2y$13$16IIz7ANr5XRxca9BD6H7eGfnPdODXq9WMM0F7LBkHnM/jMw3r3ze', '1970-01-01', 1, '2019-02-27 23:35:05', '2019-02-27 23:35:05', 1, NULL, NULL, NULL, NULL, NULL, 'henni800000@gmx.de'),
(9, 'Korazu', '$2y$13$iCGKalPKikEYWo4iGeVxn.bSoyT0.tYMmWMCpweTk/iJRYYGtFzqm', '1970-01-01', 1, '2019-02-28 11:04:02', '2019-02-28 11:04:02', 1, NULL, NULL, NULL, NULL, NULL, 'KurakoHD@gmail.com'),
(10, 'Miksiplayz', '$2y$13$YcqnxAtG/pYY2kOsnQuIaOiwtkThOucwxFEPnqHPGXO9Z2QUaydTW', '1970-01-01', 1, '2019-02-28 13:16:14', '2019-02-28 13:16:14', 1, NULL, NULL, NULL, NULL, NULL, 'k.vonzansen@gmx.de'),
(11, 'Corah', '$2y$13$B/puT4e9V4081AwePVigFOchtg8TC2Z7I8nwGAjIBAORs3M1kMxXO', '1970-01-01', 2, '2019-02-28 15:18:54', '2019-02-28 15:18:54', 1, NULL, NULL, NULL, NULL, NULL, 'sarahrueegi@gmail.com'),
(12, 'Marc', '$2y$13$qJDn20c.sfvPZEKnv7nw6.H6MyggGLIGgOVdIwyoJ4iCEdvPm2F8G', '1970-01-01', 1, '2019-02-28 15:23:02', '2019-02-28 15:23:02', 1, NULL, NULL, NULL, NULL, NULL, 'deganimarc@gmail.com'),
(13, 'Mr_Viper', '$2y$13$wg.7s11r5oRdI2ge.Apgqu0FqO06ArRUrncSWX6BUatdgM/Phj/TG', '1970-01-01', 1, '2019-02-28 20:32:23', '2019-02-28 20:32:23', 1, NULL, NULL, NULL, NULL, NULL, 'g.schwitalla@gmx.de'),
(14, 'ZombieEcki', '$2y$13$8IzFe3EMBaZAoc6Vsg6FPOxczHKK2/vvw5tvROm7FjVDBIEDBRiI2', '1970-01-01', 1, '2019-02-28 21:29:22', '2019-02-28 21:29:22', 1, NULL, NULL, NULL, NULL, NULL, 'liam.eckhof@gmail.com'),
(15, 'TG KappaKater', '$2y$13$yCgMJV8KDPii09lCUtkH2ujP.kL1YQeTn78yqCxAElQD7EKmyA5ja', '1970-01-01', 1, '2019-02-28 21:29:24', '2019-02-28 21:29:24', 1, NULL, NULL, NULL, NULL, NULL, 'babawagen41@gmail.com'),
(16, 'FightNight9929', '$2y$13$4LTvAXCWufR5pzvC6Rmc2uhJL1EQaFpqT0PCNPYNgScKJhcHp.fjG', '1970-01-01', 1, '2019-02-28 22:38:22', '2019-02-28 22:38:22', 1, NULL, NULL, NULL, NULL, NULL, '99FightNight29@gmail.com'),
(17, 'StevieT', '$2y$13$XcHpgq0QV7emepdpvCmF4Oi.4Tjn2rS7Tg93145XOnAZnUpdn1rVe', '1970-01-01', 1, '2019-03-01 07:23:05', '2019-03-01 07:23:05', 1, NULL, NULL, NULL, NULL, NULL, 'steve.chlupka@gmail.com'),
(18, 'DxrkTT', '$2y$13$h5tEv1LYR30blfBFlYW1EukcrE/i2kPv6e/57FDJGGJogT9bDj06m', '1970-01-01', 1, '2019-03-01 08:16:25', '2019-03-01 08:16:25', 1, NULL, NULL, NULL, NULL, NULL, 'me18alq@gmail.com'),
(19, 'ghostkilla.', '$2y$13$vPF/UmXHFPjjFSRZuLm.B.fVg.UqCJ7MhzQPThSnU8KNdri9AdfPa', '1970-01-01', 1, '2019-03-01 09:49:46', '2019-03-01 09:49:46', 1, NULL, NULL, NULL, NULL, NULL, 'xremex2006@gmail.com'),
(20, 'Mythos1895', '$2y$13$AcztND9f8qE1iZSkFfORYejgQy3fQ..g9E6cHps9a9BjprL6iTQ.q', '1970-01-01', 1, '2019-03-01 10:47:37', '2019-03-01 10:47:37', 1, NULL, NULL, NULL, NULL, NULL, 'unger.finanzen@web.de'),
(21, 'Stompy', '$2y$13$lspptDElTZG0P0wx5528m.22hBKxNGtUnFYuUQ0hDV1cYQIH4RjXa', '1970-01-01', 1, '2019-03-01 13:04:56', '2019-03-01 13:04:56', 1, NULL, NULL, NULL, NULL, NULL, 'alexanderskrob@gmail.com'),
(22, 'P1st0lpr0', '$2y$13$kr1hvCpTena/bBJaoV0hDOUR9e.Lq630WPdpBZvqmcbT6FlGx06IK', '1970-01-01', 1, '2019-03-01 13:34:26', '2019-03-01 13:34:26', 1, NULL, NULL, NULL, NULL, NULL, 'roboticeliteclan@gmail.com'),
(23, 'BassRL', '$2y$13$N/mTiKbbVlO1f4U/xxVmF.JQ1FxhKMzI/vTESyF1pVdwcT5S8xZJO', '1970-01-01', 1, '2019-03-01 13:46:22', '2019-03-01 13:46:22', 1, NULL, NULL, NULL, NULL, NULL, 'pascalbrand2@web.de'),
(24, 'TeamFireWall', '$2y$13$53f0RZJ3usUGuyfHI1l9fOP1E0osLDtaJhviRwCgL2QwLzNxfqgNy', '1970-01-01', 1, '2019-03-01 13:58:46', '2019-03-01 13:58:46', 1, NULL, NULL, NULL, NULL, NULL, 'contact@teamfirewall.net'),
(25, 'Stealth7', '$2y$13$2.pIUpcpQjgdhk.GU9wI/OfE1Uzh7C0KKN6GOUZq8AQR5Wl70TyMe', '1970-01-01', 1, '2019-03-01 14:22:11', '2019-03-01 14:22:11', 1, NULL, NULL, NULL, NULL, NULL, 'stealth7esports@t-online.de'),
(26, 'Finex', '$2y$13$92NzHzTD7F.oFjTVJb/OyOsc6hd2vxo4VD4kt7fOT1cRh8X8ryX8e', '1970-01-01', 1, '2019-03-01 14:35:34', '2019-03-01 14:35:34', 1, NULL, NULL, NULL, NULL, NULL, 'wand516@gmail.com'),
(27, 'Senpaii / BlackRose', '$2y$13$sii1.wyHnNv1CpReFFUhC.I2MyEaiSDLqFxteZO4zOB7FTru/0Wsq', '1970-01-01', 1, '2019-03-01 15:44:51', '2019-03-01 15:44:51', 1, NULL, NULL, NULL, NULL, NULL, 'ohnezahnboyhicks@gmail.com'),
(28, 'Exokiller', '$2y$13$qCaV3lck6O9sxTTjgs3q8.zD9/6XtxFvZ/uCKCG0a7pitf0mveOWu', '1970-01-01', 1, '2019-03-01 17:15:11', '2019-03-01 17:15:11', 1, NULL, NULL, NULL, NULL, NULL, 'domi.katko@freenet.de'),
(29, 'Luzifer', '$2y$13$ZN3WM54Azi7Ft5Qx.brcX.3Fe6dqPxV/lXfTccsBPwm1.bSWbqcPa', '1970-01-01', 1, '2019-03-01 17:38:00', '2019-03-01 17:38:00', 1, NULL, NULL, NULL, NULL, NULL, 'nicksill@outlook.de'),
(30, 'Aero', '$2y$13$lvjVDprnjac3vo09xj3V5OXainb3v4tY9ftgZDkopnKJc4S/r2KtO', '1970-01-01', 1, '2019-03-01 18:09:39', '2019-03-01 18:09:39', 1, NULL, NULL, NULL, NULL, NULL, 'Fabian.Schlays@gmail.com'),
(31, 'DerLoard', '$2y$13$4Zv0DqjabqCus7IgiFqF3.hTO8Fg2jYeY3F4OCasgEhqZn5wfRroG', '1970-01-01', 1, '2019-03-01 18:09:47', '2019-03-01 18:09:47', 1, NULL, NULL, NULL, NULL, NULL, 'moha.alkhafaf2@gmail.com'),
(32, 'Nexon', '$2y$13$a5S.bNiXWjxZvwwlyGF2gewkL61bPtLBOCnZ3KSbEcEspUooC0hV2', '1970-01-01', 1, '2019-03-01 18:21:46', '2019-03-01 18:21:46', 1, NULL, NULL, NULL, NULL, NULL, 'Mlgmastergaming100@gmail.com'),
(33, 'Vxrus', '$2y$13$CAl5w5fHMciIb071DDMjOum0iUVpetKgi73dgkKW.kjrYK6gnH8ca', '1970-01-01', 1, '2019-03-01 18:24:38', '2019-03-01 18:24:38', 1, NULL, NULL, NULL, NULL, NULL, 'domi.badkreuznach@gmail.com'),
(34, 'Monster_GamerLP', '$2y$13$3AhtnQdhvwB0RzR4.VfMY.l1U8EWNk3HkUQ.Vu4CaY8VQytczMR/S', '1970-01-01', 1, '2019-03-01 18:55:28', '2019-03-01 18:55:28', 1, NULL, NULL, NULL, NULL, NULL, 'monsterschleimerlp@gmail.com'),
(35, 'Awxkeq', '$2y$13$C9tkFVwyajhc571W2mhdoOqJtHOl.0arvt5nKG0XNO/1Jy0TxiHOm', '1970-01-01', 1, '2019-03-01 20:09:51', '2019-03-01 20:09:51', 1, NULL, NULL, NULL, NULL, NULL, 'Mikeschoettle@gmx.de'),
(36, 'ZedeX', '$2y$13$jFELjcHrulk0GSwrkjhzheU0boI7NSN5G7i4WVukC6I2JP56kb1YG', '1970-01-01', 1, '2019-03-01 20:10:38', '2019-03-01 20:10:38', 1, NULL, NULL, NULL, NULL, NULL, 'zedexrl@gmail.com'),
(37, 'Flexxy', '$2y$13$Pq46sKbqRLp7yn9QZN8ehOBIz47q7glwnyUc59VCoBE.kg.8osfom', '1970-01-01', 1, '2019-03-01 21:00:55', '2019-03-01 21:00:55', 1, NULL, NULL, NULL, NULL, NULL, 'flexxyeu02@gmail.com'),
(38, 'NoAvian', '$2y$13$3qKVbgnTTPkxXwTeWwM1n.nN484eNDPEOaeLa7YKkQAEJ454Zk2Cy', '1970-01-01', 1, '2019-03-01 21:02:23', '2019-03-01 21:02:23', 1, NULL, NULL, NULL, NULL, NULL, 'blackzocker@gmx.net'),
(39, 'Krypton', '$2y$13$VGHGzKuEfM95lmGl1YnflOx6REuuuiLdloxQ8qy2kOIrZb781M9wC', '1970-01-01', 1, '2019-03-01 22:27:15', '2019-03-01 22:27:15', 1, NULL, NULL, NULL, NULL, NULL, 'feuersturm1604@gmail.com'),
(40, 'SoulSynergy', '$2y$13$3NkDW1cJNUfkfMEgopevTO4eZLFXMHvPrgMS0.2KMjdz3j/yYhzou', '1970-01-01', 1, '2019-03-02 08:24:02', '2019-03-02 08:24:02', 1, NULL, NULL, NULL, NULL, NULL, 'l.hutch@gmx.de'),
(41, 'swefli', '$2y$13$XcXBi3zLJl5YjViwqYOF7.UHlDFXHWS27lV4sN4x7xkFy0I2UYrmy', '1970-01-01', 1, '2019-03-02 08:51:55', '2019-03-02 08:51:55', 1, NULL, NULL, NULL, NULL, NULL, 'andi.winter02@bluewin.ch'),
(42, 'VTrayxX', '$2y$13$AvONIvtKMJL4TowEbiXGnOD4J0iY0gv6W1SeUixaXGwZmTQXQT3RW', '1970-01-01', 1, '2019-03-02 12:36:07', '2019-03-02 12:36:07', 1, NULL, NULL, NULL, NULL, NULL, 'PL2808@gmx.de'),
(43, 'OG_PulseGlxy', '$2y$13$RCwgENnGHX2au..HJGyR3uO98JJB84fHH9qW5ezN.InHTnT4r2nfO', '1970-01-01', 1, '2019-03-02 13:28:16', '2019-03-02 13:28:16', 1, NULL, NULL, NULL, NULL, NULL, 'denis.rocketleague@gmail.com'),
(44, 'serenity', '$2y$13$ePpoZfBVpdG1WUaXCJLS8ejSL0q/mfMV/Pl3z7lW3TVu/9DLVgWHy', '1970-01-01', 1, '2019-03-02 15:21:57', '2019-03-02 15:21:57', 1, NULL, NULL, NULL, NULL, NULL, 'besteacc@gmail.com'),
(45, 'cietrus', '$2y$13$pPplB1yeeSTKq65sjDL5PuMJuL0DjRyIV87EAzQnRX2YxVwZdT6yS', '1970-01-01', 1, '2019-03-02 15:22:13', '2019-03-02 15:22:13', 1, NULL, NULL, NULL, NULL, NULL, 'robinho_2011@hotmail.de'),
(46, 'Max | Thunder', '$2y$13$qQ0rGePd9ypEV.shNmdtiOzrk7RRkFqWXm0zfqCIwCkROQ7WwtynK', '1970-01-01', 1, '2019-03-02 16:00:52', '2019-03-02 16:00:52', 1, NULL, NULL, NULL, NULL, NULL, 'DermitzelMax@gmail.com'),
(47, 'ThunderToxic', '$2y$13$CU.JuhzPALDmCgy2eivV/u4REM63haX3TjXnYIIQ1mqg4zVXlcgfG', '1970-01-01', 3, '2019-03-02 16:01:28', '2019-03-02 16:01:28', 1, NULL, NULL, NULL, NULL, NULL, 'diegeljeremy@gmail.com'),
(48, 'paullingo', '$2y$13$tPLbNOEZKRygOOwtw407Vez/LOm/etnbc6bM6MHwfXwUOUTQx1mGu', '1970-01-01', 1, '2019-03-02 16:02:51', '2019-03-02 16:02:51', 1, NULL, NULL, NULL, NULL, NULL, 'alegre.paulo10@gmail.com'),
(49, 'Crime', '$2y$13$t8lFKI8H.rZ.OqWwr19QN.cprh17asbDzhuV7qOfp1S46BQO.FR7S', '1970-01-01', 1, '2019-03-02 16:05:35', '2019-03-02 16:05:35', 1, NULL, NULL, NULL, NULL, NULL, 'Poolchen05@gmail.com'),
(50, 'Caper93', '$2y$13$l0xf0NqMuPLw6E0Tq/cBOeRAyto029sTayhLG8suPq8gJRIp7qflK', '1970-01-01', 1, '2019-03-02 17:27:26', '2019-03-02 17:27:26', 1, NULL, NULL, NULL, NULL, NULL, 'simon454g@gmail.com'),
(51, 'Shila', '$2y$13$bIGQub11hTnh3/kgven9DewdYwjIPn/eKk5CwLyWT4PT5y4pG.f72', '1970-01-01', 1, '2019-03-02 17:34:16', '2019-03-02 17:34:16', 1, NULL, NULL, NULL, NULL, NULL, 'jonascekrezi@gmx.de'),
(52, 'OhJayyRL', '$2y$13$0X.MfOUMIwFcdVOs7Tpe3O0mnCLa5ptERVVaMrTB39S.IjIf29eEW', '1970-01-01', 1, '2019-03-02 17:38:43', '2019-03-02 17:38:43', 2, NULL, NULL, NULL, NULL, NULL, 'oliver.naughalty@kingswarrington.com'),
(53, 'Hunter.', '$2y$13$XrvgsIlsxcwHnQsXSihdvex/ZUdPvuBSvUFny//PmFL1ADuXoTPzK', '1970-01-01', 1, '2019-03-02 17:52:53', '2019-03-02 17:52:53', 1, NULL, NULL, NULL, NULL, NULL, 'kevspoi@gmail.com'),
(54, 'Tim', '$2y$13$a3HJLcqdcvciwWLWUc/.seX5GgOm5TmmLNK0d0ZeKT9xRc855W7ea', '1970-01-01', 1, '2019-03-02 18:34:15', '2019-03-02 18:34:15', 1, NULL, NULL, NULL, NULL, NULL, 'tim.ist.gut@gmx.net'),
(55, 'Awsm.', '$2y$13$ul7l3xPPcC/ynXn1v.UW3.cGC.T.gSHyBhe6ErKqhbJN4RaC1MR3u', '1970-01-01', 1, '2019-03-03 01:47:51', '2019-03-03 01:47:51', 1, NULL, NULL, NULL, NULL, NULL, 'checkergtagamer@gmail.com'),
(56, 'pahsi', '$2y$13$6s/J1yWCF.m4S.8tGL1w/O1RAR3nCSbPESTDg6uWlPUHlAH0Z/4D6', '1970-01-01', 1, '2019-03-03 11:12:28', '2019-03-03 11:12:28', 1, NULL, NULL, NULL, NULL, NULL, 'pahsify@gmail.com'),
(57, 'Tazz', '$2y$13$FccnP59uYS2fWoc9xZV6Xupx37cWk4foZKecpOXFreuDWfWbzXQ5O', '1970-01-01', 1, '2019-03-03 12:37:21', '2019-03-03 12:37:21', 1, NULL, NULL, NULL, NULL, NULL, 'jannikmaier5@gmail.com'),
(58, 'leo19993', '$2y$13$ukx0ZMIbyxL0kCCO4ojiC.JwgXCU3VpWUmWqB8yEMKAKCeRWRLv8K', '1970-01-01', 1, '2019-03-03 12:41:42', '2019-03-03 12:41:42', 1, NULL, NULL, NULL, NULL, NULL, 'leoeffer@live.de'),
(59, 'tobey', '$2y$13$fddkFciTbl4n0uGG8j8Er.lPzHxPIBr2x0wjlyGwagK5N1crRxwbK', '1970-01-01', 1, '2019-03-03 12:48:21', '2019-03-03 12:48:21', 1, NULL, NULL, NULL, NULL, NULL, 'tobi.grabert01@gmail.com'),
(60, 'Zeddo', '$2y$13$ocgJuTMca.EXXY.0Up9DNO3nUQHMavo9qRXJym9yHIVub9zztNZZy', '1970-01-01', 1, '2019-03-03 12:54:53', '2019-03-03 12:54:53', 1, NULL, NULL, NULL, NULL, NULL, 'florianrahden@ewe.net'),
(61, 'Jonas', '$2y$13$4lKeAHmCwVkk6jwONj6C7.wWRJxWtNs2PVIMmipNQAa43OZBJD0Ee', '1970-01-01', 1, '2019-03-03 12:55:09', '2019-03-03 12:55:09', 1, NULL, NULL, NULL, NULL, NULL, 'Jonas.ecxyt@gmail.com'),
(62, 'Rexonik', '$2y$13$8M16ZioPG.bVEiQ2LAXkgO/JNtVK2/FzxAsGneT5JYXo0sYAn71RC', '1970-01-01', 1, '2019-03-03 13:17:19', '2019-03-03 13:17:19', 1, NULL, NULL, NULL, NULL, NULL, 'tavasliteo@hotmail.com'),
(63, 'Celestial', '$2y$13$QFjJ3lkcifNWYgGI91MLI.YXnPTriHIa2p4C03jouAuBLjJbiYnaW', '1970-01-01', 3, '2019-03-03 13:57:30', '2019-03-03 13:57:30', 1, NULL, NULL, NULL, NULL, NULL, 'verock2001@gmail.com'),
(64, 'vergot', '$2y$13$lCtxQsbYFPq0mP4sVfPaaOccwGZkitUTAAknY/StgAAi5B2D2a/0G', '1970-01-01', 1, '2019-03-03 13:59:57', '2019-03-03 13:59:57', 1, NULL, NULL, NULL, NULL, NULL, 'kevin.mittermeier@web.de'),
(65, 'Heerscher', '$2y$13$nPGGrqqUWO4kDWhkX34oe.H0oeYWWDGR191nq3b0MHVkBOxCOqb/S', '1970-01-01', 1, '2019-03-03 14:30:14', '2019-03-03 14:30:14', 1, NULL, NULL, NULL, NULL, NULL, 'ravellheerdegen@outlook.com'),
(66, 'zignaf', '$2y$13$qzhj2OAPJPwBITrw4UglEeGjf4HF4TT5Z.W9qiTuBRvPcy6SXrdy6', '1970-01-01', 1, '2019-03-03 14:46:27', '2019-03-03 14:46:27', 2, NULL, NULL, NULL, NULL, NULL, 'lourenco.anthonym@gmail.com'),
(67, 'IronJulia', '$2y$13$G.s6c4qQIJvaC0EweIcAW.IB6p/UpVY0PqrufqniGOKb014Flgip6', '1970-01-01', 2, '2019-03-03 14:50:52', '2019-03-03 14:50:52', 1, NULL, NULL, NULL, NULL, NULL, 'jule3535@gmail.com'),
(68, 'Lexxa', '$2y$13$ptSRioSy3BJMnYVMWONazeV9ATNh2ak3weZDAPApUbpv0uUCkT16q', '1970-01-01', 1, '2019-03-03 15:20:10', '2019-03-03 15:20:10', 2, NULL, NULL, NULL, NULL, NULL, 'alexkyntaja@gmail.com'),
(69, 'Fanta', '$2y$13$BJkzIk8tOz/ybz4REKnIKuX1HCWATY.jJLSZmi7BAblHtq8UXBmvy', '1970-01-01', 1, '2019-03-03 15:28:31', '2019-03-03 15:28:31', 2, NULL, NULL, NULL, NULL, NULL, 'fantagamer@hotmail.com'),
(70, 'eXtr3mer', '$2y$13$/m1.4QRhjoKlTTW8u.yY6eRCo5tSbClNOJxQ0ecPG8CoxxCAP1q.O', '1970-01-01', 1, '2019-03-03 16:21:50', '2019-03-03 16:21:50', 1, NULL, NULL, NULL, NULL, NULL, 'forganberdar@gmail.com'),
(71, 'Taubenhaucher', '$2y$13$TiSW3rHTBe.5diO6pMlYEOYGVUVPiioUz.TzCf1XMKNPfCHa4il9m', '1970-01-01', 1, '2019-03-03 16:27:03', '2019-03-03 16:27:03', 1, NULL, NULL, NULL, NULL, NULL, 'philipp.then@freenet.de'),
(72, 'WaterFlame14', '$2y$13$aN01L43Cap1PS8uj7VYj1Og5xxoYLrHiehh3F4taBFlnO1eDxcqO.', '1970-01-01', 1, '2019-03-03 16:27:59', '2019-03-03 16:27:59', 1, NULL, NULL, NULL, NULL, NULL, 'david.bonhag@t-online.de'),
(73, 'vandaleon271', '$2y$13$mT6VtxR0R0Ch8Wa1Imk/Z.ejzr9KErcb53x7pMlDt4V5UZhULn9l.', '1970-01-01', 1, '2019-03-03 16:31:37', '2019-03-03 16:31:37', 1, NULL, NULL, NULL, NULL, NULL, 'burton.leon@live.com'),
(74, 'NaiT', '$2y$13$99UjECgyRiaJyV2P7BOWjeLw2Od7Ep5ZgTi7AcshOf5Csjw7YJpMq', '1970-01-01', 1, '2019-03-03 16:32:28', '2019-03-03 16:32:28', 1, NULL, NULL, NULL, NULL, NULL, 'truschelj@hotmail.de'),
(75, 'Zorn07', '$2y$13$zHUqq5/zpDV1/QNxjgzqgeWOuDDnozhqVgza8BSEsoG4Yrc6K7uR6', '1970-01-01', 1, '2019-03-03 16:54:46', '2019-03-03 16:54:46', 2, NULL, NULL, NULL, NULL, NULL, 'rocketleagueclips0557@gmail.com'),
(76, 'Bax-_-ter', '$2y$13$2XdOcQZxaa/Qnk5xLikg6.o6SpUeVS8hwieKudZt02ATNZzo4toKe', '1970-01-01', 1, '2019-03-03 16:58:58', '2019-03-03 16:58:58', 2, NULL, NULL, NULL, NULL, NULL, 'getmegc@outlook.com'),
(77, 'Maczii', '$2y$13$z9iBPvzqbvo/7PGr0SYM3.VbeOhecvorXU7.E/r6UezdWJWacRZ5i', '1970-01-01', 1, '2019-03-03 17:10:34', '2019-03-03 17:10:34', 1, NULL, NULL, NULL, NULL, NULL, 'mirco.marczinzek1@web.de'),
(78, 'sverin99', '$2y$13$rpdcgMoDyv46eW0vbFRJDuW40IEnWRPjoOUA8hKdHVprzTD24Ukeu', '1970-01-01', 1, '2019-03-03 17:15:24', '2019-03-03 17:15:24', 1, NULL, NULL, NULL, NULL, NULL, 'sverin99@arcor.de'),
(79, 'Paddy', '$2y$13$OUhkZUZAJXlpdYsBRt81dOJR9iqnsciaplC5qk1.IRKCbOSfu425W', '1970-01-01', 1, '2019-03-03 20:10:01', '2019-03-03 20:10:01', 1, NULL, NULL, NULL, NULL, NULL, 'phofleitner23@gmail.com'),
(80, 'Phix', '$2y$13$ctjCNPn9nO6crM39AaPUvujzprnBn2F5n8hb7YJ36VIcn01I14tTC', '1970-01-01', 1, '2019-03-03 21:30:49', '2019-03-03 21:30:49', 1, NULL, NULL, NULL, NULL, NULL, 'officialphixrl@gmail.com'),
(81, 'Pandastiko ', '$2y$13$4xSAHdxuXQh317sdSxLkjOQxF0vWvrAd0KQR84PpdNqpRfUEByEuy', '1970-01-01', 1, '2019-03-03 22:04:47', '2019-03-03 22:04:47', 1, NULL, NULL, NULL, NULL, NULL, 'mischakaelin2.0@gmail.com');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `user`
--

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `user`
--


--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `user`
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
