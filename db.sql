-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 14 Janvier 2018 à 21:28
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Filler`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(1, 'Yanis', 'Bendahmane', 'Strikes', 'yanis.bendahmane@supinternet.fr', '0ac496496b6f514aaf4afa803ccba0c4'),
(2, 'Not', 'Doggo', 'Snek', 'birb@snek.doggo', '13f5226572da99996ff9cd5a51ce7dc0'),
(3, 'max', 'ime', 'seth', 'max@ime.seth', 'c638e491096ee452996931bbc9eb5041'),
(4, 'Truc', 'Truc', 'Truc', 'Truc@truc.fr', '45723a2af3788c4ff17f8d1114760e62'),
(5, 'o', 'o', 'o', 'o', 'd95679752134a2d9eb61dbd7b91c4bcc'),
(6, 'Jean', 'Lasalle', 'Jeannot', 'jean@lasalle.president', '93b58c0f1689d3d9d2f4ac999fe95a44'),
(7, 'Neil', 'Richter', 'neilrichter', 'spam@neilrichter.com', 'd24fd3ec8518e6e43edab9f07dbb7182'),
(8, 'Neil', 'Richter', 'neilrichter', 'me@neilrichter.com', 'd24fd3ec8518e6e43edab9f07dbb7182'),
(9, 'neil', 'richter', 'richterneil', 'asezeaz@neilrichter.com', '7682fe272099ea26efe39c890b33675b');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
