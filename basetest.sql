-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Février 2015 à 14:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `basetest`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateAnnonces` datetime NOT NULL,
  `dateCre` datetime NOT NULL,
  `dateSup` datetime NOT NULL,
  `dateMaj` datetime NOT NULL,
  `util` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenuAnnonce` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prixAnnonce` int(11) NOT NULL,
  `nbligne` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id`, `titre`, `auteur`, `dateAnnonces`, `dateCre`, `dateSup`, `dateMaj`, `util`, `contenuAnnonce`, `prixAnnonce`, `nbligne`) VALUES
(1, 'Nouvel article geek', 'gfrerge', '2010-01-01 00:00:00', '2015-02-19 15:25:00', '2010-01-01 00:00:00', '2010-01-01 00:00:00', 'erheher', 'fregerhgerh', 8, 6),
(2, 'Nouvel article geek2', 'zefz9f48z49f', '2010-02-01 00:00:00', '2014-02-19 15:25:00', '2010-01-01 00:00:00', '2010-01-01 00:00:00', 'zefez632zef', 'sdfsdvber reg  rtg e', 12, 2),
(3, 'Nouvel article geek', 'zefzefze', '2010-01-01 00:00:00', '2015-02-19 16:27:00', '2010-01-01 00:00:00', '2010-01-01 00:00:00', 'zefzefzef', 'grtgegt', 5, 9),
(4, 'Nouvel article geek', 'zefzefze', '2010-01-01 00:00:00', '2015-02-19 16:27:00', '2010-01-01 00:00:00', '2010-01-01 00:00:00', 'zefzefzef', 'grtgegt', 5, 98);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
