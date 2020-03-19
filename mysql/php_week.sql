-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 19 mars 2020 à 13:24
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

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
  `id` tinyint(4) UNSIGNED NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `postal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `birthdate`, `gender`, `mail`, `address`, `city`, `postal`) VALUES
(1, 'Brian', 'lecarpentier', '1993-10-20', 'Woman', 'lecarp@hotmail.fr', '45 rue due saint andré', 'paris', 75000),
(11, 'coco', 'vallois', '1995-05-12', 'Man', 'coco@gmail.com', '15 rue de la Story', 'bda', 75000),
(12, 'roman', 'clavier', '1995-05-12', 'Woman', 'rom@gmail.com', '15 rue de la Story', 'paris', 75000),
(13, 'antony', 'correia', '1995-05-12', 'Woman', 'anto@gmail.com', '15 rue de la Story', 'paris', 75000),
(14, 'francois', 'cornet', '1990-05-12', 'Man', 'francois@gmail.com', '15 rue de je kiff les bracs', 'paris', 75000),
(15, 'Brian', 'rgbrg', '2020-03-04', 'Man', 'gferv@erge.fr', 'ere', 'paris', 75000),
(16, 'dvzev', 'ezvv', '2020-03-07', 'Man', 'gfersv@ergse.fr', 'ere', 'paris', 75000),
(17, 'sdvsd', 'svsdbvsdb', '2020-03-05', 'Man', 'gfedsrsv@ergse.fr', 'ere', 'vdc', 23495),
(18, 'On', 'estTeubé', '2020-03-03', 'Man', 'OnAOublier@ville.et', 'leCode postal', 'idiot', 23495);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
