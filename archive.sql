-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 14 nov. 2020 à 09:49
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `archive`
--

-- --------------------------------------------------------

--
-- Structure de la table `bp`
--

DROP TABLE IF EXISTS `bp`;
CREATE TABLE IF NOT EXISTS `bp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(30) NOT NULL,
  `fichier` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bp`
--

INSERT INTO `bp` (`id`, `description`, `fichier`) VALUES
(2, 'col/tamba/seny', 'Guide complet - CrÃ©er un site ecommerce avec Woocommerce.pdf'),
(3, 'col/tamba/oumar-balde', 'balde cv.doc'),
(4, 'col/tamba/oumar-balde', 'dc7a73e62ed8e3783a7546bac9a5b11303c718a8'),
(5, 'Lot de 27 Dossiers de GOUDIRY', '40402624e2383a31aca0abff33ce09be06d0801e'),
(6, 'col/tamba/oumar-balde', '7170e9b140aabccd84160e85c1a7232584f2bd1c'),
(7, 'col/tamba/oumar-balde', '3544bf496159185b2d6b4ab44866eab313d4cfc4'),
(8, 'bp/18-10-20', '0d9904379ad487a5d925d855e62c8a5a0d57c818'),
(9, 'bp/18-10-20', '6c2f769c6de900314aa8cc9f11037ceba35866f1');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `responsable` text NOT NULL,
  `nc` int(11) NOT NULL,
  `np` int(11) NOT NULL,
  `pht` varchar(255) NOT NULL,
  `exre` varchar(255) NOT NULL,
  `autre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `code`, `responsable`, `nc`, `np`, `pht`, `exre`, `autre`) VALUES
(7, 'col/tamba/oumar-balde', 'seny', 20, 15, 'balde cv.doc', 'balde cv.doc', 'balde cv.doc'),
(8, 'col/tamba/oumar-balde', 'oumar ', 20, 15, 'balde cv.doc', 'balde cv.doc', 'balde cv.doc'),
(9, '09-05-18', 'oumar', 20, 13, '7fa14056d193c5da44c5a6859de3e9926196d250', '571255e4c33ff5cccdd4aba77fd60f1aadb68649', '31da614eb38998ae14f5a6244ff08d263b6179aa');

-- --------------------------------------------------------

--
-- Structure de la table `integration`
--

DROP TABLE IF EXISTS `integration`;
CREATE TABLE IF NOT EXISTS `integration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `responsable` text NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `expense_report` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `integration`
--

