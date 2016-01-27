-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2016 at 03:49 am
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `invoice_number`, `create_date`, `due`, `amount`, `description`, `payee`) VALUES
(23, 5, 4, '2016-01-22', '2016-01-30', 100, 'Car parts\r\nBikes\r\nWees', 'Rob'),
(25, 5, 2, '2016-01-21', '2016-01-29', 0, 'ddddd', 'smithy'),
(26, 5, 444, '2016-01-07', '2016-01-29', 44444, '', 'sam'),
(27, 1, 99, '2016-01-12', '2016-01-29', 100, '', 'solomon');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `logo`, `username`, `password`) VALUES
(1, 'Steven Jasionowicz', 'steven.jasionowicz@gmail.com', 'batman-logo-big.gif', 'steven', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(4, 'john', 'john@gmail.com', 'Twitter_logo_blue.png', 'johnathan', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(5, 'admin', 'admin@admin.com', '1.jpg', 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(6, 'user', 'user@user.com', 'willwork.jpeg', 'user', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(7, 'Howard', 'howard@howard.com', 'png.png', 'howard', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(8, 'test', 'test@test.com', 'lg.png', 'test', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(9, 'artie', 'artie@mail.com', 'ima.png', 'artie', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(10, 'reetz', 'reetz@mail.com', 'ps_playstation_logo.png', 'reetz', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(11, 'elf', 'elf@elf.com', '12.jpeg', 'elf', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(12, 'little', 'little@little.com', 'little.jpeg', 'little', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(13, 'view', 'view@view.com', 'view.jpeg', 'view', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(14, 'small', 'small@gmail.com', 'noimage.png', 'small', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(15, 'wwe', 'wwe@gmail.com', 'wwe.png', 'wwe', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(16, 'jackie', 'jackie@howard.com', 'jackie-martling-04.jpg', 'jackie', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(17, 'jokeman', 'jokeman@gmail.com', 'joke.jpeg', 'jokeman', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(18, 'art', 'art@art.com', 'art.jpg', 'art', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(19, 'arto', 'arto@gmail.com', 'arto.jpg', 'arto', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(20, 'boris', 'boris@boris.com', 'art.jpg', 'boris', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(21, 'john', 'john@gmail.com', '', 'john', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(22, 'john', 'john@gmail.com', '', 'john', 'd8578edf8458ce06fbc5bb76a58c5ca4');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
