-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2013 at 06:17 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_wc`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `department` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `course_number` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `creator` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `request`
--


-- --------------------------------------------------------

--
-- Table structure for table `wc_course`
--

CREATE TABLE IF NOT EXISTS `wc_course` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `department` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `course_number` int(11) NOT NULL,
  `course_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `professor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `course_description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wc_course`
--


-- --------------------------------------------------------

--
-- Table structure for table `wc_like`
--

CREATE TABLE IF NOT EXISTS `wc_like` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `creator` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `review_type` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wc_like`
--


-- --------------------------------------------------------

--
-- Table structure for table `wc_review`
--

CREATE TABLE IF NOT EXISTS `wc_review` (
  `review` int(1) NOT NULL DEFAULT '1',
  `feel` int(1) NOT NULL DEFAULT '2',
  `experience` int(1) NOT NULL DEFAULT '3',
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `creator` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wc_review`
--


-- --------------------------------------------------------

--
-- Table structure for table `wc_user`
--

CREATE TABLE IF NOT EXISTS `wc_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `credit` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wc_user`
--

