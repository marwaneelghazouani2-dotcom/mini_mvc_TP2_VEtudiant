-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 07 oct. 2026 à 11:22
-- Version du serveur : 8.0.35
-- Version de PHP : 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tpvisiteurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `VISITEURS`
--

CREATE TABLE `VISITEURS` (
  `ID` int NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `VISITEURS`
--

INSERT INTO `VISITEURS` (`ID`, `NOM`, `PRENOM`, `EMAIL`) VALUES
(2, 'Omar', 'Omaro', 'Madani@emails.ma'),
(3, 'Hamza', 'HAMZAA', 'Qoraichi@emails.ma'),
(4, 'Zahrae', 'Madani', 'Zahrae@madani.ar');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `VISITEURS`
--
ALTER TABLE `VISITEURS`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `VISITEURS`
--
ALTER TABLE `VISITEURS`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
