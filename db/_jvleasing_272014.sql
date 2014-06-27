-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2014 at 06:02 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

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
`admin_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_last_login` int(11) NOT NULL
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
`brokers_id` int(11) NOT NULL,
  `brokers_name` varchar(255) NOT NULL,
  `brokers_contact` varchar(255) NOT NULL,
  `brokers_email` varchar(255) NOT NULL,
  `brokers_address` varchar(255) NOT NULL,
  `brokers_commission` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `brokers`
--

INSERT INTO `brokers` (`brokers_id`, `brokers_name`, `brokers_contact`, `brokers_email`, `brokers_address`, `brokers_commission`, `date`, `status`) VALUES
(1, 'hahah hahah', '12348888', 'c@mail.com', 'jalam msms msmms', 8, '2014-04-23 17:39:43', 1),
(2, 'test 1', '12345678', 'cms@mail.com', 'plaza singapore', 7, '2014-04-23 17:41:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(11) NOT NULL,
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
  `covOther1` varchar(50) NOT NULL,
  `covOther2` varchar(50) NOT NULL,
  `covOther3` varchar(50) NOT NULL,
  `covLoyaltyDis` decimal(10,0) NOT NULL,
  `covNoClaim` tinyint(1) NOT NULL DEFAULT '1',
  `covNCDProtectr` varchar(100) NOT NULL,
  `covCommDate` date NOT NULL,
  `covExpDate` date NOT NULL,
  `covInsurCo` varchar(50) NOT NULL,
  `covTermDate` date NOT NULL,
  `spNameBroker` int(11) NOT NULL,
  `spAnnualPrem` decimal(10,2) NOT NULL,
  `spDiscount` decimal(10,2) NOT NULL,
  `spPremDue` date NOT NULL,
  `spGST` decimal(10,0) NOT NULL,
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
  `dpDrverName` varchar(100) NOT NULL,
  `dpDrverICno` varchar(50) NOT NULL,
  `dpDrverOcc` varchar(50) NOT NULL,
  `dpDateBirth` date NOT NULL,
  `dpDrverLcnsePass` date NOT NULL,
  `dpDrverMarStat` varchar(15) NOT NULL,
  `dpGender` int(1) NOT NULL,
  `dpRelationship` varchar(50) NOT NULL,
  `dpNationality` varchar(50) NOT NULL,
  `dpWage` varchar(50) NOT NULL,
  `dpRemarks` varchar(100) NOT NULL,
  `dpRef` varchar(50) NOT NULL,
  `dpMonth` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `nick`, `address`, `postalcode`, `nric`, `birthdate`, `nationality`, `res_tel`, `ofc_tel`, `mobile`, `email`, `company`, `designation`, `drvlicense_passdate`, `policy_id`, `v_model`, `v_type`, `engine_cap`, `yr_manufactured`, `reg_date`, `roadTax_expDate`, `carPlate`, `oldVehcNo`, `insuranceCo`, `oldNCD`, `prevExpDate`, `covPolicyNo`, `covCoverNoteNo`, `covCoverageType`, `covPlan`, `covGrossPrem`, `covNCD`, `covExcess`, `covWindScrAmnt`, `covLoadAmnt`, `covPersonalAcc`, `covExtension`, `covSurCharge`, `covOther1`, `covOther2`, `covOther3`, `covLoyaltyDis`, `covNoClaim`, `covNCDProtectr`, `covCommDate`, `covExpDate`, `covInsurCo`, `covTermDate`, `spNameBroker`, `spAnnualPrem`, `spDiscount`, `spPremDue`, `spGST`, `spMiscChanges`, `spTotalDue`, `spComm1`, `spNetUnderwriter`, `spFirmComm`, `spAgentComm`, `spEarnings`, `spRemarks`, `spPaymentBy`, `spReceiptNo`, `dpDrverName`, `dpDrverICno`, `dpDrverOcc`, `dpDateBirth`, `dpDrverLcnsePass`, `dpDrverMarStat`, `dpGender`, `dpRelationship`, `dpNationality`, `dpWage`, `dpRemarks`, `dpRef`, `dpMonth`) VALUES
(1, 'Andrew Tan', 'Andrew', 'Lincoln Street', '80002', '8930405', '0000-00-00', 'American', '+9039485', '2039949', '+65283493', 'andrew@gmail.com', 'Andrew Corporation', 'Manager', '0000-00-00', 0, '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '0', '', '0', '0', '0', '0', '0', '', '', '0.00', '', '', '', '0', 1, '0', '0000-00-00', '0000-00-00', '', '0000-00-00', 0, '0.00', '0.00', '0000-00-00', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE IF NOT EXISTS `configuration` (
`config_id` int(11) NOT NULL,
  `option_name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `option_value` varchar(128) CHARACTER SET utf8 NOT NULL,
  `date_last` bigint(20) NOT NULL
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
`coverage_id` int(11) NOT NULL,
  `coverage_type` varchar(50) NOT NULL,
  `coverage_desc` varchar(100) NOT NULL
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
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
`insurance_id` int(11) NOT NULL,
  `insurance_name` varchar(255) NOT NULL,
  `date` datetime NOT NULL
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
`policy_id` int(11) NOT NULL,
  `policy_type` varchar(100) NOT NULL,
  `policy_desc` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `salt` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`) VALUES
(1, 'bryan', 'b0e5466093af764a82da86f4ff4b2324', '53a267f4467784.47161251'),
(2, 'admin', '5e61c493100cc9f65f3208b0b04c1f13', '53a7f1d009b196.15253970');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brokers`
--
ALTER TABLE `brokers`
 ADD PRIMARY KEY (`brokers_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
 ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `coverage`
--
ALTER TABLE `coverage`
 ADD PRIMARY KEY (`coverage_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
 ADD PRIMARY KEY (`insurance_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
 ADD PRIMARY KEY (`policy_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brokers`
--
ALTER TABLE `brokers`
MODIFY `brokers_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coverage`
--
ALTER TABLE `coverage`
MODIFY `coverage_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
MODIFY `insurance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
MODIFY `policy_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
