-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 09:28 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookonshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `author`, `status`) VALUES
(1, 'Book1', 'Author1', 'Status1'),
(3, 'Book2', 'Author2', 'Status2'),
(4, 'Book3', 'Author3', 'Status3'),
(5, 'Book4', 'Author4', 'Status4'),
(6, 'Book5', 'Author5', 'Status5'),
(7, 'Name6', 'Author6', 'Status6'),
(12, 'Name7', 'Author7', 'Status7'),
(13, 'Name8', 'Author8', 'Status8'),
(14, 'Name9', 'Author9', 'Status9'),
(15, 'Name10', 'Author10', 'Status710');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `admin`, `active`) VALUES
(28, 'username 5', 'password 5', 'Doe', 'last name 5', 'email 5', 1, 1),
(29, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(30, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(31, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(32, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(33, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(34, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(35, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(37, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(38, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(39, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(40, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(41, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(42, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(43, 'username 5', 'password 5', 'first name 5', 'last name 5', 'email 5', 1, 1),
(44, 'test', 'test', 'f_test', 'l_test', 'test email', 0, 1),
(45, 'admin', 'admin', 'f_admin', 'l_admin', 'admin@mail', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
