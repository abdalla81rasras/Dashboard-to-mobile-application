-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 11:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application1`
--

-- --------------------------------------------------------

--
-- Table structure for table `crouser training`
--

CREATE TABLE `crouser training` (
  `id_crouser_training` int(11) NOT NULL,
  `pic_crouser_triaining` varchar(255) NOT NULL,
  `title_crouser_training` varchar(150) NOT NULL,
  `date_crouser_training` date NOT NULL,
  `time_crouser_training` time NOT NULL,
  `description_crouser_training` varchar(500) NOT NULL,
  `price_crouser_training` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crouser training`
--

INSERT INTO `crouser training` (`id_crouser_training`, `pic_crouser_triaining`, `title_crouser_training`, `date_crouser_training`, `time_crouser_training`, `description_crouser_training`, `price_crouser_training`) VALUES
(2, 'card-profile2-square.jpg', 'title tow', '2019-05-25', '01:07:27', 'magnam earum illum eos pariatur cumque maxime ratione consectetur \r\nconsequuntur voluptates repudiandae.', 60),
(3, 'card-profile1-square.jpg', 'title three', '2023-09-28', '16:45:00', 'earum illum eos pariatur cumque maxime ratione consectetur voluptates illum eos pariatur cumque maxime ratione consectetur consequuntur voluptates repudiandae.', 25);

-- --------------------------------------------------------

--
-- Table structure for table `curses`
--

