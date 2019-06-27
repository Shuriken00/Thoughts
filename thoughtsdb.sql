-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 02:02 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `thoughtsdb`

-- Table structure for table `users`

CREATE TABLE IF NOT EXISTS `users` 
(
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- Dumping data for table `users`

INSERT INTO `users` 
(
    `id`, 
    `username`, 
    `email`, 
    `pass`
) 
VALUES
(
    1, 
    'nasa', 
    'nasa@gov.com', 
    'nasa123'
),
(
    2, 
    'CIA', 
    'cia@gov.com', 
    '$2y$10$Qzek6mGG43U/3TyFLTuQyOJSvzSuyMCDkTMUJ/uylgKsLsRwguTkS'
),
(
    3, 
    'woozi', 
    'gta@cockjohnson.com', 
    '$2y$10$VMnOl2qejf41uBI3uOUsdOWq9bRYxCLDWToIvJqCQt7OKAlTKG2Sq'
);

-- Indexes for dumped tables

-- Indexes for table `users`

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for dumped tables

-- AUTO_INCREMENT for table `users`

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
