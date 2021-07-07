<?php
class Entre_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	  }

	  public function getDepOrSearch()
	  {
		if(!empty($this->input->get("search"))){
			$this->db->like('dep_name', $this->input->get("search"));
			$this->db->or_like('dep_number', $this->input->get("search")); 
			$this->db->or_like('dep_type', $this->input->get("search")); 
		  }
		  $query = $this->db->get("department");
		  return $query->result();
	  }
    public function getConOrSearch()
	  {
			$dep = $this->input->post("dep_id");
			if(!empty($this->input->get("search"))){
				$this->db->like('conge_pers', $this->input->get("search"));
				$this->db->or_like('conge_motif', $this->input->get("search")); 
				}
			if(!empty($dep)){
        $this->db->where('dep_id', $dep);
      }
		  $query = $this->db->get("conge");
		  return $query->result();
	  }
		public function getBienOrSearch()
	  {
			$dep = $this->input->post("dep_id");
			$type = $this->input->post("bien_type");

			if(!empty($this->input->get("search"))){
				$this->db->like('bien_name', $this->input->get("search"));
				$this->db->or_like('bien_resp', $this->input->get("search")); 
				$this->db->or_like('bien_type', $this->input->get("search")); 
				$this->db->or_like('bien_dep', $this->input->get("search")); 
				$this->db->or_like('bien_mat', $this->input->get("search")); 
				}
				if(!empty($dep)){
					$this->db->where('dep_id', $dep);
				}
				if(!empty($type)){
					$this->db->where('bien_type', $type);
				}
		  $query = $this->db->get("bien");
		  return $query->result();
	  }

		public function getPersOrSearch()
	  {
      $type = $this->input->post("pers_type");
      $dep = $this->input->post("pers_dep");
      $contrat = $this->input->post("pers_contrat");
		if(!empty($this->input->get("search"))){
			$this->db->like('pers_name', $this->input->get("search"));
			$this->db->or_like('pers_firstname', $this->input->get("search"));
			$this->db->or_like('pers_type', $this->input->get("search")); 
			$this->db->or_like('pers_contrat', $this->input->get("search")); 
			$this->db->or_like('pers_dep', $this->input->get("search")); 
			$this->db->or_like('pers_cot_social', $this->input->get("search")); 
		  }
      if(!empty($dep)){
        $this->db->where('pers_dep', $dep);
      }
      if(!empty($type)){
        $this->db->where('pers_type', $type);
      }
      if(!empty($contrat)){
        $this->db->where('pers_contrat', $contrat);
      }
		  $query = $this->db->get("personal");
		  return $query->result();
	  }

	public function saveOrUpdateDep()
    {
      $id = $this->input->post('id');
      $data = array(
        'dep_name' => $this->input->post('dep_name'),
        'dep_number' => $this->input->post('dep_number'),
        'dep_type' => $this->input->post('dep_type'),
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('department',$data);
      }else{
        return $this->db->insert('department', $data);
      }
    }
		public function saveOrUpdatePers()
    {
      $id = $this->input->post('id');
			$depname = $this->findDepById($this->input->post('dep_id'))->dep_name;
      $data = array(
        'pers_name' => $this->input->post('pers_name'),
        'pers_firstname' => $this->input->post('pers_firstname'),
        'pers_sexe' => $this->input->post('pers_sexe'),
        'pers_date_birth' => $this->input->post('pers_date_birth'),
        'pers_age' => $this->calculateAge($this->input->post('pers_date_birth')),
        'pers_type' => $this->input->post('pers_type'),
        'pers_contrat' => $this->input->post('pers_contrat'),
        'pers_cot_social' => $this->input->post('pers_cot_social'),
        'pers_cin' => $this->input->post('pers_cin'),
        'pers_address' => $this->input->post('pers_address'),
        'pers_sm' => $this->input->post('pers_sm'),
        'pers_phone' => $this->input->post('pers_phone'),
        'pers_mail' => $this->input->post('pers_mail'),
        'pers_date_arrived' => $this->input->post('pers_date_arrived'),
        'pers_date_gone' => $this->input->post('pers_date_gone'),
        'pers_dep' => $depname,
        'dep_id' => $this->input->post('dep_id'),
        'pers_dr_conge' => $this->input->post('pers_dr_conge'), 
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('personal',$data);
      }else{
        return $this->db->insert('personal', $data);
      }
    }
		public function saveOrUpdateBien()
    {
      $id = $this->input->post('id');
			$depname = $this->findDepById($this->input->post('dep_id'))->dep_name;
      $data = array(
        'bien_name' => $this->input->post('bien_name'),
        'bien_date_arrive' => $this->input->post('bien_date_arrive'),
        'bien_resp' => $this->input->post('bien_resp'),
        'bien_date_disf' => $this->input->post('bien_date_disf'),
        'bien_type' => $this->input->post('bien_type'),
        'dep_id' => $this->input->post('dep_id'),
        'bien_dep' => $depname,
        'bien_mat' => $this->input->post('bien_mat'),
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('bien',$data);
      }else{
        return $this->db->insert('bien', $data);
      }
    }
    public function saveOrUpdateCong()
    {
      $id = $this->input->post('id');
			$currentpers = $this->findPersById($this->input->post('pers_id'));
			$persname = $currentpers->pers_name;
			$persfirstname = $currentpers->pers_firstname;
			$dep_id = $currentpers->dep_id;

			$nbrjr = $this->input->post('conge_nbr_day');
			$prixdroit = $this->input->post('conge_droit');
			$prixcong = $prixdroit*$nbrjr;
      $data = array(
        'conge_motif' => $this->input->post('conge_motif'),
        'conge_pers' => $persname." ".$persfirstname,
				'pers_id' => $this->input->post('pers_id'),
        'conge_date_start' => $this->input->post('conge_date_start'),
        'conge_date_end' => $this->input->post('conge_date_end'),
				'conge_date_reprise' => $this->input->post('conge_date_reprise'),
        'conge_nbr_day' => $nbrjr,
        'conge_price' => $prixcong,
        'conge_droit' => $prixdroit,
        'dep_id' => $dep_id,
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('conge',$data);
      }else{
        return $this->db->insert('conge', $data);
      }
    }
		public function findDepById($id)
		{
			return $this->db->get_where('department', array('id' => $id))->row();

		}
    public function findPersById($id)
		{
			return $this->db->get_where('personal', array('id' => $id))->row();

		}
	  public function printDep()
    {
      $query = $this->db->get("department");
      return $query->result();
    }
    public function getPers()
    {
      $query = $this->db->get("personal");
      return $query->result();
    }
    public function deleteDep($id)
    {
      return $this->db->delete('department', array('id' => $id));
    }
		public function deletePers($id)
    {
      return $this->db->delete('personal', array('id' => $id));
    }
		public function deleteCong($id)
    {
      return $this->db->delete('conge', array('id' => $id));
    }
		public function deleteBien($id)
    {
      return $this->db->delete('bien', array('id' => $id));
    }
    public function printPers()
    {
      $type = $this->input->post("pers_type");
      $dep = $this->input->post("pers_dep");
      $contrat = $this->input->post("pers_contrat");
      if(!empty($dep)){
        $this->db->where('pers_dep', $dep);
      }
      if(!empty($type)){
        $this->db->where('pers_type', $type);
      }
      if(!empty($contrat)){
        $this->db->where('pers_contrat', $contrat);
      }
		  $query = $this->db->get("personal");
		  return $query->result();
    }
		public function printCong()
		{
			$dep = $this->input->post("dep_id");
			if(!empty($dep)){
        $this->db->where('dep_id', $dep);
      }
		  $query = $this->db->get("conge");
		  return $query->result();
		}
		public function printBien()
		{
			$dep = $this->input->post("dep_id");
			$type = $this->input->post("bien_type");
			if(!empty($dep)){
				$this->db->where('dep_id', $dep);
			}
			if(!empty($type)){
				$this->db->where('bien_type', $type);
			}
		  $query = $this->db->get("bien");
		  return $query->result();
		}
		public function calculateAge($date){
			$now = new DateTime('now');
			$from = new DateTime($date);
			return $from->diff($now)->y;
		}
    
}
