-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 12:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_tp9`
--

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `numfournisseur` int(11) NOT NULL,
  `NomF` varchar(30) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fournisseur`
--

INSERT INTO `fournisseur` (`numfournisseur`, `NomF`, `ville`) VALUES
(1, 'Fournisseur A', 'marrakech'),
(2, 'Fournisseur B', 'rabat'),
(3, 'Fournisseur C', 'casa'),
(4, 'Fournisseur D', 'marrakech'),
(5, 'Fournisseur E', 'agadir');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `numProduit` int(11) NOT NULL,
  `nomP` varchar(30) DEFAULT NULL,
  `prixunitaire` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`numProduit`, `nomP`, `prixunitaire`) VALUES
(1, 'Produit A', 12000),
(2, 'Produit B', 400),
(3, 'Produit C', 922.33),
(4, 'Produit D', 187.89),
(5, 'Produit E', 928.99);

-- --------------------------------------------------------

--
-- Table structure for table `puf`
--

CREATE TABLE `puf` (
  `numProduit` int(11) NOT NULL,
  `numUsine` int(11) NOT NULL,
  `numfournisseur` int(11) NOT NULL,
  `Quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puf`
--

INSERT INTO `puf` (`numProduit`, `numUsine`, `numfournisseur`, `Quantite`) VALUES
(1, 4, 3, 4),
(2, 3, 5, 13),
(2, 5, 3, 11),
(2, 5, 4, 7),
(3, 4, 1, 4),
(3, 5, 3, 4),
(4, 1, 3, 12),
(4, 1, 4, 3),
(4, 3, 2, 2),
(4, 5, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usine`
--

CREATE TABLE `usine` (
  `numUsine` int(11) NOT NULL,
  `nomU` varchar(30) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usine`
--

INSERT INTO `usine` (`numUsine`, `nomU`, `ville`) VALUES
(1, 'Usine A', 'tanger'),
(2, 'Usine B', 'fes'),
(3, 'Usine C', 'casa'),
(4, 'Usine D', 'tanger'),
(5, 'Usine E', 'casa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`numfournisseur`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`numProduit`);

--
-- Indexes for table `puf`
--
ALTER TABLE `puf`
  ADD PRIMARY KEY (`numProduit`,`numUsine`,`numfournisseur`),
  ADD KEY `usine` (`numUsine`),
  ADD KEY `four` (`numfournisseur`);

--
-- Indexes for table `usine`
--
ALTER TABLE `usine`
  ADD PRIMARY KEY (`numUsine`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `puf`
--
ALTER TABLE `puf`
  ADD CONSTRAINT `four` FOREIGN KEY (`numfournisseur`) REFERENCES `fournisseur` (`numfournisseur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pro` FOREIGN KEY (`numProduit`) REFERENCES `produit` (`numProduit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usine` FOREIGN KEY (`numUsine`) REFERENCES `usine` (`numUsine`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
