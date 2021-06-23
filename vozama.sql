-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 23 juin 2021 à 19:50
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
  `bien_responsable` varchar(100) DEFAULT NULL,
  `bien_date_disfonctionement` date DEFAULT NULL,
  `bien_type` varchar(100) DEFAULT NULL,
  `dep_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `chr_type` varchar(100) DEFAULT NULL,
  `chr_numero` int(10) DEFAULT NULL,
  `chr_prix` int(10) DEFAULT NULL,
  `chr_nbr_lit_1_plce` int(10) DEFAULT '0',
  `chr_nbr_lit_2_plce` int(10) DEFAULT '0',
  `chr_tv` varchar(100) DEFAULT 'non',
  `chr_eau_chaude` varchar(100) DEFAULT 'non',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `conge_nbr` decimal(10,0) DEFAULT NULL,
  `conge_left` decimal(10,0) DEFAULT NULL,
  `conge_type` varchar(100) DEFAULT NULL,
  `conge_price` int(11) DEFAULT NULL,
  `conge_droit` decimal(30,0) DEFAULT NULL,
  `conge_pers` varchar(100) DEFAULT NULL,
  `conge_date_start` date DEFAULT NULL,
  `conge_date_end` date DEFAULT NULL,
  `conge_nbr_day` int(10) DEFAULT NULL,
  `conge_no_paid` varchar(100) DEFAULT NULL,
  `conge_pers_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `dep_name` varchar(100) NOT NULL,
  `dep_number` int(10) DEFAULT NULL,
  `dep_type` varchar(100) DEFAULT NULL,
  `en_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `eleve_abr` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id`, `eleve_name`, `eleve_firstname`, `eleve_matricule`, `eleve_sexe`, `eleve_date_birth`, `eleve_adresse`, `eleve_cin`, `eleve_phone`, `eleve_participation`, `eleve_date_abandon`, `eleve_date_retour`, `eleve_date_entre`, `eleve_age`, `eleve_lieu_naissance`, `eleve_religion`, `eleve_copie`, `eleve_secteur`, `eleve_classe`, `eleve_situation`, `parent_id`, `poste_id`, `site_id`, `eleve_parent`, `eleve_poste`, `eleve_site`, `eleve_mom`, `eleve_dad`, `eleve_prof_parents`, `eleve_classe_passe`, `eleve_nbr_fs`, `eleve_num_copie`, `eleve_abr`) VALUES
(11, 'Lanto', 'Julien', '88-R9E', 'M', '2011-07-11', 'Rue Marx Dormoy', NULL, NULL, NULL, NULL, NULL, '2021-05-07', 9, 'Fianarantsoa', NULL, NULL, NULL, '', 'Marié', NULL, 6, NULL, NULL, 'dsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Juliano', 'Martin', '88-R9', 'M', '1999-06-11', 'Rue Marx Dormoy', NULL, NULL, NULL, NULL, NULL, '2018-01-13', 21, 'Fianarantsoa', NULL, NULL, NULL, 'TD2', '', NULL, 4, NULL, NULL, 'Add', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Nivoarilanto', 'Julien', '56-90P', 'M', '2021-04-29', 'VQ 16 A TER A Mandroseza', NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', 0, 'pppp', 'Catholique', NULL, NULL, 'T0', 'Passant', NULL, 9, NULL, NULL, 'PPls', NULL, '', NULL, '', 'T0', NULL, '', 0),
(14, 'OOPA', 'DD', '998sdf', 'F', '2007-02-02', 'SSA', NULL, NULL, NULL, '2021-05-06', NULL, '2021-04-08', 14, 'Pasd', 'Catholique', 'oui', NULL, '', 'Nouveau', NULL, 8, NULL, NULL, 'XX01', NULL, 'WAD', NULL, 'CCV', 'T0', NULL, '7', 9);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `moniteur`
--

