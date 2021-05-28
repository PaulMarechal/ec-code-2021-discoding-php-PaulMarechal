-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 28 mai 2021 à 15:56
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `discoding`
--

-- --------------------------------------------------------

--
-- Structure de la table `channels`
--

CREATE TABLE `channels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `channels`
--

INSERT INTO `channels` (`id`, `name`, `created_at`, `user_id`, `content`) VALUES
(1, 'General', '2021-05-26 12:50:09', 0, ''),
(2, 'Random', '2021-05-26 12:50:09', 0, ''),
(3, 'Music', '2021-05-26 12:50:09', 0, ''),
(4, 'Games', '2021-05-26 12:50:09', 0, ''),
(5, 'Help', '2021-05-26 12:50:09', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(11) NOT NULL,
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `conversations`
--

INSERT INTO `conversations` (`id`, `user1_id`, `user2_id`, `updated_at`) VALUES
(1, 1, 2, '2021-05-11 08:42:21'),
(5, 3, 1, '2021-05-11 13:31:20'),
(6, 38, 26, '2021-05-11 21:01:03'),
(7, 3, 38, '2021-05-04 21:01:03'),
(8, 2, 3, '2021-05-17 21:01:44'),
(9, 38, 1, '2021-05-22 21:01:44'),
(10, 2, 1, '2021-05-17 21:01:44'),
(11, 26, 2, '2021-05-04 21:02:14'),
(12, 38, 39, '2021-05-27 03:24:38'),
(13, 38, 40, '2021-05-27 03:27:48'),
(14, 42, 38, '2021-05-17 21:01:44'),
(15, 42, 26, '2021-05-27 13:52:37'),
(16, 38, 38, '2021-05-27 21:58:13');

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_user_id`) VALUES
(1, 1, 2),
(4, 3, 1),
(5, 38, 3),
(6, 26, 2),
(7, 2, 38),
(8, 38, 26),
(9, 3, 1),
(10, 1, 26),
(11, 38, 39),
(12, 38, 40),
(13, 42, 26),
(14, 38, 42);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `user_id`, `content`, `created_at`) VALUES
(1, 1, 1, 'Hello there !', '2021-05-11 12:50:09'),
(2, 1, 2, 'Hi back !', '2021-05-11 12:51:09'),
(10, 8, 38, 'Yo', '2021-05-19 21:03:05'),
(11, 8, 26, 'hey', '2021-05-25 21:03:05'),
(18, 13, 40, 'dfghj', '2021-05-27 03:28:13'),
(19, 15, 42, 'yo', '2021-05-27 13:52:42'),
(20, 14, 38, 'dfgh', '2021-05-27 14:08:45'),
(21, 7, 38, 'yo', '2021-05-27 14:25:43'),
(24, 13, 38, 'p', '2021-05-28 01:40:55'),
(25, 7, 38, 'yo', '2021-05-28 13:58:54'),
(27, 14, 38, 'hello', '2021-05-28 14:37:23'),
(28, 7, 38, 'hello', '2021-05-28 14:37:31'),
(29, 7, 38, 'hello', '2021-05-28 14:40:14'),
(32, 14, 38, 'yo', '2021-05-28 14:50:38'),
(33, 14, 38, 'hello', '2021-05-28 14:50:46'),
(34, 13, 38, 'hello', '2021-05-28 14:50:59'),
(36, 12, 38, 'hello', '2021-05-28 14:55:09'),
(37, 16, 38, 'hello', '2021-05-28 14:56:43'),
(38, 16, 38, 'how are you', '2021-05-28 14:56:51'),
(39, 13, 38, 'POLO', '2021-05-28 15:27:02'),
(40, 14, 38, 'hello', '2021-05-28 17:13:36');

-- --------------------------------------------------------

--
-- Structure de la table `message_channel`
--