CREATE TABLE `curses` (
  `user_id` int(11) NOT NULL,
  `user_id_crouser` varchar(100) NOT NULL,
  `name_courser` varchar(150) NOT NULL,
  `Course_ID` int(100) NOT NULL,
  `options` enum('Online','Registered','Paid','Canseled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curses`
--

INSERT INTO `curses` (`user_id`, `user_id_crouser`, `name_courser`, `Course_ID`, `options`) VALUES
(1, '263ee2', 'Python', 334, 'Online'),
(2, '331141', 'Excel', 557, 'Paid'),
(3, '331y5', 'Data Since', 7831, 'Canseled'),
(4, '9yb72', 'Flutter', 7659, 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id_cvs` int(11) NOT NULL,
  `ID_CoverLetter` int(100) NOT NULL,
  `Cover_Letter` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id_cvs`, `ID_CoverLetter`, `Cover_Letter`) VALUES
(2, 98, 'cv2.pdf'),
(3, 43, 'cv1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID_All_events` int(11) NOT NULL,
  `user_id_events` varchar(100) NOT NULL,
  `name_events` varchar(150) NOT NULL,
  `events_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID_All_events`, `user_id_events`, `name_events`, `events_ID`) VALUES
(1, 'zg491', 'event seven', 7342),
(2, '23ze', 'event B', 1131);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID_feedback` int(11) NOT NULL,
  `id_user_feedback` int(100) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID_feedback`, `id_user_feedback`, `feedback`) VALUES
(1, 3319, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem temporibus facilis, \r\nquo error iste ipsa hic dolor necessitatibus, magnam earum illum eos pariatur '),
(2, 7158, 'necessitatibus, magnam earum illum eos pariatur cumque maxime ratione consectetur \r\nconsequuntur voluptates repudiandae.');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id_jobs` int(11) NOT NULL,
  `title_job` varchar(150) NOT NULL,
  `experience` int(50) NOT NULL,
  `pic_job` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id_jobs`, `title_job`, `experience`, `pic_job`) VALUES
(4, 'Title three', 1, '48.jpg'),
(5, 'Title C', 7, '3840x2562_559926f6a990b465581063911e364bc7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latest events`
--

CREATE TABLE `latest events` (
  `id_latest_events` int(11) NOT NULL,
  `title_event` varchar(150) NOT NULL,
  `date_latest_events` date NOT NULL,
  `time_latest_events` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest events`
--

INSERT INTO `latest events` (`id_latest_events`, `title_event`, `date_latest_events`, `time_latest_events`) VALUES
(5, 'Title tow', '2016-02-08', '11:00:00'),
(7, 'title six', '2023-07-04', '01:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `latest news`
--

CREATE TABLE `latest news` (
  `id_latest_news` int(11) NOT NULL,
  `title_latest_news` varchar(150) NOT NULL,
  `description_latest_news` varchar(500) NOT NULL,
  `pic_latest_news` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest news`
--

INSERT INTO `latest news` (`id_latest_news`, `title_latest_news`, `description_latest_news`, `pic_latest_news`) VALUES
(3, 'title tow', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem temporibus facilis, quo error iste ipsa hic dolor necessitatibus .', 'marc.jpg'),
(6, 'title C', 'magnam earum illum eos pariatur cumque maxime ratione consectetur \r\nconsequuntur voluptates .', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notification all users`
--

CREATE TABLE `notification all users` (
  `id_notification_all_users` int(11) NOT NULL,
  `notification_all_users` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification all users`
--

INSERT INTO `notification all users` (`id_notification_all_users`, `notification_all_users`) VALUES
(2, 'ir sit cossitatibus, magnam earum illum eos pariatur cumque maxime ratione couptates repudiae.\r\n'),
(5, 'ipsum dolor sit amet consectetur elit. Rem temporibus facilis, \r\nquo error iste ipsa hic dolor necessitatibus, magnam earum illum eos pariatur cumque maxime .\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `policy and privacy`
--

CREATE TABLE `policy and privacy` (
  `id_policy_and_privacy` int(11) NOT NULL,
  `policy_and_privacy` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policy and privacy`
--

INSERT INTO `policy and privacy` (`id_policy_and_privacy`, `policy_and_privacy`) VALUES
(2, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem temporibus facilis, \r\nquo error iste ipsa hic dolor necessitatibus, magnam earum illum eos pariatur cumque maxime ratione consectetur .\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `soon`
--

CREATE TABLE `soon` (
  `ID_Soon` int(11) NOT NULL,
  `title_soon` varchar(150) NOT NULL,
  `notification_soon` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soon`
--

INSERT INTO `soon` (`ID_Soon`, `title_soon`, `notification_soon`) VALUES
(2, 'Title tow', 'earum illum eos pariatur cumque maxime ratione consectetur  consequuntur voluptates repudiandae.'),
(3, 'Title trhee', 'illum eos pariatur cumque maxime ratione consectetur  consequuntur voluptates .');

-- --------------------------------------------------------

--
-- Table structure for table `special notification`
--

CREATE TABLE `special notification` (
  `id_special_notification` int(11) NOT NULL,
  `user_id_special_notification` int(50) NOT NULL,
  `special_notification` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `special notification`
--

INSERT INTO `special notification` (`id_special_notification`, `user_id_special_notification`, `special_notification`) VALUES
(2, 5233, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem temporibus facilis, \r\nquo error iste ipsa hic dolor necessitatibus, earum illum eos pariatur cumque maxime ratione consectetur \r\n'),
(3, 6249, 'dolor sit amet consectetur adipisicing elit. Rem temporibus facilis, \r\nquo error iste ipsa hic do.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_All_Users` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `date_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_All_Users`, `full_name`, `email`, `user_name`, `phone_number`, `date_birth`) VALUES
(7, 'nadia ahmad', 'nadia@gmail.com', 'nadia22', '0794321401', '1996-03-18'),
(14, 'ahmad samer', 'ahmad@gmail.com', 'ahmad18', '0773145699', '2004-06-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crouser training`
--
ALTER TABLE `crouser training`
  ADD PRIMARY KEY (`id_crouser_training`);

--
-- Indexes for table `curses`
--
ALTER TABLE `curses`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id_cvs`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID_All_events`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID_feedback`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id_jobs`);

--
-- Indexes for table `latest events`
--
ALTER TABLE `latest events`
  ADD PRIMARY KEY (`id_latest_events`);

--
-- Indexes for table `latest news`
--
ALTER TABLE `latest news`
  ADD PRIMARY KEY (`id_latest_news`);

--
-- Indexes for table `notification all users`
--
ALTER TABLE `notification all users`
  ADD PRIMARY KEY (`id_notification_all_users`);

--
-- Indexes for table `policy and privacy`
--
ALTER TABLE `policy and privacy`
  ADD PRIMARY KEY (`id_policy_and_privacy`);

--
-- Indexes for table `soon`
--
ALTER TABLE `soon`
  ADD PRIMARY KEY (`ID_Soon`);

--
-- Indexes for table `special notification`
--
ALTER TABLE `special notification`
  ADD PRIMARY KEY (`id_special_notification`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_All_Users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crouser training`
--
ALTER TABLE `crouser training`
  MODIFY `id_crouser_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `curses`
--
ALTER TABLE `curses`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id_cvs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID_All_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id_jobs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `latest events`
--
ALTER TABLE `latest events`
  MODIFY `id_latest_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `latest news`
--
ALTER TABLE `latest news`
  MODIFY `id_latest_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notification all users`
--
ALTER TABLE `notification all users`
  MODIFY `id_notification_all_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `policy and privacy`
--
ALTER TABLE `policy and privacy`
  MODIFY `id_policy_and_privacy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soon`
--
ALTER TABLE `soon`
  MODIFY `ID_Soon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `special notification`
--
ALTER TABLE `special notification`
  MODIFY `id_special_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_All_Users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
