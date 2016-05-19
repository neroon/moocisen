-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 18 Mai 2016 à 21:35
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `chapitre`
--

INSERT INTO `chapitre` (`id_chapitre`, `numero`, `titre`, `partie`, `id_mooc`) VALUES
(1, 1, 'Identité', 'Nom et prénom-Télephone-Mails-Date de naissance<br> et âge-Réseaux sociaux-Mots qualificatifs-Lieux de naissance <br> et nationalité', 1),
(2, 2, 'Formation', 'Introduction-Titre-Dates-Sigles-Lieu-Spécialités et gratifications-Exemple-Récapitulatif du chapitre', 1),
(3, 3, 'Projets', 'Date-Intitulé-Fonction-Résultat/Objectifs-Nombres de personne par équipe', 1),
(4, 1, 'Jonction PN', 'Jonction P-Jonction N-Jonction PN', 2),
(5, 2, 'Equations insolite', 'Équation Type 1-Équation Type 2-Équation Type 3-Équation Type 4', 2),
(6, 4, 'Compétences', 'Electronique-Informatique-Shes-Autres', 1),
(7, 5, 'Langues', 'Type-Niveau-Certification-Année de pratique-Voyage', 1),
(8, 6, 'Expériences professionnelles', 'Dates-Intitulé-fonction-Nom entreprise-Résultats/Objectifs-Références', 1),
(9, 7, 'Expériences extra professionnelle', 'Date-Intitulé-Fonction-Nom entreprise/Associations-Résultats/Objectifs-Références', 1),
(10, 8, 'Centre d''intérêts', 'Sport/Art-Niveau-Nombred''années-Compétition', 1),
(11, 9, 'Autres informations', 'Format papier-Mots-clés-Vidéo CV-Carte de visite CV-CV en ligne-CV Européen-CV anglais-Autres CV étrangers', 1),
(12, 1, 'Histoire', 'Chapitre introduction-Niveau 1-Niveau 2-Niveau 3', 4),
(13, 2, 'Dual-Quizz', 'joueur 1-joueur 2', 4),
(15, 3, 'Quizz-journalier', 'jour 1', 4),
(17, 4, 'Entrainement', 'Prérequis', 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `exercice`
--

INSERT INTO `exercice` (`id_exercice`, `numero`, `valeur_exo`, `id_chapitre`) VALUES
(1, 1, 100, 1),
(4, 1, 100, 2),
(5, 5, 100, 3),
(6, 5, 100, 3),
(7, 1, 100, 4),
(8, 2, 100, 5),
(9, 5, 100, 5),
(10, 1, 100, 12),
(11, 2, 10, 12),
(12, 3, 100, 12),
(13, 3, 100, 12),
(14, 1, 100, 13),
(16, 2, 100, 13),
(18, 2, 100, 15),
(19, 2, 100, 17),
(20, 2, 100, 1),
(21, 3, 100, 1),
(22, 4, 100, 1),
(23, 5, 100, 1),
(24, 6, 100, 1),
(25, 7, 100, 1),
(26, 8, 100, 1),
(27, 3, 100, 2),
(28, 2, 100, 2);

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

--
-- Contenu de la table `faire`
--

INSERT INTO `faire` (`score`, `id_user`, `id_exercice`) VALUES
(50, 1, 7),
(100, 1, 8),
(100, 1, 9),
(0, 6, 1),
(33, 6, 5),
(14, 6, 10),
(0, 6, 14),
(0, 6, 18),
(0, 6, 19),
(75, 8, 1),
(100, 8, 5),
(0, 8, 10),
(50, 8, 14),
(100, 8, 18),
(100, 8, 19);

-- --------------------------------------------------------

--
-- Structure de la table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `connect_time` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `lien` varchar(100) DEFAULT NULL,
  `dernierlien` varchar(300) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `browser` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `log`
--

INSERT INTO `log` (`id`, `id_user`, `connect_time`, `email`, `ip`, `lien`, `dernierlien`, `pays`, `browser`) VALUES
(24, 1, '10-03-2016 17:49', 'clement.guiol@gmail.com', '::1', 'http://localhost/moocisen/moocisen/application/includes/login.php', '/moocisen/moocisen/application/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36'),
(25, 1, '10-03-2016 17:49', 'clement.guiol@gmail.com', '::1', 'http://localhost/moocisen/moocisen/application/includes/login.php', '/moocisen/moocisen/application/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36'),
(26, 1, '13-03-2016 16:49', 'clement.guiol@gmail.com', '127.0.0.1', 'http://127.0.0.1/moocisen/application/includes/login.php', '/moocisen/application/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.26 Safari/537.36'),
(27, 1, '13-03-2016 17:56', 'clement.guiol@gmail.com', '127.0.0.1', 'http://127.0.0.1/moocisen/application/includes/login.php', '/moocisen/application/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.26 Safari/537.36'),
(28, 1, '13-03-2016 18:02', 'clement.guiol@gmail.com', '127.0.0.1', 'http://127.0.0.1/moocisen/application/includes/login.php', '/moocisen/application/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.26 Safari/537.36'),
(29, 1, '13-03-2016 18:14', 'clement.guiol@gmail.com', '127.0.0.1', 'http://127.0.0.1/moocisen/application/includes/login.php', '/moocisen/application/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0'),
(30, 6, '20-04-2016 18:30', 'etudiant@gmail.com', '::1', 'http://localhost/moocisen/app/includes/login.php', '/moocisen/app/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36'),
(31, 2, '20-04-2016 22:44', 'jean-michel.rolland@isen.fr', '::1', 'http://localhost/moocisen/app/includes/login.php', '/moocisen/app/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36'),
(32, 8, '20-04-2016 22:51', 'isenien@isen.fr', '::1', 'http://localhost/moocisen/app/includes/login.php', '/moocisen/app/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36'),
(33, 8, '21-04-2016 08:32', 'isenien@isen.fr', '::1', 'http://localhost/moocisen/app/includes/login.php', '/moocisen/app/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36'),
(34, 8, '21-04-2016 08:48', 'isenien@isen.fr', '::1', 'http://localhost/moocisen/app/includes/login.php', '/moocisen/app/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36'),
(35, 8, '21-04-2016 09:51', 'isenien@isen.fr', '::1', 'http://localhost/moocisen/app/includes/login.php', '/moocisen/app/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36'),
(36, 8, '22-04-2016 09:02', 'isenien@isen.fr', '::1', 'http://localhost/moocisen/app/includes/login.php', '/moocisen/app/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36'),
(37, 8, '25-04-2016 14:54', 'isenien@isen.fr', '::1', 'http://localhost/moocisen/app/includes/login.php', '/moocisen/app/includes/login.php', NULL, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `mooc`
--

INSERT INTO `mooc` (`id_mooc`, `nom_mooc`, `matiere`, `description`, `prerequis`, `duree`, `note`, `nb_chap`) VALUES
(1, 'CV Ingénieur ISEN', 'SHES', 'Ce MOOC vous permettra de connaitre les codes pour la réalisation d''un CV pour un ingénieur, et plus particulièrement dans le monde du numérique pour une recherche de stage ou d''emploi.', 'Aucun', 35, 4, 7),
(2, 'Physique des solides', 'Physique quantique', 'Ce cours portera sur la physique des solides ', 'Aucun', 20, 5, 5),
(3, 'Initiation au SHELL', 'Informatique ', 'Ce cours vous permettra d''acquérir les bases du langage SHELL', 'Aucun', 20, 4, 6),
(4, 'Certification PMI', 'PMBD', 'Devenir un ingénieur manager', 'Aucun', 20, NULL, 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `qcm`
--

INSERT INTO `qcm` (`id_qcm`, `question`, `reponse_qcm`, `solution`, `indice_qcm`, `id_exercice`) VALUES
(1, 'Parmi les propositions suivantes, choisir la bonne réponse. Le nom et prenom il faut l’écrire sous la forme suivante (plusieurs réponses sont possibles):', 'M. Clément GUIOL-Olivier Garnier-Madame Olivia Serre-Mme Odette Dupont-Olivier SCHULTZ-Victor Gerard-Slavyana Kokorina-Monsieur Jeson Dupont-Jean Nicolas-PERRICHON Guillaume-Clément DAVID', 'Olivier SCHULTZ-Clément DAVID', 'devine', 1),
(2, 'Parmi les propositions suivantes, choisissez la bonne réponse.<br><br>\r\n\r\nSituation 1<br>\r\nVous êtes ingénieur en informatique. Vous avez 20 ans d’expérience. <br>Vous avez travaillé dans 5 entreprises différentes.<br> Vous avez obtenu votre Bac S avec mention “Bien”, vous avez validé votre diplôme d’ingénieur avec les félicitations. <br>\r\n\r\nQuelles informations allez-vous indiquer dans votre CV?\r\n', 'Formation avec les informations sur le BAC, sur votre école d’ingénieur et sur votre diplôme-\r\nExpérience professionnelle-\r\nFormation avec les informations sur votre école d’ingénieur, sur la gratification de votre diplôme\r\n', 'Expérience professionnelle\r\n', 'devine', 4),
(3, 'Quelle est la capitale de la France', 'oui-non', 'non', 'c''est non', 5),
(4, 'Quelle est votre école d''ingénieur', 'oui-non', 'oui', 'c''est oui', 5),
(5, 'Dans qu''elle entreprise souhaitez-vous travailler', 'DCNS-GEMALTO-ATO-Google-Airbus-AirFrance-L''armée', 'GEMALTO', 'devine', 6),
(6, 'Quelle est la relation du temps?', 'Je sais pas-Peut-être ca-Nop', 'Nop', 'Devine', 7),
(7, 'Quelle équation est correcte?', 'E = mc²-A+B = 3-5+5 = 10', 'E = mc²-5+5 = 10', 'devine', 8),
(8, 'Quel est le facteur à prendre en compte dans E=mc²?', 'Le temps-La vitesse-Le taux de stress-Que ca fait 6 syllabes', 'La vitesse', 'devine', 9),
(9, 'Les actifs organisationnels sont :', 'La description de l''organisation de l''entreprise-De bonnes pratiques ou normes internes-Des contraintes qui limitent l''équipe projet-Une répartition analytique des coûts du projet', 'De bonnes pratiques ou normes internes', NULL, 10),
(10, 'Les certifications du PMI® permettent : ', 'La reconnaissance, au niveau international, des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient-La reconnaissance, au niveau national, des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient-La reconnaissance des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient et son entreprise-La reconnaissance des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient et ce tout au long de sa carrière\n', 'La reconnaissance, au niveau international, des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient', NULL, 11),
(11, 'Le PMI® ou Project Management Institute®  est la plus grande association mondiale de professionnels du management de projet. Toutes ces affirmations la concernant sont vraies SAUF : ', 'Le PMI®  est une association à but non lucratif, présente dans plus de 200 pays sur tous les continents-Le PMI®promeut des certifications professionnelles qui aident les professionnels en management de projet à démarrer, construire et développer leur carrière en projet, programme ou portefeuille de projets-Le PMI® offre un forum de libre échange d’idées, d’applications et de solutions-Le PMI® est constitué d''experts techniques, spécialisés en management de projet\r\n', 'Le PMI® est constitué experts techniques, spécialisés en management de projet', NULL, 12),
(12, 'Le PMI® ou Project Management Institute®  est la plus grande association mondiale de professionnels du management de projet. Toutes ces affirmations la concernant sont vraies SAUF : Quels sont les concepts fondamentaux qui structurent le management de projet dans le PMBOK® Guide ?', 'Il s''agit des processus, des domaines de connaissance et des groupes de processus-Il s''agit des processus, de leurs entrées/sorties et des outils et techniques-Il s''agit des domaines techniques, des processus et des outils du Chef de projet-Il s''agit des compétences du Chef de projet, des processsus et des domaines de connaissance', 'Il sagit des processus, des domaines de connaissance et des groupes de processus', NULL, 13),
(13, 'Le plan de management de projet est le moins utilisé pour laquelle des affirmations suivantes ?', 'Guide l’exécution du projet-Documente les hypothèses de planification-Aide au développement de la charte du projet-Facilite la communication entre les parties prenantes internes au projet', 'Aide au développement de la charte du projet', NULL, 14),
(14, 'Le processsus "Surveiller et maîtriser le travail du projet" est le processus qui permet de gérer l''avancement du projet. Ses intérêts principaux sont tout SAUF :', 'Mettre à jour le plan de management et les documents du projet-Valider toutes les demandes de modification-Mesurer et analyser régulièrement la performance du projet-Faire comprendre aux parties prenantes  l’état actuel du projet', 'Valider toutes les demandes de modification', NULL, 14),
(15, 'Le processsus "Surveiller et maîtriser le travail du projet" est le processus qui permet de gérer l''avancement du projet. Ses intérêts principaux sont tout SAUF :', 'Mettre à jour le plan de management et les documents du projet-Valider toutes les demandes de modification-Mesurer et analyser régulièrement la performance du projet-Faire comprendre aux parties prenantes  l’état actuel du projet', 'Valider toutes les demandes de modification', NULL, 16),
(16, 'Le plan de management de projet est le moins utilisé pour laquelle des affirmations suivantes ?', 'Guide l’exécution du projet-Documente les hypothèses de planification-Aide au développement de la charte du projet-Facilite la communication entre les parties prenantes internes au projet', 'Aide au développement de la charte du projet', NULL, 16),
(17, 'Le plan de management de projet est le moins utilisé pour laquelle des affirmations suivantes ?', 'Guide l’exécution du projet-Documente les hypothèses de planification-Aide au développement de la charte du projet-Facilite la communication entre les parties prenantes internes au projet', 'Aide au développement de la charte du projet', NULL, 18),
(18, 'Le plan de management de projet est le moins utilisé pour laquelle des affirmations suivantes ?', 'Guide l’exécution du projet-Documente les hypothèses de planification-Aide au développement de la charte du projet-Facilite la communication entre les parties prenantes internes au projet', 'Aide au développement de la charte du projet', NULL, 19),
(19, 'Parmi les propositions suivantes, choisissez la bonne réponse.', '06.40.30.20.30 /\n		04.90.30.10.10\n-04.90.30.10.10 /\n		04.90.20.10.10 /\n06.40.30.20.30\n-\n04.90.30.10.10 (Domicile) /\n		06.40.30.20.30 (Portable)\n-+33 6 40 30 20 30 /\n		04.90.30.10.10 \n-06.40.30.20.30', '06.40.30.20.30 /\n		04.90.30.10.10\n-+33 6 40 30 20 30 /\n		04.90.30.10.10\n-\n06.40.30.20.30\n', 'devine', 20),
(20, 'Choisissez la bonne réponse parmi les propositions suivantes:', '	jean.dupont@isen.fr-	axel.bertrand@yahoo.com-	lapetiteprincesse90@hotmail.com-	camille.bernard@gmail.com-\n	axeldu83@gmail.com', 'jean.dupont@isen.fr-	camille.bernard@gmail.com', 'Aucun', 21),
(21, 'Choisissez la bonne réponse parmi les propositions suivantes:', 'On est en 2016. \r\n	Sur votre CV vous avez: 13/01/1966 (50 ans)-\r\n57 ans -On est en 2016.\r\n	Sur votre CV vous avez: 20/04/1981 (34 ans)-\r\nOn est en 2016.\r\n	Sur votre CV vous avez: 1966/01/13 (50 ans)\r\n-\r\nOn est en 2016.\r\n	Sur votre CV vous avez: 20/04/1981\r\n', 'On est en 2016. \r\n	Sur votre CV vous avez: 13/01/1966 (50 ans)-\r\n57 ans -On est en 2016.\r\n	Sur votre CV vous avez: 20/04/1981\r\n', 'Aucune', 22),
(22, 'Vous voulez mettre un lien vers votre réseau social. Le lien vers quel réseau social allez vous choisir? Choisissez la (les) bonne(s) réponse(s)', 'Facebook avec le contenu de votre vie privé-	Badoo-Viadéo-MySpace-Linkedin-	Twitter professionnel-Google+-	Pinterest-Facebook professionnel', 'Viadéo-Linkedin-Twitter professionnel-Facebook professionnel', 'devine', 23),
(23, 'Choisissez parmi les propositions suivantes les qualificatifs qu’il faut surtout pas utiliser dans son CV: (Cette partie comporte 4 parties avec 5 propositions chacune)', 'Actif-Managé-Motivé-Expert -Autonome', 'Motivé-Expert ', 'devine', 24),
(24, 'Partie 2:', 'Résolu-Remporté-Leadership-Efficace-Organisé', 'Leadership-Organisé', 'devine', 24),
(25, 'Partie 3:', 'Passionné-Rigoureux-Créatif-Curieux-Specialisé', 'Passionné-Créatif-Specialisé', 'devine', 24),
(26, 'Partie 4:', 'Realisé -Innovant-Strategique-Réactif-Dynamique', 'Innovant-Strategique-Dynamique', 'devine', 24),
(29, 'Vous allez être confronté à des différentes situations.<br> Pour chaque situation plusieurs questions vont vous être posées. Choisissez la bonne réponse à chaque question.<br><br>\nSituation 1<br>\nVous vous appelez Lucie Morel. Vous êtes française. Vous êtes née en Angleterre et vous avez grandi la bas. Vous maitrisez parfaitement la langue anglaise. <br><br>\nQuestion 1<br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', 'Oui', NULL, 25),
(31, 'Question 2 <br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance? \n', 'Oui-Non', 'Oui', NULL, 25),
(32, 'Situation 2 <br>\nVous vous appelez Jean Lambert. Vous êtes français et vous êtes né en France.<br><br>\nQuestion 1 <br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', 'Non\r\n', NULL, 25),
(33, 'Question 2<br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance\n', 'Oui-Non', 'Non\r\n', NULL, 25),
(34, 'Situation 3<br>\nVous vous appelez François Perrin. Vous êtes né en Amérique. Vous avez double nationalité (française et américaine).\n<br><br>\nQuestion 1.<br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', 'Oui', NULL, 25),
(35, 'Question 2<br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance? \n', 'Oui-Non', 'Oui', NULL, 25),
(36, 'Situation 4<br>\nVous vous appelez Daria Darco. Vous êtes italienne. Vous êtes né en Italie. Vous habitez en France. <br><br>\nQuestion 1<br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', 'Oui', NULL, 25),
(37, 'Question 2<br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance? \n', 'Oui-Non', 'Oui', NULL, 25),
(38, 'Situation 5<br>\nVous vous appelez Adalbert Birke. Vous êtes allemand. Vous êtes né en France. Vous possedez la double nationalité.<br><br>\nQuestion 1<br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', 'Oui', NULL, 25),
(39, 'Question 2<br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance? \n', 'Oui-Non', 'Oui', NULL, 25),
(40, 'Situation 2<br>\r\nVous êtes jeune diplômé d’une école d’ingénieur.<br>Votre expérience professionnelle se limite à deux stages effectués au sein de la même entreprise.<br> Vous avez Bac S.<br>\r\nQuelles informations allez-vous indiquer dans votre CV?\r\n\r\n', 'Formation avec les informations sur le BAC, sur votre école d’ingénieur et sur votre diplôme-\r\nExpérience professionnelle (stages)-\r\nFormation (école d’ingénieur, diplôme)\r\n\r\n', 'Expérience professionnelle (stages)-\r\nFormation (école d’ingénieur, diplôme)', 'devine', 4),
(41, 'Situation 3<br>\r\nVous êtes ingénieur en électronique. <br>Votre avez 5 ans d’expérience professionnelle. <br>Vous avez travaillé dans 2 entreprises. <br>Vous êtes diplômé d’une école d’ingénieur et vous avez votre BAC.<br>\r\n\r\nQuelles informations allez-vous indiquer dans votre CV?\r\n\r\n\r\n\r\n\r\n', 'Formation (école d’ingénieur, diplôme)-\r\nExpérience professionnelle-\r\nFormation avec les informations sur le BAC, sur votre école d’ingénieur et sur votre diplôme.\r\n\r\n\r\n\r\n', 'Formation (école d’ingénieur, diplôme)-\r\nExpérience professionnelle', 'devine', 4),
(42, 'Situation 4.<br>\r\nVous êtes jeune diplômé. Vous êtes diplômé d’une école d’ingénieur.<br> Vous avez un double diplôme car vous avez fait un an d’études dans une université étrangère.<br> Vous avez votre BAC avec mention.<br> Votre expérience professionnelle se limite aux stages effectués durant vos études.<br>\r\nQuelles informations allez-vous indiquer dans votre CV?\r\n\r\n\r\n\r\n', 'Formation (école d’ingénieur, diplôme, BAC avec mention)-\r\nExpérience professionnelle (stages)-\r\nFormation avec les informations sur le BAC, sur votre école d’ingénieur et sur votre diplôme-\r\nFormation (école d’ingénieur,  double diplôme, université à l’étranger)\r\n\r\n\r\n', 'Expérience professionnelle (stages)-Formation (école d’ingénieur,  double diplôme, université à l’étranger)', 'devine', 4),
(43, 'Faites glisser les informations du bas afin de constituer la partie Formation du CV. <br>Le but est de mettre les informations dans l’ordre suivant: Date - Titre - Spécialité (si il y a) - Lieu<br>\r\n\r\nLa situation est la suivante: <br>\r\nVous avez fait une classe préparatoire en 3 ans, ensuite vous avez intégré une école d’ingénieur et vous avez fait 3 ans d’école d’ingénieur.<br> En 3eme année de votre formation au sein de l’école d’ingénieur vous êtes parti à l’étranger et vous avez obtenu un double diplôme.\r\n\r\n\r\n\r\n', 'Formation (école d’ingénieur, diplôme, BAC avec mention)-\r\nExpérience professionnelle (stages)-\r\nFormation avec les informations sur le BAC, sur votre école d’ingénieur et sur votre diplôme-\r\nFormation (école d’ingénieur,  double diplôme, université à l’étranger)\r\n\r\n\r\n', 'Expérience professionnelle (stages)-Formation (école d’ingénieur,  double diplôme, université à l’étranger)', 'devine', 28),
(44, 'Parmi les propositions suivantes, sélectionner la (les) partie(s) “Formation” du CV qui contient (contiennent) des erreurs\r\n\r\n\r\n\r\n', '2014 2015 / Diplôme Maîtrise Génie Informatique / Spécialité en informatique et management / Université de Sherbrooke, Canada<br>\r\n  2012 2014 / Diplôme d’ingénieur en informatique / Spécialité en informatique et en management / Institut Supérieur de l’électronique et du numérique Toulon<br>\r\n  2009 2012 / Classe Préparatoire Mathématiques Physique / Lycée Dumont d’Urville, Toulon<br>\r\n  2009 / Baccalauréat Scientifique mention “Bien” / Lycée Dumont d’Urville-\r\n\r\n2014 2016 / Diplôme d''ingénieur en informatique / Spécialité innovation / Institut Supérieur de l’électronique et du numérique Toulon<br>\r\n  2011 2014 / Cycle Préparatoire Intégré / Spécialité informatique et réseaux / Institut Supérieur de l’électronique et du numérique Toulon-\r\n\r\n2009 / Baccalauréat Scientifique / Lycée La Cordeille, Toulon<br>\r\n  2009 2011 / Classes préparatoires option MP / Lycée La Cordeille, Toulon<br>\r\n  2011 2014 / Cycle ingénieur / Spécialité électronique / Institut Supérieur de l’électronique et du numérique Toulon-\r\n2005 2008 / Cycle ingénieur / Institut Supérieur de l’électronique et du numérique Toulon<br>\r\n  2003 2005 / DUT / Option Services et Réseaux de Communication / IUT de Bobigny, Université Paris 13\r\n\r\n\r\n\r\n', '2014 2015 / Diplôme Maîtrise Génie Informatique / Spécialité en informatique et management / Université de Sherbrooke, Canada<br>\r\n2012 2014 / Diplôme d’ingénieur en informatique / Spécialité en informatique et en management / Institut Supérieur de l’électronique et du numérique Toulon<br>\r\n2009 2012 / Classe Préparatoire Mathématiques Physique / Lycée Dumont d’Urville, Toulon<br>\r\n2009 / Baccalauréat Scientifique mention “Bien” / Lycée Dumont d’Urville-\r\n\r\n2009 / Baccalauréat Scientifique / Lycée La Cordeille, Toulon<br>\r\n2009 2011 / Classes préparatoires option MP / Lycée La Cordeille, Toulon<br>\r\n2011 2014 / Cycle ingénieur / Spécialité électronique / Institut Supérieur de l’électronique et du numérique Toulon', 'devine', 27);

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
  `avancement` varchar(100) DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `id_mooc` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_mooc`),
  KEY `FK_suivre_id_mooc` (`id_mooc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `suivre`
--

INSERT INTO `suivre` (`date_suivi`, `avancement`, `id_user`, `id_mooc`) VALUES
('2016-02-26', '0-6-2', 1, 1),
('2016-03-01', '0-3-1-2', 1, 2),
('2016-03-07', '0-2', 1, 3),
('2016-04-20', '0', 2, 4),
('2016-04-20', '0-1-3', 6, 1),
('2016-04-20', '0', 6, 3),
('2016-04-20', '0-12-13-15-17', 6, 4),
('2016-04-20', '0-1-3', 8, 1),
('2016-04-20', '0-12-13-17-15', 8, 4);

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
  `avatar` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `pseudo`, `email`, `password`, `pays`, `statut`, `grade`, `professeur`, `reset_password`, `avatar`) VALUES
(1, 'Guiol', 'Clément', 'CleMenTus', 'clement.guiol@gmail.com', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 0, NULL, '../assets/images/profil/0user.png'),
(2, 'Rolland', 'Jean-Michel', 'JMR', 'jean-michel.rolland@isen.fr', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 1, NULL, NULL),
(3, 'Bescond', 'Marc', 'MB', 'marc.bescond@isen.fr', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 1, NULL, NULL),
(4, 'Patrone', 'Lionel', 'LP', 'lionel.patrone@isen.fr', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 1, NULL, NULL),
(5, 'Perony', 'Christine', 'CP', 'christine.perony@isen.fr', '56eacb300613db3e0f6aaf821db223c0', 'FR', 0, 0, 1, NULL, NULL),
(6, 'etudiant', 'etudiant', 'etudiant', 'etudiant@gmail.com', '56eacb300613db3e0f6aaf821db223c0', 'france', NULL, NULL, NULL, 'salut', NULL),
(7, 'etudiant', 'etudiant', 'etudiant', 'etudiant@gmail.com', '56eacb300613db3e0f6aaf821db223c0', 'france', NULL, NULL, NULL, 'salut', NULL),
(8, 'Isenien', 'Isenien', 'Isenien', 'isenien@isen.fr', '56eacb300613db3e0f6aaf821db223c0', 'france', NULL, NULL, NULL, NULL, NULL),
(9, 'Isenien', 'Isenien', 'Isenien', 'Isenien@isen.fr\r\n', '56eacb300613db3e0f6aaf821db223c0', 'france', NULL, NULL, NULL, NULL, NULL),
(10, 'Kokorina', 'Slavyana', 'Slav', 'slavyana.kokorina@gmail.com', '6ff54b90931826a2f3433d668b68d194', 'FR', NULL, 1, NULL, NULL, '../assets/images/profil/0user.png');

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
