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
		if(!empty($this->input->get("search"))){
			$this->db->like('conge_pers', $this->input->get("search"));
			$this->db->or_like('conge_motif', $this->input->get("search")); 
		  }
		  $query = $this->db->get("conge");
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
    public function saveOrUpdateCong()
    {
      $id = $this->input->post('id');
			$persname = $this->findPersById($this->input->post('pers_id'))->pers_name;
			$persfirstname = $this->findPersById($this->input->post('pers_id'))->pers_firstname;
      $data = array(
        'conge_motif' => $this->input->post('conge_motif'),
        'pers_firstname' => $this->input->post('pers_firstname'),
        'pers_sexe' => $this->input->post('pers_sexe'),
        'pers_date_birth' => $this->input->post('pers_date_birth'),
        );
      if (!empty($id)) {
        $this->db->where('id',$id);
        return $this->db->update('personal',$data);
      }else{
        return $this->db->insert('personal', $data);
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

		public function calculateAge($date){
			$now = new DateTime('now');
			$from = new DateTime($date);
			return $from->diff($now)->y;
		}
    
}
