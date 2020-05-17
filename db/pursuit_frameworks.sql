-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 03:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pursuit_frameworks`
--

-- --------------------------------------------------------

--
-- Table structure for table `lighthouse`
--

CREATE TABLE `lighthouse` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `impact_others` varchar(500) DEFAULT NULL,
  `effect_me` varchar(500) DEFAULT NULL,
  `potential` varchar(250) DEFAULT NULL,
  `space` varchar(150) DEFAULT NULL,
  `show_up` varchar(150) DEFAULT NULL,
  `contribution` varchar(150) DEFAULT NULL,
  `meaningful_me` varchar(150) DEFAULT NULL,
  `meaningful_experience` varchar(150) DEFAULT NULL,
  `handle` varchar(100) DEFAULT NULL,
  `my_choice` varchar(100) DEFAULT NULL,
  `truly_want` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lighthouse`
--

INSERT INTO `lighthouse` (`id`, `user_id`, `impact_others`, `effect_me`, `potential`, `space`, `show_up`, `contribution`, `meaningful_me`, `meaningful_experience`, `handle`, `my_choice`, `truly_want`) VALUES
(1, 1, 'TEST', 'TEST', 'BIG TEST', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `me`
--

CREATE TABLE `me` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title1` varchar(50) DEFAULT NULL,
  `description1` varchar(250) NOT NULL,
  `meaningfulness_you1` varchar(250) DEFAULT NULL,
  `meaningfulness_other1` varchar(250) DEFAULT NULL,
  `impact_you1` varchar(250) DEFAULT NULL,
  `impact_other1` varchar(250) DEFAULT NULL,
  `title2` varchar(50) DEFAULT NULL,
  `description2` varchar(250) NOT NULL,
  `meaningfulness_you2` varchar(250) DEFAULT NULL,
  `meaningfulness_other2` varchar(250) DEFAULT NULL,
  `impact_you2` varchar(250) DEFAULT NULL,
  `impact_other2` varchar(250) DEFAULT NULL,
  `title3` varchar(50) DEFAULT NULL,
  `description3` varchar(250) NOT NULL,
  `meaningfulness_you3` varchar(250) DEFAULT NULL,
  `meaningfulness_other3` varchar(250) DEFAULT NULL,
  `impact_you3` varchar(250) DEFAULT NULL,
  `impact_other3` varchar(250) DEFAULT NULL,
  `fundamental` varchar(750) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `me`
--

INSERT INTO `me` (`id`, `user_id`, `title1`, `description1`, `meaningfulness_you1`, `meaningfulness_other1`, `impact_you1`, `impact_other1`, `title2`, `description2`, `meaningfulness_you2`, `meaningfulness_other2`, `impact_you2`, `impact_other2`, `title3`, `description3`, `meaningfulness_you3`, `meaningfulness_other3`, `impact_you3`, `impact_other3`, `fundamental`) VALUES
(1, 1, 'Test1', 'Hey hey', 'Whats up', '', '', '', 'Test2', '', '', '', '', '', 'Test3', '', '', '', '', '', 'THIS IS A TEST'),
(3, 5, 'HEY IM A TEST', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TESTY TEST TEST');

-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE `purpose` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hope` varchar(250) DEFAULT NULL,
  `doings` varchar(250) DEFAULT NULL,
  `creations` varchar(250) DEFAULT NULL,
  `intentions` varchar(250) DEFAULT NULL,
  `exist_to` varchar(250) DEFAULT NULL,
  `results_in` varchar(250) DEFAULT NULL,
  `myself_others` varchar(250) DEFAULT NULL,
  `purpose_statement` varchar(600) DEFAULT NULL,
  `handle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purpose`
--

INSERT INTO `purpose` (`id`, `user_id`, `hope`, `doings`, `creations`, `intentions`, `exist_to`, `results_in`, `myself_others`, `purpose_statement`, `handle`) VALUES
(1, 1, 'Test', 'Big Test', '', '', '', '', '', 'Hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(64) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `access`) VALUES
(1, 'Andrew', 'Farley', 'amf7crazy@gmail.com', '00b2327af0a80e492d11e04f4ad74b4abb298b5f956cd2d94e8f1fcc81aeedd0', 0),
(3, 'Mike', 'Farley', 'mike@pursuitinc.com', '68fcfd9b4d77bfd0af3b4882ac7d95419aa0faf656649048134c012c2b594058', 0),
(5, 'Test', 'User', 'test@test.com', '68fcfd9b4d77bfd0af3b4882ac7d95419aa0faf656649048134c012c2b594058', 4),
(6, 'Test', 'User', 'test0@test.com', '68fcfd9b4d77bfd0af3b4882ac7d95419aa0faf656649048134c012c2b594058', 4);

-- --------------------------------------------------------

--
-- Table structure for table `world_view`
--

CREATE TABLE `world_view` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feel_neg` varchar(250) DEFAULT NULL,
  `big_world_neg` varchar(250) DEFAULT NULL,
  `big_world_pos` varchar(250) DEFAULT NULL,
  `world_communities_neg` varchar(250) DEFAULT NULL,
  `world_communities_pos` varchar(250) DEFAULT NULL,
  `feel_pos` varchar(250) DEFAULT NULL,
  `react_neg` varchar(250) DEFAULT NULL,
  `work_world_neg` varchar(250) DEFAULT NULL,
  `work_world_pos` varchar(250) DEFAULT NULL,
  `respond_pos` varchar(250) DEFAULT NULL,
  `impact_neg` varchar(250) DEFAULT NULL,
  `personal_world_neg` varchar(250) DEFAULT NULL,
  `personal_world_pos` varchar(250) DEFAULT NULL,
  `impact_pos` varchar(250) DEFAULT NULL,
  `position_neg` varchar(100) DEFAULT NULL,
  `position_pos` varchar(100) DEFAULT NULL,
  `thoughts` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `world_view`
--

INSERT INTO `world_view` (`id`, `user_id`, `feel_neg`, `big_world_neg`, `big_world_pos`, `world_communities_neg`, `world_communities_pos`, `feel_pos`, `react_neg`, `work_world_neg`, `work_world_pos`, `respond_pos`, `impact_neg`, `personal_world_neg`, `personal_world_pos`, `impact_pos`, `position_neg`, `position_pos`, `thoughts`) VALUES
(1, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lighthouse`
--
ALTER TABLE `lighthouse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lighthouse_ibfk_1` (`user_id`);

--
-- Indexes for table `me`
--
ALTER TABLE `me`
  ADD PRIMARY KEY (`id`),
  ADD KEY `me_ibfk_1` (`user_id`);

--
-- Indexes for table `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purpose_ibfk_1` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `world_view`
--
ALTER TABLE `world_view`
  ADD PRIMARY KEY (`id`),
  ADD KEY `world_view_ibfk_1` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lighthouse`
--
ALTER TABLE `lighthouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `me`
--
ALTER TABLE `me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `world_view`
--
ALTER TABLE `world_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lighthouse`
--
ALTER TABLE `lighthouse`
  ADD CONSTRAINT `lighthouse_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `me`
--
ALTER TABLE `me`
  ADD CONSTRAINT `me_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purpose`
--
ALTER TABLE `purpose`
  ADD CONSTRAINT `purpose_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `world_view`
--
ALTER TABLE `world_view`
  ADD CONSTRAINT `world_view_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
