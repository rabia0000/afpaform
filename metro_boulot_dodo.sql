-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 02 fév. 2024 à 09:40
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `metro_boulot_dodo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@admin.com', 'adminpassword');

-- --------------------------------------------------------

--
-- Structure de la table `enterprise`
--

CREATE TABLE `enterprise` (
  `enterprise_id` int NOT NULL,
  `enterprise_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enterprise_email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enterprise_siret` int DEFAULT NULL,
  `enterprise_adress` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enterprise_password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enterprise_zipcode` int DEFAULT NULL,
  `enterprise_city` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enterprise_photo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `enterprise`
--

INSERT INTO `enterprise` (`enterprise_id`, `enterprise_name`, `enterprise_email`, `enterprise_siret`, `enterprise_adress`, `enterprise_password`, `enterprise_zipcode`, `enterprise_city`, `enterprise_photo`) VALUES
(2, 'Afpa', 'afpa@afpa.fr', 1234567890, '135 Rue du Madrillet', 'Afpasaintetienne', 76800, 'SAINT ETIENNE DU ROUVRAY', 'la photo'),
(3, 'carrefour', 'carrefour@carrefour.fr', 987654321, '2 Avenue Gustave Picard', 'carrrefourtourville', 76410, 'Tourville la rivière', 'la photodecarrefour'),
(4, 'capcom', 'capcom@cap.fr', 1456786543, 'rue de capcom', 'capcomenterprise', 27200, 'vernon', 'la photo de capcom');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `events_id` int NOT NULL,
  `events_startdate` date DEFAULT NULL,
  `events_challengedescrib` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `events_photo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `events_enddate` date DEFAULT NULL,
  `events_challengename` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enterprise_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`events_id`, `events_startdate`, `events_challengedescrib`, `events_photo`, `events_enddate`, `events_challengename`, `enterprise_id`) VALUES
(1, '2024-01-01', 'aller au travail en marchant ou en vélo', 'laphoto', '2025-01-28', 'Eco Walk Or Bike', 2);

-- --------------------------------------------------------

--
-- Structure de la table `ride`
--

CREATE TABLE `ride` (
  `ride_id` int NOT NULL,
  `ride_date` date NOT NULL,
  `ride_distance` float NOT NULL,
  `ride_photo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  `transport_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ride`
--

INSERT INTO `ride` (`ride_id`, `ride_date`, `ride_distance`, `ride_photo`, `user_id`, `transport_id`) VALUES
(23, '2024-01-02', 10.2, 'photo002.jpg', 2, 1),
(24, '2024-01-03', 12.7, 'photo003.jpg', 3, 3),
(26, '2024-01-05', 15.3, 'photo005.jpg', 2, 1),
(27, '2024-01-06', 9.6, 'photo006.jpg', 3, 3),
(29, '2024-01-08', 14.8, 'photo008.jpg', 2, 1),
(30, '2024-01-09', 6.9, 'photo009.jpg', 3, 3),
(32, '2024-01-11', 8.2, 'photo011.jpg', 2, 1),
(33, '2024-01-12', 15, 'photo012.jpg', 3, 3),
(35, '2024-01-14', 13.6, 'photo014.jpg', 2, 1),
(36, '2024-01-15', 9.1, 'photo015.jpg', 3, 3),
(38, '2024-01-17', 8.9, 'photo017.jpg', 2, 1),
(39, '2024-01-18', 14.2, 'photo018.jpg', 3, 3),
(41, '2024-01-20', 12.8, 'photo020.jpg', 2, 1),
(42, '2024-01-21', 10.3, 'photo021.jpg', 3, 3),
(43, '2024-01-29', 10, 'photo022.jpg', 4, 4),
(44, '2024-01-30', 5, 'photo023.jpg', 4, 4),
(45, '2024-02-02', 7, 'photo024.jpg', 4, 5),
(46, '2024-01-29', 3.5, 'photo022.jpg', 4, 5),
(47, '2024-01-29', 10, 'photo022.jpg', 4, 4),
(48, '2024-01-30', 5, 'photo023.jpg', 4, 4),
(49, '2024-02-02', 7, 'photo024.jpg', 4, 5),
(50, '2024-01-29', 3.5, 'photo022.jpg', 4, 5),
(51, '2024-01-29', 4, 'photo025.jpg', 4, 2),
(74, '2024-01-23', 5, NULL, 75, 6);

-- --------------------------------------------------------

--
-- Structure de la table `transport`
--

