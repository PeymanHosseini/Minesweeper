-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 01:54 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minesweeper`
--

-- --------------------------------------------------------

--
-- Table structure for table `minesweeper`
--

CREATE TABLE `minesweeper` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(11) NOT NULL,
  `matrix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `minesweeper`
--

INSERT INTO `minesweeper` (`id`, `user`, `time`, `score`, `matrix`) VALUES
(1, 'rishi', '2017-12-31 10:30:00', 10, 5),
(2, 'rishi', '2017-12-31 10:30:13', 10, 5),
(3, 'suraj', '2017-12-31 10:45:28', 10, 4),
(4, 'suraj', '2017-12-31 10:46:16', 10, 4),
(5, 'root', '2017-12-31 10:47:06', 0, 4),
(6, 'rishi1', '2017-12-31 10:48:42', 8, 9),
(7, 'root', '2017-12-31 10:50:29', 3, 9),
(8, 'rahul', '2017-12-31 10:52:34', 3, 11),
(9, 'himanshu', '2017-12-31 11:01:17', 12, 8),
(10, 'himanshu', '2017-12-31 11:03:23', 17, 8),
(11, 'himanshu', '2017-12-31 11:13:55', 12, 8),
(12, 'himanshu', '2017-12-31 11:15:50', 6, 8),
(13, 'himanshu', '2017-12-31 11:37:34', 16, 8),
(14, 'himanshu', '2017-12-31 11:39:47', 9, 8),
(15, 'raj', '2017-12-31 11:49:10', 4, 7),
(16, 'raj', '2017-12-31 11:49:24', 5, 7),
(17, 'himanshu', '2017-12-31 11:49:50', 2, 2),
(18, 'himanshu', '2017-12-31 11:50:00', 1, 2),
(19, 'himanshu', '2017-12-31 11:58:22', 1, 2),
(20, 'himanshu', '2017-12-31 11:58:29', 1, 2),
(21, 'rishi', '2017-12-31 11:59:31', 1, 9),
(22, 'rishi', '2017-12-31 12:01:47', 8, 9),
(23, 'rishi', '2017-12-31 12:07:07', 26, 9),
(24, 'rishi', '2017-12-31 12:10:01', 1, 9),
(25, 'rishi', '2017-12-31 12:11:53', 13, 9),
(26, 'rishi', '2017-12-31 12:12:14', 10, 9),
(27, 'rishi', '2017-12-31 12:20:44', 9, 9),
(28, 'rishi', '2017-12-31 12:21:18', 9, 9),
(29, 'rishi', '2017-12-31 12:21:50', 15, 9),
(30, 'rishi', '2017-12-31 12:26:42', 8, 9),
(31, 'hghjgj', '2017-12-31 12:40:13', 2, 2),
(32, 'hghjgj', '2017-12-31 12:40:28', 1, 2),
(33, 'hghjgj', '2017-12-31 12:40:31', 0, 2),
(34, 'hghjgj', '2017-12-31 12:40:33', 0, 2),
(35, 'hghjgj', '2017-12-31 12:40:34', 0, 2),
(36, 'hghjgj', '2017-12-31 12:40:36', 0, 2),
(37, 'hghjgj', '2017-12-31 12:40:38', 0, 2),
(38, 'hghjgj', '2017-12-31 12:40:40', 1, 2),
(39, 'hghjgj', '2017-12-31 12:40:41', 0, 2),
(40, 'hghjgj', '2017-12-31 12:40:43', 0, 2),
(41, 'hghjgj', '2017-12-31 12:40:48', 2, 2),
(42, 'hghjgj', '2017-12-31 12:42:54', 0, 2),
(43, 'hghjgj', '2017-12-31 12:42:57', 1, 2),
(44, 'hghjgj', '2017-12-31 12:43:00', 1, 2),
(45, 'hghjgj', '2017-12-31 12:43:01', 0, 2),
(46, 'hghjgj', '2017-12-31 12:43:03', 0, 2),
(47, 'hghjgj', '2017-12-31 12:43:05', 0, 2),
(48, 'hghjgj', '2017-12-31 12:43:07', 0, 2),
(49, 'hghjgj', '2017-12-31 12:43:08', 0, 2),
(50, 'hghjgj', '2017-12-31 12:43:11', 1, 2),
(51, 'hghjgj', '2017-12-31 12:43:13', 1, 2),
(52, 'ghgjjk', '2017-12-31 12:48:55', 4, 10),
(53, 'jhjkhkjh', '2017-12-31 12:49:13', 0, 2),
(54, 'jhjkhkjh', '2017-12-31 12:49:16', 0, 2),
(55, 'jhjkhkjh', '2017-12-31 12:49:18', 1, 2),
(56, 'jhjkhkjh', '2017-12-31 12:49:19', 0, 2),
(57, 'jhjkhkjh', '2017-12-31 12:49:21', 0, 2),
(58, 'jhjkhkjh', '2017-12-31 12:49:23', 1, 2),
(59, 'jhjkhkjh', '2017-12-31 12:49:26', 2, 2),
(60, 'fjdfjs', '2017-12-31 12:52:31', 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minesweeper`
--
ALTER TABLE `minesweeper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minesweeper`
--
ALTER TABLE `minesweeper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
