-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 10:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `fname` varchar(50) NOT NULL,
  `lnam` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`fname`, `lnam`, `password`, `comment`, `id`, `user_id`) VALUES
(' alice', 0, ' 1234', '', 0, 0),
(' ', 0, ' ', '', 0, 0),
(' alice', 0, ' 1234', '', 0, 0),
(' alice', 0, ' 123', ' aredrdxgfyddrytyt', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Fname` varchar(58) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `PASSWORD` varchar(78) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CMT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Fname`, `Lname`, `PASSWORD`, `email`, `CMT_ID`) VALUES
('leilla', 'hirwe', '88312213c3492c4cd89d297f16cb0fc4', 'niyomutonilucie@gmail.com', 1),
('niyo', 'ihirwe', '3c3e352fbf33c1aa59acbd32fe8c92cc', 'alinekeza@gmail.com', 3),
('lucie', 'niyomutoni', '25d55ad283aa400af464c76d713c07ad', 'informationsystem2021@gmail.com', 6),
('arsen', 'niyizukuri', 'd41d8cd98f00b204e9800998ecf8427e', 'luciefif@gmail.com', 8),
('', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 9),
('', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 10),
('lucie', 'niyomutoni', '25d55ad283aa400af464c76d713c07ad', 'informationsystem2021@gmail.com', 11),
('lucie', 'niyomutoni', 'd41d8cd98f00b204e9800998ecf8427e', 'informationsystem2021@gmail.com', 12),
('', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 13),
('', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 15),
('', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 16),
('', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 17),
('', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 18),
('', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_name`, `password`) VALUES
('fertility', '$2y$10$TC1gNXnz8HYI0aXHFHoquelWTR2zie6.1AMbDdQwRMbVBU7kqIhi.'),
('fertility', '$2y$10$ZtjLLb329wMEQbMYuykXQu2wiZcN0uYHGm4loBVplasTc0i.I9xT2'),
('regular', '$2y$10$qagDmi5.mX4ICdGWombaPO4x9kF8r9hSgfv.FHVgSH42su6N9TkEK'),
('regular', '$2y$10$uuXXoEfm9KBaxeFsfpjc3.oGEBAiUxRZ5Dv1kG1471P0W35PhAGb.'),
('regular', '$2y$10$iXx6xqs3020eK/MXDTFc1u3Cx3VJqQV2Xs.pyL/JGwVjy6MiaQEey');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `vilage` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `mname`, `lname`, `dob`, `email`, `gender`, `province`, `district`, `sector`, `cell`, `vilage`, `password`, `confirm`) VALUES
(1, 'paccy', 'pa', 'kwizera', '2021-09-03', 'luciefifi2000@gmail.com', 'female', 'eastern', 'Bugesera', 'bdudj', 'uhxj', 'hja', '', '202cb962ac59075b964b07152d234b70'),
(3, 'ange', 'comp', 'uwam', '2021-08-27', 'ange@gmail.com', 'female', 'eastern', 'Bugesera', 'bdudj', 'uhxj', 'hja', '', 'd81f9c1be2e08964bf9f24b15f0e4900'),
(4, 'ange', 'comp', 'uwam', '2021-08-27', 'ange@gmail.com', 'female', 'eastern', 'Bugesera', 'bdudj', 'uhxj', 'hja', '', 'd81f9c1be2e08964bf9f24b15f0e4900'),
(7, 'joseph', 'jeph', 'iradukunda', '2021-08-02', 'iradukundakeph@gmail.com', 'male', 'northern', 'Ruhango', 'nynza', 'rukira', 'kagarama', '', '42998cf32d552343bc8e460416382dca'),
(9, 'joseph', 'jeph', 'iradukunda', '2021-08-02', 'iradukundakeph@gmail.com', '', 'eastern', 'Bugesera', 'nynza', 'rukira', 'kagarama', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 'asdfghm,.dsfghjklgfhjk', 'jeph', 'iradukunda', '2021-08-02', 'iradukundakeph@gmail.com', '', 'eastern', 'Bugesera', 'nynza', 'rukira', 'kagarama', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, 'joseph', 'jeph', 'iradukunda', '2021-08-02', 'iradukundakeph@gmail.com', '', 'eastern', 'Bugesera', 'nynza', 'rukira', 'kagarama', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'arsen', 'jeph', 'iradukunda', '2021-08-02', 'iradukundakeph@gmail.com', '', 'eastern', 'Bugesera', 'nynza', 'rukira', 'kagarama', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'alice', 'uwa', 'uwase', '0000-00-00', 'iradukundakeph@gmail.com', '', 'northern', 'Bugesera', 'nynza', 'rukira', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, 'paccy', '', 'kwizera', '0000-00-00', '', '', 'eastern', 'Bugesera', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, 'uyt', 'hg', 't', '2021-09-07', 'luciefif@gmail.com', 'female', 'northern', 'Bugesera', 'nynza', 'er', 'ferf', '', '38167ed918894152828e77c619372f1e');

-- --------------------------------------------------------

--
-- Table structure for table `user_service`
--

CREATE TABLE `user_service` (
  `ID` int(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`CMT_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `CMT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
