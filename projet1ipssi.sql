-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 12 oct. 2023 à 11:02
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
-- Base de données : `projet1ipssi`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idcontact` int(11) NOT NULL AUTO_INCREMENT,
  `nomcontact` varchar(50) NOT NULL,
  `emailcontact` varchar(100) NOT NULL,
  `messagecontact` varchar(255) NOT NULL,
  PRIMARY KEY (`idcontact`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idcontact`, `nomcontact`, `emailcontact`, `messagecontact`) VALUES
(1, 'LORTIE', 'dlortiethibaut@gmail.com', 'ffff'),
(2, 'TATA  Kevin', 'tatakevin@gmail.com', 'j\'aime beaucoup vos lunettes'),
(3, 'Oceane', 'oceane@gmail.com', 'grezferfef'),
(4, 'Julien', 'Julien@orange.fr', 'voici le message');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nomuser` varchar(50) NOT NULL,
  `prenomuser` varchar(50) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `nomuser`, `prenomuser`, `mdp`) VALUES
(1, 'DUPONT', 'Pierre', 'kdlebron'),
(2, 'Lortie--Thibaut', 'Damien', 'fezfzgf'),
(3, 'LORTIE', 'Damien', 'jtjtyjythyth'),
(4, 'Lortie--Thibaut', 'fezfe', 'dezdezd'),
(5, 'fgezfez', 'gregerg', 'hgtrherthreth'),
(6, 'hrhrth', 'jytrjrtyhj', 'hyhterhter'),
(7, 'hrhrth', 'jytrjrtyhj', 'hyhterhter'),
(8, 'Tata', 'Kevin', '$2y$10$jXpFuj/OhxQcxFdwWfXtUOdnrjKrqRd5vtmLsta1yWxhMrbPp2GtW'),
(9, 'tonton', 'calvin', '$2y$10$Y65.qRnVC9QiaD.TDhrmXOvnrJ2WSZ2zM/aAvPsDJOCvtgInXXF0O'),
(10, 'tonton', 'calvin', '$2y$10$b1m.21Lqwmqt9UiLhgAA8uwNt/CTuvikItn9vV3i47dikDR/JGuJm'),
(11, 'titi', 'marvin', '$2y$10$1cB8g/RsTch8DUcoJYhT1OuCOChhU79TGTlhiQesnRMQ6d.zsNVqG'),
(12, 'tutu', 'pinpin', '$2y$10$fKd9PNnkqBeHm.zBA3VxquuCJREQq6/0eSKHxisdNbNrTEDWJA.Me'),
(13, 'papa', 'maman', '$2y$10$O9PIiK18YEUGNfnkmu6jt.7Nsev8eALzoPKVqE5j2LnUTwexZJwO6'),
(14, 'laury', 'nathan', '$2y$10$5jGlNQylyPtrf16oUndF4udRMUsaODfWfQMy.k3MgmdbD0/JWQAWy'),
(15, 'test', 'beni', '$2y$10$3vs/7q3Sv6y4VTt5e311m.8HxcpRS7.7VGb8Y.bILkRBQH4UENMVC'),
(16, 'test', 'beni', '$2y$10$fNuGwsjr39w231z7OyCrWOuwcj06XA13XfUgoy8z.B5PpRPcWw8IG'),
(17, 'test', 'gaspard', '$2y$10$o8b0EoUEZK3GFO/hL4MeAO1PzkZEUbIuC6MYbAjAOFPCxzyg82xKG'),
(18, 'test', 'gaspard', '$2y$10$qbxFoo2/.U6Rl4wS.dXVT.7BgkjeYq2wCHRbZNe9dB6Ft59Ne7mZi'),
(19, 'monpierre', 'aurelien', '$2y$10$0knSdKfIHO/rsdFnqP2YWeR0Qe89e9IKcdIPHS9wdI004GpwMKc5C'),
(20, 'juju', 'jokast', '$2y$10$XpXvM0JK0mF6ZsepcIoqa./XTi0v9qW/lsMNX1LvhZT8DCBiPK18y'),
(21, 'juju', 'jokast', '$2y$10$32fJgAXT23U2M9VU9OnG7OEw4OqvGiG5a6PxGIN85nCqls4.h0ioe'),
(22, 'juju', 'jokast', '$2y$10$0ugxVbfwk2ImeEgss4hozOITJQDfPlWXtChgrd0PXvCi4olhtbqfi'),
(23, 'gregre', 'isaac', '$2y$10$A2jROTS.KRJxG4xmotjUEeiKmZBhcP4M4DUd9Ks9.kqpRp9PTLJiK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
