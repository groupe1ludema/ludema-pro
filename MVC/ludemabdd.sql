-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 15 jan. 2019 à 11:44
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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
(24, 'Walidestsouple', 'Walid', 'Messaoudi', 19, 'Homme', ''),
(25, 'Walidestsouple', 'Emeric', 'Dupil', 19, 'Homme', ''),
(26, 'Walidestsouple', 'Emeric', 'Dupil', 19, 'Homme', ''),
(27, 'ludema', 'Ali', 'Jomaa', 15, 'Homme', 'problème de nez'),
(28, 'ludema', 'Fabien', 'Sam', 13, 'Homme', 'très chinois');

-- --------------------------------------------------------

--
-- Structure de la table `composition`
--

DROP TABLE IF EXISTS `composition`;
CREATE TABLE IF NOT EXISTS `composition` (
  `nomComposition` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `detailComposition` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `composition`
--

INSERT INTO `composition` (`nomComposition`, `login`, `detailComposition`) VALUES
('All tests', 'ludema', 'Distance doigt sol#Seated Medicine Ball Throw#Hand-Grip#Abdominal Strength Test#1-RM#Sorensen#Shirado-Ito#Assis-debout 30 secondes#Step Test de 3 minutes#Test de marche de 10 mètres#Harvard Step Test#Test de marche de 6 minutes#Sit and reach#Chair sit and reach#Sargent test#One-leg balance#Romberg test#FSST#Timed Up and Go#FRT'),
('Ma compo 2', 'ludema', 'Distance doigt sol#Sit and reach'),
('Ma compo 1', 'ludema', 'One-leg balanc');

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
('Romberg test'),
('One-leg balance'),
('Sargent test'),
('Sit and reach'),
('Chair sit and reach'),
('Harvard Step Test'),
('Test de marche de 10 mètres'),
('Step Test de 3 minutes'),
('Assis-debout 30 secondes'),
('Sorensen'),
('Shirado-Ito'),
('1-RM'),
('Abdominal Strength Test'),
('Hand-Grip'),
('Seated Medicine Ball Throw'),
('Distance doigt sol'),
('Test de marche de 6 minutes'),
('FSST'),
('Timed Up and Go'),
('FRT');

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
('Distance (centimètres)', 'int', 'Distance doigt sol'),
('Douleur durant le test', 'axe010', 'Distance doigt sol'),
('Technique utilisée', 'string', 'Distance doigt sol'),
('Commentaires', 'commentaire', 'Distance doigt sol'),
('Distance (centimètres)', 'int', 'Sit and reach'),
('Douleur durant le test', 'axe010', 'Sit and reach'),
('Technique utilisée', 'string', 'Sit and reach'),
('Commentaires', 'commentaire', 'Sit and reach'),
('Distance (centimètres)', 'int', 'Chair sit and reach'),
('Douleur durant le test', 'axe010', 'Chair sit and reach'),
('Technique utilisée', 'string', 'Chair sit and reach'),
('Commentaires', 'commentaire', 'Chair sit and reach'),
('Temps de maintien (secondes)', 'int', 'One-leg balance'),
('Difficulté durant le test', 'axe620', 'One-leg balance'),
('Technique utilisée', 'string', 'One-leg balance'),
('Commentaires', 'commentaire', 'One-leg balance'),
('Temps de maintien', 'int', 'Romberg test'),
('Difficulté durant le test', 'axe620', 'Romberg test'),
('Technique utilisée', 'string', 'Romberg test'),
('Commentaires', 'commentaire', 'Romberg test'),
('Temps de réalisation (secondes)', 'int', 'FSST'),
('Difficulté durant le test', 'axe620', 'FSST'),
('Technique utilisée', 'string', 'FSST'),
('Variante utilisée', 'string', 'FSST'),
('Commentaires', 'commentaire', 'FSST'),
('Temps de réalisation marche rapide (secondes)', 'int', 'Timed Up and Go'),
('Temps de réalisation marche ordinaire (secondes)', 'int', 'Timed Up and Go'),
('Difficulté durant le test', 'axe620', 'Timed Up and Go'),
('Technique utilisée', 'string', 'Timed Up and Go'),
('Variante utilisée', 'string', 'Timed Up and Go'),
('Commentaires', 'commentaire', 'Timed Up and Go'),
('Distance antérieure réalisée (centimètres)', 'int', 'FRT'),
('Distance postérieure réalisée (centimètres)', 'int', 'FRT'),
('Distance latérale D réalisée (centimètres)', 'int', 'FRT'),
('Distance latérale G réalisée (centimètres)', 'int', 'FRT'),
('Difficulté durant le test', 'axe620', 'FRT'),
('Technique utilisée', 'string', 'FRT'),
('Variante utilisée', 'string', 'FRT'),
('Commentaires', 'commentaire', 'FRT'),
('Distance (mètres)', 'int', 'Test de marche de 6 minutes'),
('Douleur avant test', 'axe010', 'Test de marche de 6 minutes'),
('Douleur après test', 'axe010', 'Test de marche de 6 minutes'),
('Essoufflement avant test', 'axe010', 'Test de marche de 6 minutes'),
('Essoufflement après test', 'axe010', 'Test de marche de 6 minutes'),
('FC repos (BPM)', 'int', 'Test de marche de 6 minutes'),
('FC post test 1 minute (BPM)', 'int', 'Test de marche de 6 minutes'),
('FC post test 5 minutes (BPM)', 'int', 'Test de marche de 6 minutes'),
('Saturation pré-test (% SaO2)', 'int', 'Test de marche de 6 minutes'),
('Saturation post test 1 minute (% SaO2)', 'int', 'Test de marche de 6 minutes'),
('Saturation post test 5 minutes (% SaO2)', 'int', 'Test de marche de 6 minutes'),
('TA pré test (mmHg) Ex : 15-9', 'int', 'Test de marche de 6 minutes'),
('TA post test 1 minute (mmHg)', 'int', 'Test de marche de 6 minutes'),
('TA post test 5 minutes (mmHg)', 'int', 'Test de marche de 6 minutes'),
('Nombre d\'arrêts', 'int', 'Test de marche de 6 minutes'),
('Temps des arrêts (secondes)', 'int', 'Test de marche de 6 minutes'),
('Commentaires', 'commentaire', 'Test de marche de 6 minutes'),
('Durée du test (secondes) - MAX 300', 'int', 'Harvard Step Test'),
('Douleur avant test', 'axe010', 'Harvard Step Test'),
('Douleur après test', 'axe010', 'Harvard Step Test'),
('Essoufflement avant test', 'axe010', 'Harvard Step Test'),
('Essoufflement après test', 'axe010', 'Harvard Step Test'),
('FC repos (BPM)', 'int', 'Harvard Step Test'),
('FC post test de 60 secondes à 90 secondes (BPM)', 'int', 'Harvard Step Test'),
('FC post test 120 secondes à 150 secondes (BPM)', 'int', 'Harvard Step Test'),
('FC post test 180 secondes à 210 secondes (BPM)', 'int', 'Harvard Step Test'),
('Commentaires', 'commentaire', 'Harvard Step Test'),
('Temps marche ordinaire (secondes)', 'int', 'Test de marche de 10 mètres'),
('Temps marche rapide (secondes)', 'int', 'Test de marche de 10 mètres'),
('Commentaires', 'commentaire', 'Test de marche de 10 mètres'),
('Durée du test (secondes) - MAX 180', 'int', 'Step Test de 3 minutes'),
('Douleur avant test', 'axe010', 'Step Test de 3 minutes'),
('Douleur après test', 'axe010', 'Step Test de 3 minutes'),
('Essoufflement avant test', 'axe010', 'Step Test de 3 minutes'),
('Essoufflement après test', 'axe010', 'Step Test de 3 minutes'),
('FC repos (BPM)', 'int', 'Step Test de 3 minutes'),
('FC post test 1 minute (BPM)', 'int', 'Step Test de 3 minutes'),
('FC post test 5 minutes (BPM)', 'int', 'Step Test de 3 minutes'),
('Commentaires', 'commentaire', 'Step Test de 3 minutes'),
('Nombre de relevés de chaise', 'string', 'Assis-debout 30 secondes'),
('Douleur avant test', 'axe010', 'Assis-debout 30 secondes'),
('Douleur après test', 'axe010', 'Assis-debout 30 secondes'),
('Essoufflement avant test', 'axe010', 'Assis-debout 30 secondes'),
('Essoufflement après test', 'axe010', 'Assis-debout 30 secondes'),
('FC repos (BPM)', 'int', 'Assis-debout 30 secondes'),
('FC post test à 1 minute (BPM)', 'int', 'Assis-debout 30 secondes'),
('FC poste test à 5 minutes (BPM)', 'int', 'Assis-debout 30 secondes'),
('Difficulté de la tâche', 'axe620', 'Assis-debout 30 secondes'),
('Commentaires', 'commentaire', 'Assis-debout 30 secondes'),
('Temps de maintien (secondes)', 'int', 'Shirado-Ito'),
('Douleur avant test', 'axe010', 'Shirado-Ito'),
('Douleur après test', 'axe010', 'Shirado-Ito'),
('Commentaires', 'commentaire', 'Shirado-Ito'),
('Temps de maintien', 'int', 'Sorensen'),
('Douleur avant test', 'axe010', 'Sorensen'),
('Douleur après test', 'axe010', 'Sorensen'),
('Commentaires', 'commentaire', 'Sorensen'),
('Nombre de répétitions (nombre<10)', 'int', '1-RM'),
('Masse (Kg)', 'int', '1-RM'),
('Type de machine', 'string', '1-RM'),
('Douleur avant test', 'axe010', '1-RM'),
('Douleur après test', 'axe010', '1-RM'),
('Difficulté', 'axe620', '1-RM'),
('Commentaires', 'commentaire', '1-RM'),
('Essai 1 (Kg)', 'int', 'Hand-Grip'),
('Essai 2 (Kg)', 'int', 'Hand-Grip'),
('Essai 3 (Kg)', 'int', 'Hand-Grip'),
('Douleur avant test', 'axe010', 'Hand-Grip'),
('Douleur après test', 'axe010', 'Hand-Grip'),
('Difficulté de la tâche', 'axe620', 'Hand-Grip'),
('Commentaires', 'commentaire', 'Hand-Grip'),
('Stades', 'axe17', 'Abdominal Strength Test'),
('Difficulté', 'axe620', 'Abdominal Strength Test'),
('Commentaires', 'commentaire', 'Abdominal Strength Test'),
('Masse Medicine Ball (Kg)', 'int', 'Seated Medicine Ball Throw'),
('Distance (mètres)', 'int', 'Seated Medicine Ball Throw'),
('Position', 'string', 'Seated Medicine Ball Throw'),
('Difficulté', 'axe620', 'Seated Medicine Ball Throw'),
('Technique de lancé', 'string', 'Seated Medicine Ball Throw'),
('Commentaires', 'commentaire', 'Seated Medicine Ball Throw'),
('Distance réalisée (centimètres)', 'int', 'Sargent test'),
('Difficulté durant le test', 'axe620', 'Sargent test'),
('Technique utilisée', 'string', 'Sargent test'),
('Variante utilisée', 'string', 'Sargent test'),
('Commentaires', 'commentaire', 'Sargent test');

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
('Endurance Cardio-respiratoire', 'Test de marche de 6 minutes', NULL),
('Endurance Cardio-respiratoire', 'Harvard Step Test', NULL),
('Endurance Cardio-respiratoire', 'Test de marche de 10 mètres', NULL),
('Endurance Cardio-respiratoire', 'Step Test de 3 minutes', NULL),
('Endurance de Force', 'Assis-debout 30 secondes', NULL),
('Endurance de Force', 'Shirado-Ito', NULL),
('Endurance de Force', 'Sorensen', NULL),
('Force musculaire', '1-RM', NULL),
('Force musculaire', 'Hand-Grip', NULL),
('Force musculaire', 'Abdominal Strength Test', NULL),
('Force musculaire', 'Seated Medicine Ball Throw', NULL),
('Souplesse', 'Distance doigt sol', NULL),
('Souplesse', 'Sit and reach', NULL),
('Souplesse', 'Chair sit and reach', NULL),
('Puissance', 'Sargent test', NULL),
('Equilibre', 'One-leg balance', NULL),
('Equilibre', 'Romberg test', NULL),
('Equilibre', 'FSST', NULL),
('Equilibre', 'Timed Up and Go', NULL),
('Equilibre', 'FRT', NULL);

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
