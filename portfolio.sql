-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 02:43 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-15 11:50:35'),
(2, 2, '{"role":"2","roleText":"Manager","name":"Manager"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-15 11:51:17'),
(3, 3, '{"role":"3","roleText":"Employee","name":"Employee"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-15 11:54:10'),
(4, 2, '{"role":"2","roleText":"Manager","name":"Manager"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-15 12:51:38'),
(5, 2, '{"role":"2","roleText":"Manager","name":"Manager"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-15 13:06:21'),
(6, 2, '{"role":"2","roleText":"Manager","name":"Manager"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-15 18:50:20'),
(7, 2, '{"role":"2","roleText":"Manager","name":"Manager"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-16 08:58:49'),
(8, 2, '{"role":"2","roleText":"Manager","name":"Manager"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-16 08:59:19'),
(9, 2, '{"role":"2","roleText":"Manager","name":"Manager"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-16 09:01:07'),
(10, 2, '{"role":"2","roleText":"Manager","name":"Manager"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-16 09:13:11'),
(11, 2, '{"role":"2","roleText":"Manager","name":"Manager"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-16 09:21:42'),
(12, 3, '{"role":"3","roleText":"Employee","name":"Employee"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-16 09:21:57'),
(13, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-16 09:22:22'),
(14, 3, '{"role":"3","roleText":"Employee","name":"Employee"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-22 18:57:41'),
(15, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-22 18:57:53'),
(16, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-29 16:23:56'),
(17, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-30 09:06:18'),
(18, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-30 15:51:44'),
(19, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-30 16:02:30'),
(20, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '::1', 'Chrome 65.0.3325.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36', 'Linux', '2018-05-31 14:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `projectId` int(11) NOT NULL,
  `projectName` varchar(150) NOT NULL,
  `projectCategory` varchar(150) NOT NULL,
  `companyNameORClientName` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `projectURL` varchar(100) NOT NULL,
  `technology` varchar(100) NOT NULL,
  `databaseName` varchar(100) NOT NULL,
  `framework` varchar(100) NOT NULL,
  `projectManagementTool` varchar(100) NOT NULL,
  `responsive` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `thirdPartyComponents` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `type` enum('Desktop','DesktopWeb','Mobile','MobileDesktop','MobileWeb','MobileWebDesktop','Web') NOT NULL,
  `frameworkORCMSVersion` varchar(100) NOT NULL,
  `versioning` varchar(100) NOT NULL,
  `roleId` int(11) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedDtm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`projectId`, `projectName`, `projectCategory`, `companyNameORClientName`, `logo`, `duration`, `projectURL`, `technology`, `databaseName`, `framework`, `projectManagementTool`, `responsive`, `os`, `thirdPartyComponents`, `description`, `type`, `frameworkORCMSVersion`, `versioning`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'HOLAAA', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Desktop', '', '', 0, 0, 1, '2018-05-31 14:27:32', 1, '2018-05-31 14:27:40'),
(2, 'Aaa', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Desktop', '', '', 0, 1, 1, '2018-05-31 14:27:48', 1, '2018-05-31 14:41:04'),
(3, 'Dfdf', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Desktop', '', '', 0, 1, 1, '2018-05-31 14:41:32', 1, '2018-05-31 14:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@example.com', '$2y$10$6NOKhXKiR2SAgpFF2WpCkuRgYKlSqFJaqM0NgIM3PT1gKHEM5/SM6', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2018-01-05 05:56:34'),
(2, 'vidya.shevale24@gmail.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2018-01-12 07:22:11'),
(3, 'arbazrizvi7@gmail.com', '$2y$10$UYsH1G7MkDg1cutOdgl2Q.ZbXjyX.CSjsdgQKvGzAgl60RXZxpB5u', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', 3, '2018-01-04 07:58:28'),
(9, 'shamal.bangar@wwindia.com', '$2y$10$2UCZ5eqfZIuwST6TBEq2o.QsM7nt84LNbcWCzjb4xZWK5fykEcC.a', 'Shamal', '9856325698', 3, 0, 1, '2018-05-16 09:24:39', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`projectId`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
