-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 09:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhoms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresse`
--

CREATE TABLE `adresse` (
  `ID` int(11) NOT NULL,
  `num_rue` int(11) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `etage` int(11) NOT NULL,
  `num_appartement` int(11) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ID_ville` int(11) NOT NULL,
  `ID_pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adresse`
--

INSERT INTO `adresse` (`ID`, `num_rue`, `rue`, `etage`, `num_appartement`, `code_postal`, `ID_ville`, `ID_pays`) VALUES
(1, 1, 'rue des Sith', 2, 4, 75005, 1, 1),
(2, 2, 'impasse de l\'Empire', 0, 0, 85330, 2, 1),
(3, 15, 'boulevard Chewbacca', 1, 3, 75006, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `appartenance_maison`
--

CREATE TABLE `appartenance_maison` (
  `ID` int(11) NOT NULL,
  `ID_personne` int(11) NOT NULL,
  `ID_habitation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appartenance_maison`
--

INSERT INTO `appartenance_maison` (`ID`, `ID_personne`, `ID_habitation`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cgu`
--

CREATE TABLE `cgu` (
  `ID` int(11) NOT NULL,
  `date_modification` date NOT NULL,
  `texte_cgu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cgu`
--

INSERT INTO `cgu` (`ID`, `date_modification`, `texte_cgu`) VALUES
(1, '2018-06-05', 'Vidé car sinon ça marche pas l\'import ;)');

-- --------------------------------------------------------

--
-- Table structure for table `contact_domisep`
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
-- Table structure for table `controleur`
--

CREATE TABLE `controleur` (
  `ID` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `niveau_batterie` int(11) NOT NULL,
  `ID_piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `controleur`
--

INSERT INTO `controleur` (`ID`, `reference`, `categorie`, `type`, `etat`, `niveau_batterie`, `ID_piece`) VALUES
(1, '0001', 'Température', 'capteur', 'Éteint', 100, 1),
(2, '0002', 'Lumière', 'actionneur', 'Allumé', 0, 1),
(3, '0001', 'Température', 'capteur', 'Allumé', 100, 2),
(4, '0001', 'Température', 'capteur', 'Allumé', 100, 3),
(5, '0001', 'Température', 'capteur', 'Allumé', 100, 5),
(6, '0002', 'Lumière', 'actionneur', 'Allumé', 0, 3),
(7, '0001', 'Température', 'capteur', 'Allumé', 100, 4),
(8, '0003', 'Humidité', 'capteur', 'Allumé', 100, 3),
(9, '0001', 'Température', 'capteur', 'Allumé', 100, 6),
(10, '0001', 'Température', 'capteur', 'Allumé', 100, 7),
(11, '0001', 'Température', 'capteur', 'Allumé', 100, 8),
(12, '0001', 'Température', 'capteur', 'Allumé', 100, 9),
(13, '0002', 'Lumière', 'actionneur', 'Allumé', 0, 2),
(14, '0003', 'Humidité', 'capteur', 'Éteint', 100, 1),
(15, '0002', 'Lumière', 'actionneur', 'Éteint', 0, 4),
(16, '0004', 'Présence', 'capteur', 'Allumé', 100, 1),
(17, '0005', 'Store', 'actioneur', 'Éteint', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `donnee`
--

CREATE TABLE `donnee` (
  `ID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `donnee` int(11) NOT NULL,
  `ID_controleur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donnee`
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
(13, '2018-06-01 18:15:17', 85, 17);

-- --------------------------------------------------------

--
-- Table structure for table `droit`
--

CREATE TABLE `droit` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `titre` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `reponse` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forfait`
--

CREATE TABLE `forfait` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gestionnaire_immeuble`
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
-- Table structure for table `habitation`
--

CREATE TABLE `habitation` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `surface` int(11) NOT NULL,
  `ID_adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habitation`
--

INSERT INTO `habitation` (`ID`, `nom`, `surface`, `ID_adresse`) VALUES
(1, 'Appartement SKYWALKER', 275, 1),
(2, 'Villa campagne SKYWALKER', 540, 2),
(3, 'Appartement SOLO', 150, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lien_control_program`
--

CREATE TABLE `lien_control_program` (
  `ID` int(11) NOT NULL,
  `ID_controleur` int(11) NOT NULL,
  `ID_programmation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lien_droit_personne`
--

CREATE TABLE `lien_droit_personne` (
  `ID` int(11) NOT NULL,
  `ID_droit` int(11) NOT NULL,
  `ID_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `panne`
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
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`ID`, `nom`) VALUES
(1, 'FRANCE'),
(2, 'BELGIQUE'),
(3, 'ALLEMAGNE'),
(4, 'LUXEMBOURG'),
(5, 'SUISSE');

-- --------------------------------------------------------

--
-- Table structure for table `personne`
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
-- Dumping data for table `personne`
--

INSERT INTO `personne` (`ID`, `nom`, `prenom`, `statut`, `num_fixe`, `num_mobile`, `email`, `mot_de_passe`, `forfait`, `etat`, `ID_parent`, `ID_adresse`) VALUES
(1, 'SKYWALKER', 'Anakin', 'Primaire', 211223344, 611223344, 'anakinskywalker@gmail.com', 'anakinskywalker', '', 0, 0, 1),
(2, 'SOLO', 'Han', 'Primaire', 100112233, 600112233, 'hansolo@gmail.com', 'hansolo', '', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `piece`
--

CREATE TABLE `piece` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `surface` int(11) NOT NULL,
  `ID_habitation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piece`
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
(23, 'Cave', 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `programmation`
--

CREATE TABLE `programmation` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type_action` varchar(255) NOT NULL,
  `date_execution` datetime NOT NULL,
  `ID_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reference_capteur`
--

CREATE TABLE `reference_capteur` (
  `ID` int(11) NOT NULL,
  `reference` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference_capteur`
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
(15, 'PR786', 'Présence', 'capteur');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_sav`
--

CREATE TABLE `ticket_sav` (
  `ID` int(11) NOT NULL,
  `ID_message` int(11) NOT NULL,
  `ID_client` int(11) NOT NULL,
  `ID_personne_sav` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`ID`, `nom`) VALUES
(1, 'PARIS'),
(2, 'Noirmoutier-en-l\'Île');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `appartenance_maison`
--
ALTER TABLE `appartenance_maison`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cgu`
--
ALTER TABLE `cgu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_domisep`
--
ALTER TABLE `contact_domisep`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `controleur`
--
ALTER TABLE `controleur`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `donnee`
--
ALTER TABLE `donnee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `forfait`
--
ALTER TABLE `forfait`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gestionnaire_immeuble`
--
ALTER TABLE `gestionnaire_immeuble`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `habitation`
--
ALTER TABLE `habitation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lien_control_program`
--
ALTER TABLE `lien_control_program`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lien_droit_personne`
--
ALTER TABLE `lien_droit_personne`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `panne`
--
ALTER TABLE `panne`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `programmation`
--
ALTER TABLE `programmation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reference_capteur`
--
ALTER TABLE `reference_capteur`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ticket_sav`
--
ALTER TABLE `ticket_sav`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appartenance_maison`
--
ALTER TABLE `appartenance_maison`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cgu`
--
ALTER TABLE `cgu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_domisep`
--
ALTER TABLE `contact_domisep`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `controleur`
--
ALTER TABLE `controleur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `donnee`
--
ALTER TABLE `donnee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `droit`
--
ALTER TABLE `droit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forfait`
--
ALTER TABLE `forfait`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gestionnaire_immeuble`
--
ALTER TABLE `gestionnaire_immeuble`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `habitation`
--
ALTER TABLE `habitation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lien_control_program`
--
ALTER TABLE `lien_control_program`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lien_droit_personne`
--
ALTER TABLE `lien_droit_personne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panne`
--
ALTER TABLE `panne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personne`
--
ALTER TABLE `personne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `piece`
--
ALTER TABLE `piece`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `programmation`
--
ALTER TABLE `programmation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reference_capteur`
--
ALTER TABLE `reference_capteur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ticket_sav`
--
ALTER TABLE `ticket_sav`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
