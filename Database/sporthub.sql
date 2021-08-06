-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 06 août 2021 à 17:42
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sporthub`
--

-- --------------------------------------------------------

--
-- Structure de la table `like_unlike`
--

DROP TABLE IF EXISTS `like_unlike`;
CREATE TABLE IF NOT EXISTS `like_unlike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `type` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `like_unlike`
--

INSERT INTO `like_unlike` (`id`, `userid`, `postid`, `type`, `timestamp`) VALUES
(1, 59, 1, 0, '2021-08-05 23:12:29'),
(2, 59, 4, 0, '2021-08-05 23:12:42'),
(3, 59, 2, 1, '2021-08-05 23:12:33'),
(4, 59, 3, 0, '2021-08-05 19:36:16'),
(5, 60, 1, 1, '2021-08-05 23:09:32'),
(6, 60, 2, 0, '2021-08-05 18:51:03'),
(7, 60, 4, 0, '2021-08-05 18:18:38'),
(8, 60, 3, 1, '2021-08-05 18:23:36'),
(9, 59, 10, 0, '2021-08-06 02:46:07'),
(10, 59, 11, 1, '2021-08-06 04:06:26'),
(11, 59, 12, 0, '2021-08-06 04:06:37'),
(12, 61, 14, 1, '2021-08-06 12:43:33'),
(13, 62, 15, 1, '2021-08-06 13:08:59'),
(14, 59, 15, 1, '2021-08-06 13:11:42'),
(15, 59, 14, 1, '2021-08-06 13:09:43'),
(16, 59, 13, 1, '2021-08-06 13:11:45'),
(17, 59, 16, 1, '2021-08-06 15:23:40');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `category_post` enum('fitness','yoga','meditation') NOT NULL,
  `username_post` varchar(30) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nb_reported` int(11) NOT NULL DEFAULT '0',
  `text_post` text NOT NULL,
  `sujet_post` varchar(255) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `category_post`, `username_post`, `date_post`, `nb_reported`, `text_post`, `sujet_post`) VALUES
(1, 'fitness', 'ilyes', '2021-08-05 09:55:01', 1, 'ilzdhzdhz zidhiudzzd zdizid\r\ndhzd zdizid dziozd\r\ndzjz.', 'mch aarf'),
(2, 'yoga', 'nassim', '2021-08-05 11:08:50', 0, 'qfzfzfaa\r\nazfazfaz\r\nfazfzfazf.', 'chyh chyu'),
(3, 'meditation', 'koussay', '2021-08-05 11:14:47', 0, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'kljhkjgkghjfghjghjghjghjgjhgjhg'),
(4, 'yoga', 'nassim', '2021-08-05 12:12:16', 0, 'qsqsS', 'tricepce'),
(5, 'fitness', 'nassim', '2021-08-05 23:16:49', 0, 'DSSDGSDFGSDGFSGSDFGSFGG', 'YOGA'),
(6, 'meditation', 'nassim', '2021-08-06 02:10:07', 0, 'klnljmjkljlkjlkj lkjmjlkjÃ¹\r\n', 'medi'),
(7, 'fitness', 'nassim', '2021-08-06 02:11:12', 0, 'jlkhjmljmjlmjm', 'lmlml'),
(8, 'fitness', 'nassim', '2021-08-06 02:14:12', 0, 'mllllllllllllllllllllllllllllllllhjfrytrvuriuyt 626lmjlkmhlkhlkhkl', 'Ã¹lÃ¹mlÃ¹mlÃ¹mlÃ¹mlÃ¹mlÃ¹mlÃ¹ml'),
(9, 'fitness', 'nassim', '2021-08-06 02:23:47', 0, ',jgjgkj', '1'),
(10, 'fitness', 'nassim', '2021-08-06 02:30:20', 0, '123', 'klk'),
(11, 'fitness', 'nassim', '2021-08-06 03:11:01', 0, 'Ã¹mÃ¹mÃ¹mÃ¹Ã¹mÃ¹m', 'mllml'),
(12, 'fitness', 'nassim', '2021-08-06 03:11:14', 0, '123', '123'),
(13, 'fitness', 'rahoub', '2021-08-06 12:39:40', 0, 'rzrzzrzrrz', 'rzzrzrrz'),
(14, 'fitness', 'rahoub', '2021-08-06 12:43:20', 0, 'wanna try this ', 'hello '),
(15, 'meditation', 'samar', '2021-08-06 13:08:41', 0, 'i love meditation', 'samar\'s post'),
(16, 'fitness', 'nassim', '2021-08-06 15:23:30', 0, 'dgdgdgdgdg', 'zrrzrzrz'),
(17, 'yoga', 'nassim', '2021-08-06 17:32:42', 0, 'sinassim', 'nassim');

-- --------------------------------------------------------

--
-- Structure de la table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `id_reply` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `username_reply` varchar(255) NOT NULL,
  `date_reply` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `nb_reported` int(11) NOT NULL,
  `text_reply` varchar(255) NOT NULL,
  PRIMARY KEY (`id_reply`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verified` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `email`, `password`, `date`, `verified`) VALUES
(62, 'samar', 'samar@gmail.com', '123', '2021-08-06 13:07:39', NULL),
(60, 'ilyes', 'vhvvh@gmail.com', '123654', '2021-08-05 17:24:43', NULL),
(61, 'rahoub', 'rahoub@esprit.tn', '123', '2021-08-06 12:28:06', NULL),
(59, 'nassim', 'jajabhim@gmail.com', '123', '2021-08-04 17:19:54', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
