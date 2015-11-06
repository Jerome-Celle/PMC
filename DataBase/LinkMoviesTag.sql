-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Client :  noktefrlvpdb.mysql.db
-- Généré le :  Ven 06 Novembre 2015 à 08:37
-- Version du serveur :  5.1.73-2+squeeze+build1+1-log
-- Version de PHP :  5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `noktefrlvpdbpmc`
--

-- --------------------------------------------------------

--
-- Structure de la table `LinkMoviesTag`
--

CREATE TABLE IF NOT EXISTS `LinkMoviesTag` (
  `id` int(10) NOT NULL,
  `idMovies` int(10) NOT NULL,
  `idTag` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `LinkMoviesTag`
--

INSERT INTO `LinkMoviesTag` (`id`, `idMovies`, `idTag`) VALUES
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
(13, 13, 1),
(14, 15, 0),
(15, 2, 4),
(16, 2, 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `LinkMoviesTag`
--
ALTER TABLE `LinkMoviesTag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `LinkMoviesTag`
--
ALTER TABLE `LinkMoviesTag`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
