<?php
class Sec_model extends CI_Model{
    public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	  } 
	
	  public function getOrSearchVis()
	  {
		if(!empty($this->input->get("search"))){
			$this->db->like('vis_name', $this->input->get("search"));
			$this->db->or_like('vis_firstname', $this->input->get("search")); 
			$this->db->or_like('vis_objectif', $this->input->get("search")); 
			$this->db->or_like('vis_cin', $this->input->get("search")); 
		  }
		/*if(!empty($this->input->post("socn_platform"))){
			$this->db->where('socn_platform', $this->input->post("socn_platform"));
		}*/
		  $query = $this->db->get("visiteur");
		  return $query->result();
	  }

	  public function saveOrUpdateVis()
	  {
		$id = $this->input->post('id');
		$data = array(
		'vis_name' => $this->input->post('vis_name'),
		'vis_firstname' => $this->input->post('vis_firstname'),
		'vis_cin' => $this->input->post('vis_cin'),
		'vis_objectif' => $this->input->post('vis_objectif'),
		'vis_hr_in' => $this->input->post('vis_hr_in'),
		'vis_hr_o' => $this->input->post('vis_hr_o'),
		'vis_date' => $this->input->post('vis_date'),
		'vis_num_badge' => $this->input->post('vis_num_badge'),
		);
		
		if(!empty($id)){
			$dataHRs = array(
				'vis_name' => $this->input->post('vis_name'),
				'vis_hr_o' => $this->input->post('vis_hr_o'),
				);
			$this->db->where('id',$id);
			return $this->db->update('visiteur',$dataHRs);
		}else{
			return $this->db->insert('visiteur', $data);
		}
	  }
	  public function deleteVis($id)
	  {
		return $this->db->delete('visiteur', array('id' => $id));
	  }
	  public function printVis()
	  {
		$first_date = $this->input->post('date_i');
		$second_date = $this->input->post('date_f');
		if (!empty($first_date)&&!empty($second_date)) {
			$this->db->where('vis_date >=', $first_date);
			$this->db->where('vis_date <=', $second_date);
		}
		  $query = $this->db->get("visiteur");
		  return $query->result();
	  }
	  public function printPass()
	  {
		  $query = $this->db->get("passgard");
		  return $query->result();
	  }
	  public function getOrSearchPass()
	  {
		if(!empty($this->input->get("search"))){
			$this->db->like('pass_name_firstname', $this->input->get("search"));
			$this->db->or_like('pass_obejt', $this->input->get("search"));
		  }
		
		  $query = $this->db->get("passgard");
		  return $query->result();
	  }
	  public function saveOrUpdatePass()
	  {
		$id = $this->input->post('id');
		$data = array(
		'pass_name_firstname' => $this->input->post('pass_name_firstname'),
		'pass_date_dep' => $this->input->post('pass_date_dep'),
		'pass_hr_dep' => $this->input->post('pass_hr_dep'),
		'pass_hr_rem' => $this->input->post('pass_hr_rem'),
		'pass_date_rem' => $this->input->post('pass_date_rem'),
		'pass_obejt' => $this->input->post('pass_obejt'),
		);
		
		if(!empty($id)){
			$this->db->where('id',$id);
			return $this->db->update('passgard',$data);
		}else{
			return $this->db->insert('passgard', $data);
		}
	  }
	  public function deletePass($id)
	  {
		return $this->db->delete('passgard', array('id' => $id));
	  }

	  ////
	  //// plannning
	  function fetch_all_event(){
		$this->db->order_by('id');
		return $this->db->get('events');
	   }
	  
	   function insert_event($data)
	   {
		$this->db->insert('events', $data);
	   }
	  
	   function update_event($data, $id)
	   {
		$this->db->where('id', $id);
		$this->db->update('events', $data);
	   }
	  
	   function delete_event($id)
	   {
		$this->db->where('id', $id);
		$this->db->delete('events');
	   }
	   //// planning
}