<?php 
class Env_model extends CI_Model{
	public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
	  }
	
	  public function getPepOrSearchFilter(){
		if(!empty($this->input->get("search"))){
			$this->db->like('pep_espece', $this->input->get("search"));   
		  }
		$query = $this->db->get("pepiniere");
		return $query->result();
	}

	public function getAepOrSearchFilter(){
		if(!empty($this->input->get("search"))){
			$this->db->like('id', $this->input->get("search"));
			$this->db->or_like('aep_date', $this->input->get("search"));  
			$this->db->or_like('aep_parrain', $this->input->get("search"));  
			$this->db->or_like('aep_site', $this->input->get("search"));   
			$this->db->or_like('aep_poste', $this->input->get("search"));   
		  }
		$query = $this->db->get("aep");
		return $query->result();
	}
	public function getEnvOrSearch(){
		if(!empty($this->input->get("search"))){
			$this->db->like('id', $this->input->get("search"));
			$this->db->or_like('env_site', $this->input->get("search"));  
			$this->db->or_like('env_commune', $this->input->get("search"));  
			$this->db->or_like('env_annee_depart', $this->input->get("search"));   
			$this->db->or_like('env_bailleur', $this->input->get("search")); 
		  }
		$query = $this->db->get("environnement");
		return $query->result();
	}
	public function insertAep(){
		$data = array(
			'aep_date' => $this->input->post('aep_date'),
			'aep_poste' => $this->poste->findPoste($this->input->post('poste_id'))->poste_name,
			'aep_site' => $this->poste->findSite($this->input->post('site_id'))->site_name,
			'poste_id' => $this->input->post('poste_id'),
			'site_id' => $this->input->post('site_id'),
			'aep_description' => $this->input->post('aep_description'),
			'aep_parrain' => $this->input->post('aep_parrain'),
		);
		return $this->db->insert('aep', $data);
	}

	public function insertPep(){
		$id = $this->input->post('id');
		$data = array(
            'pep_date_maj' => $this->input->post('pep_date_maj'),
            'pep_espece' => $this->input->post('pep_espece'),
            'pep_fournisseur' => $this->input->post('pep_fournisseur'),
            'pep_date_acht_seed' => $this->input->post('pep_date_acht_seed'),
            'pep_qte_seed_acht' => $this->input->post('pep_qte_seed_acht'),
            'pep_date_semis' => $this->input->post('pep_date_semis'),
            'pep_date_menpot' => $this->input->post('pep_date_menpot'),
            'pep_nbr_menpot' => $this->input->post('pep_nbr_menpot'),
            'pep_entre_ext' => $this->input->post('pep_entre_ext'),
            'pep_morts' => $this->input->post('pep_morts'),
            'pep_vendue' => $this->input->post('pep_vendue'),
            'pep_shared' => $this->input->post('pep_shared'),
            'pep_pu' => $this->input->post('pep_pu'),
            'pep_mont_total' => $this->input->post('pep_mont_total'),
            'pep_stock_reel' => $this->input->post('pep_stock_reel'),
            'pep_note' => $this->input->post('pep_note'),
		);
		if (!empty($id)) {
			$this->db->where('id',$id);
			return $this->db->update('pepiniere',$data);
		  }else{
			return $this->db->insert('pepiniere', $data);
		  }
		
	}
	public function saveOrUpdateEnv()
	{
		$id = $this->input->post('id');
		$data = array(
            'site_id' => $this->input->post('site_id'),
			'commune_id' => $this->input->post('commune_id'), 
			'env_site' => $this->poste->findSite($this->input->post('site_id'))->site_name, 
			'env_commune' => $this->poste->findCommune($this->input->post('site_id'))->commune_name, 
			'env_annee_depart' => $this->input->post('env_annee_depart'), 
			'env_nb_arbre_2020' => $this->input->post('env_nb_arbre_2020'), 
			'env_nb_arbre_2021' => $this->input->post('env_nb_arbre_2021'), 
			'env_nb_arbre_2022' => $this->input->post('env_nb_arbre_2022'), 
			'env_nb_arbre_2023' => $this->input->post('env_nb_arbre_2023'), 
			'env_total_est_zone' => $this->input->post('env_total_est_zone'), 
			'env_date_dern_plant' => $this->input->post('communenv_date_dern_plante_id'), 
			'env_date_dern_visit' => $this->input->post('env_date_dern_visit'), 
			'env_taux_survie' => $this->input->post('env_taux_survie'), 
			'env_bailleur' => $this->input->post('env_bailleur'), 
			'env_obs_gal' => $this->input->post('env_obs_gal'), 
			
			//'aep_site' => $this->poste->findSite($this->input->post('site_id'))->site_name,
		);
		if (!empty($id)) {
			$this->db->where('id',$id);
			return $this->db->update('environnement',$data);
		  }else{
			return $this->db->insert('environnement', $data);
		  }

	}

	public function updateaep($data,$id){
		$this->db->where('id',$id);
        return $this->db->update('aep',$data);
	}
	public function updatepep($data,$id){
		$this->db->where('id',$id);
        return $this->db->update('pepiniere',$data);
	}
	public function deletePepiniere($id){
		return $this->db->delete('pepiniere', array('id' => $id));
	}
	public function deleteAep($id){
		return $this->db->delete('aep', array('id' => $id));
	}
}
?>
