-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 23 Mai 2016 à 18:45
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
-- Structure de la table `qcm`
--

CREATE TABLE IF NOT EXISTS `qcm` (
  `id_qcm` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(8000) DEFAULT NULL,
  `reponse_qcm` varchar(8000) DEFAULT NULL,
  `solution` varchar(8000) DEFAULT NULL,
  `indice_qcm` varchar(8000) DEFAULT NULL,
  `explication_qcm` varchar(520) NOT NULL,
  `id_exercice` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_qcm`),
  KEY `FK_qcm_id_exercice` (`id_exercice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `qcm`
--

INSERT INTO `qcm` (`id_qcm`, `question`, `reponse_qcm`, `solution`, `indice_qcm`, `explication_qcm`, `id_exercice`) VALUES
(1, 'Parmi les propositions suivantes, choisir la bonne réponse. Le nom et prenom il faut l’écrire sous la forme suivante (plusieurs réponses sont possibles):', 'M. Clément GUIOL-Olivier Garnier-Madame Olivia Serre-Mme Odette Dupont-Olivier SCHULTZ-Victor Gerard-Slavyana Kokorina-Monsieur Jeson Dupont-Jean Nicolas-PERRICHON Guillaume-Clément DAVID', '4-10', 'devine1', 'df', 1),
(2, 'Parmi les propositions suivantes, choisissez la bonne réponse.<br><br>\n\nSituation 1<br>\nVous êtes ingénieur en informatique. Vous avez 20 ans d’expérience. <br>Vous avez travaillé dans 5 entreprises différentes.<br> Vous avez obtenu votre Bac S avec mention “Bien”, vous avez validé votre diplôme d’ingénieur avec les félicitations. <br>\n\nQuelles informations allez-vous indiquer dans votre CV?\n', 'Formation avec les informations sur le BAC, sur votre école d’ingénieur et sur votre diplôme-\r\nExpérience professionnelle-\r\nFormation avec les informations sur votre école d’ingénieur, sur la gratification de votre diplôme\r\n', 'Expérience professionnelle\r\n', '45654654', 'correction situation 1', 4),
(3, 'Quelle est la capitale de la France', 'oui-non', 'non', '456', 'dfg', 5),
(4, 'Quelle est votre école d''ingénieur', 'oui-non', 'oui', 'c''est oui45645', 'cbvb', 5),
(5, 'Dans qu''elle entreprise souhaitez-vous travailler', 'DCNS-GEMALTO-ATO-Google-Airbus-AirFrance-L''armée', 'GEMALTO', 'devine456456', 'cvb', 6),
(6, 'Quelle est la relation du temps?', 'Je sais pas-Peut-être ca-Nop', 'Nop', '123', '', 7),
(7, 'Quelle équation est correcte?', 'E = mc²-A+B = 3-5+5 = 10', 'E = mc²-5+5 = 10', 'devine1', '', 8),
(8, 'Quel est le facteur à prendre en compte dans E=mc²?', 'Le temps-La vitesse-Le taux de stress-Que ca fait 6 syllabes', 'La vitesse', 'devine', '', 9),
(9, 'Les actifs organisationnels sont :', 'La description de l''organisation de l''entreprise-De bonnes pratiques ou normes internes-Des contraintes qui limitent l''équipe projet-Une répartition analytique des coûts du projet', 'De bonnes pratiques ou normes internes', '456', '', 10),
(10, 'Les certifications du PMI® permettent : ', 'La reconnaissance, au niveau international, des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient-La reconnaissance, au niveau national, des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient-La reconnaissance des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient et son entreprise-La reconnaissance des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient et ce tout au long de sa carrière\n', 'La reconnaissance, au niveau international, des connaissances et des compétences dans les divers domaines du management de projet pour celui qui la détient', NULL, '', 11),
(11, 'Le PMI® ou Project Management Institute®  est la plus grande association mondiale de professionnels du management de projet. Toutes ces affirmations la concernant sont vraies SAUF : ', 'Le PMI®  est une association à but non lucratif, présente dans plus de 200 pays sur tous les continents-Le PMI®promeut des certifications professionnelles qui aident les professionnels en management de projet à démarrer, construire et développer leur carrière en projet, programme ou portefeuille de projets-Le PMI® offre un forum de libre échange d’idées, d’applications et de solutions-Le PMI® est constitué d''experts techniques, spécialisés en management de projet\r\n', 'Le PMI® est constitué experts techniques, spécialisés en management de projet', '789', '', 12),
(12, 'Le PMI® ou Project Management Institute®  est la plus grande association mondiale de professionnels du management de projet. Toutes ces affirmations la concernant sont vraies SAUF : Quels sont les concepts fondamentaux qui structurent le management de projet dans le PMBOK® Guide ?', 'Il s''agit des processus, des domaines de connaissance et des groupes de processus-Il s''agit des processus, de leurs entrées/sorties et des outils et techniques-Il s''agit des domaines techniques, des processus et des outils du Chef de projet-Il s''agit des compétences du Chef de projet, des processsus et des domaines de connaissance', 'Il sagit des processus, des domaines de connaissance et des groupes de processus', '45', '', 13),
(13, 'Le plan de management de projet est le moins utilisé pour laquelle des affirmations suivantes ?', 'Guide l’exécution du projet-Documente les hypothèses de planification-Aide au développement de la charte du projet-Facilite la communication entre les parties prenantes internes au projet', 'Aide au développement de la charte du projet', '456', '', 14),
(14, 'Le processsus "Surveiller et maîtriser le travail du projet" est le processus qui permet de gérer l''avancement du projet. Ses intérêts principaux sont tout SAUF :', 'Mettre à jour le plan de management et les documents du projet-Valider toutes les demandes de modification-Mesurer et analyser régulièrement la performance du projet-Faire comprendre aux parties prenantes  l’état actuel du projet', 'Valider toutes les demandes de modification', NULL, '', 14),
(15, 'Le processsus "Surveiller et maîtriser le travail du projet" est le processus qui permet de gérer l''avancement du projet. Ses intérêts principaux sont tout SAUF :', 'Mettre à jour le plan de management et les documents du projet-Valider toutes les demandes de modification-Mesurer et analyser régulièrement la performance du projet-Faire comprendre aux parties prenantes  l’état actuel du projet', 'Valider toutes les demandes de modification', NULL, '', 16),
(16, 'Le plan de management de projet est le moins utilisé pour laquelle des affirmations suivantes ?', 'Guide l’exécution du projet-Documente les hypothèses de planification-Aide au développement de la charte du projet-Facilite la communication entre les parties prenantes internes au projet', 'Aide au développement de la charte du projet', NULL, '', 16),
(17, 'Le plan de management de projet est le moins utilisé pour laquelle des affirmations suivantes ?', 'Guide l’exécution du projet-Documente les hypothèses de planification-Aide au développement de la charte du projet-Facilite la communication entre les parties prenantes internes au projet', 'Aide au développement de la charte du projet', NULL, '', 18),
(18, 'Le plan de management de projet est le moins utilisé pour laquelle des affirmations suivantes ?', 'Guide l’exécution du projet-Documente les hypothèses de planification-Aide au développement de la charte du projet-Facilite la communication entre les parties prenantes internes au projet', 'Aide au développement de la charte du projet', NULL, '', 19),
(19, 'Parmi les propositions suivantes, choisissez la bonne réponse.', '06.40.30.20.30 /\n		04.90.30.10.10\n-04.90.30.10.10 /\n		04.90.20.10.10 /\n06.40.30.20.30\n-\n04.90.30.10.10 (Domicile) /\n		06.40.30.20.30 (Portable)\n-+33 6 40 30 20 30 /\n		04.90.30.10.10 \n-06.40.30.20.30', '0-3-4\n\n', 'devine', '', 21),
(20, 'Choisissez la bonne réponse parmi les propositions suivantes:', '	jean.dupont@isen.fr-	axel.bertrand@yahoo.com-	lapetiteprincesse90@hotmail.com-	camille.bernard@gmail.com-\n	axeldu83@gmail.com', '0-3', 'Aucun', '', 22),
(21, 'Choisissez la bonne réponse parmi les propositions suivantes:', 'On est en 2016. \r\n	Sur votre CV vous avez: 13/01/1966 (50 ans)-\r\n57 ans -On est en 2016.\r\n	Sur votre CV vous avez: 20/04/1981 (34 ans)-\r\nOn est en 2016.\r\n	Sur votre CV vous avez: 1966/01/13 (50 ans)\r\n-\r\nOn est en 2016.\r\n	Sur votre CV vous avez: 20/04/1981\r\n', '0-1-4\n', 'Aucune', '', 23),
(22, 'Vous voulez mettre un lien vers votre réseau social. Le lien vers quel réseau social allez vous choisir? Choisissez la (les) bonne(s) réponse(s)', 'Facebook avec le contenu de votre vie privé-	Badoo-Viadéo-MySpace-Linkedin-	Twitter professionnel-Google+-	Pinterest-Facebook professionnel', '2-4-5-8', 'devine', '', 25),
(23, 'Choisissez parmi les propositions suivantes les qualificatifs qu’il faut surtout pas utiliser dans son CV: (Cette partie comporte 4 parties avec 5 propositions chacune)<br><br>\r\nPartie 1:<br>\r\n', 'Actif-Managé-Motivé-Expert -Autonome', '2-4', 'devine', '', 26),
(24, 'Partie 2:', 'Résolu-Remporté-Leadership-Efficace-Organisé', '2-4', 'devine', '', 26),
(25, 'Partie 3:', 'Passionné-Rigoureux-Créatif-Curieux-Specialisé', '0-2-4', 'devine', '', 26),
(26, 'Partie 4:', 'Realisé -Innovant-Strategique-Réactif-Dynamique', '1-2-4', 'devine', 'c', 26),
(29, 'Vous allez être confronté à des différentes situations.<br> Pour chaque situation plusieurs questions vont vous être posées. Choisissez la bonne réponse à chaque question.<br><br>\nSituation 1<br>\nVous vous appelez Lucie Morel. Vous êtes française. Vous êtes née en Angleterre et vous avez grandi la bas. Vous maitrisez parfaitement la langue anglaise. <br><br>\nQuestion 1<br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', '0', NULL, '', 24),
(31, 'Question 2 <br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance? \n', 'Oui-Non', '0', NULL, '', 24),
(32, 'Situation 2 <br>\nVous vous appelez Jean Lambert. Vous êtes français et vous êtes né en France.<br><br>\nQuestion 1 <br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', '1', NULL, '', 24),
(33, 'Question 2<br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance\n', 'Oui-Non', '1', NULL, '', 24),
(34, 'Situation 3<br>\nVous vous appelez François Perrin. Vous êtes né en Amérique. Vous avez double nationalité (française et américaine).\n<br><br>\nQuestion 1.<br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', '0', NULL, '', 24),
(35, 'Question 2<br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance? \n', 'Oui-Non', '0', NULL, '', 24),
(36, 'Situation 4<br>\nVous vous appelez Daria Darco. Vous êtes italienne. Vous êtes né en Italie. Vous habitez en France. <br><br>\nQuestion 1<br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', '0', NULL, '', 24),
(37, 'Question 2<br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance? \n', 'Oui-Non', '0', NULL, '', 24),
(38, 'Situation 5<br>\nVous vous appelez Adalbert Birke. Vous êtes allemand. Vous êtes né en France. Vous possedez la double nationalité.<br><br>\nQuestion 1<br>\nEst-ce que vous allez mettre sur votre CV votre nationalité? \n', 'Oui-Non', '0', NULL, '', 24),
(39, 'Question 2<br>\nEst-ce que vous allez mettre sur votre CV votre lieu de naissance? \n', 'Oui-Non', '0', NULL, '', 24),
(40, 'Situation 2<br>\r\nVous êtes jeune diplômé d’une école d’ingénieur.<br>Votre expérience professionnelle se limite à deux stages effectués au sein de la même entreprise.<br> Vous avez Bac S.<br>\r\nQuelles informations allez-vous indiquer dans votre CV?\r\n\r\n', 'Formation avec les informations sur le BAC, sur votre école d’ingénieur et sur votre diplôme-\r\nExpérience professionnelle (stages)-\r\nFormation (école d’ingénieur, diplôme)\r\n\r\n', 'Expérience professionnelle (stages)-\r\nFormation (école d’ingénieur, diplôme)', 'devine456', 'correction situation 2', 4),
(41, 'Situation 3<br>\r\nVous êtes ingénieur en électronique. <br>Votre avez 5 ans d’expérience professionnelle. <br>Vous avez travaillé dans 2 entreprises. <br>Vous êtes diplômé d’une école d’ingénieur et vous avez votre BAC.<br>\r\n\r\nQuelles informations allez-vous indiquer dans votre CV?\r\n\r\n\r\n\r\n\r\n', 'Formation (école d’ingénieur, diplôme)-\r\nExpérience professionnelle-\r\nFormation avec les informations sur le BAC, sur votre école d’ingénieur et sur votre diplôme.\r\n\r\n\r\n\r\n', 'Formation (école d’ingénieur, diplôme)-\r\nExpérience professionnelle', '546', 'correction situation 3', 4),
(42, 'Situation 4.<br>\r\nVous êtes jeune diplômé. Vous êtes diplômé d’une école d’ingénieur.<br> Vous avez un double diplôme car vous avez fait un an d’études dans une université étrangère.<br> Vous avez votre BAC avec mention.<br> Votre expérience professionnelle se limite aux stages effectués durant vos études.<br>\r\nQuelles informations allez-vous indiquer dans votre CV?\r\n\r\n\r\n\r\n', 'Formation (école d’ingénieur, diplôme, BAC avec mention)-\r\nExpérience professionnelle (stages)-\r\nFormation avec les informations sur le BAC, sur votre école d’ingénieur et sur votre diplôme-\r\nFormation (école d’ingénieur,  double diplôme, université à l’étranger)\r\n\r\n\r\n', 'Expérience professionnelle (stages)-Formation (école d’ingénieur,  double diplôme, université à l’étranger)', 'devine456', 'correction situation 4', 4),
(43, 'Partie 2:<br>\nVous avez fait une classe préparatoire en 3 ans, ensuite vous avez intégré une école d’ingénieur et vous avez fait 3 ans d’école d’ingénieur.<br> En 3eme année de votre formation au sein de l’école d’ingénieur vous êtes parti à l’étranger et vous avez obtenu un double diplôme.<br><br>\n\nParmi les propositions suivantes, choisissez la réponse qui correspond le mieux à cette situation :<br>\n\n\n\n\n\n', '2009 2012 / Classe Préparatoire Mathématiques Physique / Lycée Dumont d’Urville, Toulon\n2012 2014 / Diplôme d’ingénieur en informatique / Spécialité en informatique et en management / Institut Supérieur de l’électronique et du numérique Toulon\n2014 2015 / Diplôme Maîtrise Génie Informatique / Spécialité en informatique et management / Université de Sherbrooke, Canada-\n\n2014 2015 / Diplôme Maîtrise Génie Informatique / Spécialité en informatique et management / Université de Sherbrooke\n2012 2014 / Diplôme d’ingénieur en informatique / Spécialité en informatique et en management / Institut Supérieur de l’électronique et du numérique\n2009 2012 / Classe Préparatoire Mathématiques Physique / Lycée Dumont d’Urville-\n\n2014 2015 / Diplôme Maîtrise Génie Informatique / Spécialité en informatique et management / Université de Sherbrooke, Canada\n2012 2014 / Diplôme d’ingénieur en informatique / Spécialité en informatique et en management / Institut Supérieur de l’électronique et du numérique Toulon 2009 2012 / Classe Préparatoire Mathématiques Physique / Lycée Dumont d’Urville, Toulon-\n\n2014 2015 / Diplôme Maîtrise Génie Informatique / Spécialité en informatique et management / Université de Sherbrooke, Canada\n2009 2012 / Classe Préparatoire Mathématiques Physique / Lycée Dumont d’Urville, Toulon\n2012 2014 / Diplôme d’ingénieur en informatique / Spécialité en informatique et en management / Institut Supérieur de l’électronique et du numérique Toulon\n\n\n\n\n\n\n\n\n', '2014 2015 / Diplôme Maîtrise Génie Informatique / Spécialité en informatique et management / Université de Sherbrooke, Canada\n2012 2014 / Diplôme d’ingénieur en informatique / Spécialité en informatique et en management / Institut Supérieur de l’électronique et du numérique Toulon\n2009 2012 / Classe Préparatoire Mathématiques Physique / Lycée Dumont d’Urville, Toulon', '456', 'correction situation 1', 28),
(44, 'Parmi les propositions suivantes, sélectionner la (les) partie(s) “Formation” du CV qui contient (contiennent) des erreurs\n\n\n\n', '2014 2015 / Diplôme Maîtrise Génie Informatique / Spécialité en informatique et management / Université de Sherbrooke, Canada\n  2012 2014 / Diplôme d’ingénieur en informatique / Spécialité en informatique et en management / Institut Supérieur de l’électronique et du numérique Toulon\n  2009 2012 / Classe Préparatoire Mathématiques Physique / Lycée Dumont d’Urville, Toulon\n  2009 / Baccalauréat Scientifique mention “Bien” / Lycée Dumont d’Urville-\n\n2014 2016 / Diplôme d''ingénieur en informatique / Spécialité innovation / Institut Supérieur de l’électronique et du numérique Toulon\n  2011 2014 / Cycle Préparatoire Intégré / Spécialité informatique et réseaux / Institut Supérieur de l’électronique et du numérique Toulon-\n\n2009 / Baccalauréat Scientifique / Lycée La Cordeille, Toulon\n  2009 2011 / Classes préparatoires option MP / Lycée La Cordeille, Toulon\n  2011 2014 / Cycle ingénieur / Spécialité électronique / Institut Supérieur de l’électronique et du numérique Toulon-\n2005 2008 / Cycle ingénieur / Institut Supérieur de l’électronique et du numérique Toulon\n  2003 2005 / DUT / Option Services et Réseaux de Communication / IUT de Bobigny, Université Paris 13\n\n\n\n', '2014 2015 / Diplôme Maîtrise Génie Informatique / Spécialité en informatique et management / Université de Sherbrooke, Canada\n  2012 2014 / Diplôme d’ingénieur en informatique / Spécialité en informatique et en management / Institut Supérieur de l’électronique et du numérique Toulon\n  2009 2012 / Classe Préparatoire Mathématiques Physique / Lycée Dumont d’Urville, Toulon\n  2009 / Baccalauréat Scientifique mention “Bien” / Lycée Dumont d’Urville-2009 / Baccalauréat Scientifique / Lycée La Cordeille, Toulon\n  2009 2011 / Classes préparatoires option MP / Lycée La Cordeille, Toulon\n  2011 2014 / Cycle ingénieur / Spécialité électronique / Institut Supérieur de l’électronique et du numérique Toulon', 'devine', 'correction erreur cb', 27),
(45, 'Parmi les propositions suivantes, choisissez la meilleure réponse<br><br>\r\nSituation 1:<br><br>\r\nVous cherchez du travail sur Paris et vous habitez à 100 km de Paris<br>\r\nSur votre CV vous allez mettre:', 'Nom ville / Nom pays / Mobilité internationale-\r\nMobilité nationale-\r\nNom ville / Mobilité nationale-\r\nMobilité régionale-\r\nAdresse ligne 1 / Adresse ligne 2 / Nom ville\r\n\r\n', '3', 'devine', '', 20),
(46, 'Choisir la photo qui à votre avis correspond le mieux pour un CV', '<img src="../../app/images/jpg/photo1.jpg" style="width:70px;">-\n<img src="../../app/images/jpg/photo2.jpg" style="width:70px;">-\n<img src="../../app/images/jpg/photo3.jpg" style="width:70px;">-\n<img src="../../app/images/jpg/photo4.jpg" style="width:70px;">-\n<img src="../../app/images/jpg/photo5.jpg" style="width:70px;">-\n<img src="../../app/images/jpg/photo6.jpg" style="width:70px;">-\n<img src="../../app/images/jpg/photo7.jpg" style="width:70px;">\n\n', '4', 'devine', '', 29),
(47, 'Situation 2:<br><br>\r\nVous cherchez du travail sur Marseille et vous habitez à 10km de Marseille<br>\r\nSur votre CV vous allez mettre:', 'Nom ville / Nom pays / Mobilité internationale-\nMobilité nationale-\nNom ville / Mobilité nationale-\nMobilité régionale-\nAdresse ligne 1 / Adresse ligne 2 / Nom ville', '4', '54', '', 20),
(48, 'Situation 3:<br><br>\r\nVous cherchez du travail sur Nantes et vous habitez  à Nice<br>\r\nSur votre CV vous allez mettre:', 'Nom ville / Nom pays / Mobilité internationale-\r\nMobilité nationale-\r\nNom ville / Mobilité nationale-\r\nMobilité régionale-\r\nAdresse ligne 1 / Adresse ligne 2 / Nom ville', '1', 'devine', '', 20),
(49, 'Situation 4:<br><br>\nVous cherchez du travail sur Londres et vous habitez en France<br>\nSur votre CV vous allez mettre:', 'Nom ville / Nom pays / Mobilité internationale-\nMobilité nationale-\nNom ville / Mobilité nationale-\nMobilité régionale-\nAdresse ligne 1 / Adresse ligne 2 / Nom ville', '0', '46', '', 20),
(50, 'Situation 5:<br><br>\r\nVous cherchez du travail en Bretagne et vous habitez en Normandie<br>\r\nSur votre CV vous allez mettre:', 'Nom ville / Nom pays / Mobilité internationale-\nMobilité nationale-\nNom ville / Mobilité nationale-\nMobilité régionale-\nAdresse ligne 1 / Adresse ligne 2 / Nom ville', '2', '456', '', 20);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `qcm`
--
ALTER TABLE `qcm`
  ADD CONSTRAINT `FK_qcm_id_exercice` FOREIGN KEY (`id_exercice`) REFERENCES `exercice` (`id_exercice`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
