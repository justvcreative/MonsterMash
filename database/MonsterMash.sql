-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2016 at 01:34 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MonsterMash`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `comment` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`) VALUES
(1, 'Buffalo Bill', 'I would love to see a buffalo monster in the gallery.'),
(2, 'Angie Stone', 'I would like to see an angel monster.'),
(3, 'Anime Girl', 'I would love a Sushi Monster.'),
(4, 'Mama Mia', 'Would love a pizza monster'),
(5, 'Count Dracula', 'Would love a vampire monster!'),
(6, 'Lolo', 'These are really neat!'),
(7, 'Miko', 'Would love to see a bacon monster!'),
(8, 'Valentine', 'A heart monster named Cupid would be awesome!');

-- --------------------------------------------------------

--
-- Table structure for table `monsters`
--

CREATE TABLE `monsters` (
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `img_path` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monsters`
--

INSERT INTO `monsters` (`name`, `description`, `img_path`) VALUES
('Miki-chan', 'A baby monster that is cute on the outside, but tough on the inside', 'img/miki-chan.png'),
('Tenti', 'A crazy monster with 6 legs.', 'img/tenti.png'),
('Mooki', 'A blue creature from a distant, ice planet', 'img/mooki.png'),
('Toothi', 'This is a cute, green monster with a big bite.', 'img/toothi.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
