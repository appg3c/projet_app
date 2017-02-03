-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2017 at 11:05 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `espacemembre`
--

-- --------------------------------------------------------

--
-- Table structure for table `aide`
--

CREATE TABLE IF NOT EXISTS `aide` (
  `id` int(255) NOT NULL,
  `telephone` int(25) NOT NULL,
  `mail_divercity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `controler`
--

CREATE TABLE IF NOT EXISTS `controler` (
  `id` int(255) NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  `id_objets_connecte` int(255) NOT NULL,
  `client` tinyint(1) NOT NULL,
  `utilisateur_principal` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donnees`
--

CREATE TABLE IF NOT EXISTS `donnees` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `heure` int(11) NOT NULL,
  `id_objets_connectés` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(255) NOT NULL,
  `question` text NOT NULL,
  `reponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `generer`
--

CREATE TABLE IF NOT EXISTS `generer` (
  `id` int(255) NOT NULL,
  `id_objets_connecte` int(255) NOT NULL,
  `id_donnees` int(255) NOT NULL,
  `procede` varchar(255) NOT NULL,
  `débit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maison`
--

CREATE TABLE IF NOT EXISTS `maison` (
  `id` int(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `nombre de personne` int(11) NOT NULL,
  `nombre de pièce` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_pièce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `objets_connectes`
--

CREATE TABLE IF NOT EXISTS `objets_connectes` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_installation` date NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `temps_de_reponse` float NOT NULL,
  `consigne` int(11) NOT NULL,
  `id_pièce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pièce`
--

CREATE TABLE IF NOT EXISTS `pièce` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `superficie` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posseder`
--

CREATE TABLE IF NOT EXISTS `posseder` (
  `id` int(255) NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  `id_maison` int(255) NOT NULL,
  `nombre` int(255) NOT NULL,
  `client` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `id` int(255) NOT NULL,
  `jour_debut` int(255) NOT NULL,
  `mois_debut` varchar(255) NOT NULL,
  `jour_fin` int(255) NOT NULL,
  `mois_fin` varchar(255) NOT NULL,
  `valeur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`id`, `jour_debut`, `mois_debut`, `jour_fin`, `mois_fin`, `valeur`) VALUES
(1, 0, 'choix1', 0, 'choix1', 0),
(2, 0, 'choix9', 0, 'choix11', 0),
(3, 0, 'janvier', 1, 'octobre', 0),
(4, 3, 'janvier', 9, 'mars', 0),
(5, 1, 'janvier', 15, 'janvier', 0),
(6, 1, 'janvier', 29, 'janvier', 0),
(7, 15, 'janvier', 18, 'janvier', 0);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(255) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` int(15) NOT NULL,
  `type_utilisateur` varchar(15) NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `date_de_naissance`, `mail`, `password`, `telephone`, `type_utilisateur`, `pseudo`) VALUES
(1, '', '', '0000-00-00', 'clement.bechet@outlook.fr', '9eec11a8962797e832b8a03e8151423c', 0, '', 'clement'),
(2, '', '', '0000-00-00', 'jules.bechet@gmail.com', '58e537189c53a9d3969e8795588ea574', 0, '', 'jules'),
(3, '', '', '0000-00-00', 'joule@hotmail.fr', 'a0a4e311372cbc18d664dadd5d3545b2', 0, '', 'joule'),
(4, '', '', '0000-00-00', 'la@hotmail.fr', '236e92bcf7c04d8d7ff3f798b537823f', 0, '', 'la'),
(5, '', '', '0000-00-00', 'seb@hotmail.fr', 'f15389363cf66828af65a1d8881e5821', 0, '', 'seb');

-- --------------------------------------------------------

--
-- Table structure for table `visualiser`
--

CREATE TABLE IF NOT EXISTS `visualiser` (
  `id` int(255) NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  `id_donnees` int(255) NOT NULL,
  `client` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aide`
--
ALTER TABLE `aide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controler`
--
ALTER TABLE `controler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`,`id_objets_connecte`),
  ADD KEY `id_objets_connecte` (`id_objets_connecte`);

--
-- Indexes for table `donnees`
--
ALTER TABLE `donnees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_objets_connectés` (`id_objets_connectés`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generer`
--
ALTER TABLE `generer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_objets_connecte` (`id_objets_connecte`,`id_donnees`),
  ADD KEY `generer_ibfk_1` (`id_donnees`);

--
-- Indexes for table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`,`id_pièce`),
  ADD KEY `id_pièce` (`id_pièce`);

--
-- Indexes for table `objets_connectes`
--
ALTER TABLE `objets_connectes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pièce` (`id_pièce`);

--
-- Indexes for table `pièce`
--
ALTER TABLE `pièce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posseder`
--
ALTER TABLE `posseder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`,`id_maison`),
  ADD KEY `posseder_ibfk_1` (`id_maison`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visualiser`
--
ALTER TABLE `visualiser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`,`id_donnees`),
  ADD KEY `visualiser_ibfk_1` (`id_donnees`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aide`
--
ALTER TABLE `aide`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `controler`
--
ALTER TABLE `controler`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donnees`
--
ALTER TABLE `donnees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `generer`
--
ALTER TABLE `generer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `maison`
--
ALTER TABLE `maison`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `objets_connectes`
--
ALTER TABLE `objets_connectes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pièce`
--
ALTER TABLE `pièce`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posseder`
--
ALTER TABLE `posseder`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `visualiser`
--
ALTER TABLE `visualiser`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `controler`
--
ALTER TABLE `controler`
  ADD CONSTRAINT `controler_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `controler_ibfk_2` FOREIGN KEY (`id_objets_connecte`) REFERENCES `objets_connectes` (`id`);

--
-- Constraints for table `donnees`
--
ALTER TABLE `donnees`
  ADD CONSTRAINT `donnees_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `donnees_ibfk_1` FOREIGN KEY (`id_objets_connectés`) REFERENCES `objets_connectes` (`id`);

--
-- Constraints for table `generer`
--
ALTER TABLE `generer`
  ADD CONSTRAINT `generer_ibfk_1` FOREIGN KEY (`id_donnees`) REFERENCES `donnees` (`id`),
  ADD CONSTRAINT `generer_ibfk_2` FOREIGN KEY (`id_objets_connecte`) REFERENCES `objets_connectes` (`id`);

--
-- Constraints for table `maison`
--
ALTER TABLE `maison`
  ADD CONSTRAINT `maison_ibfk_2` FOREIGN KEY (`id_pièce`) REFERENCES `pièce` (`id`),
  ADD CONSTRAINT `maison_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `objets_connectes`
--
ALTER TABLE `objets_connectes`
  ADD CONSTRAINT `objets_connectes_ibfk_1` FOREIGN KEY (`id_pièce`) REFERENCES `pièce` (`id`);

--
-- Constraints for table `posseder`
--
ALTER TABLE `posseder`
  ADD CONSTRAINT `posseder_ibfk_1` FOREIGN KEY (`id_maison`) REFERENCES `maison` (`id`),
  ADD CONSTRAINT `posseder_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `visualiser`
--
ALTER TABLE `visualiser`
  ADD CONSTRAINT `visualiser_ibfk_1` FOREIGN KEY (`id_donnees`) REFERENCES `donnees` (`id`),
  ADD CONSTRAINT `visualiser_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
