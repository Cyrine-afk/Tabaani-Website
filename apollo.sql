-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 avr. 2022 à 12:45
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `apollo`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220308232949', '2022-03-09 00:29:54', 132),
('DoctrineMigrations\\Version20220308233843', '2022-03-09 00:38:46', 117),
('DoctrineMigrations\\Version20220309134148', '2022-03-09 14:41:56', 122),
('DoctrineMigrations\\Version20220309141808', '2022-03-09 15:18:14', 23);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eventname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbrmaxpart` int(11) NOT NULL,
  `imageevent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventdate` date NOT NULL,
  `eventaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventtheme_id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `nbr_going` int(11) DEFAULT NULL,
  `nbr_likes` int(11) DEFAULT NULL,
  `nbr_dislikes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `eventname`, `nbrmaxpart`, `imageevent`, `description`, `eventdate`, `eventaddress`, `eventtheme_id`, `org_id`, `nbr_going`, `nbr_likes`, `nbr_dislikes`) VALUES
(15, 'A Event', 30, '614a9670fdffd2fe2d57df2f71c14533.jpeg', 'Freshly Made Event', '2022-03-10', 'Sousse', 5, 2, 21, 0, 0),
(16, 'B Event', 20, '4022c1922bdd92a7a94da95f7abd70c1.jpeg', 'Limited Spots ! Hurry up to get your spot !', '2022-03-20', 'Monsatir', 4, 2, 5, 0, 0),
(17, 'E Event', 40, 'e1735c38b642d74c07a5d9e0f28ed663.jpeg', 'Let\'s goooo', '2022-03-13', 'Tunis', 4, 2, 13, 0, 0),
(18, 'Z Event', 52, '520ed7c8250b5778681ab489b8d639d7.jpeg', 'Let\'s shop together !', '2022-03-29', 'Le Kef', 4, 2, 0, 0, 0),
(19, 'W Event', 3, '520ed7c8250b5778681ab489b8d639d7.jpeg', 'mm', '2022-03-01', 'Ariana', 4, 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `participate_event`
--

CREATE TABLE `participate_event` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `participate_event`
--

INSERT INTO `participate_event` (`id`, `event_id`, `user_id`) VALUES
(5, 15, 2),
(6, 19, 2),
(7, 17, 2),
(11, 15, 2),
(12, 15, 2),
(13, 15, 2),
(14, 15, 2);

-- --------------------------------------------------------

--
-- Structure de la table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `themename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagetheme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `themes`
--

INSERT INTO `themes` (`id`, `themename`, `imagetheme`) VALUES
(3, 'action', '3eeba82a3a922282fd59572a6a86b10e.jpeg'),
(4, 'fashion', '12b468122e440ba7fb333ee8c05ac128.jpeg'),
(5, 'Horsing', '12b468122e440ba7fb333ee8c05ac128.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  `email_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_user` int(11) NOT NULL,
  `image_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom_user`, `prenom_user`, `date_naiss`, `email_user`, `login_user`, `mdp_user`, `num_user`, `image_user`) VALUES
(2, 'Trabelsi', 'Cyrine', '2000-09-14', 'cyrine1409@gmail.com', 'bisha', '1234', 96069516, 'jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5387574AA81D3C55` (`eventtheme_id`),
  ADD KEY `IDX_5387574AF4837C1B` (`org_id`);

--
-- Index pour la table `participate_event`
--
ALTER TABLE `participate_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D6C9198771F7E88B` (`event_id`),
  ADD KEY `IDX_D6C91987A76ED395` (`user_id`);

--
-- Index pour la table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `participate_event`
--
ALTER TABLE `participate_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `FK_5387574AA81D3C55` FOREIGN KEY (`eventtheme_id`) REFERENCES `themes` (`id`),
  ADD CONSTRAINT `FK_5387574AF4837C1B` FOREIGN KEY (`org_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `participate_event`
--
ALTER TABLE `participate_event`
  ADD CONSTRAINT `FK_D6C9198771F7E88B` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `FK_D6C91987A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
