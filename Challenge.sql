-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 30 Janvier 2017 à 13:32
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1
-- Version de PHP :  7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Challenge`
--

-- --------------------------------------------------------

--
-- Structure de la table `ChallPHP`
--

CREATE TABLE `ChallPHP` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ChallPHP`
--

INSERT INTO `ChallPHP` (`id`, `pseudo`, `password`) VALUES
(1, 'Christopher', 'codeurKiFFeur'),
(2, 'Drima', '111'),
(3, 'Drimb', '222'),
(4, 'Drimc', '333');

-- --------------------------------------------------------

--
-- Structure de la table `custom`
--

CREATE TABLE `custom` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `navbar` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `bouton` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `custom`
--

INSERT INTO `custom` (`id`, `titre`, `navbar`, `url`, `bouton`) VALUES
(1, 'rgba(255, 0, 255, 1)', 'rgba(34, 255, 0, 1)', 'rgba(255, 0, 156, 1)', 'rgba(0,0,0,1)');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `imgprofil` varchar(200) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `jeux` varchar(100) NOT NULL,
  `date_naissance` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infos`
--

INSERT INTO `infos` (`id`, `pseudo`, `prenom`, `imgprofil`, `mail`, `jeux`, `date_naissance`, `message`) VALUES
(1, 'simplonbsm', 'Chris', '', 'test@mail.fr', 'hot_wheels', '00/00/0000', 'Jeu de voiture de course');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ChallPHP`
--
ALTER TABLE `ChallPHP`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ChallPHP`
--
ALTER TABLE `ChallPHP`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
