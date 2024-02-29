-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 13 juin 2023 à 06:43
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `market`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `date_naissance` date NOT NULL,
  `ville` varchar(20) DEFAULT 'tanger',
  `telephone` int NOT NULL,
  `adress` text NOT NULL,
  `genre` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motpass` varchar(30) NOT NULL,
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `username`, `date_naissance`, `ville`, `telephone`, `adress`, `genre`, `email`, `motpass`) VALUES
(1, 'mohamed', 'reda', 'mohamedreda123', '2002-08-23', 'tanger', 716840613, 'bni makada tanger', 'homme', 'reda@gmail.com', '1234'),
(8, 'nadia', 'nadia', 'nadia123', '2000-09-12', 'tanger', 712345678, 'hay rahrah', 'famale', 'nadia@gmail.com', '123'),
(2, 'ayoub', 'ayoub', 'redaa', '2002-08-12', 'tanger', 712345678, 'tttt hhhh', 'homme', 'ayoub@gmail.com', 'reda123'),
(3, 'fati', 'fleur', 'fati89', '2002-07-20', 'casa', 89076543, 'cas port', 'famele', 'fati@gmail.com', 'fati23'),
(4, 'ali', 'kli', 'alikali3', '2001-09-13', 'rabat', 756984322, 'tanger123', 'famele', 'ali@gmail.com', 'ali123'),
(5, 'omar', 'omar', 'omar123', '2009-08-12', 'taounat', 978654390, 'taounat redgoo', 'homme', 'omar@gmail.com', 'omaromar'),
(6, 'yousef', 'talibi', 'yousef123', '2007-09-12', 'tanger', 807700660, 'yyryiiy hf', 'homme', 'tito@gmail.com', '12390'),
(7, 'ayoub', 'charki', 'ayoub123', '2006-09-12', 'tanger', 713567809, 'hay rahrah tanger', 'homme', 'ayoub17@gmail.com', 'ayoub123');

-- --------------------------------------------------------

--
-- Structure de la table `comand`
--

DROP TABLE IF EXISTS `comand`;
CREATE TABLE IF NOT EXISTS `comand` (
  `num_comand` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `id_produit` int DEFAULT NULL,
  PRIMARY KEY (`num_comand`),
  KEY `email` (`email`),
  KEY `id_produit` (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `comand`
--

INSERT INTO `comand` (`num_comand`, `email`, `id_produit`) VALUES
(51, 'nadia@gmail.com', 1),
(52, 'nadia@gmail.com', 1),
(47, 'nadia@gmail.com', 1),
(46, 'nadia@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `emaildescription`
--

DROP TABLE IF EXISTS `emaildescription`;
CREATE TABLE IF NOT EXISTS `emaildescription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `line_comand_produit`
--

DROP TABLE IF EXISTS `line_comand_produit`;
CREATE TABLE IF NOT EXISTS `line_comand_produit` (
  `num_comand` int NOT NULL,
  `id_produit` int NOT NULL,
  PRIMARY KEY (`num_comand`,`id_produit`),
  KEY `id_produit` (`id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paye`
--

DROP TABLE IF EXISTS `paye`;
CREATE TABLE IF NOT EXISTS `paye` (
  `id` int NOT NULL AUTO_INCREMENT,
  `CARDNUMBER` int DEFAULT NULL,
  `CARDHOLDER` varchar(30) DEFAULT NULL,
  `EXPIRATIONMM` int DEFAULT NULL,
  `EXPIRATIONYY` int DEFAULT NULL,
  `CVV` int DEFAULT NULL,
  `id_client` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `paye`
--

INSERT INTO `paye` (`id`, `CARDNUMBER`, `CARDHOLDER`, `EXPIRATIONMM`, `EXPIRATIONYY`, `CVV`, `id_client`) VALUES
(1, 2147483647, 'mohamed reda ', 2, 2022, 31, 4),
(2, 2147483647, 'mohamed ali', 4, 2025, 98, 4),
(3, 0, '1233', 9, 2028, 99, 4),
(4, 0, '123456789', 8, 2028, 86, 1),
(5, 0, '13342577777', 9, 2024, 34, 1),
(6, 0, '13342577777', 9, 2024, 34, 1),
(7, 0, '13342577777', 9, 2024, 34, 1),
(8, 0, '13342577777', 9, 2024, 34, 1),
(9, 0, '13342577777', 9, 2024, 34, 1),
(10, 0, '13342577777', 9, 2024, 34, 1),
(11, 0, '13342577777', 9, 2024, 34, 1),
(12, 0, '1234 567890', 10, 2027, 98, 1),
(13, 0, '23444', 10, 2029, 9000, 1),
(14, 123456789, 'nadia nadia', 8, 2027, 76, 8);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `quantite` int NOT NULL,
  `prix` int NOT NULL,
  `photo1` varchar(50) NOT NULL,
  `photo2` varchar(50) DEFAULT NULL,
  `photo3` varchar(50) DEFAULT NULL,
  `promo` varchar(10) NOT NULL,
  `categorie` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `titre`, `description`, `quantite`, `prix`, `photo1`, `photo2`, `photo3`, `promo`, `categorie`) VALUES
(1, 'pizaa', 'pizza frech and new', 8, 11, 'dish-4.png', 'home-img-3.png', 'menu-1.jpg', '20', 'ClassFields');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `id_vendeur` int NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `nomcomplete` varchar(50) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motpass` varchar(30) NOT NULL,
  `datenaissance` date NOT NULL,
  `telephone` int NOT NULL,
  `adress` text NOT NULL,
  `wallet` int DEFAULT '0',
  PRIMARY KEY (`id_vendeur`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`id_vendeur`, `type`, `logo`, `nomcomplete`, `ville`, `email`, `motpass`, `datenaissance`, `telephone`, `adress`, `wallet`) VALUES
(1, 'personne', 'about-img.png', 'reda mohamed', 'tanger', 'reda1@gmail.com', '1234', '2003-09-12', 712345678, 'cas portgggg', 44),
(2, 'personne', '', 'talibi123', 'tanger', 'talibi@gmail.com', '1234', '2002-09-12', 89999998, 'kggjgj ugllu', 0),
(3, 'personne', 'dish-1.png', 'mohaedshop', 'tanger', 'shop@gmail.com', 'reda123', '2003-08-12', 712345678, 'hay rahrah tanger', 0);

-- --------------------------------------------------------

--
-- Structure de la table `vendre`
--

DROP TABLE IF EXISTS `vendre`;
CREATE TABLE IF NOT EXISTS `vendre` (
  `id_vendeur` int NOT NULL,
  `id_produit` int NOT NULL,
  PRIMARY KEY (`id_vendeur`,`id_produit`),
  KEY `id_produit` (`id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `vendre`
--

INSERT INTO `vendre` (`id_vendeur`, `id_produit`) VALUES
(1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