CREATE TABLE `transport` (
  `transport_id` int NOT NULL,
  `transport_type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `transport`
--

INSERT INTO `transport` (`transport_id`, `transport_type`) VALUES
(1, 'marche'),
(2, 'velo'),
(3, 'roller'),
(4, 'skate'),
(5, 'trotinette'),
(6, 'hoverboard'),
(7, 'voiture');

-- --------------------------------------------------------

--
-- Structure de la table `transport_pris_en_compte`
--

CREATE TABLE `transport_pris_en_compte` (
  `events_id` int NOT NULL,
  `transport_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `userprofil`
--

CREATE TABLE `userprofil` (
  `user_id` int NOT NULL,
  `user_validate` tinyint NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_firstname` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_pseudo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_describ` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_dateofbirth` date DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_photo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enterprise_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `userprofil`
--

INSERT INTO `userprofil` (`user_id`, `user_validate`, `user_name`, `user_firstname`, `user_pseudo`, `user_describ`, `user_email`, `user_dateofbirth`, `user_password`, `user_photo`, `enterprise_id`) VALUES
(2, 1, 'Petrochka', 'Hélene', 'LN', NULL, 'helene@gmail.com', '1981-06-23', 'monpassword', 'laphotodemoi', 2),
(3, 1, 'Empereur', 'Nassim', 'Nasslamenace', NULL, 'nassim@gmail.com', '1999-06-18', 'monpassword', 'laphotodemoi', 3),
(4, 1, 'Matuer', 'Amine', 'l afk', NULL, 'aminegmail.com', '1999-06-18', 'monpassword', 'laphotodemoi', 2),
(5, 1, 'Magic', 'Bryan', 'bonneapp', NULL, 'magic@gmail.com', '1994-06-18', 'monpassword', 'laphotodemoi', 3),
(75, 1, 'Poirier-Halley', 'HELENE', 'LNwarrior27', NULL, 'poirier.helene@outlook.fr', '1981-10-25', '$2y$10$0PXRR/b/e0ECbEnaAjIzKO0arEowuO/ExAkvu6HYs2nXDBYCjn1fO', 'default.png', 2),
(76, 1, 'lllll', 'rabiaaass', 'rabia27', 'DEPARDIEU hjkk', 'rabia@mail.com', '2024-01-20', '$2y$10$43z/L0OlIyVE3UxS4UpOQOR/CkstjccYgZMAfdqVKrtL9qaz6JNWq', 'rosa.png', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Index pour la table `enterprise`
--
ALTER TABLE `enterprise`
  ADD PRIMARY KEY (`enterprise_id`),
  ADD UNIQUE KEY `enterprise_siret` (`enterprise_siret`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`),
  ADD KEY `enterprise_id` (`enterprise_id`);

--
-- Index pour la table `ride`
--
ALTER TABLE `ride`
  ADD PRIMARY KEY (`ride_id`),
  ADD KEY `transport_id` (`transport_id`),
  ADD KEY `ride_ibfk_1` (`user_id`);

--
-- Index pour la table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`transport_id`);

--
-- Index pour la table `transport_pris_en_compte`
--
ALTER TABLE `transport_pris_en_compte`
  ADD PRIMARY KEY (`events_id`,`transport_id`),
  ADD KEY `transport_id` (`transport_id`);

--
-- Index pour la table `userprofil`
--
ALTER TABLE `userprofil`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `enterprise_id` (`enterprise_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `enterprise`
--
ALTER TABLE `enterprise`
  MODIFY `enterprise_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ride`
--
ALTER TABLE `ride`
  MODIFY `ride_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `transport`
--
ALTER TABLE `transport`
  MODIFY `transport_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `userprofil`
--
ALTER TABLE `userprofil`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprise` (`enterprise_id`);

--
-- Contraintes pour la table `ride`
--
ALTER TABLE `ride`
  ADD CONSTRAINT `ride_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userprofil` (`user_id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `ride_ibfk_2` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`transport_id`);

--
-- Contraintes pour la table `transport_pris_en_compte`
--
ALTER TABLE `transport_pris_en_compte`
  ADD CONSTRAINT `transport_pris_en_compte_ibfk_1` FOREIGN KEY (`events_id`) REFERENCES `events` (`events_id`),
  ADD CONSTRAINT `transport_pris_en_compte_ibfk_2` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`transport_id`);

--
-- Contraintes pour la table `userprofil`
--
ALTER TABLE `userprofil`
  ADD CONSTRAINT `userprofil_ibfk_1` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprise` (`enterprise_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
