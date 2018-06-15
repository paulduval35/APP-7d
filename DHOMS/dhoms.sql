-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 16 juin 2018 à 00:41
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dhoms`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `ID` int(11) NOT NULL,
  `num_rue` int(11) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ID_ville` int(11) NOT NULL,
  `ID_pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`ID`, `num_rue`, `rue`, `code_postal`, `ID_ville`, `ID_pays`) VALUES
(1, 1, 'rue des Sith', 75005, 1, 1),
(2, 2, 'impasse de l\'Empire', 85330, 2, 1),
(3, 15, 'boulevard Chewbacca', 75006, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `appartenance_maison`
--

CREATE TABLE `appartenance_maison` (
  `ID` int(11) NOT NULL,
  `Statut` varchar(255) NOT NULL,
  `ID_personne` int(11) NOT NULL,
  `ID_habitation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appartenance_maison`
--

INSERT INTO `appartenance_maison` (`ID`, `Statut`, `ID_personne`, `ID_habitation`) VALUES
(1, 'Primaire', 1, 1),
(2, 'Primaire', 1, 2),
(3, 'Primaire', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `cgu`
--

CREATE TABLE `cgu` (
  `ID` int(11) NOT NULL,
  `date_modification` date NOT NULL,
  `texte_cgu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cgu`
--

INSERT INTO `cgu` (`ID`, `date_modification`, `texte_cgu`) VALUES
(1, '2017-11-01', 'Copier/Coller le texte des CGU ic :)'),
(2, '2018-06-08', ' Copier/Coller le texte des CGU ici :)');

-- --------------------------------------------------------

--
-- Structure de la table `contact_domisep`
--

CREATE TABLE `contact_domisep` (
  `ID` int(11) NOT NULL,
  `num_tel` int(10) NOT NULL,
  `email` int(11) NOT NULL,
  `horaires_disponibilité` text NOT NULL,
  `ID_adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `controleur`
--

