-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2013 at 12:12 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

DROP TABLE IF EXISTS `quote`;
CREATE TABLE IF NOT EXISTS `quote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `quotetext` text NOT NULL,
  `author` varchar(96) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `user_id`, `quotetext`, `author`, `tags`) VALUES
(1, 1, 'Don''t cry because it''s over, smile because it happened.', 'Dr. Seuss', 'life'),
(2, 1, 'You only live once, but if you do it right, once is enough.', 'Mae West', 'life'),
(3, 1, 'To live is the rarest thing in the world. Most people exist, that is all.', 'Oscar Wilde', 'life'),
(4, 1, 'I may not have gone where I intended to go, but I think I have ended up where I needed to be.', 'Douglas Adams', 'life'),
(5, 1, 'A friend is someone who knows all about you and still loves you.', 'Elbert Hubbard', 'friend,life'),
(6, 1, 'If you judge people, you have no time to love them.', 'Mother Teresa', 'love'),
(7, 1, 'We have nothing to fear but fear itself', 'John F Kennedy', ''),
(8, 1, 'If a man does his best, what else is there?', 'Gen. George S. Patton', 'life,victory'),
(9, 1, 'Yesterday''s the past, tomorrow''s the future, but today is a gift. That''s why it''s called the present.', 'Bil Keane', 'life');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Walter Wimberly', 'demo', 'demo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
