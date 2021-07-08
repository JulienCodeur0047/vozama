<?php 
class Eleve_model extends CI_Model{

	public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	  }

	public function getEleveOrSearchFilter(){
		if(!empty($this->input->get("search"))){
			$this->db->like('eleve_name', $this->input->get("search"));
			$this->db->or_like('eleve_firstname', $this->input->get("search"));  
			$this->db->or_like('eleve_matricule', $this->input->get("search"));  
			$this->db->or_like('eleve_poste', $this->input->get("search"));  
			$this->db->or_like('eleve_secteur', $this->input->get("search"));  
		  }
		if(!empty($this->input->post("site_id"))){
			$this->db->where('site_id', $this->input->post("site_id"));
		  }
		if(!empty($this->input->post("poste_id"))){
			$this->db->where('poste_id', $this->input->post("poste_id")); 
		  }
		$query = $this->db->get("eleve");
		return $query->result();
	}

	public function getEleveById($id){
		return $this->db->get_where('eleve', array('id' => $id))->row();
	}

	public function getEleveByPoste($poste_id){
		$this->db->where('poste_id', $poste_id);
		$query = $this->db->get("eleve");
		return $query->result();
	}
	public function getEleveByParent($parent_id){
		$this->db->where('parent_id', $parent_id);
		$query = $this->db->get("eleve");
		return $query->result();
	}
	public function getEleveCountByPoste($poste_id){
		$this->db->where('poste_id', $poste_id);
		return $this->db->count_all_results('eleve');
	}
	
	public function insertEleve(){
		$data = array(
		'eleve_matricule' => $this->input->post('eleve_matricule'),
		'eleve_name' => $this->input->post('eleve_name'),
		'eleve_firstname' => $this->input->post('eleve_firstname'),
		'eleve_poste' => $this->input->post('eleve_poste'),
		'eleve_sexe' => $this->input->post('eleve_sexe'),
		'eleve_date_birth' => $this->input->post('eleve_date_birth'),
		'eleve_lieu_naissance' => $this->input->post('eleve_lieu_naissance'),
		'eleve_adresse' => $this->input->post('eleve_adresse'),
		'eleve_situation' => $this->input->post('eleve_situation'),
		'eleve_date_entre' => $this->input->post('eleve_date_entre'),
		'eleve_classe' => $this->input->post('eleve_classe'),
		'eleve_age' => $this->calculateAge($this->input->post('eleve_date_birth')),
		'poste_id' => $this->input->post('poste_id')
		);
		return $this->db->insert('eleve', $data);
	}

	public function saveOrUpdateEleve(){
		$id = $this->input->post('id');

		$parent = $this->insertParentGetId();
		$parent_mom = $parent->parent_mere_name;
		$parent_pop = $parent->parent_pere_name;
		$parent_id = $parent->id;
		$data = array(
			'eleve_matricule' => $this->input->post('eleve_matricule'),
			'eleve_name' => $this->input->post('eleve_name'),
			'eleve_firstname' => $this->input->post('eleve_firstname'),
			'eleve_poste' => $this->poste->findPoste($this->input->post('poste_id'))->poste_name,
			'eleve_sexe' => $this->input->post('eleve_sexe'),
			'eleve_date_birth' => $this->input->post('eleve_date_birth'),
			'eleve_lieu_naissance' => $this->input->post('eleve_lieu_naissance'),
			'eleve_adresse' => $this->input->post('eleve_adresse'),
			'eleve_date_entre' => $this->input->post('eleve_date_entre'),
			'eleve_age' => $this->calculateAge($this->input->post('eleve_date_birth')),
			'poste_id' => $this->input->post('poste_id'),
			'eleve_mom' => $parent_mom,
			'eleve_dad' => $parent_pop,
			'parent_id' => $parent_id,
			'eleve_prof_parents' => $this->input->post('eleve_prof_parents'),
			'eleve_situation' => $this->input->post('eleve_situation'),
			'eleve_classe' => $this->input->post('eleve_classe'),
			'eleve_classe_passe' => $this->input->post('eleve_classe_passe'),
			'eleve_date_abandon' => $this->input->post('eleve_date_abandon'),
			'eleve_religion' => $this->input->post('eleve_religion'),
			'eleve_copie' => $this->input->post('eleve_copie'),
			'eleve_num_copie' => $this->input->post('eleve_num_copie'),
			'eleve_abr' => $this->input->post('eleve_abr'),
			);
			
			if (!empty($id)) {
				$this->db->where('id',$id);
				return $this->db->update('eleve',$data);
			  }else{
				return $this->db->insert('eleve', $data);
			  }
	}

	public function insertParentGetId()
	{
		$getCurrentParent = $this->findParentByName($this->input->post('eleve_mom'),$this->input->post('eleve_dad'));
		$data = array(
			'parent_mere_name' => $this->input->post('eleve_mom'),
			'parent_pere_name' => $this->input->post('eleve_dad'),
			'parent_pere_fonction' => $this->input->post('eleve_prof_parents'),
			);
		if($getCurrentParent == null) {
			$this->db->insert('parent', $data);
			$id = $this->db->insert_id();
			return $this->db->get_where('parent', array('id' => $id))->row();
		}else {
			$id = $getCurrentParent->id;
			return $this->db->get_where('parent', array('id' => $id))->row();
		}
	}

	public function findParentByName($mom, $dad)
	{
		$dada = $this->db->get_where('parent', array('parent_pere_name' => $dad))->row();
		$momo = $this->db->get_where('parent', array('parent_mere_name' => $mom))->row();
		if (empty($dada)&&empty($momo)) {
			return null;
		}else {
			if (!empty($dada)) {
				return $dada;
			}if (!empty($momo)) {
				return $momo;
			}
		}
	}
	public function deleteEleve($id){
		return $this->db->delete('eleve', array('id' => $id));
	}
	public function updatePoste($id){
		//TODO
	}
	public function calculateAge($date){
		$now = new DateTime('now');
		$from = new DateTime($date);
		return $from->diff($now)->y;
	}
}
?>