INSERT INTO `integration` (`id`, `description`, `responsable`, `fichier`, `expense_report`) VALUES
(25, 'IND0592_Tambacounda_ISMAILA GAYE', 'oumar ', '877f5d0de77aaa3e5a108965c245228f4f68313afecb3bc4e1b65f2d8616829a336c6916f34a8f6d58ca85a75b1e8236978710406b9035a22604462a042e8be2application/pdf', '346829-apprenez-le-fonctionnement-des-reseaux-tcp-ip.pdf'),
(24, 'col/tamba/oumar-balde', 'oumar ', '0', '346829-apprenez-le-fonctionnement-des-reseaux-tcp-ip.pdf'),
(23, 'col/tamba/oumar-balde', 'seny', '34ac9f845416cf70992ab5ee2b7919b2aae3ea3eapplication/pdf', '346829-apprenez-le-fonctionnement-des-reseaux-tcp-ip.pdf'),
(26, 'col/tamba/seny', 'seny', '642fcccf3329aa2d65a6b10e347e17e5575f68b3f81281f45391d7b651d47ff01fd16c93dc99f5a9cb29d261cdc5fff6a2c71534ad501bba956de5be5fe1b601application/pdf', 'CV1.pdf'),
(27, 'Lot de 27 Dossiers de GOUDIRY', 'oumar ', 'b36a723baf45e6bbb91e7ddb0d254da8a1a4021a415c7760bb1fd8ba63fa09272cbb370188d74fc08e8342fb667bc4d939f3ad5a33c3b8bcfee102f309afa30d', 'b147894ea7f4788e2504fbf9c0301e442a643c37a9de21ea9248916ae5238392376004294da9df7f8c146cf32958fb6eec8646fe4b87731bd919a5b4a4c6048c'),
(28, 'col/tamba/oumar-balde', 'Alioune', '5b86132fe0fdf6c4e0b99fb858a7f024d886b670', '5666cd23deb3e99a5229ebc70648dfc6c6f620fd'),
(29, 'IND0592_Tambacounda_ISMAILA GAYE', 'seny', 'fad2c5fd72ba32114020dd1d95879afc47aca1b0', '2070772f0289fe90a8745d2bcdf8167f2d073e40'),
(30, 'col/tamba/oumar-balde', 'Alioune', '4c5cc77fc73b1ff0c3de5391e55afa32605fda6d', '15a7f038f7292c3a29fc5770fe42f042daa7d17d'),
(31, 'col/tamba/oumar-balde', 'oumar ', '1dad0ac40c33a332b00002e68435e3ceaeba5e84', 'cb567d550ed98b4a52372290ab89860715f56551'),
(32, 'Lot de 27 Dossiers de GOUDIRY', 'Alioune', 'c12f50d564983c3300775645c61b4e32c6146b64', ''),
(33, 'col/tamba/oumar-balde', 'oumar ', 'c546ef5dd205ca3a51404990b7bb649f38136314', '764e454e67e15a8bf537dda0053fa59b8566f4cb'),
(34, 'col/tamba/seny', 'Alioune', '188fb4343d060ea2e8b54c625d8a49409eec27ad', '764e454e67e15a8bf537dda0053fa59b8566f4cb'),
(35, 'col/tamba/oumar-balde', 'oumar ', '5f0d2f50029d9a95eb9df98f6955e3a3a18bcac9', '5114476902587bc83bef1539f10606a7c9b01d30'),
(36, 'col/tamba/seny', 'seny', 'b1105d894daa59f168812c3ec1dbabde9b526481', '5114476902587bc83bef1539f10606a7c9b01d30'),
(37, 'col/tamba/oumar-balde', 'oumar ', 'c09d6e1b264e9d82adcc48d64222014668db8ef7', '7599f181ab73e021ef77cefcf512655b94e67e09'),
(38, 'IND0592_Tambacounda_ISMAILA GAYE', 'oumar seny', '7e9bd849c3b259e5d4847b40706fb1b13f54ed6d', '7599f181ab73e021ef77cefcf512655b94e67e09'),
(39, 'col/tamba/oumar-balde', 'Alioune', '1424c77db868b75923b0a15912abb678e5b3a0ea', 'ffebf33471f8dc8145790a2cf0a1b854d783e9bd'),
(40, 'lot de dossiers', 'ouma', '2245944cfd7392e786aa0a179e4a149e0543aa0e', '8b29ff698f9544c018fa78f3f37ed3c6f7b26427');

-- --------------------------------------------------------

--
-- Structure de la table `reintegration`
--

DROP TABLE IF EXISTS `reintegration`;
CREATE TABLE IF NOT EXISTS `reintegration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `id_migrant` varchar(50) NOT NULL,
  `mimosa` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `sexe` text NOT NULL,
  `region` text NOT NULL,
  `pays` text NOT NULL,
  `assistance` text NOT NULL,
  `conseil` text NOT NULL,
  `lieu` text NOT NULL,
  `date_session` date NOT NULL,
  `type_projet` text NOT NULL,
  `activite` text NOT NULL,
  `montant` int(11) NOT NULL,
  `code_projet` varchar(50) NOT NULL,
  `plan_reint` text NOT NULL,
  `lieu_projet` text NOT NULL,
  `commune_reint` text NOT NULL,
  `region_reint` text NOT NULL,
  `etat_reint` text NOT NULL,
  `responsable` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reintegration`
--

INSERT INTO `reintegration` (`id`, `prenom`, `nom`, `id_migrant`, `mimosa`, `tel`, `sexe`, `region`, `pays`, `assistance`, `conseil`, `lieu`, `date_session`, `type_projet`, `activite`, `montant`, `code_projet`, `plan_reint`, `lieu_projet`, `commune_reint`, `region_reint`, `etat_reint`, `responsable`) VALUES
(5, 'SL1-98-00156', 'COOPEC-RESOPP', 'FIMF', 'NE1019X018922', 785654741, 'dakar', 'Tambacounda', 'non affilie', 'difficulte', 'sain', 'Tamba', '2020-09-19', 'individuel', 'Commerce (boutique, vetements, etc,)', 50000, 'IND088', 'finalisÃ©', 'Hamdalaye Tessan', 'Hamdalaye Tessan', 'Tamba', 'terminÃ©e', 'BS');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `nom`, `login`, `password`) VALUES
(8, 'Alioune', 'balde', 'admin', 'admin92@-'),
(9, 'oumar', 'balde', 'balde', 'passer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
