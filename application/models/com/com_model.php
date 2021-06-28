<?php
class Com_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	  }

	  public function saveOrUpdateRes()
	  {
		$id = $this->input->post('id');
		$data = array(
		'socn_titre' => $this->input->post('socn_titre'),
		'socn_article' => $this->input->post('socn_article'),
		'socn_platform' => $this->input->post('socn_platform'),
		'socn_date_pub' => $this->input->post('socn_date_pub'),
		'socn_hr_pub' => $this->input->post('socn_hr_pub'),
		'socn_vd_ref_pub' => $this->input->post('socn_vd_ref_pub'),
		'socn_vd_pub_nbr' => $this->input->post('socn_vd_pub_nbr'),
		'socn_ph_ref_pub' => $this->input->post('socn_ph_ref_pub'),
		'socn_ph_pub_nbr' => $this->input->post('socn_ph_pub_nbr'),
		'socn_lien_web' => $this->input->post('socn_lien_web'),
		);
		if(!empty($id)){
			$this->db->where('id',$id);
			return $this->db->update('soc_network',$data);
		}else{
			return $this->db->insert('soc_network', $data);
		}
	  }
	  public function deleteRes($id)
	  {
		return $this->db->delete('soc_network', array('id' => $id));
	  }
	  public function getResOrSearch()
	  {
		if(!empty($this->input->get("search"))){
			$this->db->like('socn_titre', $this->input->get("search"));
			$this->db->or_like('socn_article', $this->input->get("search")); 
			$this->db->or_like('socn_platform', $this->input->get("search")); 
			$this->db->or_like('socn_date_pub', $this->input->get("search")); 
			$this->db->or_like('socn_hr_pub', $this->input->get("search")); 
			$this->db->or_like('socn_lien_web', $this->input->get("search")); 
		  }
		if(!empty($this->input->post("socn_platform"))){
			$this->db->where('socn_platform', $this->input->post("socn_platform"));
		}
		  $query = $this->db->get("soc_network");
		  return $query->result();
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
	  public function printRes()
	  {
		if(!empty($this->input->post("socn_platform"))){
			$this->db->where('socn_platform', $this->input->post("socn_platform"));
		}
		  $query = $this->db->get("soc_network");
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
