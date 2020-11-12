-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 12:53 PM
-- Server version: 8.0.11
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_app`
--

CREATE DATBASE books_app

CREATE TABLE `books_app` (
  `book_id` int(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_isbn_id` varchar(50) NOT NULL,
  `book_cat_id` varchar(50) NOT NULL,
  `book_auth_id` varchar(50) NOT NULL,
  `book_pb_id` varchar(50) NOT NULL,
  `book_pb_date` varchar(50) NOT NULL,
  `book_pb_lang` varchar(50) NOT NULL,
  `book_pages` varchar(50) NOT NULL,
  `book_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_app`
--
ALTER TABLE `books_app`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_app`
--
ALTER TABLE `books_app`
  MODIFY `book_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
