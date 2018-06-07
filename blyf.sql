-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 03:48 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blyf`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrators', '2018-05-06 17:39:20', '2018-05-06 17:39:20'),
(2, 'User', '2018-05-06 17:39:20', '2018-05-06 17:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `body` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `meta_title`, `meta_keyword`, `meta_description`, `url`, `headline`, `short_description`, `body`, `status`, `created`, `modified`) VALUES
(2, '', '', '', 'about', 'About', '', '<p>sadasda</p>\r\n', 1, '2018-06-06 19:30:50', '2018-06-06 21:14:10'),
(3, '', '', '', 'a', 'a', '', '<p>a</p>\r\n', 1, '2018-06-06 20:28:33', '2018-06-06 20:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `site_informations`
--

CREATE TABLE `site_informations` (
  `id` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_informations`
--

INSERT INTO `site_informations` (`id`, `type`, `value`) VALUES
(1, 'site-name', 'BLYF'),
(3, 'site-title', 'BLYF'),
(2, 'contact_email', 'BLYF@gmail.com'),
(4, 'google-site-verification', ''),
(5, 'meta_keywords', ''),
(6, 'meta_description', ''),
(7, 'google_Analytics', ''),
(8, 'phone', '+11 222 444 555'),
(9, 'copy_rights', '&copy; 2018 BLYF.com All Rights Reserved.'),
(10, 'slogan', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `new_password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  `country_id` int(10) DEFAULT '0',
  `confirmed` tinyint(1) DEFAULT '0',
  `confirm_code` varchar(36) DEFAULT NULL,
  `group_id` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `new_password`, `email`, `first_name`, `last_name`, `mobile`, `phone`, `address`, `zip_code`, `country_id`, `confirmed`, `confirm_code`, `group_id`, `status`, `created`, `modified`) VALUES
(1, '$2y$10$fARdcU8UvNWYE947Eb03RehWszHR6jl.nCZqHc9HHmbAzmxy06UKW', '123456', 'admin@blyf.com', 'Admin', 'Admin', '', '0003656976', NULL, NULL, 0, 0, 'eb1080278fffbd72405b8a20312bd41c', 1, 1, '2018-04-27 15:25:59', '2018-06-06 18:19:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_informations`
--
ALTER TABLE `site_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `site_informations`
--
ALTER TABLE `site_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
