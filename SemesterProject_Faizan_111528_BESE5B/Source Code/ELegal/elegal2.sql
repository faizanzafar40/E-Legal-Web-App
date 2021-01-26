-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 07:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elegal2`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(50000) NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL,
  `lawyer_name` varchar(15) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`answer_id`),
  KEY `lawyer_name` (`lawyer_name`),
  KEY `question_id` (`question_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `answer`, `post_date`, `post_time`, `lawyer_name`, `question_id`) VALUES
(6, 'This is the first answer for this question.', '2017-01-10', '04:07:00', 'faizan', 2),
(5, 'This is another answer', '2017-01-10', '04:07:00', 'faizan', 1),
(4, 'This is answer 3.', '2017-01-10', '04:07:00', 'murtaza', 1),
(8, 'This is the second answer.', '2017-01-10', '04:07:00', 'faizan', 2),
(9, 'This is an answer.', '2017-01-10', '04:07:00', 'faizan', 6),
(10, 'This is another answer.', '2017-01-10', '04:07:00', 'murtaza', 6);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `a_domain` varchar(25) DEFAULT NULL,
  `rating` int(11) DEFAULT '0',
  `post_date` date NOT NULL,
  `post_time` time NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `fk_artUser` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `a_domain`, `rating`, `post_date`, `post_time`, `username`) VALUES
(1, '', 'Article 1', 0, '2017-06-07', '03:04:00', 'murtaza'),
(2, 'Article 2', 'Property', 0, '2017-01-10', '04:07:00', 'murtaza'),
(3, 'Article 3', 'Robbery', 0, '2017-01-10', '04:07:00', 'murtaza'),
(4, 'Article 4', 'Crime', 0, '2017-01-10', '04:07:00', 'murtaza');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `case_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE latin1_bin NOT NULL,
  `case_title` varchar(255) COLLATE latin1_bin NOT NULL,
  `progress` varchar(255) COLLATE latin1_bin NOT NULL,
  `tasks_done` varchar(255) COLLATE latin1_bin NOT NULL,
  `tasks_remaining` varchar(255) COLLATE latin1_bin NOT NULL,
  `appointments` varchar(255) COLLATE latin1_bin NOT NULL,
  `case_description` varchar(255) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`case_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_id`, `username`, `case_title`, `progress`, `tasks_done`, `tasks_remaining`, `appointments`, `case_description`) VALUES
(1, 'Shoaib Sarwar', 'Divorce ', '6', '1. Understanding Divorce\r\n2. Dealing with loss', ' 1. Accepting the permanence of Divorce\r\n2. Taking a chance on love', '04/05/17 Monday   10:00 -11:00  Am\r\n05/07/17 Tuesday  10:00 -11:00 Am', ' bla bla bla bla bla bla bla bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `username` varchar(15) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `age` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `display_pic` int(11) DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`username`, `pass`, `email`, `firstname`, `lastname`, `age`, `city`, `country`, `display_pic`) VALUES
('murtaza', '123', 'murtazamail15@gmail.com', 'Muhammad Murtaza', 'Shiraz', 22, 'Rawalpindi', 'Pakistan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE IF NOT EXISTS `lawyers` (
  `username` varchar(15) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `display_pic` int(11) DEFAULT '0',
  `experience` int(3) DEFAULT '0',
  `city` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`username`, `pass`, `email`, `firstname`, `lastname`, `display_pic`, `experience`, `city`, `country`) VALUES
('faizan', '123', 'faizan954@gmail.com', 'Faizan', 'Zafar', 0, 2, 'Lahore', 'Pakistan'),
('shoaib', 'abc', 'shobii2050@gmail.com', 'shoaib', 'sarwar', 1, 12, 'Gujrat', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10000) NOT NULL,
  `q_domain` varchar(25) DEFAULT NULL,
  `rating` int(11) DEFAULT '0',
  `post_date` date NOT NULL,
  `post_time` time NOT NULL,
  `client_name` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`question_id`),
  KEY `client_name` (`client_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `title`, `q_domain`, `rating`, `post_date`, `post_time`, `client_name`) VALUES
(1, 'There are many different features that could go into determining the right order of the answers to a question. In order to determine that, we actually first need to determine what we at Quora define?', 'Property', 0, '2017-06-12', '04:08:00', 'murtaza'),
(4, 'This is question 4.', NULL, 0, '2017-01-10', '04:07:00', ''),
(5, 'This is question 4?', NULL, 0, '2017-01-10', '04:07:00', 'murtaza'),
(6, 'This is question 4?', NULL, 0, '2017-01-10', '04:07:00', 'murtaza'),
(2, 'This is the second question.', 'crime', 0, '2017-06-06', '04:00:00', 'murtaza'),
(3, 'This is the third question.', 'crime', 0, '2017-06-06', '04:00:00', 'murtaza');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `name` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
