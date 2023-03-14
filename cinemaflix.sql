-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 05:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemaflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userprofile` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `userprofile`) VALUES
('habib444', 'habib123', 'habib'),
('sifat', 'sifat123', 'sifat'),
('sakib', 'sakib123', 'sakib'),
('nusrat', 'nusrat123', 'nusrat');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is Nusrat Sakib Sifat Bot\r\nBut pro habib\r\nora khela pare na'),
(4, 'what should I call you', 'You can call me Cinema Flix Admin'),
(5, 'Where are your from', 'I m from Bangladesh'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day'),
(7, 'I need help', 'tell me your problems');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(1, 'Hi', '2020-04-22 12:41:04', 'user'),
(2, 'Hello, how are you.', '2020-04-22 12:41:05', 'bot'),
(3, 'what is your name', '2020-04-22 12:41:22', 'user'),
(4, 'My name is Nusrat Sakib Sifat Bot\r\nBut pro habib\r\nora khela pare na', '2020-04-22 12:41:22', 'bot'),
(5, 'Where are your from', '2020-04-22 12:41:30', 'user'),
(6, 'I m from India', '2020-04-22 12:41:30', 'bot'),
(7, 'Go to hell', '2020-04-22 12:41:41', 'user'),
(8, 'Sorry not be able to understand you', '2020-04-22 12:41:41', 'bot'),
(9, 'bye', '2020-04-22 12:41:46', 'user'),
(10, 'Sad to see you are going. Have a nice day', '2020-04-22 12:41:46', 'bot'),
(11, 'hi im habib', '2023-01-30 11:29:08', 'user'),
(12, 'Sorry not be able to understand you', '2023-01-30 11:29:08', 'bot'),
(13, 'what is your name', '2023-01-30 11:32:00', 'user'),
(14, 'My name is Vishal Bot', '2023-01-30 11:32:00', 'bot'),
(15, 'what is your name', '2023-01-30 11:33:18', 'user'),
(16, 'My name is Nusrat Sakib Sifat Bot\r\nBut pro habib\r\nora khela pare na', '2023-01-30 11:33:18', 'bot'),
(17, 'what is your name', '2023-01-30 12:08:52', 'user'),
(18, 'My name is Nusrat Sakib Sifat Bot\r\nBut pro habib\r\nora khela pare na', '2023-01-30 12:08:52', 'bot'),
(19, 'what is your name', '2023-01-30 12:09:02', 'user'),
(20, 'My name is Nusrat Sakib Sifat Bot\r\nBut pro habib\r\nora khela pare na', '2023-01-30 12:09:02', 'bot'),
(21, 'hi', '2023-01-30 12:16:33', 'user'),
(22, 'Hello, how are you.', '2023-01-30 12:16:33', 'bot'),
(23, 'hi', '2023-01-30 12:26:47', 'user'),
(24, 'Hello, how are you.', '2023-01-30 12:26:47', 'bot'),
(25, 'hi', '2023-01-30 12:51:16', 'user'),
(26, 'Hello, how are you.', '2023-01-30 12:51:16', 'bot'),
(27, 'help', '2023-01-30 12:53:02', 'user'),
(28, 'tell me your problems', '2023-01-30 12:53:02', 'bot'),
(29, 'hi', '2023-01-30 01:06:27', 'user'),
(30, 'Hello, how are you.', '2023-01-30 01:06:27', 'bot'),
(31, 'bye', '2023-01-30 01:06:35', 'user'),
(32, 'Sad to see you are going. Have a nice day', '2023-01-30 01:06:35', 'bot'),
(33, 'hi', '2023-01-30 02:37:10', 'user'),
(34, 'Hello, how are you.', '2023-01-30 02:37:10', 'bot'),
(35, 'bye', '2023-01-30 02:37:15', 'user'),
(36, 'Sad to see you are going. Have a nice day', '2023-01-30 02:37:15', 'bot'),
(37, 'miss u', '2023-01-30 02:37:29', 'user'),
(38, 'Sorry not be able to understand you', '2023-01-30 02:37:29', 'bot'),
(39, 'u dont have any emotion', '2023-01-30 02:37:41', 'user'),
(40, 'Sorry not be able to understand you', '2023-01-30 02:37:41', 'bot'),
(41, 'i know', '2023-01-30 02:37:48', 'user'),
(42, 'Sorry not be able to understand you', '2023-01-30 02:37:48', 'bot'),
(43, 'bye', '2023-01-30 02:37:51', 'user'),
(44, 'Sad to see you are going. Have a nice day', '2023-01-30 02:37:51', 'bot'),
(45, 'hi', '2023-01-30 02:44:44', 'user'),
(46, 'Hello, how are you.', '2023-01-30 02:44:44', 'bot'),
(47, 'help', '2023-01-30 02:44:57', 'user'),
(48, 'tell me your problems', '2023-01-30 02:44:57', 'bot'),
(49, 'hi', '2023-01-30 03:51:55', 'user'),
(50, 'Hello, how are you.', '2023-01-30 03:51:55', 'bot'),
(51, 'help', '2023-01-30 03:52:09', 'user'),
(52, 'tell me your problems', '2023-01-30 03:52:09', 'bot'),
(53, 'sifat', '2023-01-30 03:52:51', 'user'),
(54, 'Sorry not be able to understand you', '2023-01-30 03:52:51', 'bot');

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `movie_name` varchar(50) NOT NULL,
  `movie_category` varchar(50) NOT NULL DEFAULT 'category',
  `location` longblob NOT NULL,
  `added_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `pass` int(50) NOT NULL,
  `cpass` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `activation_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `first_name`, `last_name`, `pass`, `cpass`, `email`, `phone`, `activation_time`) VALUES
(1, 'Habib', 'Ullah', 1234, 1234, 'habibhk@gmail.com', '018444444', '2023-01-30 05:28:48.764267'),
(2, 'sakib', 'osman', 1212, 1212, 'sakib@f.co', '0188383', '2023-01-30 05:37:57.868498');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `cin` (`uid`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
