-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 19 avr. 2020 à 15:56
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `grafiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `graphisme`
--

CREATE TABLE `graphisme` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `graphisme`
--

INSERT INTO `graphisme` (`id`, `categorie`, `nom`, `description`, `date`, `image_link`) VALUES
(1, 'Branding', 'Logo-toto', 'Voici le logo de toto que j\'ai réalisé ce mois -ci,  je me suis inspiré de la nature et de la montagne car il voulait un logo de type nature et découverte.\r\nLogo réalisé à l\'aide d\'illustrator et de ma tablette graphique.', '2020-04-06', ''),
(2, 'Illustration', 'personnage marvel', 'Voici un personnage de Marvel que j\'ai réalisé à l\'aide de mes outils de dessin traditionnelle pour ensuite finir avec ma tablette graphique.', '2020-04-06', ''),
(3, 'Vectors', 'carte routière', 'Voici une carte routière que j\' ai réalisé avec le logiciel Illustrator de la série Adobe. les technique que j\'ai utilisé sont les masques d\'écrétages, le pathfinder et les outils de dégradés.', '2020-04-06', ''),
(5, 'motion', 'animation du logo', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio inventore at fugit quis sed, doloremque optio deserunt quaerat fugiat reprehenderit? Consequuntur consectetur natus laborum! Esse itaque eaque consequuntur necessitatibus. Explicabo.', '0000-00-00', ''),
(6, 'motion', 'anim2', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio inventore at fugit quis sed, doloremque optio deserunt quaerat fugiat reprehenderit? Consequuntur consectetur natus laborum! Esse itaque eaque consequuntur necessitatibus. Explicabo.', '2020-04-06', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `graphisme`
--
ALTER TABLE `graphisme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `graphisme`
--
ALTER TABLE `graphisme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
