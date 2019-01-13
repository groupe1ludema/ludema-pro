-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 13 jan. 2019 à 14:12
-- Version du serveur :  5.7.21
-- Version de PHP :  7.0.29

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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

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
(22, 'a', 'ali', 'Wali d', 15, 'Homme', 'fbfb'),
(23, 'ludema', 'Marie', 'Langele', 18, 'Femme', 'Mal aux jambes'),
(24, 'Walidestsouple', 'Walid', 'Messaoudi', 19, 'Homme', ''),
(25, 'Walidestsouple', 'Emeric', 'Dupil', 19, 'Homme', ''),
(26, 'Walidestsouple', 'Emeric', 'Dupil', 19, 'Homme', '');

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
('TUG'),
('FSST');

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
('Douleur durant le test ', 'axe010', 'Distance doigt sol'),
('Technique utilisée', 'string', 'Distance doigt sol'),
('Commentaires', 'commentaire', 'Distance doigt sol'),
('Temps de réalisation marche rapide (en secondes)', 'int', 'TUG'),
('Temps de réalisation marche ordinaire (en secondes)', 'int', 'TUG'),
('Difficulté durant le test ', 'axe010', 'TUG'),
('Technique utilisée', 'string', 'TUG'),
('Variante utilisée', 'string', 'TUG'),
('Commentaires', 'commentaire', 'TUG'),
(' salut ça va moi aussi ok ', 'axe010', 'FSST'),
('cc', 'axe010', 'FSST'),
('ntm ftg oki', 'axe010', 'FSST'),
('rfeoiurfeoiru', 'axe620', 'FSST'),
('efoijf zefezf', 'axe620', 'FSST');

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
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `historique_compo` varchar(100) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `email`, `prenom`, `nom`, `historique_compo`, `mdp`) VALUES
('ludema', 'Ludema@homail.fr', 'lud', 'Ludema', NULL, '$2y$10$TB2wJ5BBH902HDf.jk4DieYfSO78cEjdNB07cx2uAZFrabl5uNLcy'),
('Walidestsouple', 'walid.messaoudi@hotmail.fr', 'Walid', 'Messaoudi', NULL, '$2y$10$P9BsInNyu5ST5iQsKR0IVeXXlS6VPF93hdR3Lv8muSomzNDHsMvNi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
