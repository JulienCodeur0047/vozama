<?php
class Com_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	  }
	  public function getAllComSearch()
	  {
		  # code...
	  }
	  public function getComById($id)
	  {
		  # code...
	  }
	  public function insertCom()
	  {
		  # code...
	  }
	  public function saveParr()
	  {
		$id = $this->input->post('id');
		$parraine = $this->input->post('poste_parraine') ;
		if ($parraine==null) {
			$parraine = "non";
		}
		$data = array(
			'poste_parraine' => $parraine ,
			'poste_parrain' => $this->input->post('poste_parrain') ,
			'paste_date_parr' => $this->input->post('paste_date_parr') ,
			);
			if(!empty($id)){
				$this->db->where('id',$id);
				return $this->db->update('poste',$data);
		}
	  }

	  public function savePart()
	  {
		$id = $this->input->post('id');
		$type = $this->input->post('poste_partenair_type') ;
		$libPub = $this->input->post('libellepublic') ;
		$libPrive = $this->input->post('libelleprive') ;
		$soucntr = $this->input->post('poste_part_contrat');
		$annulePart = $this->input->post('annule_part');
		
		var_dump($annulePart);
		//die;

		if ($annulePart== "oui") {
			$data = array(
				'poste_partenair_libelle' => null ,
				'poste_partenair_type' => null ,
				'poste_part_contrat' => "non" ,
				'poste_partenariat' => "non" ,
				'poste_part_dur_contrat' => null ,
				);
			if(!empty($id)){
					$this->db->where('id',$id);
					return $this->db->update('poste',$data);
			}
		}else{
			if ($soucntr==null) {
				$soucntr = "non";
			}
	
			if ($type == "Publique") {
				$data = array(
					'poste_partenair_libelle' => $libPub ,
					'poste_partenair_type' => $type ,
					'poste_part_contrat' => $soucntr ,
					'poste_partenariat' => "oui" ,
					'poste_part_dur_contrat' => $this->input->post('poste_part_dur_contrat') ,
					);
				if(!empty($id)){
						$this->db->where('id',$id);
						return $this->db->update('poste',$data);
				}
			}
			if ($type == "Privé") {
				$data = array(
					'poste_partenair_libelle' => $libPrive ,
					'poste_partenair_type' => $type ,
					'poste_partenariat' => "oui" ,
					'poste_part_contrat' => $soucntr,
					'poste_part_dur_contrat' => $this->input->post('poste_part_dur_contrat') ,
					);
				if(!empty($id)){
						$this->db->where('id',$id);
						return $this->db->update('poste',$data);
				}
			}
		}
		

	  }
	  public function printParr()
	  {
		if(!empty($this->input->post("poste_parraine"))){
			$this->db->like('poste_parraine', $this->input->post("poste_parraine"));
		}
		  $query = $this->db->get("poste");
		  return $query->result();
	  }
	  public function printPart()
	  {
		if(!empty($this->input->post("poste_partenariat"))){
			$this->db->where('poste_partenariat', $this->input->post("poste_partenariat"));
		}
		if(!empty($this->input->post("poste_partenair_type"))){
			$this->db->where('poste_partenair_type', $this->input->post("poste_partenair_type"));
		}
		if(!empty($this->input->post("poste_part_contrat"))){
			$this->db->where('poste_part_contrat', $this->input->post("poste_part_contrat"));
		}
		  $query = $this->db->get("poste");
		  return $query->result();
	  }
}
?>