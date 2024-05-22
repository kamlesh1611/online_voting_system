-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2024 at 12:17 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'crce', '$2y$10$kLqXG4BAJrPbsOjJ/.B4eeZn6oojNhAb8l5/cb9eZvFnYU.pz2qni', 'CRCE', 'Admin', 'WhatsApp Image 2021-05-27 at 17.55.34.jpeg', '2018-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `position_id` int NOT NULL,
  `firstname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `photo` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `platform` text NOT NULL,
  `cand_otp` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `position_id`, `firstname`, `lastname`, `email`, `photo`, `platform`, `cand_otp`) VALUES
(8, 9, 'Prince', 'Patel', 'utsavsoni1204@gmail.com', 'download.jpg', 'hello bro........!', '30523'),
(7, 9, 'rakeshbhai', 'pawar', 'r4101211@gmail.com', 'download (1).jpg', 'Hello..!!', '32640');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
CREATE TABLE IF NOT EXISTS `positions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL,
  `max_vote` int NOT NULL,
  `priority` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(8, 'Secretary', 50, 1),
(9, 'Cheirman', 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

DROP TABLE IF EXISTS `voters`;
CREATE TABLE IF NOT EXISTS `voters` (
  `id` int NOT NULL AUTO_INCREMENT,
  `voters_id` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `firstname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `photo` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `voters_id`, `password`, `firstname`, `lastname`, `email`, `photo`) VALUES
(3, 'P7RhqUSZ2bsCjY5', '$2y$10$kk49PYkDXIORohUNCKBOru742koSGIYmhcmwYIoewqxC2CY2NXPoi', 'Utsav', 'soni', 'utsavsoni1204@gmail.com', '8.jpeg'),
(4, 'Ypr7CWjyuSbkdU3', '$2y$10$6cbrLMzWqE9BTEMmw.jaxeg3thHZ2h.HH7nUAqU/pn0MohuaOONv6', 'rutvesh', 'upale', 'rutveshupale@gmail.com', 'running.jpeg'),
(5, 'fYuM17gGEmhtIoa', '$2y$10$5wiYrs2jNT2oMPSVuUxf5.g8fzX2v4SYQtFKsbHXYJNY/9kFksDgy', 'om', 'soni', 'omsoni@gmail.com', ''),
(6, 'pWSDotbCYPh2aOM', '$2y$10$cTm32Cyf15qcgPqEemHLruiM0kVVHAk2V4CipFO2Hzqq65URufIgO', 'Mihir', 'Patel', 'mihir@gmail.com', ''),
(7, 'db43cDVJrMYiW6u', '$2y$10$4.seSHC..U7GjAb11yC55Of./Rs72L5rCYWobbq/PLYzMmORTyXvK', 'utsav', 'khtaeani', 'kaushik@gmail.com', '6.jpeg'),
(8, 'cryIYq729iJxEgR', '$2y$10$qWe/JjwsBPyDkw8Az.rdG.aj1AEmIDMoRcU1rhsWFa7ubw0xcjs/O', 'divyang', 'patel', 'divyang@gmail.com', 'map.png'),
(9, 'yjrYLVftX8JHQ51', '$2y$10$AXCrHIjvK1OU8jZgiWIExeivPveuvIrX7ugMo5ZPWUaS1g7owKLOK', 'Ketan', 'Khatwaani', '21bca27@vtcbb.edu.in', 'cam 11 n.png'),
(10, 'QGShxOIzaEUB9Lr', '$2y$10$Rcx0KHIKVH91RXhYRXmz9upu50dW.YuFqHmyRDxiHgXZlQYYZrmVi', 'any', 'mistry', 'any@gmai.com', 'fp 2.png'),
(11, 'lpXyZq1EjUf7cPT', '$2y$10$LSxniWR8PJNfDkF/pkJ1n.9ER40wTGi49tdlHV7hwf7aYh0m/s6.C', 'Yuvraj', 'patel', 'yuvraj@gmail.com', 'map.png'),
(12, '2UfANQnXwg97GPr', '$2y$10$fpPCjBZV/UiVgW5y00FSX.GhKSuTwU8Ai9bbgjFeHRrPEaABTcuci', 'Mansi', 'Patel', 'mansi@gmail.com', 'map.png');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `voters_id` int NOT NULL,
  `candidate_id` int NOT NULL,
  `position_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `voters_id`, `candidate_id`, `position_id`) VALUES
(90, 11, 8, 9),
(91, 12, 8, 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