CREATE TABLE `controleur` (
  `ID` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `numero_serie` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `niveau_batterie` int(11) NOT NULL,
  `ID_piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `controleur`
--

INSERT INTO `controleur` (`ID`, `reference`, `categorie`, `numero_serie`, `type`, `etat`, `niveau_batterie`, `ID_piece`) VALUES
(1, '0001', 'Température', '', 'capteur', 'Éteint', 100, 1),
(2, '0002', 'Lumière', '', 'actionneur', 'Allumé', 0, 1),
(3, '0001', 'Température', '', 'capteur', 'Allumé', 100, 2),
(4, '0001', 'Température', '', 'capteur', 'Allumé', 100, 3),
(5, '0001', 'Température', '', 'capteur', 'Allumé', 100, 5),
(6, '0002', 'Lumière', '', 'actionneur', 'Allumé', 0, 3),
(7, '0001', 'Température', '', 'capteur', 'Allumé', 100, 4),
(8, '0003', 'Humidité', '', 'capteur', 'Allumé', 100, 3),
(9, '0001', 'Température', '', 'capteur', 'Allumé', 100, 6),
(10, '0001', 'Température', '', 'capteur', 'Allumé', 100, 7),
(11, '0001', 'Température', '', 'capteur', 'Allumé', 100, 8),
(12, '0001', 'Température', '', 'capteur', 'Allumé', 100, 9),
(13, '0002', 'Lumière', '', 'actionneur', 'Allumé', 0, 2),
(14, '0003', 'Humidité', '', 'capteur', 'Éteint', 100, 1),
(15, '0002', 'Lumière', '', 'actionneur', 'Éteint', 0, 4),
(16, '0004', 'Présence', '', 'capteur', 'Allumé', 100, 1),
(17, '0005', 'Store', '', 'actioneur', '100', 0, 1),
(18, 'HM74', 'Humidité', '', 'capteur', '', 0, 1),
(19, 'PR036', 'Présence', 'goiqrgosn-obboub-oihobob-ikoiknl', 'capteur', '', 0, 1),
(20, 'LX256', 'Lumière', 'BB7', 'actionneur', '', 0, 1),
(21, 'HM25', 'Humidité', '', 'capteur', '', 0, 0),
(22, 'PR12', 'Présence', 'BB7', 'capteur', 'Allumé', 0, 24),
(23, 'LX758', 'Lumière', 'Bj', 'actionneur', 'Allumé', 0, 24),
(24, 'XF126', 'Température', 'fgdfgdfg', 'capteur', '', 0, 24),
(25, 'HM74', 'Humidité', 'BB7', 'capteur', '', 0, 24);

-- --------------------------------------------------------

--
-- Structure de la table `donnee`
--

CREATE TABLE `donnee` (
  `ID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `donnee` int(11) NOT NULL,
  `ID_controleur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donnee`
--

INSERT INTO `donnee` (`ID`, `date`, `donnee`, `ID_controleur`) VALUES
(1, '2018-05-25 12:10:20', 20, 1),
(2, '2018-06-02 14:24:25', 18, 1),
(3, '2018-06-02 10:23:37', 18, 3),
(4, '2018-06-01 13:24:40', 19, 4),
(5, '2018-06-01 08:20:36', 19, 5),
(6, '2018-06-02 15:23:22', 17, 7),
(7, '2018-06-02 12:19:18', 42, 8),
(8, '2018-06-04 19:15:20', 20, 9),
(9, '2018-06-02 14:23:17', 18, 10),
(10, '2018-06-04 20:17:17', 19, 11),
(11, '2018-06-02 16:20:25', 19, 12),
(12, '2018-06-02 13:10:26', 44, 14),
(13, '2018-06-01 18:15:17', 85, 17),
(14, '2018-06-11 10:26:23', 1, 2),
(15, '2018-06-11 10:26:49', 1, 2),
(16, '2018-06-11 10:29:10', 0, 2),
(17, '2018-06-11 14:15:23', 1, 2),
(18, '2018-06-11 23:32:09', 1, 16),
(19, '2018-06-11 23:32:12', 0, 16),
(20, '2018-06-11 23:32:14', 1, 16),
(21, '2018-06-11 23:47:49', 0, 16),
(22, '2018-06-11 23:47:55', 0, 2),
(23, '2018-06-11 23:47:59', 1, 2),
(24, '2018-06-11 23:48:04', 0, 2),
(25, '2018-06-11 23:48:12', 1, 2),
(26, '2018-06-11 23:49:15', 0, 2),
(27, '2018-06-11 23:49:20', 1, 2),
(28, '2018-06-11 23:49:25', 1, 16),
(29, '2018-06-11 23:51:31', 0, 2),
(30, '2018-06-11 23:51:58', 1, 2),
(31, '2018-06-11 23:52:03', 0, 2),
(32, '2018-06-11 23:55:14', 1, 2),
(33, '2018-06-11 23:55:18', 0, 2),
(34, '2018-06-12 00:07:52', 1, 2),
(35, '2018-06-12 00:07:56', 0, 2),
(36, '2018-06-12 00:10:34', 1, 2),
(37, '2018-06-12 00:10:39', 0, 2),
(38, '2018-06-12 00:12:56', 1, 2),
(39, '2018-06-12 00:13:00', 0, 2),
(40, '2018-06-12 00:47:39', 1, 2),
(41, '2018-06-12 00:47:43', 0, 2),
(42, '2018-06-12 00:54:48', 1, 2),
(43, '2018-06-12 13:50:05', 1, 23),
(44, '2018-06-13 09:32:35', 0, 23),
(45, '2018-06-13 10:52:55', 0, 2),
(46, '2018-06-13 10:52:58', 1, 2),
(47, '2018-06-13 10:53:19', 0, 2),
(48, '2018-06-13 10:53:21', 1, 2),
(49, '2018-06-13 10:53:50', 0, 16),
(50, '2018-06-13 10:53:52', 1, 16),
(51, '2018-06-13 10:53:54', 0, 2),
(52, '2018-06-13 10:53:55', 1, 2),
(53, '2018-06-13 12:01:31', 0, 2),
(54, '2018-06-13 12:01:33', 1, 2),
(55, '2018-06-13 12:02:12', 0, 2),
(56, '2018-06-13 12:02:15', 1, 2),
(57, '2018-06-13 12:02:24', 0, 2),
(58, '2018-06-13 12:02:26', 1, 2),
(59, '2018-06-13 12:03:27', 0, 2),
(60, '2018-06-13 12:03:38', 1, 2),
(61, '2018-06-13 15:06:17', 0, 2),
(62, '2018-06-13 15:06:20', 1, 2),
(63, '2018-06-13 16:27:51', 1, 23),
(64, '2018-06-13 16:28:13', 1, 22),
(65, '2018-06-13 16:28:15', 0, 22),
(66, '2018-06-13 19:05:14', 0, 2),
(67, '2018-06-13 19:05:19', 1, 22),
(68, '2018-06-13 19:16:32', 0, 23),
(69, '2018-06-13 19:16:34', 1, 23),
(70, '2018-06-13 19:21:23', 1, 2),
(71, '2018-06-13 19:21:26', 0, 23),
(72, '2018-06-13 19:21:30', 0, 22),
(73, '2018-06-13 19:21:32', 1, 22),
(74, '2018-06-13 19:21:36', 1, 23),
(75, '2018-06-15 12:40:56', 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE `droit` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `titre` text COLLATE utf8_bin NOT NULL,
  `reponse` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`ID`, `titre`, `reponse`) VALUES
(1, 'Comment ajouter une maison ?', 'Pour ajouter une maison il existe plusieurs moyens. A l\'inscription il vous est automatiquement demandé d\'ajouter votre maison principale. Vous pouvez ensuite ajouter une maison depuis votre tableau de bord en cliquant sur \"Ajouter une Maison\" puis en complétant le formulaire d\'ajout.'),
(2, 'Comment ajouter ou supprimer une pièce dans ma maison ?', 'Sur le tableau de bord, un bouton \"Gérer les pièces\" est présent et vous permet soit d\'ajouter ou de supprimer une pièce.'),
(3, 'Comment ajouter de nouveaux capteurs dans ma maison ?', 'Il est très facile d\'ajouter un capteur ou un actionneur depuis le site une fois avoir sélectionné la pièce dans le tableau de bord. <br>\r\nEn ce qui concerne le remplacement d\'un capteur défectueux ou l\'ajout d\'un capteur dans votre maison, il est nécessaire de prendre contact pour être redirigé vers la maintenance technique.\r\n'),
(4, 'Combien coûte une nouvelle prise en charge ?', 'La société DHOMS vous invite à nous appeler, dans l’onglet contact, pour recevoir des offres personnelles en fonction de vos critères.'),
(5, 'Où puis-je trouver le numéro de série de mon contrôleur ?', 'Lors de l\'installation de votre système domotique un document vous a été remis indiquant la liste des capteurs et actionneurs, leur emplacement et leur numéro de série. <br>\r\nSi vous n\'avez plus ce document mais que vous pouvez accéder au capteur ou à l\'actionneur facilement, ce numéro est indiqué sur une étiquette ou directement gravé. Il comporte en moyenne une dizaine de chiffres et de lettres. <br>\r\nSi toutefois cela n\'est pas possible, vous pouvez nous contacter via le formulaire de contact ou en nous appelant directement.'),
(6, 'Puis-je gérer manuellement mon système domotique ?', 'La plupart des actionneurs qui sont pilotables depuis le tableau de bord comprennent un accès manuel. Cet accès manuel dépend de chaque type de capteur ou actionneur et du modèle de celui-ci. En cas de soucis pour accéder manuellement à un contrôleur, contactez nous via le formulaire de contact.');

-- --------------------------------------------------------

--
-- Structure de la table `forfait`
--

CREATE TABLE `forfait` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire_immeuble`
--

CREATE TABLE `gestionnaire_immeuble` (
  `ID` int(11) NOT NULL,
  `nom_immeuble` varchar(255) NOT NULL,
  `conso_globale` int(11) NOT NULL,
  `ID_personne` int(11) NOT NULL,
  `ID_adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `habitation`
--

CREATE TABLE `habitation` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `surface` int(11) NOT NULL,
  `ID_adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `habitation`
--

INSERT INTO `habitation` (`ID`, `nom`, `surface`, `ID_adresse`) VALUES
(1, 'Appartement SKYWALKER', 275, 1),
(2, 'Villa campagne SKYWALKER', 540, 2),
(3, 'Appartement SOLO', 150, 3);

-- --------------------------------------------------------

--
-- Structure de la table `lien_control_program`
--

CREATE TABLE `lien_control_program` (
  `ID` int(11) NOT NULL,
  `ID_controleur` int(11) NOT NULL,
  `ID_programmation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lien_control_program`
--

INSERT INTO `lien_control_program` (`ID`, `ID_controleur`, `ID_programmation`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 17, 4),
(5, 1, 5),
(6, 16, 6),
(7, 16, 7),
(8, 16, 8),
(9, 17, 9),
(10, 16, 10),
(11, 2, 11),
(12, 2, 12),
(13, 2, 13),
(14, 2, 14),
(15, 2, 15),
(16, 2, 16),
(17, 16, 17),
(18, 2, 18),
(19, 2, 19),
(20, 2, 20),
(21, 2, 21),
(22, 2, 22),
(23, 2, 23),
(24, 2, 24),
(25, 2, 25),
(26, 2, 26),
(27, 2, 27),
(28, 2, 28),
(29, 2, 29),
(30, 2, 30),
(31, 2, 31),
(32, 23, 32),
(33, 23, 33),
(34, 2, 34),
(35, 2, 35),
(36, 17, 36),
(37, 17, 37),
(38, 1, 38),
(39, 2, 39),
(40, 2, 40),
(41, 1, 41),
(42, 1, 42),
(43, 17, 43),
(44, 16, 44),
(45, 16, 45),
(46, 2, 46),
(47, 2, 47),
(48, 2, 48),
(49, 2, 49),
(50, 2, 50),
(51, 2, 51),
(52, 2, 52),
(53, 2, 53),
(54, 2, 54),
(55, 1, 55),
(56, 2, 56),
(57, 2, 57),
(58, 2, 58),
(59, 1, 59),
(60, 23, 60),
(61, 22, 61),
(62, 22, 62),
(63, 24, 63),
(64, 1, 64),
(65, 2, 65),
(66, 22, 66),
(67, 23, 67),
(68, 23, 68),
(69, 2, 69),
(70, 23, 70),
(71, 22, 71),
(72, 22, 72),
(73, 23, 73),
(74, 24, 74),
(75, 6, 75);

-- --------------------------------------------------------

--
-- Structure de la table `lien_droit_personne`
--

CREATE TABLE `lien_droit_personne` (
  `ID` int(11) NOT NULL,
  `ID_droit` int(11) NOT NULL,
  `ID_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL,
  `reponse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`ID`, `objet`, `date`, `message`, `reponse`) VALUES
(1, 'Capteur température ', '2018-06-15', 'Panne du capteur de température de ma cuisine !', 'Nous allons vous envoyer un nouveau capteur au plus vite !'),
(2, 'test', '2018-06-15', 'ça va ?', '');

-- --------------------------------------------------------

--
-- Structure de la table `panne`
--

CREATE TABLE `panne` (
  `ID` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_signalisation` date NOT NULL,
  `date_reparation` date NOT NULL,
  `etat` varchar(255) NOT NULL,
  `ID_controleur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`ID`, `nom`) VALUES
(1, 'FRANCE'),
(2, 'BELGIQUE'),
(3, 'ALLEMAGNE'),
(4, 'LUXEMBOURG'),
(5, 'SUISSE');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `num_fixe` int(10) NOT NULL,
  `num_mobile` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `forfait` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `ID_parent` int(11) NOT NULL,
  `ID_adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`ID`, `nom`, `prenom`, `statut`, `num_fixe`, `num_mobile`, `email`, `mot_de_passe`, `forfait`, `etat`, `ID_parent`, `ID_adresse`) VALUES
