-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 11 mai 2018 à 05:16
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
  `etage` int(11) NOT NULL,
  `num_appartement` int(11) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ID_ville` int(11) NOT NULL,
  `ID_pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`ID`, `num_rue`, `rue`, `etage`, `num_appartement`, `code_postal`, `ID_ville`, `ID_pays`) VALUES
(1, 1, 'rue Victor Hugo', 2, 4, 75005, 1, 1),
(2, 2, 'impasse Victor Hugo', 0, 0, 85330, 2, 1),
(3, 15, 'boulevard Baudelaire', 1, 3, 75006, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `appartenance_maison`
--

CREATE TABLE `appartenance_maison` (
  `ID` int(11) NOT NULL,
  `ID_personne` int(11) NOT NULL,
  `ID_habitation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appartenance_maison`
--

INSERT INTO `appartenance_maison` (`ID`, `ID_personne`, `ID_habitation`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `cgu`
--

CREATE TABLE `cgu` (
  `ID` int(11) NOT NULL,
  `date_modification` date NOT NULL,
  `texte_cgu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `type` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `niveau_batterie` int(11) NOT NULL,
  `ID_piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `controleur`
--

INSERT INTO `controleur` (`ID`, `reference`, `categorie`, `type`, `etat`, `niveau_batterie`, `ID_piece`) VALUES
(1, '0001', 'Température', 'capteur', 'éteint', 100, 1),
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
(14, '0003', 'Humidité', 'capteur', 'éteint', 100, 1),
(15, '0002', 'Lumière', 'actionneur', 'Éteint', 0, 4),
(16, '0004', 'Présence', 'capteur', 'Allumé', 100, 1),
(17, '0005', 'Store', 'actioneur', '100', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `donnee`
--

CREATE TABLE `donnee` (
  `ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `donnee` text NOT NULL,
  `ID_controleur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Appartement HUGO', 275, 1),
(2, 'Villa campagne HUGO', 540, 2),
(3, 'Appartement BAUDELAIRE', 150, 3);

-- --------------------------------------------------------

--
-- Structure de la table `lien_control_program`
--

CREATE TABLE `lien_control_program` (
  `ID` int(11) NOT NULL,
  `ID_controleur` int(11) NOT NULL,
  `ID_programmation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `pays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`ID`, `pays`) VALUES
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
  `mot_de_passe` char(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `salt` int(11) NOT NULL,
  `forfait` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `ID_parent` int(11) NOT NULL,
  `ID_adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`ID`, `nom`, `prenom`, `statut`, `num_fixe`, `num_mobile`, `email`, `mot_de_passe`, `forfait`, `etat`, `ID_parent`, `ID_adresse`) VALUES
(1, 'HUGO', 'Victor', 'Primaire', 211223344, 611223344, 'victorhugo@gmail.com', 'victorhugo', '', 0, 0, 1),
(2, 'BAUDELAIRE', 'Charles', 'Primaire', 100112233, 600112233, 'charlesbaudelaire@gmail.com', 'charlesbaudelaire', '', 0, 0, 3);

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
(23, 'Cave', 100, 2);

-- --------------------------------------------------------

--
-- Structure de la table `programmation`
--

CREATE TABLE `programmation` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type_action` varchar(255) NOT NULL,
  `date_execution` date NOT NULL,
  `ID_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact_domisep`
--
ALTER TABLE `contact_domisep`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `controleur`
--
ALTER TABLE `controleur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `donnee`
--
ALTER TABLE `donnee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lien_droit_personne`
--
ALTER TABLE `lien_droit_personne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `programmation`
--
ALTER TABLE `programmation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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
