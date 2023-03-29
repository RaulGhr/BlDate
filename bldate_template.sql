-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2023 at 08:31 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bldate_template`
--

-- --------------------------------------------------------

--
-- Table structure for table `intrebari`
--

CREATE TABLE `intrebari` (
  `id` int(11) NOT NULL,
  `1r1` int(11) DEFAULT NULL,
  `1r2` int(11) DEFAULT NULL,
  `1r3` int(11) DEFAULT NULL,
  `2r1` int(11) DEFAULT NULL,
  `2r2` int(11) DEFAULT NULL,
  `2r3` int(11) DEFAULT NULL,
  `3r1` int(11) DEFAULT NULL,
  `3r2` int(11) DEFAULT NULL,
  `3r3` int(11) DEFAULT NULL,
  `4r1` int(11) DEFAULT NULL,
  `4r2` int(11) DEFAULT NULL,
  `4r3` int(11) DEFAULT NULL,
  `5r1` int(11) DEFAULT NULL,
  `5r2` int(11) DEFAULT NULL,
  `5r3` int(11) DEFAULT NULL,
  `6r1` int(11) DEFAULT NULL,
  `6r2` int(11) DEFAULT NULL,
  `6r3` int(11) DEFAULT NULL,
  `7r1` int(11) DEFAULT NULL,
  `7r2` int(11) DEFAULT NULL,
  `7r3` int(11) DEFAULT NULL,
  `8r1` int(11) DEFAULT NULL,
  `8r2` int(11) DEFAULT NULL,
  `8r3` int(11) DEFAULT NULL,
  `9r1` int(11) DEFAULT NULL,
  `9r2` int(11) DEFAULT NULL,
  `9r3` int(11) DEFAULT NULL,
  `10r1` int(11) DEFAULT NULL,
  `10r2` int(11) DEFAULT NULL,
  `10r3` int(11) DEFAULT NULL,
  `11r1` int(11) DEFAULT NULL,
  `11r2` int(11) DEFAULT NULL,
  `11r3` int(11) DEFAULT NULL,
  `12r1` int(11) DEFAULT NULL,
  `12r2` int(11) DEFAULT NULL,
  `12r3` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Nume` varchar(45) DEFAULT NULL,
  `Prenume` varchar(45) DEFAULT NULL,
  `Parola` varchar(45) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Varsta` int(11) DEFAULT NULL,
  `Gen` int(11) DEFAULT NULL,
  `Clasa` int(11) DEFAULT NULL,
  `Chestionar` int(11) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intrebari`
--
ALTER TABLE `intrebari`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_table1_users_idx` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intrebari`
--
ALTER TABLE `intrebari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `intrebari`
--
ALTER TABLE `intrebari`
  ADD CONSTRAINT `fk_table1_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
