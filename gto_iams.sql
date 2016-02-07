-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2016 at 05:53 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gto_iams`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_master`
--

CREATE TABLE IF NOT EXISTS `client_master` (
  `client_id` int(10) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) NOT NULL,
  `client_add` varchar(100) NOT NULL,
  `client_city` varchar(50) NOT NULL,
  `client_dist` varchar(50) NOT NULL,
  `client_cntpr` varchar(50) NOT NULL,
  `client_cntno` varchar(20) NOT NULL,
  `client_vatno` varchar(20) NOT NULL,
  `client_status` varchar(20) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE IF NOT EXISTS `product_master` (
  `prod_id` int(10) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(200) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`prod_id`, `prod_name`) VALUES
(1, 'Filler Powder'),
(2, 'Raw Organic Manure'),
(3, 'Slaughter House Waste'),
(4, 'Animal Waste Filler'),
(5, 'HDPE Bags');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE IF NOT EXISTS `purchase_details` (
  `purchase_id` int(10) NOT NULL AUTO_INCREMENT,
  `purchase_date` date NOT NULL,
  `supp_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `bill_no` varchar(20) NOT NULL,
  `weight` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `vat` decimal(5,0) NOT NULL,
  `final_amount` int(11) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`purchase_id`, `purchase_date`, `supp_id`, `prod_id`, `bill_no`, `weight`, `rate`, `vat`, `final_amount`) VALUES
(20, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(21, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(22, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(23, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(24, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(25, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(26, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(27, '0000-00-00', 0, 0, 'm2232', 10, 100, 5, 10000),
(28, '2016-02-06', 4, 3, 'm2232', 10, 100, 5, 10000),
(29, '2016-02-06', 1, 2, 'm2232', 10, 100, 5, 10000),
(30, '2016-02-02', 1, 2, 'm2232', 10, 100, 5, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_master`
--

CREATE TABLE IF NOT EXISTS `supplier_master` (
  `supp_id` int(10) NOT NULL AUTO_INCREMENT,
  `supp_name` varchar(200) NOT NULL,
  `supp_add` varchar(200) NOT NULL,
  `supp_city` varchar(20) NOT NULL,
  `supp_cntpr` varchar(100) NOT NULL,
  `supp_cntno` varchar(10) NOT NULL,
  `supp_eMail` varchar(50) NOT NULL,
  `prod_id` varchar(50) NOT NULL,
  `supp_vat` varchar(20) NOT NULL,
  PRIMARY KEY (`supp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `supplier_master`
--

INSERT INTO `supplier_master` (`supp_id`, `supp_name`, `supp_add`, `supp_city`, `supp_cntpr`, `supp_cntno`, `supp_eMail`, `prod_id`, `supp_vat`) VALUES
(1, 'WasimAkram', 'Wanowrie', 'Pune', 'Sam', '909900009', 'wasim3ace@gmail.com', '2', 'w121212'),
(2, 'Pritam Vilas Gurav', 'SidhiVinayak Colony', 'Ajara', 'Pritam', '2147483647', 'guravpritamkumar@gmail.com', '2', 'P2624'),
(4, 'Naaziya Mulla', 'Wanowrie bazaar, Jagtap Chowk', 'Pune', 'Naaziya', '455416', 'cbabh@gmail.com', '3', 'n25562'),
(5, 'Amit Kumbhar', 'Mahadev galli', 'Sulgaon', 'Amit', '9657519633', 'amit.kumbhar239@gmail.com', '5', 'am221354'),
(6, 'Snehal', 'cjanca', 'Shirol', 'Snehal', '2542612', 'bdsbfhb@gmail.com', '3', 'v22354152');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
