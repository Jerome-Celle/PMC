-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Client :  noktefrlvpdb.mysql.db
-- Généré le :  Dim 01 Novembre 2015 à 10:54
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
-- Structure de la table `Popmoviescountdown`
--

CREATE TABLE IF NOT EXISTS `MoviesFR` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dateSortie` varchar(100) NOT NULL,
  `tag` int(10) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `annee` varchar(4) NOT NULL,
  `mois` varchar(2) NOT NULL,
  `jour` varchar(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Popmoviescountdown`
--

INSERT INTO `MoviesFR` (`id`, `name`, `dateSortie`, `tag`, `titre`, `annee`, `mois`, `jour`) VALUES
(1, 'star_wars_7', '16 Décembre 2015', 2, 'Star Wars The Force Awakens', '2015', '12', '16'),
(2, 'captain_america_3', '6 Mai 2016', 1, 'Captain America 3', '2016', '05', '06'),
(3, 'doctor_strange', '4 Novembre 2016', 1, 'Doctor Strange', '2016', '11', '04'),
(4, 'gardiens_galaxie_2', '5 Mai 2017', 1, 'Gardiens de la Galaxie 2', '2017', '05', '05'),
(5, 'thor_3', '28 Juillet 2017', 1, 'Thor : Ragnarok', '2017', '07', '28'),
(6, 'black_panther', '3 Novembre 2017', 1, 'Black Panther', '2017', '11', '03'),
(7, 'avengers_infinity_war_1', '4 Mai 2018', 1, 'Avengers : Infinity War Part. 1', '2018', '05', '04'),
(8, 'captain_marvel', '2 Juillet 2018', 1, 'Captain Marvel', '2018', '07', '02'),
(9, 'inhumans', '2 Novembre 2018', 1, 'Inhumans', '2018', '11', '02'),
(10, 'avengers_infinity_war_2', '3 Mai 2019', 1, 'Avengers : Infinity War Part. 2', '2019', '05', '03'),
(11, 'star_wars_8', '26 Mai 2017', 2, 'Star Wars 8', '2017', '05', '26'),
(12, 'batman_vs_superman', '23 Mars 2016', 3, 'Batman VS Superman', '2016', '03', '23'),
(13, 'deadpool', '10 Février 2016', 1, 'Deadpool', '2016', '02', '10'),
(15, 'lego_movie_2', '2018', 0, 'lego movies 2', '2018', '99', '99');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Popmoviescountdown`
--
ALTER TABLE `MoviesFR`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Popmoviescountdown`
--
ALTER TABLE `MoviesFR`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
