<?php
class Suiv_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	}

    public function saveOrUpdateNote()
    {
		$nbr = 0;
		$somme = 0;
		$id = $this->input->post('id');
		$id_eleve = $this->input->post('eleve_id');
		$trimcode = $this->input->post('note_trimestre');
		for ($j=1; $j <=8 ; $j++) { 
			if ($this->input->post('note_mat'.$j)!=NULL) {
				$nbr++; // 
				$somme = $somme + $this->input->post('note_mat'.$j);
				
			}
		}
		$data = array(
			'note_eleve' => $this->input->post('note_eleve'),
			'eleve_id' => $this->input->post('eleve_id'),
			'note_eleve_classe' => $this->input->post('note_eleve_classe'),
			'note_trimestre' => $this->input->post('note_trimestre'),
			'note_trimestre_annee' => $this->input->post('note_trimestre_annee'),
			//TRIMESTRE
			'note_mat1' => $this->input->post('note_mat1'),
			'note_mat2' => $this->input->post('note_mat2'),
			'note_mat3' => $this->input->post('note_mat3'),
			'note_mat4' => $this->input->post('note_mat4'),
			'note_mat5' => $this->input->post('note_mat5'),
			'note_mat6' => $this->input->post('note_mat6'),
			'note_mat7' => $this->input->post('note_mat7'),
			'note_mat8' => $this->input->post('note_mat8'),
			'note_moyenne' => $somme/$nbr,);
			if (!empty($id)) {
				$this->db->where('id',$id);
				return $this->db->update('note_eleve',$data);
			}else{
				$this->updateEleveNote($id_eleve,$trimcode,$somme/$nbr);
				return $this->db->insert('note_eleve', $data);
			}
    }
	public function getOrSearchNote()
	{
      if(!empty($this->input->get("search"))){
			$this->db->like('note_eleve', $this->input->get("search"));
			$this->db->or_like('note_trimestre', $this->input->get("search")); 
			$this->db->or_like('note_trimestre_annee', $this->input->get("search")); 
		  }
		  $query = $this->db->get("note_eleve");
		  return $query->result();
	}
	public function getOrSearchEcolage()
	{
      if(!empty($this->input->get("search"))){
			$this->db->like('eco_el_nom', $this->input->get("search"));
			$this->db->or_like('eco_el_prenoms', $this->input->get("search")); 
			$this->db->or_like('eco_mois', $this->input->get("search")); 
			$this->db->or_like('eco_type', $this->input->get("search")); 
		  }
		  $query = $this->db->get("ecolage");
		  return $query->result();
	}
	public function getSearchEleve()
	{
      if(!empty($this->input->get("search"))){
			$this->db->like('eleve_name', $this->input->get("search"));
			$this->db->or_like('eleve_firstname', $this->input->get("search")); 
		  }
		  $query = $this->db->get("eleve");
		  	return $query->result();
		  
		  
	}
	public function getNote($eleveId)
	{
		$this->db->where('eleve_id',$eleveId);
		$query = $this->db->get("note");
		  return $query->result();
	}
    public function updateEleveNote($id,$trimcode,$valeur)
	{
		$datatrimestre = array(
			'eleve_m'.$trimcode => $valeur,
		);
		$this->db->where('id',$id);
		$this->db->update('eleve',$datatrimestre);

		$M1 = $this->eleve->getEleveById($id)->eleve_m1;
		$M2 = $this->eleve->getEleveById($id)->eleve_m2;
		$M3 = $this->eleve->getEleveById($id)->eleve_m3;
		
		$Mg = ($M1 + $M2 + $M3) / 3;
		$data = array(
			'eleve_m1' => $M1,
			'eleve_m2' => $M2,
			'eleve_m3' => $M3,
			'eleve_mg' => $Mg,
		);
		
		$this->db->where('id',$id);
		return $this->db->update('eleve',$data);
	}
	public function saveElNote()
	{
		
	}
	public function saveOrUpdateEcolage()
	{
		$id = $this->input->post('id');
		$idEleve = $this->input->post('eleve_id');
		$eleve = $this->eleve->getEleveById($idEleve);
		$data = array(
			'eleve_id' => $idEleve,
			'eco_el_nom' => $eleve->eleve_name,
			'eco_el_prenoms' => $eleve->eleve_firstname,
			'eco_type' => $this->input->post('eco_type'),
			'eco_mois' => $this->input->post('eco_mois'),
			'eco_montant' => $this->input->post('eco_montant'),
			'eco_libelle_type' => $this->input->post('eco_libelle_type'),
			'eco_observation' => $this->input->post('eco_observation'),
		);
		if (!empty($id)) {
			$this->db->where('id',$id);
			return $this->db->update('ecolage',$data);
		}else{
			return $this->db->insert('ecolage', $data);
		}
	}
}
?>