(1, 'SKYWALKER', 'ANAKIN', 'Primaire', 0, 0, 'anakinskywalker@gmail.com', '$2y$10$bkKx7tt9e7nX2ooDg2ZI5eLYbVh1Oo5Vzquz/VgGNecdXXlG8JT1m', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `personneconnecte`
--

CREATE TABLE `personneconnecte` (
  `ID` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `personneconnecte`
--

INSERT INTO `personneconnecte` (`ID`, `id_personne`) VALUES
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `surface` int(11) NOT NULL,
  `ID_habitation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`ID`, `nom`, `surface`, `ID_habitation`) VALUES
(1, 'Chambre 1', 30, 1),
(2, 'Chambre 2', 20, 1),
(3, 'Chambre 3', 30, 1),
(4, 'Salon', 60, 1),
(5, 'Salle de bain', 15, 1),
(6, 'Entrée', 10, 1),
(7, 'Couloir', 10, 1),
(8, 'Cuisine', 20, 1),
(9, 'Salle', 80, 1),
(10, 'Chambre 1', 30, 2),
(11, 'Chambre 2', 40, 2),
(12, 'Chambre 3', 20, 2),
(13, 'Chambre 4', 20, 2),
(14, 'Salle', 80, 2),
(15, 'Salon 1', 50, 2),
(16, 'Salon 2', 40, 2),
(17, 'Cuisine ', 30, 2),
(18, 'Salle de bain 1', 20, 2),
(19, 'Salle de bain 2', 15, 2),
(20, 'Entrée', 20, 2),
(21, 'Couloir', 15, 2),
(22, 'Véranda', 60, 2),
(23, 'Cave', 100, 2),
(24, 'Global', 0, 1),
(25, 'Global', 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `programmation`
--

CREATE TABLE `programmation` (
  `ID` int(11) NOT NULL,
  `valeur_action` int(255) NOT NULL,
  `date_execution` datetime NOT NULL,
  `ID_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `programmation`
--

INSERT INTO `programmation` (`ID`, `valeur_action`, `date_execution`, `ID_personne`) VALUES
(1, 27, '2018-06-11 10:31:00', 1),
(2, 18, '2018-06-11 11:39:32', 1),
(3, 1, '2018-06-11 14:15:23', 1),
(4, 0, '2018-06-11 14:15:53', 1),
(5, 29, '2018-06-11 18:22:04', 1),
(6, 1, '2018-06-11 23:32:09', 1),
(7, 0, '2018-06-11 23:32:12', 1),
(8, 1, '2018-06-11 23:32:14', 1),
(9, 51, '2018-06-11 23:32:24', 1),
(10, 0, '2018-06-11 23:47:49', 1),
(11, 0, '2018-06-11 23:47:55', 1),
(12, 1, '2018-06-11 23:47:59', 1),
(13, 0, '2018-06-11 23:48:04', 1),
(14, 1, '2018-06-11 23:48:12', 1),
(15, 0, '2018-06-11 23:49:15', 1),
(16, 1, '2018-06-11 23:49:20', 1),
(17, 1, '2018-06-11 23:49:25', 1),
(18, 0, '2018-06-11 23:51:31', 1),
(19, 1, '2018-06-11 23:51:58', 1),
(20, 0, '2018-06-11 23:52:03', 1),
(21, 1, '2018-06-11 23:55:14', 1),
(22, 0, '2018-06-11 23:55:18', 1),
(23, 1, '2018-06-12 00:07:52', 1),
(24, 0, '2018-06-12 00:07:56', 1),
(25, 1, '2018-06-12 00:10:34', 1),
(26, 0, '2018-06-12 00:10:39', 1),
(27, 1, '2018-06-12 00:12:56', 1),
(28, 0, '2018-06-12 00:13:00', 1),
(29, 1, '2018-06-12 00:47:39', 1),
(30, 0, '2018-06-12 00:47:43', 1),
(31, 1, '2018-06-12 00:54:48', 1),
(32, 1, '2018-06-12 13:50:05', 1),
(33, 0, '2018-06-13 09:32:35', 1),
(34, 0, '2018-06-13 10:52:55', 1),
(35, 1, '2018-06-13 10:52:58', 1),
(36, 63, '2018-06-13 10:53:08', 1),
(37, 21, '2018-06-13 10:53:13', 1),
(38, 27, '2018-06-13 10:53:18', 1),
(39, 0, '2018-06-13 10:53:19', 1),
(40, 1, '2018-06-13 10:53:21', 1),
(41, 25, '2018-06-13 10:53:28', 1),
(42, 10, '2018-06-13 10:53:33', 1),
(43, 26, '2018-06-13 10:53:39', 1),
(44, 0, '2018-06-13 10:53:50', 1),
(45, 1, '2018-06-13 10:53:52', 1),
(46, 0, '2018-06-13 10:53:54', 1),
(47, 1, '2018-06-13 10:53:55', 1),
(48, 0, '2018-06-13 12:01:31', 1),
(49, 1, '2018-06-13 12:01:33', 1),
(50, 0, '2018-06-13 12:02:12', 1),
(51, 1, '2018-06-13 12:02:15', 1),
(52, 0, '2018-06-13 12:02:24', 1),
(53, 1, '2018-06-13 12:02:26', 1),
(54, 0, '2018-06-13 12:03:27', 1),
(55, 25, '2018-06-13 12:03:34', 1),
(56, 1, '2018-06-13 12:03:38', 1),
(57, 0, '2018-06-13 15:06:17', 1),
(58, 1, '2018-06-13 15:06:20', 1),
(59, 21, '2018-06-13 15:11:51', 1),
(60, 1, '2018-06-13 16:27:51', 1),
(61, 1, '2018-06-13 16:28:13', 1),
(62, 0, '2018-06-13 16:28:15', 1),
(63, 26, '2018-06-13 16:28:17', 1),
(64, 28, '2018-06-13 19:05:07', 1),
(65, 0, '2018-06-13 19:05:14', 1),
(66, 1, '2018-06-13 19:05:19', 1),
(67, 0, '2018-06-13 19:16:32', 1),
(68, 1, '2018-06-13 19:16:34', 1),
(69, 1, '2018-06-13 19:21:23', 1),
(70, 0, '2018-06-13 19:21:26', 1),
(71, 0, '2018-06-13 19:21:30', 1),
(72, 1, '2018-06-13 19:21:32', 1),
(73, 1, '2018-06-13 19:21:36', 1),
(74, 24, '2018-06-13 19:21:38', 1),
(75, 1, '2018-06-15 12:40:56', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reference_capteur`
--

CREATE TABLE `reference_capteur` (
  `ID` int(11) NOT NULL,
  `reference` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reference_capteur`
--

INSERT INTO `reference_capteur` (`ID`, `reference`, `categorie`, `type`) VALUES
(1, 'BX75', 'Température', 'capteur'),
(2, 'BX72', 'Température', 'capteur'),
(3, 'XF25', 'Température', 'capteur'),
(4, 'XF126', 'Température', 'capteur'),
(5, 'LX715', 'Lumière', 'actionneur'),
(6, 'LX256', 'Lumière', 'actionneur'),
(7, 'LX758', 'Lumière', 'actionneur'),
(8, 'LX512', 'Lumière', 'actionneur'),
(9, 'LXX23', 'Lumière', 'actionneur'),
(10, 'HM25', 'Humidité', 'capteur'),
(11, 'HM74', 'Humidité', 'capteur'),
(12, 'HMX226', 'Humidité', 'capteur'),
(13, 'PR12', 'Présence', 'capteur'),
(14, 'PR036', 'Présence', 'capteur'),
(15, 'PR786', 'Présence', 'capteur'),
(16, 'STR52', 'Store', 'actionneur'),
(17, 'STR8', 'Store', 'actionneur'),
(18, 'STR96', 'Store', 'actionneur'),
(19, 'FNT223', 'plus', 'actionneur'),
(20, 'FNT45', 'plus', 'actionneur'),
(21, 'FNT76', 'plus', 'actionneur');

-- --------------------------------------------------------

--
-- Structure de la table `ticket_sav`
--

CREATE TABLE `ticket_sav` (
  `ID` int(11) NOT NULL,
  `ID_message` int(11) NOT NULL,
  `ID_client` int(11) NOT NULL,
  `ID_personne_sav` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`ID`, `nom`) VALUES
(1, 'PARIS'),
(2, 'Noirmoutier-en-l\'Île');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `appartenance_maison`
--
ALTER TABLE `appartenance_maison`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `cgu`
--
ALTER TABLE `cgu`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `contact_domisep`
--
ALTER TABLE `contact_domisep`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `controleur`
--
ALTER TABLE `controleur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `donnee`
--
ALTER TABLE `donnee`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `forfait`
--
ALTER TABLE `forfait`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `gestionnaire_immeuble`
--
ALTER TABLE `gestionnaire_immeuble`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `habitation`
--
ALTER TABLE `habitation`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `lien_control_program`
--
ALTER TABLE `lien_control_program`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `lien_droit_personne`
--
ALTER TABLE `lien_droit_personne`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `panne`
--
ALTER TABLE `panne`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `programmation`
--
ALTER TABLE `programmation`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `reference_capteur`
--
ALTER TABLE `reference_capteur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `ticket_sav`
--
ALTER TABLE `ticket_sav`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `appartenance_maison`
--
ALTER TABLE `appartenance_maison`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cgu`
--
ALTER TABLE `cgu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contact_domisep`
--
ALTER TABLE `contact_domisep`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `controleur`
--
ALTER TABLE `controleur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `donnee`
--
ALTER TABLE `donnee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `forfait`
--
ALTER TABLE `forfait`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gestionnaire_immeuble`
--
ALTER TABLE `gestionnaire_immeuble`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `habitation`
--
ALTER TABLE `habitation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `lien_control_program`
--
ALTER TABLE `lien_control_program`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `lien_droit_personne`
--
ALTER TABLE `lien_droit_personne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `panne`
--
ALTER TABLE `panne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `programmation`
--
ALTER TABLE `programmation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `reference_capteur`
--
ALTER TABLE `reference_capteur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `ticket_sav`
--
ALTER TABLE `ticket_sav`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
