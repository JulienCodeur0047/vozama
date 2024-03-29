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
			'poste_id' => $this->input->post('poste_id'),
			'note_poste' => $this->input->post('note_poste'),
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
		if( !empty($this->input->post("poste_id")) ){
			$this->db->where('poste_id',$this->input->post("poste_id"));
		}
		if( !empty($this->input->post("note_eleve_classe")) ){
			$this->db->where('note_eleve_classe',$this->input->post("eleve_classe"));
		}
		if( !empty($this->input->post("note_trimestre")) ){
			$this->db->where('note_trimestre',$this->input->post("note_trimestre"));
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
		if( !empty($this->input->post("poste_id")) ){
			$this->db->where('poste_id',$this->input->post("poste_id"));
		}
		if( !empty($this->input->post("eleve_classe")) ){
			$this->db->where('eco_el_classe',$this->input->post("eleve_classe"));
		}
		  $query = $this->db->get("ecolage");
		  return $query->result();
	}
	public function getOrSearchMoniteur()
	{
      if(!empty($this->input->get("search"))){
			$this->db->like('moniteur_matricule', $this->input->get("search"));
			$this->db->or_like('moniteur_name', $this->input->get("search")); 
			$this->db->or_like('moniteur_firstname', $this->input->get("search")); 
			$this->db->or_like('moniteur_poste', $this->input->get("search")); 
		  }
		  if( !empty($this->input->post("poste_id")) ){
			$this->db->where('poste_id',$this->input->post("poste_id"));
		}
		  $query = $this->db->get("moniteur");
		  return $query->result();
	}
	public function getSearchEleve()
	{
      if(!empty($this->input->get("search"))){
			$this->db->like('eleve_name', $this->input->get("search"));
			$this->db->or_like('eleve_firstname', $this->input->get("search")); 
		  }
	if( !empty($this->input->post("poste_id")) ){
		$this->db->where('poste_id',$this->input->post("poste_id"));
	}
	if( !empty($this->input->post("eleve_classe")) ){
		$this->db->where('eleve_classe',$this->input->post("eleve_classe"));
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
	public function resetElNote($id)
	{
		$data = array(
			'eleve_m1' => NULL,
			'eleve_m2' => NULL,
			'eleve_m3' => NULL,
			'eleve_mg' => NULL);
			$this->db->where('id',$id);
			return $this->db->update('eleve',$data);
		
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

			'eco_poste' => $this->input->post('eco_poste'),
			'poste_id' => $this->input->post('poste_id'),
			'eco_annee' => $this->input->post('eco_annee'),
			'eco_date' => $this->input->post('eco_date'),
			'eco_el_classe' => $this->input->post('eco_el_classe'),


		);

		if(!empty($this->checkEcolage($idEleve,
		$this->input->post('eco_mois'),
		$this->input->post('eco_annee')))){
			return "Ecolage mois de ". $this->input->post('eco_mois') ." ".$this->input->post('eco_annee') ." pour l'eleve selectionner est deja payer";
		}else {
			$this->db->insert('ecolage', $data);
		}
			
		
	}
	public function saveOrUpdateMoniteur()
	{
		$id = $this->input->post('id');
		$data = array(
			'moniteur_matricule' => $this->input->post('moniteur_matricule'),
			'moniteur_name' => $this->input->post('moniteur_name'),
			'moniteur_firstname' => $this->input->post('moniteur_firstname'),
			'moniteur_etat' => $this->input->post('moniteur_etat'),
			'moniteur_address' => $this->input->post('moniteur_address'),
			'moniteur_religion' => $this->input->post('moniteur_religion'),
			'moniteur_profession' => $this->input->post('moniteur_profession'),
			'moniteur_date_entre_voz' => $this->input->post('moniteur_date_entre_voz'),
			'moniteur_date_nais' => $this->input->post('moniteur_date_nais'),
			'moniteur_tel' => $this->input->post('moniteur_tel'),
			'moniteur_cin' => $this->input->post('moniteur_cin'),
			'moniteur_date_liv_cin' => $this->input->post('moniteur_date_liv_cin'),
			'moniteur_lieu_deliv_cin' => $this->input->post('moniteur_lieu_deliv_cin'),
			'moniteur_nbr_enfant' => $this->input->post('moniteur_nbr_enfant'),
			'moniteur_nbr_charge' => $this->input->post('moniteur_nbr_charge'),
			'moniteur_nv_etude' => $this->input->post('moniteur_nv_etude'),
			'moniteur_diplome' => $this->input->post('moniteur_diplome'),
			'moniteur_lieu_etude' => $this->input->post('moniteur_lieu_etude'),
			'moniteur_resource' => $this->input->post('moniteur_resource'),
			'poste_id' => $this->input->post('poste_id'),
			'moniteur_poste' => $this->poste->findPoste($this->input->post('poste_id'))->poste_name, //xx
		);
		if (!empty($id)) {
			$this->db->where('id',$id);
			return $this->db->update('moniteur',$data);
		}else{
			return $this->db->insert('moniteur', $data);
		}
	}
	public function deleteDn($id){
		return $this->db->delete('note_eleve', array('id' => $id));
	}
	public function deleteMoniteur($id){
		return $this->db->delete('moniteur', array('id' => $id));
	}
	public function checkEcolage($idEl, $mois, $annee)
	{
		$this->db->where('eleve_id',$idEl);
		$this->db->where('eco_mois',$mois);
		$this->db->where('eco_annee',$annee);
		$query = $this->db->get('ecolage');
		return $query->result();
	}

	public function deleteEcolage($id){
		return $this->db->delete('ecolage', array('id' => $id));
	  }
}
?>
