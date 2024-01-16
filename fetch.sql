-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 05:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fetch`
--

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `no.` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`no.`, `name`, `description`) VALUES
(1, 'Pokemane', 'gamer'),
(2, 'Dr Dis respect', 'Streamer'),
(3, 'Cai Cenat', 'Streamer'),
(4, 'Ninja', 'gamer'),
(8, 'Ibai', 'streamer'),
(9, 'Rubius', 'Streamer'),
(10, 'xQc', 'gamer'),
(11, 'TheGrefg', 'Streamer'),
(12, 'Tfue', 'gamer'),
(13, 'Shroud', 'gamer'),
(14, 'Myth', 'streamer'),
(15, 'Tommyinnit', 'streamer'),
(16, 'TimTheTatman', 'gamer'),
(17, 'AriGameplays', 'gamer'),
(18, 'Robleis', 'gamer'),
(19, 'Loltyler1', 'streamer'),
(20, 'Loud_coringa', 'Gamer'),
(21, 'RanbooLive', 'streamer'),
(22, 'NickEh30', 'gamer'),
(23, 'Mazher', 'gamer'),
(24, 'WilburSoot', 'gamer'),
(25, 'SLAKUN1', 'gamer'),
(26, 'moistcr1tikal', 'streamer'),
(27, 'Tubbo', 'streamer'),
(28, 'Mongraal', 'streamer'),
(29, 'Quackity', 'gamer'),
(30, 'AMOURANTH', 'streamer'),
(31, 'Dream', 'streamer'),
(32, 'SypherPK', 'streamer'),
(33, 'Alanzoka', 'gamer'),
(34, 'AndrewTATE', 'TopG'),
(35, 'AdinRoss', 'Streamer'),
(36, 'Juansguarnizo', 'Streamer'),
(37, 'Sodapoppin', 'gamer'),
(38, 'ElSpreen', 'gamer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`no.`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `no.` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
