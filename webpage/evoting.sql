-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 01:32 AM
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `Register_FB_User` (IN `_id` VARCHAR(20), IN `_email` VARCHAR(100), IN `_firstname` VARCHAR(50), IN `_lastname` VARCHAR(50), IN `_gender` VARCHAR(10))  INSERT INTO `users` (`person_id`, `email`, `firstname`, `lastname`, `gender`) VALUES (_id, _email, _firstname, _lastname, _gender)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Register_User` (IN `_email` VARCHAR(100), IN `_firstname` VARCHAR(50), IN `_lastname` VARCHAR(50), IN `_person_id` VARCHAR(20), IN `_password` VARCHAR(128), IN `_birthdate` VARCHAR(50), IN `_gender` VARCHAR(50))  INSERT INTO `users`(`person_id`, `password`, `email`, `firstname`, `lastname`, `birthdate`, `gender`) VALUES (_person_id, _password, _email, _firstname, _lastname, _birthdate, _gender)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kandidaadid`
--

CREATE TABLE `kandidaadid` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `partei` varchar(50) COLLATE utf8_estonian_ci DEFAULT NULL,
  `maakond` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `votes` int(10) DEFAULT NULL,
  `person_id` varchar(20) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `kandidaadid`
--

INSERT INTO `kandidaadid` (`id`, `firstName`, `lastName`, `partei`, `maakond`, `votes`, `person_id`) VALUES
(1, 'Ivar', 'Kalamees', 'Sinine Erakond', 'Tartumaa', NULL, '1279935575423507'),
(2, 'Jüri', 'Muri', 'Kollane Partei', 'Harjumaa', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `person_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `birthdate` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `gender` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `person_id`, `password`, `email`, `firstname`, `lastname`, `birthdate`, `gender`) VALUES
(2, '\02\03\04\05\06\07\08\09\00\02', '\0e\0e\02\06\0b\00\0d\0d\04\0a\0f\07\0e\07\04\09\0a\0a\01\0a\08\0e\0e\03\0c\01\00\0a\0e\09\09\02\03\0f\06\01\08\09\08\00\07\07\02\0e\04\07\03\0f\08\08\01\09\0a\05\0d\04\09\04\00\0e\00\0d\0b\02', '\0a\0s\0d\0@\0d\0.\0c\0o\0m', 'Järjekordne', '\0T\0e\0s\0t', '\00\02\0/\01\01\0/\01\09\09\07', '\0H\0e\0l\0i\0k\0o\0p\0t\0e\0r'),
(3, '\03\09\05\01\05\03\04\05\02\03', '\05\0f\0d\0a\09\07\0a\01\03\01\0f\0a\04\07\04\06\0f\0a\08\03\05\0c\0a\0e\0f\0e\0b\06\0f\06\0d\06\04\0f\02\0b\01\02\0f\0f\05\0a\04\0e\04\02\0e\08\04\00\06\03\09\0a\0f\03\0d\0d\07\04\07\0c\0f\03', '\0i\0v\0a\0r\0k\0a\0l\0a\0@\0h\0o\0t\0m\0a\0i\0l\0.\0c\0o\0m', '\0i\0v\0a\0r', '\0k\0a\0l\0a', '\02\05\0/\05\0/\01\09\09\05', '\0M\0e\0e\0s'),
(5, '\03\09\06\00\02\04\05\06\01\09', '\0e\03\06\07\0f\02\09\0c\0c\09\0e\09\09\0c\0e\06\0e\0f\06\0a\0a\0b\0b\03\0c\09\0c\09\0a\03\02\00\09\09\01\0d\00\0b\05\09\0e\01\03\02\0a\0e\02\0d\04\0b\0f\01\00\04\03\02\09\09\0b\06\07\06\09\05', '\0g\0e\0i\0o\09\06\0@\0h\0o\0t\0m\0a\0i\0l\0.\0c\0o\0m', '\0G\0e\0i\0o', '\0I\0l\0l\0u\0s', '\01\07\0/\00\02\0/\01\09\09\06', '\0M\0e\0e\0s'),
(6, '\04\09\06\00\03\01\08\02\07\03', '\0e\03\06\07\0f\02\09\0c\0c\09\0e\09\09\0c\0e\06\0e\0f\06\0a\0a\0b\0b\03\0c\09\0c\09\0a\03\02\00\09\09\01\0d\00\0b\05\09\0e\01\03\02\0a\0e\02\0d\04\0b\0f\01\00\04\03\02\09\09\0b\06\07\06\09\05', '\0m\0a\0r\0i\0a\0b\0e\0l\0i\0n\0s\0k\0a\0a\0@\0g\0m\0a\0i\0l\0.\0c\0o\0m', '\0M\0a\0r\0i\0a', '\0B\0e\0l\0i\0n\0s\0k\0a', '\01\08\0/\00\03\0/\01\09\09\06', '\0N\0a\0i\0n\0e'),
(14, '1279935575423507', '', 'ivarkala@hotmail.com', 'Ivar', 'Kalamees', '', 'male'),
(15, '39515345231', 'a394dd65563bc675db1a11d2d611c945292700319e83439c10404f20ddfb89306efef54f508d176ac2c03a5240395fed200ab88d742ee6e9718f72fe3ee6f96c', 'ivar@hot.ee', 'iv', 'ar', '25/05/1954', 'Mees');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kandidaadid`
-- (See below for the actual view)
--
CREATE TABLE `v_kandidaadid` (
`firstName` varchar(50)
,`lastName` varchar(50)
,`maakond` varchar(50)
,`partei` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v_kandidaadid`
--
DROP TABLE IF EXISTS `v_kandidaadid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kandidaadid`  AS  select `kandidaadid`.`firstName` AS `firstName`,`kandidaadid`.`lastName` AS `lastName`,`kandidaadid`.`maakond` AS `maakond`,`kandidaadid`.`partei` AS `partei` from `kandidaadid` group by `kandidaadid`.`partei` order by `kandidaadid`.`maakond` ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