CREATE TABLE `message_channel` (
  `id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message_channel`
--

INSERT INTO `message_channel` (`id`, `channel_id`, `user_id`, `content`, `created_at`) VALUES
(7, 0, 6, 'Welcome on your server , Have fun', '2021-05-28 13:00:00'),
(8, 0, 6, 'Welcome on your server , Have fun', '2021-05-28 13:30:00'),
(9, 0, 6, 'Welcome on your server , Have fun', '2021-05-28 13:45:00'),
(10, 0, 38, 'Welcome on the server yo , enjoy!', '2021-05-28 16:57:36');

-- --------------------------------------------------------

--
-- Structure de la table `servers`
--

CREATE TABLE `servers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar_url` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `servers`
--

INSERT INTO `servers` (`id`, `name`, `user_id`, `created_at`, `avatar_url`, `url`) VALUES
(6, 'coding', 6, '2021-05-28 13:15:45', 'https://file.diplomeo-static.com/file/00/00/01/94/19497.svg', 'index.php&action=server&server=coding##7099464747'),
(9, 'yo', 38, '2021-05-28 16:51:07', '/static/img/anonyme_avatar.png', 'index.php&action=server&server=yo##6d0007e52f');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `avatar_url` varchar(500) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `avatar_url`) VALUES
(1, 'coding@factory', 'codin', '123456', 'https://media-exp1.licdn.com/dms/image/C560BAQFveTMznUt80w/company-logo_200_200/0/1606411224030?e=2159024400&v=beta&t=Q_n0Ieldw9WSqZs5sNwqS4cfTKRJW1nmud2xhjRrgZM'),
(2, 'robin@factory.fr', 'robin', 'robin', 'https://i.pinimg.com/originals/92/57/8a/92578adbf3632f085bffdc00c0eccb47.jpg'),
(3, 'bob@bob.com', 'bob', 'bob', NULL),
(26, 'polo@gmail.com', 'polo#2837', 'polo', 'https://actugeekgaming.com/wp-content/uploads/2017/09/maxresdefault.jpg'),
(38, 'paul@gmail.com', 'polo#3854', '1317dfa6a0c51245a1fbd37c6de9819ac469d2e5f71f70a42eec6c6181a30fa7', 'https://radiodisneyclub.fr/wp-content/uploads/2020/05/zootopie.jpg'),
(39, 'paullll@gmail.com', 'polo#1163', '1317dfa6a0c51245a1fbd37c6de9819ac469d2e5f71f70a42eec6c6181a30fa7', 'http://www.simpsonspark.com/images/persos/contributions/monsieur-burns-23765.jpg'),
(40, 'marion@gmail.com', 'marion#5897', '467ef766006264233bc791aa57ebfbaa88a4daa3a5ebf7158a6d10ca03233911', 'https://www.jokeme.fr/images/monsieur-garrison.jpg'),
(42, 'pool@gmail.com', 'polo#3206', '1317dfa6a0c51245a1fbd37c6de9819ac469d2e5f71f70a42eec6c6181a30fa7', 'https://static.papergeek.fr/2017/08/morts-kenny-south-park-2.jpg'),
(43, 'coding@factory.fr', 'coding#1301', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', ''),
(47, '', '#6742', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', ''),
(48, 'fghjk@gmail.com', 'ghjk#1674', '1317dfa6a0c51245a1fbd37c6de9819ac469d2e5f71f70a42eec6c6181a30fa7', 'fghjk');

-- --------------------------------------------------------

--
-- Structure de la table `user_server`
--

CREATE TABLE `user_server` (
  `id_server` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_server`
--

INSERT INTO `user_server` (`id_server`, `id_user`) VALUES
(9, 38);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_conversations_to_user1_id` (`user1_id`),
  ADD KEY `fk_conversations_to_user2_id` (`user2_id`);

--
-- Index pour la table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_friends_to_user_id` (`user_id`),
  ADD KEY `fk_friends_to_friend_user_id` (`friend_user_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_messages_to_conversation_id` (`conversation_id`),
  ADD KEY `fk_messages_to_user_id` (`user_id`);

--
-- Index pour la table `message_channel`
--
ALTER TABLE `message_channel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `channel_id` (`channel_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_server`
--
ALTER TABLE `user_server`
  ADD PRIMARY KEY (`id_server`,`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `message_channel`
--
ALTER TABLE `message_channel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `fk_to_user1_id` FOREIGN KEY (`user1_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_to_user2_id` FOREIGN KEY (`user2_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `fk_to_friend_user_id` FOREIGN KEY (`friend_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_to_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_messages_to_conversation_id` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_messages_to_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
