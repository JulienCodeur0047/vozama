-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 août 2021 à 05:17
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `chr_prix_nuite` int(10) DEFAULT NULL,
  `chr_prix_jour` int(10) DEFAULT NULL,
  `chr_prix_horaire` int(10) DEFAULT NULL,
  `chr_nbr_lit_1_plce` int(10) DEFAULT '0',
  `chr_nbr_lit_2_plce` int(10) DEFAULT '0',
  `chr_tv` varchar(100) DEFAULT 'non',
  `chr_eau_chaude` varchar(100) DEFAULT 'non',
  `chr_reserve` varchar(100) NOT NULL DEFAULT 'non',
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `conge_nbr_day` double DEFAULT '0',
  `pers_id` int(10) DEFAULT NULL,
  `conge_date_reprise` date DEFAULT NULL,
  `dep_id` int(10) DEFAULT NULL,
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
  `dep_name` varchar(100) DEFAULT NULL,
  `dep_number` int(10) DEFAULT NULL,
  `dep_type` varchar(100) DEFAULT NULL,
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
  `eco_mois` varchar(150) DEFAULT NULL,
  `eco_date` date DEFAULT NULL,
  `eco_montant` int(10) DEFAULT '0',
  `eco_paye` varchar(100) DEFAULT 'non',
  `eco_libelle_type` varchar(100) DEFAULT NULL,
  `eco_observation` varchar(300) DEFAULT NULL,
  `eco_el_nom` varchar(100) DEFAULT NULL,
  `eco_el_prenoms` varchar(100) DEFAULT NULL,
  `eco_annee` int(10) DEFAULT NULL,
  `poste_id` int(10) DEFAULT NULL,
  `eco_poste` varchar(150) DEFAULT NULL,
  `eco_el_classe` varchar(100) DEFAULT NULL,
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
  `eleve_abr` double DEFAULT NULL,
  `eleve_m1` double DEFAULT NULL,
  `eleve_m2` double DEFAULT NULL,
  `eleve_m3` double DEFAULT NULL,
  `eleve_mg` int(11) DEFAULT NULL,
  `eleve_date_mo` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `moniteur_tel` varchar(100) DEFAULT NULL,
  `moniteur_cin` varchar(100) DEFAULT NULL,
  `moniteur_date_liv_cin` date DEFAULT NULL,
  `moniteur_lieu_deliv_cin` varchar(100) DEFAULT NULL,
  `moniteur_nbr_enfant` int(10) DEFAULT NULL,
  `moniteur_nbr_charge` int(10) DEFAULT NULL,
  `moniteur_nv_etude` varchar(100) DEFAULT NULL,
  `moniteur_diplome` varchar(100) DEFAULT NULL,
  `moniteur_lieu_etude` varchar(100) DEFAULT NULL,
  `moniteur_resource` varchar(100) DEFAULT NULL,
  `poste_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note_eleve`
--

DROP TABLE IF EXISTS `note_eleve`;
CREATE TABLE IF NOT EXISTS `note_eleve` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `eleve_id` int(10) DEFAULT NULL,
  `note_eleve` varchar(300) DEFAULT NULL,
  `poste_id` int(10) DEFAULT NULL,
  `note_poste` varchar(150) DEFAULT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `pers_nbr_conge` double DEFAULT '0',
  `pers_dr_conge` double DEFAULT NULL,
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
  `poste_regle` varchar(100) DEFAULT NULL,
  `poste_cahier` varchar(100) DEFAULT NULL,
  `poste_telephone` varchar(100) DEFAULT NULL,
  `poste_radio` varchar(100) DEFAULT NULL,
  `poste_drapeau` varchar(100) DEFAULT NULL,
  `poste_logo` varchar(100) DEFAULT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `res_chr_type` varchar(100) DEFAULT NULL,
  `res_chr_prix_total` int(11) DEFAULT '0',
  `chambre_id` int(10) DEFAULT NULL,
  `res_nbr_jr` int(10) DEFAULT NULL,
  `res_date` date DEFAULT NULL,
  `res_montant` int(10) DEFAULT NULL,
  `res_cli_nom` varchar(200) DEFAULT NULL,
  `res_cli_tel` varchar(100) DEFAULT NULL,
  `res_cli_nbr` int(10) DEFAULT NULL,
  `res_cli_email` int(200) DEFAULT NULL,
  `res_note` varchar(400) DEFAULT NULL,
  `res_visitesite` varchar(100) DEFAULT 'NON',
  `res_visitesite_prix` int(11) DEFAULT '0',
  `res_lit_sup` varchar(100) DEFAULT 'NON',
  `res_lit_sup_prix` int(11) DEFAULT '0',
  `res_lit_sup_nbr` int(11) DEFAULT '0',
  `res_lit_sup_prix_total` int(11) DEFAULT '0',
  `res_ptid` varchar(100) DEFAULT 'NON',
  `res_ptid_prix` int(11) DEFAULT '0',
  `res_ptid_nbr` int(11) DEFAULT '0',
  `res_ptid_prix_total` int(11) DEFAULT '0',
  `res_repas` varchar(100) DEFAULT 'NON',
  `res_repas_type` varchar(100) DEFAULT NULL,
  `res_repas_prix` int(11) DEFAULT '0',
  `res_repas_nbr` int(11) DEFAULT '0',
  `res_repas_prix_total` int(11) DEFAULT '0',
  `res_chr_prix` int(10) DEFAULT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
