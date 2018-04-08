-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2018 at 05:58 AM
-- Server version: 5.6.38-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madventu_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password1` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password1`) VALUES
(1, 'madventure IT Solutions Limited', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Android'),
(4, 'ISO'),
(5, 'UI/UX'),
(6, 'Entrepreneur'),
(7, 'Web');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` varchar(4000) DEFAULT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `date1` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `categoryid`, `date1`, `image`, `name`) VALUES
(4, '7 Easy Steps in Choosing the Right Software Development Partner', '<p>If you&rsquo;re a business in need for a software, the biggest question that must be gnawing you is this: How do I find the right software development partner; someone who is able, trustworthy and reliable? &ldquo;Audacity IT Solutions Ltd&rdquo; will discuss 7 easy ways to do just that! 1. Choose the Right Place. This will be the most significant in If you&rsquo;re a business in need for a software, the biggest question that must be gnawing you is this: How do I find the right software development partner; someone who is able, trustworthy and reliable? &ldquo;Audacity IT Solutions Ltd&rdquo; will discuss 7 easy ways to do just that! 1. Choose the Right Place. This will be the most significant in If you&rsquo;re a business in need for a software, the biggest question that must be gnawing you is this: How do I find the right software development partner; someone who is able, trustworthy and reliable? &ldquo;Audacity IT Solutions Ltd&rdquo; will discuss 7 easy ways to do just that! 1. Choose the Right Place. This will be the most significant in</p>\r\n', 2, '17-04-27', 'blog3.JPG', 'madventure IT Solutions Limited'),
(5, '14 Bangladeshi mobile app UI/UX engineer, you should follow on behance/dribbble [Part 01]', '<p>If you&rsquo;re a business in need for a software, the biggest question that must be gnawing you is this: How do I find the right software development partner; someone who is able, trustworthy and reliable? &ldquo;Audacity IT Solutions Ltd&rdquo; will discuss 7 easy ways to do just that! 1. Choose the Right Place. This will be the most significant in If you&rsquo;re a business in need for a software, the biggest question that must be gnawing you is this: How do I find the right software development partner; someone who is able, trustworthy and reliable? &ldquo;Audacity IT Solutions Ltd&rdquo; will discuss 7 easy ways to do just that! 1. Choose the Right Place. This will be the most significant in If you&rsquo;re a business in need for a software, the biggest question that must be gnawing you is this: How do I find the right software development partner; someone who is able, trustworthy and reliable? &ldquo;Audacity IT Solutions Ltd&rdquo; will discuss 7 easy ways to do just that! 1. Choose the Right Place. This will be the most significant in</p>\r\n', 2, '17-04-27', 'blog2.JPG', 'madventure IT Solutions Limited'),
(6, '17 Bangladeshi mobile app UI/UX engineer, you should follow on behance/dribbble [Part 02]', '<p>If you&rsquo;re a business in need for a software, the biggest question that must be gnawing you is this: How do I find the right software development partner; someone who is able, trustworthy and reliable? &ldquo;Audacity IT Solutions Ltd&rdquo; will discuss 7 easy ways to do just that! 1. Choose the Right Place. This will be the most significant in If you&rsquo;re a business in need for a software, the biggest question that must be gnawing you is this: How do I find the right software development partner; someone who is able, trustworthy and reliable? &ldquo;Audacity IT Solutions Ltd&rdquo; will discuss 7 easy ways to do just that! 1. Choose the Right Place. This will be the most significant in If you&rsquo;re a business in need for a software, the biggest question that must be gnawing you is this: How do I find the right software development partner; someone who is able, trustworthy and reliable? &ldquo;Audacity IT Solutions Ltd&rdquo; will discuss 7 easy ways to do just that! 1. Choose the Right Place. This will be the most significant in</p>\r\n', 2, '17-04-27', 'blog1.JPG', 'madventure IT Solutions Limited');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
