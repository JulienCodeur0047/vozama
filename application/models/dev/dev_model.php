<?php
class Dev_model extends CI_Model{


	public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('poste/Eleve_model','eleve');
	  }

	  public function getDevOrSearchAp()
	  {
		if(!empty($this->input->get("search"))){
			$this->db->like('eleve_name', $this->input->get("search"));
			$this->db->or_like('eleve_firstname', $this->input->get("search"));  
			$this->db->or_like('eleve_matricule', $this->input->get("search"));  
		  }
		if(!empty($this->input->post("postfilter"))){
			$this->db->like('poste_id', $this->input->post("postfilter"));
		  }
		if(!empty($this->input->get("secteurfilter"))){
			$this->db->like('eleve_secteur', $this->input->get("secteurfilter")); 
		  }
		$query = $this->db->get("eleve");
		return $query->result();
	  }

	  public function getDevApByPost($idPoste)
	  {
		  # code...
	  }
	  public function getDevApByDate($date)
	  {
		  # code...
	  }
	  public function getDevApById($id)
	  {
		  # code...
	  }
	  public function getCmOrSearchAp()
	  {
		  # code...
	  }
	  public function getDevCmByTitre($titre)
	  {
		  # code...
	  }

	  public function getDevCmById($id)
	  {
		  # code...
	  }
	  public function delCm($id)
	  {
		  # code...
	  }
	  public function delAp($id)
	  {
		  # code...
	  }
	  public function insertDev()
	  {
		  # code...
	  }
}
?>
