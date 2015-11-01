-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Client :  noktefrlvpdb.mysql.db
-- Généré le :  Dim 01 Novembre 2015 à 11:24
-- Version du serveur :  5.1.73-2+squeeze+build1+1-log
-- Version de PHP :  5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `noktefrlvpdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `Tag`
--

CREATE TABLE IF NOT EXISTS `Portail` (
  `idPortail` int(10) NOT NULL,
  `namePortail` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Tag`
--

INSERT INTO `Portail` (`idPortail`, `namePortail`) VALUES
(1, 'Marvel'),
(2, 'Star Wars'),
(3, 'DC Comics');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Tag`
--
ALTER TABLE `Portail`
  ADD PRIMARY KEY (`idPortail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Tag`
--
ALTER TABLE `Portail`
  MODIFY `idPortail` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
