-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 01 juin 2018 à 11:49
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
(1, 1, 'rue Victor Hugo', 75005, 1, 1),
(2, 2, 'impasse Victor Hugo', 85330, 2, 1),
(3, 15, 'boulevard Baudelaire', 75006, 1, 1),

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

--
-- Déchargement des données de la table `cgu`
--

INSERT INTO `cgu` (`ID`, `date_modification`, `texte_cgu`) VALUES
(1, '2018-06-01', ' <div id=\"cgu\">\r\n            <div>\r\n                <h2>Conditions Générales d’Utilisation</h2>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\"> I. A propos de nous\r\n                    <p class=\"texte_cgu\">\r\n                        La Société DHOMS est une SARL au capital social de 100000€, dont le siège social est au 10 Rue\r\n                        de Vanves - 92130 Issy-les-Moulineaux et immatriculée au Registre du commerce et des sociétés\r\n                        de Paris sous le numéro 123456789. La Société propose les services suivants : Développement web.\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">II. Préambule\r\n                    <p class=\"texte_cgu\">\r\n                        La Société invite ses Utilisateurs à lire attentivement les présentes Conditions Générales\r\n                        d\'Utilisation s\'appliquant à tous les Services fournis par la Société à ses Clients d\'une même\r\n                        catégorie, quelles que soient les clauses pouvant être inscrites sur les documents du Client et\r\n                        notamment ses conditions générales d\'achat.<br>\r\n                        Les CGU sont systématiquement communiquées au Client qui en fait la demande.<br>\r\n                        Le Client est tenu de prendre connaissance des CGU avant toute passation de commande.<br>\r\n                        En cas de modification ultérieure des CGU, le Client est soumis à la version en vigueur lors de\r\n                        sa commande.<br>\r\n                        Les données enregistrées dans le système informatique de la Société constituent la preuve des\r\n                        transactions conclues avec le Client.\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">III. Définitions\r\n                    <p class=\"texte_cgu\">\r\n                        \"Client\" désigne toute personne physique ou morale qui passe une Commande sur le présent Site\r\n                        Internet<br>\r\n                        \"Commande\" désigne toute commande passée par l\'Utilisateur Inscrit sur le présent Site, en vue\r\n                        de bénéficier des Services de la Société<br>\r\n                        \"Conditions Générales d\'utilisation\" ou \"CGU\" désignent les présentes conditions générales de\r\n                        vente et d\'utilisation en ligne \"Consommateur\" désigne l\'acheteur personne physique qui n\'agit\r\n                        pas pour des besoins professionnels et/ ou hors de son activité professionnelle<br>\r\n                        \"Professionnel\" désigne l\'acheteur personne morale ou physique qui agit dans le cadre de son\r\n                        activité professionnelle<br>\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">IV. Inscription\r\n                    <p class=\"texte_cgu\">\r\n                        L\'inscription au Site est ouverte à toutes les personnes morales ou physiques majeures et\r\n                        jouissant de leurs pleines personnalités et capacités juridiques<br>\r\n                        L\'utilisation des Services proposés sur le Site est conditionnée à I ’inscription de\r\n                        l\'Utilisateur sur le Site L\'inscription est gratuite.<br>\r\n                        Pour procéder à l\'inscription, l\'Utilisateur doit remplir tous les champs obligatoires ; à\r\n                        défaut l\'inscription ne pourra être complétée.<br>\r\n                        Les Utilisateurs garantissent et déclarent sur l\'honneur que toutes les informations\r\n                        communiquées sur le Site, notamment lors de leur inscription, sont exactes et conformes à la\r\n                        réalité. Ils s\'engagent à mettre à jour leurs informations personnelles à partir de la page\r\n                        dédiée à ces dernières et disponible dans leur compte.<br>\r\n                        Tout Utilisateur enregistré dispose d\'un identifiant et d\'un mot de passe Ces derniers sont\r\n                        strictement personnels et confidentiels et ne devront en aucun cas faire l\'objet d\'une\r\n                        communication à des tiers sous peine de suppression du compte de l\'Utilisateur enregistré\r\n                        contrevenant Chaque Utilisateur inscrit est  personnellement responsable du maintien de la\r\n                        confidentialité de son identifiant et de son mot de passe La Société ne sera en aucun cas\r\n                        tenue pour responsable de l\'usurpation d\'identité d’un Utilisateur. Si un Utilisateur suspecte\r\n                        une fraude à n\'importe quel moment, il devra contacter la Société dans les plus brefs délais\r\n                        afin que cette dernière puisse prendre les mesures nécessaires et régulariser la situation.<br>\r\n                        Chaque Utilisateur, qu\'il soit une personne morale ou physique, ne peut être titulaire que\r\n                        d\'un compte sur le Site.<br>\r\n                        En cas de non-respect des CGU, notamment la création de plusieurs comptes pour une seule\r\n                        personne ou encore la fourniture de fausses informations, la Société se réserve le droit de\r\n                        procéder à la suppression temporaire ou définitive de tous les comptes crées par l\'Utilisateur\r\n                        enregistré contrevenant.<br>\r\n                        La suppression du compte entraîne la perte définitive de tous les avantages et services acquis\r\n                        sur le Site. Cependant, toute Commande réalisée et facturée par le Site avant la suppression\r\n                        du compte sera exécutée dans les conditions normales. <br>\r\n                        En cas de suppression d\'un Compte par la Société pour manquement aux devoirs et obligations\r\n                        énoncées dans les CGU, il est formellement interdit à l’Utilisateur contrevenant de se\r\n                        réinscrire sur le Site directement, par le biais d\'une autre adresse électronique ou par\r\n                        personne interposée sans l\'autorisation expresse de la Société.<br>\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">V. Prestation de service et prix\r\n                    <p class=\"texte_cgu\">\r\n                        Les Services faisant l\'objet des CGU sont ceux qui figurent sur le Site et qui sont proposés\r\n                        directement par la Société ou ses prestataires partenaires.<br>\r\n                        Les services sont décrits sur la page correspondante au sein du Site et mention est faite de\r\n                        toutes leurs caractéristiques essentielles. La Société ne peut être tenue responsable de\r\n                        l\'impossibilité de réaliser ladite prestation lorsque l\'Utilisateur n\'est pas éligible.<br>\r\n                        Lorsqu’un utilisateur enregistré souhaite obtenir une prestation de service vendue par la\r\n                        Société à travers le Site, le prix indiqué sur la page de la prestation correspond au prix en\r\n                        euros toutes taxes comprise (TTC) et tient compte des réductions applicables et en vigueur le\r\n                        jour de la Commande. Le prix indiqué n\'inclut pas les frais accessoires qui seront indiqués le\r\n                        cas échéant dans le récapitulatif avant de passer commande.<br>\r\n                        La Société se réserve la possibilité de modifier à tout moment ses tarifs. Elle s\'engage à\r\n                        facturer les prestations au tarif applicable au moment de leur Commande. Pour les prestations\r\n                        dont le prix ne peut être connu a priori ni indiqué avec certitude, un devis détaillé sera\r\n                        transmis au Client.<br>\r\n                        En aucun cas un Utilisateur ne pourra exiger l\'application de réductions n\'étant plus en\r\n                        vigueur le jour de la commande.\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">VI. Réalisation des prestations\r\n                <p class=\"texte_cgu\">\r\n                    La prestation de services commandée sur le Site sera assurée par la Société.<br>\r\n                    La Société s\'engage à mettre en œuvre tous les moyens humains et matériels pour réaliser la\r\n                    prestation dans les délais annoncés lors de la passation de la Commande. Cependant, elle ne\r\n                    peut en aucun cas être tenue responsable pour les retards de réalisation de prestation\r\n                    occasionnés en raison de fautes qui ne lui sont imputables.<br>\r\n                    Si les prestations n\'ont pas été effectuées dans le délai prévu, la résolution de la vente\r\n                    pourra être demandée par le Client dans les conditions prévues aux articles L138-2 et L138-3\r\n                    du Code de la consommation. Les sommes versées par le Client lui seront restituées au plus tard\r\n                    dans les quatorze jours qui suivent la date de dénonciation du contrat.<br>\r\n                    Cette disposition ne s\'applique pas quand le retard de la Société est dû à une faute du Client\r\n                    ou à un cas de force majeure, c\'est à dire à la survenance d\'un évènement imprévisible,\r\n                    irrésistible et indépendant de la volonté de la Société.<br>\r\n                <p/>\r\n                <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">VII. Réclamation\r\n                    <p class=\"texte_cgu\">\r\n                        Pour toutes les Commandes réalisées sur le présent Site, le Client dispose d\'un droit de\r\n                        réclamation de 20 à compter de la fourniture du Service.<br>\r\n                        Pour exercer ce droit de réclamation, le Client doit faire parvenir à la Société : à l\'adresse\r\n                        contact@dhoms.fr, une déclaration dans laquelle il exprime ses réserves et réclamations,\r\n                        assorties des justificatifs y afférents.<br>\r\n                        Une réclamation ne respectant pas les conditions décrites ci-dessus ne pourra être acceptée.<br>\r\n                        Après examen de la réclamation, le Site pourra le cas échéant remplacer ou rembourser la\r\n                        prestation de Services dans les plus brefs délais et à ses frais.<br>\r\n                    <p/>\r\n                <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">VIII. Droit de rétractation du Consommateur\r\n                    <p class=\"texte_cgu\">\r\n                        Le Consommateur dispose d\'un droit de rétractation de 20 à compter de la passation de la\r\n                        Commande, sauf pour les produits mentionnés à l\'article L121-21 8 du Code de la consommation\r\n                        tel que reproduit ci-dessous.<br>\r\n                        Le droit de rétractation ne peut être exercé pour les contrats :<br>\r\n                        De fourniture de services pleinement exécutés avant la fin du délai de rétractation et dont\r\n                        l\'exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à\r\n                        son droit de rétractation.<br>\r\n                        De fourniture de biens ou de services dont le prix dépend de fluctuations sur le marché\r\n                        financier échappant au contrôle du professionnel et susceptibles de se produire pendant le\r\n                        délai de rétractation.<br>\r\n                        De fourniture de biens confectionnés selon les spécifications du consommateur ou\r\n                        nettement personnalisés.<br>\r\n                        De fourniture de biens susceptibles de se détériorer ou de se périmer rapidement.<br>\r\n                        De fourniture de biens qui ont été descellés par le consommateur après la livraison et qui ne\r\n                        peuvent être renvoyés pour des raisons d\'hygiène ou de protection de la santé.<br>\r\n                        De fourniture de biens qui, après avoir été livrés et de par leur nature, sont mélangés de\r\n                        manière indissociable avec d\'autres articles.<br>\r\n                        De fourniture de boissons alcoolisées dont la livraison est différée au-delà de trente Jours et\r\n                        dont la valeur convenue à la conclusion du contrat dépend de fluctuations sur le marché\r\n                        échappant au contrôle du professionnel.<br>\r\n                        De travaux d\'entretien ou de réparation à réaliser en urgence au domicile du consommateur et\r\n                        expressément sollicités par lui, dans la limite des pièces de rechange et travaux strictement\r\n                        nécessaires pour répondre à l\'urgence.<br>\r\n                        De fourniture d\'enregistrements audio ou vidéo ou de logiciels informatiques lorsqu\'ils ont été\r\n                        descellés par le consommateur après la livraison.<br>\r\n                        De fourniture d\'un journal d\'un périodique ou d\'un magazine, sauf pour les contrats\r\n                        d\'abonnement à ces publications.<br>\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">IX. Traitement des données personnelles et Cookies\r\n                    <p class=\"texte_cgu\">\r\n                        Conformément à la loi Informatique et Libertés du ô janvier 1978, le Client dispose, à tout\r\n                        moment, d\'un droit d\'accès, de rectification, et d\'opposition à l\'ensemble de ses données\r\n                        personnelles en écrivant, par courrier et en justifiant de son identité, à l\'adresse\r\n                        suivante : contact@dhoms.fr. Ces données nominatives sont nécessaires au traitement de sa\r\n                        commande et à l\'établissement de ses factures le cas échéant.<br>\r\n                        Les données de l\'Utilisateur peuvent être communiquées aux partenaires de la Société en\r\n                        charge de l\'exécution et de la gestion des Commandes  L\'Utilisateur peut donc être amené à\r\n                        recevoir des informations ou des offres commerciales de la part de la Société ou de ses\r\n                        partenaires.<br>\r\n                        L\'Utilisateur peut à tout moment s\'opposer à la réception de ces offres commerciales, en\r\n                        écrivant à l\'adresse de la Société indiquée ci-dessus, ou en cliquant sur le lien prévu à\r\n                        cet effet au sein des courriers électroniques reçus.<br>\r\n                        Le traitement de ces informations a fait l\'objet d\'une déclaration auprès de la CNIL.<br>\r\n                        Pour permettre à ses Utilisateurs de bénéficier d\'une navigation optimale sur le Site et\r\n                        d\'un meilleur fonctionnement des différentes interfaces et applications,  la Société est\r\n                        susceptible d’implanter un cookie sur [\'ordinateur de l\'Utilisateur. Ce cookie permet de\r\n                        stocker des informations relatives à la -navigation sur le  Site, ainsi qu\'aux éventuelles\r\n                        données saisies par les Utilisateurs (notamment recherches, login, email, mot de passe).<br>\r\n                        L\'Utilisateur autorise expressément la Société à déposer sur le disque dur de l\'utilisateur\r\n                        un fichier dit \"cookie\".<br>\r\n                        L\'Utilisateur dispose de la possibilité de bloquer, modifier la durée de conservation, ou\r\n                        supprimer ce cookie via l\'interface de son navigateur. Si la désactivation systématique des\r\n                        cookies sur le navigateur de l\'Utilisateur l\'empêche d\'utiliser certains services ou\r\n                        fonctionnalités du Site, ce dysfonctionnement ne saurait en aucun cas constituer un dommage\r\n                        pour le membre qui ne pourra prétendre à aucune indemnité de ce fait.<br>\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">X. Modifications\r\n                    <p class=\"texte_cgu\">\r\n                        La Société se réserve le droit de modifier le Site, les services qui y sont proposés les\r\n                        CGU ainsi que toute procédure de livraison ou autre élément constitutif des prestations\r\n                        réalisées par la Société par le biais du Site.<br>\r\n                        Lorsqu\'il passe une Commande, l\'Utilisateur est soumis aux stipulations énoncées par les\r\n                        CGU en vigueur lors de la passation de la Commande.<br>\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">XI. Responsabilité\r\n                    <p class=\"texte_cgu\">\r\n                        La Société ne peut en aucun cas être tenue responsable pour l\'indisponibilité, qu\'elle soit\r\n                        temporaire ou permanente du Site Intemet et, bien qu\'elle mette en œuvre tous les moyens\r\n                        afin d\'assurer en permanence le service, il se peut que celui-ci soit interrompu à tout\r\n                        moment En outre, la Société se réserve le droit, par un acte volontaire, de rendre le Site\r\n                        indisponible afin de réaliser toute opération de mise à jour, d\'amélioration ou de\r\n                        maintenance.<br>\r\n                        Tel que mentionné auparavant dans les présentes, la Société ne peut en aucun cas être tenue\r\n                        responsable des retards de réalisation d\'une prestation de service pour des motifs qui\r\n                        échappent à son contrôle, indépendants de sa volonté, imprévisibles et irrésistibles ou\r\n                        dont la faute ne peut lui être imputable.<br>\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">XII. Propriété intellectuelle\r\n                    <p class=\"texte_cgu\">\r\n                        La marque, le logo, et la charte graphique du présent Site sont des marques déposées auprès\r\n                        de l\'INPI et des œuvres protégées au titre de la propriété intellectuelle, dont la propriété\r\n                        revient exclusivement à la Société. Toute diffusion, exploitation, représentation,\r\n                        reproduction, qu\'elle soit partielle ou intégrale sans l\'autorisation expresse de ladite\r\n                        société exposera le contrevenant à des poursuites civiles et pénales.<br>\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">XIII. Clause attributive de compétence\r\n                    <p class=\"texte_cgu\">\r\n                        Le droit régissant les CGU est le droit français Tout litige pouvant survenir entre la\r\n                        Société et un Utilisateur lors de l\'exécution des présentes fera l\'objet d\'une tentative\r\n                        de résolution à l\'amiable A défaut, les litiges seront portés à la connaissance des\r\n                        tribunaux compétents de droit commun.<br>\r\n                        Le Client est informé qu\'il peut recourir à une médiation conventionnelle, auprès de la\r\n                        Commission de la médiation de la Consommation prévue à l\'article L534-7 du Code de la\r\n                        consommation ou auprès des instances de médiation sectorielles existantes. Il peut également\r\n                        recourir à tout mode altératif de règlement des différends en cas de litige.<br>\r\n                    </p>\r\n                    <h3/>\r\n            </div>\r\n\r\n            <div>\r\n                <h3 class=\"partie_cgu\">XIV. Information précontractuelle\r\n                    <p class=\"texte_cgu\">\r\n                        Préalablement à sa Commande, le Client reconnait avoir eu communication, de façon lisible et\r\n                        compréhensible, des CGU et des informations et renseignements prévus aux articles LIII-I à\r\n                        L111-7 du Code de la consommation, et notamment les caractéristiques essentielles des\r\n                        Services.<br>\r\n                        Le prix des Services la date ou le délai auquel la Société s\'engage à fournir le\r\n                        Service.<br>\r\n                        Les Informations relatives à l\'Identité de la Société (coordonnées postales, téléphoniques,\r\n                        électroniques).<br>\r\n                        Les informations relatives aux garanties légales et contractuelles et à leurs modalités de\r\n                        mise en oeuvre.<br>\r\n                        La possibilité de recourir à une médiation conventionnelle en cas de litige les informations\r\n                        relatives au droit de rétractation (délai, modalités d\'exercice).<br>\r\n                        La passation d\'une Commande sur le Site emporte adhésion et acceptation des CGU Le Client ne\r\n                        pourra se prévaloir d\'un document contradictoire.<br>\r\n                    <p/>\r\n                    <h3/>\r\n            </div>\r\n            <div/>');
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
(2, '0002', 'Lumière', 'actionneur', 'éteint', 0, 1),
(3, '0001', 'Température', 'capteur', 'éteint', 100, 2),
(4, '0001', 'Température', 'capteur', 'allumé', 100, 3),
(5, '0001', 'Température', 'capteur', 'allumé', 100, 5),
(6, '0002', 'Lumière', 'actionneur', 'éteint', 0, 3),
(7, '0001', 'Température', 'capteur', 'allumé', 100, 4),
(8, '0003', 'Humidité', 'capteur', 'allumé', 100, 3),
(9, '0001', 'Température', 'capteur', 'allumé', 100, 6),
(10, '0001', 'Température', 'capteur', 'allumé', 100, 7),
(11, '0001', 'Température', 'capteur', 'allumé', 100, 8),
(12, '0001', 'Température', 'capteur', 'allumé', 100, 9),
(13, '0002', 'Lumière', 'actionneur', 'allumé', 0, 2),
(14, '0003', 'Humidité', 'capteur', 'éteint', 100, 1),
(15, '0002', 'Lumière', 'actionneur', 'éteint', 0, 4),
(16, '0004', 'Présence', 'capteur', 'allumé', 100, 1),
(17, '0005', 'Store', 'actioneur', 'éteint', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `donnee`
--

CREATE TABLE `donnee` (
  `ID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `donnee` text NOT NULL,
  `ID_controleur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donnee`
--

INSERT INTO `donnee` (`ID`, `date`, `donnee`, `ID_controleur`) VALUES
(1, '2018-05-25 12:34:56', '85', 17),
(2, '2018-05-25 12:10:20', '20', 1),
(3, '2018-05-25 12:10:22', '80', 17),
(4, '2018-05-25 12:10:25', '43', 8),
(5, '2018-05-25 12:12:24', '41', 14);

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
(3, 'Appartement BAUDELAIRE', 150, 3),

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

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`ID`, `objet`, `date`, `message`) VALUES
(1, 'Panne volet électrique ', '2018-06-01', 'Le volet électrique de ma cuisine ne marche plus !');

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
(1, 'HUGO', 'Victor', 'Primaire', 211223344, 611223344, 'victorhugo@gmail.com', '$2y$10$kcnfXgJn.4xk0fEL.zYwhOskd6VjM6pssbFoB5CfEsYJKqu1wswAa', '', 0, 0, 1),
(2, 'BAUDELAIRE', 'Charles', 'Primaire', 100112233, 600112233, 'charlesbaudelaire@gmail.com', '$77fg$WfGh$y55f12vHcMzpssS$45fD7g$CcKhSm475ErDt$', '', 0, 0, 3);

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
  `valeur_action` int(255) NOT NULL,
  `date_execution` datetime NOT NULL,
  `ID_personne` int(11) NOT NULL,
  `ID_controleur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `programmation`
--

INSERT INTO `programmation` (`ID`, `nom`, `valeur_action`, `date_execution`, `ID_personne`, `ID_controleur`) VALUES
(3, 'Set température', 19, '2018-05-30 14:33:24', 1, 1),
(4, 'Set température', 18, '2018-05-30 12:24:14', 1, 3);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `appartenance_maison`
--
ALTER TABLE `appartenance_maison`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ticket_sav`
--
ALTER TABLE `ticket_sav`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
