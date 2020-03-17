-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 mars 2020 à 12:56
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `php_week`
--
CREATE DATABASE IF NOT EXISTS `php_week` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `php_week`;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `birthdate`, `gender`, `mail`, `address`) VALUES
(1, 'Brian', 'lecarpentier', '1993-10-20', 'male', 'lecarp@hotmail.fr', '22 rue du centre'),
(2, 'Abricoto', 'Coco', '1995-02-11', 'male', 'cocolabrico@gmail.com', '11 rue du bien heureux'),
(3, 'Brian', 'lecarpentier', '8455-07-11', 'male', 'lecarp@hotmail.fe', '22 rue du centre'),
(4, 'Dubou', 'Coco', '8114-07-11', 'male', 'toto@toto.com', '78 avenue du bonhomme'),
(5, 'Brian', 'lecarpentier', '9414-08-17', 'male', 'lecarp@hotmail.free', '22 rue du centre'),
(6, 'Lecarpentier', 'Brian', '4848-08-04', 'male', 'ldqtheone@gmail.come', '18 Rue Marguerite Yourcenar'),
(7, 'Brian', 'lecarpentier', '1111-11-11', 'male', 'ldqtheone@gmail.comp', '22 rue du centre'),
(8, 'Brian', 'lecarpentier', '1111-11-11', 'male', 'ldqtheone@gmail.comaz', '22 rue du centre'),
(9, 'Lecarpentier', 'Brian', '1111-11-11', 'male', 'ldqtheone@gmail.comazs', '18 Rue Marguerite Yourcenar'),
(10, 'Lecarpentier', 'Brian', '1111-11-11', 'male', 'ldqtheone@gmail.comwa', '18 Rue Marguerite Yourcenar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
