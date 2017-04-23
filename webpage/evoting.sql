-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Aprill 23, 2017 kell 01:06 PM
-- Serveri versioon: 10.1.21-MariaDB
-- PHP versioon: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `evoting`
--

DELIMITER $$
--
-- Toimingud
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Mark_Voted` (IN `_email` VARCHAR(50))  MODIFIES SQL DATA
UPDATE `users` SET `hasVoted`=1 WHERE `email`=`_email`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Register_Candidate` (IN `_id` INT(11), IN `_firstname` VARCHAR(50) CHARSET utf8, IN `_lastname` VARCHAR(50) CHARSET utf8, IN `_partei` VARCHAR(50) CHARSET utf8, IN `_maakond` VARCHAR(50), IN `_person_id` VARCHAR(20))  NO SQL
INSERT INTO `kandidaadid`(`id`, `firstName`, `lastName`, `partei`, `maakond`, `person_id`) VALUES (_id, _firstname, _lastname, _partei, _maakond, _person_id)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Register_FB_User` (IN `_id` VARCHAR(20), IN `_email` VARCHAR(100), IN `_firstname` VARCHAR(50), IN `_lastname` VARCHAR(50), IN `_gender` VARCHAR(10))  INSERT INTO `users` (`person_id`, `email`, `firstname`, `lastname`, `gender`) VALUES (_id, _email, _firstname, _lastname, _gender)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Register_User` (IN `_email` VARCHAR(100), IN `_firstname` VARCHAR(50), IN `_lastname` VARCHAR(50), IN `_person_id` VARCHAR(20), IN `_password` VARCHAR(128), IN `_birthdate` VARCHAR(50), IN `_gender` VARCHAR(50))  INSERT INTO `users`(`person_id`, `password`, `email`, `firstname`, `lastname`, `birthdate`, `gender`) VALUES (_person_id, _password, _email, _firstname, _lastname, _birthdate, _gender)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateVoteCount` (IN `_id` INT(11))  MODIFIES SQL DATA
UPDATE `kandidaadid` SET `votes`=`votes`+1 WHERE `id`=`_id`$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `kandidaadid`
--

CREATE TABLE `kandidaadid` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `partei` varchar(50) COLLATE utf8_estonian_ci DEFAULT NULL,
  `maakond` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `votes` int(10) NOT NULL DEFAULT '0',
  `person_id` varchar(20) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Andmete tõmmistamine tabelile `kandidaadid`
--

INSERT INTO `kandidaadid` (`id`, `firstName`, `lastName`, `partei`, `maakond`, `votes`, `person_id`) VALUES
(2, 'Jüri', 'Muri', 'Kollane Partei', 'Harjumaa', 0, '38410101010'),
(3, 'Mari', 'Kuri', 'Punased', 'Harjumaa', 5, '12345678901'),
(4, 'Random', 'Nimi', 'Punased', 'Tartumaa', 4, '23456789023'),
(6, 'Michele', 'Obama', 'Vaba', 'USA', 4, '464646364'),
(7, 'Barack', 'Obama', 'Vaba', 'USA', 100, '4563567235'),
(8, 'Edgar', 'Savisaar', 'Kesk', 'Harjumaa', 1325, '47456546'),
(9, 'George', 'Bush', 'Demo', 'USA', 64, '5235235246'),
(10, 'Donald', 'Trump', 'Demo', 'USA', 24, '64564536');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `person_id` varchar(20) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `birthdate` varchar(50) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `gender` varchar(50) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `hasVoted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `users`
--

