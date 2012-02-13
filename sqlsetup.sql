-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2012 at 03:01 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

USE `comicsgalore`;

-- -------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` mediumint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `descrip` text,
  `image` varchar(50) DEFAULT NULL,
  `price` varchar(7) DEFAULT NULL,
  `sku` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` VALUES(1, 'Amazing Fantasy 15 (1962)', 'With nothing to lose, publisher Martin Goodman agreed to allow Lee to introduce Spider-Man, a new kind of superhero — one who would be a teenager, but not a sidekick, and one who would have everyman doubts, neuroses and money problems.  Sales for Amazing Fantasy #15 proved to be one of Marvel''s highest at the time and The Amazing Spider-Man was quickly launched to capitalize on the new character''s apparent popularity', '220px-Amazing_Fantasy_15.jpg', '250.00', '1293812938172');
INSERT INTO `products` VALUES(2, 'Detective Comics 27 (1939)', 'Detective Comics #27 (May 1939) featured the first appearance of Batman (as ''The Bat-Man''). That superhero would eventually become the star of the title, the cover logo of which is often written as ''Detective Comics featuring Batman''. Because of its significance, issue #27 is widely considered one of the most valuable comic books in existence, with one copy selling for $1,075,000 in a February 2010 auction.', 'Detective_Comics_27.jpg', '400.00', '3812639379154');
INSERT INTO `products` VALUES(3, 'Action Comics 1 (1938)', 'Action Comics is an American comic book series that introduced Superman, the first major superhero character as the term is popularly defined. The publisher was originally known as Detective Comics, Inc., and later as National Comics and as National Periodical Publications, before taking on its current name of DC Comics.', 'Action_Comics_1.jpg', '700.00', '84625395716233');
INSERT INTO `products` VALUES(4, 'Showcase 22 (1959)', 'Harold ''Hal'' Jordan is a DC Comics superhero known as Green Lantern, the first human shown to join the Green Lantern Corps and a founding member of the Justice League of America. Jordan is the second DC Comics character to adopt the Green Lantern moniker. Jordan was created in the Silver Age of Comic Books by John Broome and Gil Kane, and made his first appearance in Showcase #22 (October 1959).', 'Showcase_22.png', '950.00', '9487239892342');
INSERT INTO `products` VALUES(5, 'The Avengers #1 (1963)', 'The Avengers is a fictional team of superheroes, appearing in magazines published by Marvel Comics. The team made its debut in The Avengers #1 (Sept. 1963), and was created by writer-editor Stan Lee and artist/co-plotter Jack Kirby, following the trend of super-hero teams after the success of DC Comics'' Justice League of America.', 'Avengers-1.jpg', '350.00', '347239473423');
