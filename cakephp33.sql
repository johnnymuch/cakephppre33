-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 09:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakephp33`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `anthor` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `category`, `anthor`, `image`, `created`, `modified`) VALUES
(1, 'Full of features', 'With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of custom HTML and CSS components, and awesome jQuery plugins.', 'Technology', 'Good', '', '2017-01-11 00:00:00', '2017-01-25 00:00:00'),
(2, 'Full of featuress', 'With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of custom HTML and CSS components, and awesome jQuery plugins.s', 'Product', 'Good', '', '0000-00-00 00:00:00', '2017-02-07 04:10:08'),
(4, 'Data Binding', 'Data-binding is an automatic way of updating the view whenever the model changes, as well as updating the model whenever the view changes. This is awesome because it eliminates DOM manipulation from the list of things you have to worry about.', 'Angularjs II', 'Studying', '', '2017-02-07 04:11:06', '2017-02-07 04:11:06'),
(5, 'asdf', 'asdf', 'asdf', 'asdf', '', '2017-02-07 04:48:12', '2017-02-07 04:48:12'),
(6, 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdf', '', '2017-02-07 08:25:59', '2017-02-07 08:25:59'),
(7, 'fasdf', 'asdf', 'asdf', 'asdf', '', '2017-02-07 08:28:30', '2017-02-07 08:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `username`, `password`, `role`, `photo`, `dir`) VALUES
(1, 'Dell', 'Dell Computer', 'asdf', 'admin', 'cake.power.gif', 'GOOD'),
(2, 'Apple', 'khin', '$2y$10$w7XYxpmqttn.0hK0Y6RMu.AabVrpoANKh78eousIE7IW.z7slt40C', 'admin', 'cake.power.gif', 'Share'),
(3, 'asdf', 'asdf', '$2y$10$/m1pJetFj6SIKjJsLtyD2.rDt4S1HiwgnOIplKamYBpGu93WJp8PK', 'asdf', 'cake.icon.png', 'asdf'),
(5, 'Add Upload', 'addupload', 'adduploadd', 'addupload', 'cake.icon.png', 'Add Upload'),
(6, 'asdfas', 'asdfasdf', '$2y$10$tflpoaH484FbG2OsP12L7.KXcg.i8Mu3.LmmttfdU365e45sCjFgG', 'asdfasdf', '16387427_1159699247480436_5304441891429032015_n.jpg', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created`, `modified`) VALUES
(1, 'khinchanny', 'khinchanny2015@gmail.com', '$2y$10$hvGpJFYrYjs44NRDlQ1KMucjPm3JAi1O05D3iVwbW5owNKQhk.MJe', '2017-01-11 02:53:32', '2017-02-04 06:50:34'),
(2, 'admin', 'admin@admin.com', '$2y$10$Fq.iG5rwUdbBumAf5OC1XeaF/cpFKTMyxBICIKig83LSq.IY1.Q3e', '2017-01-11 04:22:31', '2017-02-06 08:34:18'),
(3, 'channy', 'khinchanny@gmail.com', '$2y$10$XwMzupoCg3EeTjdyHgiwHO1NPzsdTR9NREg7A3c.KIBMXtKFT.3V2', '2017-01-11 05:20:30', '2017-01-11 05:20:30'),
(4, 'johnny', 'johnny@2ntkh.com', '$2y$10$ynGZKo12wmhUS3MqQQ5XVuI0XU.ZzSEijnJwF.g1BaQhoXtk4OyWW', '2017-02-06 08:44:20', '2017-02-06 08:44:20'),
(5, 'Cambodia', 'Cambodia@gmail.com', '$2y$10$EWUnsUc3IEgLI/2MKmL1juGkpLAtZUI7kznXmCij0L/fhVX6d3qXq', '2017-02-07 03:53:28', '2017-02-07 03:53:28'),
(6, 'phpteam', 'phpteam@gmail.com', '$2y$10$2A8.V0DSI8cRjtMBO0v0FubeqRo/QmcHcjoWgfAnVbBXaZy6q6nBm', '2017-02-07 03:55:18', '2017-02-07 03:55:18'),
(7, 'javateam', 'javateam@gmail.com', '$2y$10$2YoCYyLkqBlNIHIBrQngcOpJ4HYDNjkGb6hi8WTYme8nvyXLvgDLS', '2017-02-07 03:55:42', '2017-02-07 03:55:42'),
(8, 'isoteam', 'isoteam@gmail.com', '$2y$10$dA5qFhgXJiIjNbXUnAQ34OX2ZXoZf1PV1bObIegKmU5GPy5JW3x5y', '2017-02-07 03:56:09', '2017-02-07 03:56:09'),
(9, 'andriodteam', 'andriodteam@gmail.com', '$2y$10$PJMxMxNJ2.SNnG8SZHXCU.NhjCydfjJyqzCnTidm9xHpFBrEbZg6.', '2017-02-07 03:56:32', '2017-02-07 03:56:32'),
(10, 'cshapteam', 'cshapteam@gmail.com', '$2y$10$EI7OVdlI0sL5lOJockSq4ubTtEq0s7FLxOsGfNpJxjd60EeMGpV3u', '2017-02-07 03:57:03', '2017-02-07 03:57:03'),
(11, 'asdf', 'asdf@gmail.com', '$2y$10$rAwp4ElzYb/aHUu04VUqvOZXylcqUXwipzL9Nclmt368OnNRH/znO', '2017-02-07 04:42:53', '2017-02-07 04:42:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BY_USERNAME` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
