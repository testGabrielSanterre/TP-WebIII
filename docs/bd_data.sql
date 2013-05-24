-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2013 at 01:03 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tpweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `denims`
--

CREATE TABLE `denims` (
  `idDenim` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchNomDenim` varchar(150) COLLATE utf8_bin NOT NULL,
  `vchUrlMedia` varchar(255) COLLATE utf8_bin NOT NULL,
  `idStyle` int(11) unsigned NOT NULL,
  PRIMARY KEY (`idDenim`),
  KEY `FK_denims_idStyle` (`idStyle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `denims`
--

INSERT INTO `denims` (`idDenim`, `vchNomDenim`, `vchUrlMedia`, `idStyle`) VALUES
(1, 'Article 1', 'testécom', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `idPage` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchTitrePage` varchar(255) COLLATE utf8_bin NOT NULL,
  `vchContenuPage` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idPage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`idPage`, `vchTitrePage`, `vchContenuPage`) VALUES
(1, 'Contact', 0x566f757320706f7576657a206e6f757320636f6e74616374657220626c61626c610d0a),
(2, 'Accueil', 0x796f796f206c6163637565696c),
(3, 'test', 0x796f796f796f796f796f2074657374);

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `idStyle` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchNomStyle` varchar(150) COLLATE utf8_bin NOT NULL,
  `enumCollection` enum('Collection Homme','Collection Femme') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idStyle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`idStyle`, `vchNomStyle`, `enumCollection`) VALUES
(1, 'Ash', 'Collection Homme'),
(2, 'Driven', 'Collection Homme');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchNomUser` varchar(255) COLLATE utf8_bin NOT NULL,
  `vchLogin` varchar(255) COLLATE utf8_bin NOT NULL,
  `vchPwd` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `denims`
--
ALTER TABLE `denims`
  ADD CONSTRAINT `FK_denims_idStyle` FOREIGN KEY (`idStyle`) REFERENCES `styles` (`idStyle`);