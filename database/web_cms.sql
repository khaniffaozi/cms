-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2015 at 05:35 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'Indonesia'),
(2, 'Malaysia'),
(3, 'Singapore'),
(4, 'Vietnam'),
(5, 'All');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `valid_until` date DEFAULT NULL,
  `country` varchar(64) NOT NULL,
  `is_publish` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `valid_until`, `country`, `is_publish`) VALUES
(2, 'Web Programmer (IT Department)', '2015-11-11', 'Indonesia', 1),
(17, '1', '2015-11-18', 'Indonesia', 1),
(18, 're', '2015-11-18', 'Indonesia', 1),
(19, 'tahu', '2015-11-30', 'Indonesia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_reference`
--

CREATE TABLE IF NOT EXISTS `job_reference` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `job_id` int(8) NOT NULL,
  `type` varchar(64) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `job_id_fk` (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=597 ;

--
-- Dumping data for table `job_reference`
--

INSERT INTO `job_reference` (`id`, `job_id`, `type`, `description`) VALUES
(563, 2, 'responsibilities', 'Confirm project requirements by reviewing program objectives, input data, and output requirements with analyst, supervisor, and client'),
(564, 2, 'responsibilities', 'Develop and test software applications (both desktop and web-based)'),
(565, 2, 'responsibilities', 'Install, customize and maintain operating systems software including installing and testing new releases'),
(566, 2, 'required', 'Used to working with Git VCS'),
(567, 2, 'desirable', 'Strong knowledge and experience in PHP framework Symfony2, Drupal or Yii'),
(568, 2, 'desirable', 'Experience in using Node.JS or Angular.JS is highly desirable'),
(569, 2, 'desirable', 'Experience in Nginx and SOAP webservice will be advantaged'),
(570, 2, 'desirable', 'Experience working with NoSQL databases (mongodb, couchdb, neo4j, etc.)'),
(571, 2, 'desirable', 'Knowledgeable of well-known technology standards (RFC, W3C, IEEEetc.) will be advantageous'),
(572, 2, 'desirable', 'Strong knowledge in Object Oriented Programming (PHP)'),
(573, 2, 'desirable', 'Familiar with Ajax, JQuery, Javascript & CSS'),
(574, 2, 'desirable', 'Familiar with UML'),
(583, 17, 'responsibilities', '1'),
(584, 17, 'responsibilities', '2'),
(585, 17, 'required', '1'),
(586, 17, 'required', '2'),
(587, 17, 'desirable', '1'),
(588, 18, 'responsibilities', 'ress'),
(589, 18, 'responsibilities', 'resss'),
(590, 18, 'required', 're'),
(591, 18, 'required', 'res'),
(592, 18, 'desirable', 'ressss'),
(593, 18, 'desirable', 'ressss'),
(594, 19, 'responsibilities', 'responsible'),
(595, 19, 'required', 'requirement'),
(596, 19, 'desirable', 'desirable');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `user_type` varchar(64) NOT NULL,
  `country` varchar(64) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `user_type`, `country`, `is_active`) VALUES
(31, 'khanif.faozi@ptsynergy.co.id', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'All', 1),
(38, '', 'hr.indonesia', '06f3ad205ac4e821c167eaa679bb08db', 'user', 'Indonesia', 1),
(39, '', 'hr.malaysia', '06f3ad205ac4e821c167eaa679bb08db', 'user', 'Malaysia', 1),
(40, '', 'hr.singapore', '06f3ad205ac4e821c167eaa679bb08db', 'user', 'Singapore', 1),
(41, '', 'hr.vietnam', '06f3ad205ac4e821c167eaa679bb08db', 'user', 'Vietnam', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_reference`
--
ALTER TABLE `job_reference`
  ADD CONSTRAINT `job_reference_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
