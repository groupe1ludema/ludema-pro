-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 30 déc. 2018 à 19:24
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ludemabdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `catgeorie` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`catgeorie`) VALUES
('Distance doigt sol');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `Intitule` varchar(100) DEFAULT NULL,
  `Inputtype` varchar(30) NOT NULL,
  `Test` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`Intitule`, `Inputtype`, `Test`) VALUES
('Distance en centimÃ¨tres', 'int', 'Distance doigt sol'),
('Douleur durant le test ', 'echelle', 'Distance doigt sol'),
('Technique utilisÃ©e', 'string', 'Distance doigt sol'),
('Commentaires', 'commentaire', 'Distance doigt sol'),
('Temps de rÃ©alisation marche rapide (en secondes)', 'int', 'TUG'),
('Temps de rÃ©alisation marche ordinaire (en secondes)', 'int', 'TUG'),
('DifficultÃ© durant le test ', 'echelle', 'TUG'),
('Technique utilisÃ©e', 'string', 'TUG'),
('Variante utilisÃ©e', 'string', 'TUG'),
('Commentaires', 'commentaire', 'TUG');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `Categorie` varchar(30) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`Categorie`, `Nom`, `description`) VALUES
('Equilibre', 'One-leg balanc', NULL),
('Equilibre', 'FSST', NULL),
('Equilibre', 'GUG', NULL),
('Souplesse', 'Distance doigt sol', 'Pieds joints, basculez lentement le buste vers lâ€™avant en dÃ©roulant le dos, bras tendus, pour tenter de toucher le sol avec les doigts. Il est impÃ©ratif de ne pas plier les genoux.\r\n\r\nLa distance sÃ©parant lâ€™extrÃ©mitÃ© des doigts et le sol est mesurÃ©e Ã  la rÃ¨gle (cm) et correspond Ã  la va'),
('Souplesse', 'Sit and reach', NULL),
('AgilitÃ©', 'FSST', NULL),
('AgilitÃ©', 'TUG', 'Dans ce test, la personne doit se relever de la position assise et marcher Ã  trois mÃ¨tres de la chaise pour ensuite revenir sur ses pas (tourne Ã  180 degrÃ©s) et sâ€™assoir de nouveau. Le temps que la personne met Ã  accomplir cette activitÃ© est chronomÃ©trÃ© par lâ€™Ã©valuateur.'),
('AgilitÃ©', 'GUG', NULL),
('Souplesse', 'Chair sit and reach', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `login` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `historique_compo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
