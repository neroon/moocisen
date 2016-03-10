-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 10 Mars 2016 à 09:09
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mooc`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE IF NOT EXISTS `chapitre` (
  `id_chapitre` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `partie` varchar(8000) DEFAULT NULL,
  `id_mooc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_chapitre`),
  KEY `FK_chapitre_id_mooc` (`id_mooc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `chapitre`
--

INSERT INTO `chapitre` (`id_chapitre`, `numero`, `titre`, `partie`, `id_mooc`) VALUES
(1, 1, 'Identité', 'Nom-Prenom-Ville-Pays-Etudes', 1),
(2, 2, 'Présentation', 'Formation-Objectifs-Diplôme', 1),
(3, 3, 'Expérience professionelle', 'Ecole d''ingénieur-Entreprise-Stage technique-Contrat professionel', 1),
(4, 1, 'Jonction PN', 'Jonction P-Jonction N-Jonction PN', 2),
(5, 2, 'Equations insolite', 'Équation Type 1-Équation Type 2-Équation Type 3-Équation Type 4', 2);

-- --------------------------------------------------------

--
-- Structure de la table `creer`
--

CREATE TABLE IF NOT EXISTS `creer` (
  `date_creation` datetime DEFAULT NULL,
  `id_mooc` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_mooc`,`id_user`),
  KEY `FK_creer_id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `creer`
--

INSERT INTO `creer` (`date_creation`, `id_mooc`, `id_user`) VALUES
('2016-02-25 00:00:00', 1, 2),
('2016-02-26 00:00:00', 2, 3),
('2016-02-26 00:00:00', 2, 4),
('2016-02-26 00:00:00', 3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `debloquer`
--

CREATE TABLE IF NOT EXISTS `debloquer` (
  `date_obtention` datetime DEFAULT NULL,
  `id_succes` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_succes`,`id_user`),
  KEY `FK_debloquer_id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `debloquer`
--

INSERT INTO `debloquer` (`date_obtention`, `id_succes`, `id_user`) VALUES
('2016-02-26 00:00:00', 1, 1),
('2016-02-26 00:00:00', 2, 1),
('2016-03-07 00:00:00', 3, 1),
('2016-03-01 00:00:00', 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `dragdrop`
--

CREATE TABLE IF NOT EXISTS `dragdrop` (
  `id_dragdrop` int(11) NOT NULL AUTO_INCREMENT,
  `texte` varchar(8000) DEFAULT NULL,
  `reponse_dd` varchar(8000) DEFAULT NULL,
  `indice_dd` varchar(8000) DEFAULT NULL,
  `id_exercice` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dragdrop`),
  KEY `FK_dragdrop_id_exercice` (`id_exercice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `dragdrop`
--

INSERT INTO `dragdrop` (`id_dragdrop`, `texte`, `reponse_dd`, `indice_dd`, `id_exercice`) VALUES
(1, 'C''est un test pour le drag & drop', 'Ca marche', 'devine', 5);

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

CREATE TABLE IF NOT EXISTS `exercice` (
  `id_exercice` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `valeur_exo` int(11) DEFAULT NULL,
  `id_chapitre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_exercice`),
  KEY `FK_exercice_id_chapitre` (`id_chapitre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `exercice`
--

INSERT INTO `exercice` (`id_exercice`, `numero`, `valeur_exo`, `id_chapitre`) VALUES
(1, 1, 100, 1),
(4, 4, 100, 2),
(5, 5, 100, 3),
(6, 5, 100, 3),
(7, 1, 100, 4),
(8, 2, 120, 5),
(9, 5, 51, 5);

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

CREATE TABLE IF NOT EXISTS `faire` (
  `score` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_exercice`),
  KEY `FK_faire_id_exercice` (`id_exercice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mooc`
--

CREATE TABLE IF NOT EXISTS `mooc` (
  `id_mooc` int(11) NOT NULL AUTO_INCREMENT,
  `nom_mooc` varchar(100) DEFAULT NULL,
  `matiere` varchar(100) DEFAULT NULL,
  `description` varchar(8000) DEFAULT NULL,
  `prerequis` varchar(100) DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  `nb_chap` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mooc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `mooc`
--

INSERT INTO `mooc` (`id_mooc`, `nom_mooc`, `matiere`, `description`, `prerequis`, `duree`, `note`, `nb_chap`) VALUES
(1, 'CV Ingénieur ISEN', 'SHES', 'Ce MOOC vous permettra de connaitre les codes pour la réalisation d''un CV pour un ingénieur, et plus particulièrement dans le monde du numérique pour une recherche de stage ou d''emploi.', 'Aucun', 35, 4, 7),
(2, 'Physique des solides', 'Physique quantique', 'Ce cours portera sur la physique des solides ', 'Aucun', 20, 5, 5),
(3, 'Initiation au SHELL', 'Informatique ', 'Ce cours vous permettra d''acquérir les bases du langage SHELL', 'Aucun', 20, 4, 6);

-- --------------------------------------------------------

--
-- Structure de la table `qcm`
--

CREATE TABLE IF NOT EXISTS `qcm` (
  `id_qcm` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(8000) DEFAULT NULL,
  `reponse_qcm` varchar(8000) DEFAULT NULL,
  `solution` varchar(8000) DEFAULT NULL,
  `indice_qcm` varchar(8000) DEFAULT NULL,
  `id_exercice` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_qcm`),
  KEY `FK_qcm_id_exercice` (`id_exercice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `qcm`
--

INSERT INTO `qcm` (`id_qcm`, `question`, `reponse_qcm`, `solution`, `indice_qcm`, `id_exercice`) VALUES
(1, 'Parmi les propositions suivantes, choisir la bonne réponse. Le nom et prenom il faut l’écrire sous la forme suivante (plusieurs réponses sont possibles):', 'M. Clément GUIOL-Olivier Garnier-Madame Olivia Serre-Mme Odette Dupont-Olivier SCHULTZ-Victor Gerard-Slavyana Kokorina-Monsieur Jeson Dupont-Jean Nicolas-PERRICHON Guillaume-Clément DAVID', 'Olivier Garnier-Olivier SCHULTZ-Victor Gerard-PERRICHON Guillaume', 'devine', 1),
(2, 'Ou est situé Toulon ? ', 'Loin-Au Sud-Par rapport à quoi-En Angleterre ', 'Au sud', 'devine', 4),
(3, 'Quelle est la capitale de la France', 'Le péroux-La Chine-L''océan Atlantique-Paris', 'Paris', 'devnie', 5),
(4, 'Quelle est votre école d''ingénieur', 'Isen-HEC-Lena-Normal Sup', 'Isen', 'devine', 5),
(5, 'Dans qu''elle entreprise souhaitez-vous travailler', 'DCNS-GEMALTO-ATO-Google-Airbus-AirFrance-L''armée', 'GEMALTO', 'devine', 6),
(6, 'Quelle est la relation du temps?', 'Je sais pas-Peut-être ca-Nop', 'Nop', 'Devine', 7),
(7, 'Quelle équation est correcte?', 'E = mc²-A+B = 3-5+5 = 10', 'E = mc²-5+5 = 10', 'devine', 8),
(8, 'Quel est le facteur à prendre en compte dans E=mc²?', 'Le temps-La vitesse-Le taux de stress-Que ca fait 6 syllabes', 'La vitesse', 'devine', 9);

-- --------------------------------------------------------

--
-- Structure de la table `succes`
--

CREATE TABLE IF NOT EXISTS `succes` (
  `id_succes` int(11) NOT NULL AUTO_INCREMENT,
  `type_succes` char(1) NOT NULL,
  `nom_succes` varchar(100) DEFAULT NULL,
  `description_succes` varchar(8000) DEFAULT NULL,
  PRIMARY KEY (`id_succes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `succes`
--

INSERT INTO `succes` (`id_succes`, `type_succes`, `nom_succes`, `description_succes`) VALUES
(1, 'S', 'Premier pas', 'Inscrivez vous à un MOOC'),
(2, 'G', 'Mon premier MOOC', 'Terminer un MOOC'),
(3, 'B', 'Nouvelle identité', 'Changer votre pseudo');

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

CREATE TABLE IF NOT EXISTS `suivre` (
  `date_suivi` date DEFAULT NULL,
  `avancement` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_mooc` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_mooc`),
  KEY `FK_suivre_id_mooc` (`id_mooc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `suivre`
--

INSERT INTO `suivre` (`date_suivi`, `avancement`, `id_user`, `id_mooc`) VALUES
('2016-02-26', 1, 1, 1),
('2016-03-01', 1, 1, 2),
('2016-03-07', 0, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `pseudo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `statut` int(11) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `professeur` int(11) DEFAULT NULL,
  `reset_password` varchar(8000) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `pseudo`, `email`, `password`, `pays`, `statut`, `grade`, `professeur`, `reset_password`) VALUES
(1, 'Guiol', 'Clément', 'CleMenTus', 'clement.guiol@gmail.com', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 0, NULL),
(2, 'Rolland', 'Jean-Michel', 'JMR', 'jean-michel.rolland@isen.fr', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 1, NULL),
(3, 'Bescond', 'Marc', 'MB', 'marc.bescond@isen.fr', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 1, NULL),
(4, 'Patrone', 'Lionel', 'LP', 'lionel.patrone@isen.fr', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 1, NULL),
(5, 'Perony', 'Christine', 'CP', 'christine.perony@isen.fr', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 1, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD CONSTRAINT `FK_chapitre_id_mooc` FOREIGN KEY (`id_mooc`) REFERENCES `mooc` (`id_mooc`);

--
-- Contraintes pour la table `creer`
--
ALTER TABLE `creer`
  ADD CONSTRAINT `FK_creer_id_mooc` FOREIGN KEY (`id_mooc`) REFERENCES `mooc` (`id_mooc`),
  ADD CONSTRAINT `FK_creer_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `debloquer`
--
ALTER TABLE `debloquer`
  ADD CONSTRAINT `FK_debloquer_id_succes` FOREIGN KEY (`id_succes`) REFERENCES `succes` (`id_succes`),
  ADD CONSTRAINT `FK_debloquer_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `dragdrop`
--
ALTER TABLE `dragdrop`
  ADD CONSTRAINT `FK_dragdrop_id_exercice` FOREIGN KEY (`id_exercice`) REFERENCES `exercice` (`id_exercice`);

--
-- Contraintes pour la table `exercice`
--
ALTER TABLE `exercice`
  ADD CONSTRAINT `FK_exercice_id_chapitre` FOREIGN KEY (`id_chapitre`) REFERENCES `chapitre` (`id_chapitre`);

--
-- Contraintes pour la table `faire`
--
ALTER TABLE `faire`
  ADD CONSTRAINT `FK_faire_id_exercice` FOREIGN KEY (`id_exercice`) REFERENCES `exercice` (`id_exercice`),
  ADD CONSTRAINT `FK_faire_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `qcm`
--
ALTER TABLE `qcm`
  ADD CONSTRAINT `FK_qcm_id_exercice` FOREIGN KEY (`id_exercice`) REFERENCES `exercice` (`id_exercice`);

--
-- Contraintes pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD CONSTRAINT `FK_suivre_id_mooc` FOREIGN KEY (`id_mooc`) REFERENCES `mooc` (`id_mooc`),
  ADD CONSTRAINT `FK_suivre_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
