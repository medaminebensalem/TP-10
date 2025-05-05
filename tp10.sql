-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 05 mai 2025 à 11:32
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp10`
--

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

CREATE TABLE `exercice` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `exercice`
--

INSERT INTO `exercice` (`id`, `titre`, `auteur`, `date_creation`) VALUES
(1, 'cv', 'amine', '2025-05-13');

-- --------------------------------------------------------

--
-- Structure de la table `guerriers`
--

CREATE TABLE `guerriers` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `degats` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `guerriers`
--

INSERT INTO `guerriers` (`id`, `nom`, `degats`) VALUES
(1, 'amine', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `exercice`
--
ALTER TABLE `exercice`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `guerriers`
--
ALTER TABLE `guerriers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `exercice`
--
ALTER TABLE `exercice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `guerriers`
--
ALTER TABLE `guerriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
