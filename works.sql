-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 10 mai 2020 à 01:55
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
-- Structure de la table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon_path` varchar(255) NOT NULL,
  `imgs_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id`, `categorie`, `nom`, `client`, `description`, `icon_path`, `imgs_path`) VALUES
(1, 'retouche', 'retouche de portrait', '', 'Utilisation des outils suivant :\r\n- outil fluidité\r\n- retouche chromatique\r\n- modes de fusion\r\n- séparation des fréquences\r\n- actions', 'photoshop', 'Retouche/retouche-1.jpg'),
(2, 'retouche ', 'retouche de portrait', '', 'Utilisation des outils suivant :\r\n- outil fluidité\r\n- retouche chromatique\r\n- modes de fusion\r\n- séparation des fréquences\r\n- actions', 'photoshop', 'Retouche/retouche-2.jpg'),
(3, 'Print-Edition', 'nuancier Kaleïdo', 'Arjowiggins', 'création d\'un catalogue nuancier \"Kaleïdo\".\r\ntechniques :\r\n- créations vectorielles\r\n- feuilles de styles\r\n- mise en page\r\n- grille de ligne de base\r\n- gestion des gabarits', 'illustrator, indesign', 'Print-Edition/nuancier-kaleido.jpg'),
(4, 'Print-Edition', 'catalogue \"MIM\"', '', 'création d\'un logo de mode et de son magazine, ainsi que la carte d\'invitation pour célébrer le lancement de ce dernier.\r\n\r\ntechniques :\r\n- conception du logo\r\n- chemin de fer\r\n- style de paragraphes\r\n- gestion des gabarits\r\n- mise en page', 'illustrator, indesign', 'Print-Edition/magazine_de_mode/catalogue-1.jpg, Print-Edition/magazine_de_mode/catalogue-2.jpg, Print-Edition/magazine_de_mode/catalogue-3.jpg, Print-Edition/magazine_de_mode/catalogue-4.jpg, Print-Edition/magazine_de_mode/catalogue-5.jpg, Print-Edition/magazine_de_mode/catalogue-6.jpg, Print-Edition/magazine_de_mode/catalogue-7.jpg, Print-Edition/magazine_de_mode/chemin-de-fer.jpg, Print-Edition/magazine_de_mode/logo-MIM.jpg, Print-Edition/magazine_de_mode/carte-invitation.jpg,'),
(5, 'Print-Edition', 'pochette NWA', '', 'création d\'un disque musical et de sa pochette d\'un groupe de hip-hop américain\r\n\r\ntechniques :\r\n- vectorisation\r\n- mise en page', 'illustrator, indesign', 'Print-Edition/NWA.jpg'),
(6, 'Print-Edition', 'affiche Paris Jazz Festival', 'Mairie de Paris', 'création d\'une affiche pour le Paris Jazz Festival\r\n\r\ntechniques :\r\n- création vectoriel\r\n- mise en page', 'illustrator, indesign', 'Print-Edition/festival-jazz.jpg'),
(7, 'Print-Edition', 'Michal Batory', '', 'création d\'un magazine sur l\'artiste Michal Batory\r\n\r\ntechniques :\r\n- mise en page\r\n- style de paragraphe\r\n- masques', 'indesign', 'Print-Edition/michal_batory/michal-batory-1.jpg, Print-Edition/michal_batory/michal-batory-2.jpg, Print-Edition/michal_batory/michal-batory-3.jpg, Print-Edition/michal_batory/michal-batory-4.jpg'),
(8, 'Print-Edition', 'cartes typographique', '', 'création d\'un jeux de cartes typographique présentant six familles de typographies (humanes, garaldes, didones, mécanes, linéales, incises) avec la représentation de chaque auteur\r\n\r\ntechniques :\r\n- vectorisation\r\n- gestion des gabarits\r\n- mise en page\r\n- style de paragraphe', 'illustrator, indesign', 'Print-Edition/jeux_de_cartes/jeux-de-cartes-1.jpg, Print-Edition/jeux_de_cartes/jeux-de-cartes-2.jpg, Print-Edition/jeux_de_cartes/jeux-de-cartes-3.jpg'),
(9, 'Print-Edition', 'Claude monet', '', 'création d\'un magazine sur l\'artiste peintre Claude Monet\r\n\r\ntechniques :\r\n- mise en page\r\n- masque\r\n- grille de ligne de base\r\n- style de paragraphe', 'photoshop, indesign', 'Print-Edition/claude-monet/claude-monet-1.jpg, Print-Edition/claude-monet/claude-monet-2.jpg, Print-Edition/claude-monet/claude-monet-3.jpg'),
(10, 'Packshot', 'packaging Durex', 'Durex', 'création de plusieurs packagings pour le lancement des nouveaux produits de la marque Durex\r\n\r\ntechniques :\r\n- création vectorielle\r\n', 'illustrator', 'Packshot/durex.jpg'),
(11, 'Packshot', 'packaging Faber-Castell', 'Faber-Castell', 'création d\'un packaging pour une annonce presse de la marque Faber-Castell\r\n\r\ntechniques :\r\n- illustration\r\n- masque d\'écrêtage\r\n- tracé transparent\r\n- dégradé de couleurs\r\n- outil plume & formes géométriques\r\n- texte curviligne', 'illustrator', 'Packshot/faber-castell.jpg'),
(12, 'Packshot', 'packaging cosmétique Redken', 'Redken', 'création d\'un packaging cosmétique pour la marque Redken\r\n\r\ntechniques :\r\n- outil filet\r\n- dégradé de couleurs\r\n- masque', 'illustrator', 'Packshot/redken.png'),
(13, 'Web', 'maquette mobile Grafiz', '', 'création du wireframe et du prototype du site Grafiz\r\n\r\ntechniques :\r\n- système de 12 colonnes (frameworks CSS)\r\n- symboles', 'photoshop, adobeXD', ''),
(14, 'Illustration', 'Linky joue le jeu', 'Enedis', 'création d\'illustrations pour une application jeux du groupe Enedis dans le but d\'en savoir d\'avantages sur les compteurs linky de manière amusante\r\n\r\ntechniques :\r\n- créations vectorielles\r\n- masques\r\n- dégradés de couleurs', 'illustrator', 'Illustration/enedis/enedis-1.jpg, Illustration/enedis/enedis-2.jpg'),
(15, 'Illustration', 'cartographie', '', 'création d\'une carte routière \r\n\r\ntechniques :\r\n- masque d\'écrêtage\r\n- tracé transparent\r\n- dégradé de couleurs\r\n- outil plume et formes géométriques\r\n- texte curviligne', 'illustrator', 'Illustration/cartographie-margin-none.jpg'),
(16, 'Illustration', 'Personnages', '', 'Illustration de personnages divers', 'photoshop', 'Illustration/personnages.jpg'),
(17, 'Illustration', 'storyboard', '', 'storyboard pour la sortie d\'une nouvelle marque d\'éponge\r\n\r\ntechniques :\r\n- dessin traditionnel\r\n- perspective', '', 'Illustration/story-board.jpg'),
(18, 'Illustration', 'symboles vectorielles', '', 'création de symboles vectorielles \r\n\r\ntechniques :\r\n- dégradés de couleurs\r\n- masques\r\n- outil filet\r\n- modes de fusion', 'illustrator', 'Illustration/symboles.jpg'),
(19, 'Compositing', 'Compositing Heineken', '', 'photomontage à partir de différents éléments graphiques\r\n\r\ntechniques :\r\n- mode de fusion\r\n- réglages chromatique\r\n- détourage', 'photoshop', 'Compositing/beer.jpg'),
(20, 'Compositing', 'Compositing Ice-tea', '', 'photomontage à partir de différents éléments graphiques\r\n\r\ntechniques :\r\n- mode de fusion\r\n- réglages chromatique\r\n- détourage', 'photoshop', 'Compositing/ice-tea.jpg'),
(21, 'Compositing', 'Compositing station', '', 'photomontage à partir de différents éléments graphiques\r\n\r\ntechniques :\r\n- mode de fusion\r\n- réglages chromatique\r\n- détourage', 'photoshop', 'Compositing/station.jpg'),
(22, 'Compositing', 'Compositing gallerie', '', 'photomontage à partir de différents éléments graphiques\r\n\r\ntechniques :\r\n- mode de fusion\r\n- réglages chromatique\r\n- détourage\r\n- illustration', 'photoshop', 'Compositing/gallerie.jpg'),
(27, 'Branding', 'Boenouvo - identité visuelle', 'Boenouvo', 'Boenouvo est une agence de marketing opérationnel spécialisée dans la promotion de marques innovantes\r\n\r\n- création de la mascotte\r\n- création de la charte graphique\r\n- cartes de visites\r\n- covering véhicule\r\n- signature email\r\n- tampon\r\n- affiche', 'illustrator, photoshop, indesign', 'Branding/Boenouvo/cartes_de_visites/carte-1.jpg, Branding/Boenouvo/cartes_de_visites/carte-2.jpg, Branding/Boenouvo/cartes_de_visites/carte-3.jpg, Branding/Boenouvo/cartes_de_visites/carte-4.jpg, Branding/Boenouvo/cartes_de_visites/carte-principal-1.jpg, Branding/Boenouvo/cartes_de_visites/carte-principal-2.jpg, Branding/Boenouvo/covering/covering-1.jpg, Branding/Boenouvo/covering/covering-2.jpg, Branding/Boenouvo/covering/covering-3.jpg, Branding/Boenouvo/mascotte/croquis-1.jpg, Branding/Boenouvo/mascotte/croquis-2.jpg, Branding/Boenouvo/mascotte/mascotte-1.jpg, Branding/Boenouvo/mascotte/mascotte-2.jpg, Branding/Boenouvo/signature/aurelie.jpg, Branding/Boenouvo/signature/automne.jpg, Branding/Boenouvo/signature/ete.jpg, Branding/Boenouvo/signature/fete-de-la-musique.jpg, Branding/Boenouvo/signature/halloween, Branding/Boenouvo/signature/hivers.jpg, Branding/Boenouvo/signature/noel.jpg, Branding/Boenouvo/signature/printemps.jpg, Branding/Boenouvo/signature/rentree-scolaire.jpg, Branding/Boenouvo/tampon/proposition-tampon.jpg, Branding/Boenouvo/tampon/proposition-tampon.jpg, Branding/Boenouvo/tampon/tampon-final.jpg, Branding/Boenouvo/brain-juice.jpg, Branding/Boenouvo/charte-graphique.jpg, Branding/Boenouvo/illustration-brain-juice.jpg'),
(28, 'Branding', 'Refonte identité Durex', 'Durex', 'Durex est une marque de préservatifs du groupe anglais Reckitt Benckiser\r\n\r\n- refonte du logotype\r\n- création de la papeterie\r\n- création de plusieurs packagings \r\n', 'illustrator, photoshop', 'Branding/Durex/durex.jpg, Branding/Durex/packaging.jpg, Branding/Durex/papeterie.jpg, Branding/Durex/refonte-logo.jpg'),
(29, 'Branding', 'Identité visuelle Loïc Odile', '', 'création de l\'identité visuelle \r\n\r\n- logotype\r\n- charte graphique\r\n- papeterie\r\n', 'illustrator, photoshop, indesign', 'Branding/Identite_loic/charte-1.jpg, Branding/Identite_loic/charte-2.jpg, Branding/Identite_loic/charte-3.jpg, Branding/Identite_loic/charte-4.jpg, Branding/Identite_loic/charte-5.jpg, Branding/Identite_loic/charte-6.jpg, Branding/Identite_loic/charte-7.jpg'),
(30, 'Branding', 'Logotype aide à la personne', '', 'création d\'un logotype dans le domaine du service d\'aide à la personne', 'illustrator', 'Branding/service-sans-relache.jpg'),
(31, 'Branding', 'tampon Pachamama', 'Pachamama', 'Pachamama une société de commerce de gros (commerce interentreprises) alimentaire non spécialisé\r\n\r\n- création du tampon de l\'enseigne', 'illustrator', 'Branding/Tampon-pachamama.jpg'),
(32, 'Affiche', 'Affiche prévention', '', 'création d\'une affiche métaphorique de la conséquence dramatique lié au danger du tabac\r\n\r\ntechniques :\r\n- mode de fusion\r\n- filtres\r\n- illustration\r\n- compositing', 'photoshop', 'Affiche/affiche-prevention.jpg'),
(33, 'Affiche', 'campagne santé', 'Ministère de la santé - INPES', '\r\ncréation d\'une campagne publicitaire en teasing sur les conséquences néfaste du tabac. Le but étant d\'attirer l\'attention et la curiosité de l\'audience sur la première affiche pour ensuite révéler l\'objet de la campagne\r\n\r\ntechniques:\r\n\r\n- compositing\r\n- filtres\r\n- mode de fusion', 'photoshop', 'Affiche/campagne-sante.jpg'),
(34, 'Affiche', 'Heineken - Open your world ', 'Heineken', 'affiche publicitaire ', 'photoshop', 'Affiche/heineken.jpg'),
(35, 'Affiche', 'Mondial du snowboard', 'région Rhône Alpes', 'affiche pour le Mondial du SnowBoard ', 'photoshop', 'Affiche/mondial-snowboard.jpg'),
(36, 'Affiche', 'Violence contre les femmes', '', 'affiche pour lutter envers la violence contre les femmes', 'photoshop', 'Affiche/violence-contre-les-femmes.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
