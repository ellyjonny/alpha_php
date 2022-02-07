-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 02:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exile_db`
--

-- --------------------------------------------------------

--
-- Table structure for table registration`
--

CREATE TABLE `registration` (
  `firstname` varchar(100) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email`  varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `marital_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `secondname`, `surname`, `username`, `gender`, `email`, `password`, `marital_status`)VALUES
('Elias', 'John', 'Fidelis', 'ejdon', 'male', 'e@gmail.com', 'weeefdsv', 'married' ),
('Elie', 'Tohn', 'Delis', 'donjoh', 'male', 'ed@gmail.com', 'weeefdghvsv', 'married' );

-- --------------------------------------------------------


--
-- Indexes for table `registration``
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
