-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 10:04 AM
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
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `email`, `l_name`, `contact`, `question`, `answer`, `gender`) VALUES
(25, 'Harshika', 'harshika@thinkdigitalindia.in', 'Surwanshi', '8805576572', '', 'Ronny', '<br />\r\n<b>Warning</b>:  Undefined variable $gender in <b>C:xampphtdocsphp_crudedit_employee.php</b> on line <b>91</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsphp_crudedit_employee.php</b> on '),
(26, 'Priya', 'admin@gmail.com', 'Deshmukh', '5647383892', 'What is your Pet Name?', 'chiu', 'female'),
(27, 'Harsh', 'vridamhealthcare01@gmail.com', 'Lokahnde', '5647383892', 'What is your Pet Name?', 'chiu', 'male'),
(28, 'Harsh', 'vridamhealthcare01@gmail.com', 'Lokahnde', '5647383892', 'What is your Pet Name?', 'chiu', 'male'),
(29, 'Harsh', 'vridamhealthcare01@gmail.com', 'Lokahnde', '5647383892', 'What is your Pet Name?', 'chiu', 'male'),
(30, 'Harsh', 'vridamhealthcare01@gmail.com', 'Lokahnde', '5647383892', 'What is your Pet Name?', 'chiu', 'male'),
(31, 'Amit', 'Amit@gmail.com', 'shewale', '5626372726', 'What is your Birthdate?', '2', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
