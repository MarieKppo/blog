-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 19 Juin 2014 à 13:26
-- Version du serveur: 5.6.12
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `text`, `date`, `user`) VALUES
(1, 'Premier articlerr', 'c''est trop cool si ça marche du premier coup !', '2014-06-13 14:32:48', 1),
(2, 'deuxième article', 'tatatatatata', '2014-06-13 14:35:54', 1),
(5, 'test uti 1', 'UVFJREUIJBGVNERBJUDRNBvrtfgtyjyu;,ju;j ;jgk', '2014-06-18 14:31:12', 1),
(7, 'article du 19 juin 2014', 'Aujourd''hui, journée mondiale de la fesse et anniversaire de Mathilde.', '2014-06-19 14:11:51', 1);

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`role`) VALUES
('administrateur'),
('auteur'),
('invite');

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`, `date`) VALUES
(1, 'Marie', '93a8879f1262150e58a7e2e05172f7102412d349', 'administrateur', '2014-06-12 12:00:00'),
(2, 'Auteur 1', 'auteur1', 'auteur', '2014-06-17 15:24:00'),
(3, 'Auteur 1', 'auteur1', 'auteur', '2014-06-17 15:31:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
