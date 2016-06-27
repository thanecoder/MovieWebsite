-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2016 at 01:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moviewebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`p_id`, `p_name`, `year`, `genre`, `description`, `price`) VALUES
(1, 'Jurassic Park', 2011, 'Action', 'Good Movie', 450),
(2, 'The Martian', 2010, 'Thriller', 'Scintillating', 450),
(3, 'The Hangover', 2012, 'Comedy', 'LOL comedy ', 400),
(4, 'Chicken Little', 2013, 'Animation', 'Animated adventure', 410),
(5, 'Avengers', 2014, 'Action', 'Long Action packed movie', 400),
(6, 'Star Wars The Force Awakens', 2010, 'Adventure', 'Around the world', 420),
(7, 'Titanic', 2013, 'Romantic', 'Sobstory', 200),
(8, 'We''re the Millers', 2013, 'Comedy', 'Loads of laughter.', 400),
(9, 'Harry Potter and the Philosopher''s Stone', 2001, 'Magic', 'Start of a great series.', 400),
(10, 'Harry Potter and the Chamber of Secret', 2002, 'Magic', 'Second in the Harry Potter series.', 400),
(11, 'Harry Potter and the Prisoner of Azkaban', 2004, 'Magic', 'Third in the Harry Potter series.', 400),
(12, 'Harry Potter and the Goblet of Fire', 2005, 'Magic', 'Fourth in the Harry Potter series.', 400),
(13, 'The Expendables 2', 2013, 'Action', 'Huge,Bulging disappointment.', 300),
(14, 'The Grey', 2012, 'Thriller', 'Thrilling movie', 399),
(15, 'The Jungle Book', 2016, 'Adventure', 'From Rudyard Kipling', 499),
(16, 'Independence Day Resurgence', 2016, 'Action', 'awesome', 400);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `p_id` int(11) NOT NULL,
  `review` text NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `uname`, `p_id`, `review`) VALUES
(1, 'abc', 1, 'very good product'),
(2, 'def', 1, 'awesome'),
(3, 'abc', 10, 'very good'),
(4, 'asd', 1, 'ok ok');

-- --------------------------------------------------------

--
-- Table structure for table `s_cart`
--

CREATE TABLE IF NOT EXISTS `s_cart` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `s_cart`
--

INSERT INTO `s_cart` (`s_id`, `p_id`, `p_name`, `price`, `quantity`, `user_id`) VALUES
(1, 1, 'Jurassic Park', 450, 1, 1),
(2, 1, 'Jurassic Park', 450, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `name`) VALUES
('1', 'abc@gmail.com', 'abc123', 'abc'),
('124', 'ash@gmail.com', 'ashert', 'ash'),
('2', 'def@gmail.com', 'def456', 'def'),
('456', 'pbn@gmail.com', 'pbn123', 'pbn');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
