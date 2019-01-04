-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 04 jan. 2019 à 17:30
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
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `loginUtilisateur` varchar(25) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `note` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `loginUtilisateur`, `prenom`, `nom`, `age`, `sexe`, `note`) VALUES
(1, 'Ali', 'walid', 'messaoudi', 12, 'homme', 'fefe'),
(2, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(3, 'a', 'dfbdf', 'f bdf', 115, 'Homme', 'yl;yi;fuiiiiiiiiu:'),
(4, 'a', 'dfbdf', 'f bdf', 115, 'Homme', 'yl;yi;fuiiiiiiiiu:'),
(5, 'a', 'dfbdf', 'f bdf', 115, 'Homme', 'yl;yi;fuiiiiiiiiu:'),
(6, 'a', 'grg', 'fef', 7, 'Homme', 'iklui'),
(7, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(8, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(9, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(10, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(11, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(12, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(13, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(14, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(15, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(16, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(17, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(18, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(19, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(20, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(21, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(22, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb');

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
('Distance doigt sol'),
('Sit and reach'),
('TUG');

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
('Distance en centimètres', 'int', 'Distance doigt sol'),
('Douleur durant le test ', 'echelle', 'Distance doigt sol'),
('Technique utilisée', 'string', 'Distance doigt sol'),
('Commentaires', 'commentaire', 'Distance doigt sol'),
('Temps de réalisation marche rapide (en secondes)', 'int', 'TUG'),
('Temps de réalisation marche ordinaire (en secondes)', 'int', 'TUG'),
('Difficulté durant le test ', 'echelle', 'TUG'),
('Technique utilisée', 'string', 'TUG'),
('Variante utilisée', 'string', 'TUG'),
('Commentaires', 'commentaire', 'TUG'),
('Distance en centimètres', 'int', 'Sit and reach'),
('Douleur durant le test ', 'echelle', 'Sit and reach'),
('Technique utilisée', 'string', 'Sit and reach'),
('Commentaires', 'commentaire', 'Sit and reach');

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
('Souplesse', 'Distance doigt sol', 'Pieds joints, basculez lentement le buste vers l\'avant en déroulant le dos, bras tendus, pour tenter de toucher le sol avec les doigts. Il est impératif de ne pas plier les genoux.\r\n\r\nLa distance séparant l\'extrémité des doigts et le sol est mesurée à  la règle (cm) et correspond à  la va'),
('Souplesse', 'Sit and reach', NULL),
('Agilité', 'FSST', NULL),
('Agilité', 'TUG', 'Dans ce test, la personne doit se relever de la position assise et marcher à  trois mètres de la chaise pour ensuite revenir sur ses pas (tourne à  180 degrés) et s\'assoir de nouveau. Le temps que la personne met à  accomplir cette activité est chronométré par l\'évaluateur.'),
('Agilité', 'GUG', NULL),
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

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `email`, `mdp`, `prenom`, `nom`, `historique_compo`) VALUES
('a', 'a', 'a', 'a', 'a', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