INSERT INTO `users` (`id`, `person_id`, `password`, `email`, `firstname`, `lastname`, `birthdate`, `gender`, `hasVoted`) VALUES
(1, '12345678901', 'testing', 'test@kasutaja.com', 'Test', 'Kasutaja', '17/02/1996', 'mees', 0),
(2, '23456789023', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'asd@d.com', 'Järjekordne', 'Test', '02/11/1997', 'Helikopter', 0),
(4, '39602456194', 'e367f29cc9e99ce6ef6aabb3c9c9a320991d0b59e132ae2d4bf1043299b676958d1dd69b8e433b167c89537894c49c3496534f29b0f69b8f77a3da350576e53c', 'geio96@hotmail.com', 'Geio', 'Illus', '17/02/1996', 'Mees', 0),
(5, '49603182734', 'e367f29cc9e99ce6ef6aabb3c9c9a320991d0b59e132ae2d4bf1043299b676958d1dd69b8e433b167c89537894c49c3496534f29b0f69b8f77a3da350576e53c', 'mariabelinskaa@gmail.com', 'Maria', 'Belinska', '18/03/1996', 'Naine', 0),
(6, '38410101010', 'e367f29cc9e99ce6ef6aabb3c9c9a320991d0b59e132ae2d4bf1043299b676958d1dd69b8e433b167c89537894c49c3496534f29b0f69b8f77a3da350576e53c', 'lauri.ratsep@ut.ee', 'L', 'R', '12/12/1212', 'Karu', 0),
(7, '39515345234', '5fda97a131fa4746fa835caefeb6f6d64f2b12ff5a4e42e840639af3dd747cf3627fec8039733e5a77d9b99aba473dae4b08134bb4e39006dcd06cec90c76371', 'ivarkala@hotmail.com', 'ivar', 'kala', '25/5/1995', 'Mees', 0),
(9, '39515345235', 'a394dd65563bc675db1a11d2d611c945292700319e83439c10404f20ddfb89306efef54f508d176ac2c03a5240395fed200ab88d742ee6e9718f72fe3ee6f96c', 'ivar@ut.ee', 'ivar', 'kala', '25/05/1996', 'helikopter', 0),
(10, '1279935575423507', '', 'ivarkala@hotmail.com', 'Ivar', 'Kalamees', '', 'mees', 0),
(11, '39515345239', 'a394dd65563bc675db1a11d2d611c945292700319e83439c10404f20ddfb89306efef54f508d176ac2c03a5240395fed200ab88d742ee6e9718f72fe3ee6f96c', 'iva2r@ut.ee', 'ivaaar', 'kalaaaaa', '25/05/1945', 'Naine', 1);

-- --------------------------------------------------------

--
-- Sise-vaate struktuur `v_candgender`
-- (Tegelik vaade on allpool)
--
CREATE TABLE `v_candgender` (
`firstName` varchar(50)
,`lastName` varchar(50)
,`partei` varchar(50)
,`maakond` varchar(50)
,`gender` varchar(50)
,`votes` int(10)
);

-- --------------------------------------------------------

--
-- Sise-vaate struktuur `v_kandidaadid`
-- (Tegelik vaade on allpool)
--
CREATE TABLE `v_kandidaadid` (
`id` int(11)
,`firstName` varchar(50)
,`lastName` varchar(50)
,`partei` varchar(50)
,`maakond` varchar(50)
,`votes` int(10)
);

-- --------------------------------------------------------

--
-- Sise-vaate struktuur `v_votes`
-- (Tegelik vaade on allpool)
--
CREATE TABLE `v_votes` (
`id` int(11)
,`firstName` varchar(50)
,`lastName` varchar(50)
,`partei` varchar(50)
,`maakond` varchar(50)
,`votes` int(10)
);

-- --------------------------------------------------------

--
-- Vaate struktuur `v_candgender`
--
DROP TABLE IF EXISTS `v_candgender`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_candgender`  AS  select `kandidaadid`.`firstName` AS `firstName`,`kandidaadid`.`lastName` AS `lastName`,`kandidaadid`.`partei` AS `partei`,`kandidaadid`.`maakond` AS `maakond`,`users`.`gender` AS `gender`,`kandidaadid`.`votes` AS `votes` from (`kandidaadid` join `users` on((`kandidaadid`.`person_id` = `users`.`person_id`))) ;

-- --------------------------------------------------------

--
-- Vaate struktuur `v_kandidaadid`
--
DROP TABLE IF EXISTS `v_kandidaadid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kandidaadid`  AS  select `kandidaadid`.`id` AS `id`,`kandidaadid`.`firstName` AS `firstName`,`kandidaadid`.`lastName` AS `lastName`,`kandidaadid`.`partei` AS `partei`,`kandidaadid`.`maakond` AS `maakond`,`kandidaadid`.`votes` AS `votes` from `kandidaadid` order by `kandidaadid`.`id` ;

-- --------------------------------------------------------

--
-- Vaate struktuur `v_votes`
--
DROP TABLE IF EXISTS `v_votes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_votes`  AS  select `kandidaadid`.`id` AS `id`,`kandidaadid`.`firstName` AS `firstName`,`kandidaadid`.`lastName` AS `lastName`,`kandidaadid`.`partei` AS `partei`,`kandidaadid`.`maakond` AS `maakond`,`kandidaadid`.`votes` AS `votes` from `kandidaadid` order by `kandidaadid`.`votes` desc ;

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `kandidaadid`
--
ALTER TABLE `kandidaadid`
  ADD PRIMARY KEY (`id`);

--
-- Indeksid tabelile `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `kandidaadid`
--
ALTER TABLE `kandidaadid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT tabelile `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
