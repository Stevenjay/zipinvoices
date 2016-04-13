-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2016 at 04:54 am
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zipinvoices`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `due` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `payee` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `invoice_number`, `create_date`, `due`, `amount`, `description`, `payee`) VALUES
(23, 5, 4, '2016-01-22', '2016-01-30', 100, 'Car parts\r\nBikes\r\nWees', 'Rob'),
(25, 5, 2, '2016-01-21', '2016-01-29', 66, 'Fire Wood', 'Smithy'),
(26, 5, 444, '2016-01-07', '2016-01-29', 44444, 'Plumbing', 'Sam'),
(28, 5, 9, '2016-02-20', '2016-02-25', 12, 'Cards', 'John'),
(30, 1, 3, '2016-02-17', '2016-02-26', 50, 'Hello you', 'Roger'),
(31, 1, 5, '2016-03-17', '2016-03-24', 33, 'Hey', 'Me'),
(32, 8, 5, '2016-04-13', '2016-04-23', 12, 'Shopping', 'Gunther'),
(33, 7, 6, '2016-04-16', '2016-04-26', 55, 'Movie Tickets', 'Doug'),
(34, 7, 9, '2016-04-19', '2016-04-30', 55, 'Roofing Material', 'Mark');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Steven Jasionowicz', 'steven.jasionowicz@gmail.com', 'steven', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(7, 'Howard', 'howard@howard.com', 'howard', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(8, 'Mark', 'mark@yoobee.com', 'marko', 'd8578edf8458ce06fbc5bb76a58c5ca4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