INSERT INTO `moniteur` (`id`, `moniteur_matricule`, `moniteur_name`, `moniteur_firstname`, `moniteur_etat`, `moniteur_address`, `moniteur_poste`, `moniteur_religion`, `moniteur_profession`, `moniteur_date_entre_voz`, `moniteur_date_nais`, `poste_id`) VALUES
(1, '22/-Fr45', 'Rakoto', 'Nad', 'Marie', 'Talatamaty', 'A', 'Autre', 'KA', '2020-10-12', NULL, NULL);

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
  `parent_pere_firstname` varchar(100) DEFAULT NULL,
  `parent_mere_name` varchar(100) DEFAULT NULL,
  `parent_mere_firstname` varchar(100) DEFAULT NULL,
  `parent_pere_fonction` varchar(100) DEFAULT NULL,
  `parent_mere_fonction` varchar(100) DEFAULT NULL,
  `parent_pere_age` int(10) DEFAULT NULL,
  `parent_mere_age` int(10) DEFAULT NULL,
  `parent_address` varchar(100) DEFAULT NULL,
  `parent_nbr_enfant` int(10) DEFAULT NULL,
  `parent_nbr_sco_voz` int(10) DEFAULT NULL,
  `parent_anne_entre_voz` int(10) DEFAULT NULL,
  `parent_anne_sorti_voz` int(10) DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parent`
--

INSERT INTO `parent` (`id`, `parent_pere_name`, `parent_pere_firstname`, `parent_mere_name`, `parent_mere_firstname`, `parent_pere_fonction`, `parent_mere_fonction`, `parent_pere_age`, `parent_mere_age`, `parent_address`, `parent_nbr_enfant`, `parent_nbr_sco_voz`, `parent_anne_entre_voz`, `parent_anne_sorti_voz`, `parent_classe_enfant`, `parent_titre`, `parent_nbr_prt_gere`, `parent_coordonnee`, `parent_site`, `parent_tel`, `site_id`, `poste_id`, `parent_poste`, `parent_particip`, `parent_filiere`) VALUES
(1, 'Als', 'SS', 'DD', 'FF', 'FC', 'VV', 32, 40, 'vv', 3, 1, NULL, NULL, 'MMS', 'President', 3, NULL, 'A', '034', NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `pers_name` varchar(100) NOT NULL,
  `pers_firstname` varchar(100) DEFAULT NULL,
  `pers_date_birth` date NOT NULL,
  `pers_cin` varchar(100) DEFAULT NULL,
  `pers_address` varchar(100) DEFAULT NULL,
  `pers_sexe` varchar(100) NOT NULL,
  `pers_age` int(10) DEFAULT NULL,
  `pers_married` varchar(100) DEFAULT NULL,
  `pers_phone` varchar(100) DEFAULT NULL,
  `pers_mail` varchar(100) DEFAULT NULL,
  `dep_id` int(10) NOT NULL,
  `pers_type` varchar(100) DEFAULT NULL,
  `pers_contrat` varchar(100) NOT NULL,
  `pers_date_arrived` date NOT NULL,
  `pers_date_gone` date DEFAULT NULL,
  `pers_date_renew` date DEFAULT NULL,
  `pers_cot_social` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `poste_parrain` varchar(150) DEFAULT NULL,
  `poste_parraine` varchar(100) DEFAULT 'non',
  `poste_att_parrain` varchar(100) DEFAULT 'oui',
  `poste_partenair_type` varchar(100) DEFAULT NULL,
  `poste_partenair_libelle` int(100) DEFAULT NULL,
  `poste_partenariat` varchar(100) NOT NULL DEFAULT 'non',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `poste`
--

INSERT INTO `poste` (`id`, `poste_num`, `poste_name`, `poste_annee_ouverture`, `poste_annee_fermeture`, `poste_overture`, `poste_fermeture`, `poste_inspecteur_name`, `poste_moniteur_name`, `poste_changement_moniteur`, `poste_name_predecesseur`, `poste_annee_inspecteur`, `poste_ss_secteur`, `poste_formateur`, `poste_prox_epp`, `poste_name_epp`, `poste_prox_epc`, `poste_epc_name`, `poste_existance_cp`, `poste_activite_cp`, `poste_caisse_cp`, `poste_participation_cp`, `poste_j1`, `poste_h1`, `poste_j2`, `poste_h2`, `poste_j3`, `poste_h3`, `poste_j4`, `poste_h4`, `poste_wc`, `poste_classe_soir`, `poste_tableau`, `poste_chaise`, `poste_abec`, `poste_table_prof`, `poste_table_enf`, `poste_banc_enf`, `poste_ardoise`, `poste_livre`, `poste_sceau`, `poste_calebasse`, `poste_natte`, `poste_balais`, `poste_savon`, `poste_eponge`, `poste_cisco`, `poste_commune`, `poste_eglise`, `poste_district`, `poste_pere`, `poste_sous_pref`, `poste_fkt`, `poste_dist_fa_ou_amb`, `poste_arret`, `poste_reste_a_pied`, `poste_dist_inspect_post`, `poste_dist_moniteur_centre_formation`, `poste_comm_rapide`, `poste_repere_topo`, `poste_proprietaire_maison`, `poste_niveau`, `poste_salaire_monitrice`, `poste_loyer_maison`, `poste_maj`, `poste_fiche_parrain`, `moniteur_id`, `inspecteur_id`, `poste_secteur`, `site_id`, `poste_quartier`, `poste_region`, `poste_site`, `poste_zone`, `poste_parrain`, `poste_parraine`, `poste_att_parrain`, `poste_partenair_type`, `poste_partenair_libelle`, `poste_partenariat`) VALUES
(4, '933', 'Add', 2011, 0, 'oui', 'non', 'QVBB', 'dss', 'tyu', '', NULL, NULL, '', '', 'sas', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Androy', NULL, '', '', NULL, '', NULL, 'non', 'oui', NULL, NULL, 'non'),
(5, '1278', '367', 2020, 0, 'oui', 'non', 'Rettt', 'kko', 'fDA', '', NULL, NULL, '', '', 'sas', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Androy', NULL, '', '', NULL, 'Banlieu', NULL, 'non', 'oui', NULL, NULL, 'non'),
(7, 'KKO', '6665', 0, 0, NULL, 'non', 'Andry DDKA', 'Rakoto Nad', 'sds', 'Rakoto Nad', NULL, NULL, 'OPO', '1km', NULL, '4km', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oui', NULL, 'oui', NULL, NULL, NULL, NULL, 'oui', NULL, 'on', NULL, '6665', 'oui', NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Y0', 'sd', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Androy', NULL, 'LLO', '', NULL, NULL, NULL, 'non', 'oui', NULL, NULL, 'non'),
(8, '3342', 'XX01', 0, 0, NULL, 'non', '', 'Rakoto Nad', 'sds', 'Rakoto Nad', NULL, NULL, 'OPO', '8km', NULL, '800m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oui', 'oui', NULL, NULL, 'oui', NULL, 'oui', NULL, NULL, 'oui', NULL, 'oui', 'oui', NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'sd', 'JEAN', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Androy', NULL, '', '', NULL, '', NULL, 'non', 'oui', NULL, NULL, 'non'),
(9, 'ddsds', 'PPls', 10, 0, NULL, 'non', 'Andry DDKA', 'Rakoto Nad', 'dsd', 'Rakoto Nad', NULL, NULL, 'OOPAA', '500m', NULL, '300m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oui', 'oui', NULL, NULL, NULL, NULL, NULL, NULL, 'oui', NULL, 'oui', 'oui', NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'dasd', 'cc', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Talata Iboaka', NULL, 'DSJJ', '', NULL, NULL, NULL, 'non', 'oui', NULL, NULL, 'non'),
(10, 'XXC', 'XZ', 2020, 0, NULL, 'non', '', '', '', '', NULL, NULL, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'cc', 'OOPA', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Talata Iboaka', NULL, 'LOS', '', NULL, NULL, NULL, 'non', 'oui', NULL, NULL, 'non');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `res_chr_num` int(10) DEFAULT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `secteur`
--

INSERT INTO `secteur` (`id`, `secteur_name`, `sacteur_code`) VALUES
(4, 'Vakoa', 'V001'),
(2, 'Androy', 'A002'),
(3, 'Talata Iboaka', 'T001'),
(5, 'Alakamisy Ambohimaha', 'A003');

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
-- Structure de la table `sous_prefecture`
--

DROP TABLE IF EXISTS `sous_prefecture`;
CREATE TABLE IF NOT EXISTS `sous_prefecture` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sous_pref_name` varchar(100) DEFAULT NULL,
  `sous_pref_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
(7, 'Sevaina', 'S001');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
