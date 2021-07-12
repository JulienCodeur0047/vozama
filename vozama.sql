-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 juil. 2021 à 13:59
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vozama`
--

-- --------------------------------------------------------

--
-- Structure de la table `aep`
--

DROP TABLE IF EXISTS `aep`;
CREATE TABLE IF NOT EXISTS `aep` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aep_date` date DEFAULT NULL,
  `aep_site` varchar(100) DEFAULT NULL,
  `aep_poste` varchar(100) DEFAULT NULL,
  `poste_id` int(10) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `aep_parrain` varchar(100) DEFAULT NULL,
  `aep_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aep`
--

INSERT INTO `aep` (`id`, `aep_date`, `aep_site`, `aep_poste`, `poste_id`, `site_id`, `aep_parrain`, `aep_description`) VALUES
(1, '2021-05-04', NULL, '6665', 7, 0, 'RAKOTO', 'SDSDS'),
(2, '2021-06-05', 'Aba', '367', 5, 1, 'AA', 'XXX');

-- --------------------------------------------------------

--
-- Structure de la table `agr`
--

DROP TABLE IF EXISTS `agr`;
CREATE TABLE IF NOT EXISTS `agr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `agr_filiere` varchar(150) DEFAULT NULL,
  `agr_qte` int(10) DEFAULT NULL,
  `agr_date_d` date DEFAULT NULL,
  `agr_date_suivi` date DEFAULT NULL,
  `agr_unite` varchar(100) DEFAULT NULL,
  `agr_formation` varchar(100) DEFAULT NULL,
  `agr_parent` varchar(300) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agr`
--

INSERT INTO `agr` (`id`, `agr_filiere`, `agr_qte`, `agr_date_d`, `agr_date_suivi`, `agr_unite`, `agr_formation`, `agr_parent`, `parent_id`) VALUES
(1, 'Akoho', 23, '2021-06-11', '2021-06-11', 'NBR', 'VITA', '0', 1);

-- --------------------------------------------------------

--
-- Structure de la table `bien`
--

DROP TABLE IF EXISTS `bien`;
CREATE TABLE IF NOT EXISTS `bien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bien_name` varchar(100) NOT NULL,
  `bien_date_arrive` date DEFAULT NULL,
  `bien_resp` varchar(200) DEFAULT NULL,
  `bien_date_disf` date DEFAULT NULL,
  `bien_type` varchar(100) DEFAULT NULL,
  `dep_id` int(10) NOT NULL,
  `bien_dep` varchar(200) DEFAULT NULL,
  `bien_mat` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bien`
--

INSERT INTO `bien` (`id`, `bien_name`, `bien_date_arrive`, `bien_resp`, `bien_date_disf`, `bien_type`, `dep_id`, `bien_dep`, `bien_mat`) VALUES
(1, 'TOYOTA', '2021-07-02', 'RAKOTO', '2021-07-02', 'Auto-moto', 2, 'ABD', '1236FD'),
(2, 'NISSAN', '2021-07-17', 'RABE', '2021-06-30', 'Auto-moto', 3, 'CROD', '6663654WWT');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `chr_type` varchar(100) DEFAULT NULL,
  `chr_numero` int(10) DEFAULT NULL,
  `chr_prix_nuite` int(10) DEFAULT NULL,
  `chr_prix_jour` int(10) DEFAULT NULL,
  `chr_prix_horaire` int(10) DEFAULT NULL,
  `chr_nbr_lit_1_plce` int(10) DEFAULT '0',
  `chr_nbr_lit_2_plce` int(10) DEFAULT '0',
  `chr_tv` varchar(100) DEFAULT 'non',
  `chr_eau_chaude` varchar(100) DEFAULT 'non',
  `chr_reserve` varchar(100) NOT NULL DEFAULT 'non',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `chr_type`, `chr_numero`, `chr_prix_nuite`, `chr_prix_jour`, `chr_prix_horaire`, `chr_nbr_lit_1_plce`, `chr_nbr_lit_2_plce`, `chr_tv`, `chr_eau_chaude`, `chr_reserve`) VALUES
(1, 'A', 1, 25000, 10000, 5000, 0, 1, 'oui', 'non', 'non'),
(2, 'N', 3, 20000, 5000, 2000, 1, 0, 'non', 'non', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `cisco`
--

DROP TABLE IF EXISTS `cisco`;
CREATE TABLE IF NOT EXISTS `cisco` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cisco_name` varchar(100) DEFAULT NULL,
  `cisco_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comite_villagois`
--

DROP TABLE IF EXISTS `comite_villagois`;
CREATE TABLE IF NOT EXISTS `comite_villagois` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cmv_name` varchar(100) DEFAULT NULL,
  `cmv_firstname` varchar(100) DEFAULT NULL,
  `cmv_titre` varchar(100) DEFAULT NULL,
  `cmv_adresse` varchar(200) DEFAULT NULL,
  `cmv_tel` varchar(100) DEFAULT NULL,
  `cmv_site` varchar(100) DEFAULT NULL,
  `site_id` int(10) DEFAULT NULL,
  `cmv_gps` varchar(300) DEFAULT NULL,
  `cmv_nbr_enfant` int(10) DEFAULT NULL,
  `cmv_nbr_par_ger` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comite_villagois`
--

