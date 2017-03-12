-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2017 at 06:38 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `person_id` varchar(20) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `birthdate` varchar(50) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL,
  `gender` varchar(50) CHARACTER SET utf16 COLLATE utf16_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `person_id`, `password`, `email`, `firstname`, `lastname`, `birthdate`, `gender`) VALUES
(1, '12345678901', 'testing', 'test@kasutaja.com', 'Test', 'Kasutaja', '17/02/1996', 'Male'),
(2, '23456789023', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'asd@d.com', 'Järjekordne', 'Test', '02/11/1997', 'Helikopter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
