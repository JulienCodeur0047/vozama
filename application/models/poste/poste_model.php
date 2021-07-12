<?php
class Poste_model extends CI_Model{
	private $id;
	private $poste_num;
	private $poste_name;
	private $poste_annee_ouverture;
	private $poste_annee_fermeture;
	private $poste_overture;
	private $poste_fermeture;
	private $poste_inspecteur_name;
	private $poste_moniteur_name;
	private $poste_changement_moniteur;
	private $poste_name_predecesseur;
	private $iposte_annee_inspecteur;
	private $poste_ss_secteur;
	private $poste_formateur;
	private $poste_prox_epp;
	private $poste_epp_name;
	private $poste_prox_epc;
	private $poste_epc_name;
	private $poste_existence_cp;
	private $poste_activite_cp;
	private $poste_caisse_cp;
	private $poste_participation_cp;
	private $poste_j1;
	private $poste_h1;
	private $poste_j2;
	private $poste_h2;
	private $poste_j3;
	private $poste_h3;
	private $poste_j4;
	private $poste_h4;
	private $poste_wc;
	private $poste_classe_soir;
	private $poste_tableau;
	private $poste_chaise;
	private $poste_abec;
	private $poste_table_prof;
	private $poste_table_enf;
	private $poste_banc_enf;
	private $poste_ardoise;
	private $poste_livre;
	private $poste_sceau;
	private $poste_calebasse;
	private $poste_natte;
	private $poste_balais;
	private $poste_savon;
	private $poste_eponge;
	private $poste_cisco;
	private $poste_commune;
	private $poste_eglise;
	private $poste_district;
	private $poste_pere;
	private $poste_sous_pref;
	private $poste_fkt;
	private $poste_dist_fa_ou_amb;
	private $poste_arret;
	private $poste_reste_a_pied;
	private $poste_dist_inspect_post;
	private $poste_dist_moniteur_centre_formation;
	private $poste_comm_rapide;
	private $poste_repere_topo;
	private $poste_proprietaire_maison;
	private $poste_niveau;
	private $poste_salaire_monitrice;
	private $poste_loyer_maison;
	private $poste_maj;
	private $poste_fiche_parrain;
	private $moniteur_id;
	private $inspecteur_id;
	private $poste_secteur;
	private $site_id;
	private $poste_quartier;
	private $poste_region;
	private $poste_site;

	public function getAllPoste(){
		$query = $this->db->get("poste");
		return $query->result();
	}

	public function getAllParent()
	{
		$query = $this->db->get("parent");
		return $query->result();
	}
	public function getPosteInfo($id){
		$this->bd->select('*');
		$this->bd->from('poste');
		$this->bd->where('id',$this->$id);
		$query = $this->bd->get();
		return $query->row_array();
	}

	public function getPosteLike($strPoste)
	{
		$this->db->like($strPoste);
		$query = $this->db->get('poste');
		return $query->result();

	}
	public function deletePoste($id){
		return $this->db->delete('poste', array('id' => $id));
	}

	public function findPoste($id){
		return $this->db->get_where('poste', array('id' => $id))->row();
	}
	public function findSite($id){
		return $this->db->get_where('site', array('id' => $id))->row();
	}

	public function findMoniteur($id){
		return $this->db->get_where('moniteur', array('id' => $id))->row();
	}

	public function findInspecteur($id){
		return $this->db->get_where('inspecteur', array('id' => $id))->row();
	}

