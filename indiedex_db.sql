-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2014 at 02:10 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `indiedex_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contentnews_table`
--

CREATE TABLE IF NOT EXISTS `contentnews_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `top` int(11) NOT NULL DEFAULT '0',
  `new` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hot` int(11) NOT NULL DEFAULT '0',
  `trending` int(11) NOT NULL DEFAULT '0',
  `consoles` text NOT NULL,
  `genres` text NOT NULL,
  `year` text NOT NULL,
  `stars` tinyint(4) NOT NULL,
  `price` decimal(3,2) NOT NULL,
  `staff` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contentnews_table`
--

INSERT INTO `contentnews_table` (`id`, `title`, `content`, `top`, `new`, `hot`, `trending`, `consoles`, `genres`, `year`, `stars`, `price`, `staff`) VALUES
(2, 'FEZ', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/fez.png"/></div><div class="contentBoxText"><h2>FEZ</h2><p>A 2D platform game with a twist! In a world where everything is flat, one fez wearing hero discovers the third demension and an adventure unfolds!</p></div><div class="contentMore"><p>Fez (stylized as FEZ) is a 2012 puzzle platform game developed by indie developer Polytron Corporation and produced by Polytron, Trapdoor, and Microsoft Studios. It is a 2D game set in a 3D world, as the two-dimensional player-character receives a fez that reveals a third dimension and consequently tears the fabric of his universe. Fez\\''s puzzles are built around the core mechanic of rotating between four 2D views of a 3D space, as four sides around a cube, where the environment realigns between views to create new paths.The game was an "underdog darling of the indie game scene" during its high-profile and protracted five-year development cycle. Fez designer and Polytron founder Phil Fish received celebrity for his outspoken public persona and prominence in the 2012 documentary Indie Game: The Movie, which followed the game\\''s final stages of development and Polytron\\''s related legal issues. The game was released as a yearlong Xbox Live Arcade exclusive on April 13, 2012 to critical acclaim, and was later ported to other platforms.Fez won several awards, including the 2012 Independent Games Festival\\''s Grand Prize, 2011 Indiecade\\''s Best in Show and Best Story/World Design, and 2008 Independent Games Festival\\''s Excellence in Visual Art. It was Eurogamer\\''s 2012 Game of the Year. Fez had sold one million copies by the end of 2013. A sequel was planned, but was later canceled as Fish abruptly left the industry.</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-24 07:56:02', 0, 0, '', '', '0000', 0, '0.00', 0),
(3, 'test', 'hi', 0, '2014-01-25 09:16:03', 0, 0, '', '', '0000', 0, '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE IF NOT EXISTS `users_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `first name` varchar(20) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `profile picture` text NOT NULL,
  `join date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bio` varchar(256) NOT NULL,
  `karma` int(11) NOT NULL DEFAULT '0',
  `games` text NOT NULL,
  `wishlist` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `email`, `status`, `first name`, `surname`, `profile picture`, `join date`, `bio`, `karma`, `games`, `wishlist`) VALUES
(1, 'gavin', '1a1dc91c907325c69271ddf0c944bc72', 'gaivn.arrell@gmail.com', 3, 'Gavin', 'Arrell', '', '2014-01-23 20:28:08', 'You like playing darts with your grandma.', 9001, '', ''),
(2, 'Liam', '1a1dc91c907325c69271ddf0c944bc72', 'liamkferris@hotmail.com', 3, 'Liam', 'Ferris', 'img/uploads/565570cubes.jpg', '2014-01-23 04:00:00', 'This took too long to get working...', 9002, '', ''),
(3, 'Bob', '202cb962ac59075b964b07152d234b70', 'moonpig@.com', 0, 'Bob', 'Smith', 'img/uploads/28967doge.jpeg', '0000-00-00 00:00:00', 'Hey I''m Bob. I''m a builder. I also love indie games and really well made websites.', 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
