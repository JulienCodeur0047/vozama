<?php 
class Env_model extends CI_Model{
	public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
	  }
	
	  public function getPepOrSearchFilter(){
		if(!empty($this->input->get("search"))){
			$this->db->like('pep_type', $this->input->get("search"));
			$this->db->or_like('pep_poste', $this->input->get("search"));  
			$this->db->or_like('pep_site', $this->input->get("search"));  
			$this->db->or_like('pep_libelle', $this->input->get("search"));   
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
		$data = array(
            'pep_type' => $this->input->post('pep_type'),
            'pep_poste' => $this->poste->findPoste($this->input->post('poste_id'))->poste_name,
            'pep_site' => $this->poste->findSite($this->input->post('site_id'))->site_name,
            'poste_id' => $this->input->post('poste_id'),
            'site_id' => $this->input->post('site_id'),
            'pep_libelle' => $this->input->post('pep_libelle'),
            'pep_date' => $this->input->post('pep_date'),
            'pep_qte' => $this->input->post('pep_qte'),
            'pep_durre_porjet' => $this->input->post('pep_durre_porjet'),
            'pep_description' => $this->input->post('pep_description'),
            'pep_surface' => $this->input->post('pep_surface'),
            'pep_prix' => $this->input->post('pep_prix'),
            'pep_taille' => $this->input->post('pep_taille'),
		);
		return $this->db->insert('pepiniere', $data);
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
