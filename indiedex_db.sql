-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2014 at 09:03 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

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
-- Table structure for table `contentgames_table`
--

CREATE TABLE IF NOT EXISTS `contentgames_table` (
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
  `price` decimal(5,2) NOT NULL,
  `staff` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contentgames_table`
--

INSERT INTO `contentgames_table` (`id`, `title`, `content`, `top`, `new`, `hot`, `trending`, `consoles`, `genres`, `year`, `stars`, `price`, `staff`) VALUES
(1, 'Rust', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/410766rust.png"/></div><div class="contentBoxText"><h2>Rust</h2><p>The only aim in Rust is to survive.\r\n\r\nTo do this you will need to overcome struggles such as hunger, thirst and cold. Build a fire. Build a shelter. Kill animals for meat. Protect yourself from other players. Create alliances with other players and together form a town. \r\n\r\nWhatever it takes to survive.</p></div><div class="contentMore"></div><p class="readMore">Read More</p></div>', 0, '2014-01-26 13:36:08', 0, 0, ';pc;;mac;', ';action;;adventure;;mmo;;rpg;;sport;', 'beta', 4, '14.99', 0);

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
  `price` decimal(5,2) NOT NULL,
  `staff` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `contentnews_table`
--

INSERT INTO `contentnews_table` (`id`, `title`, `content`, `top`, `new`, `hot`, `trending`, `consoles`, `genres`, `year`, `stars`, `price`, `staff`) VALUES
(5, 'Minecraft', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/977478minecraft.png"/></div><div class="contentBoxText"><h2>Minecraft</h2><p>A 3D voxel based sandbox game! The most successful indie game in the world, with over 10 million copies sold on PC alone!</p></div><div class="contentMore"><p>Minecraft is a sandbox indie game originally created by Swedish programmer Markus "Notch" Persson and later developed and published by Mojang. It was publicly released for the PC on May 17, 2009, as a developmental alpha version and, after gradual updates, was published as a full release version on November 18, 2011. A version for Android was released a month earlier on October 7, and an iOS version was released on November 17, 2011. On May 9, 2012, the game was released on Xbox 360 as an Xbox Live Arcade game, co-developed by 4J Studios. All versions of Minecraft receive periodic updates. The creative and building aspects of Minecraft allow players to build constructions out of textured cubes in a 3D procedurally generated world. Other activities in the game include exploration, gathering resources, crafting, and combat. Gameplay in its commercial release has two principal modes: survival, which requires players to acquire resources and maintain their health and hunger; and creative, where players have an unlimited supply of resources, the ability to fly, and no health or hunger. A third gameplay mode named hardcore is the same as survival, differing only in difficulty; it is set to the most difficult setting and respawning is disabled, forcing players to delete their worlds upon death. Minecraft received five awards from the 2011 Game Developers Conference: it was awarded the Innovation Award, Best Downloadable Game Award, and the Best Debut Game Award from the Game Developers Choice Awards; and the Audience Award, as well as the Seumas McNally Grand Prize, from the Independent Games Festival in 2011. In 2012, Minecraft was awarded a Golden Joystick Award in the category Best Downloadable Game. As of October 23, 2013, the game has sold over 12.5 million copies on PC, and over 33 million copies across all platforms.</p></div><a class="readMore">Read More</a></div>', 0, '2014-01-25 20:03:51', 0, 0, ';pc;;mac;;linux;;ps4;;xboxone;;xbox360;;ios;;android;', ';action;;adventure;;sport;', '2011', 5, '20.00', 0),
(12, 'Fez', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/826446fez.png"/></div><div class="contentBoxText"><h2>Fez</h2><p>A 2D platform game with a twist! In a world where everything is flat, one fez wearing hero discovers the third demension and an adventure unfolds!</p></div><div class="contentMore"><p>Fez (stylized as FEZ) is a 2012 puzzle platform game developed by indie developer Polytron Corporation and produced by Polytron, Trapdoor, and Microsoft Studios. It is a 2D game set in a 3D world, as the two-dimensional player-character receives a fez that reveals a third dimension and consequently tears the fabric of his universe. Fez\\''s puzzles are built around the core mechanic of rotating between four 2D views of a 3D space, as four sides around a cube, where the environment realigns between views to create new paths. The game was an "underdog darling of the indie game scene" during its high-profile and protracted five-year development cycle. Fez designer and Polytron founder Phil Fish received celebrity for his outspoken public persona and prominence in the 2012 documentary Indie Game: The Movie, which followed the game\\''s final stages of development and Polytron\\''s related legal issues. The game was released as a yearlong Xbox Live Arcade exclusive on April 13, 2012 to critical acclaim, and was later ported to other platforms. Fez won several awards, including the 2012 Independent Games Festival\\''s Grand Prize, 2011 Indiecade''s Best in Show and Best Story/World Design, and 2008 Independent Games Festival\\''s Excellence in Visual Art. It was Eurogamer\\''s 2012 Game of the Year. Fez had sold one million copies by the end of 2013. A sequel was planned, but was later canceled as Fish abruptly left the industry.</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-25 20:40:27', 0, 0, ';pc;;mac;;linux;;ps4;;ps3;;xboxone;;xbox360;', ';action;;adventure;;puzzle;;sport;', '2012', 4, '15.00', 0),
(13, 'Starbound', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/577301starbound.png"/></div><div class="contentBoxText"><h2>Starbound</h2><p>A 2D voxel based platformer. This game is in beta, the user can play as many different alien species and explore the galaxy!</p></div><div class="contentMore"><p>Starbound is an indie game being produced by the UK-based independent game studio Chucklefish Ltd. Starbound takes place in a two-dimensional, procedurally generated universe which the player will explore in order to obtain new weapons, armor, and miscellaneous items. Starbound entered beta testing on December 4, 2013 for Microsoft Windows, OS X and Linux.</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-25 20:41:40', 0, 0, ';pc;;mac;;linux;', ';action;;adventure;;sport;', 'beta', 3, '10.00', 0),
(14, 'Dayz', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/374572dayz.png"/></div><div class="contentBoxText"><h2>Dayz</h2><p>Everyone''s favourite ARMA 2 mod is going standalone! The mod which turned ARMA 2 into a zombie survival game with a cult following is now being developed as a full game. </p></div><div class="contentMore"><p>DayZ is a multiplayer open world survival horror video game in development by Bohemia Interactive and the stand-alone version of the award-winning mod of the same name. The game was test-released on December 16, 2013 for Microsoft Windows via digital distribution platform Steam, and is currently in early alpha testing. The game places the player in the fictional post-Soviet state of Chernarus, where an unknown virus has turned most of the population into violent zombies. As a survivor, the player must scavenge the world for food, water, weapons, and medicine, while killing or avoiding zombies, and killing, avoiding or co-opting other players in an effort to survive the zombie apocalypse. DayZ began development in 2012 when the mod\\''s creator, Dean Hall, joined Bohemia Interactive to work on it. The development has been focused on altering the engine to suit the game\\''s needs, developing a working client-server architecture, and introducing new features like diseases and a better inventory system. The game has sold over 1 million copies since its alpha release. </p></div><p class="readMore">Read More</p></div>', 0, '2014-01-25 20:42:49', 0, 0, ';pc;;mac;;linux;', ';action;;shooter;;sport;', 'beta', 4, '15.00', 0),
(16, 'Spelunky', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/943786spelunky.png"/></div><div class="contentBoxText"><h2>Spelunky</h2><p>A fast-paced, addicting 2D platform mining adventure game provides in depth puzzles, a great soundtrack and hours of entertainment!</p></div><div class="contentMore"><p>Spelunky is an indie action-adventure game created by Derek Yu and released as freeware for Microsoft Windows (with two unofficial ports to Mac OS X). It was then remade for the Xbox 360, with ports to the PlayStation 3, PlayStation Vita and then back to Microsoft Windows. The player controls a spelunker who explores a series of caves while collecting treasure, saving damsels, and dodging traps. The first public release was on December 21, 2008. The source code of the 2008 Windows version was released on December 25, 2009. An enhanced version for Xbox Live Arcade was released on July 4, 2012. The enhanced edition was also released on PC on August 8, 2013 and for PlayStation 3 on August 27 and 28, 2013.</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-25 20:50:57', 0, 0, ';pc;;mac;;ps3;;xbox360;', ';action;;adventure;;sport;', 'pre2010', 3, '10.00', 0),
(17, 'Journey', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/29510journey.png"/></div><div class="contentBoxText"><h2>Journey</h2><p>A short game filled with quirks. Journey has a completely different multiplayer system than ever seen before, and with such a well written soundtrack, journey will have you wanting more.</p></div><div class="contentMore"><p>Journey is an indie video game developed by Thatgamecompany for the PlayStation 3. It was released on March 13, 2012, via the PlayStation Network. In Journey, the player controls a robed figure in a vast desert, traveling towards a mountain in the distance. Other players on the same journey can be discovered, and two players can meet and assist each other, but they cannot communicate via speech or text and cannot see each other''s names. The only form of communication between the two is a musical chime. This chime also transforms dull, stiff pieces of cloth found throughout the levels into vibrant red, affecting the game world and allowing the player to progress through the levels. The robed figure wears a trailing scarf, which when charged by approaching floating pieces of cloth, briefly allows the player to float through the air. The developers sought to evoke in the player a sense of smallness and wonder, and to forge an emotional connection between them and the anonymous players they meet along the way. The music, composed by Austin Wintory, dynamically responds to the player''s actions, building a single theme to represent the game''s emotional arc throughout the story. Reviewers of the game praised the visual and auditory art as well as the sense of companionship created by playing with a stranger, calling it a moving and emotional experience. Journey won several "game of the year" awards and received several other awards and nominations, including a Best Score Soundtrack for Visual Media nomination for the 2013 Grammy Awards. A retail "Collector''s Edition", including Journey, Thatgamecompany''s two previous titles, and additional media, was released on August 28, 2012.</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-26 00:27:07', 0, 0, ';ps4;;ps3;', ';adventure;', '2013', 5, '15.00', 0),
(18, 'Quantum Conundrum', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/859008quantum.png"/></div><div class="contentBoxText"><h2>Quantum Conundrum</h2><p>A game with a unique artstyle, go through the levels and bend the laws of physics to complete puzzles.</p></div><div class="contentMore"><p>Quantum Conundrum is a puzzle-platformer video game developed by Airtight Games and published by Square Enix. It was directed by Kim Swift, who formerly worked at Valve as a lead designer on the critically acclaimed Portal. The game was released downloadably on Microsoft Windows on June 21, 2012, July 10, 2012 on PlayStation 3 and July 11, 2012 on Xbox 360.</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-26 00:30:58', 0, 0, ';pc;;ps3;;xbox360;', ';action;;puzzle;;sport;', '2012', 3, '10.00', 0),
(19, 'Retro City Rampage', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/33294retro.png"/></div><div class="contentBoxText"><h2>Retro City Rampage</h2><p>A game created to feel like an 80s arcade game. Players will find this game super addictive and quietly hilarious!</p></div><div class="contentMore"><p>Retro City Rampage is a downloadable action-adventure video game for WiiWare, Xbox Live Arcade, PlayStation Network and Microsoft Windows developed by Vblank Entertainment. It is a parody of retro games and 80s and 90s pop culture as well as the popular Grand Theft Auto series and the games that followed it. It was released on October 9, 2012 for PlayStation 3, PlayStation Vita, Microsoft Windows, and on January 2, 2013 for Xbox Live Arcade, and on February 28, 2013 for WiiWare. Retro City Rampage was the last original game released for the WiiWare service globally until Deer Drive Legends was ported to the service the following November. The game is due to be released for the Nintendo 3DS via its Nintendo eShop during the first quarter of 2014.</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-26 00:33:00', 0, 0, ';pc;;ps3;;xboxone;;xbox360;;wii;', '', '2013', 3, '10.00', 0),
(20, 'Chivalry', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/507049chivalry.png"/></div><div class="contentBoxText"><h2>Chivalry</h2><p>Imagine Call of Duty in the 1700s! This game is full of action, blood and a variety of gamemodes so you\\''ll never get bored!</p></div><div class="contentMore"><p>Chivalry: Medieval Warfare is a multiplayer action video game developed by Torn Banner Studios as their first commercial title. The game is set in a fictional world resembling the Middle Ages and offers similar gameplay combat to the developer''s previously released Half-Life 2 mod, Age of Chivalry. On September 20, 2012 a trailer was released which set the release date to October 16, 2012. The developers had confirmed that the game would be PC exclusive, though they stated the possibility of console versions if the interest were great enough. An expansion pack called Chivalry: Deadliest Warrior was announced on August 23, 2013. It''s a tie-in for the television series Deadliest Warrior.</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-26 00:34:26', 0, 0, ';pc;;mac;;linux;', ';action;;adventure;;sport;', '2013', 4, '15.00', 0),
(22, 'Kitteh', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/849426kitten with bowtie.jpg"/></div><div class="contentBoxText"><h2>Kitteh</h2><p>Kitteh</p></div><div class="contentMore"><h3>KITTEH</h3><p>KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI KITTEH WIT A BOWTI</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-26 12:49:06', 0, 0, '', '', '', 0, '0.00', 0),
(23, 'Random Content', '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/uploads/718231city.jpg"/></div><div class="contentBoxText"><h2>Random Content</h2><p>Intro</p></div><div class="contentMore"><h2 style="clear:both;">Title</h2><p>Random Paragraph</p><img style="border:solid black 2px; width:50%; float:right;" src="http://i.imgur.com/UkwaDks.gif"/><p>LOL its a duck</p><h2 style="clear:both;">Another title</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div><p class="readMore">Read More</p></div>', 0, '2014-01-30 00:57:06', 0, 0, ';mac;;linux;;xboxone;;wiiu;;ios;;android;', ';shooter;', 'beta', 5, '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contentreviews_table`
--

CREATE TABLE IF NOT EXISTS `contentreviews_table` (
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
  `price` decimal(5,2) NOT NULL,
  `staff` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `join date` date NOT NULL,
  `bio` varchar(256) NOT NULL,
  `indiePoints` int(11) NOT NULL DEFAULT '0',
  `games` text NOT NULL,
  `wishlist` text NOT NULL,
  `lastSeen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profileBackground` text NOT NULL,
  `birthday` date NOT NULL,
  `location` text NOT NULL,
  `settings` text NOT NULL,
  `friends` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `email`, `status`, `first name`, `surname`, `profile picture`, `join date`, `bio`, `indiePoints`, `games`, `wishlist`, `lastSeen`, `profileBackground`, `birthday`, `location`, `settings`, `friends`) VALUES
(2, 'Liam', '1a1dc91c907325c69271ddf0c944bc72', 'liamkferris@hotmail.com', 3, 'Liam', 'Ferris', 'img/uploads/385192lets-adventure-through-drugs_o_624111.gif', '2014-01-23', 'This is my Bio.', 9002, '', '', '2014-01-30 20:57:13', '', '0000-00-00', '', '', ''),
(3, 'Bob', '202cb962ac59075b964b07152d234b70', 'moonpig@.com', 1, 'Bob', 'the Builder', 'img/uploads/28967doge.jpeg', '0000-00-00', 'Hey I''m Bob. I''m a builder. I also love indie games and really well made websites.', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', ''),
(4, 'bellybutun', '90319ea56263c86d6dbade1b0f34fab6', 'greenman848@hotmail.co.uk', 3, 'Ryan', 'Barnes', 'img/uploads/772644chargif.gif', '0000-00-00', '', 0, '', '', '2014-01-29 21:03:47', '', '0000-00-00', '', 'showEmail=false showName=true showAge=true showLocation=false', ''),
(5, 'andrew', '6de98bf62c3c2fe371082ee083a3787e', 'andyroo985@gmail.com', 3, 'Anjew', 'Anderson', 'img/uploads/337646kitten with bowtie.jpg', '0000-00-00', 'I am a recovering Jew. The severity of my religion left me disfigured in a number of ways; I can no longer talk, only mew, i no longer have hair, only fur, and i seem to have a bowtie stuck to me at all times. For just Â£1 a month you can stop Anjewidis. H', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', ''),
(7, 'Gavin', '1a1dc91c907325c69271ddf0c944bc72', 'gavin.arrell@gmail.com', 3, 'Gavin', 'Arrell', 'img/Digital-Abstract-HD-Background.jpg', '0000-00-00', '', 0, '', '', '2014-01-30 20:51:47', '', '0000-00-00', '', '', ''),
(8, 'Tristan', '5101ed23493df51bae32779cd8043ff0', 'tristancullen@ntlworld.com', 0, 'Tristan', 'Cullen', 'img/Digital-Abstract-HD-Background.jpg', '2014-01-29', '', 0, '', '', '2014-01-29 21:56:42', '', '0000-00-00', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