INSERT INTO `comite_villagois` (`id`, `cmv_name`, `cmv_firstname`, `cmv_titre`, `cmv_adresse`, `cmv_tel`, `cmv_site`, `site_id`, `cmv_gps`, `cmv_nbr_enfant`, `cmv_nbr_par_ger`) VALUES
(1, 'Julien Nivoarilanto', 'DD', 'President', 'VQ 16 A TER A Mandroseza', '0348778552', NULL, 0, '', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

DROP TABLE IF EXISTS `commune`;
CREATE TABLE IF NOT EXISTS `commune` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `commune_name` varchar(100) DEFAULT NULL,
  `commune_code` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

DROP TABLE IF EXISTS `conge`;
CREATE TABLE IF NOT EXISTS `conge` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `conge_motif` varchar(100) DEFAULT NULL,
  `conge_price` decimal(11,0) DEFAULT '0',
  `conge_droit` decimal(30,0) DEFAULT '0',
  `conge_pers` varchar(300) DEFAULT NULL,
  `conge_date_start` date DEFAULT NULL,
  `conge_date_end` date DEFAULT NULL,
  `conge_nbr_day` decimal(10,0) DEFAULT '0',
  `pers_id` int(10) DEFAULT NULL,
  `conge_date_reprise` date DEFAULT NULL,
  `dep_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conge`
--

INSERT INTO `conge` (`id`, `conge_motif`, `conge_price`, `conge_droit`, `conge_pers`, `conge_date_start`, `conge_date_end`, `conge_nbr_day`, `pers_id`, `conge_date_reprise`, `dep_id`) VALUES
(1, 'Marary', '8000', '2000', 'APOS Julien', '2021-07-07', '2021-07-08', '4', 2, '2021-07-11', 3);

-- --------------------------------------------------------

--
-- Structure de la table `contract_type`
--

DROP TABLE IF EXISTS `contract_type`;
CREATE TABLE IF NOT EXISTS `contract_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contract_type` varchar(100) NOT NULL,
  `contract_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cotisation_social`
--

DROP TABLE IF EXISTS `cotisation_social`;
CREATE TABLE IF NOT EXISTS `cotisation_social` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cot_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(100) DEFAULT NULL,
  `dep_number` int(10) DEFAULT NULL,
  `dep_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `department`
--

INSERT INTO `department` (`id`, `dep_name`, `dep_number`, `dep_type`) VALUES
(2, 'ABD', 223, 'Trésorier'),
(3, 'CROD', 5698, 'Administration');

-- --------------------------------------------------------

--
-- Structure de la table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(100) DEFAULT NULL,
  `district_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecolage`
--

DROP TABLE IF EXISTS `ecolage`;
CREATE TABLE IF NOT EXISTS `ecolage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `eleve_id` int(10) DEFAULT NULL,
  `eco_type` varchar(100) DEFAULT NULL,
  `eco_mois` int(10) DEFAULT NULL,
  `eco_date` date DEFAULT NULL,
  `eco_montant` int(10) DEFAULT '0',
  `eco_paye` varchar(100) DEFAULT 'non',
  `eco_libelle_type` varchar(100) DEFAULT NULL,
  `eco_observation` varchar(300) DEFAULT NULL,
  `eco_el_nom` varchar(100) DEFAULT NULL,
  `eco_el_prenoms` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `eglise`
--

DROP TABLE IF EXISTS `eglise`;
CREATE TABLE IF NOT EXISTS `eglise` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `eglise_name` varchar(100) DEFAULT NULL,
  `eglise_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eglise`
--

INSERT INTO `eglise` (`id`, `eglise_name`, `eglise_code`) VALUES
(1, 'FJKM', NULL),
(2, 'TTR', NULL),
(3, 'PS', NULL),
(4, 'AZ', NULL),
(5, 'ZX', NULL),
(6, 'CV', NULL),
(7, 'XXC', NULL),
(8, 'QW', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `eleve_name` varchar(100) DEFAULT NULL,
  `eleve_firstname` varchar(100) DEFAULT NULL,
  `eleve_matricule` varchar(100) DEFAULT NULL,
  `eleve_sexe` varchar(10) DEFAULT NULL,
  `eleve_date_birth` date DEFAULT NULL,
  `eleve_adresse` varchar(100) DEFAULT NULL,
  `eleve_cin` varchar(100) DEFAULT NULL,
  `eleve_phone` varchar(100) DEFAULT NULL,
  `eleve_participation` varchar(100) DEFAULT NULL,
  `eleve_date_abandon` date DEFAULT NULL,
  `eleve_date_retour` date DEFAULT NULL,
  `eleve_date_entre` date DEFAULT NULL,
  `eleve_age` int(10) DEFAULT NULL,
  `eleve_lieu_naissance` varchar(100) DEFAULT NULL,
  `eleve_religion` varchar(100) DEFAULT NULL,
  `eleve_copie` varchar(500) DEFAULT NULL,
  `eleve_secteur` varchar(100) DEFAULT NULL,
  `eleve_classe` varchar(100) DEFAULT NULL,
  `eleve_situation` varchar(100) DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `poste_id` int(10) DEFAULT NULL,
  `site_id` int(10) DEFAULT NULL,
  `eleve_parent` varchar(300) DEFAULT NULL,
  `eleve_poste` varchar(100) DEFAULT NULL,
  `eleve_site` varchar(100) DEFAULT NULL,
  `eleve_mom` varchar(100) DEFAULT NULL,
  `eleve_dad` varchar(100) DEFAULT NULL,
  `eleve_prof_parents` varchar(100) DEFAULT NULL,
  `eleve_classe_passe` varchar(100) DEFAULT NULL,
  `eleve_nbr_fs` int(10) DEFAULT NULL,
  `eleve_num_copie` varchar(100) DEFAULT NULL,
  `eleve_abr` double DEFAULT NULL,
  `eleve_m1` double DEFAULT NULL,
  `eleve_m2` double DEFAULT NULL,
  `eleve_m3` double DEFAULT NULL,
  `eleve_mg` int(11) DEFAULT NULL,
  `eleve_date_mo` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id`, `eleve_name`, `eleve_firstname`, `eleve_matricule`, `eleve_sexe`, `eleve_date_birth`, `eleve_adresse`, `eleve_cin`, `eleve_phone`, `eleve_participation`, `eleve_date_abandon`, `eleve_date_retour`, `eleve_date_entre`, `eleve_age`, `eleve_lieu_naissance`, `eleve_religion`, `eleve_copie`, `eleve_secteur`, `eleve_classe`, `eleve_situation`, `parent_id`, `poste_id`, `site_id`, `eleve_parent`, `eleve_poste`, `eleve_site`, `eleve_mom`, `eleve_dad`, `eleve_prof_parents`, `eleve_classe_passe`, `eleve_nbr_fs`, `eleve_num_copie`, `eleve_abr`, `eleve_m1`, `eleve_m2`, `eleve_m3`, `eleve_mg`, `eleve_date_mo`) VALUES
(11, 'Lanto', 'Julien', '88-R9E', 'M', '0000-00-00', 'Rue Marx Dormoy', NULL, NULL, NULL, '0000-00-00', NULL, '2021-05-07', 0, 'Fianarantsoa', NULL, NULL, NULL, 'T0', 'Redoublant', 5, 0, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', 0, 8.6666666666667, 14.833333333333, 14, 13, NULL),
(12, 'Juliano', 'Martin', '88-R9', 'M', '0000-00-00', 'Rue Marx Dormoy', NULL, NULL, NULL, '0000-00-00', NULL, '2018-01-13', 0, 'Fianarantsoa', NULL, NULL, NULL, 'T1', 'Passant', 5, 4, NULL, NULL, 'Add', NULL, '', '', '', NULL, NULL, '', 0, 12, NULL, NULL, 4, NULL),
(14, 'OOPA', 'DD', '998sdf', 'F', '0000-00-00', 'SSA', NULL, NULL, NULL, '2021-05-06', NULL, '2021-04-08', 0, 'Pasd', 'Catholique', NULL, NULL, '', 'Nouveau', 5, 8, NULL, NULL, 'XX01', NULL, '', '', 'CCV', NULL, NULL, '7', 9, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `en_name` varchar(100) NOT NULL,
  `en_devise` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `start_event` date DEFAULT NULL,
  `end_event` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(11, 'A', '2021-07-20', '2021-07-23'),
(16, 'LIK', '2021-07-07', '2021-07-08'),
(17, 'RAKOTO', '2021-07-25', '2021-07-28'),
(15, 'PLI', '2021-07-04', '2021-07-06'),
(18, 'AX', '2021-06-27', '2021-06-27'),
(19, 'LK', '2021-07-15', '2021-07-17'),
(21, 'POLIM', '2021-07-01', '2021-07-01'),
(22, 'vite', '2021-07-26', '2021-08-08'),
(23, 'Manomboka', '2021-06-27', '2021-07-01'),
(24, 'TApitra', '2021-06-27', '2021-07-01'),
(25, 'RAKOTO', '2021-07-07', '2021-07-11');

-- --------------------------------------------------------

--
-- Structure de la table `fokotany`
--

DROP TABLE IF EXISTS `fokotany`;
CREATE TABLE IF NOT EXISTS `fokotany` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fkt_name` varchar(100) DEFAULT NULL,
  `fkt_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gardien`
--

DROP TABLE IF EXISTS `gardien`;
CREATE TABLE IF NOT EXISTS `gardien` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gar_name` varchar(100) DEFAULT NULL,
  `gar_firstname` varchar(100) DEFAULT NULL,
  `gar_matricule` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inspecteur`
--

DROP TABLE IF EXISTS `inspecteur`;
CREATE TABLE IF NOT EXISTS `inspecteur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `insp_matricule` varchar(100) DEFAULT NULL,
  `insp_name` varchar(100) DEFAULT NULL,
  `insp_firstname` varchar(100) DEFAULT NULL,
  `insp_date_nais` date DEFAULT NULL,
  `insp_etat` varchar(100) DEFAULT NULL,
  `insp_address` varchar(100) DEFAULT NULL,
  `insp_religion` varchar(100) DEFAULT NULL,
  `insp_profession` varchar(100) DEFAULT NULL,
  `insp_date_entre_voz` date DEFAULT NULL,
  `insp_date_prise_fonc` date DEFAULT NULL,
  `insp_temp_transp_vp` varchar(100) DEFAULT NULL,
  `insp_temp_transp_formation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inspecteur`
--

INSERT INTO `inspecteur` (`id`, `insp_matricule`, `insp_name`, `insp_firstname`, `insp_date_nais`, `insp_etat`, `insp_address`, `insp_religion`, `insp_profession`, `insp_date_entre_voz`, `insp_date_prise_fonc`, `insp_temp_transp_vp`, `insp_temp_transp_formation`) VALUES
(1, '889/-FQ1002', 'Andry', 'DDKA', '2019-01-15', 'Divorcer', 'Ankofafa', 'Autre', 'AKB', NULL, NULL, '2 Jours', '3 Jours');

-- --------------------------------------------------------

--
-- Structure de la table `moniteur`
--

DROP TABLE IF EXISTS `moniteur`;
CREATE TABLE IF NOT EXISTS `moniteur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `moniteur_matricule` varchar(100) DEFAULT NULL,
  `moniteur_name` varchar(100) DEFAULT NULL,
  `moniteur_firstname` varchar(100) DEFAULT NULL,
  `moniteur_etat` varchar(100) DEFAULT NULL,
  `moniteur_address` varchar(100) DEFAULT NULL,
  `moniteur_poste` varchar(100) DEFAULT NULL,
  `moniteur_religion` varchar(100) DEFAULT NULL,
  `moniteur_profession` varchar(100) DEFAULT NULL,
  `moniteur_date_entre_voz` date DEFAULT NULL,
  `moniteur_date_nais` date DEFAULT NULL,
  `poste_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `moniteur`
--

INSERT INTO `moniteur` (`id`, `moniteur_matricule`, `moniteur_name`, `moniteur_firstname`, `moniteur_etat`, `moniteur_address`, `moniteur_poste`, `moniteur_religion`, `moniteur_profession`, `moniteur_date_entre_voz`, `moniteur_date_nais`, `poste_id`) VALUES
(1, '22/-Fr45', 'Rakoto', 'Nad', 'Marie', 'Talatamaty', 'A', 'Autre', 'KA', '2020-10-12', NULL, NULL),
(2, 'fsfs223s', 'Nivoarilanto', 'Julien', 'Célibataire', 'VQ 16 A TER A Mandroseza', 'XZ', 'sfsf', 'sffsf', '2021-07-16', '2021-07-08', 10);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `niveau_name` varchar(100) DEFAULT NULL,
  `niveau_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `eleve_id` int(10) DEFAULT NULL,
  `note_eleve` varchar(500) DEFAULT NULL,
  `note_date` date DEFAULT NULL,
  `note_el_classe` varchar(100) DEFAULT NULL,
  `1M1` double DEFAULT NULL,
  `1M2` double DEFAULT NULL,
  `1M3` double DEFAULT NULL,
  `1M4` double DEFAULT NULL,
  `1M5` double DEFAULT NULL,
  `1M6` double DEFAULT NULL,
  `1M7` double DEFAULT NULL,
  `1M8` double DEFAULT NULL,
  `2M1` double DEFAULT NULL,
  `2M2` double DEFAULT NULL,
  `2M3` double DEFAULT NULL,
  `2M4` double DEFAULT NULL,
  `2M5` double DEFAULT NULL,
  `2M6` double DEFAULT NULL,
  `2M7` double DEFAULT NULL,
  `2M8` double DEFAULT NULL,
  `3M1` double DEFAULT NULL,
  `3M2` double DEFAULT NULL,
  `3M3` double DEFAULT NULL,
  `3M4` double DEFAULT NULL,
  `3M5` double DEFAULT NULL,
  `3M6` double DEFAULT NULL,
  `3M7` double DEFAULT NULL,
  `3M8` double DEFAULT NULL,
  `1MO` double DEFAULT NULL,
  `2MO` double DEFAULT NULL,
  `3MO` double DEFAULT NULL,
  `MG` double DEFAULT NULL,
  `MP` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `eleve_id`, `note_eleve`, `note_date`, `note_el_classe`, `1M1`, `1M2`, `1M3`, `1M4`, `1M5`, `1M6`, `1M7`, `1M8`, `2M1`, `2M2`, `2M3`, `2M4`, `2M5`, `2M6`, `2M7`, `2M8`, `3M1`, `3M2`, `3M3`, `3M4`, `3M5`, `3M6`, `3M7`, `3M8`, `1MO`, `2MO`, `3MO`, `MG`, `MP`) VALUES
(1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12.5, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL),
(2, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 7, 9, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL),
(3, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, 13, 10, 10.5, 14, 15, 16, 12, NULL, NULL, 12.8125, NULL, NULL),
(4, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 12, 0, 0, 0, 0, 0, 0, NULL, NULL, 12.5, NULL, NULL),
(5, 11, 'Lanto Julien', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 12, 2, 0, 0, 0, 0, 0, NULL, NULL, 7, NULL, NULL),
(6, 11, 'Lanto Julien', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1.5, 0, 2, 1.5, 0, 0, 0, NULL, NULL, 1.6666666666667, NULL, NULL),
(7, 12, 'Juliano Martin', '2021-07-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 3, 1.5, 3, 0, 0, 0, NULL, NULL, 2.375, NULL, NULL),
(8, NULL, 'Juliano Martin', '2021-07-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 13, 10, 0, 0, 0, 0, 0, NULL, NULL, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `note_eleve`
--

DROP TABLE IF EXISTS `note_eleve`;
CREATE TABLE IF NOT EXISTS `note_eleve` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `eleve_id` int(10) DEFAULT NULL,
  `note_eleve` varchar(300) DEFAULT NULL,
  `note_eleve_classe` varchar(100) DEFAULT NULL,
  `note_trimestre` int(10) DEFAULT NULL,
  `note_trimestre_annee` int(10) DEFAULT NULL,
  `note_mat1` double DEFAULT NULL,
  `note_mat2` double DEFAULT NULL,
  `note_mat3` double DEFAULT NULL,
  `note_mat4` double DEFAULT NULL,
  `note_mat5` double DEFAULT NULL,
  `note_mat6` double DEFAULT NULL,
  `note_mat7` double DEFAULT NULL,
  `note_mat8` double DEFAULT NULL,
  `note_moyenne` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note_eleve`
--

INSERT INTO `note_eleve` (`id`, `eleve_id`, `note_eleve`, `note_eleve_classe`, `note_trimestre`, `note_trimestre_annee`, `note_mat1`, `note_mat2`, `note_mat3`, `note_mat4`, `note_mat5`, `note_mat6`, `note_mat7`, `note_mat8`, `note_moyenne`) VALUES
(1, 11, 'Lanto Julien', NULL, 1, 2020, 10.5, 13, 15, 9.5, 0, 0, 0, 0, 12),
(2, 12, 'Juliano Martin', NULL, 2, 2020, 2, 1.5, 2, 0, 0, 0, 0, 0, 1.8333333333333),
(3, 12, 'Juliano Martin', 'T1', 1, 2004, 6.5, 11, 0, 0, 0, 0, 5.5, 0, 7.6666666666667),
(4, 12, 'Juliano Martin', 'T1', 2, 2012, 11, 9, 14, 12.5, 0, 0, 0, 0, 11.625),
(5, 11, 'Lanto Julien', 'T0', 1, 2022, 4, 12, 10, 0, 0, 0, 0, 0, 8.6666666666667),
(6, 11, 'Lanto Julien', 'T0', 2, 2022, 15, 0, 15, 0, 0, 14.5, 0, 0, 14.833333333333),
(7, 11, 'Lanto Julien', 'T0', 3, 2022, 14, 13.5, 0, 13, 0, 0, 0, 15.5, 14);

-- --------------------------------------------------------

--
-- Structure de la table `paie`
--

DROP TABLE IF EXISTS `paie`;
CREATE TABLE IF NOT EXISTS `paie` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `paie_date` date DEFAULT NULL,
  `paie_salary` int(10) DEFAULT NULL,
  `paie_brute` int(10) DEFAULT NULL,
  `paie_deduction_fiscal` int(10) DEFAULT NULL,
  `paie_pers_id` int(10) DEFAULT NULL,
  `paie_pers` varchar(100) DEFAULT NULL,
  `paie_rest` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_pere_name` varchar(100) DEFAULT NULL,
  `parent_mere_name` varchar(100) DEFAULT NULL,
  `parent_pere_fonction` varchar(100) DEFAULT NULL,
  `parent_pere_age` int(10) DEFAULT NULL,
  `parent_mere_age` int(10) DEFAULT NULL,
  `parent_address` varchar(100) DEFAULT NULL,
  `parent_nbr_enfant` int(10) DEFAULT NULL,
  `parent_nbr_sco_voz` int(10) DEFAULT NULL,
  `parent_anne_entre_voz` date DEFAULT NULL,
  `parent_anne_sorti_voz` date DEFAULT NULL,
  `parent_classe_enfant` varchar(200) DEFAULT NULL,
  `parent_titre` varchar(100) DEFAULT NULL,
  `parent_nbr_prt_gere` int(10) DEFAULT NULL,
  `parent_coordonnee` varchar(100) DEFAULT NULL,
  `parent_site` varchar(100) DEFAULT NULL,
  `parent_tel` varchar(100) DEFAULT NULL,
  `site_id` int(10) DEFAULT NULL,
  `poste_id` int(10) DEFAULT NULL,
  `parent_poste` varchar(100) DEFAULT NULL,
  `parent_particip` varchar(100) DEFAULT NULL,
  `parent_filiere` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parent`
--

INSERT INTO `parent` (`id`, `parent_pere_name`, `parent_mere_name`, `parent_pere_fonction`, `parent_pere_age`, `parent_mere_age`, `parent_address`, `parent_nbr_enfant`, `parent_nbr_sco_voz`, `parent_anne_entre_voz`, `parent_anne_sorti_voz`, `parent_classe_enfant`, `parent_titre`, `parent_nbr_prt_gere`, `parent_coordonnee`, `parent_site`, `parent_tel`, `site_id`, `poste_id`, `parent_poste`, `parent_particip`, `parent_filiere`) VALUES
(1, 'Als', 'DD', 'FC', 32, 40, 'vv', 3, 1, '2021-07-17', '2021-07-17', 'MMS', 'President', 3, NULL, NULL, '034', 1, 5, '367', NULL, NULL),
(5, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `passgard`
--

DROP TABLE IF EXISTS `passgard`;
CREATE TABLE IF NOT EXISTS `passgard` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pass_name_firstname` varchar(300) DEFAULT NULL,
  `pass_date_dep` date DEFAULT NULL,
  `pass_hr_dep` time DEFAULT NULL,
  `pass_hr_rem` time DEFAULT NULL,
  `pass_date_rem` date DEFAULT NULL,
  `pass_obejt` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `passgard`
--

INSERT INTO `passgard` (`id`, `pass_name_firstname`, `pass_date_dep`, `pass_hr_dep`, `pass_hr_rem`, `pass_date_rem`, `pass_obejt`) VALUES
(3, 'Nivoarilanto Julien', '2021-07-22', '15:08:00', '15:09:00', '2021-07-14', 'Tablet');

-- --------------------------------------------------------

--
-- Structure de la table `pepiniere`
--

DROP TABLE IF EXISTS `pepiniere`;
CREATE TABLE IF NOT EXISTS `pepiniere` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pep_libelle` varchar(100) DEFAULT NULL,
  `pep_type` varchar(100) DEFAULT NULL,
  `pep_date` date DEFAULT NULL,
  `pep_site` varchar(100) DEFAULT NULL,
  `pep_poste` varchar(100) DEFAULT NULL,
  `poste_id` int(10) DEFAULT NULL,
  `site_id` int(10) DEFAULT NULL,
  `pep_qte` int(10) DEFAULT NULL,
  `pep_durre_porjet` varchar(100) DEFAULT NULL,
  `pep_description` varchar(400) DEFAULT NULL,
  `pep_surface` varchar(100) DEFAULT NULL,
  `pep_prix` varchar(100) DEFAULT NULL,
  `pep_taille` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pepiniere`
--

INSERT INTO `pepiniere` (`id`, `pep_libelle`, `pep_type`, `pep_date`, `pep_site`, `pep_poste`, `poste_id`, `site_id`, `pep_qte`, `pep_durre_porjet`, `pep_description`, `pep_surface`, `pep_prix`, `pep_taille`) VALUES
(1, 'KINININA', 'Agriculture', '2021-05-05', NULL, '6665', 7, 0, 124, '3MOIS', 'fa', '1Ha', '1200', 'm'),
(2, 'OMBY', 'Elevage', '2021-05-13', NULL, 'PPls', 9, NULL, 3, '1an30mois', 'REAAx', '', '100000', 'Moyen'),
(3, 'BOZAKA', 'Agriculture', '2021-05-13', NULL, 'XZ', 10, 0, 4, '1an30mois', 's', 'SSD', '1000', 'P');

-- --------------------------------------------------------

--
-- Structure de la table `pere`
--

DROP TABLE IF EXISTS `pere`;
CREATE TABLE IF NOT EXISTS `pere` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pere_name` varchar(100) DEFAULT NULL,
  `pere_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pers_name` varchar(100) DEFAULT NULL,
  `pers_firstname` varchar(100) DEFAULT NULL,
  `pers_date_birth` date DEFAULT NULL,
  `pers_cin` varchar(100) DEFAULT NULL,
  `pers_address` varchar(100) DEFAULT NULL,
  `pers_sexe` varchar(100) DEFAULT NULL,
  `pers_age` int(10) DEFAULT NULL,
  `pers_sm` varchar(100) DEFAULT NULL,
  `pers_phone` varchar(100) DEFAULT NULL,
  `pers_mail` varchar(100) DEFAULT NULL,
  `dep_id` int(10) DEFAULT NULL,
  `pers_type` varchar(100) DEFAULT NULL,
  `pers_contrat` varchar(100) DEFAULT NULL,
  `pers_date_arrived` date DEFAULT NULL,
  `pers_date_gone` date DEFAULT NULL,
  `pers_date_renew` date DEFAULT NULL,
  `pers_cot_social` varchar(100) DEFAULT NULL,
  `pers_dep` varchar(200) DEFAULT NULL,
  `pers_nbr_conge` int(10) DEFAULT NULL,
  `pers_dr_conge` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personal`
--

INSERT INTO `personal` (`id`, `pers_name`, `pers_firstname`, `pers_date_birth`, `pers_cin`, `pers_address`, `pers_sexe`, `pers_age`, `pers_sm`, `pers_phone`, `pers_mail`, `dep_id`, `pers_type`, `pers_contrat`, `pers_date_arrived`, `pers_date_gone`, `pers_date_renew`, `pers_cot_social`, `pers_dep`, `pers_nbr_conge`, `pers_dr_conge`) VALUES
(1, 'Nivoarilanto', 'Julien', '2014-01-02', '2233', 'VQ 16 A TER A Mandroseza', 'F', 7, 'Marié(e)', '0348778552', 'juliennivoarilanto@gmail.com', 2, 'Cadre', 'CDI', '2021-07-01', '2021-07-24', NULL, '20000', 'ABD', NULL, 2.5);

-- --------------------------------------------------------

--
-- Structure de la table `personal_type`
--

DROP TABLE IF EXISTS `personal_type`;
CREATE TABLE IF NOT EXISTS `personal_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pers_type_code` varchar(100) DEFAULT NULL,
  `pers_type_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

DROP TABLE IF EXISTS `planning`;
CREATE TABLE IF NOT EXISTS `planning` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `plan_nom` varchar(100) DEFAULT NULL,
  `plan_start` date DEFAULT NULL,
  `plan_end` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

DROP TABLE IF EXISTS `poste`;
CREATE TABLE IF NOT EXISTS `poste` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `poste_num` varchar(100) DEFAULT NULL,
  `poste_name` varchar(100) DEFAULT NULL,
  `poste_annee_ouverture` int(100) DEFAULT NULL,
  `poste_annee_fermeture` int(100) DEFAULT NULL,
  `poste_overture` varchar(100) DEFAULT NULL,
  `poste_fermeture` varchar(100) DEFAULT NULL,
  `poste_inspecteur_name` varchar(100) DEFAULT NULL,
  `poste_moniteur_name` varchar(100) DEFAULT NULL,
  `poste_changement_moniteur` varchar(100) DEFAULT NULL,
  `poste_name_predecesseur` varchar(100) DEFAULT NULL,
  `poste_annee_inspecteur` int(10) DEFAULT NULL,
  `poste_ss_secteur` varchar(100) DEFAULT NULL,
  `poste_formateur` varchar(100) DEFAULT NULL,
  `poste_prox_epp` varchar(100) DEFAULT NULL,
  `poste_name_epp` varchar(100) DEFAULT NULL,
  `poste_prox_epc` varchar(100) DEFAULT NULL,
  `poste_epc_name` varchar(100) DEFAULT NULL,
  `poste_existance_cp` varchar(100) DEFAULT NULL,
  `poste_activite_cp` varchar(100) DEFAULT NULL,
  `poste_caisse_cp` varchar(100) DEFAULT NULL,
  `poste_participation_cp` varchar(100) DEFAULT NULL,
  `poste_j1` varchar(100) DEFAULT NULL,
  `poste_h1` varchar(100) DEFAULT NULL,
  `poste_j2` varchar(100) DEFAULT NULL,
  `poste_h2` varchar(100) DEFAULT NULL,
  `poste_j3` varchar(100) DEFAULT NULL,
  `poste_h3` varchar(100) DEFAULT NULL,
  `poste_j4` varchar(100) DEFAULT NULL,
  `poste_h4` varchar(100) DEFAULT NULL,
  `poste_wc` varchar(100) DEFAULT NULL,
  `poste_classe_soir` varchar(100) DEFAULT NULL,
  `poste_tableau` varchar(100) DEFAULT NULL,
  `poste_chaise` varchar(100) DEFAULT NULL,
  `poste_abec` varchar(100) DEFAULT NULL,
  `poste_table_prof` varchar(100) DEFAULT NULL,
  `poste_table_enf` varchar(100) DEFAULT NULL,
  `poste_banc_enf` varchar(100) DEFAULT NULL,
  `poste_ardoise` varchar(100) DEFAULT NULL,
  `poste_livre` varchar(100) DEFAULT NULL,
  `poste_sceau` varchar(100) DEFAULT NULL,
  `poste_calebasse` varchar(100) DEFAULT NULL,
  `poste_natte` varchar(100) DEFAULT NULL,
  `poste_balais` varchar(100) DEFAULT NULL,
  `poste_savon` varchar(100) DEFAULT NULL,
  `poste_eponge` varchar(100) DEFAULT NULL,
  `poste_cisco` varchar(100) DEFAULT NULL,
  `poste_commune` varchar(100) DEFAULT NULL,
  `poste_eglise` varchar(100) DEFAULT NULL,
  `poste_district` varchar(100) DEFAULT NULL,
  `poste_pere` varchar(100) DEFAULT NULL,
  `poste_sous_pref` varchar(100) DEFAULT NULL,
  `poste_fkt` varchar(100) DEFAULT NULL,
  `poste_dist_fa_ou_amb` varchar(100) DEFAULT NULL,
  `poste_arret` varchar(100) DEFAULT NULL,
  `poste_reste_a_pied` varchar(100) DEFAULT NULL,
  `poste_dist_inspect_post` varchar(100) DEFAULT NULL,
  `poste_dist_moniteur_centre_formation` varchar(100) DEFAULT NULL,
  `poste_comm_rapide` varchar(100) DEFAULT NULL,
  `poste_repere_topo` varchar(500) DEFAULT NULL,
  `poste_proprietaire_maison` varchar(100) DEFAULT NULL,
  `poste_niveau` varchar(100) DEFAULT NULL,
  `poste_salaire_monitrice` varchar(100) DEFAULT NULL,
  `poste_loyer_maison` varchar(100) DEFAULT NULL,
  `poste_maj` varchar(100) DEFAULT NULL,
  `poste_fiche_parrain` varchar(100) DEFAULT NULL,
  `moniteur_id` int(10) DEFAULT NULL,
  `inspecteur_id` int(10) DEFAULT NULL,
  `poste_secteur` varchar(100) DEFAULT NULL,
  `site_id` int(10) DEFAULT NULL,
  `poste_quartier` varchar(100) DEFAULT NULL,
  `poste_region` varchar(100) DEFAULT NULL,
  `poste_site` varchar(100) DEFAULT NULL,
  `poste_zone` varchar(100) DEFAULT NULL,
  `poste_parrain` varchar(250) DEFAULT NULL,
  `poste_parraine` varchar(100) DEFAULT 'non',
  `paste_date_parr` date DEFAULT NULL,
  `poste_att_parrain` varchar(100) DEFAULT 'oui',
  `poste_partenair_type` varchar(100) DEFAULT NULL,
  `poste_partenair_libelle` varchar(100) DEFAULT NULL,
  `poste_partenariat` varchar(100) NOT NULL DEFAULT 'non',
  `poste_part_contrat` varchar(100) DEFAULT 'non',
  `poste_part_dur_contrat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `poste`
--

INSERT INTO `poste` (`id`, `poste_num`, `poste_name`, `poste_annee_ouverture`, `poste_annee_fermeture`, `poste_overture`, `poste_fermeture`, `poste_inspecteur_name`, `poste_moniteur_name`, `poste_changement_moniteur`, `poste_name_predecesseur`, `poste_annee_inspecteur`, `poste_ss_secteur`, `poste_formateur`, `poste_prox_epp`, `poste_name_epp`, `poste_prox_epc`, `poste_epc_name`, `poste_existance_cp`, `poste_activite_cp`, `poste_caisse_cp`, `poste_participation_cp`, `poste_j1`, `poste_h1`, `poste_j2`, `poste_h2`, `poste_j3`, `poste_h3`, `poste_j4`, `poste_h4`, `poste_wc`, `poste_classe_soir`, `poste_tableau`, `poste_chaise`, `poste_abec`, `poste_table_prof`, `poste_table_enf`, `poste_banc_enf`, `poste_ardoise`, `poste_livre`, `poste_sceau`, `poste_calebasse`, `poste_natte`, `poste_balais`, `poste_savon`, `poste_eponge`, `poste_cisco`, `poste_commune`, `poste_eglise`, `poste_district`, `poste_pere`, `poste_sous_pref`, `poste_fkt`, `poste_dist_fa_ou_amb`, `poste_arret`, `poste_reste_a_pied`, `poste_dist_inspect_post`, `poste_dist_moniteur_centre_formation`, `poste_comm_rapide`, `poste_repere_topo`, `poste_proprietaire_maison`, `poste_niveau`, `poste_salaire_monitrice`, `poste_loyer_maison`, `poste_maj`, `poste_fiche_parrain`, `moniteur_id`, `inspecteur_id`, `poste_secteur`, `site_id`, `poste_quartier`, `poste_region`, `poste_site`, `poste_zone`, `poste_parrain`, `poste_parraine`, `paste_date_parr`, `poste_att_parrain`, `poste_partenair_type`, `poste_partenair_libelle`, `poste_partenariat`, `poste_part_contrat`, `poste_part_dur_contrat`) VALUES
(4, '933', 'Add', 2011, 0, 'oui', 'non', 'QVBB', 'dss', 'tyu', '', NULL, NULL, '', '', 'sas', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Androy', NULL, '', '', NULL, '', NULL, 'non', NULL, 'oui', NULL, NULL, 'non', 'non', NULL),
(5, '1278', '367', 2020, 0, 'oui', 'non', 'Rettt', 'kko', 'fDA', '', NULL, NULL, '', '', 'sas', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Androy', NULL, '', '', NULL, 'Banlieu', 'RAKOTO', 'non', '2021-06-11', 'oui', 'Privé', 'PO', 'oui', 'non', ''),
(7, 'KKO', '6665', 0, 0, NULL, 'non', 'Andry DDKA', 'Rakoto Nad', 'sds', 'Rakoto Nad', NULL, NULL, 'OPO', '1km', NULL, '4km', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oui', NULL, 'oui', NULL, NULL, NULL, NULL, 'oui', NULL, 'on', NULL, '6665', 'oui', NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Y0', 'sd', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Androy', NULL, 'LLO', '', NULL, NULL, 'DD', 'non', '2021-06-19', 'oui', NULL, NULL, 'non', 'non', NULL),
(8, '3342', 'XX01', 0, 0, NULL, 'non', '', 'Rakoto Nad', 'sds', 'Rakoto Nad', NULL, NULL, 'OPO', '8km', NULL, '800m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oui', 'oui', NULL, NULL, 'oui', NULL, 'oui', NULL, NULL, 'oui', NULL, 'oui', 'oui', NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'sd', 'JEAN', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Androy', NULL, '', '', NULL, '', 'C', 'en attente', '2021-06-09', 'oui', NULL, NULL, 'non', 'non', NULL),
(9, 'ddsds', 'PPls', 10, 0, NULL, 'non', 'Andry DDKA', 'Rakoto Nad', 'dsd', 'Rakoto Nad', NULL, NULL, 'OOPAA', '500m', NULL, '300m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oui', 'oui', NULL, NULL, NULL, NULL, NULL, NULL, 'oui', NULL, 'oui', 'oui', NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'dasd', 'cc', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Talata Iboaka', NULL, 'DSJJ', '', NULL, NULL, 'CB', 'non', '2021-06-25', 'oui', NULL, NULL, 'non', 'non', NULL),
(10, 'XXC', 'XZ', 2020, 0, NULL, 'non', '', '', '', '', NULL, NULL, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'cc', 'OOPA', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Talata Iboaka', NULL, 'LOS', '', NULL, NULL, 'C', 'non', '2021-06-19', 'oui', NULL, NULL, 'non', 'non', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

DROP TABLE IF EXISTS `quartier`;
CREATE TABLE IF NOT EXISTS `quartier` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `quartier_name` varchar(100) DEFAULT NULL,
  `quartier_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `region_name` varchar(100) DEFAULT NULL,
  `region_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `region_name`, `region_code`) VALUES
(1, 'Analamanga', NULL),
(2, 'Haute Matsiatra', NULL),
(3, 'Betsiboka', NULL),
(5, 'Vatovavy fitovinany', NULL),
(6, 'Amoron\'i mania', NULL),
(7, 'Vakinakaratra', NULL),
(8, 'Itasy', NULL),
(9, 'Boeny', NULL),
(10, 'Sava', NULL),
(11, 'Diana', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `res_chr_num` int(10) DEFAULT NULL,
  `chambre_id` int(10) DEFAULT NULL,
  `res_nbr_jr` int(10) DEFAULT NULL,
  `res_date` date DEFAULT NULL,
  `res_type` varchar(100) DEFAULT NULL,
  `res_montant` int(10) DEFAULT NULL,
  `res_cli_nom` varchar(200) DEFAULT NULL,
  `res_cli_tel` varchar(100) DEFAULT NULL,
  `res_cli_nbr` int(10) DEFAULT NULL,
  `res_chr_prix` int(10) DEFAULT NULL,
  `res_paye_avc` int(10) DEFAULT '0',
  `res_paye_reste` int(10) DEFAULT '0',
  `res_paye_total` varchar(100) DEFAULT 'non',
  `res_repa_complet` varchar(100) DEFAULT 'non',
  `res_repa_prix_u` int(10) DEFAULT NULL,
  `res_repa_prix_total` int(10) DEFAULT NULL,
  `res_repa_u` varchar(100) DEFAULT 'non',
  `res_repa_nbr_complet` int(10) DEFAULT '3',
  `res_nbr_hr` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

DROP TABLE IF EXISTS `secteur`;
CREATE TABLE IF NOT EXISTS `secteur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `secteur_name` varchar(100) DEFAULT NULL,
  `sacteur_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `secteur`
--

INSERT INTO `secteur` (`id`, `secteur_name`, `sacteur_code`) VALUES
(4, 'Vakoa', 'V001'),
(2, 'Androy', 'A002'),
(3, 'Talata Iboaka', 'T001'),
(5, 'Alakamisy Ambohimaha', 'A003'),
(6, 'Avaratra', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(100) DEFAULT NULL,
  `site_zone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id`, `site_name`, `site_zone`) VALUES
(1, 'Aba', 'SS');

-- --------------------------------------------------------

--
-- Structure de la table `soc_network`
--

DROP TABLE IF EXISTS `soc_network`;
CREATE TABLE IF NOT EXISTS `soc_network` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `socn_titre` varchar(100) DEFAULT NULL,
  `socn_date_pub` date DEFAULT NULL,
  `socn_hr_pub` time DEFAULT NULL,
  `socn_lien_web` varchar(200) DEFAULT NULL,
  `socn_vd_pub_nbr` int(10) DEFAULT NULL,
  `socn_ph_pub_nbr` int(10) DEFAULT NULL,
  `socn_vd_ref_pub` varchar(400) DEFAULT NULL,
  `socn_ph_ref_pub` varchar(400) DEFAULT NULL,
  `socn_article` varchar(2000) DEFAULT NULL,
  `socn_platform` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `soc_network`
--

INSERT INTO `soc_network` (`id`, `socn_titre`, `socn_date_pub`, `socn_hr_pub`, `socn_lien_web`, `socn_vd_pub_nbr`, `socn_ph_pub_nbr`, `socn_vd_ref_pub`, `socn_ph_ref_pub`, `socn_article`, `socn_platform`) VALUES
(2, '12FF', '2021-06-11', '18:45:00', 'dsds', 4, 2, 'rfg', 'ujhjd', 'dsd', 'Facebook');

-- --------------------------------------------------------

--
-- Structure de la table `sous_prefecture`
--

DROP TABLE IF EXISTS `sous_prefecture`;
CREATE TABLE IF NOT EXISTS `sous_prefecture` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sous_pref_name` varchar(100) DEFAULT NULL,
  `sous_pref_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_prefecture`
--

INSERT INTO `sous_prefecture` (`id`, `sous_pref_name`, `sous_pref_code`) VALUES
(1, 'AZERTY', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `touriste`
--

DROP TABLE IF EXISTS `touriste`;
CREATE TABLE IF NOT EXISTS `touriste` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tour_name` varchar(100) DEFAULT NULL,
  `tour_firstname` varchar(100) DEFAULT NULL,
  `tour_date_birth` date DEFAULT NULL,
  `tour_nationalite` varchar(100) DEFAULT NULL,
  `tour_lieu_nais` varchar(100) DEFAULT NULL,
  `tour_email` varchar(150) DEFAULT NULL,
  `tour_tel` varchar(100) DEFAULT NULL,
  `tour_newsletter` varchar(100) DEFAULT 'non',
  `tour_gazette` varchar(100) DEFAULT 'non',
  `tour_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `touriste`
--

INSERT INTO `touriste` (`id`, `tour_name`, `tour_firstname`, `tour_date_birth`, `tour_nationalite`, `tour_lieu_nais`, `tour_email`, `tour_tel`, `tour_newsletter`, `tour_gazette`, `tour_address`) VALUES
(1, 'EMINEM', 'A', '2007-02-16', 'Francais', 'A', 'ksjdkljs@gmail.com', '0233', '', '', 'ds'),
(3, 'SDD', 'dd', '2021-06-10', 'Chinois', 'XX', 'sds', '9928', 'oui', 'oui', 'x');

-- --------------------------------------------------------

--
-- Structure de la table `tour_log`
--

DROP TABLE IF EXISTS `tour_log`;
CREATE TABLE IF NOT EXISTS `tour_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `log_num` int(10) DEFAULT NULL,
  `touriste_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_type_code` int(11) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_password`, `user_type_code`, `user_type`) VALUES
(1, 'admin', 'admin', 1, 'Administrateur'),
(2, 'rakoto', 'alph', 2, 'Alphabetisation'),
(3, 'rabe', 'env', 3, 'Environnement');

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vis_name` varchar(100) DEFAULT NULL,
  `vis_firstname` varchar(100) DEFAULT NULL,
  `vis_cin` varchar(100) DEFAULT NULL,
  `vis_date` date DEFAULT NULL,
  `vis_hr_in` time DEFAULT NULL,
  `vis_hr_o` time DEFAULT NULL,
  `vis_objectif` varchar(100) DEFAULT NULL,
  `vis_num_badge` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`id`, `vis_name`, `vis_firstname`, `vis_cin`, `vis_date`, `vis_hr_in`, `vis_hr_o`, `vis_objectif`, `vis_num_badge`) VALUES
(2, 'OO', '', '890', '2021-07-14', '14:52:00', '18:50:00', 'yiu', 2);

-- --------------------------------------------------------

--
-- Structure de la table `visite_poste`
--

DROP TABLE IF EXISTS `visite_poste`;
CREATE TABLE IF NOT EXISTS `visite_poste` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vp_date` date DEFAULT NULL,
  `vp_heure` time DEFAULT NULL,
  `vp_visiteur1` varchar(100) DEFAULT NULL,
  `vp_visiteur2` varchar(100) DEFAULT NULL,
  `vp_visiteur3` varchar(100) DEFAULT NULL,
  `vp_presence_moniteur` varchar(100) DEFAULT NULL,
  `vp_rempl_nom` varchar(100) DEFAULT NULL,
  `vp_rempl_raison` varchar(100) DEFAULT NULL,
  `vp_rempl_duree` varchar(100) DEFAULT NULL,
  `vp_appel_fait` varchar(100) DEFAULT NULL,
  `vp_nbr_list_off` int(10) DEFAULT NULL,
  `vp_cahier_appel` varchar(100) DEFAULT NULL,
  `vp_nbr_eleve_present` int(10) DEFAULT NULL,
  `vp_nbr_abs` int(10) DEFAULT NULL,
  `vp_observation` varchar(400) DEFAULT NULL,
  `vp_cahier_a_jour` varchar(100) DEFAULT NULL,
  `vp_remarque` varchar(400) DEFAULT NULL,
  `vp_prep_cours_fait` varchar(100) DEFAULT NULL,
  `vp_rem_cahier_appel` varchar(500) DEFAULT NULL,
  `vp_rem_prepa_cours` varchar(500) DEFAULT NULL,
  `vp_propr_salle` varchar(100) DEFAULT NULL,
  `vp_etat_salle` varchar(100) DEFAULT NULL,
  `poste_id` int(10) DEFAULT NULL,
  `vp_poste` varchar(100) DEFAULT NULL,
  `vp_moniteur` varchar(100) DEFAULT NULL,
  `vp_inspecteur` varchar(100) DEFAULT NULL,
  `vp_nbr_eleve_classe` int(10) DEFAULT NULL,
  `vp_eval_moniteur` varchar(100) DEFAULT NULL,
  `vp_eval_inspecteur` varchar(100) DEFAULT NULL,
  `moniteur_id` varchar(100) DEFAULT NULL,
  `inspecteur_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visite_poste`
--

INSERT INTO `visite_poste` (`id`, `vp_date`, `vp_heure`, `vp_visiteur1`, `vp_visiteur2`, `vp_visiteur3`, `vp_presence_moniteur`, `vp_rempl_nom`, `vp_rempl_raison`, `vp_rempl_duree`, `vp_appel_fait`, `vp_nbr_list_off`, `vp_cahier_appel`, `vp_nbr_eleve_present`, `vp_nbr_abs`, `vp_observation`, `vp_cahier_a_jour`, `vp_remarque`, `vp_prep_cours_fait`, `vp_rem_cahier_appel`, `vp_rem_prepa_cours`, `vp_propr_salle`, `vp_etat_salle`, `poste_id`, `vp_poste`, `vp_moniteur`, `vp_inspecteur`, `vp_nbr_eleve_classe`, `vp_eval_moniteur`, `vp_eval_inspecteur`, `moniteur_id`, `inspecteur_id`) VALUES
(1, '2021-05-06', '22:00:00', 'Loyal', 'Mahenina', 'C. Brown', 'oui', 'Rakoto', 'Oui', 'pl', 'oui', 2, 'oui', 9, 8, 'A1', NULL, 'Remarque General', 'oui', NULL, 'Remarque 1', 'pp', 'LK', 7, '6665', 'Rakoto', 'Andry', 4, '1', '2', '1', '1'),
(2, '2021-05-07', '11:00:00', 'Randrianomena', 'Mahenina', '', NULL, '', '', '', NULL, 31, NULL, 0, 5, '', NULL, NULL, NULL, NULL, '', 'Propre', 'moyen', 11, 'QWER', 'Rakoto', 'Andry', 100, '', '', '1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `viste_site`
--

DROP TABLE IF EXISTS `viste_site`;
CREATE TABLE IF NOT EXISTS `viste_site` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vs_prix_jour` int(10) DEFAULT NULL,
  `vs_prix_demi_jr` int(10) DEFAULT NULL,
  `vs_prix_a_voiture` int(10) DEFAULT NULL,
  `vs_prix_s_voiture` int(10) DEFAULT NULL,
  `vs_nbr_jour` int(10) DEFAULT NULL,
  `vs_prix_total` int(10) DEFAULT NULL,
  `site_id` int(10) DEFAULT NULL,
  `vs_site` varchar(100) DEFAULT NULL,
  `vs_nbr_jr` int(10) DEFAULT NULL,
  `vs_dem_jr` int(10) DEFAULT NULL,
  `vs_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `viste_site`
--

INSERT INTO `viste_site` (`id`, `vs_prix_jour`, `vs_prix_demi_jr`, `vs_prix_a_voiture`, `vs_prix_s_voiture`, `vs_nbr_jour`, `vs_prix_total`, `site_id`, `vs_site`, `vs_nbr_jr`, `vs_dem_jr`, `vs_date`) VALUES
(1, 5000, 2000, 20000, 0, NULL, 54000, NULL, 'Aba', 1, 1, '2021-07-17'),
(5, 8, 10, 11, 1, NULL, 120, NULL, 'Aba', 2, 2, '2021-07-24'),
(7, 2, 26, 0, 0, NULL, 112, 1, 'Aba', 2, 2, '2021-07-17');

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

DROP TABLE IF EXISTS `zone`;
CREATE TABLE IF NOT EXISTS `zone` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(100) DEFAULT NULL,
  `zone_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `zone`
--

INSERT INTO `zone` (`id`, `zone_name`, `zone_code`) VALUES
(1, 'Ambalavao', 'A001'),
(2, 'Alakamisy Ambohimaha', 'A001'),
(3, 'Andremizaha', 'A002'),
(4, 'Banlieu', 'B001'),
(5, 'FA', 'F001'),
(6, 'Fandrandava', 'F002'),
(7, 'Sevaina', 'S001'),
(8, 'SUD-EST', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
