-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 10:07 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `Register_Candidate`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Register_Candidate` (IN `_id` INT(11), IN `_firstname` VARCHAR(50) CHARSET utf8, IN `_lastname` VARCHAR(50) CHARSET utf8, IN `_partei` VARCHAR(50) CHARSET utf8, IN `_maakond` VARCHAR(50))  NO SQL
INSERT INTO `kandidaadid`(`id`, `firstName`, `lastName`, `partei`, `maakond`) VALUES (_id, _firstname, _lastname, _partei, _maakond)$$

DROP PROCEDURE IF EXISTS `Register_FB_User`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Register_FB_User` (IN `_id` VARCHAR(20), IN `_email` VARCHAR(100), IN `_firstname` VARCHAR(50), IN `_lastname` VARCHAR(50), IN `_gender` VARCHAR(10))  INSERT INTO `users` (`person_id`, `email`, `firstname`, `lastname`, `gender`) VALUES (_id, _email, _firstname, _lastname, _gender)$$

DROP PROCEDURE IF EXISTS `Register_User`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Register_User` (IN `_email` VARCHAR(100), IN `_firstname` VARCHAR(50), IN `_lastname` VARCHAR(50), IN `_person_id` VARCHAR(20), IN `_password` VARCHAR(128), IN `_birthdate` VARCHAR(50), IN `_gender` VARCHAR(50))  INSERT INTO `users`(`person_id`, `password`, `email`, `firstname`, `lastname`, `birthdate`, `gender`) VALUES (_person_id, _password, _email, _firstname, _lastname, _birthdate, _gender)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kandidaadid`
--

DROP TABLE IF EXISTS `kandidaadid`;
CREATE TABLE `kandidaadid` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `partei` varchar(50) COLLATE utf8_estonian_ci DEFAULT NULL,
  `maakond` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `votes` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `kandidaadid`
--

INSERT INTO `kandidaadid` (`id`, `firstName`, `lastName`, `partei`, `maakond`, `votes`) VALUES
(1, 'Ivar', 'Kalamees', 'Suva Erakond', 'Tartumaa', 0),
(2, 'Jüri', 'Muri', 'Kollane Partei', 'Harjumaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `person_id`, `password`, `email`, `firstname`, `lastname`, `birthdate`, `gender`, `hasVoted`) VALUES
(1, '12345678901', 'testing', 'test@kasutaja.com', 'Test', 'Kasutaja', '17/02/1996', 'Male', 0),
(2, '23456789023', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'asd@d.com', 'Järjekordne', 'Test', '02/11/1997', 'Helikopter', 0),
(4, '39602456194', 'e367f29cc9e99ce6ef6aabb3c9c9a320991d0b59e132ae2d4bf1043299b676958d1dd69b8e433b167c89537894c49c3496534f29b0f69b8f77a3da350576e53c', 'geio96@hotmail.com', 'Geio', 'Illus', '17/02/1996', 'Mees', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kandidaadid`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_kandidaadid`;
CREATE TABLE `v_kandidaadid` (
`id` int(11)
,`firstName` varchar(50)
,`lastName` varchar(50)
,`maakond` varchar(50)
,`partei` varchar(50)
,`votes` int(10)
);

-- --------------------------------------------------------

--
-- Structure for view `v_kandidaadid`
--
DROP TABLE IF EXISTS `v_kandidaadid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kandidaadid`  AS  select `kandidaadid`.`id` AS `id`,`kandidaadid`.`firstName` AS `firstName`,`kandidaadid`.`lastName` AS `lastName`,`kandidaadid`.`maakond` AS `maakond`,`kandidaadid`.`partei` AS `partei`,`kandidaadid`.`votes` AS `votes` from `kandidaadid` group by `kandidaadid`.`partei` order by `kandidaadid`.`maakond` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidaadid`
--
ALTER TABLE `kandidaadid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidaadid`
--
ALTER TABLE `kandidaadid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