	public function updatePoste($id){
		$data = array(
            'poste_name' => $this->input->post('poste_name'),
            'poste_num' => $this->input->post('poste_num'),
            'poste_repere_topo' => $this->input->post('poste_repere_topo'),
            'poste_secteur' => $this->input->post('poste_secteur'),
            'poste_region' => $this->input->post('poste_region'),
            'poste_cisco' => $this->input->post('poste_cisco'),
            'poste_commune' => $this->input->post('poste_commune'),
            'poste_niveau' => $this->input->post('poste_niveau'),
            'poste_fkt' => $this->input->post('poste_fkt'),
            'poste_quartier' => $this->input->post('poste_quartier'),
            'poste_district' => $this->input->post('poste_district'),
            'poste_eglise' => $this->input->post('poste_eglise'),
            'poste_sous_pref' => $this->input->post('poste_sous_pref'),
            'poste_prox_epp' => $this->input->post('poste_prox_epp'),
            'poste_prox_epc' => $this->input->post('poste_prox_epc'),
            'poste_proprietaire_maison' => $this->input->post('poste_proprietaire_maison'),
            'poste_annee_ouverture' => $this->input->post('poste_annee_ouverture'),
            'poste_annee_fermeture' => $this->input->post('poste_annee_fermeture'),
            'poste_fermeture' => $this->input->post('poste_fermeture'),
            'poste_moniteur_name' => $this->input->post('poste_moniteur_name'),
            'poste_inspecteur_name' => $this->input->post('poste_inspecteur_name'),
            'poste_changement_moniteur' => $this->input->post('poste_changement_moniteur'),
            'poste_name_predecesseur' => $this->input->post('poste_name_predecesseur'),
            'poste_formateur' => $this->input->post('poste_formateur'),
            'poste_tableau' => $this->input->post('poste_tableau'),
            'poste_chaise' => $this->input->post('poste_chaise'),
            'poste_abec' => $this->input->post('poste_abec'),
            'poste_table_prof' => $this->input->post('poste_table_prof'),
            'poste_table_enf' => $this->input->post('poste_table_enf'),
            'poste_banc_enf' => $this->input->post('poste_banc_enf'),
            'poste_ardoise' => $this->input->post('poste_ardoise'),
            'poste_natte' => $this->input->post('poste_natte'),
            'poste_livre' => $this->input->post('poste_livre'),
            'poste_wc' => $this->input->post('poste_wc'),
            'poste_balais' => $this->input->post('poste_balais'),
            'poste_savon' => $this->input->post('poste_savon'),
            'poste_eponge' => $this->input->post('poste_eponge'),
            'poste_sceau' => $this->input->post('poste_sceau'),
            'poste_calebasse' => $this->input->post('poste_calebasse'),
            'poste_zone' => $this->input->post('poste_zone'),
        );
		if($id==0){
            return $this->db->insert('poste',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('poste',$data);
        }
	}
	public function saveEglise()
	{
		$data = array(
            'eglise_name' => $this->input->post('eglise_name'),);
			return $this->db->insert('eglise',$data);
	}
	public function saveSecteur()
	{
		$data = array(
            'secteur_name' => $this->input->post('secteur_name'),);
			return $this->db->insert('secteur',$data);
	}
	public function saveZone()
	{
		$data = array(
            'zone_name' => $this->input->post('zone_name'),);
			return $this->db->insert('zone',$data);
	}
	public function saveRegion()
	{
		$data = array(
            'region_name' => $this->input->post('region_name'),);
			return $this->db->insert('region',$data);
	}
	public function saveCisco()
	{
		$data = array(
            'cisco_name' => $this->input->post('cisco_name'),);
			return $this->db->insert('cisco',$data);
	}
	public function saveCommune()
	{
		$data = array(
            'commune_name' => $this->input->post('commune_name'),);
			return $this->db->insert('commune',$data);
	}
	public function saveNiveau()
	{
		$data = array(
            'niveau_name' => $this->input->post('niveau_name'),);
			return $this->db->insert('niveau',$data);
	}
	public function saveFkt()
	{
		$data = array(
            'fkt_name' => $this->input->post('fkt_name'),);
			return $this->db->insert('fokotany',$data);
	}
	public function saveDistrict()
	{
		$data = array(
            'district_name' => $this->input->post('district_name'),);
			return $this->db->insert('district',$data);
	}
	public function savePref()
	{
		$data = array(
            'sous_pref_name' => $this->input->post('sous_pref_name'),);
			return $this->db->insert('sous_prefecture',$data);
	}
	public function saveMoniteur()
	{
		$data = array(
            'moniteur_name' => $this->input->post('moniteur_name'),);
			return $this->db->insert('moniteur',$data);
	}
	public function saveInspecteur()
	{
		$data = array(
            'insp_name' => $this->input->post('insp_name'),);
			return $this->db->insert('inspecteur',$data);
	}
	public function savePere()
	{
		$data = array(
            'pere_name' => $this->input->post('pere_name'),);
			return $this->db->insert('pere',$data);
	}
	public function getPostOrSearch(){
		if(!empty($this->input->get("search"))){
			$this->db->like('poste_name', $this->input->get("search"));
			$this->db->or_like('poste_num', $this->input->get("search")); 
			$this->db->or_like('poste_secteur', $this->input->get("search")); 
			$this->db->or_like('poste_region', $this->input->get("search")); 
			$this->db->or_like('Poste_zone', $this->input->get("search")); 
			$this->db->or_like('Poste_cisco', $this->input->get("search")); 
			$this->db->or_like('Poste_fkt', $this->input->get("search")); 
			$this->db->or_like('Poste_quartier', $this->input->get("search")); 
			$this->db->or_like('Poste_district', $this->input->get("search")); 
			$this->db->or_like('id', $this->input->get("search")); 
			$this->db->or_like('poste_site', $this->input->get("search")); 
		  }
		if(!empty($this->input->post("poste_parraine"))){
			$this->db->like('poste_parraine', $this->input->post("poste_parraine"));
		}

		if(!empty($this->input->post("poste_partenariat"))){
			$this->db->where('poste_partenariat', $this->input->post("poste_partenariat"));
		}
		if(!empty($this->input->post("poste_partenair_type"))){
			$this->db->where('poste_partenair_type', $this->input->post("poste_partenair_type"));
		}
		if(!empty($this->input->post("poste_part_contrat"))){
			$this->db->where('poste_part_contrat', $this->input->post("poste_part_contrat"));
		}
		if(!empty($this->input->post("site_id"))){
			$this->db->where('site_id', $this->input->post("site_id"));
		}
		if(!empty($this->input->post("poste_secteur"))){
			$this->db->where('poste_secteur', $this->input->post("poste_secteur")); 
		}
		  $query = $this->db->get("poste");
		  return $query->result();
	}
	public function getSecteurLookUp(){
		$query = $this->db->get("secteur");
		  return $query->result();
	}
	public function getSiteLookUp(){
		$query = $this->db->get("site");
		  return $query->result();
	}
	public function getPosteLookUp(){
		$query = $this->db->get("poste");
		  return $query->result();
	}
	public function getZoneLookUp(){
		$query = $this->db->get("zone");
		  return $query->result();
	}
	public function getRegionLookUp(){
		$query = $this->db->get("region");
		  return $query->result();
	}
	public function getCiscoLookUp(){
		$query = $this->db->get("cisco");
		  return $query->result();
	}
	public function getCommuneLookUp(){
		$query = $this->db->get("commune");
		  return $query->result();
	}
	public function getNiveauLookUp(){
		$query = $this->db->get("niveau");
		  return $query->result();
	}
	public function getFokotanyLookUp(){
		$query = $this->db->get("fokotany");
		  return $query->result();
	}
	public function getQuartierLookUp(){
		$query = $this->db->get("quartier");
		  return $query->result();
	}
	public function getDistrictLookUp(){
		$query = $this->db->get("district");
		  return $query->result();
	}
	public function getEgliseLookUp(){
		$query = $this->db->get("eglise");
		  return $query->result();
	}
	public function getPereLookUp(){
		$query = $this->db->get("pere");
		  return $query->result();
	}
	public function getSousPrefLookUp(){
		$query = $this->db->get("sous_prefecture");
		  return $query->result();
	}
	public function getMoniteurLookUp(){
		$query = $this->db->get("moniteur");
		  return $query->result();
	}
	public function getInspecteurLookUp(){
		$query = $this->db->get("inspecteur");
		  return $query->result();
	}

	public function insertPoste(){
		$data = array(
            'poste_name' => $this->input->post('poste_name'),
            'poste_num' => $this->input->post('poste_num'),
            'poste_repere_topo' => $this->input->post('poste_repere_topo'),
            'poste_secteur' => $this->input->post('poste_secteur'),
            'poste_region' => $this->input->post('poste_region'),
            'poste_cisco' => $this->input->post('poste_cisco'),
            'poste_commune' => $this->input->post('poste_commune'),
            'poste_niveau' => $this->input->post('poste_niveau'),
            'poste_fkt' => $this->input->post('poste_fkt'),
            'poste_quartier' => $this->input->post('poste_quartier'),
            'poste_district' => $this->input->post('poste_district'),
            'poste_eglise' => $this->input->post('poste_eglise'),
            'poste_sous_pref' => $this->input->post('poste_sous_pref'),
            'poste_prox_epp' => $this->input->post('poste_prox_epp'),
            'poste_prox_epc' => $this->input->post('poste_prox_epc'),
            'poste_proprietaire_maison' => $this->input->post('poste_proprietaire_maison'),
            'poste_annee_ouverture' => $this->input->post('poste_annee_ouverture'),
            'poste_annee_fermeture' => $this->input->post('poste_annee_fermeture'),
            'poste_fermeture' => $this->input->post('poste_fermeture'),
            'poste_moniteur_name' => $this->input->post('poste_moniteur_name'),
            'poste_inspecteur_name' => $this->input->post('poste_inspecteur_name'),
            'poste_changement_moniteur' => $this->input->post('poste_changement_moniteur'),
            'poste_name_predecesseur' => $this->input->post('poste_name_predecesseur'),
            'poste_formateur' => $this->input->post('poste_formateur'),
            'poste_tableau' => $this->input->post('poste_tableau'),
            'poste_chaise' => $this->input->post('poste_chaise'),
            'poste_abec' => $this->input->post('poste_abec'),
            'poste_table_prof' => $this->input->post('poste_table_prof'),
            'poste_table_enf' => $this->input->post('poste_table_enf'),
            'poste_banc_enf' => $this->input->post('poste_banc_enf'),
            'poste_ardoise' => $this->input->post('poste_ardoise'),
            'poste_natte' => $this->input->post('poste_natte'),
            'poste_livre' => $this->input->post('poste_livre'),
            'poste_wc' => $this->input->post('poste_wc'),
            'poste_balais' => $this->input->post('poste_balais'),
            'poste_savon' => $this->input->post('poste_savon'),
            'poste_eponge' => $this->input->post('poste_eponge'),
            'poste_sceau' => $this->input->post('poste_sceau'),
            'poste_calebasse' => $this->input->post('poste_calebasse'),
            'poste_zone' => $this->input->post('poste_zone')
        );
        return $this->db->insert('poste', $data);
	}

	/**
	 * 
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */ 
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of poste_num
	 */ 
	public function getPoste_num()
	{
		return $this->poste_num;
	}

	/**
	 * Set the value of poste_num
	 *
	 * @return  self
	 */ 
	public function setPoste_num($poste_num)
	{
		$this->poste_num = $poste_num;

		return $this;
	}

	/**
	 * Get the value of poste_name
	 */ 
	public function getPoste_name()
	{
		return $this->poste_name;
	}

	/**
	 * Set the value of poste_name
	 *
	 * @return  self
	 */ 
	public function setPoste_name($poste_name)
	{
		$this->poste_name = $poste_name;

		return $this;
	}

	/**
	 * Get the value of poste_annee_ouverture
	 */ 
	public function getPoste_annee_ouverture()
	{
		return $this->poste_annee_ouverture;
	}

	/**
	 * Set the value of poste_annee_ouverture
	 *
	 * @return  self
	 */ 
	public function setPoste_annee_ouverture($poste_annee_ouverture)
	{
		$this->poste_annee_ouverture = $poste_annee_ouverture;

		return $this;
	}

	/**
	 * Get the value of poste_annee_fermeture
	 */ 
	public function getPoste_annee_fermeture()
	{
		return $this->poste_annee_fermeture;
	}

	/**
	 * Set the value of poste_annee_fermeture
	 *
	 * @return  self
	 */ 
	public function setPoste_annee_fermeture($poste_annee_fermeture)
	{
		$this->poste_annee_fermeture = $poste_annee_fermeture;

		return $this;
	}

	/**
	 * Get the value of poste_overture
	 */ 
	public function getPoste_overture()
	{
		return $this->poste_overture;
	}

	/**
	 * Set the value of poste_overture
	 *
	 * @return  self
	 */ 
	public function setPoste_overture($poste_overture)
	{
		$this->poste_overture = $poste_overture;

		return $this;
	}

	/**
	 * Get the value of poste_fermeture
	 */ 
	public function getPoste_fermeture()
	{
		return $this->poste_fermeture;
	}

	/**
	 * Set the value of poste_fermeture
	 *
	 * @return  self
	 */ 
	public function setPoste_fermeture($poste_fermeture)
	{
		$this->poste_fermeture = $poste_fermeture;

		return $this;
	}

	/**
	 * Get the value of poste_inspecteur_name
	 */ 
	public function getPoste_inspecteur_name()
	{
		return $this->poste_inspecteur_name;
	}

	/**
	 * Set the value of poste_inspecteur_name
	 *
	 * @return  self
	 */ 
	public function setPoste_inspecteur_name($poste_inspecteur_name)
	{
		$this->poste_inspecteur_name = $poste_inspecteur_name;

		return $this;
	}

	/**
	 * Get the value of poste_moniteur_name
	 */ 
	public function getPoste_moniteur_name()
	{
		return $this->poste_moniteur_name;
	}

	/**
	 * Set the value of poste_moniteur_name
	 *
	 * @return  self
	 */ 
	public function setPoste_moniteur_name($poste_moniteur_name)
	{
		$this->poste_moniteur_name = $poste_moniteur_name;

		return $this;
	}

	/**
	 * Get the value of poste_changement_moniteur
	 */ 
	public function getPoste_changement_moniteur()
	{
		return $this->poste_changement_moniteur;
	}

	/**
	 * Set the value of poste_changement_moniteur
	 *
	 * @return  self
	 */ 
	public function setPoste_changement_moniteur($poste_changement_moniteur)
	{
		$this->poste_changement_moniteur = $poste_changement_moniteur;

		return $this;
	}

	/**
	 * Get the value of poste_name_predecesseur
	 */ 
	public function getPoste_name_predecesseur()
	{
		return $this->poste_name_predecesseur;
	}

	/**
	 * Set the value of poste_name_predecesseur
	 *
	 * @return  self
	 */ 
	public function setPoste_name_predecesseur($poste_name_predecesseur)
	{
		$this->poste_name_predecesseur = $poste_name_predecesseur;

		return $this;
	}

	/**
	 * Get the value of iposte_annee_inspecteur
	 */ 
	public function getIposte_annee_inspecteur()
	{
		return $this->iposte_annee_inspecteur;
	}

	/**
	 * Set the value of iposte_annee_inspecteur
	 *
	 * @return  self
	 */ 
	public function setIposte_annee_inspecteur($iposte_annee_inspecteur)
	{
		$this->iposte_annee_inspecteur = $iposte_annee_inspecteur;

		return $this;
	}

	/**
	 * Get the value of poste_ss_secteur
	 */ 
	public function getPoste_ss_secteur()
	{
		return $this->poste_ss_secteur;
	}

	/**
	 * Set the value of poste_ss_secteur
	 *
	 * @return  self
	 */ 
	public function setPoste_ss_secteur($poste_ss_secteur)
	{
		$this->poste_ss_secteur = $poste_ss_secteur;

		return $this;
	}

	/**
	 * Get the value of poste_formateur
	 */ 
	public function getPoste_formateur()
	{
		return $this->poste_formateur;
	}

	/**
	 * Set the value of poste_formateur
	 *
	 * @return  self
	 */ 
	public function setPoste_formateur($poste_formateur)
	{
		$this->poste_formateur = $poste_formateur;

		return $this;
	}

	/**
	 * Get the value of poste_prox_epp
	 */ 
	public function getPoste_prox_epp()
	{
		return $this->poste_prox_epp;
	}

	/**
	 * Set the value of poste_prox_epp
	 *
	 * @return  self
	 */ 
	public function setPoste_prox_epp($poste_prox_epp)
	{
		$this->poste_prox_epp = $poste_prox_epp;

		return $this;
	}

	/**
	 * Get the value of poste_epp_name
	 */ 
	public function getPoste_epp_name()
	{
		return $this->poste_epp_name;
	}

	/**
	 * Set the value of poste_epp_name
	 *
	 * @return  self
	 */ 
	public function setPoste_epp_name($poste_epp_name)
	{
		$this->poste_epp_name = $poste_epp_name;

		return $this;
	}

	/**
	 * Get the value of poste_prox_epc
	 */ 
	public function getPoste_prox_epc()
	{
		return $this->poste_prox_epc;
	}

	/**
	 * Set the value of poste_prox_epc
	 *
	 * @return  self
	 */ 
	public function setPoste_prox_epc($poste_prox_epc)
	{
		$this->poste_prox_epc = $poste_prox_epc;

		return $this;
	}

	/**
	 * Get the value of poste_epc_name
	 */ 
	public function getPoste_epc_name()
	{
		return $this->poste_epc_name;
	}

	/**
	 * Set the value of poste_epc_name
	 *
	 * @return  self
	 */ 
	public function setPoste_epc_name($poste_epc_name)
	{
		$this->poste_epc_name = $poste_epc_name;

		return $this;
	}

	/**
	 * Get the value of poste_existence_cp
	 */ 
	public function getPoste_existence_cp()
	{
		return $this->poste_existence_cp;
	}

	/**
	 * Set the value of poste_existence_cp
	 *
	 * @return  self
	 */ 
	public function setPoste_existence_cp($poste_existence_cp)
	{
		$this->poste_existence_cp = $poste_existence_cp;

		return $this;
	}

	/**
	 * Get the value of poste_activite_cp
	 */ 
	public function getPoste_activite_cp()
	{
		return $this->poste_activite_cp;
	}

	/**
	 * Set the value of poste_activite_cp
	 *
	 * @return  self
	 */ 
	public function setPoste_activite_cp($poste_activite_cp)
	{
		$this->poste_activite_cp = $poste_activite_cp;

		return $this;
	}

	/**
	 * Get the value of poste_caisse_cp
	 */ 
	public function getPoste_caisse_cp()
	{
		return $this->poste_caisse_cp;
	}

	/**
	 * Set the value of poste_caisse_cp
	 *
	 * @return  self
	 */ 
	public function setPoste_caisse_cp($poste_caisse_cp)
	{
		$this->poste_caisse_cp = $poste_caisse_cp;

		return $this;
	}

	/**
	 * Get the value of poste_participation_cp
	 */ 
	public function getPoste_participation_cp()
	{
		return $this->poste_participation_cp;
	}

	/**
	 * Set the value of poste_participation_cp
	 *
	 * @return  self
	 */ 
	public function setPoste_participation_cp($poste_participation_cp)
	{
		$this->poste_participation_cp = $poste_participation_cp;

		return $this;
	}

	/**
	 * Get the value of poste_j1
	 */ 
	public function getPoste_j1()
	{
		return $this->poste_j1;
	}

	/**
	 * Set the value of poste_j1
	 *
	 * @return  self
	 */ 
	public function setPoste_j1($poste_j1)
	{
		$this->poste_j1 = $poste_j1;

		return $this;
	}

	/**
	 * Get the value of poste_h1
	 */ 
	public function getPoste_h1()
	{
		return $this->poste_h1;
	}

	/**
	 * Set the value of poste_h1
	 *
	 * @return  self
	 */ 
	public function setPoste_h1($poste_h1)
	{
		$this->poste_h1 = $poste_h1;

		return $this;
	}

	/**
	 * Get the value of poste_j2
	 */ 
	public function getPoste_j2()
	{
		return $this->poste_j2;
	}

	/**
	 * Get the value of poste_h2
	 */ 
	public function getPoste_h2()
	{
		return $this->poste_h2;
	}

	/**
	 * Set the value of poste_h2
	 *
	 * @return  self
	 */ 
	public function setPoste_h2($poste_h2)
	{
		$this->poste_h2 = $poste_h2;

		return $this;
	}

	/**
	 * Get the value of poste_j3
	 */ 
	public function getPoste_j3()
	{
		return $this->poste_j3;
	}

	/**
	 * Set the value of poste_j3
	 *
	 * @return  self
	 */ 
	public function setPoste_j3($poste_j3)
	{
		$this->poste_j3 = $poste_j3;

		return $this;
	}

	/**
	 * Get the value of poste_h3
	 */ 
	public function getPoste_h3()
	{
		return $this->poste_h3;
	}

	/**
	 * Set the value of poste_h3
	 *
	 * @return  self
	 */ 
	public function setPoste_h3($poste_h3)
	{
		$this->poste_h3 = $poste_h3;

		return $this;
	}

	/**
	 * Get the value of poste_j4
	 */ 
	public function getPoste_j4()
	{
		return $this->poste_j4;
	}

	/**
	 * Set the value of poste_j4
	 *
	 * @return  self
	 */ 
	public function setPoste_j4($poste_j4)
	{
		$this->poste_j4 = $poste_j4;

		return $this;
	}

	/**
	 * Get the value of poste_h4
	 */ 
	public function getPoste_h4()
	{
		return $this->poste_h4;
	}

	/**
	 * Set the value of poste_h4
	 *
	 * @return  self
	 */ 
	public function setPoste_h4($poste_h4)
	{
		$this->poste_h4 = $poste_h4;

		return $this;
	}

	/**
	 * Get the value of poste_wc
	 */ 
	public function getPoste_wc()
	{
		return $this->poste_wc;
	}

	/**
	 * Set the value of poste_wc
	 *
	 * @return  self
	 */ 
	public function setPoste_wc($poste_wc)
	{
		$this->poste_wc = $poste_wc;

		return $this;
	}

	/**
	 * Get the value of poste_classe_soir
	 */ 
	public function getPoste_classe_soir()
	{
		return $this->poste_classe_soir;
	}

	/**
	 * Set the value of poste_classe_soir
	 *
	 * @return  self
	 */ 
	public function setPoste_classe_soir($poste_classe_soir)
	{
		$this->poste_classe_soir = $poste_classe_soir;

		return $this;
	}

	/**
	 * Get the value of poste_tableau
	 */ 
	public function getPoste_tableau()
	{
		return $this->poste_tableau;
	}

	/**
	 * Set the value of poste_tableau
	 *
	 * @return  self
	 */ 
	public function setPoste_tableau($poste_tableau)
	{
		$this->poste_tableau = $poste_tableau;

		return $this;
	}

	/**
	 * Get the value of poste_chaise
	 */ 
	public function getPoste_chaise()
	{
		return $this->poste_chaise;
	}

	/**
	 * Set the value of poste_chaise
	 *
	 * @return  self
	 */ 
	public function setPoste_chaise($poste_chaise)
	{
		$this->poste_chaise = $poste_chaise;

		return $this;
	}

	/**
	 * Get the value of poste_abec
	 */ 
	public function getPoste_abec()
	{
		return $this->poste_abec;
	}

	/**
	 * Set the value of poste_abec
	 *
	 * @return  self
	 */ 
	public function setPoste_abec($poste_abec)
	{
		$this->poste_abec = $poste_abec;

		return $this;
	}

	/**
	 * Get the value of poste_table_prof
	 */ 
	public function getPoste_table_prof()
	{
		return $this->poste_table_prof;
	}

	/**
	 * Set the value of poste_table_prof
	 *
	 * @return  self
	 */ 
	public function setPoste_table_prof($poste_table_prof)
	{
		$this->poste_table_prof = $poste_table_prof;

		return $this;
	}

	/**
	 * Get the value of poste_table_enf
	 */ 
	public function getPoste_table_enf()
	{
		return $this->poste_table_enf;
	}

	/**
	 * Set the value of poste_table_enf
	 *
	 * @return  self
	 */ 
	public function setPoste_table_enf($poste_table_enf)
	{
		$this->poste_table_enf = $poste_table_enf;

		return $this;
	}

	/**
	 * Get the value of poste_banc_enf
	 */ 
	public function getPoste_banc_enf()
	{
		return $this->poste_banc_enf;
	}

	/**
	 * Set the value of poste_banc_enf
	 *
	 * @return  self
	 */ 
	public function setPoste_banc_enf($poste_banc_enf)
	{
		$this->poste_banc_enf = $poste_banc_enf;

		return $this;
	}

	/**
	 * Get the value of poste_ardoise
	 */ 
	public function getPoste_ardoise()
	{
		return $this->poste_ardoise;
	}

	/**
	 * Set the value of poste_ardoise
	 *
	 * @return  self
	 */ 
	public function setPoste_ardoise($poste_ardoise)
	{
		$this->poste_ardoise = $poste_ardoise;

		return $this;
	}

	/**
	 * Get the value of poste_livre
	 */ 
	public function getPoste_livre()
	{
		return $this->poste_livre;
	}

	/**
	 * Set the value of poste_livre
	 *
	 * @return  self
	 */ 
	public function setPoste_livre($poste_livre)
	{
		$this->poste_livre = $poste_livre;

		return $this;
	}

	/**
	 * Get the value of poste_sceau
	 */ 
	public function getPoste_sceau()
	{
		return $this->poste_sceau;
	}

	/**
	 * Set the value of poste_sceau
	 *
	 * @return  self
	 */ 
	public function setPoste_sceau($poste_sceau)
	{
		$this->poste_sceau = $poste_sceau;

		return $this;
	}

	/**
	 * Get the value of poste_calebasse
	 */ 
	public function getPoste_calebasse()
	{
		return $this->poste_calebasse;
	}

	/**
	 * Set the value of poste_calebasse
	 *
	 * @return  self
	 */ 
	public function setPoste_calebasse($poste_calebasse)
	{
		$this->poste_calebasse = $poste_calebasse;

		return $this;
	}

	/**
	 * Get the value of poste_natte
	 */ 
	public function getPoste_natte()
	{
		return $this->poste_natte;
	}

	/**
	 * Set the value of poste_natte
	 *
	 * @return  self
	 */ 
	public function setPoste_natte($poste_natte)
	{
		$this->poste_natte = $poste_natte;

		return $this;
	}

	/**
	 * Get the value of poste_balais
	 */ 
	public function getPoste_balais()
	{
		return $this->poste_balais;
	}

	/**
	 * Set the value of poste_balais
	 *
	 * @return  self
	 */ 
	public function setPoste_balais($poste_balais)
	{
		$this->poste_balais = $poste_balais;

		return $this;
	}

	/**
	 * Get the value of poste_savon
	 */ 
	public function getPoste_savon()
	{
		return $this->poste_savon;
	}

	/**
	 * Set the value of poste_savon
	 *
	 * @return  self
	 */ 
	public function setPoste_savon($poste_savon)
	{
		$this->poste_savon = $poste_savon;

		return $this;
	}

	/**
	 * Get the value of poste_eponge
	 */ 
	public function getPoste_eponge()
	{
		return $this->poste_eponge;
	}

	/**
	 * Set the value of poste_eponge
	 *
	 * @return  self
	 */ 
	public function setPoste_eponge($poste_eponge)
	{
		$this->poste_eponge = $poste_eponge;

		return $this;
	}

	/**
	 * Get the value of poste_cisco
	 */ 
	public function getPoste_cisco()
	{
		return $this->poste_cisco;
	}

	/**
	 * Set the value of poste_cisco
	 *
	 * @return  self
	 */ 
	public function setPoste_cisco($poste_cisco)
	{
		$this->poste_cisco = $poste_cisco;

		return $this;
	}

	/**
	 * Get the value of poste_commune
	 */ 
	public function getPoste_commune()
	{
		return $this->poste_commune;
	}

	/**
	 * Set the value of poste_commune
	 *
	 * @return  self
	 */ 
	public function setPoste_commune($poste_commune)
	{
		$this->poste_commune = $poste_commune;

		return $this;
	}

	/**
	 * Get the value of poste_eglise
	 */ 
	public function getPoste_eglise()
	{
		return $this->poste_eglise;
	}

	/**
	 * Set the value of poste_eglise
	 *
	 * @return  self
	 */ 
	public function setPoste_eglise($poste_eglise)
	{
		$this->poste_eglise = $poste_eglise;

		return $this;
	}

	/**
	 * Get the value of poste_district
	 */ 
	public function getPoste_district()
	{
		return $this->poste_district;
	}

	/**
	 * Set the value of poste_district
	 *
	 * @return  self
	 */ 
	public function setPoste_district($poste_district)
	{
		$this->poste_district = $poste_district;

		return $this;
	}

	/**
	 * Get the value of poste_pere
	 */ 
	public function getPoste_pere()
	{
		return $this->poste_pere;
	}

	/**
	 * Set the value of poste_pere
	 *
	 * @return  self
	 */ 
	public function setPoste_pere($poste_pere)
	{
		$this->poste_pere = $poste_pere;

		return $this;
	}

	/**
	 * Get the value of poste_sous_pref
	 */ 
	public function getPoste_sous_pref()
	{
		return $this->poste_sous_pref;
	}

	/**
	 * Set the value of poste_sous_pref
	 *
	 * @return  self
	 */ 
	public function setPoste_sous_pref($poste_sous_pref)
	{
		$this->poste_sous_pref = $poste_sous_pref;

		return $this;
	}

	/**
	 * Get the value of poste_fkt
	 */ 
	public function getPoste_fkt()
	{
		return $this->poste_fkt;
	}

	/**
	 * Set the value of poste_fkt
	 *
	 * @return  self
	 */ 
	public function setPoste_fkt($poste_fkt)
	{
		$this->poste_fkt = $poste_fkt;

		return $this;
	}

	/**
	 * Get the value of poste_dist_fa_ou_amb
	 */ 
	public function getPoste_dist_fa_ou_amb()
	{
		return $this->poste_dist_fa_ou_amb;
	}

	/**
	 * Set the value of poste_dist_fa_ou_amb
	 *
	 * @return  self
	 */ 
	public function setPoste_dist_fa_ou_amb($poste_dist_fa_ou_amb)
	{
		$this->poste_dist_fa_ou_amb = $poste_dist_fa_ou_amb;

		return $this;
	}

	/**
	 * Get the value of poste_arret
	 */ 
	public function getPoste_arret()
	{
		return $this->poste_arret;
	}

	/**
	 * Set the value of poste_arret
	 *
	 * @return  self
	 */ 
	public function setPoste_arret($poste_arret)
	{
		$this->poste_arret = $poste_arret;

		return $this;
	}

	/**
	 * Get the value of poste_reste_a_pied
	 */ 
	public function getPoste_reste_a_pied()
	{
		return $this->poste_reste_a_pied;
	}

	/**
	 * Set the value of poste_reste_a_pied
	 *
	 * @return  self
	 */ 
	public function setPoste_reste_a_pied($poste_reste_a_pied)
	{
		$this->poste_reste_a_pied = $poste_reste_a_pied;

		return $this;
	}

	/**
	 * Get the value of poste_dist_inspect_post
	 */ 
	public function getPoste_dist_inspect_post()
	{
		return $this->poste_dist_inspect_post;
	}

	/**
	 * Set the value of poste_dist_inspect_post
	 *
	 * @return  self
	 */ 
	public function setPoste_dist_inspect_post($poste_dist_inspect_post)
	{
		$this->poste_dist_inspect_post = $poste_dist_inspect_post;

		return $this;
	}

	/**
	 * Get the value of poste_dist_moniteur_centre_formation
	 */ 
	public function getPoste_dist_moniteur_centre_formation()
	{
		return $this->poste_dist_moniteur_centre_formation;
	}

	/**
	 * Set the value of poste_dist_moniteur_centre_formation
	 *
	 * @return  self
	 */ 
	public function setPoste_dist_moniteur_centre_formation($poste_dist_moniteur_centre_formation)
	{
		$this->poste_dist_moniteur_centre_formation = $poste_dist_moniteur_centre_formation;

		return $this;
	}

	/**
	 * Get the value of poste_comm_rapide
	 */ 
	public function getPoste_comm_rapide()
	{
		return $this->poste_comm_rapide;
	}

	/**
	 * Set the value of poste_comm_rapide
	 *
	 * @return  self
	 */ 
	public function setPoste_comm_rapide($poste_comm_rapide)
	{
		$this->poste_comm_rapide = $poste_comm_rapide;

		return $this;
	}

	/**
	 * Get the value of poste_repere_topo
	 */ 
	public function getPoste_repere_topo()
	{
		return $this->poste_repere_topo;
	}

	/**
	 * Set the value of poste_repere_topo
	 *
	 * @return  self
	 */ 
	public function setPoste_repere_topo($poste_repere_topo)
	{
		$this->poste_repere_topo = $poste_repere_topo;

		return $this;
	}

	/**
	 * Get the value of poste_proprietaire_maison
	 */ 
	public function getPoste_proprietaire_maison()
	{
		return $this->poste_proprietaire_maison;
	}

	/**
	 * Set the value of poste_proprietaire_maison
	 *
	 * @return  self
	 */ 
	public function setPoste_proprietaire_maison($poste_proprietaire_maison)
	{
		$this->poste_proprietaire_maison = $poste_proprietaire_maison;

		return $this;
	}

	/**
	 * Get the value of poste_niveau
	 */ 
	public function getPoste_niveau()
	{
		return $this->poste_niveau;
	}

	/**
	 * Set the value of poste_niveau
	 *
	 * @return  self
	 */ 
	public function setPoste_niveau($poste_niveau)
	{
		$this->poste_niveau = $poste_niveau;

		return $this;
	}

	/**
	 * Get the value of poste_salaire_monitrice
	 */ 
	public function getPoste_salaire_monitrice()
	{
		return $this->poste_salaire_monitrice;
	}

	/**
	 * Set the value of poste_salaire_monitrice
	 *
	 * @return  self
	 */ 
	public function setPoste_salaire_monitrice($poste_salaire_monitrice)
	{
		$this->poste_salaire_monitrice = $poste_salaire_monitrice;

		return $this;
	}

	/**
	 * Get the value of poste_loyer_maison
	 */ 
	public function getPoste_loyer_maison()
	{
		return $this->poste_loyer_maison;
	}

	/**
	 * Set the value of poste_loyer_maison
	 *
	 * @return  self
	 */ 
	public function setPoste_loyer_maison($poste_loyer_maison)
	{
		$this->poste_loyer_maison = $poste_loyer_maison;

		return $this;
	}

	/**
	 * Get the value of poste_maj
	 */ 
	public function getPoste_maj()
	{
		return $this->poste_maj;
	}

	/**
	 * Set the value of poste_maj
	 *
	 * @return  self
	 */ 
	public function setPoste_maj($poste_maj)
	{
		$this->poste_maj = $poste_maj;

		return $this;
	}

	/**
	 * Get the value of poste_fiche_parrain
	 */ 
	public function getPoste_fiche_parrain()
	{
		return $this->poste_fiche_parrain;
	}

	/**
	 * Set the value of poste_fiche_parrain
	 *
	 * @return  self
	 */ 
	public function setPoste_fiche_parrain($poste_fiche_parrain)
	{
		$this->poste_fiche_parrain = $poste_fiche_parrain;

		return $this;
	}

	/**
	 * Get the value of moniteur_id
	 */ 
	public function getMoniteur_id()
	{
		return $this->moniteur_id;
	}

	/**
	 * Set the value of moniteur_id
	 *
	 * @return  self
	 */ 
	public function setMoniteur_id($moniteur_id)
	{
		$this->moniteur_id = $moniteur_id;

		return $this;
	}

	/**
	 * Get the value of inspecteur_id
	 */ 
	public function getInspecteur_id()
	{
		return $this->inspecteur_id;
	}

	/**
	 * Set the value of inspecteur_id
	 *
	 * @return  self
	 */ 
	public function setInspecteur_id($inspecteur_id)
	{
		$this->inspecteur_id = $inspecteur_id;

		return $this;
	}

	/**
	 * Get the value of poste_secteur
	 */ 
	public function getPoste_secteur()
	{
		return $this->poste_secteur;
	}

	/**
	 * Set the value of poste_secteur
	 *
	 * @return  self
	 */ 
	public function setPoste_secteur($poste_secteur)
	{
		$this->poste_secteur = $poste_secteur;

		return $this;
	}

	/**
	 * Get the value of site_id
	 */ 
	public function getSite_id()
	{
		return $this->site_id;
	}

	/**
	 * Set the value of site_id
	 *
	 * @return  self
	 */ 
	public function setSite_id($site_id)
	{
		$this->site_id = $site_id;

		return $this;
	}

	/**
	 * Get the value of poste_quartier
	 */ 
	public function getPoste_quartier()
	{
		return $this->poste_quartier;
	}

	/**
	 * Set the value of poste_quartier
	 *
	 * @return  self
	 */ 
	public function setPoste_quartier($poste_quartier)
	{
		$this->poste_quartier = $poste_quartier;

		return $this;
	}

	/**
	 * Get the value of poste_region
	 */ 
	public function getPoste_region()
	{
		return $this->poste_region;
	}

	/**
	 * Set the value of poste_region
	 *
	 * @return  self
	 */ 
	public function setPoste_region($poste_region)
	{
		$this->poste_region = $poste_region;

		return $this;
	}

	/**
	 * Get the value of poste_site
	 */ 
	public function getPoste_site()
	{
		return $this->poste_site;
	}

	/**
	 * Set the value of poste_site
	 *
	 * @return  self
	 */ 
	public function setPoste_site($poste_site)
	{
		$this->poste_site = $poste_site;

		return $this;
	}
}
?>
