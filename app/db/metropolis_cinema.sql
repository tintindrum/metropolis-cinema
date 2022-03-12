-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 12 mars 2022 à 15:59
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `metropolis_cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

DROP TABLE IF EXISTS `acteurs`;
CREATE TABLE IF NOT EXISTS `acteurs` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_acteur` varchar(255) NOT NULL,
  `prenom_acteur` varchar(255) NOT NULL,
  `nation_acteur` varchar(255) NOT NULL,
  `date_acteur` date NOT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `id_categorie` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_categorie`,`id_film`),
  KEY `appartenir_films0_FK` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `appartenir`
--

INSERT INTO `appartenir` (`id_categorie`, `id_film`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(2, 8),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(5, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_film` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `categorie_film`) VALUES
(1, 'Action'),
(2, 'Aventure'),
(3, 'Science-fiction'),
(4, 'Fantastique'),
(5, 'comédie'),
(6, 'romantique'),
(7, 'Animation'),
(8, 'Guerre'),
(9, 'Horreur'),
(10, 'Documentaire');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `nom_film` varchar(255) NOT NULL,
  `image_film` varchar(255) NOT NULL,
  `resume_film` varchar(2000) NOT NULL,
  `duree_film` time NOT NULL,
  `video_film` varchar(50) NOT NULL,
  `note_film` float NOT NULL,
  `dernierajout_film` timestamp NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id_film`, `nom_film`, `image_film`, `resume_film`, `duree_film`, `video_film`, `note_film`, `dernierajout_film`) VALUES
(1, 'Iron man ', 'action_Iron_Man', 'Alors qu\'il fait l\'essai d\'une arme de son invention en Afghanistan, le milliardaire Tony Stark est capturé par des insurgés qui le forcent à travailler pour eux. Mais à leur insu, le scientifique crée pour lui-même une armure superpuissante au moyen de laquelle il s\'évade et rentre aux États-Unis. Transformé par son aventure, il décide de mettre son génie et sa fortune au service du Bien.\r\n', '02:06:00', 'https://www.youtube.com/watch?v=7DC9Lqi7b6U', 3.4, '2022-03-24 08:28:04'),
(2, 'Fast and Furious 5\r\n', 'action_fastandfuriousfast_film', 'L\'ancien policier Brian O\'Conner et son ami l\'ex-prisonnier Dom Toretto sont maintenant tous deux considérés comme des ennemis de l\'État. Après que Brian et Mia ont aidé Dom à s\'évader de prison, ils ont traversé assez de frontières et brisé assez de lois pour attirer l\'attention des autorités. Maintenant reclus à Rio de Janeiro, ils doivent accomplir un dernier travail pour retrouver enfin leur liberté.\r\n', '02:10:00', 'https://www.youtube.com/watch?v=vcn2GOuZCKI', 3.3, '0000-00-00 00:00:00'),
(3, 'Rambo II', 'action_Rambo_-_First_Blood_Part_II', 'Ex-combattant du Viêtnam, John Rambo purge une peine de cinq années de prison. Son ancien colonel lui offre une chance de se racheter : il devra retourner au Viêtnam et repérer les camps détenant des prisonniers américains depuis la fin de la guerre. Rambo prend sa tâche très au sérieux et ne tarde pas à découvrir quelques compatriotes gémissant sous le joug de tortionnaires communistes.\r\n', '01:36:00', 'https://www.youtube.com/watch?v=-Q2NFOBudVE', 2.8, '0000-00-00 00:00:00'),
(4, 'Avengers', 'action_The_Avengers', 'Quand un ennemi inattendu fait surface pour menacer la sécurité et l\'équilibre mondial, Nick Fury, directeur de l\'agence internationale pour le maintien de la paix, connue sous le nom du S.H.I.E.L.D., doit former une équipe pour éviter une catastrophe mondiale imminente. Un effort de recrutement à l\'échelle mondiale est mis en place, pour finalement réunir l\'équipe de super héros de rêve, dont Iron Man, l\'incroyable Hulk, Thor, Captain America, Hawkeye et Black Widow.\r\n', '02:23:00', 'https://www.youtube.com/watch?v=b-kTeJhHOhc', 4, '0000-00-00 00:00:00'),
(5, 'Rocky', 'action_Rocky', 'Rocky Balboa travaille pour Tony Gazzo, un usurier, et dispute de temps à autre des combats de boxe pour quelques dizaines de dollars sous l\'appellation de l\'Étalon Italien. Cependant, Mickey, propriétaire du club de boxe où Rocky a l\'habitude de s\'entraîner, décide de céder son casier à un boxeur plus talentueux.\r\n', '01:59:00', 'https://www.youtube.com/watch?v=rnS20usFqYs', 2.8, '0000-00-00 00:00:00'),
(6, 'The Dark Knight, Le Chevalier Noir\r\n', 'action_batmanthedarkknight', 'Batman est plus que jamais déterminé à éradiquer le crime organisé qui sème la terreur en ville. Epaulé par le lieutenant Jim Gordon et par le procureur de Gotham City, Harvey Dent, Batman voit son champ d\'action s\'élargir. La collaboration des trois hommes s\'avère très efficace et ne tarde pas à porter ses fruits jusqu\'à ce qu\'un criminel redoutable vienne plonger la ville de Gotham City dans le chaos.', '02:32:00', 'https://www.youtube.com/watch?v=UMgb3hQCb08', 4.5, '0000-00-00 00:00:00'),
(7, 'Le parrain\r\n', 'action_The_Godfather', 'En 1945, à New York, les Corleone sont une des 5 familles de la mafia. Don Vito Corleone, `parrain\' de cette famille, marie sa fille à un bookmaker. Sollozzo, `parrain\' de la famille Tattaglia, propose à Don Vito une association dans le trafic de drogue, mais celui-ci refuse. Sonny, un de ses fils, y est quant à lui favorable. Afin de traiter avec Sonny, Sollozzo tente de faire tuer Don Vito, mais celui-ci en réchappe.\r\n\r\n', '02:55:00', 'https://www.youtube.com/watch?v=UaVTIH8mujA', 4.5, '0000-00-00 00:00:00'),
(8, 'Le Seigneur des anneaux : Le Retour du roi\r\n', 'aventure_The_Lord_of_the_Rings_-_The_Return_of_the_King', 'Les armées de Sauron ont attaqué Minas Tirith, la capitale du Gondor. Jamais ce royaume autrefois puissant n\'a eu autant besoin de son roi. Cependant, Aragorn trouvera-t-il en lui la volonté d\'accomplir sa destinée ? Tandis que Gandalf s\'efforce de soutenir les forces brisées de Gondor, Théoden exhorte les guerriers de Rohan à se joindre au combat. Cependant, malgré leur courage et leur loyauté, les forces des Hommes ne sont pas de taille à lutter contre les innombrables légions d\'ennemis.\r\n\r\n', '03:21:00', 'https://www.youtube.com/watch?v=RCuDRcK0BBM', 4.7, '0000-00-00 00:00:00'),
(10, 'Titanic\r\n', 'aventure_Titanic', 'En 1997, l\'épave du Titanic est l\'objet d\'une exploration fiévreuse, menée par des chercheurs de trésor en quête d\'un diamant bleu qui se trouvait à bord. Frappée par un reportage télévisé, l\'une des rescapées du naufrage, âgée de 102 ans, Rose DeWitt, se rend sur place et évoque ses souvenirs. 1912. Fiancée à un industriel arrogant, Rose croise sur le bateau un artiste sans le sou.\r\n\r\n', '03:14:00', 'https://www.youtube.com/watch?v=cIJ8ma0kKtY', 4.3, '0000-00-00 00:00:00'),
(11, 'Pirates des Caraïbes : Le Secret du coffre maudit', 'aventure_Pirates_of_the_Caribbean_-_Dead_Mans_Chest', 'Lorsque le pirate fantôme Davy Jones vient réclamer sa dette de sang à l\'excentrique capitaine Jack Sparrow, ce dernier cherche un moyen d\'échapper à ce cruel destin qui garantirait la damnation de son âme pour l\'éternité. L\'astucieux pirate parvient cependant à interrompre le mariage des amis de Jack, Will Turner et Elizabeth Swann.\r\n', '02:31:00', 'https://www.youtube.com/watch?v=fKBH7kup-jo', 3.9, '0000-00-00 00:00:00'),
(12, 'Le Hobbit: La désolation de Smaug\r\n', 'aventure_The_Hobbit_-_The_Desolation_of_Smaug', 'Bilbon Sacquet et les Nains continuent leur quête vers la Montagne Solitaire. Les trolls sont à leurs trousses alors qu\'ils s\'engagent dans la dangereuse forêt de Mirkwood. Attaqués par des araignées géantes puis capturés par les Elfes, ils s\'évadent et sont sauvés grâce aux talents au combat de Legolas et de Tauriel. Pendant ce temps, Gandalf est sur la piste de la force sombre qui prépare secrètement son retour à Dol Guldur.\r\n', '02:41:00', 'https://www.youtube.com/watch?v=Rkz0chZW_VQ', 4.2, '0000-00-00 00:00:00'),
(13, 'Hunger Games : L\'Embrasement\r\n', 'aventure_The_Hunger_Games_-_Catching_Fire', 'Katniss Everdeen est rentrée chez elle saine et sauve après avoir remporté la 74e édition des Hunger Games avec son partenaire Peeta Mellark. Puisqu\'ils ont gagné, ils sont obligés de laisser une fois de plus leur famille et leurs amis pour partir faire la Tournée de la victoire dans tous les districts. Au fil de son voyage, Katniss sent que la révolte gronde, mais le Capitole exerce toujours un contrôle sur les districts tandis que le Président Snow prépare la 75e édition des Hunger Games.\r\n', '02:26:00', 'https://www.youtube.com/watch?v=joPveEKnxaw', 3.9, '0000-00-00 00:00:00'),
(14, 'Le Hobbit : Un voyage inattendu\r\n', 'aventure_The_Hobbit_-_An_Unexpected_Journey', 'Bilbon Sacquet mène une existence paisible dans sa maison, jusqu\'à ce que le magicien Gandalf vienne le chercher pour qu\'il prenne part à une aventure avec un groupe de nains. Ces derniers veulent reconquérir leur royaume, détruit par le terrible dragon cracheur de feu Smaug, qui habite toujours les lieux, planqué sous des milliers de pièces d\'or. Ils devront affronter des orques, des gobelins, des trolls, sympathiser avec les Elfes, leurs ennemis, et affronter des forces maléfiques.\r\n', '02:49:00', 'https://www.youtube.com/watch?v=tiy7peMH3g8', 4.2, '0000-00-00 00:00:00'),
(15, 'Harry Potter à l\'école des sorciers\r\n', 'aventure_harrypotterandthesorcerersstonemovie', 'Harry Potter, un jeune orphelin, est élevé par son oncle et sa tante qui le détestent. Alors qu\'il était haut comme trois pommes, ces derniers lui ont raconté que ses parents étaient morts dans un accident de voiture. Le jour de son onzième anniversaire, Harry reçoit la visite inattendue d\'un homme gigantesque se nommant Rubeus Hagrid, et celui-ci lui révèle qu\'il est en fait le fils de deux puissants magiciens et qu\'il possède lui aussi d\'extraordinaires pouvoirs.\r\n', '02:32:00', 'https://www.youtube.com/watch?v=wrMb0o6hlDQ', 4.6, '0000-00-00 00:00:00'),
(16, 'Harry Potter et la Chambre des secrets\r\n', 'aventure_Harry_Potter_and_the_Chamber_of_Secrets', 'Alors que l\'oncle Vernon, la tante Pétunia et son cousin Dudley reçoivent d\'importants invités à dîner, Harry Potter est contraint de passer la soirée dans sa chambre. Dobby, un elfe, fait alors son apparition. Il lui annonce que de terribles dangers menacent l\'école de Poudlard et qu\'il ne doit pas y retourner en septembre. Harry refuse de le croire. Mais sitôt la rentrée des classes effectuée, ce dernier entend une voix malveillante.\r\n', '02:41:00', 'https://www.youtube.com/watch?v=Z3T8PuWuoL0', 3.9, '0000-00-00 00:00:00'),
(17, 'Click', 'comedie_click', 'Michael Newman n\'en peut plus : malgré tous ses efforts, ce jeune architecte ne parvient pas à obtenir la reconnaissance de son patron. Pourtant, il se donne corps et âme à son métier. Par conséquent, il néglige totalement sa vie de famille. Michael n\'a plus une minute pour Donna, son épouse, ni même une seconde pour ses deux enfants, Ben et Samantha. Un jour, particulièrement fatigué, il s\'emporte contre la dizaine de télécommandes dont la maison est équipée.\r\n', '01:47:00', 'https://www.youtube.com/watch?v=QRZOJMXXwxk', 2.4, '0000-00-00 00:00:00'),
(18, 'Bad Teacher\r\n', 'comedie_badteacher_film', 'Elizabeth Halsey n\'est vraiment pas faite pour enseigner. Elle n\'a rien à faire des enfants, elle parle mal, elle boit, fume n\'importe quoi et ne pense qu\'à une chose : se marier pour quitter son job d\'enseignante au collège. Lorsque son fiancé la plaque, elle se met en tête d\'épouser un jeune prof remplaçant aussi séduisant que riche.\r\n', '01:32:00', 'https://www.youtube.com/watch?v=fYeoyPMFdTk', 2.1, '0000-00-00 00:00:00'),
(19, 'American Pie 4 : Réunion\r\n', 'comedie_meetingamericanpie_film', 'C\'était l\'été 1999 lorsque quatre garçons d\'une ville du Michigan entreprennent une quête afin de perdre leur virginité. Les années ont passé, Jim et Michelle se sont mariés alors que Kevin et Vicky se sont quittés. Oz et Heather ont pris des chemins différents, mais Finch craque toujours pour la mère de Stifler. Devenus adultes, ces amis retrouvent à présent leur collège pour évoquer leurs souvenirs d\'ados exaltés qui ont donné naissance à une saga comique légendaire.\r\n', '01:53:00', 'https://www.youtube.com/watch?v=Zi2_FL7nc-w', 3.4, '0000-00-00 00:00:00'),
(20, 'Dragons', 'comedie_How_to_Train_Your_Dragon', 'Hiccup est un adolescent viking de l\'île de Berk, où se battre avec des dragons est un mode de vie. Ses idées progressistes et son sens de l\'humour étrange le tiennent à part des autres, malgré le fait que son père est le chef du clan. Entraîné dans une école de combat de dragon, il essaie de prouvr qu\'il est un vrai viking. Mais quand il se lie d\'amitier avec un dragon blessé qu\'il nomme Kromou, il a la chance de tracer une nouvelle voie pour l\'avenir de son peuple.\r\n', '01:38:00', 'https://www.youtube.com/watch?v=Q1i2Vbq7Pr0', 4.3, '0000-00-00 00:00:00'),
(21, 'Epic Movie ', 'comedie_EpicMovie_film', 'Lors d\'une visite dans une usine de chocolat, quatre orphelins se retrouvent dans une armoire magique où ils doivent combattre une reine diabolique.', '01:33:00', 'https://www.youtube.com/watch?v=1ltiqNTYZbA', 1, '0000-00-00 00:00:00'),
(22, 'Retour vers le futur\r\n', 'SF_Back_to_the_Future', 'Le jeune Marty McFly mène une existence anonyme, auprès de sa petite amie Jennifer, seulement troublée par sa famille en crise et un proviseur qui serait ravi de l\'expulser du lycée. Ami de l\'excentrique professeur Emmett Brown, il l\'accompagne tester sa nouvelle expérience : le voyage dans le temps via une DeLorean modifiée. La démonstration tourne mal : des trafiquants d\'armes débarquent et assassinent le scientifique.\r\n', '01:56:00', 'https://www.youtube.com/watch?v=WRrCVyT09ow', 4.5, '0000-00-00 00:00:00'),
(23, 'Star Wars, épisode I : La Menace fantôme\r\n', 'SF_Star_Wars_Episode_I__The_Phantom_Menace', 'Avant de devenir un célèbre chevalier Jedi, et bien avant de se révéler l\'âme la plus noire de la galaxie, Anakin Skywalker est un jeune esclave sur la planète Tatooine. La Force est déjà puissante en lui et il est un remarquable pilote de Podracer. Le maître Jedi Qui-Gon Jinn le découvre et entrevoit alors son immense potentiel. Pendant ce temps, l\'armée de droïdes de l\'insatiable Fédération du Commerce a envahi Naboo dans le cadre d\'un plan secret des Sith visant à accroître leur pouvoir.\r\n', '02:16:00', 'https://www.youtube.com/watch?v=CJFOaru5BTU', 3.5, '0000-00-00 00:00:00'),
(24, 'Star Wars, épisode IV : Un nouvel espoir\r\n', 'SF_Star_Wars_Episode_IV_A_New_Hope', 'Il y a bien longtemps, dans une galaxie très lointaine. La guerre civile fait rage entre l\'Empire galactique et l\'Alliance rebelle. Capturée par les troupes de choc de l\'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l\'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi.\r\n', '02:01:00', 'https://www.youtube.com/watch?v=TzSm9dWso1o', 4.4, '0000-00-00 00:00:00'),
(25, 'Star Wars, épisode VI : Le Retour du Jedi\r\n', 'SF_Star_Wars_Episode_VI_Return_of_the_Jedi', 'L\'empire galactique est plus puissant que jamais : la construction de la nouvelle arme, l\'étoile de la mort, menace l\'univers tout entier... Han Solo est remis à l\'ignoble contrebandier Jabba le Hutt par le chasseur de primes Boba Fett. après l\'échec d\'une première tentative d\'évasion menée par la princesse Leia, également arrêtée par Jabba, Luke Skywalker et Lando parviennent à libérer leurs amis.\r\n', '02:11:00', 'https://www.youtube.com/watch?v=_RyLnrVDaxk', 4.4, '0000-00-00 00:00:00'),
(26, 'Star Trek\r\n', 'SF_Star_Trek', 'À peine sorti de l\'Académie de Starfleet, le jeune James T. Kirk se retrouve à bord de l\'Enterprise où il fait la connaissance de ceux qui deviendront ses membres d\'équipage et amis; ils partent tous combattre une menace pour la survie de la Terre.\r\n', '02:07:00', 'https://www.youtube.com/watch?v=RTf3ivUFEKM', 3.9, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

DROP TABLE IF EXISTS `jouer`;
CREATE TABLE IF NOT EXISTS `jouer` (
  `id_film` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  PRIMARY KEY (`id_film`,`id_acteur`),
  KEY `jouer_acteur0_FK` (`id_acteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `producteurs`
--

DROP TABLE IF EXISTS `producteurs`;
CREATE TABLE IF NOT EXISTS `producteurs` (
  `id_producteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_producteur` varchar(255) NOT NULL,
  `prenom_producteur` varchar(255) NOT NULL,
  `nation_producteur` varchar(255) NOT NULL,
  `date_producteur` date NOT NULL,
  PRIMARY KEY (`id_producteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produire`
--

DROP TABLE IF EXISTS `produire`;
CREATE TABLE IF NOT EXISTS `produire` (
  `id_film` int(11) NOT NULL,
  `id_producteur` int(11) NOT NULL,
  PRIMARY KEY (`id_film`,`id_producteur`),
  KEY `¨produire_producteur0_FK` (`id_producteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `realisateurs`
--

DROP TABLE IF EXISTS `realisateurs`;
CREATE TABLE IF NOT EXISTS `realisateurs` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_realisateur` varchar(255) NOT NULL,
  `prenom_realisateur` varchar(255) NOT NULL,
  `nation_realisateur` varchar(255) NOT NULL,
  `date_realisateur` date NOT NULL,
  PRIMARY KEY (`id_realisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `realiser`
--

DROP TABLE IF EXISTS `realiser`;
CREATE TABLE IF NOT EXISTS `realiser` (
  `id_realisateur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_realisateur`,`id_film`),
  KEY `realiser_films0_FK` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(255) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id_role`, `nom_role`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `mail_user` varchar(255) NOT NULL,
  `mdp_user` varchar(255) NOT NULL,
  `nom_user` varchar(255) NOT NULL,
  `prenom_user` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `users_role_FK` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `mail_user`, `mdp_user`, `nom_user`, `prenom_user`, `id_role`) VALUES
(2, 'quentin-drumel@hotmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', 'quentin', 'drum', 1),
(3, 'quentinumel@hotmail.co', 'aze', 'drum', 'quentin', 1),
(4, 'andy@hotmail.com', '094c8a01023a2b66547846c7e3e2268d4217a266', 'andy', 'hu', 1),
(5, 'axazeae@gmail.com', 'test123', 'Va', 'Ax', 1),
(6, 'kellyprt@hotmail.com', 'aze', 'kelly', 'pro', 1),
(7, 'quentin@hotmail.com', 'qsd', 'dru', 'quen', 1),
(8, 'quentin@hotmail.co', 'wxc', 'dru', 'quen', 1),
(9, 'quentin@hotmail.c', 'mplo', 'dru', 'quen', 1),
(10, 'quentin@hotmail.fr', 'ki', 'dru', 'quen', 1),
(11, 'andy@hotmail.fr', 'aze', 'drum', 'que', 1),
(12, 'andy@gmail.fr', 'aze', 'drum', 'que', 1),
(13, 'quentinumel@hotmail.fr', 'aze', 'drum', 'que', 1),
(14, 'quentin-drumel@hotmail.fr', 'aze', 'fzeff', 'ezfezf', 1),
(15, 'andy@hotmail.org', 'aze', 'andy', 'efeee', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `appartenir_categorie_FK` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`),
  ADD CONSTRAINT `appartenir_films0_FK` FOREIGN KEY (`id_film`) REFERENCES `films` (`id_film`);

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `jouer_acteur0_FK` FOREIGN KEY (`id_acteur`) REFERENCES `acteurs` (`id_acteur`),
  ADD CONSTRAINT `jouer_films_FK` FOREIGN KEY (`id_film`) REFERENCES `films` (`id_film`);

--
-- Contraintes pour la table `produire`
--
ALTER TABLE `produire`
  ADD CONSTRAINT `¨produire_films_FK` FOREIGN KEY (`id_film`) REFERENCES `films` (`id_film`),
  ADD CONSTRAINT `¨produire_producteur0_FK` FOREIGN KEY (`id_producteur`) REFERENCES `producteurs` (`id_producteur`);

--
-- Contraintes pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD CONSTRAINT `realiser_films0_FK` FOREIGN KEY (`id_film`) REFERENCES `films` (`id_film`),
  ADD CONSTRAINT `realiser_realisateur_FK` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateurs` (`id_realisateur`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_FK` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
