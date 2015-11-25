-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 18 Mai 2015 à 17:42
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `aigdatabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendars`
--

CREATE TABLE IF NOT EXISTS `calendars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `date` text,
  `online` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `css`
--

CREATE TABLE IF NOT EXISTS `css` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `online` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_users1_idx` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `css`
--

INSERT INTO `css` (`id`, `name`, `content`, `created`, `online`, `type`, `slug`, `user_id`) VALUES
(23, 'test', '<p>test</p>\r\n', '2015-05-18 12:37:45', 1, 'cs', 'test', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `lols`
--

CREATE TABLE IF NOT EXISTS `lols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `online` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_users1_idx` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `lols`
--

INSERT INTO `lols` (`id`, `name`, `content`, `created`, `online`, `type`, `slug`, `user_id`) VALUES
(24, 'test', '<p>test</p>\r\n', '2015-05-18 12:33:48', 1, 'lol', 'test', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medias_posts_idx` (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `name`, `file`, `post_id`, `type`) VALUES
(23, 'toto', '2015-04/6777436-un-homme-dans-le-desespoir-enfoui-sa-tete-dans-le-clavier-de-l-39-ordinateur.jpg', 21, 'img'),
(22, 'toto', '2015-04/116_SamClaflin-¬KaoriSuzuki.jpg', 3, 'img'),
(24, 'Tata', '2015-04/116_SamClaflin-¬KaoriSuzuki.jpg', NULL, 'img'),
(25, 'Tata', '2015-04/116_SamClaflin-¬KaoriSuzuki.jpg', NULL, 'img'),
(26, 'Test', '2015-04/1920_1080_20100623094056611148.jpg', NULL, 'img'),
(27, 'Test', '2015-04/1920_1080_20100623094056611148.jpg', NULL, 'img'),
(28, 'Test', '2015-04/1920_1080_20100623094056611148.jpg', NULL, 'img'),
(29, 'Test', '2015-04/1920_1080_20100623094056611148.jpg', NULL, 'img'),
(30, 'tattfh', '2015-04/3D_Landscape_wallpaper_HD_0004.jpg', 22, 'img');

-- --------------------------------------------------------

--
-- Structure de la table `meds`
--

CREATE TABLE IF NOT EXISTS `meds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medias_posts_idx` (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `meds`
--

INSERT INTO `meds` (`id`, `name`, `file`, `post_id`, `type`) VALUES
(42, 'image1', '1397.jpg', 1, 'img'),
(44, 'image2', '1920_1080_20100623094056611148.jpg', 1, 'img'),
(45, 'image3', '14674.jpg', 1, 'img');

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `online` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`, `created`, `online`, `type`, `slug`, `user_id`) VALUES
(3, 'Games', '<h2>League of Legends&nbsp;</h2>\r\n\r\n<p><a href="http://localhost/MVC/lols/index">More informations</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>StarCraft</h2>\r\n\r\n<p><a href="http://localhost/MVC/scs/index">More informations</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Counter Strike</h2>\r\n\r\n<p><a href="http://localhost/MVC/css/index">More informations</a></p>\r\n', '2015-05-18 12:43:14', 1, 'page', 'games-pages', 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `online` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_users1_idx` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `created`, `online`, `type`, `slug`, `user_id`) VALUES
(1, 'Acceuil', '<p>Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?</p>', '2015-03-02 14:59:00', 1, 'page', 'page-acceuil', 0),
(2, 'Ma seconde page', '<p>Un second contenu bidon</p>', '2015-03-03 10:26:00', 1, 'page', 'ma-seconde-page', 0),
(3, 'Mon premier article', '<p>Alios autem dicere aiunt multo etiam inhumanius (quem locum breviter paulo ante perstrinxi) praesidii adiumentique causa, non benevolentiae neque caritatis, amicitias esse expetendas; itaque, ut quisque minimum firmitatis haberet minimumque virium, ita amicitias appetere maxime; ex eo fieri ut mulierculae magis amicitiarum praesidia quaerant quam viri et inopes quam opulenti et calamitosi quam ii qui putentur beati.</p>\r\n', '2015-04-16 12:36:32', 1, 'post', 'mon-premier-article', 0),
(23, 'test', '<p>test</p>\r\n', '2015-05-18 12:14:47', 1, 'post', 'test', NULL),
(5, 'Mon second article', '<p>Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales.</p>', '2015-03-05 00:00:00', 1, 'post', 'mon-second-article', 0),
(17, 'Mon nouvel article', '<p>Mais c''est que &ccedil;a commence &agrave; avoir de la <strong>GUEULE</strong> tout &ccedil;a !</p>', '2015-03-06 03:13:17', 1, 'post', 'nouvel-article', NULL),
(21, 'Mon premier article', '<p><img alt="" src="/MVC/img/2015-04/6777436-un-homme-dans-le-desespoir-enfoui-sa-tete-dans-le-clavier-de-l-39-ordinateur.jpg" style="height:65px; width:100px" /></p>\r\n', '2015-04-09 02:28:12', 1, 'post', 'cacaboudi', NULL),
(24, 'tesst', '<p>tesst</p>\r\n', '2015-05-18 12:15:13', 1, 'post', 'tesst', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `scs`
--

CREATE TABLE IF NOT EXISTS `scs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `online` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_users1_idx` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `scs`
--

INSERT INTO `scs` (`id`, `name`, `content`, `created`, `online`, `type`, `slug`, `user_id`) VALUES
(24, 'test', '<p>test</p>\r\n', '2015-05-18 12:39:56', 1, 'sc', 'test', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `subcriptions`
--

CREATE TABLE IF NOT EXISTS `subcriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
