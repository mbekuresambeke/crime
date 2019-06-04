-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2019 at 08:50 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `school` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `pocket_money` varchar(255) NOT NULL,
  `school_fees` varchar(255) NOT NULL,
  `transport_fees` varchar(255) NOT NULL,
  `education_level` varchar(255) NOT NULL,
  `start_year` date NOT NULL,
  `end_year` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `role` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `gender`, `school`, `village`, `pocket_money`, `school_fees`, `transport_fees`, `education_level`, `start_year`, `end_year`, `password`, `status`, `role`) VALUES
(4, 'Morindet', 'Kititi', 'morindet1993@gmail.com', 'Male', 'Arusha Technical College', 'Misigiyo', 'Tsh 1000000', 'Tsh 590400', 'Tsh 150000', 'Diploma Level', '2016-01-08', '2019-01-05', '$2y$10$X6fyNXTxwDStDo3Wk7SjdeSLv2EanpS.9TbnyxBwPw7jrWFidqcZu', 1, 0),
(3, 'Mbekure', 'Sambeke', 'mbekuresambeke@gmail.com', 'Male', 'Arusha Technical College', 'Misigiyo', 'Tsh 1000000', 'Tsh 590400', 'Tsh 150000', 'Secondary Education', '2016-01-08', '2019-01-05', '$2y$10$hIqRxwHI6WdhSTZFPKwmaO1vC7iVkjojKd4oQi/MgjAOlcAOB90ku', 1, 1),
(5, 'Napokie', 'Pello', 'napokiepello@gmail.com', 'Female', 'Silla College', 'Misigiyo', 'Tsh 200,000', 'Tsh 500,000', 'Tsh 100,000', 'Certificate', '2018-01-10', '2019-01-10', '$2y$10$wmyuD3aZlyUxHoA0azWkE.fbueY0xTXl4QEEEnTN4WNgZu.MSEVyi', 1, 0),
(6, 'test ', 'admin', 'admin@admin.com', 'Male', 'PHP', 'Nainokanoka', '1302040', '100090', '60000', 'Bachelor Level', '2001-02-01', '2012-02-01', '$2y$10$WbJQ5Yv6K5kXue3CFtdFcegVyC.jD8MwoShsuT7ahipPGXXUxnFRG', 0, 0),
(7, 'Tait', 'Makanga', 'taitmakanga@gmail.com', 'Male', 'University  of Dares Salaam', 'Endulen', 'Tsh 700,000', 'Tsh 500,000', '150,000', 'Bachelor Level', '2014-07-08', '2017-12-07', '$2y$10$.SD7EIWp57Y6w/nYHxy2k.vdxan7rLgS8CQUkbmTcchGGOx5yP4AO', 1, 0),
(15, 'shabani', 'mchome', 'shabanimchome@gmail.com', 'Male', 'Korongo', 'Orbabal', '129000', '150000', '10000', 'Diploma Level', '2019-03-27', '2019-03-22', '$2y$10$DmsMOLYu/CFGg4hs3ndJPusE4fuow8O9o4C9wcpBiBeIuOUI6Dsom', 0, 0),
(12, 'IKONETI ', 'SAIGURAN 5', 'petersimindei@gmail.com', 'Male', 'Arusha Technical College', 'Ngoile', 'Tsh 1000000', '433000', '150,000', 'Certificate', '2017-07-01', '2018-12-12', '$2y$10$gYYUKkERGF.yV55mTC698eu2GSe2Qf4GDdCXeNSFiSp9SllbX4YnG', 1, 0),
(9, 'Suzan ', 'Mokoroi', 'suzanmokori@yahoo.com', 'Female', 'Mweka College of wildlife', 'Oloirobi', 'Tsh 1000000', 'Tsh 6000,0000', 'Tsh 50,000', 'Diploma Level', '2014-07-08', '2016-12-10', '$2y$10$OKcZJnY7uJMG.INyJPdVEe80/ljmIEge/VQzSBLxbvh7dzQF2TGaG', 0, 0),
(11, 'Isaya', 'Sambeke', 'isayasambeke@gmail.com', 'Male', 'Loliondo Secondary School', 'Misigiyo', '80,000', 'N/A', '20,000', 'Secondary Education', '2018-01-01', '2021-05-11', '$2y$10$hepIj.HrN.S9pM0aNIMh9.IfRt/jzTHXLR4GfyHLKg7KdV2XUIQ/q', 0, 1),
(13, 'yohana', 'Sambeke', 'yohanasambeke@gmail.com', 'Male', 'Loliondo Secondary School', 'Orbabal', '80,000', '100090', 'Tsh 100,000', 'Secondary Education', '2014-01-01', '2018-12-11', '$2y$10$sw3BO8J7CHmJD4xUkQKz8uZLDkHInQov7CCsTcajlh.f0bIhFIKJW', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
