
-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2015 at 06:36 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kios`
--

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE IF NOT EXISTS `metas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `default_meta` text NOT NULL,
  `fb_meta` text NOT NULL,
  `twt_meta` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`ID`, `page_id`, `name`, `default_meta`, `fb_meta`, `twt_meta`) VALUES
(1, 1, 'HOME', '{"title":"this is title","description":"this is description","keywords":"this is keywords","author":"this is author","robots":"this is robots"}', '{"og_title":"this is title","og_type":"website","og_image":"image.png","og_url":"http:\\/\\/localhost","og_site_name":"kios27","og_description":"this is description"}', '{"twitter_card":"this is title","twitter_url":"this is title","twitter_title":"this is title","twitter_description":"this is title","twitter_image":"this is title"}'),
(2, 2, 'SHOP LIST', '{"title":"this is title","description":"this is description","keywords":"this is keywords","author":"this is author","robots":"this is robots"}', '{"og_title":"this is title","og_type":"website","og_image":"image.png","og_url":"http:\\/\\/localhost","og_site_name":"kios27","og_description":"this is description"}', '{"twitter_card":"this is title","twitter_url":"this is title","twitter_title":"this is title","twitter_description":"this is title","twitter_image":"this is title"}');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `title`, `content`, `status`) VALUES
(1, 'HOME', 'sadas', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
