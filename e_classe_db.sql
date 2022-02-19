-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 fév. 2022 à 16:46
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_classe_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`id`, `name`, `course`, `info`) VALUES
(2, 'ASMAA', 'CME', 'CME'),
(3, 'AHMED', 'DEV', 'DEV');

-- --------------------------------------------------------

--
-- Structure de la table `payment_details`
--

CREATE TABLE `payment_details` (
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `payment_schedule` int(11) NOT NULL,
  `bill_number` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `balance_amount` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `payment_details`
--

INSERT INTO `payment_details` (`name`, `id`, `payment_schedule`, `bill_number`, `amount_paid`, `balance_amount`, `date`) VALUES
('elkhaldaoui', 1, 100, 100, 100, 100, '2020-01-01'),
('Shannon Smith', 2, 0, 1, 886, 17, '1981-05-21');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `enroll_Number` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `enroll_Number`, `date`) VALUES
(1, 'Elkhaldaoui', 'oussama.elkhaldaoui@gmail.com', '0611848302', 1, '2020-01-01'),
(3, 'Fleur Estrada', 'neluq@mailinator.com', '+1 (138) 642-4869', 212, '1983-09-20');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Elkhaldaoui', 'oussama.elkhaldaoui@gmail.com', '$2y$10$ZA8Nfl37MXj7P8ibQdlfAOb4CwMuDOBNEiePGYD9DSljf5Xx11ri.'),
(2, 'Conan Benjamin', 'qecudy@mailinator.com', '$2y$10$KI9brpeqINcbBZ1Ecp/Xb.GtVrp3hXLIKQoTTRbbK5KTXxPHwQ2kK'),
(3, 'Briar Carroll', 'qarur@mailinator.com', '$2y$10$CZWv6VgzU22.Y9yElnHR/.pX/vktpOGAJhC553D4Wz9NjpZHwyQim'),
(4, 'Florence Molina', 'suli@mailinator.com', '$2y$10$Gzx4HE.Mzmei3PAQG3uOfuSSZ6nghKyjui..tALm457xCM/dYg062');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
