-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Client :  noktefrlvpdb.mysql.db
-- Généré le :  Dim 01 Novembre 2015 à 11:26
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
-- Structure de la table `LinkMoviesTag`
--

CREATE TABLE IF NOT EXISTS `LinkMoviesPortail` (
  `id` int(10) NOT NULL,
  `idMovies` int(10) NOT NULL,
  `idPortail` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `LinkMoviesTag`
--

INSERT INTO `LinkMoviesPortail` (`id`, `idMovies`, `idPortail`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 2),
(12, 12, 3),
(13, 13, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `LinkMoviesTag`
--
ALTER TABLE `LinkMoviesPortail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `LinkMoviesTag`
--
ALTER TABLE `LinkMoviesPortail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
