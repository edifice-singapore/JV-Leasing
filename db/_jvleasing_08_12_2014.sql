-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2014 at 11:30 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `_jvleasing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_last_login` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `date_last_login`) VALUES
(1, 'admin', '696d29e0940a4957748fe3fc9efd22a3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `brokers`
--

CREATE TABLE IF NOT EXISTS `brokers` (
  `brokers_id` int(11) NOT NULL AUTO_INCREMENT,
  `brokers_name` varchar(255) NOT NULL,
  `brokers_contact` varchar(255) NOT NULL,
  `brokers_email` varchar(255) NOT NULL,
  `brokers_address` varchar(255) NOT NULL,
  `brokers_commission` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`brokers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `brokers`
--

INSERT INTO `brokers` (`brokers_id`, `brokers_name`, `brokers_contact`, `brokers_email`, `brokers_address`, `brokers_commission`, `date`, `status`) VALUES
(1, 'hahah hahah', '12348888', 'c@mail.com', 'jalam msms msmms', 8, '2014-04-23 17:39:43', 1),
(2, 'test 1', '12345678', 'cms@mail.com', 'plaza singapore', 7, '2014-04-23 17:41:57', 1),
(3, 'Jason', '30405-40', 'jason@gmail.com', 'Cebu City Philippines', 10, '0000-00-00 00:00:00', 1),
(4, 'Chard', '345-0093', 'chard@yahoo.com', 'Jordan St. Parking House Singapore', 10, '2014-07-28 00:00:00', 1),
(5, 'Stanley', '032-272-30', 'stanley@yahoo.com', 'West Virginia', 20, '2014-07-28 00:00:00', 1),
(6, 'Christian', '234-9049', 'christian@gmail.com', 'State Ohio Pacific Ocean', 20, '2014-07-28 00:00:00', 1),
(7, 'Trisha', '1-34-039', 'Trisha@yahoo.com', 'Scotfield Bay of India', 10, '2014-07-30 00:00:00', 1),
(8, 'Charles', '234-223-2', 'charles@gmail.com', 'New York City', 2, '2014-07-31 00:00:00', 1),
(9, 'Joshua', '2343-0994', 'joshua@yahoo.com', 'joshua@yahoo.com', 3, '2014-07-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clients_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nick` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `nric` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `res_tel` varchar(20) NOT NULL,
  `ofc_tel` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `drvlicense_passdate` date NOT NULL,
  `policy_id` int(11) NOT NULL,
  `v_model` varchar(50) NOT NULL,
  `v_type` varchar(50) NOT NULL,
  `engine_cap` varchar(20) NOT NULL,
  `yr_manufactured` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `roadTax_expDate` date NOT NULL,
  `carPlate` varchar(20) NOT NULL,
  `oldVehcNo` varchar(20) NOT NULL,
  `insuranceCo` varchar(100) NOT NULL,
  `oldNCD` varchar(20) NOT NULL,
  `prevExpDate` date NOT NULL,
  `covPolicyNo` varchar(20) NOT NULL,
  `covCoverNoteNo` varchar(30) NOT NULL,
  `covCoverageType` varchar(50) NOT NULL,
  `covPlan` varchar(20) NOT NULL,
  `covGrossPrem` decimal(11,0) NOT NULL,
  `covNCD` decimal(11,0) NOT NULL,
  `covExcess` decimal(10,0) NOT NULL,
  `covWindScrAmnt` decimal(10,0) NOT NULL,
  `covLoadAmnt` decimal(10,0) NOT NULL,
  `covPersonalAcc` varchar(50) NOT NULL,
  `covExtension` varchar(50) NOT NULL,
  `covSurCharge` decimal(10,2) NOT NULL,
  `covPassLiab` varchar(50) NOT NULL,
  `covOther1` varchar(50) NOT NULL,
  `covOther2` varchar(50) NOT NULL,
  `covOther3` varchar(50) NOT NULL,
  `covLoyaltyDis` decimal(10,0) NOT NULL,
  `covNoClaim` varchar(10) NOT NULL,
  `covNCDProtectr` varchar(100) NOT NULL,
  `covCommDate` date NOT NULL,
  `covExpDate` date NOT NULL,
  `covInsurCo` varchar(50) NOT NULL,
  `covTermDate` date NOT NULL,
  `spNameBroker` int(11) NOT NULL,
  `spAnnualPrem` decimal(10,2) NOT NULL,
  `spDiscount` decimal(10,2) NOT NULL,
  `spDiscountAmount` int(11) NOT NULL,
  `spPremDue` int(11) NOT NULL,
  `spGST` decimal(10,0) NOT NULL,
  `spGSTAmount` int(11) NOT NULL,
  `spMiscChanges` decimal(10,2) NOT NULL,
  `spTotalDue` decimal(10,2) NOT NULL,
  `spComm1` decimal(10,2) NOT NULL,
  `spNetUnderwriter` decimal(10,2) NOT NULL,
  `spFirmComm` decimal(10,2) NOT NULL,
  `spAgentComm` decimal(10,2) NOT NULL,
  `spEarnings` decimal(10,2) NOT NULL,
  `spRemarks` varchar(200) NOT NULL,
  `spPaymentBy` varchar(100) NOT NULL,
  `spReceiptNo` varchar(30) NOT NULL,
  PRIMARY KEY (`clients_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=299 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clients_id`, `name`, `nick`, `address`, `postalcode`, `nric`, `birthdate`, `nationality`, `res_tel`, `ofc_tel`, `mobile`, `email`, `company`, `designation`, `drvlicense_passdate`, `policy_id`, `v_model`, `v_type`, `engine_cap`, `yr_manufactured`, `reg_date`, `roadTax_expDate`, `carPlate`, `oldVehcNo`, `insuranceCo`, `oldNCD`, `prevExpDate`, `covPolicyNo`, `covCoverNoteNo`, `covCoverageType`, `covPlan`, `covGrossPrem`, `covNCD`, `covExcess`, `covWindScrAmnt`, `covLoadAmnt`, `covPersonalAcc`, `covExtension`, `covSurCharge`, `covPassLiab`, `covOther1`, `covOther2`, `covOther3`, `covLoyaltyDis`, `covNoClaim`, `covNCDProtectr`, `covCommDate`, `covExpDate`, `covInsurCo`, `covTermDate`, `spNameBroker`, `spAnnualPrem`, `spDiscount`, `spDiscountAmount`, `spPremDue`, `spGST`, `spGSTAmount`, `spMiscChanges`, `spTotalDue`, `spComm1`, `spNetUnderwriter`, `spFirmComm`, `spAgentComm`, `spEarnings`, `spRemarks`, `spPaymentBy`, `spReceiptNo`) VALUES
(1, 'Andrew Tan', 'Andrew', 'Lincoln Street', '80002', '8930405', '0000-00-00', 'American', '+9039485', '2039949', '+65283493', 'andrew@gmail.com', 'Andrew Corporation', 'Manager', '0000-00-00', 0, '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '0', '', '0', '0', '0', '0', '0', '', '', '0.00', '', '', '', '', '0', '1', '0', '0000-00-00', '0000-00-00', '', '0000-00-00', 0, '0.00', '0.00', 0, 0, '0', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', ''),
(288, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 0, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(289, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 0, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(290, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 0, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(291, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 0, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(292, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 0, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(293, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 0, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(294, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 0, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(295, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 0, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(296, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 0, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(297, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 3, '100.00', '2.00', 0, 300, '100', 0, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001'),
(298, 'Juan Dela Cruz', 'Juan', 'New York City United States', '4056', '12345-00', '1935-08-23', '3', '233-0993-00', '2993-0004-0', '639059200121', 'juandelacruz@gmail.com', 'Car studio auto parts', 'Manager', '1977-12-28', 3, '2009', 'Sedan', '230 kgs', '2000', '1999-02-15', '1999-03-30', 'GXL-255', 'PXR-233', 'DEADLY INSURANCE', '234-0293', '2000-10-20', '12203049-00', '23344', '3', 'Plan A', '5000', '2', '100', '200', '300', '300,000.00', '23456-00', '300.00', '200', 'Dog', 'Mistress', 'Alien', '10', '5', '2', '2001-02-26', '2002-03-23', '2', '2003-03-08', 3, '10000.00', '10.00', 1000, 300, '1', 100, '300.00', '2.00', '2001.00', '50.00', '10.00', '2.00', '2.00', 'Nothing...', '3', '54321-2001');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE IF NOT EXISTS `configuration` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `option_value` varchar(128) CHARACTER SET utf8 NOT NULL,
  `date_last` bigint(20) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`config_id`, `option_name`, `option_value`, `date_last`) VALUES
(1, 'date_format', 'D M jS, Y', 1397447262),
(2, 'admin_email', 'xinying@edifice.com.sg', 1397447262);

-- --------------------------------------------------------

--
-- Table structure for table `coverage`
--

CREATE TABLE IF NOT EXISTS `coverage` (
  `coverage_id` int(11) NOT NULL AUTO_INCREMENT,
  `coverage_type` varchar(50) NOT NULL,
  `coverage_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`coverage_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `date_format`
--

CREATE TABLE IF NOT EXISTS `date_format` (
  `date_id` int(11) NOT NULL,
  `date_type` varchar(30) NOT NULL,
  `date_example` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_format`
--

INSERT INTO `date_format` (`date_id`, `date_type`, `date_example`) VALUES
(1, 'F d, Y', 'April 11, 2014'),
(2, 'd/m/y', '11/04/14'),
(3, 'd/m/Y', '11/04/2014'),
(1, 'F d, Y', 'April 11, 2014'),
(2, 'd/m/y', '11/04/14'),
(3, 'd/m/Y', '11/04/2014'),
(4, 'm/d/y', '04/11/14'),
(5, 'm/d/Y', '04/11/2014'),
(6, 'd.m.y', '11.04.14'),
(7, 'd.m.Y', '11.04.2014'),
(8, 'j M Y', '11 Apr 2014'),
(9, 'jS F Y', '11th April 2014'),
(10, 'F jS Y', 'April 11th 2014'),
(11, 'D M jS, Y', 'Fri Apr 11th, 2014');

-- --------------------------------------------------------

--
-- Table structure for table `driverparticular`
--

CREATE TABLE IF NOT EXISTS `driverparticular` (
  `dp_id` int(11) NOT NULL AUTO_INCREMENT,
  `dp_Name` varchar(100) DEFAULT NULL,
  `dp_icno` varchar(30) DEFAULT NULL,
  `dp_occ` varchar(30) DEFAULT NULL,
  `dp_dateBirth` datetime DEFAULT NULL,
  `dp_licPassDate` datetime DEFAULT NULL,
  `dp_maritalStatus` varchar(10) DEFAULT NULL,
  `dp_gender` int(1) DEFAULT NULL,
  `dp_relationship` varchar(50) DEFAULT NULL,
  `dp_nationality` varchar(50) DEFAULT NULL,
  `dp_wage` int(11) DEFAULT NULL,
  `dp_remarks` varchar(100) DEFAULT NULL,
  `dp_ref` varchar(100) DEFAULT NULL,
  `dp_month` varchar(25) DEFAULT NULL,
  `fk_client_id` int(11) NOT NULL,
  PRIMARY KEY (`dp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=252 ;

--
-- Dumping data for table `driverparticular`
--

INSERT INTO `driverparticular` (`dp_id`, `dp_Name`, `dp_icno`, `dp_occ`, `dp_dateBirth`, `dp_licPassDate`, `dp_maritalStatus`, `dp_gender`, `dp_relationship`, `dp_nationality`, `dp_wage`, `dp_remarks`, `dp_ref`, `dp_month`, `fk_client_id`) VALUES
(1, 'Jose Reyes', '343465', '334455', '1981-09-08 00:00:00', '2014-04-10 00:00:00', 'Single', 1, 'Driver', 'American', 200, 'Ride until you die.', 'Enemy', '2014-20-02', 0),
(245, 'Bryan ', '2322222 ', '2222 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 ', 0, 'Brother ', '23423 ', 8, 'fsadfsda ', 'sadf ', '11 ', 288),
(246, 'Mark', '111111-111 ', '11111-1111-111 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2 ', 0, 'Cousin ', '23444 ', 8, 'dsafads ', '2342 ', '12 ', 289),
(247, 'Bryan ', '2322222 ', '2222 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 ', 0, 'Brother ', '23423 ', 8, 'fsadfsda ', 'sadf ', '11 ', 289),
(248, 'Mark', '111111 ', '1111-1111 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1 ', 0, 'Brother ', '22343243 ', 8, 'adsfsda ', '223423423 ', '7 ', 295),
(249, 'Bryan ', '22222-222 ', '2222-2222-222 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2 ', 0, 'Brother ', '233333 ', 8, 'sddsafdsa ', '443245432 ', '5 ', 295),
(250, 'Henry', '111111 ', '11111-1111 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1 ', 0, 'Brother ', '12000 ', 8, 'Nothing ', '2322332 ', '10 ', 298),
(251, 'Jason ', '2222-222 ', '2222-222-333 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2 ', 0, 'Brother ', '20000 ', 8, 'None ', '5455454 ', '5 ', 298),
(244, 'Mark', '111111-111 ', '11111-1111-111 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2 ', 0, 'Cousin ', '23444 ', 8, 'dsafads ', '2342 ', '12 ', 288);

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
  `insurance_id` int(11) NOT NULL AUTO_INCREMENT,
  `insurance_name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`insurance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insurance_id`, `insurance_name`, `date`) VALUES
(1, 'Pradential Assurance Company', '2014-04-21 09:57:51'),
(2, 'Great Eastern Life Assurance ', '0000-00-00 00:00:00'),
(3, 'Zurich International Life', '2014-04-21 09:28:39'),
(4, 'Generali International Life', '2014-04-21 09:29:45'),
(5, 'Aviva Limited', '2014-04-21 09:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE IF NOT EXISTS `policy` (
  `policy_id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_type` varchar(100) NOT NULL,
  `policy_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`policy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `salt` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`) VALUES
(1, 'bryan', 'b0e5466093af764a82da86f4ff4b2324', '53a267f4467784.47161251'),
(2, 'admin', '5e61c493100cc9f65f3208b0b04c1f13', '53a7f1d009b196.15253970');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
